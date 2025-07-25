<?php
$title = block_field('title', false);
$sub_title = block_field('sub-title', false);
$button_text = block_field('button-text', false);
$button_url = block_field('button-url', false);


?>
<div class="preview-wrapper">
  <div class="preview-inner">
    <h2>Header Block</h2>
    <p>Click to edit.</p>
    <p><strong>Title:</strong> <?php echo $title ? $title : 'Not set'; ?></p>
    <p><strong>Sub title:</strong> <?php echo $sub_title ? $sub_title : 'Not set'; ?></p>
    <p><strong>Button Text:</strong> <?php echo $button_text ? $button_text : 'Not set'; ?></p>
    <p><strong>Button URL:</strong> <?php echo $button_url ? $button_url : 'Not set'; ?></p>
  </div>
</div>