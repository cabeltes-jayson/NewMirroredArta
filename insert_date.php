<?php
// Retrieve the date sent from the client
$date = $_POST['date'];

// Insert the date into your database
// Example assuming you're using PDO for database operations
try {
  $pdo = new PDO('mysql:host=localhost;dbname=feedback', 'root', '');
  $stmt = $pdo->prepare("INSERT INTO poll (date) VALUES (:date)");
  $stmt->bindParam(':date', $date);
  $stmt->execute();
  echo "Date inserted into database successfully";
} catch (PDOException $e) {
  echo "Error inserting date into database: " . $e->getMessage();
}
?