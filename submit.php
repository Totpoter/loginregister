<?php
include 'inc/connect.inc.php';
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){

  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $query = "INSERT INTO users (username,email,password) VALUES ('$username', '$email', '$password')";

  mysqli_query($conn, $query);

  header("Location: index.php");

}
?>
