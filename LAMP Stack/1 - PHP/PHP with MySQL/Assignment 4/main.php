<?php

  session_start();
  if($_SESSION['logged_on'] != true){
    header("location: index.php");
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
      <h1>Homepage</h1>

      <h2>Welcome <?php echo $_SESSION['first_name'] . ", " . $_SESSION['last_name']; ?></h2>

      <p><?php echo "Your email address is: " . $_SESSION['email'] . " and your called " . $_SESSION['username']; ?></p>

      <form class="logout" action="process.php" method="post">
        <input type="hidden" name="user" value="logout">
        <input type="submit" value="logout">
      </form>

    </div>
  </body>
</html>
