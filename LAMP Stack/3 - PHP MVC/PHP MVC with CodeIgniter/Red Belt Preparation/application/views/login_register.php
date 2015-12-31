<?php
  $logged_in = $this->session->userdata('logged_in');
  if ($logged_in == true) {
    redirect('/users/profile');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Red Belt Preparations</title>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/login_register.css">
  </head>
  <body>
    <div class="container">

      <h1>Welcome!</h1>

      <form class="register-form" action="/users/register" method="post">
        <fieldset>
          <legend>Register</legend>
          <input type="hidden" name="login_register" value="login">
          <label class="label" for="register_name">Name</label>
          <input class="input" id="register_name" type="text" name="name">
          <label class="label" for="register_alias">Alias</label>
          <input class="input" id="register_alias" type="text" name="alias">
          <label class="label" for="register_email">Email</label>
          <input class="input" id="register_email" type="text" name="email">
          <label class="label" for="register_password">Password</label>
          <input class="input" id="register_password" type="password" name="password">
          <p>* Password should be at least 8 characters</p>
          <label class="label" for="register_confirm_password">Confirm Password</label>
          <input class="input" id="register_confirm_password" type="password" name="confirm_password">
          <input class="register-button" type="submit" value="Register">
        </fieldset>
      </form>
      <form class="login-form" action="/users/login" method="post">
        <fieldset>
          <legend>Login</legend>
          <input type="hidden" name="login_register" value="register">
          <label class="label" for="login_email">Email</label>
          <input class="input" id="login_email" type="text" name="email">
          <label class="label" for="login_password">Password</label>
          <input class="input" id="login_password" type="password" name="password">
          <input class="login-button" type="submit" value="Login">
        </fieldset>
      </form>

      <div class="errors">
        <?php
          $login_errors = $this->session->flashdata('login_errors');
          $register_errors = $this->session->flashdata('register_errors');
          echo $login_errors;
          echo $register_errors;
        ?>
      </div>

    </div>
  </body>
</html>
