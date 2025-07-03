<?php
// Enqueue ScrollMagic and GSAP for scroll animations from local files
wp_enqueue_script('gsap-js', plugins_url('../scripts/scrollmagic/gsap.min.js', __DIR__), array(), '3.12.2', true);
wp_enqueue_script('scrollmagic-js', plugins_url('../scripts/scrollmagic/ScrollMagic.min.js', __DIR__), array(), '2.0.8', true);
wp_enqueue_script('scrollmagic-gsap-js', plugins_url('../scripts/scrollmagic/animation.gsap.min.js', __DIR__), array('scrollmagic-js', 'gsap-js'), '2.0.8', true);

wp_enqueue_script('us-vfab-content-js', plugins_url('block.js', __FILE__), array('jquery', 'scrollmagic-js', 'gsap-js'), '2.0.0', true);



$uk_slider_items = [
  [
      'title' => 'This is the bridge name 1',
      'location' => 'Location, Country',
      'description' => '<p>The Hangzhou Bay Bridge is a remarkable feat of engineering and one of the longest sea-crossing bridges in the world. Spanning over 22 miles across China\'s Hangzhou Bay, it connects the cities of Jiaxing and Ningbo, cutting travel time and making long-distance drives along the coast more efficient and scenic. With its sleek design and impressive scale, driving across the bridge offers a unique experience. Surrounded by open water and sky, it\'s a moment of calm and awe in the middle of a journey. </p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/1-aix-en-provence.jpg'
  ],
  [
      'title' => 'This is the bridge name 2',
      'location' => 'Location, Country',
      'description' => '<p>The Hangzhou Bay Bridge is a remarkable feat of engineering and one of the longest sea-crossing bridges in the world. Spanning over 22 miles across China\'s Hangzhou Bay, it connects the cities of Jiaxing and Ningbo, cutting travel time and making long-distance drives along the coast more efficient and scenic. With its sleek design and impressive scale, driving across the bridge offers a unique experience. Surrounded by open water and sky, it\'s a moment of calm and awe in the middle of a journey. </p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/1-aix-en-provence.jpg'
  ],
  [
      'title' => 'This is the bridge name 3 ',
      'location' => 'Location, Country',
      'description' => '<p>The Hangzhou Bay Bridge is a remarkable feat of engineering and one of the longest sea-crossing bridges in the world. Spanning over 22 miles across China\'s Hangzhou Bay, it connects the cities of Jiaxing and Ningbo, cutting travel time and making long-distance drives along the coast more efficient and scenic. With its sleek design and impressive scale, driving across the bridge offers a unique experience. Surrounded by open water and sky, it\'s a moment of calm and awe in the middle of a journey. </p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/1-aix-en-provence.jpg'
  ],
  [
      'title' => 'This is the bridge name 4',
      'location' => 'Location, Country',
      'description' => '<p>The Hangzhou Bay Bridge is a remarkable feat of engineering and one of the longest sea-crossing bridges in the world. Spanning over 22 miles across China\'s Hangzhou Bay, it connects the cities of Jiaxing and Ningbo, cutting travel time and making long-distance drives along the coast more efficient and scenic. With its sleek design and impressive scale, driving across the bridge offers a unique experience. Surrounded by open water and sky, it\'s a moment of calm and awe in the middle of a journey. </p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/1-aix-en-provence.jpg'
  ],
  [
      'title' => 'This is the bridge name 5',
      'location' => 'Location, Country',
      'description' => '<p>The Hangzhou Bay Bridge is a remarkable feat of engineering and one of the longest sea-crossing bridges in the world. Spanning over 22 miles across China\'s Hangzhou Bay, it connects the cities of Jiaxing and Ningbo, cutting travel time and making long-distance drives along the coast more efficient and scenic. With its sleek design and impressive scale, driving across the bridge offers a unique experience. Surrounded by open water and sky, it\'s a moment of calm and awe in the middle of a journey. </p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/1-aix-en-provence.jpg'
  ],
];
?>





<div class="us-vfab-content-side-scroll-wrapper" id="us-vfab-content-pin-container">
  <div class="us-vfab-content-slides-container" id="us-vfab-content-slides">
    <div class="us-vfab-content-intro">
      <div class="us-vfab-content-intro-inner">
      <div class="us-vfab-content-intro-lead-content">
        <p>Bridges do more than just connect cities over bodies of water; they often define a city's skyline, becoming a symbol for locals and a dream destination for tourists around the world.</p>
      </div>
      <div class="us-vfab-content-intro-lead-image">
        <img src="<?php echo plugins_url('images/introduction-image.jpg', __FILE__); ?>" alt="Introduction Image">
      </div>
      <div class="us-vfab-content-intro-lower-content">
        <p>City skylines and sweeping views inspire a sense of pride and excitement for the place people are lucky enough to visit or call home. With that in mind, we ranked the top 200 bridges across the world based on height, length, and architectural significance - reviewing volume of traffic, Google reviews, search demand and social media to find the most iconic bridge views in the United States, United Kingdom and globally.</p>
        <p>Whether you're cruising into the city for the first time or chasing that golden hour view from a scenic overlook, make the most of the journey with a rental car that gets you there in style and comfort. Rent your ride today and let the road—and the view—lead the way.</p>
        <div class="us-vfab-content-intro-lower-content-buttons">
          <button id="scroll-us">Discover US</button>
          <button id="scroll-uk">Discover UK</button>
          <button id="scroll-global">Discover Global</button>
        </div>
      </div>
    </div>
    </div>
    <div class="us-vfab-content-us" id="vfab-us-items" style="background-image: url(<?php echo plugins_url('images/sea-tile.jpg', __FILE__); ?>);">
      <div class="us-vfab-content-cliffs" style="background-image: url(<?php echo plugins_url('images/left-cliffs.png', __FILE__); ?>);"></div>
      <div class="us-vfab-content-us-item">
        <div class="us-vfab-content-us-item-content">
          <h2>The most iconic bridge views in the u.s.</h2>
          <p>From the glowing cityscape seen on a night drive across the Brooklyn Bridge, welcoming you into Manhattan, to the peaceful views from the New River Gorge Bridge in the Appalachians, these structures offer more than just passage. They offer perspective.</p>
        </div>  
      </div>
      <div class="us-vfab-content-us-item">Item 1</div>
      <div class="us-vfab-content-us-item">Item 2</div>
      <div class="us-vfab-content-us-item">Item 3</div>
      <div class="us-vfab-content-cliffs" style="background-image: url(<?php echo plugins_url('images/right-cliffs.png', __FILE__); ?>);"></div>
      <div class="us-vfab-content-road" style="background-image: url(<?php echo plugins_url('images/road.png', __FILE__); ?>);"></div>
    </div>
    <div class="us-vfab-content-uk" id="vfab-uk-items">
      <div class="us-vfab-content-uk-inner">
        <h3>The most iconic bridge views in the UK</h3>
        
        <div class="uk-slider-container">
          <button class="uk-slider-nav uk-slider-prev" aria-label="Previous slide">
            <svg class="uk-slider-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.5 9L4.5 6L7.5 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          
          <div class="uk-slider-wrapper">
            <ul id="uk-bridges-slider" class="uk-slider-track">
              <?php foreach ($uk_slider_items as $index => $item) : ?>
                <li class="uk-slider-item <?php echo $index === 0 ? 'uk-slider-active' : ''; ?>" 
                    data-index="<?php echo $index; ?>" 
                    data-title="<?php echo esc_attr($item['title']); ?>"
                    data-location="<?php echo esc_attr($item['location']); ?>"
                    data-description="<?php echo esc_attr($item['description']); ?>">
                  <div class="uk-slider-item-inner">
                    <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>">
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          
          <button class="uk-slider-nav uk-slider-next" aria-label="Next slide">
            <svg class="uk-slider-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 3L7.5 6L4.5 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>
        
        <div class="uk-slider-content">
          <div class="uk-slider-content-inner">
            <h4 class="uk-slider-title"><?php echo $uk_slider_items[0]['title']; ?></h4>
            <p class="uk-slider-location"><?php echo $uk_slider_items[0]['location']; ?></p>
            <div class="uk-slider-description"><?php echo $uk_slider_items[0]['description']; ?></div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>