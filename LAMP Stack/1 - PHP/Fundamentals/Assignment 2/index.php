<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Intro 2</title>
  </head>
  <body>
    <?php
      for($x = 5 ; $x <= 1000000 ; $x++){
        if($x % 5 == 0){
          echo $x . "<br>";
        }
      }
    ?>
  </body>
</html>
