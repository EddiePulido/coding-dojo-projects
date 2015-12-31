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
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/profile.css">
  </head>
  <body>
    <div class="container">

      <h1>Welcome, <?php echo $alias; ?>!</h1>
      <a class="add-book-button" href="/books/add">Add Book and Review</a>
      <a class="logout-button" href="/users/logout">Logout</a>
      <div class="recent-books">
        <h2>Recent Books Reviews:</h2>
        <?php foreach ($recent_book as $item): ?>
          <div class="recent-book-item">
            <p class="item-title"><a href="/reviews/load_review/<?php echo $item['book_id']; ?>"><?php echo $item['title']; ?></a></p>
            <p class="item-rating">Rating: <?php echo $item['rating']; ?></p>
            <p class="item-user-comment"><a href="/users/read_id/<?php echo $item['id']; ?>"><?php echo $item['alias']; ?></a> says: <span class="item-review"><?php echo $item['comment']; ?></span></p>
            <p class="item-timestamp">Posted on <?php echo $item['created_at']; ?></p>
          </div>
        <?php endforeach;?>
      </div>
      <div class="other-books">
        <h2>Others Books with reviews:</h2>
        <div class="book-list">
          <?php foreach ($book_with_review as $item):?>
            <p><a href="/reviews/load_review/<?php echo $item['book_id']; ?>"><?php echo $item['title']; ?></a></p>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </body>
</html>
