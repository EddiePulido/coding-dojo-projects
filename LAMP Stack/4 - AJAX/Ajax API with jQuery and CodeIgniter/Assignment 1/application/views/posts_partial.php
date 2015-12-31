<?php foreach($notes as $item): ?>
  <div class="note">
    <p><?php echo $item['description']; ?></p>
    <p>Created at: <?php echo $item['created_at']; ?></p>
  </div>
<?php endforeach; ?>
