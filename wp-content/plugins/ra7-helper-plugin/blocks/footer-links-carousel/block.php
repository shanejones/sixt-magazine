<?php
wp_dequeue_script('flexslider');

wp_enqueue_style('lightslider-css', plugins_url('../../scripts/lightslider/lightslider.min.css', __FILE__), array(), '1.1.6');
wp_enqueue_script('jquery');
wp_enqueue_script('lightslider-js', plugins_url('../../scripts/lightslider/lightslider.min.js', __FILE__), array('jquery'), '1.1.6', true);

wp_add_inline_script('lightslider-js', '
jQuery(document).ready(function($) {
  var slider = null;
  var sliderInitialized = false;
  var $sliderElement = $(".ras-hp-footer-links-slider");
  var $container = $(".ras-hp-footer-links-inner");
  var originalHtml = $container.html();
  var currentWidth = window.innerWidth;
  var resizeTimer;
  

  function forceReinitSlider() {
    if (sliderInitialized && slider) {
      try {
        slider.destroy();
      } catch(e) {
        console.error("Error destroying slider:", e);
      }
      sliderInitialized = false;
    }
    

    $container.html(originalHtml);
    $sliderElement = $(".ras-hp-footer-links-slider");
    
    if (window.innerWidth > 480) {
      try {
        slider = $sliderElement.lightSlider({
          item: 3,
          autoWidth: false,
          pager: true,
          loop: true,
          slideMove: 1,
          easing: "cubic-bezier(0.25, 0, 0.25, 1)",
          speed: 600,
          slideMargin: 0,
          controls: false,
          adaptiveHeight: false,
          responsive: [
            {
              breakpoint: 1280,
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
        sliderInitialized = true;
      } catch(e) {
        console.error("Error initializing slider:", e);
      }
    }
  }
  
  forceReinitSlider();
  
  $(window).on("resize", function() {
    var newWidth = window.innerWidth;
    
    if ((currentWidth > 480 && newWidth <= 480) || (currentWidth <= 480 && newWidth > 480)) {
      clearTimeout(resizeTimer);
      forceReinitSlider();
    }
    
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      forceReinitSlider();
    }, 250);
    
    currentWidth = newWidth;
  });
  
  $(window).on("orientationchange", function() {
    setTimeout(forceReinitSlider, 250);
  });
});
');
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