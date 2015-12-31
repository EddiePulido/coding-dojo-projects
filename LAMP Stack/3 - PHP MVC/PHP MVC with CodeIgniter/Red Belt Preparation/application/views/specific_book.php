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
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/specific_book.css">
  </head>
  <body>
    <div class="container">

      <a class="home-button" href="/users/profile">Home</a>
      <a class="logout-button" href="/users/logout">Logout</a>

      <h1>Add a New Book Title and a Review:</h1>

      <div class="review">
        <h2>Reviews</h2>
        <?php $reviews = $this->session->userdata('reviews'); ?>
        <?php foreach ($reviews as $item): ?>
          <div class="single-review">
            <p>Rating: <?php echo $item['rating'];?></p>
            <p><a href="/users/read_id/<?php echo $item['user_id']; ?>"><?php echo $item['alias'];?></a> says: <span class="review-comment"><?php echo $item['comment'];?></span></p>
            <p class="review-created-at">Posted on: <?php echo $item['created_at'];?></p>
            <?php if ($id === $item['user_id']) { ?>
                <a class="remove-review" href="/reviews/remove/<?php echo $item['id'];?>/<?php echo $item['book_id'];?>">Delete this review</a>
            <?php } ?>
          </div>
        <?php endforeach;?>
      </div>

      <form class="add-review" action="/reviews/add_review/<?php echo $book_id['id'];?>" method="post">
        <label class="label" for="review">Add a review: </label>
        <textarea id="review" name="review" rows="8" cols="40"></textarea>
        <label class="label" for="rating">Rating:</label>
        <select id="rating" name="rating">
          <option value="Select Rating">Select Rating</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        <span>stars.</span>
        <input class="add-review-button" type="submit" value="Submit Review">
      </form>

      <div class="errors">
        <?php
          $add_reviews_errors = $this->session->flashdata('add_reviews_errors');
          echo $add_reviews_errors;
        ?>
      </div>

    </div>
  </body>
</html>
