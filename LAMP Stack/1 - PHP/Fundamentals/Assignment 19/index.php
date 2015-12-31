<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Checkerboard</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>Checkerboard</h1>

      <?php

        function create_checker_board($column, $row){
          for($x = 0 ; $x < $column ; $x++){
            for($i = 0 ; $i < $row ; $i++){
              if($x % 2 == 0){
                if($i % 2 == 0){
                  echo "<div class = 'red'></div>";
                }else{
                  echo "<div class = 'black'></div>";
                }
              }else{
                if($i % 2 == 0){
                  echo "<div class = 'black'></div>";
                }else{
                  echo "<div class = 'red'></div>";
                }
              }
            }
          }
        }

        create_checker_board(8,8);
      ?>

    </div>

  </body>
</html>
