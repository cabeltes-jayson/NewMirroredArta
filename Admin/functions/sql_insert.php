<?php
session_start();
include 'config.php';

// Function to handle the insert and set session messages
function insertRecord($table, $columns, $values, $successMessage, $errorMessage) {
    global $conn;

    // Sanitize and prepare the query
    $columnsString = implode(", ", array_keys($columns));
    $placeholders = implode(", ", array_fill(0, count($values), "?"));

    // Prepare the SQL statement
    $sql = "INSERT INTO $table ($columnsString) VALUES ($placeholders)";

    // Prepare the statement to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        // Bind the values dynamically based on their types
        $types = str_repeat('s', count($values)); // Assuming all values are strings, adjust types if needed
        $stmt->bind_param($types, ...array_values($values));

        // Execute the query and set session message based on the result
        if ($stmt->execute()) {
            $_SESSION['message'] = $successMessage;
            $_SESSION['message_type'] = "success"; // success type
            return $conn->insert_id; // Return the auto-generated ID (for order_id or customer_id)
        } else {
            $_SESSION['message'] = $errorMessage . $conn->error;
            $_SESSION['message_type'] = "error"; // error type
            return false;
        }
    } else {
        $_SESSION['message'] = "Error preparing the query: " . $conn->error;
        $_SESSION['message_type'] = "error";
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_type'])) {
    $formType = $_POST['form_type'];

if ($formType == 'add_user') {
    // Get the data from the form
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $num = $_POST['contact'];  // Changed to 'contact' as per the form
    $email = $_POST['email'];
    $office_address = $_POST['office'];
    $role = $_POST['role'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    

    // $regdate = date('Y-m-d H:i:s');  // datetime format
    $regdate = date('Y-m-d');

    // Hash the password before storing it
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    // Prepare the columns and values for the insert
    $columns = [
        'first_name' => $fname,
        'last_name' => $lname,
        'contact_number' => $num,
        'office_address' => $office_address,
        'email' => $email,
        'username' => $uname,
        'password' => $hashedPassword,
        'user_role' => $role,
        'reg_date' => $regdate  
    ];

    // Values corresponding to the columns
    $values = array_values($columns);

    // Use the insertRecord function to insert the new user
    insertRecord(
        'tbl_user',          // Table name
        $columns,            // Columns and their new values
        $values,             // Values for the insert
        "New User Account added successfully!",  // Success message
        "Error adding new user account! Please try again."  // Error message
    );


        header("Location: ../profile.php");
        exit();
    } else {
        $_SESSION['message'] = "Missing form data!";
        $_SESSION['message_type'] = "error";
        header("Location: ../profile.php");
        exit();
    }
} else {
    $_SESSION['message'] = "Invalid request!";
    $_SESSION['message_type'] = "error";
    header("Location: ../profile.php");
    exit();
}

$conn->close();
?>
