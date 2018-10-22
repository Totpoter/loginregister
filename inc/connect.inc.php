<?php
session_start();
  $conn = mysqli_connect("127.0.0.1", "root", "", "v43_db");
  if(!$conn) {
    echo "Could not connect to database.";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }
?>
