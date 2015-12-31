<?php
  $logged_in = $this->session->userdata('logged_in');
  $id = $this->session->userdata('id');
  $name = $this->session->userdata('name');
  $alias = $this->session->userdata('alias');
  $email = $this->session->userdata('email');
  if ($logged_in == false) {
    redirect('/');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Red Belt Preparations</title>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/add_book.css">
  </head>
  <body>
    <div class="container">

      <a class="home-button" href="/users/profile">Home</a>
      <a class="logout-button" href="/users/logout">Logout</a>

      <h1>Add a New Book Title and a Review:</h1>
      <form class="add-book-form" action="/books/add_book" method="post">
        <label class="label" for="title">Book Title:</label>
        <input id="title" type="text" name="title">
        <label class="label" for="author">Author: </label>
        <input id="author" type="text" name="author">
        <label class="label" for="review">Review:</label>
        <textarea id="review" name="review" rows="8" cols="35"></textarea>
        <label class="label" for="rating">Rating</label>
        <select id="rating" class="form-rating" name="rating">
          <option value="Select Rating">Select Rating</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        <span>stars.</span>
        <input class="add-book-button" type="submit" value="Add Book and Review">
      </form>

      <div class="errors">
        <?php
          $add_books_errors = $this->session->flashdata('add_books_errors');
          echo $add_books_errors;
        ?>
      </div>

    </div>
  </body>
</html>
