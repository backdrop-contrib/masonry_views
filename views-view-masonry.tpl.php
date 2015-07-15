<?php
/**
 * @file
 * Default view template to display content in a Masonry layout.
 */
?>

<div id="<?php print $container_id; ?>">
  <?php foreach ($rows as $id => $row): ?>
    <div class="masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?>">
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
</div>
