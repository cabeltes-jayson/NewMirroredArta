<?php
session_start();
include 'config.php';

function editRecord($table, $columns, $id, $successMessage, $errorMessage) {
    global $conn;

    // Dynamically build the SQL update query with placeholders
    $setClause = [];
    $bindTypes = ''; 
    $bindValues = []; 

    foreach ($columns as $column => $value) {
        $setClause[] = "$column = ?";
        // Dynamically determine the bind type based on the value's type
        if (is_int($value)) {
            $bindTypes .= 'i'; // integer
        } elseif (is_double($value)) {
            $bindTypes .= 'd'; // double
        } else {
            $bindTypes .= 's'; // string
        }
        $bindValues[] = $value;
    }

    $setClauseString = implode(", ", $setClause);

    // Construct the full SQL query
    $sql = "UPDATE $table SET $setClauseString WHERE tbl_user_id = ?";

    // Add 'i' for integer binding
    $bindTypes .= 'i'; 
    $bindValues[] = $id; // Bind the ID to the query

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param($bindTypes, ...$bindValues);

        // Execute the query
        if ($stmt->execute()) {
            $_SESSION['message'] = $successMessage;
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = $errorMessage . $conn->error;
            $_SESSION['message_type'] = "error";
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        $_SESSION['message'] = "Error preparing the SQL statement!";
        $_SESSION['message_type'] = "error";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_type'])) {
    $formType = $_POST['form_type'];

    if ($formType == 'update_user') {
        // Get the data from the form
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $num = $_POST['contact'];  // Changed to 'contact' as per the form
        $email = $_POST['email'];
        $office_address = $_POST['office'];
        $role = $_POST['role'];
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        // Check if a new password is provided, and hash it if so
        if (!empty($pass)) {
            $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);  // Hash the new password
        } else {
            // If password is empty, retain the current password (don't update it)
            $hashedPassword = null; // Will be handled in the SQL query later
        }

        // Prepare the columns and values for the update
        $columns = [
            'tbl_user_id' => $id,
            'first_name' => $fname,
            'last_name' => $lname,
            'contact_number' => $num,
            'office_address' => $office_address,
            'email' => $email,
            'username' => $uname,
            'user_role' => $role
        ];

        // Only add the hashed password to the columns if a new password is provided
        if ($hashedPassword) {
            $columns['password'] = $hashedPassword;
        }

        // Debugging: Check if $columns has correct data
        var_dump($columns); // This will print the content of $columns to the page, so you can inspect the values.

        // Use the editRecord function to update the user
        editRecord(
            'tbl_user',          // Table name
            $columns,            // Columns and their new values
            $id,                 // Pass the id directly
            "Your User Account updated successfully!",  // Success message
            "Notice! Error updating your user details! Please try again."  // Error message
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
