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
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/user_info.css">
  </head>
  <body>
    <div class="container">

      <a class="home-button" href="/users/profile">Home</a>
      <a class="add-book-button" href="/books/add">Add Book and Review</a>
      <a class="logout-button" href="/users/logout">Logout</a>
      <div class="info">
        <p>User Alias: <?php echo $user_data['alias']; ?></p>
        <p>Name: <?php echo $user_data['name']; ?></p>
        <p>Email: <?php echo $user_data['email']; ?></p>
        <p>Total Reviews: <?php echo $total_review[0]['total']; ?></p>
      </div>

      <div class="">
        <h2>Posted Reviews on the following books: </h2>
        <?php foreach ($all_books_reviewed as $item): ?>
            <p><a href="/reviews/load_review/<?php echo $item['book_id']; ?>"><?php echo $item['title']; ?></a></p>
        <?php endforeach; ?>
      </div>

    </div>
  </body>
</html>
