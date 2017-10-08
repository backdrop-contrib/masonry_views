<?php
/**
 * @file
 * Default view template to display content in a Masonry layout.
 *
 * - $title: The title of this group of rows.  May be empty.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are indexed by row number.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 *
 * @ingroup views_templates
 */
?>

<?php if (isset($grouping) && $grouping): ?>
  <?php if (!empty($title)): ?>
    <h3 style="clear:both;"><?php print $title; ?></h3>
    <?php endif; ?>
  <?php print $prefix ?>
<?php endif; ?>
<?php if (isset($rows)): ?>
  <?php foreach ($rows as $row_count => $row): ?>
    <div class="masonry-item<?php if ($row_classes[$row_count]) print ' ' . implode(' ', $row_classes[$row_count]); ?>">
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
<?php endif;?>
<?php if(isset($grouping) && $grouping): ?>
  <?php print $suffix ?>
<?php endif;?>
