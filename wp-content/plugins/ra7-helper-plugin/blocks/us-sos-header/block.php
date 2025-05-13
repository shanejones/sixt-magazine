<?php
$background_video_mobile = block_field('mobile-video', false);
$background_video = block_field('desktop-video', false);
$title = block_field('title', false);
$sub_title = block_field('sub-title', false);
$button_text = block_field('button-text', false);
$button_url = block_field('button-url', false);

$background_video_mobile_url = wp_get_attachment_url($background_video_mobile);
$background_video_url = wp_get_attachment_url($background_video);

?>
<div class="us-sos-header">
  <div class="us-sos-header-video-container">
    <?php if ($background_video_mobile): ?>
      <video class="mobile-video" src="<?php echo $background_video_mobile_url; ?>" autoplay muted loop playsinline></video>
    <?php endif; ?>

    <?php if ($background_video): ?>
      <video class="desktop-video" src="<?php echo $background_video_url; ?>" autoplay muted loop playsinline></video>
    <?php endif; ?>
  </div>
  
  <div class="us-sos-header-content-wrapper">
    <div class="us-sos-header-content-wrapper-inner">
    <div class="us-sos-header-content">
      <?php if ($sub_title): ?>
        <p><?php echo $sub_title; ?></p>
      <?php endif; ?>

      <?php if ($title): ?>
        <h1><?php echo $title; ?></h1>
      <?php endif; ?>

      <?php if ($button_url && $button_text): ?>
        <a href="<?php echo $button_url; ?>" class="us-sos-header-link">
          <?php echo $button_text; ?>
        </a>
      <?php endif; ?>
    </div>
    </div>
  </div>
</div>