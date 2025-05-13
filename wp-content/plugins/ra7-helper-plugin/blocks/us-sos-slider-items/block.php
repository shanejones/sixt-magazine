<?php
// Static counter to track slide numbers
static $slide_number = 0;
$slide_number++;

$title = block_field('title', false);
$state = block_field('state', false);
$thumbnail_id = block_field('thumbnail', false);
$main_image_id = block_field('main-image', false);

$thumbnail_html = wp_get_attachment_image($thumbnail_id, 'full', false, array('class' => 'thumbnail'));
$main_image_html = wp_get_attachment_image($main_image_id, 'full', false, array('class' => 'main-image'));
?>

<div class="ras-sos-slide">
    <div class="ras-sos-slide-background">
        <?php echo $main_image_html; ?>
        <div class="ras-sos-slide-gradient"></div>
    </div>
    <div class="ras-sos-slide-content">
        <div class="ras-sos-text">
            <p>#<?php echo $slide_number; ?></p>
            <h2><?php echo $title; ?></h2>
            <div class="ras-sos-state"><?php echo $state; ?></div>
        </div>
        <div class="ras-sos-thumbnail">
            <div class="ras-sos-thumbnail-nav">
                <button class="ras-sos-prev" aria-label="Previous slide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
                        <g id="Group_867" data-name="Group 867" transform="translate(-1341 -5647)">
                            <circle id="Ellipse_2" data-name="Ellipse 2" cx="18.5" cy="18.5" r="18.5" transform="translate(1378 5684) rotate(180)" fill="#fff"/>
                            <path id="Path_41831" data-name="Path_41831" d="M6.693,5.467a.87.87,0,0,1,0,1.229L1.484,11.9A.869.869,0,0,1,.254,10.676l4.6-4.6L.257,1.484A.869.869,0,0,1,1.486.255L6.7,5.464Z" transform="translate(1362 5672) rotate(180)" fill="#000"/>
                        </g>
                    </svg>
                </button>
                <?php echo $thumbnail_html; ?>
                <button class="ras-sos-next" aria-label="Next slide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
                        <g id="Group_868" data-name="Group 868" transform="translate(-1388 -5647)">
                            <circle id="Ellipse_1" data-name="Ellipse 1" cx="18.5" cy="18.5" r="18.5" transform="translate(1388 5647)" fill="#fff"/>
                            <path id="Path_41830" data-name="Path_41830" d="M6.693,5.467a.87.87,0,0,1,0,1.229L1.484,11.9A.869.869,0,0,1,.254,10.676l4.6-4.6L.257,1.484A.869.869,0,0,1,1.486.255L6.7,5.464Z" transform="translate(1404 5659)" fill="#000"/>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
