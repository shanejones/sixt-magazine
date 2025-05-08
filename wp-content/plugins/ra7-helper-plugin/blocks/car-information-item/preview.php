<?php
$image = block_value('image');
$title = block_value('title');
$content = block_value('content');
?>

<div class="ras-hp-car-information-item">
  <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" alt="">
  <div>
    <p><?php echo $title; ?></p>
    <?php echo $content; ?>
  </div>
</div>