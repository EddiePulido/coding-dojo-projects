<?php

  session_start();

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
      <h1>Here are the awesome quotes!</h1>

      <div class="quotes">
        <?php
          foreach ($_SESSION['quote'] as $item) {
            echo $item;
          }
        ?>
      </div>

    </div>
  </body>
</html>
