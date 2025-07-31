<?php
// Enqueue ScrollMagic and GSAP for scroll animations from local files
wp_enqueue_script('gsap-js', plugins_url('../scripts/scrollmagic/gsap.min.js', __DIR__), array(), '3.12.2', true);
wp_enqueue_script('scrollmagic-js', plugins_url('../scripts/scrollmagic/ScrollMagic.min.js', __DIR__), array(), '2.0.8', true);
wp_enqueue_script('scrollmagic-gsap-js', plugins_url('../scripts/scrollmagic/animation.gsap.min.js', __DIR__), array('scrollmagic-js', 'gsap-js'), '2.0.8', true);

wp_enqueue_script('us-vfab-content-js', plugins_url('block.js', __FILE__), array('jquery', 'scrollmagic-js', 'gsap-js'), RAS_HP_VERSION, true);


$us_slider_items = [
  [
      'title' => 'Golden Gate Bridge',
      'location' => 'San Francisco, California',
      'description' => '<p>The Golden Gate Bridge tops our list as one of the bridges with the most iconic view in the world. Known for its signature red-orange color and sweeping Art Deco design, it\'s become a defining feature of <a href="https://www.sixt.com/car-rental/usa/san-francisco/" target="_blank">San Francisco</a> and a staple in popular culture. With over 3 million Instagram posts and countless appearances in movies and TV shows, the bridge draws millions of tourists each year, all hoping to catch a glimpse of its beauty stretching across the bay.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/1-golden-gate-bridge.jpg'
  ],
  [
      'title' => 'Brooklyn Bridge',
      'location' => 'New York, New York',
      'description' => '<p>The Brooklyn Bridge is one of <a href="https://www.sixt.com/car-rental/usa/new-york-city/" target="_blank">New York City\'s</a> most beloved landmarks, celebrated for its bold architecture and amazing views of the skyline. As a key feature of the city\'s iconic silhouette, it connects Manhattan and Brooklyn while standing tall as a symbol of New York\'s history and innovation. With over 4 million Instagram posts, the bridge continues to captivate tourists and locals alike, offering a perfect blend of design, culture, and cityscape magic.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/2-brooklyn-bridge.jpg'
  ],
  [
      'title' => 'New River Gorge Bridge',
      'location' => 'Victor, West Virginia',
      'description' => '<p>The New River Gorge Bridge in West Virginia is a breathtaking feat of engineering and one of America\'s most scenic crossings. Stretching across a lush, rugged gorge with the New River below, it offers stunning views from both the road and nearby lookouts. Despite its iconic status, it maintains low traffic of 153.4, offering a peaceful and uncrowded experience. A must-see for lovers of nature, design, and dramatic landscapes.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/3-new-river-gorge-bridge.jpg'
  ],
  [
      'title' => 'Chesapeake Bay Bridge-Tunnel',
      'location' => 'Virginia Beach, Virginia',
      'description' => '<p>The Chesapeake Bay Bridge-Tunnel in Virginia uniquely connects Virginia Beach to the Eastern Shore with a blend of bridge and tunnel. Stretching across the bay, it offers a one-of-a-kind drive from open water to beneath the bay. Travelers enjoy stunning, wide water views and a dramatic design. Whether first-time or frequent visitors, crossing this iconic structure provides a memorable glimpse of Virginia\'s beautiful coastline.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/4-chesapeake-bay-bridge-tunnel.jpg'
  ],
  [
      'title' => 'Mike O\'Callaghan–Pat Tillman Memorial Bridge',
      'location' => 'Boulder City, Nevada',
      'description' => '<p>The Mike O\'Callaghan–Pat Tillman Memorial Bridge spans the Colorado River between Nevada and Arizona near Hoover Dam. One of the highest concrete arch bridges worldwide, it offers stunning views of the dam, river, and desert. With a pedestrian walkway, visitors can enjoy the dramatic scenery up close. Despite its significance, it has low traffic, ensuring a peaceful visit. Whether driving or walking, it\'s a must-see marvel of engineering and natural beauty.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/5-mike-ocallaghan-pat-tillman-memorial-bridge.jpg'
  ],
  [
      'title' => 'Mackinac Bridge',
      'location' => 'Mackinaw City, Michigan',
      'description' => '<p>The Mackinac Bridge, or "Mighty Mac," is a stunning suspension bridge connecting Michigan\'s Upper and Lower Peninsulas. Opened in 1957, it spans over 26,000 feet, ranking among the longest suspension bridges worldwide. Each Labor Day, thousands join the Mackinac Bridge Walk, led by Michigan\'s governor, to cross on foot. The event offers incredible views of the bridge\'s towers and surrounding waterways, celebrating this iconic engineering marvel.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/6-mackinac-bridge.jpg'
  ],
  [
      'title' => 'Forest Hill Bridge',
      'location' => 'Auburn, California',
      'description' => '<p>The Foresthill Bridge, spanning the North Fork American River in Auburn, California, is the tallest bridge in the state, standing 730 feet above the river. Opened in 1973, it was initially constructed as part of the Auburn Dam project, which was ultimately never completed. Today, the bridge serves as a vital connection between Auburn and Foresthill, offering drivers and pedestrians panoramic views of the river canyon.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/7-foresthill-bridge.jpg'
  ],
  [
      'title' => 'San Francisco – Oakland Bay Bridge',
      'location' => 'San Francisco, California',
      'description' => '<p>The Oakland Bay Bridge, connecting San Francisco to Oakland, is an iconic structure that spans the San Francisco Bay. Opened in 1936, it is one of the busiest bridges in the United States. The bridge offers stunning views of the San Francisco skyline, the Golden Gate Bridge, and the surrounding waters. The Oakland Bay Bridge provides an amazing visual experience for drivers and pedestrians alike.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/8-san-francisco-oakland-bay-bridge.jpg'
  ],
  [
      'title' => 'George Washington Bridge',
      'location' => 'Fort Lee, New Jersey',
      'description' => '<p>The George Washington Bridge, one of the busiest and most iconic bridges in the world, spans the Hudson River, connecting New Jersey to New York City. Opened in 1931, it stretches over 4,700 feet and serves as a vital transportation link, handling millions of vehicles each year. Known for its unique design and central role in the region\'s infrastructure, the bridge offers stunning views of the Manhattan skyline.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/9-george-washington-bridge.jpg'
  ],
  [
      'title' => 'Glen Canyon Dam Bridge',
      'location' => 'Page, Arizona',
      'description' => '<p>The Glen Canyon Bridge, spanning the Colorado River in Arizona, is an awe-inspiring structure that connects U.S. Route 89 to the northern rim of the Grand Canyon. Opened in 1959, it stands 700 feet above the river, offering incredible views of the surrounding canyon and the river below. As a crucial access point to the Grand Canyon, pedestrians can walk across the bridge, gaining access to stunning views of nature in the short 10 to 15-minute walk.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/10-glen-canyon-dam-bridge.jpg'
  ],
  [
      'title' => 'Manhattan Bridge',
      'location' => 'New York, New York',
      'description' => '<p>The Manhattan Bridge connects Manhattan and Brooklyn, spanning the East River in NYC. Opened in 1909, it offers stunning views of the Manhattan skyline, Statue of Liberty, and Brooklyn Bridge. Serving vehicles, subway, pedestrians, and cyclists, it features a dedicated walkway for a scenic experience. Crossing by foot, bike, or car, visitors enjoy unique perspectives of iconic landmarks and the bustling river below.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/11-manhattan-bridge.jpg'
  ],
  [
      'title' => 'Rio Grande Gorge Bridge',
      'location' => 'Taos, New Mexico',
      'description' => '<p>The Rio Grande Gorge Bridge, spanning the Rio Grande River in northern New Mexico, is a stunning structure that connects the towns of Taos and Questa. Opened in 1965, it stands 565 feet above the river, offering amazing views of the deep gorge and the rugged landscape below. As one of the highest bridges in the United States, the Rio Grande Gorge Bridge provides a new perspective on the surrounding wilderness.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/12-rio-grande-gorge-bridge.jpg'
  ],
  [
      'title' => 'Arthur Ravenel Jr. Bridge',
      'location' => 'Charleston, South Carolina',
      'description' => '<p>The Arthur Ravenel Jr. Bridge, connecting downtown Charleston to Mount Pleasant, is a cable-stayed bridge that spans the Cooper River in South Carolina. Opened in 2005, it stands 574 feet above the water, offering stunning views of Charleston\'s historic skyline, the waterfront, and the bustling harbor. As one of the longest cable-stayed bridges in the United States, the Arthur Ravenel Jr. Bridge serves as a transportation link for the city of Charleston.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/13-athur-ravenel-jr-bridge.jpg'
  ],
  [
      'title' => 'Verrazano-Narrows Bridge',
      'location' => 'Staten Island, New York',
      'description' => '<p>The Verrazano-Narrows Bridge connects Staten Island to Brooklyn, spanning New York Harbor\'s entrance. Opened in 1964, it rises 693 feet above water, offering views of the Statue of Liberty, Manhattan skyline, and harbor. One of the world\'s longest suspension bridges, it\'s a vital route for vehicles and pedestrians. Its iconic design and massive presence symbolize NYC\'s engineering strength and serve as a key regional landmark.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/14-verrazzano-narrows-bridge.jpg'
  ],
  [
      'title' => 'Sunshine Skyway Bridge',
      'location' => 'St. Petersburg, Tampa',
      'description' => '<p>The Skyway Bridge, connecting St. Petersburg to the Tampa area, is an impressive cable-stayed bridge that spans across <a href="https://www.sixt.com/car-rental/usa/tampa/tampa-airport/" target="_blank">Tampa Bay</a> in Florida. Opened in 1987, it stands 430 feet above the water, offering stunning views of the bay, the surrounding coastline, and the city skyline. The Skyway Bridge serves as a major route for vehicles traveling between the Gulf Coast cities.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/15-sunshine-skyway-bridge.jpg'
  ],
  [
      'title' => 'Perrine Bridge',
      'location' => 'Twin Falls, Idaho',
      'description' => '<p>The Perrine Bridge, spanning the Snake River Canyon in Twin Falls, Idaho, is an iconic structure known for its impressive height and stunning views. Opened in 1976, it stands 486 feet above the river, offering breathtaking vistas of the canyon and the surrounding landscape. As one of the few bridges in the United States where base jumpers can legally jump, the Perrine Bridge draws adventure seekers from around the world.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/16-perrine-bridge.jpg'
  ],
  [
      'title' => 'Williamsburg Bridge',
      'location' => 'New York, New York',
      'description' => '<p>The Williamsburg Bridge connects Manhattan\'s Lower East Side to Brooklyn, spanning the East River. Opened in 1903, it stands 138 feet above water, offering unique views of the Manhattan skyline, Brooklyn Bridge, and waterfront. As one of NYC\'s oldest and busiest bridges, it serves vehicles and pedestrians alike. Its historic charm combined with modern use makes it a key part of the city\'s iconic bridge network.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/17-williamsburg-bridge.jpg'
  ],
  [
      'title' => 'Benjamin Franklin Bridge',
      'location' => 'Philadelphia, Pennsylvania',
      'description' => '<p>The Benjamin Franklin Bridge connects Philadelphia to Camden, NJ, spanning the Delaware River. Opened in 1926, it stands 135 feet above water, offering scenic views of the Philadelphia skyline and river. As one of the oldest iconic bridges in the region, it serves vehicles, pedestrians, and cyclists. Its striking design and historical significance make it a key part of Philadelphia\'s skyline and a symbol of the city\'s rich heritage.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/18-benjamin-franklin-bridge.jpg'
  ],
  [
      'title' => 'Phil G. McDonald Bridge',
      'location' => 'Beckley, West Virginia',
      'description' => '<p>The Phil G. McDonald Memorial Bridge spans Glade Creek near Beckley, West Virginia, and is one of the highest bridges in the U.S. Opened in the late 1980s, it offers stunning views and serves as a key part of Interstate 64, connecting communities. Named after Vietnam War hero Phil G. McDonald, the bridge combines engineering innovation with historical tribute, making it both a vital transportation route and a meaningful landmark.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/19-phil-g-mcdonald-bridge.jpg'
  ],
  [
      'title' => 'Sidney Lanier Bridge',
      'location' => 'Brunswick, Georgia',
      'description' => '<p>The Sidney Lanier Bridge in Brunswick, Georgia, is a striking cable-stayed bridge named after poet Sidney Lanier. Opened in 2003, it rises 480 feet above the Brunswick River, offering impressive views of the water and city. The bridge is a vital link between the mainland and the Port of Brunswick, supporting local and regional traffic. Its modern design and height make it an iconic landmark in Georgia\'s Golden Isles region.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'us-slider-images/20-sidney-lanier-bridge.jpg'
  ],
];


$uk_slider_items = [
  [
      'title' => 'London Bridge',
      'location' => 'London, United Kingdom',
      'description' => '<p>London Bridge may not have the dramatic arches of other landmarks, but its historical significance and central location make it one of the most recognized bridges in the world. Spanning the River Thames in the heart of London, it has seen centuries of change and remains a key crossing point in the city. With over one million monthly searches and 1.6 million hashtags on Instagram, London Bridge remains a cultural and historical touchstone in the United Kingdom.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/1-london-bridge.jpg'
  ],
  [
      'title' => 'Tower Bridge',
      'location' => 'London, United Kingdom',
      'description' => '<p>Tower Bridge is one of London\'s most iconic landmarks, known for its twin towers and distinctive drawbridge design. Spanning the River Thames, it\'s more than just a crossing—it\'s a key part of the London skyline. With striking architecture and panoramic views from its high-level walkways, it draws tourists and locals alike. With nearly 3 million Instagram hashtags, Tower Bridge remains a global symbol of London and a must-see city highlight.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/2-tower-bridge.jpg'
  ],
  [
      'title' => 'Queensferry Crossing Bridge',
      'location' => 'Queensferry, United Kingdom',
      'description' => '<p>The Queensferry Crossing, spanning the Firth of Forth in Scotland, is a modern engineering marvel and key part of the country\'s transport network. Opened in 2017, it stands alongside the historic Forth and Forth Road Bridges near Edinburgh. Its sleek design and scale make it a standout in modern bridge construction, offering panoramic views of the Scottish coast and North Sea. With 300,000 monthly searches and a low traffic score of 115.6, it\'s both practical and scenic.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/3-queensferry-crossing-bridge.jpg'
  ],
  [
      'title' => 'Humber Bridge',
      'location' => 'Barton-upon-Humber, United Kingdom',
      'description' => '<p>The Humber Bridge, a beloved UK landmark, is a remarkable suspension bridge spanning the Humber Estuary, connecting East Yorkshire to North Lincolnshire. Opened in 1981, it was once the longest single-span suspension bridge worldwide and remains an engineering marvel. Each year, thousands walk or cycle its length, enjoying sweeping views of the estuary and countryside. With elegant towers and a vital role in linking communities, it symbolizes connection, innovation, and regional pride.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/4-humber-bridge.jpg'
  ],
  [
      'title' => 'Forth Road Bridge',
      'location' => 'Edinburgh, Scotland',
      'description' => '<p>From the edge of the Firth of Forth, the Forth Road Bridge stretches across the sky like a silver thread. Its towers rise with quiet strength, reflecting where sea meets steel. Decades of travelers have crossed between Edinburgh and Fife, and now it carries a gentler rhythm of cyclists, walkers, and buses. With a low traffic score of 115.6, this iconic bridge stands as a peaceful monument to movement, bathed in salt air and Scottish light.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/5-forth-road-bridge.jpg'
  ],
  [
      'title' => 'Severn Bridge',
      'location' => 'Chepstow, United Kingdom',
      'description' => '<p>The Severn Bridge, spanning the River Severn and connecting England and Wales, is a landmark of British engineering. Opened in 1966, it was a vital upgrade to ferry services and transformed regional travel. Originally part of the M4 motorway, it now carries the M48 and serves both vehicles and pedestrians. With sweeping views of the estuary, the bridge remains a key link and a striking feature of the UK landscape.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/6-severn-bridge.jpg'
  ],
  [
      'title' => 'Prince of Wales Bridge',
      'location' => 'Severn Beach, United Kingdom',
      'description' => '<p>The Prince of Wales Bridge, formerly the Second Severn Crossing, spans the wide, windswept River Severn, connecting England and Wales. Opened in 1996 and renamed in 2018 to honor Prince Charles, it carries the M4 motorway while offering travelers sweeping views of sky and water. On clear days, the estuary glimmers beneath the cable-stayed bridge, with Welsh hills or English countryside rolling into the horizon, making the crossing feel cinematic rather than just a commute.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/7-prince-of-wales-bridge.jpg'
  ],
  [
      'title' => 'Clifton Suspension Bridge',
      'location' => 'Bristol, United Kingdom',
      'description' => '<p>The Clifton Suspension Bridge, an iconic symbol of Victorian engineering, spans the Avon Gorge, connecting Clifton in Bristol to Leigh Woods in North Somerset. Opened in 1864 and designed by Isambard Kingdom Brunel, it remains a marvel of 19th-century design. The bridge is open to pedestrians, offering a scenic walkway with wonderful views of the gorge and surrounding countryside, making it a favorite spot for locals and visitors alike.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/8-clifton-suspension-bridge.jpg'
  ],
  [
      'title' => 'Tees Transporter Bridge',
      'location' => 'Middlesbrough, United Kingdom',
      'description' => '<p>The Tees Transporter Bridge, spanning the River Tees in Middlesbrough, England, is a unique and historic structure known for its gondola-style design. Opened in 1911, it was built to allow ships to pass beneath while transporting vehicles and passengers across the river. Today, visitors can walk across the upper walkway of the bridge for panoramic views of the Tees Valley—an unforgettable experience blending engineering heritage with beautiful scenery.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/9-tees-transporter-bridge.jpg'
  ],
  [
      'title' => 'Tyne Bridge',
      'location' => 'Newcastle upon Tyne, United Kingdom',
      'description' => '<p>The Tyne Bridge, an iconic symbol of the North East, spans the River Tyne between Newcastle and Gateshead. Opened in 1928, this steel arch bridge was a marvel of its time, inspired by Sydney Harbour Bridge. It connects communities and remains vital for transport. Today, it\'s a stunning backdrop for events like the Great North Run, offering visitors striking views of Newcastle\'s historic Quayside and vibrant culture.</p>',
      'image' => plugin_dir_url( __FILE__ ) . 'uk-slider-images/10-tyne-bridge.jpg'
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
          <button type="button" id="scroll-us">Discover US</button>
          <button type="button" id="scroll-uk">Discover UK</button>
          <button type="button" id="scroll-global">Discover Global</button>
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
      <?php foreach ($us_slider_items as $index => $item) : ?>
        <div class="us-vfab-content-us-item" data-index="<?php echo $index; ?>">
          <div class="us-vfab-content-us-item-image-container">
            <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" class="us-vfab-content-us-item-image">
            <div class="us-vfab-content-us-item-overlay">
              <h4 class="us-vfab-content-us-item-title"><?php echo esc_html($item['title']); ?></h4>
              <p class="us-vfab-content-us-item-location"><?php echo esc_html($item['location']); ?></p>
            </div>

            <div class="us-vfab-content-us-item-description">
              <div class="us-vfab-content-us-item-description-content">
                <div class="us-vfab-content-us-item-description-content-inner">
                  <p><?php echo $item['description']; ?></p>
                </div>
              </div>
              <button class="us-vfab-content-us-item-toggle" aria-label="Toggle description">
                <svg class="us-vfab-content-us-item-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
          </div>
          <div class="us-vfab-content-us-item-index">
            <div class="us-vfab-content-us-item-index-inner">
              <?php echo $index + 1; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="us-vfab-content-cliffs" style="background-image: url(<?php echo plugins_url('images/right-cliffs.png', __FILE__); ?>);"></div>
      <div class="us-vfab-content-road" style="background-image: url(<?php echo plugins_url('images/road.png', __FILE__); ?>);"></div>
    </div>
    <div class="us-vfab-content-uk" id="vfab-uk-items" style="position: relative;">
      <div class="us-vfab-content-uk-inner">
        <div id="uk-scroll-anchor" style="position: absolute; top: 0; right: 0; width: 5px; height: 5px; pointer-events: none;" ></div>
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