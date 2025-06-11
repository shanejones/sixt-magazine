<?php
wp_dequeue_script('flexslider');
wp_enqueue_style('lightslider-css', plugins_url('../../scripts/lightslider/lightslider.min.css', __FILE__), array(), '1.1.6');
wp_enqueue_script('lightslider-js', plugins_url('../../scripts/lightslider/lightslider.min.js', __FILE__), array('jquery'), '1.1.6', true);
?>
<section class="ras-qc-content-orange fr-qc-key-findings">
  <div class="fr-qc-key-findings-inner">
    <h2 class="fr-qc-key-findings-title">POINTS CLÉS</h2>
    <div class="fr-qc-key-findings-slider-wrapper">
      <ul id="fr-qc-key-findings-slider">
        <li class="key-finding-item"><h3>#1</h3><p>Aix-en-Provence est la ville la plus calme de France selon le classement</p></li>
        <li class="key-finding-item"><h3>#2</h3><p>Helsinki, Oslo et Vienne sont les villes les plus calmes au monde en 2025</p></li>
        <li class="key-finding-item"><h3>#3</h3><p>Limoges obtient la meilleure note pour la qualité de ses espaces verts en France</p></li>
        <li class="key-finding-item"><h3>#4</h3><p>Portland est la ville qui offre les destinations touristiques les plus calmes</p></li>
        <li class="key-finding-item"><h3>#5</h3><p>Les habitants de Nîmes passent le moins de temps dans les bouchons</p></li>
      </ul>
    </div>
  </div>
</section>

<script>
  jQuery(document).ready(function($) {
    $("#fr-qc-key-findings-slider").lightSlider({
        item: 5,
        slideMove: 1,
        slideMargin: 10,
        loop: false,
        pager: false,       
        controls: false,    
        enableDrag: false,  
        enableTouch: false, 
        responsive : [
            {
                breakpoint: 1200, 
                settings: {
                    item: 2,
                    slideMargin: 10,
                    enableDrag: true,
                    enableTouch: true,
                    controls: true,
                    pager: true,
                    loop: false
                  }
            },
            {
                breakpoint: 768,  
                settings: {
                    item: 1,
                    slideMargin: 10,
                    enableDrag: true,
                    enableTouch: true,
                    controls: true,
                    pager: true,
                    loop: true
                 }
            }
        ],
        onSliderLoad: function(el) {
            
             if ($(window).width() < 1200) {
                 el.closest('.fr-qc-key-findings').addClass('slider-active');
             } else {
                 el.closest('.fr-qc-key-findings').removeClass('slider-active');
             }
        },
         onResponsiveBreak: function(el) {
            
            if ($(window).width() < 1200) {
                 el.closest('.fr-qc-key-findings').addClass('slider-active');
             } else {
                 el.closest('.fr-qc-key-findings').removeClass('slider-active');
             }
         }
    });
  });
</script>