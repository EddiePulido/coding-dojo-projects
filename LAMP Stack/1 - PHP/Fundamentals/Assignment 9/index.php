<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Intro 9</title>
  </head>
  <body>
    <?php

      function print_lists($array){

        echo "<ul>";

        foreach($array as $item){
          echo "<li>" . $item . "</li>";
        }

        echo "</ul>";

      }

      $A = array(2,3,'hello');
      print_lists($A);

    ?>
  </body>
</html>
