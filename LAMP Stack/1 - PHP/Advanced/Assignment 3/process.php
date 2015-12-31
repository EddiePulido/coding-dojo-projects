<?php

  session_start();

  function calculate(){

    if(isset($_POST['building'])){

      if($_POST['building'] == "farm"){
        $gold = rand(10,20);
        $_SESSION['gold'] += $gold;
        array_push($_SESSION['activities'], "<div class = 'item green'>" . "You entered a farm and earned " . $gold . " golds. (" . date('l jS \of F Y h:i:s A') .")" . "</div>");
      }

      if ($_POST['building'] == "cave") {
        $gold = rand(5,10);
        $_SESSION['gold'] += $gold;
        array_push($_SESSION['activities'], "<div class = 'item green'>" ."You entered a cave and earned " . $gold . " golds. (" . date('l jS \of F Y h:i:s A') .")" . "</div>");
      }

      if ($_POST['building'] == "house") {
        $gold = rand(2,5);
        $_SESSION['gold'] += $gold;
        array_push($_SESSION['activities'], "<div class = 'item green'>". "You entered a house and earned " . $gold . " golds. (" . date('l jS \of F Y h:i:s A') .")" . "</div>");
      }

      if ($_POST['building'] == "casino") {
        $win_or_lose = rand(0,1);
        $gold = rand(0,50);
        if($win_or_lose == 1){
          $_SESSION['gold'] += $gold;
          array_push($_SESSION['activities'], "<div class = 'item green'>" . "You entered a casino and earned " . $gold . " golds. (" . date('l jS \of F Y h:i:s A') .")" . "</div>");
        }else {
          $_SESSION['gold'] -= $gold;
          array_push($_SESSION['activities'], "<div class = 'item red'>" . "You entered a casino and lost " . $gold . " golds... ouch... (" . date('l jS \of F Y h:i:s A') .")" . "</div>");
        }
      }

    }

  }

  calculate();
  header("Location: index.php");

?>
