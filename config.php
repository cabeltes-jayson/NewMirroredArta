

<?php
// Connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "if0_36144549_testing_db";

$conn = new mysqli($servername, $username, $password, $dbname);

  date_default_timezone_set("Asia/Manila");

// Check connection
if ($conn->connect_error) {
  
   die("Connection failed: " . $conn->connect_error);
}

?>