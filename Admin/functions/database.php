<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "if0_36144549_testing_db";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

?>
