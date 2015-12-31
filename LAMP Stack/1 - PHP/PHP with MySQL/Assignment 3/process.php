<?php

  session_start();

  include "connection.php";

  $_SESSION['error'] = array();
  $_SESSION['quote'] = array();

  function insert_quote(){
    global $conn;

    $query = "insert into quotes (name,quote,created_at) values (?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $name, $quote, $created_at);
    $name = $_POST['name'];
    $quote = $_POST['quote'];
    $created_at = date("Y-m-d H:i:s");
    $stmt->execute();
  }

  function select_quotes(){
    global $conn;

    $query = "select * from quotes";
    $rows = $conn->query($query);
    while($row = $rows->fetch_assoc()){
      array_push($_SESSION['quote'], "<div class = 'quote-block'>"
                                        . "<p class = 'quote'>" . '"' . ucfirst($row['quote']) . '"' . "</p>"
                                        . "<p class = 'info'>" . "- " . ucfirst($row['name']) . " at " . $row['created_at'] . "</p>"
                                      . "<hr></div>");
    }
  }

  if(empty($_POST['name'])){
    array_push($_SESSION['error'], "Please enter a name.");
  }

  if(empty($_POST['quote'])){
    array_push($_SESSION['error'], "Please enter a quote.");
  }

  if(count($_SESSION['error']) == 0){
      insert_quote();
      select_quotes();
      header("Location: main.php");
  }else{
      header("Location: index.php");
  }

?>
