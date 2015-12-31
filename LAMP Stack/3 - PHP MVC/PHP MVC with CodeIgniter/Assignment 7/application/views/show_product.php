<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Semi-RESTful Routes</title>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
  </head>
  <body>
    <div class="container">

      <h2>Product</h2>

      <div>Name: <?php echo $product['name'];?></div>
      <div>Description: <?php echo $product['description'];?></div>
      <div>Price: <?php echo $product['price'];?></div>

      <a href='/products/update/<?php echo $product['id']?>'>Edit</a>
      <span> | </span>
      <a href='/'>Back</a>

    </div>
  </body>
</html>
