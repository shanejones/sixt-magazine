<div class="ras-hp-image-content-wrap <?php echo block_value('image-location') === 'left' ? 'ras-hp-image-content-wrap-image-left' : 'ras-hp-image-content-wrap-image-right' ?>">
  <div class="ras-hp-image-content-item">
    <div class="ras-hp-image-wrap">
      <?php echo wp_get_attachment_image(block_value('image'), 'medium_large')  ?>
    </div>
  </div>
  <div class="ras-hp-image-content-item">
    <?php echo block_value('content'); ?>
  </div>
</div>