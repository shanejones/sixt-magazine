<?php
$link = block_field('link', false);
$image_id = block_field('image', false); 
$title = block_field('title', false);

if ($image_id) {
    $image = wp_get_attachment_image_src($image_id, 'medium')[0];
}
?>


<li class="ras-hp-footer-item">
  <a href="<?php echo $link; ?>" target="_blank">
    <div class="ras-hp-footer-item-image">
      <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" />
    </div>
    <div class="ras-hp-footer-item-content">
      <p><?php echo $title; ?></p>
      <span></span>
    </div>
  </a>
</li>