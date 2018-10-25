<?php
include 'inc/connect.inc.php';
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){

  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $query = "INSERT INTO users (username,email,password) VALUES ('$username', '$email', '$password')";

  mysqli_query($conn, $query);

  header("Location: index.php");

  if(isset($_SESSION['login'])){
      if($_SESSION['login'] == true){
          header("location: index.php");
      }
  }
  else{
      $_SESSION['login'] = false;
  }
}
  if(isset($_POST['login_name']) && isset($_POST['login_password'])){
      $dbc_form = mysqli_connect("localhost","root","","v43_db");

      $uid = $_POST['login_name'];
      $pass = $_POST['login_password'];

      $query = "SELECT * FROM users WHERE username='$uid' AND password = '$pass'";

      $result = mysqli_query($dbc_form,$query);

      if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_array($result);

          $_SESSION['login'] = true;
          $_SESSION['login_name'] = $row['username'];
          header("location: index.php");
      }
      else{
          $_SESSION['login'] = false;
          $_SESSION['error'] = "FEL UPPGIFTER!";
          header("location: index.php");
      }

  }

?>
