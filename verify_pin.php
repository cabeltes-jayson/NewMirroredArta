<?php
session_start();

// Replace 'DOLEXCDOFO' with your actual PIN
$adminPin = 'DOLEXCDOFO';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enteredPin = $_POST['pin'];

    if ($enteredPin === $adminPin) {
        // Success
        $_SESSION['login_success'] = true;
        header('Location: form.html');
        exit();
    } else {
        // Failure: Set an error message and redirect back
        $_SESSION['error_message'] = 'Invalid PIN! Please try again.';
        header('Location: index.php'); // Redirect back to index
        exit();
    }
}

// Display Toastr and SweetAlert if there is an error
if (isset($_SESSION['error_message'])) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <title>Alert</title>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Error!',
                text: '" . $_SESSION['error_message'] . "',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then(() => {
                toastr.error('" . $_SESSION['error_message'] . "');
                window.location.href = 'index.php'; // Redirect back to index
            });
        </script>
    </body>
    </html>";

    unset($_SESSION['error_message']); // Clear the message after displaying
    exit();
}
?>
