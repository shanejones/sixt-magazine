<?php
$image = block_value('image');
$content = block_value('content');
$title = block_value('title');
?>

<div class="ras-tots-content-wrapper">
  <div class="ras-tots-content-title">
    <?php echo $title; ?>
  </div>
  <div class="ras-tots-content">
    <?php echo $content; ?>
  </div>
  <div class="ras-tots-content-image">
    <?php echo wp_get_attachment_image($image, 'full', false, array('alt' => esc_attr($title))); ?>
  </div>
</div>