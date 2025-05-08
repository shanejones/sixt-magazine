<div class="ras-hp-image-content-wrap">
  <div class="ras-hp-image-content-item">
    <?php echo block_value('image-location') === 'left' ? wp_get_attachment_image(block_value('image'), 'medium') : block_value('content'); ?>
  </div>
  <div class="ras-hp-image-content-item">
    <?php echo block_value('image-location') === 'right' ? wp_get_attachment_image(block_value('image'), 'medium') : block_value('content'); ?>
  </div>
</div>