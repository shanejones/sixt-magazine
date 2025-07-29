<?php
// Static counter to track slide numbers
static $slide_number = 0;
$slide_number++;

$location = block_field('location', false);
$measured_at = block_field('measured-at', false);
$main_image_id = block_field('main-image', false);
$water_image_id = block_field('water-image', false);

$main_image_html = wp_get_attachment_image($main_image_id, 'full', false, array('class' => 'main-image'));
$water_image_html = wp_get_attachment_image($water_image_id, 'full', false, array('class' => 'water-image'));
$main_image_url = wp_get_attachment_url($main_image_id);
$water_image_url = wp_get_attachment_url($water_image_id);
?>

<li class="ras-tots-slider-item <?php echo $slide_number === 1 ? 'ras-tots-slider-active' : ''; ?>" 
    data-index="<?php echo $slide_number - 1; ?>" 
    data-location="<?php echo esc_attr($location); ?>"
    data-measured-at="<?php echo esc_attr($measured_at); ?>"
    data-image="<?php echo esc_url($main_image_url); ?>"
    data-water-image="<?php echo esc_url($water_image_url); ?>">
    <div class="ras-tots-slider-item-inner">
        <?php echo $main_image_html; ?>
        <div class="ras-tots-water-image">
            <?php echo $water_image_html; ?>
        </div>
        <span class="ras-tots-slider-index"><?php echo $slide_number; ?></span>
    </div>
</li>
