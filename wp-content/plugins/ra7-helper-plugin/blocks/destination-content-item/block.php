<?php
$image = block_value('image');
$title = block_value('title');
$content = block_value('content');


$title_parts = explode(' ', $title, 2);
?>

<div class="ras-hp-destination-content-item">
  <div class="header">
    <div class="image">
      <?php echo wp_get_attachment_image($image, 'full', false, array('alt' => esc_attr($title))); ?>
    </div>
    <p class="title">
      <span class="first-part"><?php echo $title_parts[0]; ?></span>
      <?php if (isset($title_parts[1])) echo ' ' . $title_parts[1]; ?>
    </p>
  </div>
  <div class="content">
    <?php echo $content; ?>
  </div>
</div>