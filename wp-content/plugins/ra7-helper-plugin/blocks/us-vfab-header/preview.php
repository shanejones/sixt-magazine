<?php
$title = block_field('title', false);
$sub_title = block_field('sub-title', false);

?>
<div class="us-vfab-header-preview">
  <div class="preview-section">
    <h2>Header Block</h2>
    <p>Click to edit.</p>
    <p><strong>Title:</strong> <?php echo $title ? $title : 'Not set'; ?></p>
    <p><strong>Sub title:</strong> <?php echo $sub_title ? $sub_title : 'Not set'; ?></p>
  </div>
</div>