<?php
$background_image = block_field('background-image', false);
$title = block_field('title', false);
$sub_title = block_field('sub-title', false);

if($background_image) {
  $background_image_url = 'background-image: url(' . wp_get_attachment_url($background_image) . ');';
} else {
  $background_image_url = '';
}

?>
<div class="us-vfab-header" style="<?php echo $background_image_url; ?>"> 
  <div class="us-vfab-logo-block">
    <img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))) . 'images/sixt-logo.png'; ?>" alt="Sixt Logo">
  </div>
  
  <div class="us-vfab-header-content-wrapper">
    <div class="us-vfab-header-content-wrapper-inner">
      <div class="us-vfab-header-content">
        <?php if ($title): ?>
          <?php 
            $words = explode(' ', $title);
            $last_word = array_pop($words);
            $remaining_title = implode(' ', $words);
          ?>
          <h1 class="font-helvetica-now-condensed">
            <?php if (!empty($remaining_title)): ?>
              <?php echo $remaining_title; ?> 
            <?php endif; ?>
            <span class="last-word-outline"><?php echo $last_word; ?></span>
          </h1>
        <?php endif; ?>

        <?php if ($sub_title): ?>
          <p><?php echo $sub_title; ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="us-vfab-header-bottom-tab">
    <p>Scroll Down <svg xmlns="http://www.w3.org/2000/svg" width="12.158" height="6.947" viewBox="0 0 12.158 6.947">
  <path id="Path_41830" data-name="Path 41830" d="M6.693,5.467a.87.87,0,0,1,0,1.229L1.484,11.9A.869.869,0,0,1,.254,10.676l4.6-4.6L.257,1.484A.869.869,0,0,1,1.486.255L6.7,5.464Z" transform="translate(12.159) rotate(90)"/>
</svg>
</p>
    <div class="us-vfab-header-bottom-tab-lower">
    </div>
  </div>
</div>