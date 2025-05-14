<?php
$title = block_value('title');
$content = block_value('content');
$image = block_value('image');
?>

<div class="ras-sos-content">
  <div class="ras-sos-content-container">
    <p><?php echo $title; ?></p>
    <?php echo $content; ?>
  </div>
  <div class="ras-sos-content-image">
    <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" alt="">
  </div>
</div>