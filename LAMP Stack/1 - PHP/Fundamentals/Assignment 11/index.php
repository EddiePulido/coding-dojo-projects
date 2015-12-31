<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Score and Grade</title>
  </head>
  <body>
    <?php

      function score($score){

        if($score >= 90){
          echo "<h1>Your Score: " . $score . "/100" . "</h1>";
          echo "<h2>Your grade is A</h2>";
        }elseif($score >= 80 && $score < 90){
          echo "<h1>Your Score: " . $score . "/100" . "</h1>";
          echo "<h2>Your grade is B</h2>";
        }elseif($score >= 70 && $score < 80){
          echo "<h1>Your Score: " . $score . "/100" . "</h1>";
          echo "<h2>Your grade is C</h2>";
        }else{
          echo "<h1>Your Score: " . $score . "/100" . "</h1>";
          echo "<h2>Your grade is D</h2>";
        }

      }

      for($x = 0 ; $x < 100 ; $x++){
        $score = rand(50,100);
        score($score);
      }

    ?>
  </body>
</html>
