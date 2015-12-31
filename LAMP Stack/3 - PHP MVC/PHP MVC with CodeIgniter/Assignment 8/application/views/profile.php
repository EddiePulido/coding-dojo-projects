<?php
  if ($this->session->userdata('logged_in') == false) {
    redirect('/');
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
      <div class="welcome-info">
        Welcome <?php echo $this->session->userdata('fname');?>!
        <span><a href="/login/logout">Logout</a></span>
      </div>
      <fieldset class = "info">
        <legend>User Information</legend>
        <p>First Name: <?php echo $this->session->userdata('fname');?></p>
        <p>Last Name: <?php echo $this->session->userdata('lname');?></p>
        <p>Email Address: <?php echo $this->session->userdata('email');?></p>
      </fieldset>
    </div>
  </body>
</html>
