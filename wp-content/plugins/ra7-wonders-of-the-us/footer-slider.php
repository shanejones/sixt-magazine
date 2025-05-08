<div class="wous-footer">
  <div class="wous-footer-inner">
    <ul class="wous-link-slider">
      <li>
        <a href="https://www.sixt.com/magazine/road-trips/yosemite-firefall/" target="_blank">
          <div class="wous-image">
            <img src="<?php echo plugins_url('ra7-wonders-of-the-us/images/link-slider/yosemite-firefall.jpg')?>" alt="The Ultimate Road Trip Guide To Yosemite Firefall" />
        </div>
          <div class="wous-link-content">
            <p>The Ultimate Road Trip Guide To Yosemite Firefall</p>
            <span></span>
          </div>
        </a>
      </li>
      <li>
        <a href="https://www.sixt.com/magazine/road-trips/volcanoes-usa/" target="_blank">
          <div class="wous-image">
            <img src="<?php echo plugins_url('ra7-wonders-of-the-us/images/link-slider/volcano-road-trips.jpg')?>" alt="19 Epic Volcano One of A Kind Road Trips And Guide" />
          </div>
          <div class="wous-link-content">
            <p>19 Epic Volcano One of A Kind Road Trips And Guide</p>
            <span></span>
          </div>
        </a>
      </li>
      <li>
        <a href="https://www.sixt.com/magazine/road-trips/winter-grand-canyon/" target="_blank">
          <div class="wous-image">
            <img src="<?php echo plugins_url('ra7-wonders-of-the-us/images/link-slider/winter-road-grand-canyon.jpg')?>" alt="The Ultimate Winter Road Trip To The Grand Canyon" />
          </div>
          <div class="wous-link-content">
            <p>The Ultimate Winter Road Trip To The Grand Canyon</p>
            <span></span>
          </div>
        </a>
      </li>
      <li>
        <a href="https://www.sixt.com/magazine/road-trips/meteor-showers-us/" target="_blank">
          <div class="wous-image">
            <img src="<?php echo plugins_url('ra7-wonders-of-the-us/images/link-slider/meteor-showers.jpg')?>" alt="Meteor Showers To Look Out For In Cherry Springs State Park" />
          </div>
          <div class="wous-link-content">
            <p>Meteor Showers To Look Out For In Cherry Springs State Park</p>
            <span></span>
          </div>
        </a>
      </li>
      <li>
        <a href="https://www.sixt.com/best-deals/#/" target="_blank">
          <div class="wous-image">
            <img src="<?php echo plugins_url('ra7-wonders-of-the-us/images/link-slider/rental-car-deals.jpg')?>" alt="Best rental car deals" />
          </div>
          <div class="wous-link-content">
            <p>Best rental car deals</p>
            <span></span>
          </div>
        </a>
      </li>

    </ul>
  </div>
</div>

<script type="text/javascript">
  (function($) {
    
    $(document).ready(function() {

      $('.wous-link-slider').lightSlider({
          item: 5,
          autoWidth: false,
          pager: true,
          loop: true,
          slideMove: 5,
          easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
          speed: 600,
          slideMargin: 50,
          controls: true,
          // prevHtml: '<span class="wous-slider-button wous-slider-prev" aria-label="Go back a slide"></span>',
          // nextHtml: '<span class="wous-slider-button wous-slider-next" aria-label="Go forward a slide"></span>',
          responsive : [
            {
              breakpoint:1200,
              settings: {
                item:4,
                slideMove:2,
                slideMargin: 30,
              }
            },
            {
              breakpoint:1000,
              settings: {
                item:3,
                slideMove:2,
                slideMargin: 30,
              }
            },
            {
              breakpoint:800,
              settings: {
                item:2,
                slideMove:2,
              }
            },
            {
              breakpoint:600,
              settings: {
                item:1,
                slideMove:1,
                slideMargin: 10,
              }
            },
          ],
      });  
    })

  })(jQuery);
</script>

