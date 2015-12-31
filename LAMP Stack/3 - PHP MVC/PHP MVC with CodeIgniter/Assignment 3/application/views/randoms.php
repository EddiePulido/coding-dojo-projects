<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random Word Generator</title>
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    <div class="container">
      <h1>Random Word Generator</h1>
      <p>Random Word (attempt #<?php echo $this->session->userdata('attempt'); ?>)</p>
      <div class="random-word"><?php echo $this->session->userdata('random_word'); ?></div>
      <form class="" action="randoms/randomize" method="post">
        <input type="submit" value="Generate">
      </form>
    </div>
  </body>
</html>
