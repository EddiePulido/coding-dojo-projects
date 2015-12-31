<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Min and Max</title>
  </head>
  <body>
    <?php

      function get_max_and_min($array){

        $max = $array[0];
        $min = $array[0];

        foreach($array as $item){

          if($max <  $item){
            $max = $item;
          }else{
            $min = $item;
          }
          
        }

        return array("max" => $max , "min" => $min);

      }

      $sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02);
      $output = get_max_and_min($sample);
      var_dump($output);
      //$output should be equal to array('max' => 332, 'min' => 1.02);

    ?>
  </body>
</html>
