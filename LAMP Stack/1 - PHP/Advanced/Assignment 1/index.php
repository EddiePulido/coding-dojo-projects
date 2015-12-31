<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>Survey Form</h1>

      <form action="process.php" method="get">

        <label for="name">Your Name: </label>
        <input id = "name" type="text" name="name" required="true">

        <br>

        <label for="location">Dojo Location:</label>
        <select id = "location" class="" name="location">
          <option>Mountain View</option>
        </select>

        <br>

        <label for="langauge">Favorite Language:</label>
        <select id = "langauge" class="" name="language">
          <option>Javascript</option>
        </select>

        <br>

        <label for="comment">Comment (optional):</label>
        <br>
        <textarea id = "comment" name="comment" rows="8" cols="40"></textarea>

        <br>

        <input type="submit" value="Submit">
      </form>

    </div>

  </body>
</html>
