<?php
$link = block_field('link', false);
$image_id = block_field('image', false); 
$title = block_field('title', false);
$button_text = block_field('button-text', false);
$image = '';

if ($image_id) {
    $image_details = wp_get_attachment_image_src($image_id, 'medium');
    if ($image_details) {
        $image = $image_details[0];
    }
}
?>


<li class="ras-hp-car-carousel-item" role="img" aria-label="<?php echo $title; ?>">
  <a href="<?php echo $link; ?>" target="_blank"  style="background-image: url('<?php echo $image; ?>');">
    <div class="ras-hp-car-carousel-item-content">
      <p><?php echo $title; ?></p>
    </div>
    <div class="ras-hp-car-carousel-item-footer">
      <p><?php echo $button_text; ?></p>
    </div>
  </a>
</li>