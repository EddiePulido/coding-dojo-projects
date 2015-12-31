<?php

  session_start();

  if(!isset($_SESSION['gold']) && !isset($_SESSION['activities'])){
    $_SESSION['gold'] = 0;
    $_SESSION['activities'] = array();
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ninja Gold Game</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>Ninja Gold Game</h1>

      <div class="gold-amount">
        <h2>Your Gold: </h2>
        <span><?php echo $_SESSION['gold']; ?></span>
      </div>

      <form class="building" action="process.php" method="post">
        <h2>Farm</h2>
        <p>(earns 10-20 golds)</p>
        <input type="hidden" name="building" value="farm">
        <input type="submit" value="Find Gold!">
      </form>

      <form class="building" action="process.php" method="post">
        <h2>Cave</h2>
        <p>(earns 5-10 golds)</p>
        <input type="hidden" name="building" value="cave">
        <input type="submit" value="Find Gold!">
      </form>

      <form class="building" action="process.php" method="post">
        <h2>House</h2>
        <p>(earns 2-5 golds)</p>
        <input type="hidden" name="building" value="house">
        <input type="submit" value="Find Gold!">
      </form>

      <form class="building" action="process.php" method="post">
        <h2>Casino!</h2>
        <p>(earns/takes 0-50 golds)</p>
        <input type="hidden" name="building" value="casino">
        <input type="submit" value="Find Gold!">
      </form>


      <h2>Activities:</h2>
      <div class="past-activities">
        <?php
          foreach($_SESSION['activities'] as $item){
            echo "<div class= 'item'>" . $item . "</div>";
          }
        ?>
      </div>

    </div>

  </body>
</html>
