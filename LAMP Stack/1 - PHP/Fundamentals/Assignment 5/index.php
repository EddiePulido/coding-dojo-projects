<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Intro 5</title>
  </head>
  <body>
    <?php

      $numbers = array();

      for($x = 1 ; $x <= 20000 ; $x++){
        $numbers[] = $x;
      }

      var_dump($numbers);

    ?>
  </body>
</html>
