<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Courses</title>
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    <div class="container">
      <h2>Add a new course</h2>
      <div class="errors">
        <?php
          $errors = $this->session->flashdata('errors');
          foreach ($errors as $error) {
            echo $error;
          }
        ?>
      </div>
      <form class="add-course" action="courses/add" method="post">
        Name: <input class="name" type="text" name="name"><br>
        Description: <textarea name="description" rows="6" cols="40"></textarea><br>
        <input class="add" type="submit" value="Add">
      </form>
      <h2>Courses</h2>
      <div class="courses">
        <?php
          $courses = $this->session->userdata('courses');

          echo '<div class = "course_title">';
            echo "<div class = 'menu_name'>Course Name</div>";
            echo "<div class = 'menu_description'>Description</div>";
            echo "<div class = 'menu_created_at'>Date Added</div>";
            echo "<div class = 'menu_remove'>Actions</div>";
          echo '</div>';

          foreach ($courses as $item) {
            $id;
            echo '<div>';
            foreach ($item as $key => $value) {
              if($key != 'id') {
                echo "<div class = 'menu_" . $key . "'>" . $value . "</div>";
              }else{
                $id = $value;
              }
            }
            echo "<a class='menu_remove' href='courses/destroy/" . $id . "'>remove</a>";
            echo '</div>';

          }
        ?>
      </div>
    </div>
  </body>
</html>
