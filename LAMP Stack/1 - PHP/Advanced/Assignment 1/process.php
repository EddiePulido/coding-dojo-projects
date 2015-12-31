<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>Submitted Information</h1>

      Name: <?php echo $_GET['name']; ?>
      <br>
      Dojo Location: <?php echo $_GET['location']; ?>
      <br>
      Favorite Langauge: <?php echo $_GET['language']; ?>!!!
      <br>
      Comment: <?php echo $_GET['comment']; ?>
      <br>

      <a href="index.php">Go Back</a>

    </div>

  </body>
</html>
