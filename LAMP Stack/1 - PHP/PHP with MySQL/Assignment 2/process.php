<?php

  session_start();

  include "connection.php";

  function get_email(){

    global $conn;

    $query = "select * from email";
    $rows = $conn->query($query);

    while($row = $rows->fetch_assoc()){
      array_push($_SESSION['email-list'] , "<div>" . $row['email'] . "\t\t" . $row['created_at'] . "</div>");
    }
  }

  function post_email(){

    global $conn;

    $query = "insert into email (email,created_at) values (?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss" , $email, $created_at);
    $email = $_POST['email'];
    $created_at =  date('Y-m-d H:i:s');
    $stmt->execute();
  }

  if ($_POST['email'] != ""){

    $_SESSION['email-list'] = array();

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == true) {
      post_email();
      get_email();
      $_SESSION['valid'] = "<div class='message success'>
                              <p>This email you entered " . $_POST['email'] . " is a VALID email address! Thank you!</p>
                            </div>";
    }else {
      get_email();
      $_SESSION['valid'] = "<div class='message error'>
                              <p>This email you entered " . $_POST['email'] . " is a INVALID email address!</p>
                            </div>";
    }

  }

  header("Location: index.php");

?>
