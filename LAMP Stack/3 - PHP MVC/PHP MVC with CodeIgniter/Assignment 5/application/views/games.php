<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ninja Gold Game</title>
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    <div class="container">
      <p class = "gold-info">Your Gold: </p>
      <div class="total-gold">
        <?php
          $gold = $this->session->userdata('gold');
          echo $gold;
        ?>
      </div><br>
      <form class="building" action="games/process_money" method="post">
        <h2>Farm</h2>
        <p>(earns 10-20 golds)</p>
        <input type="hidden" name="building" value="farm">
        <input type="submit" value="Find Gold!">
      </form>
      <form class="building" action="games/process_money" method="post">
        <h2>Cave</h2>
        <p>(earns 5-10 golds)</p>
        <input type="hidden" name="building" value="cave">
        <input type="submit" value="Find Gold!">
      </form>
      <form class="building" action="games/process_money" method="post">
        <h2>House</h2>
        <p>(earns 2-5 golds)</p>
        <input type="hidden" name="building" value="house">
        <input type="submit" value="Find Gold!">
      </form>
      <form class="building" action="games/process_money" method="post">
        <h2>Casino</h2>
        <p>(earns/takes 0-50 golds)</p>
        <input type="hidden" name="building" value="casino">
        <input type="submit" value="Find Gold!">
      </form>
      <h2>Activities:</h2>
      <div class="activities">
        <?php
          $activity = $this->session->userdata('activity');
          foreach ($activity as $item) {
            echo $item;
          }
        ?>
      </div>
    </div>
  </body>
</html>
