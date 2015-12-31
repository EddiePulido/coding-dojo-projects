<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Intro 10</title>
  </head>
  <body>
    <?php

      function print_users($users){

        echo "There are " . count($users) . " keys in this array: ";

        foreach($users as $key => $value){
          echo $key . " ";
        }

        echo "<br>";

        foreach($users as $key => $value){
          echo "The value in the key '" . $key . "' is '" . $value . "'.";
          echo "<br>";
        }

      }

      $users = array();
      $users['first_name'] = "Michael";
      $users['last_name'] = "Choi";
      print_users($users);

    ?>
  </body>
</html>
