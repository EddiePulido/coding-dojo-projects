<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>Multiplication Table</h1>

      <table >

        <?php
          echo "<tr>";
          echo "<td></td>";

          for($x = 1 ; $x <= 9 ; $x++){
            echo "<td class = 'multiplicative'>" . $x . "</td>";
          }
          echo "<tr>";

          for($x = 1 ; $x <= 9 ; $x++){
            if($x % 2 == 1){
              echo "<tr class = 'special-row'>";
            }else{
              echo "<tr>";
            }

            echo "<td class = 'multiplicative'>" . $x . "</td>";
            for($y = 1 ; $y <= 9 ; $y++){
              echo "<td>" . ($x * $y) . "</td>";
            }
            echo "</tr>";
          }

        ?>

      </table>

    </div>

  </body>
</html>
