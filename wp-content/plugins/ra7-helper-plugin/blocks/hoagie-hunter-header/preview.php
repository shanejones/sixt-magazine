<?php
$title = esc_html(block_value('title'));
$content = esc_html(block_value('content'));
$background_image = wp_get_attachment_image_url(block_value('background-image'), 'full');


$content = wp_kses_post(block_value('content'));


?>


<div class="ras-hp-hh-header"<?php if ($background_image): ?> style="background-image: url(<?php echo $background_image; ?>);"<?php endif; ?>>
  <div class="ras-hp-hh-content">
    <span>We're Hiring</span>
    <h1><?php echo $title; ?></h1>
    <?php echo $content; ?>
  </div>
</div>