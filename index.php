<?php
$servername = "mysql_db";
$username = "root";
$password = "secret";

// Create connection
$conn = new mysqli($servername, $username, $password,'mysql');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>