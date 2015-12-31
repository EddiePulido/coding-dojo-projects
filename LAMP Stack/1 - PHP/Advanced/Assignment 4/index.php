<?php

  session_start();
  if(!isset($_SESSION['error'])){
    $_SESSION['error'] = array();
    $_SESSION['no_error'] = false;
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration without DB</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>Registration without DB</h1>

      <div class="error-list">
        <?php
          foreach($_SESSION['error'] as $item){
            echo "<div class = 'error-item'>" . $item . "</div>";
          }
        ?>
      </div>

      <form class="form" action="process.php" method="post" enctype="multipart/form-data">

        email: <input type="text" name="email">
        <span class = "error">*</span>
        <br>
        first Name: <input type="text" name="first_name">
        <span class = "error">*</span>
        <br>
        Last Name: <input type="text" name="last_name">
        <span class = "error">*</span>
        <br>
        Password: <input type="password" name="password">
        <span class = "error">*</span>
        <br>
        Confirm Password: <input type="password" name="confirm_password">
        <span class = "error">*</span>
        <br>
        Birthday: <input type="date" name="birthday">
        <br>
        Profile Picture: <input type="file" name="profile_pic">
        <br>

        <input type="submit" value="Submit">

      </form>

      <div class="no-error">
        <?php
          if($_SESSION['no_error'] == true){
            echo "Thanks for submitting your information.";
          }
        ?>
      </div>

    </div>

  </body>
</html>
