<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Intro 4</title>
  </head>
  <body>
    <?php
      $numbers = array(1, 2, 5, 10, 255, 3);
      $average = 0;

      foreach($numbers as $number){
        $average += $number;
      }

      echo $average / count($numbers);
    ?>
  </body>
</html>
