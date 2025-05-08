<?php
$background_image_id = block_field('background-image', false);
$background_image_mobile_id = block_field('background-image-mobile', false);
$title = block_field('title', false);
$content = block_field('content', false);
$link_text = block_field('link-text', false);
$link_url = block_field('link-url', false);

// Get image URLs from attachment IDs
$background_image = wp_get_attachment_image_url($background_image_id, 'full');
$background_image_mobile = wp_get_attachment_image_url($background_image_mobile_id, 'full');

// Get image titles for better display
$background_image_title = get_the_title($background_image_id);
$background_image_mobile_title = get_the_title($background_image_mobile_id);
?>
<div class="fr-qc-header-preview">
  <div class="preview-section">
    <h2>Header Block</h2>
    <p>Click to edit.</p>
    <p><strong>Background Image:</strong> 
      <?php if ($background_image): ?>
        <?php echo $background_image_title; ?> (ID: <?php echo $background_image_id; ?>)
      <?php else: ?>
        Not set
      <?php endif; ?>
    </p>
    <p><strong>Background Image Mobile:</strong> 
      <?php if ($background_image_mobile): ?>
        <?php echo $background_image_mobile_title; ?> (ID: <?php echo $background_image_mobile_id; ?>)
      <?php else: ?>
        Not set
      <?php endif; ?>
    </p>
    <p><strong>Title:</strong> <?php echo $title ? $title : 'Not set'; ?></p>
    <p><strong>Content:</strong> <?php echo $content ? $content : 'Not set'; ?></p>
    <p><strong>Link Text:</strong> <?php echo $link_text ? $link_text : 'Not set'; ?></p>
    <p><strong>Link URL:</strong> <?php echo $link_url ? $link_url : 'Not set'; ?></p>
  </div>
</div>