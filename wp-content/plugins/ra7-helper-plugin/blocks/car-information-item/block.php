<?php
$image = block_value('image');
$title = block_value('title');
$content = block_value('content');
?>

<div class="ras-hp-car-information-item">
  <div class="image">
    <?php echo wp_get_attachment_image($image, 'full', false, array('alt' => esc_attr($title))); ?>
  </div>
  <div class="content">
    <p class="title"><?php echo $title; ?></p>
    <?php echo $content; ?>
  </div>
</div>