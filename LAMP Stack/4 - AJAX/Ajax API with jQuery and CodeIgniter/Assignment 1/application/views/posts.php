<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajax Posts</title>
    <link rel="stylesheet" href="/asset/css/style.css">
  </head>
  <body>
    <div class="container">
      <h1>My Post:</h1>
      <div class="notes"></div>
      <form class="add-notes" action="posts/create" method="post">
        <label for="note">Add a note:</label>
        <textarea id="note" class="js-note-button" name="description" rows="8" cols="40"></textarea>
        <input type="submit" value="Post It!">
      </form>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="/asset/js/script.js"></script>
  </body>
</html>
