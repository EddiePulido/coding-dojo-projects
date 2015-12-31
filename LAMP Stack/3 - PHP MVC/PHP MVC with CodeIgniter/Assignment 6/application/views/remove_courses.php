<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Courses</title>
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    <div class="container">
      <h2>Are you sure you want to delete the following course?</h2>
      <div class="remove">
        Name: <?php echo $course_remove['name']; ?><br>
        Description: <?php echo $course_remove['description']; ?><br>
        <a href="/">No</a>
        <a href="/courses/remove/<?php echo $course_remove['id'];?>">Yes! I want to delete this</a>
      </div>
    </div>
  </body>
</html>
