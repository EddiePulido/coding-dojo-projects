<?php

  session_start();
  $_SESSION['error'] = array();
  include "connection.php";

  function error_checking($input_name, $filter, $empty_error_message, $error_message){
    if ($_POST[$input_name] == "") {
      array_push($_SESSION['error'] , "<div class = 'error'>* " . $empty_error_message . ".</div>");
    }else{
      if (!filter_var($_POST[$input_name], $filter)) {
        array_push($_SESSION['error'] , "<div class = 'error'>* " . $error_message . ".</div>");
      }
    }
  }

  function insert_user(){

    global $conn;

    $query = "insert into users (first_name, last_name, email, username, password, created_at) values (?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssss", $first_name, $last_name, $email, $username, $password, $created_at);
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash(htmlspecialchars($_POST['pass']), PASSWORD_BCRYPT);
    $created_at = date("Y-m-d H:i:s");
    $stmt->execute();
  }

  function login($email, $password){

    global $conn;

    $query = "select * from users where email = '" . $email . "'";
    $rows = $conn->query($query);

    if ($rows->num_rows > 0) {
      while ($row = $rows->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['username'] = $row['username'];
          $_SESSION['first_name'] = $row['first_name'];
          $_SESSION['last_name'] = $row['last_name'];
          $_SESSION['email'] = $row['email'];
        }else{
          array_push($_SESSION['error'] , "<div class = 'error'>* There were some errors. Please try logging in again.</div>");
          header("Location: index.php");
          die();

        }
      }
    }
  }

  // Handle Register
  if (isset($_POST['user']) && $_POST['user'] == "register") {

    error_checking('first_name', FILTER_SANITIZE_STRING, "Please enter a first name", "Please enter a valid first name");
    error_checking('last_name', FILTER_SANITIZE_STRING, "Please enter a last name", "Please enter a valid last name");
    error_checking('email', FILTER_VALIDATE_EMAIL, "Please enter a email", "Please enter a valid email");
    error_checking('username', FILTER_SANITIZE_STRING, "Please enter a username", "Please enter a valid username");
    error_checking('pass', FILTER_SANITIZE_STRING, "Please enter a password", "Please enter a valid password");

    if ($_POST['check_pass'] == "") {
      array_push($_SESSION['error'] , "<div class = 'error'>* Please enter password again for confirmation.</div>");
    }else{
      if ($_POST['pass'] != $_POST['check_pass']) {
        array_push($_SESSION['error'] , "<div class = 'error'>* Passwords do not match.</div>");
      }
    }

    if (count($_SESSION['error']) == 0) {

      insert_user();
      header("Location: index.php");

    }else{

      header("Location: index.php");

    }

  }

  // Handle Login
  if (isset($_POST['user']) && $_POST['user'] == "login") {

    error_checking('email', FILTER_VALIDATE_EMAIL, "Please enter a email", "Please enter a valid email");
    error_checking('pass', FILTER_SANITIZE_STRING, "Please enter a password", "Please enter a valid password");

    if (count($_SESSION['error']) == 0) {

      $email = htmlspecialchars($_POST['email']);
      $password = htmlspecialchars($_POST['pass']);

      login($email, $password);

      $_SESSION['logged_on'] = true;
      header("Location: main.php");

    }else{

      header("Location: index.php");

    }

  }

  // Handle Logout
  if (isset($_POST['user']) && $_POST['user'] == "logout") {

    session_destroy();
    header("location: index.php");

  }

?>
