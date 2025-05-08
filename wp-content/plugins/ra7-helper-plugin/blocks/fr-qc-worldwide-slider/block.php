<?php
wp_dequeue_script('flexslider');

$script_handle = 'ra7-worldwide-slider-js'; 

if (!wp_style_is('lightslider-css', 'enqueued')) {
    wp_enqueue_style('lightslider-css', plugins_url('../../scripts/lightslider/lightslider.min.css', __FILE__), array(), '1.1.6');
}

if (!wp_script_is('lightslider-js', 'enqueued')) {
    
    wp_enqueue_script('lightslider-js', plugins_url('../../scripts/lightslider/lightslider.min.js', __FILE__), array('jquery'), '1.1.6', true);
}


wp_enqueue_script($script_handle, '#', array('jquery', 'lightslider-js'), null, true);

$slider_locations = [
    [
        'title' => 'Helsinki est la ville la plus calme du monde',
        'description' => '<p>Cette capitale nordique se distingue comme la ville la plus calme du monde grâce à ses faibles niveaux de pollution sonore (22,96 sur notre échelle, la plus basse du monde) et à l\'abondance de ses espaces verts (86,32/100). Avec ses innombrables lacs, parcs et zones de silence, Helsinki offre un refuge paisible malgré son statut de capitale. De plus, sa densité de population relativement faible par rapport aux autres capitales contribue à son ambiance paisible, permettant aux visiteurs de profiter d\'un cadre plus calme, même en centre-ville.</p>',
        'image' => plugin_dir_url( __FILE__ ) . 'images/1-helsinki.jpg'
    ],
    [
        'title' => 'Oslo est l\'une des villes qui reçoit le moins de touristes au monde (par 10km)
',
        'description' => '<p>Entourée de forêts et de fjords, Oslo se classe parmi les villes les plus tranquilles du monde grâce à sa faible densité de population (2 425 habitants/km²) et à sa pollution sonore minimale (31,57/100). Avec un air de grande qualité et un fort engagement en faveur des espaces verts, la ville offre un cadre détendu et relaxant. De plus, Oslo présente l\'un des niveaux les plus bas de pollution lumineuse parmi les grandes destinations mondiales, ce qui en fait un endroit idéal pour ceux en quête de paix et de beauté naturelle.</p><p>Si vous prévoyez un voyage à Oslo, pourquoi ne pas en profiter pour découvrir les paysages spectaculaires du pays ? Louez une voiture et partez en <a href="https://www.sixt.fr/magazine/voyages/road-trip-norvege-7-destinations-incontournables/" target="_blank">road trip à travers la Norvège</a> avec ces 7 destinations incontournables pour une aventure inoubliable.</p>',
        'image' => plugin_dir_url( __FILE__ ) . 'images/2-oslo.jpg'
    ],
    [
        'title' => 'Vienne est la capitale avec le trafic le plus fluide parmi les grandes capitales mondiales
',
      'description' => '<p>Le mélange de patrimoine culturel et d\'espaces ouverts fait de Vienne l\'une des villes les plus sereines d\'Europe. Elle se distingue par ses espaces verts bien entretenus et ses faibles niveaux de pollution sonore. Bien que plus densément peuplée qu\'Oslo ou Helsinki, avec 4 801 habitants/km², Vienne parvient à maintenir une atmosphère détendue grâce à sa gestion des espaces verts et à son urbanisme réfléchi. Vous pouvez flâner dans les jardins du château de Schönbrunn, vous détendre le long du Danube ou profiter des nombreux parcs qui parsèment la ville.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'images/3-vienna.jpg'
  ],
  [
      'title' => 'Auckland est l\'une des villes avec la plus faible pollution lumineuse au monde',
      'description' => '<p>Avec une faible densité de population (2 657 habitants/km²) et des espaces verts de qualité (82,23/100), Auckland figure parmi les villes les plus tranquilles du monde. La ville bénéficie d\'une abondance de parcs et de réserves naturelles, offrant de nombreux espaces de quiétude loin du bruit urbain. Son niveau de pollution sonore inférieur à celui d\'autres grandes villes contribue à une ambiance plus sereine, permettant aux visiteurs de profiter du paysage sans le bourdonnement constant de la circulation ou des foules denses. De plus, le cadre côtier et les paysages naturels environnants d\'Auckland contribuent à atténuer le bruit, en faisant une destination idéale pour ceux en quête de calme et de relaxation.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'images/4-auckland.jpg'
  ],
  [
      'title' => 'Amsterdam est l\'une des villes avec le moins de pollution lumineuse et de trafic au monde',
      'description' => '<p>Malgré l\'afflux annuel de millions de visiteurs, Amsterdam se distingue comme l\'une des villes les plus calmes du monde, offrant un équilibre rare entre tourisme et tranquillité. Ses nombreux espaces verts (84,38/100) permettent de s\'échapper du dynamisme urbain, tandis que sa pollution sonore relativement faible assure une expérience plus détendue pour les résidents et les voyageurs. En comparaison, Copenhague, bien qu\'elle aussi reconnue pour sa qualité de vie, affiche une densité de population plus élevée (15 764 habitants/km² contre 5 389 à Amsterdam), rendant certains quartiers plus animés. Flânez le long des canaux, explorez les nombreux parcs comme le Vondelpark, ou profitez d\'une balade à vélo dans cette ville qui privilégie les mobilités douces.</p><p>Si vous visitez Amsterdam, suivez nos <a href="https://www.sixt.fr/magazine/guides-et-conseils/conseils-de-conduite-aux-pays-bas/" target="_blank">conseils de conduite aux Pays-Bas</a> pour un voyage en toute sérénité.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'images/5-amsterdam.jpg'
  ],
];

wp_localize_script($script_handle, 'worldwideSliderData', array(
  'locations' => $slider_locations
));

?>
<section class="ras-qc-content-black fr-qc-worldwide-slider slider-active">
  <div class="fr-qc-worldwide-slider-inner">
    <h2 class="fr-qc-worldwide-slider-title">Worldwide destinations slider</h2>
    <div class="fr-qc-worldwide-slider-slider-wrapper">
      <ul id="fr-qc-worldwide-slider">
        <?php foreach ($slider_locations as $location) : ?>
          <li class="fr-qc-worldwide-slider-item">
            <img src="<?php echo esc_url($location['image']); ?>" alt="<?php echo esc_attr($location['title']); ?>">
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="fr-qc-worldwide-slider-content-wrapper">
        <?php if (!empty($slider_locations)) : ?>
            <p class="slider-content-number">#1</p>
            <h2 id="slider-content-title"><?php echo esc_html($slider_locations[0]['title']); ?></h2>
            <div id="slider-content-description">
                <?php echo $slider_locations[0]['description']; ?>
            </div>
        <?php endif; ?>
    </div>

  </div>
</section>

<script>
  
  (function($) {
    $(document).ready(function() {
        const sliderElement = $("#fr-qc-worldwide-slider");
        const titleElement = $('#slider-content-title');
        const descriptionElement = $('#slider-content-description');

        
        if (typeof worldwideSliderData === 'undefined' || !worldwideSliderData.locations) {
            console.error('Slider data not found.');
            return; 
        }

        const locationsData = worldwideSliderData.locations;

        sliderElement.lightSlider({
            item: 1,
            slideMove: 1,
            slideMargin: 10,
            loop: true,
            centerMode: true,
            centerPadding: '10%',
            pager: true,
            controls: true,
            enableDrag: true,
            enableTouch: true,
            responsive: [
              {
                breakpoint: 480,
                settings: {
                  slideMargin: 0,
                }
              },
            ],
            onAfterSlide: function (el, scene) {
                
                const currentSlideIndex = sliderElement.getCurrentSlideCount() - 1;
                const slideNumberElement = $('.slider-content-number');
                
                if (locationsData[currentSlideIndex]) {
                    titleElement.text(locationsData[currentSlideIndex].title);
                    descriptionElement.html(locationsData[currentSlideIndex].description); 
                    slideNumberElement.text('#' + (currentSlideIndex + 1)); 
                }
            }
        });
    });
  })(jQuery);
</script>