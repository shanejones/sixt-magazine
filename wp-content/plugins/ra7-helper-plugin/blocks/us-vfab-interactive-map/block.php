<?php
$map_locations = [
    [
        'title' => 'This is the bridge name',
        'location' => 'Location, Country',
        'description' => '<p>The Hangzhou Bay Bridge is a remarkable feat of engineering and one of the longest sea-crossing bridges in the world. Spanning over 22 miles across China\'s Hangzhou Bay, it connects the cities of Jiaxing and Ningbo, cutting travel time and making long-distance drives along the coast more efficient and scenic. With its sleek design and impressive scale, driving across the bridge offers a unique experience. Surrounded by open water and sky, it\'s a moment of calm and awe in the middle of a journey. </p>',
        'image' => plugin_dir_url( __FILE__ ) . 'map-images/1-aix-en-provence.jpg'
    ],
    [
        'title' => 'This is the bridge name',
        'location' => 'Location, Country',
        'description' => '<p>The Hangzhou Bay Bridge is a remarkable feat of engineering and one of the longest sea-crossing bridges in the world. Spanning over 22 miles across China\'s Hangzhou Bay, it connects the cities of Jiaxing and Ningbo, cutting travel time and making long-distance drives along the coast more efficient and scenic. With its sleek design and impressive scale, driving across the bridge offers a unique experience. Surrounded by open water and sky, it\'s a moment of calm and awe in the middle of a journey. </p>',
        'image' => plugin_dir_url( __FILE__ ) . 'map-images/1-aix-en-provence.jpg'
    ],
];

$map_svg_url = plugin_dir_url( __FILE__ ) . 'map-images/world-map.svg';

$map_markers = [
    ['top' => '85%', 'left' => '77%'],
    ['top' => '25%', 'left' => '35%'],
];
?>

<div class="us-vfab-interactive-map-container">
    <h2>The most iconic bridge views Worldwide</h2>
    <div class="us-vfab-interactive-map-inner">
        <div class="us-vfab-interactive-map-content-wrapper">
            <div class="us-vfab-interactive-map-content">
                <?php foreach ( $map_locations as $index => $location ) : ?>
                    <div class="us-vfab-map-location-item <?php echo $index === 0 ? 'active' : ''; ?>" data-location-index="<?php echo $index; ?>">
                        <p class="us-vfab-map-location-item-number"><?php echo $index + 1; ?></p>
                        <img src="<?php echo esc_url( $location['image'] ); ?>" alt="<?php echo esc_attr( $location['title'] ); ?>">
                        <div class="us-vfab-map-location-item-content-container">
                            <h3><?php echo esc_html( $location['title'] ); ?></h3>
                            <p><?php echo esc_html( $location['location'] ); ?></p>
                            <?php echo $location['description']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="us-vfab-map-navigation">
                <button class="us-vfab-nav-button us-vfab-nav-prev" id="prevButton">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 9L4.5 6L7.5 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="us-vfab-nav-button us-vfab-nav-next" id="nextButton">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L7.5 6L4.5 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <div class="us-vfab-interactive-map-image">
            <?php
            
                echo '<img class="main-map" src="' . esc_url( $map_svg_url ) . '" alt="' . esc_attr__( 'Interactive Map of France', 'ra7-helper-plugin' ) . '">' ;
            
            ?>
            
            <div class="us-vfab-map-markers">
                <?php foreach ( $map_markers as $index => $position ) : ?>
                    <button 
                        class="us-vfab-map-marker <?php echo $index === 0 ? 'active' : ''; ?>" 
                        data-index="<?php echo $index; ?>"
                        style="top: <?php echo $position['top']; ?>; left: <?php echo $position['left']; ?>;"
                    >
                        <svg class="us-vfab-marker-icon" height="25" viewBox="0 0 83.24 99.65" width="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><clipPath id="a"><path d="m0 0h83.24v99.65h-83.24z"/></clipPath><g clip-path="url(#a)" fill="currentColor"><path d="m25.026 78.873c-33.326-15.218-33.66-61.681.741-75.741 26.171-10.68 55.965 7.109 57.414 35.848.934 18.424-9.244 32.467-26.106 40.513a9.816 9.816 0 0 0 -3.189 3.174q-6.023 8.378-11.757 16.726a.584.584 0 0 1 -.795.168.547.547 0 0 1 -.156-.152c-3.366-4.824-11.193-18.265-16.153-20.534m41.793-37.785a25.223 25.223 0 1 0 -25.218 24.85 25.038 25.038 0 0 0 25.218-24.85"/><path d="m113 94.862a16.823 16.823 0 1 1 -17.07 16.821 16.947 16.947 0 0 1 17.07-16.821" transform="translate(-71.388 -70.593)"/></g></svg>
                        <?php echo $index + 1; ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const markers = document.querySelectorAll('.us-vfab-map-marker');
    const contentItems = document.querySelectorAll('.us-vfab-map-location-item');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    let currentIndex = 0;
    const totalItems = contentItems.length;
    
    function updateActiveState(index) {
        // Update active marker
        markers.forEach(m => m.classList.remove('active'));
        if (markers[index]) markers[index].classList.add('active');
        
        // Update active content
        contentItems.forEach(item => item.classList.remove('active'));
        if (contentItems[index]) contentItems[index].classList.add('active');
        
        // Update button states
        prevButton.disabled = index === 0;
        nextButton.disabled = index === totalItems - 1;
        
        currentIndex = index;
    }
    
    // Initialize button states
    updateActiveState(0);
    
    // Handle marker clicks
    markers.forEach(marker => {
        marker.addEventListener('click', function() {
            const index = parseInt(this.getAttribute('data-index'));
            updateActiveState(index);
        });
    });
    
    // Handle prev button click
    prevButton.addEventListener('click', function() {
        if (currentIndex > 0) {
            updateActiveState(currentIndex - 1);
        }
    });
    
    // Handle next button click
    nextButton.addEventListener('click', function() {
        if (currentIndex < totalItems - 1) {
            updateActiveState(currentIndex + 1);
        }
    });
});
</script>