<?php
/**
 * @file
 * Default view template to display content in a Masonry layout.
 */
?>

<?php if (isset($grouping) && $grouping): ?>
  <?php if (!empty($title)): ?>
    <h3 style="clear:both;"><?php print $title; ?></h3>
    <?php endif; ?>
  <?php print $prefix ?>
<?php endif; ?>
<?php foreach ($rows as $row_count => $row): ?>
  <div class="masonry-item<?php if ($row_classes[$row_count]) print ' ' . implode(' ', $row_classes[$row_count]); ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
<?php if(isset($grouping) && $grouping): ?>
  <?php print $suffix ?>
<?php endif;?>
