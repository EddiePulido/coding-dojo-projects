<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Intro 8</title>
  </head>
  <body>
    <?php

      function multiply($array , $factor){

        $new_array = array();

        foreach($array as $item){
          array_push($new_array, ($item * $factor));
        }

        return $new_array;

      }

      $A = array(2,4,10,16);
      $B = multiply($A,5);
      var_dump($B);

    ?>
  </body>
</html>
