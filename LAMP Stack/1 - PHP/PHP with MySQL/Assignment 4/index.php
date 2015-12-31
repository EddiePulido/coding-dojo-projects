<?php

  session_start();
  if(!isset($_SESSION['error'])){
    $_SESSION['error'] = array();
    $_SESSION['logged_on'] = false;
  }
  if($_SESSION['logged_on'] == true){
    header("location: main.php");
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login and Registration </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>Welcome to Login and Registration </h1>

      <div class="register-or-login">

        <form class="register" action="process.php" method="post">
          <h2>Register</h2>
          <input type="hidden" name="user" value="register">
          First Name: <input type="text" name="first_name"><br>
          Last Name: <input type="text" name="last_name"><br>
          Email: <input type="text" name="email"><br>
          Username: <input type="password" name="username"><br>
          Password: <input type="password" name="pass"><br>
          Confirm Password: <input type="text" name="check_pass"><br>
          <input type="submit" value="Register">
        </form>

        <form class="login" action="process.php" method="post">
          <h2>Login</h2>
          <input type="hidden" name="user" value="login">
          Email: <input type="text" name="email"><br>
          Password: <input type="password" name="pass"><br>
          <input type="submit" value="Login">
        </form>

      </div>

      <div class="errors">
        <?php

          foreach ($_SESSION['error'] as $error) {
            echo "<div>" . $error . "</div>";
          }

        ?>
      </div>

    </div>

  </body>
</html>
