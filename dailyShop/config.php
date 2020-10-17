<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$dbname='product';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  //echo "Connected successfully";
?>