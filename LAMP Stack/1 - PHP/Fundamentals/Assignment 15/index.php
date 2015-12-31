<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Draw Stars</title>
  </head>
  <body>
    <?php

      function draw_stars($array){
        for($x = 0 ; $x < count($array) ; $x++){
          if(is_numeric($array[$x])){
            for($y = 0 ; $y < $array[$x] ; $y++){
              echo "*";
            }
          }else{
            for($y = 0 ; $y < strlen($array[$x]) ; $y++){
              echo strtolower(substr($array[$x], 0, 1));
            }
          }
          echo "<br>";
        }
      }

      $x = array(4, 6, 1, 3, 5, 7, 25);
      draw_stars($x);

      echo "<br>";

      $x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
      draw_stars($x);
    ?>
  </body>
</html>
