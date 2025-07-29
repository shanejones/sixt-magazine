<?php
$background_video = block_field('video', false);
$title = block_field('title', false);
$sub_title = block_field('sub-title', false);
$button_text = block_field('button-text', false);
$button_url = block_field('button-url', false);

$background_video_url = wp_get_attachment_url($background_video);

?>
<div class="ras-tots-header">
  <div class="ras-tots-logo-block">
    <img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))) . 'images/sixt-logo.png'; ?>" alt="Sixt Logo">
  </div>
  <div class="ras-tots-header-video-container">

    <video class="desktop-video" src="<?php echo $background_video_url; ?>" autoplay muted loop playsinline></video>

  </div>
  
  <div class="ras-tots-header-content-wrapper">
    <div class="ras-tots-header-content-wrapper-inner">
    <div class="ras-tots-header-content">
      <?php if ($title): ?>
        <h1><?php echo $title; ?></h1>
        <?php endif; ?>
        
        <?php if ($sub_title): ?>
          <p><?php echo $sub_title; ?></p>
        <?php endif; ?>

        <?php if ($button_url && $button_text): ?>
          <a href="<?php echo $button_url; ?>" class="ras-tots-header-link">
            <?php echo $button_text; ?> <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="currentColor"/></svg>
          </a>
      <?php endif; ?>
    </div>
    </div>
  </div>
</div>