<?php
session_start(); // Ensure session is started

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tms_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname = $_POST['uname'];
$pass = $_POST['pass'];

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM login_user_tbl WHERE uname = ?");
$stmt->bind_param("s", $uname);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Retrieve the hashed password from the database
    $stored_hashed_password = $user['pass'];

    // Verify password using password_verify
    if (password_verify($pass, $stored_hashed_password)) {
        // Regenerate session ID to prevent session fixation
        session_regenerate_id(true);

        $_SESSION["id"] = $user['user_id'];
        $_SESSION["Name"] = $user['fullname'];
        $_SESSION["username"] = $uname;
        $_SESSION["role"] = $user['role'];
        $_SESSION["email"] = $user['email'];
        $_SESSION["contact"] = $user['contact_number'];
        $_SESSION["vcode"] = $user['verification_code'];

        // Redirect to the dashboard or homepage
        header('Location: index.php');
        exit();
    } else {
        // Password is incorrect
        showAlert('Invalid password!');
    }
} else {
    // Username does not exist
    showAlert('Invalid username!');
}

$stmt->close();
$conn->close();

// Function to show modern alert and redirect
function showAlert($message) {
    echo "<script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', function() {
            alert('$message');
            window.location.replace('login.php');
        });
    </script>";
}
?>
