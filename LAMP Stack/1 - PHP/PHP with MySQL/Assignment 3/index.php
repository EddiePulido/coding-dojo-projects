<?php

  session_start();

  if(!isset($_SESSION['error']) && !isset($_SESSION['quote'])){
    $_SESSION['error'] = array();
    $_SESSION['quote'] = array();
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>QuotingDojo</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>Welcome to QuotingDojo</h1>

      <div class="form">

        <?php
          foreach ($_SESSION['error'] as $item) {
            echo "<p class = 'error'>" . "* " . $item . "</p>";
          }
        ?>

        <form class = "add-quote" action="process.php" method="post">
          <input type="hidden" name="quote" value="add_quote">
          Your name: <input type="text" name="name"><br>
          Your quote: <textarea name="quote" rows="5" cols="40"></textarea><br>
          <input type="submit" value="Add my quote!">
        </form>
        <form class ="skip-quote" action="main.php" method="post">
          <input type="hidden" name="quote" value="skip_quote">
          <input type="submit" value="Skip to quotes!">
        </form>

      </div>

    </div>

  </body>
</html>
