<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>States Array</title>
  </head>
  <body>
    <?php

      $states = array('CA', 'WA', 'VA', 'UT', 'AZ');

      // first select input
      echo "<select>";
      for($x = 0 ; $x < count($states) ; $x++){
        echo "<option>" . $states[$x] . "</option>";
      }
      echo "</select>";

      // second select input
      echo "<select>";
      foreach($states as $state){
        echo "<option>" . $state . "</option>";
      }
      echo "</select>";

      array_push($states,"NJ");
      array_push($states,"NY");
      array_push($states,"DE");

      // third select input
      echo "<select>";
      for($x = 0 ; $x < count($states) ; $x++){
        echo "<option>" . $states[$x] . "</option>";
      }
      echo "</select>";

    ?>
  </body>
</html>
