<?php 
    wp_enqueue_style('lightslider-css', plugins_url('../../scripts/lightslider/lightslider.min.css', __FILE__), array(), '1.1.6');
    wp_enqueue_script('fourish-js', 'https://public.flourish.studio/resources/embed.js', null, '1.0.0');

?>

<div class="ras-hp-flourish-table" id="flourish-table">
  <h2 class="ras-hp-h2 text-center"><?php echo block_value('title'); ?> </h2>
  
  <div class="ras-hp-flourish-table">
    <?php echo block_value('embed-code'); ?>
  </div>
</div>
