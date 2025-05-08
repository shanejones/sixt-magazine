<?php
wp_dequeue_script('flexslider');
if (!wp_style_is('lightslider-css', 'enqueued')) {
    wp_enqueue_style('lightslider-css', plugins_url('../../scripts/lightslider/lightslider.min.css', __FILE__), array(), '1.1.6');
}
if (!wp_script_is('lightslider-js', 'enqueued')) {
    wp_enqueue_script('lightslider-js', plugins_url('../../scripts/lightslider/lightslider.min.js', __FILE__), array('jquery'), '1.1.6', true);
}
?>

<div class="ras-hp-footer-links-wrapper">
  <div class="ras-hp-footer-links <?php block_field('className'); ?>">
    <div class="ras-hp-footer-links-inner">
      <ul class="ras-hp-footer-links-slider">
        <?php echo block_value('items'); ?>
      </ul>
    </div>
  </div>  
</div>

<script type="text/javascript">
  (function($) {
    $(document).ready(function() {
      var slider = $('.ras-hp-footer-links-slider');
      
      function initSlider() {
        if (window.innerWidth > 480) {
          slider.lightSlider({
            item: 3,
            autoWidth: false,
            pager: true,
            loop: true,
            slideMove: 3,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed: 600,
            slideMargin: 0,
            controls: false,
            responsive: [
              {
                breakpoint: 800,
                settings: {
                  item: 2,
                  slideMove: 1
                }
              },
              {
                breakpoint: 600,
                settings: {
                  item: 1,
                  slideMove: 1
                }
              }
            ]
          });
        }
      }

      function destroySlider() {
        if (window.innerWidth <= 480) {
          slider.data('lightSlider').destroy();
        }
      }

      initSlider();

      $(window).on('resize', function() {
        if (window.innerWidth <= 480) {
          destroySlider();
        } else {
          if (!slider.data('lightSlider')) {
            initSlider();
          }
        }
      });
    });
  })(jQuery);
</script>