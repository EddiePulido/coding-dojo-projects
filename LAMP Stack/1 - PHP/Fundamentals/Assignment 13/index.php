<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Coin Throw</title>
  </head>
  <body>
    <?php

      function coin_throw(){
        $coin = rand(0,1);
        return $coin;
      }

      $head = 0;
      $tail = 0;

      echo "<h2>Starting the program</h2>";

      for($x = 0 ; $x < 5000 ; $x++){

        $head_or_tail = coin_throw();

        if($head_or_tail == 1){
          $head++;
          echo "Attempt #" . ($x + 1) . ": Throwing a coin... It's a head! ... Got " . $head . " head(s) so far and " . $tail . " tail(s) so far ";
          echo "<br>";
        }else{
          $tail++;
          echo "Attempt #" . ($x + 1) . ": Throwing a coin... It's a tail! ... Got " . $head . " head(s) so far and " . $tail . " tail(s) so far ";
          echo "<br>";
        }

      }

      echo "<h2>Ending the program - thank you!</h2>";

    ?>
  </body>
</html>
