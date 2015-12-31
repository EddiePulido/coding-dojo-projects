<?php

  session_start();
  $_SESSION['error'] = array();
  $_SESSION['no_error'] = false;

  if(!file_exists("uploads")){
    mkdir("uploads");
  }

  if( $_POST['email'] == "" || $_POST['first_name'] == "" || $_POST['last_name'] == "" || $_POST['password'] == "" || $_POST['confirm_password'] == "" ){
    array_push($_SESSION['error'] , "Please fill in all required fields.");
  }

  for($x = 0 ; $x < strlen($_POST['first_name']) ; $x++){
    if(is_numeric($_POST['first_name'][$x])){
      array_push($_SESSION['error'] , "The first name cannot contain any numeric value.");
    }
  }

  for($x = 0 ; $x < strlen($_POST['last_name']) ; $x++){
    if(is_numeric($_POST['last_name'][$x])){
      array_push($_SESSION['error'] , "The last name cannot contain any numeric value.");
    }
  }

  if(strlen($_POST['password']) < 6){
    array_push($_SESSION['error'] , "Password must be at least 6 characters.");
  }

  $data = explode("/" , $_POST['birthday']);
  if(!checkdate($data[0],$data[1],$data[2])){
    array_push($_SESSION['error'] , "Please enter a valid date.");
  }

  $file = "uploads/" . basename($_FILES['profile_pic']['name']);

  if(count($_SESSION['error']) == 0){
    if(!($_FILES['profile_pic']['name'] == "")){
      if(!move_uploaded_file($_FILES['profile_pic']['tmp_name'] , $file)){
        array_push($_SESSION['error'] , "Profile picture failed to upload.");
      }else{
        $_SESSION['no_error'] = true;
      }
    }else{
      $_SESSION['no_error'] = true;
    }
  }

  header("Location: index.php");

?>
