<?php include 'inc/connect.inc.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Login / Register</title>
  </head>
  <body>
    <?php
    if(isset($_SESSION['login'])) {
      if($_SESSION['login'] == true) {
        echo "Välkommen " . $_SESSION['login_name'];
        ?>
    <p>INLOGGAD</p><br>
      <form action="logout.php">
      <input type="submit" value="Logga ut">
      </form>

      <?php
    }
     else {
      if(isset($_SESSION['error'])){
      echo $_SESSION['error']. "<br>";
      unset($_SESSION['error']);
    }
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
      <form class="forms" action="submit.php" method="post">
        <label for="username">Username:</label> <input type="username" name="username"><br>
        <label for="password">Password:</label> <input type="password" name="password"><br>
        <label for="email">Email:</label> <input type="email" name="email"><br>
        <input type="submit" value="Register">
      </form>
    </div>
    <div class="col-md-6">
      <form class="forms" action="submit.php" method="POST">
        <label for="username">Username:</label> <input type="username" name="login_name"><br>
        <label for="password">Password:</label> <input type="password" name="login_password"><br>
        <input class="submit" type="submit" value="Login">
      </form>
    </div>
  </div>
  <?php
    }
  }

      else {
        $_SESSION['login'] = false;
        header('Location: index.php');
      }

      ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
