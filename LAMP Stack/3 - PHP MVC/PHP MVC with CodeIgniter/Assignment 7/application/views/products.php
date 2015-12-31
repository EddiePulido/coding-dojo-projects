<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Semi-RESTful Routes</title>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
  </head>
  <body>
    <div class="container">
      <h2>Products</h2>
      <div class="products">
        <?php
          $products = $this->session->userdata('products');
          $id;
          echo "<div class = 'product-title'>";
            echo "<div class = 'product_name'>Name</div>";
            echo "<div class = 'product_description'>Description</div>";
            echo "<div class = 'product_price'>Price</div>";
            echo "<div class = 'product_action'>Actions</div>";
          echo "</div>";
          foreach ($products as $item) {
            echo "<div class = 'product-item'>";
              foreach ($item as $key => $value) {
                if ($key != 'id') {
                  if ($key == 'price') {
                    echo "<div class = 'product_" . $key . "'>$" . $value . "</div>";
                  }else{
                    echo "<div class = 'product_" . $key . "'>" . $value . "</div>";
                  }
                }else{
                  $id = $value;
                }
              }
              echo "<a class = 'product_show' href='/products/retrieve_one/" . $id . "'>Show</a>";
              echo "<a class = 'product_edit' href='/products/update/" . $id . "'>Edit</a>";
              echo "<a class = 'product_delete' href='/products/delete/" . $id . "'><button type='button'>Remove</button></a>";
            echo "</div>";
          }
        ?>
      </div>
      <a class = "new-product-button" href="/products/create">Add a new product</a>
    </div>
  </body>
</html>
