<?php
$location = block_field('location', false);
$measured_at = block_field('measured-at', false);
$main_image = block_field('main-image', false);
$water_image = block_field('water-image', false);

$main_image_url = wp_get_attachment_url($main_image);
$water_image_url = wp_get_attachment_url($water_image);
?>

<div class="preview-wrapper">
    <div class="preview-inner-flex">
        <img src="<?php echo $main_image_url; ?>" alt="<?php echo $location; ?>" />
        <img src="<?php echo $water_image_url; ?>" alt="<?php echo $location; ?>" />
        <p><?php echo $location; ?> - <?php echo $measured_at; ?></p>
    </div>
</div>