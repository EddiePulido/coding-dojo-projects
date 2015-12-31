<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Semi-RESTful Routes</title>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
  </head>
  <body>
    <div class="container">

      <h2>Edit</h2>

      <div class="errors">
        <?php
          $errors = $this->session->flashdata('errors');
          echo $errors;
        ?>
      </div>

      <form class="" action="/products/update_product/<?php echo $product['id'];?>" method="post">

        <label class = "label" for="name">Name</label>
        <input type="text" name="name" value="<?php echo $product['name']?>">

        <label class = "label" for="description">Description</label>
        <input type="text" name="description" value="<?php echo $product['description']?>">

        <label class = "label" for="price">Price</label>
        <input type="number" name="price" value="<?php echo $product['price']?>">

        <input class = "update-product-button" type="submit" value="Update">

      </form>

      <a href="/products/retrieve_one/<?php echo $product['id']?>">Show</a>
      <span> | </span>
      <a href="/">Back</a>

    </div>
  </body>
</html>
