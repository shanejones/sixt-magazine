<?php
// Enqueue the JavaScript for scroll jacking
wp_enqueue_script('us-vfab-content-js', plugins_url('block.js', __FILE__), array('jquery'), '1.0.0', true);
?>

<div class="us-vfab-content-side-scroll-wrapper">
  <div class="us-vfab-content-intro">
    <div class="us-vfab-content-intro-inner">
      <div class="us-vfab-content-intro-lead-content">
        <p>Bridges do more than just connect cities over bodies of water; they often define a city’s skyline, becoming a symbol for locals and a dream destination for tourists around the world.</p>
      </div>
      <div class="us-vfab-content-intro-lead-image">
        <img src="<?php echo plugins_url('images/introduction-image.jpg', __FILE__); ?>" alt="Introduction Image">
      </div>
      <div class="us-vfab-content-intro-lower-content">
        <p>City skylines and sweeping views inspire a sense of pride and excitement for the place people are lucky enough to visit or call home. With that in mind, we ranked the top 200 bridges across the world based on height, length, and architectural significance - reviewing volume of traffic, Google reviews, search demand and social media to find the most iconic bridge views in the United States, United Kingdom and globally.</p>
        <p>Whether you’re cruising into the city for the first time or chasing that golden hour view from a scenic overlook, make the most of the journey with a rental car that gets you there in style and comfort. Rent your ride today and let the road—and the view—lead the way.</p>
        <div class="us-vfab-content-intro-lower-content-buttons">
          <button id="scroll-us">Discover US</button>
          <button id="scroll-us">Discover UK</button>
          <button id="scroll-us">Discover Global</button>
        </div>
      </div>
    </div>
  </div>
  <div class="us-vfab-content-us" style="background-image: url(<?php echo plugins_url('images/sea-tile.jpg', __FILE__); ?>);">
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
  <div class="us-vfab-content-uk"></div>
</div>