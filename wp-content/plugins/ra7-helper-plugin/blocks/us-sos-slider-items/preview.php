<?php
$title = block_field('title', false);
$state = block_field('state', false);
$thumbnail = block_field('thumbnail', false);

$thumbnail_url = wp_get_attachment_url($thumbnail);
?>

<div class="fr-sos-slider-item-preview">
    <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $title; ?>" />
    <h2><?php echo $title; ?> - <?php echo $state; ?></h2>
</div>