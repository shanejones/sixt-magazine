<?php
$background_image = block_field('background-image', false);
$title = block_field('title', false);
$sub_title = block_field('sub-title', false);

if($background_image) {
  $background_image_url = 'background-image: url(' . wp_get_attachment_url($background_image) . ');';
} else {
  $background_image_url = '';
}

?>
<div class="us-vfab-logo-block">
  <img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))) . 'images/sixt-logo-black.png'; ?>" alt="Sixt Logo">
</div>
<div class="us-vfab-header" style="<?php echo $background_image_url; ?>">

  <div class="us-vfab-header-content-wrapper">
    <div class="us-vfab-header-content-wrapper-inner">
      
      <div class="us-vfab-header-content">
        <?php if ($title): ?>
          <h1><?php echo $title; ?></h1>
        <?php endif; ?>

        <?php if ($sub_title): ?>
          <p><?php echo $sub_title; ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>