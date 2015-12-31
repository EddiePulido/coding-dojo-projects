<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Intro 6</title>
  </head>
  <body>
    <?php

      for($x = 1 ; $x <= 2000 ; $x++){

        if($x % 2 == 0){
          echo "Number is " . $x . ". This is an even number.";
          echo "<br>";
        }else{
          echo "Number is " . $x . ". This is an odd number.";
          echo "<br>";
        }

      }

    ?>
  </body>
</html>
