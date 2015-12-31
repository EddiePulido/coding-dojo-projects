<?php
  if ($this->session->userdata('logged_in') == true) {
    redirect('/profile');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
  </head>
  <body>
    <div class="container">
      <form class="form" action="/login" method="post">
        <fieldset>
          <legend>Log In</legend>
          <div class="input">
            <input type="hidden" name="login" value="login">
            <p>
              <label for="">Email: </label>
              <input type="text" name="email">
            </p>
            <p>
              <label for="">Password: </label>
              <input type="password" name="password">
            </p>
            <p>
              <input type="submit" value="Login">
            </p>
          </div>
          <div class="errors">
            <?php echo $this->session->userdata('login_errors');?>
          </div>
        </fieldset>
      </form>
      <form class="form" action="/register" method="post">
        <fieldset>
          <legend>Or Register</legend>
          <div class="input">
            <input type="hidden" name="login" value="register">
            <p>
              <label class="label" for="">First Name: </label>
              <input type="text" name="fname">
            </p>
            <p>
              <label class="label" for="">Last Name: </label>
              <input type="text" name="lname">
            </p>
            <p>
              <label class="label" for="">Email: </label>
              <input type="text" name="email">
            </p>
            <p>
              <label class="label" for="">Password: </label>
              <input type="password" name="password">
            </p>
            <p>
              <label class="label" for="">Confirm Password: </label>
              <input type="password" name="confirm_password">
            </p>
            <p>
              <input type="submit" value="Register">
            </p>
          </div>
          <div class="errors">
            <?php echo $this->session->userdata('register_errors');?>
          </div>
        </fieldset>
      </form>
    </div>
  </body>
</html>
