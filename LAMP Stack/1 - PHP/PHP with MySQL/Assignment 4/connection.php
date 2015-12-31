<?php

  define("host","localhost");
  define("username","root");
  define("password","");
  define("db","login_and_registration");

  $conn = new mysqli(host, username, password, db);

  if($conn->connect_error){
    die("Error: " . $conn->connect_error);
  }

?>
