<?php
$servername = "localhost";
$username = "spcom_userdolo";
$password = "2IM3NMVEB91C";
$dbname = "spcom_dolo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table

$sql = "CREATE TABLE likes (
id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userid INT(30) NOT NULL,
postid INT(30) NOT NULL
)";


if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>