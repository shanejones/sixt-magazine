<?php
wp_dequeue_script('flexslider');
if (!wp_style_is('lightslider-css', 'enqueued')) {
    wp_enqueue_style('lightslider-css', plugins_url('../../scripts/lightslider/lightslider.min.css', __FILE__), array(), '1.1.6');
}
if (!wp_script_is('lightslider-js', 'enqueued')) {
    wp_enqueue_script('lightslider-js', plugins_url('../../scripts/lightslider/lightslider.min.js', __FILE__), array('jquery'), '1.1.6', true);
}

$title = block_field('title', false);
$description = block_field('description', false);

?>

<div class="ras-hp-car-carousel-wrapper">
  <div class="ras-hp-car-carousel <?php block_field('className'); ?>">
    <div class="ras-hp-car-carousel-inner">


      <?php if ($title) : ?>  
        <h2><?php echo $title ?></h2>
      <?php endif; ?>

      <?php if ($description) : ?>
        <div class="ras-hp-car-carousel-description"><?php echo $description ?></div>
      <?php endif; ?>
      
    
        <ul class="ras-hp-car-carousel-slider">
          <?php echo block_value('items'); ?>
        </ul>
    </div>
  </div>  
</div>

<script type="text/javascript">
  (function($) {
    $(document).ready(function() {
      $('.ras-hp-car-carousel-slider').lightSlider({
        item: 4,
        slideMove: 1,
        slideMargin: 10,
        loop: true,
        centerMode: false,
        pager: true,
        controls: true,
        enableDrag: true,
        enableTouch: true,
        responsive: [
          {
            breakpoint: 960,
            settings: {
              item: 2,
              slideMargin: 10,
              enableDrag: true,
              enableTouch: true,
              controls: true,
              pager: true,
              loop: true,
              centerMode: false
            }
          },
          {
            breakpoint: 480,
            settings: {
              item: 1,
              slideMargin: 10,
              enableDrag: true,
              enableTouch: true,
              controls: true,
              pager: true,
              loop: true,
              centerMode: true,
              centerPadding: '10%'
            }
          }
        ],
        onSliderLoad: function(el) {
          if ($(window).width() <= 480) {
            el.closest('.ras-hp-car-carousel').addClass('slider-active');
          } else {
            el.closest('.ras-hp-car-carousel').removeClass('slider-active');
          }
        },
        onResponsiveBreak: function(el) {
          if ($(window).width() <= 480) {
            el.closest('.ras-hp-car-carousel').addClass('slider-active');
          } else {
            el.closest('.ras-hp-car-carousel').removeClass('slider-active');
          }
        }
      });
    });
  })(jQuery);
</script>