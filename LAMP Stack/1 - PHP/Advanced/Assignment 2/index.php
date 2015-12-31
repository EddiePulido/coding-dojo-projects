<?php

  session_start();

  $error = "";
  $color_class = "";
  $display_form = null;
  $play_again = null;

  if(!isset($_SESSION['choice'])){
    $_SESSION['choice'] = rand(1,100);
    $error = "Pick a number!";
    $color_class = "green";
    $display_form = true;
  }else{
    $error = "Pick a number!";
    $color_class = "green";
    $display_form = true;
    if (isset($_POST['choice'])) {
      if ($_POST['choice'] == $_SESSION['choice']) {
        $color_class = "green";
        $display_form = false;
        $play_again = true;
        $error = $_POST['choice'] . " was the right number!";
        session_destroy();
      }else {
        $color_class = "red";
        $display_form = true;
        $play_again = false;
        if ($_POST['choice'] > $_SESSION['choice']) {
          $error = "Too High!";
        }else {
          $error = "Too Low!";
        }
      }
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Great Number Game</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>Welcome to the Great Number Game!</h1>

      <h3>I am thinking of a number between 1 and 100</h3>
      <h3>Take a guess!</h3>

      <div class="info-box <?php echo $color_class; ?>">
        <?php echo $error; ?>
        <br>
        <?php if($play_again == true){ ?>
          <a class = "button" href="index.php">Play again!</a>
        <?php } ?>
      </div>

      <?php if($display_form == true){ ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
          <input type="text" name="choice">
          <input type="submit" value="Submit">
        </form>
      <?php } ?>

    </div>

  </body>
</html>
