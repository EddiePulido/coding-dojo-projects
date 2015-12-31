<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Semi-RESTful Routes</title>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
  </head>
  <body>
    <div class="container">
      
      <h2>Add a new product</h2>

      <div class="errors">
        <?php
          $errors = $this->session->flashdata('errors');
          echo $errors;
        ?>
      </div>

      <form class="add-product" action="/products/create_product" method="post">

        <label class = "label" for="name">Name</label>
        <input id="name" type="text" name="name">

        <label class = "label" for="description">Description</label>
        <input id="description" type="text" name="description">

        <label class = "label" for="price">Price</label>
        <input id="price" type="number" name="price">

        <input class = "add-product-button" type="submit" value="Create">

      </form>

      <a href="/">Go Back</a>

    </div>
  </body>
</html>
