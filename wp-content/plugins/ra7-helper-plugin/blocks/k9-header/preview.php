<div class="ras-hp-k9-header" style="background-image: url(<?php echo wp_get_attachment_image_url(block_value('background-image'), 'full'); ?>);">
  <p class="ras-hp-k9-text-wrap">
    <span><?php echo esc_html(block_value('front-part')); ?></span>
    <?php echo wp_get_attachment_image(block_value('middle-part'), 'full'); ?>
    <span><?php echo esc_html(block_value('end-part')); ?></span>
  </p>
</div>
<div class="ras-hp-k9-header-title">
  <h1><?php echo esc_html(block_value('main-heading')); ?></h1>
</div>