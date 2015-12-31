<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/style/style.css">
  </head>
  <body>
    <div class="container">
      <div class="success-submit">
        <p>Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('submitted');?> times now.</p>
      </div>
      <div class="submitted-data">
        <h2>Submitted Information</h2>
        <p>Name: <?php echo ucwords($data['name']);?></p>
        <p>Dojo Location: <?php echo $data['location'];?></p>
        <p>Favorite Language: <?php echo $data['language'];?>!!!</p>
        <p>Comment: <?php echo $data['comment'];?></p>
        <a href="/"><button type="button" name="button">Go Back</button></a>
      </div>
    </div>
  </body>
</html>
