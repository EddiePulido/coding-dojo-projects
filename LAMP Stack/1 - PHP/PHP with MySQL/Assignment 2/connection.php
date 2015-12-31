<?php

  define("host","localhost");
  define("username","root");
  define("password","");
  define("db","email_validation_with_db");

  $conn = new mysqli(host, username, password, db);

  if($conn->connect_error){
    die("Error: " . $conn->connect_error);
  }

?>
