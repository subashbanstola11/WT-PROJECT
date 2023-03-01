<?php
$servername = "localhost";
$username = "root";
$password = "";

// database
$db_name = 'testapp';

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  //echo "connection failed";
  echo "<script>console.log('connection failed')</script>";
} else { 
  //echo "Connected successfully";
  echo "<script>console.log('conneted successfully') </script>";
}
?>