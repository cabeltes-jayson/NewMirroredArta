<?php
require 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user's email from the form
    $email = $_POST['email'];

    // Generate a random verification code
    $verification_code = rand(100000, 999999); // Generate a 6-digit code

    // Send the verification code to the user's email
    $to = $email;
    $subject = "Verification Code for Login";
    $message = "Your verification code is: $verification_code";
    $headers = "From: christianjanescol40@gmail.com"; // Replace with your Gmail address

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "A verification code has been sent to your email. Please check your inbox.";
        // You can store the verification code in a session or database for later verification
        session_start();
        $_SESSION['verification_code'] = $verification_code;
        $_SESSION['email'] = $email;
    } else {
        // Failed to send email
        echo "Failed to send verification code. Please try again later.";
    }
}
?>
