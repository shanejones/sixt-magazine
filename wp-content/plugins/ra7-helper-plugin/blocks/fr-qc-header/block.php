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
?>
<div class="fr-qc-header">
  <div class="fr-qc-header-content-wrapper">
    <div class="fr-qc-header-content gravity-container">
      <img src="<?php echo plugins_url('images/sixt-logo-black.png', dirname(dirname(__FILE__))); ?>" alt="Sixt Logo" class="fr-qc-header-sixt-logo">
      <p><svg id="Group_867" data-name="Group 867" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="83.24" height="99.65" viewBox="0 0 83.24 99.65">
  <defs>
    <clipPath id="clip-path">
      <rect id="Rectangle_4379" data-name="Rectangle 4379" width="83.24" height="99.65" fill="#1a1a1a"/>
    </clipPath>
  </defs>
  <g id="Group_634" data-name="Group 634" clip-path="url(#clip-path)">
    <path id="Path_41827" data-name="Path 41827" d="M25.026,78.873C-8.3,63.655-8.634,17.192,25.767,3.132c26.171-10.68,55.965,7.109,57.414,35.848.934,18.424-9.244,32.467-26.106,40.513a9.816,9.816,0,0,0-3.189,3.174q-6.023,8.378-11.757,16.726a.584.584,0,0,1-.795.168.547.547,0,0,1-.156-.152c-3.366-4.824-11.193-18.265-16.153-20.534M66.818,41.09A25.223,25.223,0,1,0,41.6,65.94,25.038,25.038,0,0,0,66.818,41.09" transform="translate(0 0)" fill="#1a1a1a"/>
    <path id="Path_41828" data-name="Path 41828" d="M113,94.862A16.823,16.823,0,1,1,95.93,111.683,16.947,16.947,0,0,1,113,94.862" transform="translate(-71.388 -70.593)" fill="#1a1a1a"/>
  </g>
</svg>
 Voyage en France</p>
      <h2><?php echo $title; ?></h2>
      <div class="fr-qc-header-text">
        <?php echo $content; ?>
      </div>
      <?php if ($link_url && $link_text): ?>
        <a href="<?php echo $link_url; ?>" class="fr-qc-header-link">
          <?php echo $link_text; ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
  <div class="fr-qc-header-image">
    <?php if ($background_image_mobile): ?>
      <img src="<?php echo $background_image_mobile; ?>" alt="<?php echo $title; ?>" class="mobile-image">
    <?php endif; ?>
    <?php if ($background_image): ?>
      <img src="<?php echo $background_image; ?>" alt="<?php echo $title; ?>" class="desktop-image">
    <?php endif; ?>
  </div>
</div>