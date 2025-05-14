<?php
$image = block_value('image');
$content = block_value('content');
$title = block_value('title');
?>

<div class="ras-sos-content-wrapper">
  <div class="ras-sos-content-title">
    <?php echo $title; ?>
  </div>
  <div class="ras-sos-content">
    <?php echo $content; ?>
  </div>
  <div class="ras-sos-content-image">
    <?php echo wp_get_attachment_image($image, 'full', false, array('alt' => esc_attr($title))); ?>
  </div>
</div>