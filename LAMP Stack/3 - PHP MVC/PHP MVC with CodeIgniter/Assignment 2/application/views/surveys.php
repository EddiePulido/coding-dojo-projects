<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CodeIgniter Survey Form</title>
    <link rel="stylesheet" href="assets/style/style.css">
  </head>
  <body>
    <div class="container">
      <h1>CodeIgniter Survey Form</h1>

      <form class="surveys" action="surveys/process_form" method="post">
        <label for="name"></label>
        <input id = "name" type="text" name="name" placeholder="name">

        <label for="location"></label>
        <select id = "location" name="location">
          <option value = "Mountain View">Mountain View</option>
          <option value = "San Francisco">San Francisco</option>
          <option value = "Los Angeles">Los Angeles</option>
        </select>

        <label for="language"></label>
        <select id = "language" name="language">
          <option value = "Javascript">Javascript</option>
          <option value = "PHP">PHP</option>
          <option value = "Ruby">Ruby</option>
          <option value = "Python">Python</option>
        </select>

        <br><textarea name="comment" rows="8" cols="40" placeholder="comment"></textarea><br>

        <input type="submit" value="Submit">

      </form>

    </div>
  </body>
</html>
