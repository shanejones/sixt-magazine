<?php
wp_dequeue_script('flexslider');
if (!wp_style_is('lightslider-css', 'enqueued')) {
    wp_enqueue_style('lightslider-css', plugins_url('../../scripts/lightslider/lightslider.min.css', __FILE__), array(), '1.1.6');
}
if (!wp_script_is('lightslider-js', 'enqueued')) {
    wp_enqueue_script('lightslider-js', plugins_url('../../scripts/lightslider/lightslider.min.js', __FILE__), array('jquery'), '1.1.6', true);
}
?>

<div class="ras-hp-car-carousel-wrapper">
  <div class="ras-hp-car-carousel <?php block_field('className'); ?>">
    <div class="ras-hp-car-carousel-inner">

      <h2><?php block_field('title'); ?></h2>
      <div class="ras-hp-car-carousel-description"><?php block_field('description'); ?></div>
      
    
      <div class="ras-hp-car-carousel-slider-wrapper">
        <ul class="ras-hp-car-carousel-slider">
          <?php echo block_value('items'); ?>
        </ul>
      </div>
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