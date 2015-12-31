<?php

  session_start();

  if (!isset($_SESSION['valid']) && !isset($_SESSION['email-list'])) {
    $_SESSION['valid'] = "<div></div>";
    $_SESSION['email-list'] = array();
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email Validation with DB</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>Email Validation with DB</h1>

      <form action="process.php" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="submit" value="Submit">
      </form>

      <?php echo $_SESSION['valid']; ?>

      <h2>Email Addresses Entered:</h2>

      <div class="email">
        <?php
          foreach ($_SESSION['email-list'] as $item) {
            echo $item;
          }
        ?>
      </div>

    </div>

  </body>
</html>
