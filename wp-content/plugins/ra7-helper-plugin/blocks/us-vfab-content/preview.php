<?php
$start_intro = block_field('start-intro', false);
$start_content = block_field('start-content', false);

?>
<div class="us-vfab-content-preview">
  <div class="preview-section">
    <h2>View From a Bridge Main content block </h2>
    <p>Click to edit.</p>
    <p><strong>Start Intro:</strong> <?php echo $start_intro ? $start_intro : 'Not set'; ?></p>
    <p><strong>Start Content:</strong> <?php echo $start_content ? $start_content : 'Not set'; ?></p>
  </div>
</div>