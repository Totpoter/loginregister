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
    <div class="container">
      <form class="register" action="submit.php" method="post">
        <label for="username">Username:</label> <input type="username" name="username"><br>
        <label for="password">Password:</label> <input type="password" name="password"><br>
        <label for="email">Email:</label> <input type="email" name="email"><br>
        <input type="submit" value="Register">
      </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
