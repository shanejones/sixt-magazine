<?php
$front_part = esc_html(block_value('front-part'));
$middle_part = wp_get_attachment_image(block_value('middle-part'), 'full');
$end_part = esc_html(block_value('end-part'));
$main_heading = esc_html(block_value('main-heading'));

$main_heading = trim($main_heading);
$main_heading = preg_replace('/\s(?=\S*$)/', '&nbsp;', $main_heading);


?>


<div class="ras-hp-k9-header" style="background-image: url(<?php echo wp_get_attachment_image_url(block_value('background-image'), 'full'); ?>);">
  <div class="image-wrap">
    <img src="<?php echo plugin_dir_url(dirname(__DIR__)) . 'images/sixt-logo.png'; ?>" alt="Sixt Magazine" width="64px">
  </div>

  <p class="ras-hp-k9-text-wrap">
    <span><?php echo $front_part; ?></span>
    <?php echo $middle_part; ?>
    <span><?php echo esc_html(block_value('end-part')); ?></span>
  </p>
</div>
<div class="ras-hp-k9-header-title">
  <h1><?php echo $main_heading ?></h1>
</div>