<?php

/**
 * Get attachment ID by filename using WordPress native functions
 * 
 * @param string $filename The filename to search for
 * @return int|false The attachment ID if found, false otherwise
 */
function get_attachment_id_by_filename( $filename ) {
    // First try to find exact filename match
    $posts = get_posts([
        'post_type' => 'attachment',
        'meta_key' => '_wp_attached_file',
        'meta_value' => $filename,
        'meta_compare' => '=',
        'posts_per_page' => 1,
        'fields' => 'ids'
    ]);
    
    if ( !empty( $posts ) ) {
        return $posts[0];
    }
    
    // If no exact match, try with LIKE for partial matches
    $posts = get_posts([
        'post_type' => 'attachment',
        'meta_key' => '_wp_attached_file',
        'meta_value' => $filename,
        'meta_compare' => 'LIKE',
        'posts_per_page' => 1,
        'fields' => 'ids'
    ]);
    
    return !empty( $posts ) ? $posts[0] : false;
}

$map_data = [
    [
        'rank' => 1,
        'location' => 'Bay of Kotor',
        'country' => 'Montenegro',
        'measured_at' => '(Measured at Perast)',
        'description' => 'The Bay of Kotor is a stunning bay on the Adriatic Sea in Southwestern Montenegro and also a UNESCO World Heritage Site. Known for its breathtaking beauty and blue hues, this sweeping fjord is perfect for those looking for sweeping landscapes and dramatic views on their next getaway.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-1-bay-of-kotor-montenegro.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-1-bay-of-kotor-montenegro-water-texture-swatch.jpg',
        'hex' => '#0086BF',
        'l' => 47.06,
        'a' => -40.8,
        'b' => -48.59,
    ],
    [
        'rank' => 2,
        'location' => 'The Blue Grotto',
        'country' => 'Malta',
        'measured_at' => null,
        'description' => 'Home to a network of exquisite sea caves, The Blue Grotto is a must-visit for those visiting the beautiful country of Malta. If you’re looking for a unique idyllic experience, a boat ride to this hotspot can’t be missed.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-2-the-blue-grotto-malta.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-2-the-blue-grotto-malta-water-texture-swatch.jpg',
        'hex' => '#0067AC',
        'l' => 40.14,
        'a' => -9.84,
        'b' => -47.4,
    ],
    [
        'rank' => 3,
        'location' => 'Lake Bled',
        'country' => 'Slovenia',
        'measured_at' => '(Measured at Bled)',
        'description' => 'Lake Bled is an extremely popular body of water in Slovenia, with gorgeous turquoise waters and picturesque views. Often referred to as the ‘pearl of Slovenia’, the lake is home to the Church of the Assumption of the Blessed Virgin Mary.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-3-lake-bled-slovenia.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-3-lake-bled-slovenia-water-texture-swatch.jpg',
        'hex' => '#006BA6',
        'l' => 38.39,
        'a' => -29.82,
        'b' => -47.04,
    ],
    [
        'rank' => 4,
        'location' => 'Derwentwater',
        'country' => 'England',
        'measured_at' => '(Measured at Keswick)',
        'description' => 'With iconic views of Cat Bells and Maiden Moor, Derwentwater is located near the quaint town of Keswick in the Lake District. With scenic boat trips available, this lake offers gorgeous blue waters to visitors.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-4-derwentwater-england.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-4-derwentwater-england-water-texture-swatch.jpg',
        'hex' => '#407EC9',
        'l' => 51.1,
        'a' => -1.33,
        'b' => -46.51,
    ],
    [
        'rank' => 5,
        'location' => 'River Rhine',
        'country' => 'Germany',
        'measured_at' => '(Measured at Cochem)',
        'description' => 'Originating in the Swiss Alps and merging with the North Sea in the Netherlands, the River Rhine runs through six European countries. Over 1,200km long in length, the river boasts gorgeous blue colors that vacationers can explore.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-5-river-rhine-germany.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-5-river-rhine-germany-water-texture-swatch.jpg',
        'hex' => '#5F8DDA',
        'l' => 57.78,
        'a' => 0.92,
        'b' => -45.45,
    ],
    [
        'rank' => 6,
        'location' => 'Bay of Biscay',
        'country' => 'Spain',
        'measured_at' => '(Measured at Cape Villano)',
        'description' => 'A hotspot for whale and dolphin sightings, the Bay of Biscay is a perfect option for those looking for a glimpse into marine life on their next vacation. And with the accompaniment of gorgeous blue waters and magnificent views, the Bay of Biscay has something for everyone.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-6-bay-of-biscay-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-6-bay-of-biscay-spain-water-texture-swatch.jpg',
        'hex' => '#008BC4',
        'l' => 52.16,
        'a' => -23.3,
        'b' => -41.99,
    ],
    [
        'rank' => 7,
        'location' => 'Bay of Vigo',
        'country' => 'Spain',
        'measured_at' => '(Measured at Vigo)',
        'description' => 'The Bay of Vigo is one of Europe`s largest fishing ports, receiving fresh fish and seafood from all over the continent. Offering boat tours and sailing for visitors, the Bay of Vigo is a popular destination for tourists looking to capture the sight of gorgeous blue waters.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-7-bay-of-vigo-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-7-bay-of-vigo-spain-water-texture-swatch.jpg',
        'hex' => '#2774AE',
        'l' => 46.1,
        'a' => -8.68,
        'b' => -38.85,
    ],
    [
        'rank' => 8,
        'location' => 'Kielder Water',
        'country' => 'England',
        'measured_at' => '(Measured at Northumberland)',
        'description' => 'Kielder Water is the largest man-made reservoir in Europe and is home to many hiking and cycling trails. Surrounded by Kielder Forest, this destination is perfect for vacationers looking for both green and blue experiences on their next trip. And known for having some of the darkest skies in England, this hotspot is a great option for those looking to stargaze.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-8-kielder-water-england.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-8-kielder-water-england-water-texture-swatch.jpg',
        'hex' => '#6680C3',
        'l' => 53.71,
        'a' => 3.67,
        'b' => -38.31,
    ],
    [
        'rank' => 9,
        'location' => 'Calanques de Cassis',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'This southern France beauty is popular with outdoor enthusiasts due to the unique landscape of coves and network of hiking trails. The turquoise water makes for an unforgettable experience, with many people taking a dip in the crystal-clear depths.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-9-calanques-de-cassis-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-9-calanques-de-cassis-france-water-texture-swatch.jpg',
        'hex' => '#009CCF',
        'l' => 58.89,
        'a' => -22.38,
        'b' => -37.94,
    ],
    [
        'rank' => 10,
        'location' => 'Galway Bay',
        'country' => 'Ireland',
        'measured_at' => '(Measured at Galway)',
        'description' => 'Galway Bay offers spectacular coastal landscapes, delicious seafood, picturesque villages, as well as gorgeous blue waters - take a walk along the Salthill Promenade for a scenic walk along the bay.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-10-galway-bay-ireland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-10-galway-bay-ireland-water-texture-swatch.jpg',
        'hex' => '#517DB9',
        'l' => 50.93,
        'a' => -1.91,
        'b' => -37.22,
    ],
    [
        'rank' => 11,
        'location' => 'River Vistula',
        'country' => 'Poland',
        'measured_at' => '(Measured at Krakow)',
        'description' => 'Flowing through Krakow and Warsaw, the River Vistula is a symbol of Poland. With deep blue waters, the river is known for its cultural and historical relevance, where visitors can view the local landscapes from the comfort of a relaxing river cruise.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-11-river-vistula-poland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-11-river-vistula-poland-water-texture-swatch.jpg',
        'hex' => '#004677',
        'l' => 26.52,
        'a' => -10.58,
        'b' => -37.12,
    ],
    [
        'rank' => 12,
        'location' => 'River Loire',
        'country' => 'France',
        'measured_at' => '(Measured at Auvergne-Rhône-Alpes)',
        'description' => 'The River Loire is the longest river in France, over 1,000 kilometers long. Winding through the picture-perfect Loire Valley, visitors can enjoy the many local vineyards and castles lining the river bank.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-12-river-loire-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-12-river-loire-france-water-texture-swatch.jpg',
        'hex' => '#298FC2',
        'l' => 54.99,
        'a' => -16.06,
        'b' => -36.37,
    ],
    [
        'rank' => 13,
        'location' => 'Lake Thun',
        'country' => 'Switzerland',
        'measured_at' => '(Measured at Canton of Bern)',
        'description' => 'Lake Thun’s turquoise waters make it a popular destination for tourists. Not only can vacationers enjoy boat trips to view the dazzling blue hues up close, but they can also make use of the many local hiking trails and even take in the picturesque views of the surrounding local castles.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-13-lake-thun-switzerland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-13-lake-thun-switzerland-water-texture-swatch.jpg',
        'hex' => '#4698CA',
        'l' => 59.17,
        'a' => -13.9,
        'b' => -34.78,
    ],
    [
        'rank' => 14,
        'location' => 'Geirangerfjord',
        'country' => 'Norway',
        'measured_at' => '(Measured at Ørnesvingen Viewpoint)',
        'description' => 'This UNESCO World Heritage Site is renowned for its beauty. With gorgeous turquoise waters, lush greenery, picturesque views and dramatic waterfalls, Geirangerfjord is an essential destination for those looking for a nature and adventure experience in Europe.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-14-geirangerfjord-norway.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-14-geirangerfjord-norway-water-texture-swatch.jpg',
        'hex' => '#3AA5D5',
        'l' => 63.0,
        'a' => -20.28,
        'b' => -34.69,
    ],
    [
        'rank' => 15,
        'location' => 'Lago di Bracciano',
        'country' => 'Italy',
        'measured_at' => '(Measured at Anguillara Sabazia)',
        'description' => 'Just 30 kilometers north of Rome, Lago di Bracciano would make a lovely addition to an Italian road trip itinerary. With lovely calm water and charming local towns, there truly is something for everyone to enjoy at this hotspot.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-15-lago-di-bracciano-italy.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-15-lago-di-bracciano-italy-water-texture-swatch.jpg',
        'hex' => '#077CAB',
        'l' => 47.96,
        'a' => -16.69,
        'b' => -34.44,
    ],
    [
        'rank' => 16,
        'location' => 'Gulf of Lyon',
        'country' => 'France',
        'measured_at' => '(Measured at Marseille)',
        'description' => 'With vast sandy beaches and salt marshes the Gulf of Lyon is a picturesque hotspot many vacationers enjoy visiting. Home to varied marine life such as bottlenose dolphins, the many local attractions make the Gulf a must-visit destination for those looking for adventure.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-16-gulf-of-lyon-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-16-gulf-of-lyon-france-water-texture-swatch.jpg',
        'hex' => '#005683',
        'l' => 32.69,
        'a' => -14.94,
        'b' => -34.36,
    ],
    [
        'rank' => 17,
        'location' => 'Lake Neuchâtel',
        'country' => 'Switzerland',
        'measured_at' => null,
        'description' => 'Not only is Lake Neuchatel the largest lake in Switzerland located fully within the country’s borders, but it is also popular for the local vineyards, charming towns, historical landmarks, as well as its scenic beauty.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-17-lake-neuchatel-switzerland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-17-lake-neuchatel-switzerland-water-texture-swatch.jpg',
        'hex' => '#236192',
        'l' => 38.67,
        'a' => -6.46,
        'b' => -34.1,
    ],
    [
        'rank' => 18,
        'location' => 'Ullswater',
        'country' => 'England',
        'measured_at' => '(Measured at Cumbria)',
        'description' => 'With gorgeous mountain scenery, the second-largest lake in the Lake District is a must-visit on your next UK road trip. With serene blue waters to look upon, vacationers can enjoy sailing, kayaking and boat cruises on the lake.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-18-ullswater-england.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-18-ullswater-england-water-texture-swatch.jpg',
        'hex' => '#326295',
        'l' => 39.75,
        'a' => -3.38,
        'b' => -33.87,
    ],
    [
        'rank' => 19,
        'location' => 'Lac de Vassivière',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'Located in the Limousin region of France, Lac de Vassivière is known for its stunning beauty. Surrounded by sweeping forests, the lake is popular for swimming and sunbathing throughout summer.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-19-lac-de-vassiviere-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-19-lac-de-vassiviere-france-water-texture-swatch.jpg',
        'hex' => '#003057',
        'l' => 17.52,
        'a' => -7.11,
        'b' => -30.38,
    ],
    [
        'rank' => 20,
        'location' => 'Plage de Miramar',
        'country' => 'France',
        'measured_at' => '(Measured at La Croisette)',
        'description' => 'The peaceful setting of Plage de Miramar makes it a haven for tourists, with many people flocking to the beautiful beach to witness the stunning blue hues of the coastline. For those interested in surfing, the wide stretch of Plage de Miramar is a perfect spot for consistent waves.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-20-plage-de-miramar-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-20-plage-de-miramar-france-water-texture-swatch.jpg',
        'hex' => '#4C9FC8',
        'l' => 61.22,
        'a' => -17.05,
        'b' => -30.18,
    ],
    [
        'rank' => 21,
        'location' => 'Sognefjord',
        'country' => 'Norway',
        'measured_at' => null,
        'description' => 'Norway’s longest and deepest fjord, Sognefjord, has earned its title of ‘King of the Fjords’. With dramatic landscapes with steep mountains and rushing waterfalls, Sognefjord.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-21-sognefjord-norway.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-21-sognefjord-norway-water-texture-swatch.jpg',
        'hex' => '#009CBD',
        'l' => 57.91,
        'a' => -28.05,
        'b' => -29.65,
    ],
    [
        'rank' => 22,
        'location' => 'Loch Erne',
        'country' => 'Northern Ireland',
        'measured_at' => null,
        'description' => 'Home to over 160 islands, the expanse of Loch Erne offers a serene backdrop for water-based activities. Whether you prefer kayaking on the blue waters or fishing from the shore, both those looking for an outdoor adventure or a tranquil escape will enjoy a trip to Ireland’s Lakelands.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-22-loch-erne-northern-ireland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-22-loch-erne-northern-ireland-water-texture-swatch.jpg',
        'hex' => '#285780',
        'l' => 35.03,
        'a' => -5.05,
        'b' => -29.39,
    ],
    [
        'rank' => 23,
        'location' => 'Playa de Ses Illetes',
        'country' => 'Spain',
        'measured_at' => '(Measured at Formentera)',
        'description' => 'Renowned for its stunning turquoise waters and soft white sand, Playa de Ses Illetes in Formentera is a must-visit destination for beach lovers. Activities such as snorkelling, swimming and paddle boarding are all possible at this hotspot - and don’t forget to stick around for the stunning sunsets that grace the sky.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-23-playa-de-ses-illetes-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-23-playa-de-ses-illetes-spain-water-texture-swatch.jpg',
        'hex' => '#287DA1',
        'l' => 48.46,
        'a' => -16.98,
        'b' => -27.96,
    ],
    [
        'rank' => 24,
        'location' => 'Lake Müritz',
        'country' => 'Germany',
        'measured_at' => null,
        'description' => 'The largest lake located entirely in Germany, Lake Muritz offers 120 kilometers of pristine shoreline. Surrounded by the Muritz National Park, a UNESCO World Heritage site, visitors can view the stunning beech forests and over 130 nearby lakes.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-24-lake-muritz-germany.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-24-lake-muritz-germany-water-texture-swatch.jpg',
        'hex' => '#3E6991',
        'l' => 42.45,
        'a' => -5.76,
        'b' => -27.7,
    ],
    [
        'rank' => 25,
        'location' => 'Lake Constance',
        'country' => 'Germany',
        'measured_at' => '(Measured at Lindau)',
        'description' => 'Surrounded by The Alps, Lake Constance boasts spellbinding views all year round. Shared by Germany, Austria and Switzerland, the lake offers a rare mix of rich culture and natural beauty - visitors can even indulge in the region’s famous wine, Müller-Thurgau.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-25-lake-constance-germany.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-25-lake-constance-germany-water-texture-swatch.jpg',
        'hex' => '#5E8AB4',
        'l' => 55.47,
        'a' => -6.59,
        'b' => -27.51,
    ],
    [
        'rank' => 26,
        'location' => 'Lake Heviz',
        'country' => 'Hungary',
        'measured_at' => null,
        'description' => 'You won’t beat Lake Hévíz when it comes to relaxation and rejuvenation. With waters maintaining a consistent temperature between 24°C in winter and 36°C in summer, Lake Hévíz is the world’s largest biologically active natural thermal lake that is suitable for swimming. Visitors can immerse themselves in the warm waters while enjoying the view of the surrounding water lilies and forests.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-26-lake-heviz-hungary.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-26-lake-heviz-hungary-water-texture-swatch.jpg',
        'hex' => '#00677F',
        'l' => 36.32,
        'a' => -36.78,
        'b' => -27.07,
    ],
    [
        'rank' => 27,
        'location' => 'Bay of Cádiz',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'A prime location for wilderness enthusiasts, the Bay of Cadiz blends historical relevance and beach getaways together seamlessly. And with deep blue depths to explore, road trippers can get lost in the charming coastal towns spanning the bay.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-27-bay-of-cadiz-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-27-bay-of-cadiz-spain-water-texture-swatch.jpg',
        'hex' => '#007C91',
        'l' => 43.95,
        'a' => -39.41,
        'b' => -27.0,
    ],
    [
        'rank' => 28,
        'location' => 'Lac de Gaube',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'Offering magnificent panoramic views of the Pyrenees, Lac de Gaube offers road trippers a unique experience of jaw-dropping landscapes and easy-to-access hiking trails.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-28-lac-de-gaube-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-28-lac-de-gaube-spain-water-texture-swatch.jpg',
        'hex' => '#4C82A8',
        'l' => 51.58,
        'a' => -9.84,
        'b' => -26.99,
    ],
    [
        'rank' => 29,
        'location' => 'Lake Garda',
        'country' => 'Italy',
        'measured_at' => '(Measured at Garda Town)',
        'description' => 'Lake Garda is an extremely popular European hotspot and is one of the most visited of the Italian lakes. The calm blue waters and breathtaking mountain views, cause vacationers to flock to the relaxing shores.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-29-lake-garda-italy.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-29-lake-garda-italy-water-texture-swatch.jpg',
        'hex' => '#074F71',
        'l' => 30.71,
        'a' => -9.77,
        'b' => -26.81,
    ],
    [
        'rank' => 30,
        'location' => 'Lac de Tignes',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'Tucked away in the middle of the French Alps, Lac de Tignes is a true slice of paradise. Within proximity of the ski slopes, the stunning blue water offers something for everyone - anyone looking for a beautiful mountain escape will love a visit to Lac de Tignes.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-30-lac-de-tignes-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-30-lac-de-tignes-france-water-texture-swatch.jpg',
        'hex' => '#00617F',
        'l' => 36.25,
        'a' => -21.56,
        'b' => -26.58,
    ],
    [
        'rank' => 31,
        'location' => 'Lake Vättern',
        'country' => 'Sweden',
        'measured_at' => '(Measured at Jönköping)',
        'description' => 'The second largest lake in Sweden, and the sixth biggest in Europe, Lake Vattern offers perfect conditions for both swimming and boat trips. The shoreline even boasts plenty of hiking trails for those keen to explore the local area on foot.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-31-lake-vattern-sweden.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-31-lake-vattern-sweden-water-texture-swatch.jpg',
        'hex' => '#4E769B',
        'l' => 47.69,
        'a' => -6.08,
        'b' => -25.98,
    ],
    [
        'rank' => 32,
        'location' => 'Lake Skadar',
        'country' => 'Montenegro',
        'measured_at' => '(Measured at Virpazar)',
        'description' => 'With unique water lilies covering the blue water, this lake offers a truly unforgettable experience. As well as being home to more than 260 species of birds, Lake Skardar offers a picturesque backdrop for those looking for an Instagrammable getaway.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-32-lake-skadar-montenegro.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-32-lake-skadar-montenegro-water-texture-swatch.jpg',
        'hex' => '#00657F',
        'l' => 37.45,
        'a' => -26.2,
        'b' => -24.91,
    ],
    [
        'rank' => 33,
        'location' => 'Gulf of Saint-Tropez',
        'country' => 'France',
        'measured_at' => '(Measured at Grimaud)',
        'description' => 'Boasting sweeping beaches and plenty of characterful villages - a bustling social scene and crystal clear blue water await those visiting the Gulf of Saint-Tropez this summer.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-33-gulf-of-saint-tropez-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-33-gulf-of-saint-tropez-france-water-texture-swatch.jpg',
        'hex' => '#166886',
        'l' => 40.12,
        'a' => -16.02,
        'b' => -24.78,
    ],
    [
        'rank' => 34,
        'location' => 'River Thames',
        'country' => 'England',
        'measured_at' => '(Measured at Westminster)',
        'description' => 'The River Thames is a popular tourist destination for many visiting the UK’s capital. Not only is it the backdrop to many cultural landmarks such as Tower Bridge and the London Eye, but it also winds through three areas of Outstanding Natural Beauty.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-34-river-thames-england.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-34-river-thames-england-water-texture-swatch.jpg',
        'hex' => '#3B5C7F',
        'l' => 37.55,
        'a' => -4.12,
        'b' => -24.25,
    ],
    [
        'rank' => 35,
        'location' => 'Lac de Grand-Lieu',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'Just 15 kilometers south of Nantes, Lac de Grand-Lieu can’t be missed on a European road trip. Home to the largest colony of grey herons in the country, visitors can view the lake from many observation points and also make use of the nearby walking and cycling trails to take in the sweeping views up close.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-35-lac-de-grand-lieu-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-35-lac-de-grand-lieu-france-water-texture-swatch.jpg',
        'hex' => '#5C82A5',
        'l' => 52.35,
        'a' => -6.11,
        'b' => -24.09,
    ],
    [
        'rank' => 36,
        'location' => 'Bay of Naples',
        'country' => 'Italy',
        'measured_at' => '(Measured at Procida Island)',
        'description' => 'Not only does the Bay of Naples boast dramatic coastal scenery, but it is also a destination for history lovers and those looking to explore the authentic Italian experience. Home to Pompeii and the island of Capri, the Bay of Naples offers something for everyone road-tripping in Europe this summer.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-36-bay-of-naples-italy.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-36-bay-of-naples-italy-water-texture-swatch.jpg',
        'hex' => '#36A2BC',
        'l' => 61.0,
        'a' => -25.62,
        'b' => -24.04,
    ],
    [
        'rank' => 37,
        'location' => 'Lake Geneva',
        'country' => 'Switzerland',
        'measured_at' => '(Measured at Vevey)',
        'description' => 'This crescent-shaped lake is located between France and Switzerland and offers breathtaking alpine scenery. Combined with charming lakeside towns, Lake Geneva is the perfect road trip spot for those looking to relax and spend time in light blue water.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-37-lake-geneva-switzerland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-37-lake-geneva-switzerland-water-texture-swatch.jpg',
        'hex' => '#81B0D2',
        'l' => 69.09,
        'a' => -9.81,
        'b' => -23.28,
    ],
    [
        'rank' => 38,
        'location' => 'Loch Lomond',
        'country' => 'Scotland',
        'measured_at' => null,
        'description' => 'The Scottish Highlands are a great destination for any road trip, and Loch Lomond must be added to the list. Capturing the serene beauty of the mountains and tranquil blue waters, Loch Lomond is an ideal location for hiking, boating and relaxing.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-38-loch-lomond-scotland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-38-loch-lomond-scotland-water-texture-swatch.jpg',
        'hex' => '#7DA1C4',
        'l' => 64.46,
        'a' => -6.05,
        'b' => -22.87,
    ],
    [
        'rank' => 39,
        'location' => 'La Concha Bay',
        'country' => 'Spain',
        'measured_at' => '(Measured at San Sebastián)',
        'description' => 'Golden sands, gorgeous blue waters and panoramic views of the coastline are just a few reasons why La Concha Bay is a must-visit destination for road trippers. With opportunities for windsurfing, kayaking and surfing, adventure lovers will get a kick from a visit to La Concha Bay.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-39-la-concha-bay-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-39-la-concha-bay-spain-water-texture-swatch.jpg',
        'hex' => '#00788D',
        'l' => 45.05,
        'a' => -23.51,
        'b' => -22.31,
    ],
    [
        'rank' => 40,
        'location' => 'Lagos de Covadonga',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'Located in the Picos de Europa National Park, the Covadonga Lakes are a paradise for nature lovers. Known for its dramatic scenery, the stunning blue waters perfectly reflect the surrounding mountains.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-40-lagos-de-covadonga-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-40-lagos-de-covadonga-spain-water-texture-swatch.jpg',
        'hex' => '#008C95',
        'l' => 48.42,
        'a' => -56.38,
        'b' => -22.13,
    ],
    [
        'rank' => 41,
        'location' => 'Lac d\'Aydat',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'Lac d’Aydat is a true paradise for nature lovers. Not only is the lake perfect for hiking, mountain biking and kayaking, but it is also home to a variety of fish for those looking for a new summer hobby.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-41-lac-d_aydat-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-41-lac-d_aydat-france-water-texture-swatch.jpg',
        'hex' => '#4D5F80',
        'l' => 39.83,
        'a' => 0.26,
        'b' => -21.79,
    ],
    [
        'rank' => 42,
        'location' => 'Lake Doxa',
        'country' => 'Greece',
        'measured_at' => '(Measured at Peloponnese)',
        'description' => 'Nestled within the mountains in the Feneos region of Greece, Lake Doxa offers a peaceful and quiet retreat. With breathtaking views and plenty to uncover in the local area, road trippers can even visit the small church in the middle of the water.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-42-lake-doxa-greece.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-42-lake-doxa-greece-water-texture-swatch.jpg',
        'hex' => '#004860',
        'l' => 27.07,
        'a' => -14.47,
        'b' => -21.64,
    ],
    [
        'rank' => 43,
        'location' => 'Buttermere',
        'country' => 'England',
        'measured_at' => null,
        'description' => 'Buttermere is a true example of classic countryside charm, offering a tranquil escape with gorgeous blue hues. Nestled within the Lake District, this hotspot is the perfect stop for hikers, nature lovers and photographers alike.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-43-buttermere-england.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-43-buttermere-england-water-texture-swatch.jpg',
        'hex' => '#315470',
        'l' => 33.78,
        'a' => -5.8,
        'b' => -21.34,
    ],
    [
        'rank' => 44,
        'location' => 'River Liffey',
        'country' => 'Ireland',
        'measured_at' => '(Measured at Dublin)',
        'description' => 'Flowing through the heart of Dublin, the River Liffey provides a picturesque backdrop for those looking to get a view of popular cultural landmarks in Ireland’s capital.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-44-river-liffey-ireland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-44-river-liffey-ireland-water-texture-swatch.jpg',
        'hex' => '#7594B3',
        'l' => 59.53,
        'a' => -5.08,
        'b' => -21.2,
    ],
    [
        'rank' => 45,
        'location' => 'Lake Ohrid',
        'country' => 'North Macedonia',
        'measured_at' => '(Measured at Old Town Ohrid)',
        'description' => 'Offering a unique blend of crystal-clear blue waters, vibrant culture and historical relevance, Lake Ohrid is nestled beneath North Macedonia and Albania. One of Europe`s oldest lakes, this beautiful hotspot is the perfect stop for nature lovers and those looking to take a trip off the beaten path.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-45-lake-ohrid-north-macedonia.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-45-lake-ohrid-north-macedonia-water-texture-swatch.jpg',
        'hex' => '#007D8A',
        'l' => 44.43,
        'a' => -41.72,
        'b' => -21.1,
    ],
    [
        'rank' => 46,
        'location' => 'Lake Lucerne',
        'country' => 'Switzerland',
        'measured_at' => '(Measured at Wegis)',
        'description' => 'Crystal-clear waters, mountain scenery and scenic boat cruises await road trippers visiting Lake Lucerne. Surrounded by gorgeous towns with plenty of cultural heritage, this lake is the perfect destination for those looking to relax by the shore.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-46-lake-lucerne-switzerland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-46-lake-lucerne-switzerland-water-texture-swatch.jpg',
        'hex' => '#5489A3',
        'l' => 53.91,
        'a' => -12.35,
        'b' => -20.84,
    ],
    [
        'rank' => 47,
        'location' => 'Étretat Cliffs & Beach',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'Known for its serene white chalk cliffs, road trippers can explore the coastline from the GR21 hiking trail which offers breathtaking views of the blue ocean water and dramatic landscapes.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-47-etretat-cliffs-beach-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-47-etretat-cliffs-beach-france-water-texture-swatch.jpg',
        'hex' => '#4E87A0',
        'l' => 52.98,
        'a' => -14.03,
        'b' => -20.25,
    ],
    [
        'rank' => 48,
        'location' => 'Lake Bourget',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'France’s largest natural lake, Lake Bourget is nestled within the French Alps. Surrounded by majestic mountains and greenery from nearby forests, the blue waters of the lake invite visitors from all across Europe.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-48-lake-bourget-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-48-lake-bourget-france-water-texture-swatch.jpg',
        'hex' => '#2D8C9E',
        'l' => 53.04,
        'a' => -23.61,
        'b' => -19.74,
    ],
    [
        'rank' => 49,
        'location' => 'Lake Windermere',
        'country' => 'England',
        'measured_at' => '(Measured at Bowness-on-Windermere)',
        'description' => 'One of the most visited lakes in Cumbria, as well as England’s largest natural lake, Lake Windermere, boasts incredible scenery and plenty of outdoor activities. Whether you’d rather explore the lake from a rowing boat, or simply look at the blue water from the comfort of the shore, Windermere is a hive of activity for visitors.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-49-lake-windermere-england.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-49-lake-windermere-england-water-texture-swatch.jpg',
        'hex' => '#6197B0',
        'l' => 59.06,
        'a' => -13.82,
        'b' => -19.66,
    ],
    [
        'rank' => 50,
        'location' => 'River Douro',
        'country' => 'Portugal',
        'measured_at' => null,
        'description' => 'Best known for its scenic vineyards, hiking trails and rich cultural heritage, this UNESCO World Heritage site is the perfect place for road trippers to visit this summer. The Douro River is a natural beauty and a must-add to all summer itinerary plans.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-50-river-douro-portugal.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-50-river-douro-portugal-water-texture-swatch.jpg',
        'hex' => '#506D85',
        'l' => 44.18,
        'a' => -5.27,
        'b' => -18.16,
    ],
    [
        'rank' => 51,
        'location' => 'Laguna de Fuente de Piedra',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'Hosting the largest colony of pink flamingos in the Iberian Peninsula, the lagoon is home to over 170 species of birds. Visitors can visit birdwatching hides and even explore the local hiking trails for exquisite views of the blue waters and scenery.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-51-laguna-de-fuente-de-piedra-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-51-laguna-de-fuente-de-piedra-spain-water-texture-swatch.jpg',
        'hex' => '#647692',
        'l' => 48.78,
        'a' => -1.55,
        'b' => -18.1,
    ],
    [
        'rank' => 52,
        'location' => 'Lake Como',
        'country' => 'Italy',
        'measured_at' => '(Measured at Verginate)',
        'description' => 'The enchanting Lake Como makes a striking backdrop for any European fairytale. With boating and hiking opportunities galore, road trippers can explore the blue waters from the lake, from the water itself, on foot, or even from the comfort of one of the local restaurants and bars on the shoreline.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-52-lake-como-italy.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-52-lake-como-italy-water-texture-swatch.jpg',
        'hex' => '#6399AE',
        'l' => 59.81,
        'a' => -14.57,
        'b' => -17.69,
    ],
    [
        'rank' => 53,
        'location' => 'The Zrmanja River',
        'country' => 'Croatia',
        'measured_at' => null,
        'description' => 'This hidden gem is a must-visit for those looking for crystal-clear turquoise waters to explore this summer. Not only is the river home to dramatic waterfalls, but it also boasts a canyon that is a picturesque backdrop for relaxing at the water’s edge.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-53-the-zrmanja-river-croatia.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-53-the-zrmanja-river-croatia-water-texture-swatch.jpg',
        'hex' => '#6BA4B8',
        'l' => 63.57,
        'a' => -14.67,
        'b' => -17.6,
    ],
    [
        'rank' => 54,
        'location' => 'Lake Viljandi',
        'country' => 'Estonia',
        'measured_at' => null,
        'description' => 'With a 13.5-kilometer hiking trail circling the lake, road trippers can indulge in panoramic views of the Estonian lake before relaxing at the shoreline and taking in the charming scenery.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-54-lake-viljandi-estonia.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-54-lake-viljandi-estonia-water-texture-swatch.jpg',
        'hex' => '#57728B',
        'l' => 46.53,
        'a' => -5.06,
        'b' => -17.58,
    ],
    [
        'rank' => 55,
        'location' => 'Lake Vlasina',
        'country' => 'Serbia',
        'measured_at' => null,
        'description' => 'With unique floating islands, Lake Vlasina creates an unforgettable experience for those visiting Serbia this summer. At an altitude of 1,213 metres, the lake boasts incredible landscape views as well as a rare natural phenomenon that is extremely popular among photographers.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-55-lake-vlasina-serbia.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-55-lake-vlasina-serbia-water-texture-swatch.jpg',
        'hex' => '#5B7F95',
        'l' => 50.79,
        'a' => -8.19,
        'b' => -17.12,
    ],
    [
        'rank' => 56,
        'location' => 'Plage de Palombaggia',
        'country' => 'France',
        'measured_at' => '(Measured at Corsica)',
        'description' => 'Often referred to as one of Europe’s most beautiful coastal destinations, those visiting Plage de Palombaggia this summer are bound to agree. With white sand and gorgeous clear blue water, the calm water makes the beach an ideal location for those looking to chill out this summer.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-56-plage-de-palombaggia-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-56-plage-de-palombaggia-france-water-texture-swatch.jpg',
        'hex' => '#5DA3B2',
        'l' => 62.57,
        'a' => -20.06,
        'b' => -16.64,
    ],
    [
        'rank' => 57,
        'location' => 'Lake Annecy',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'Known as the ‘Venice of the Alps’, the lovely town of Annecy is the perfect addition to any European road trip. Not only does Lake Annecy boast crystal clear blue waters and striking mountain scenery, it is a haven for nature lovers, photographers and cyclists.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-57-lake-annecy-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-57-lake-annecy-france-water-texture-swatch.jpg',
        'hex' => '#59BEC9',
        'l' => 70.96,
        'a' => -28.44,
        'b' => -16.6,
    ],
    [
        'rank' => 58,
        'location' => 'Charco Azul',
        'country' => 'Spain',
        'measured_at' => '(Measured at La Palma)',
        'description' => 'Turquoise waters, volcanic surroundings and a relaxing atmosphere await those road-tripping to Charco Azul this summer. Located on La Palma, this natural pool is an incredible option for those visiting the Canary Islands.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-58-charco-azul-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-58-charco-azul-spain-water-texture-swatch.jpg',
        'hex' => '#28939C',
        'l' => 55.18,
        'a' => -28.47,
        'b' => -15.47,
    ],
    [
        'rank' => 59,
        'location' => 'Cala Comte',
        'country' => 'Spain',
        'measured_at' => '(Measured at Sant Josep de Sa Talaia)',
        'description' => 'Located on Ibiza’s coast, Cala Comte is best known for its stunning sunsets and turquoise waters. Not only is the water perfect for swimming, but the golden sand of the beach makes the beach a haven for those looking to catch the sun’s rays.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-59-cala-comte-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-59-cala-comte-spain-water-texture-swatch.jpg',
        'hex' => '#05868E',
        'l' => 50.09,
        'a' => -29.63,
        'b' => -14.8,
    ],
    [
        'rank' => 60,
        'location' => 'River Seine',
        'country' => 'France',
        'measured_at' => '(Measured at Paris)',
        'description' => 'Flowing through the heart of Paris, a trip to the France capital isn’t complete without a trip to see the Eiffel Tower, Notre-Dame and the River Seine. Take a relaxing boat cruise along the river to immerse yourself fully in the rich culture of the city.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-60-river-seine-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-60-river-seine-france-water-texture-swatch.jpg',
        'hex' => '#72B0BD',
        'l' => 67.5,
        'a' => -18.11,
        'b' => -14.7,
    ],
    [
        'rank' => 61,
        'location' => 'Morecambe Bay',
        'country' => 'England',
        'measured_at' => '(Measured at Carnforth)',
        'description' => 'The seaside town of Morecambe is a popular destination for those looking to escape the hustle and bustle of their day-to-day lives. With gorgeous blue waters and crisp sea air, visitors can stroll along the promenade to get even closer to the tide.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-61-morecambe-bay-england.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-61-morecambe-bay-england-water-texture-swatch.jpg',
        'hex' => '#8DB9CA',
        'l' => 72.05,
        'a' => -11.59,
        'b' => -14.31,
    ],
    [
        'rank' => 62,
        'location' => 'Llyn Padarn',
        'country' => 'Wales',
        'measured_at' => null,
        'description' => 'Found in the Snowdonia National Park, this glacially formed lake is best known for its breathtaking blue waters. Whether you’re seeking a tranquil or adventure-filled road trip, Llyn Padarn offers something for everyone.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-62-llyn-padarn-wales.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-62-llyn-padarn-wales-water-texture-swatch.jpg',
        'hex' => '#7A99AC',
        'l' => 61.14,
        'a' => -7.08,
        'b' => -14.3,
    ],
    [
        'rank' => 63,
        'location' => 'Lake Chiemsee',
        'country' => 'Germany',
        'measured_at' => '(Measured at Gstadt am Chiemsee)',
        'description' => 'The largest lake in Bavaria, Lake Chiemsee is a must-see on any European road trip. Visitors can explore the Herrenchiemsee Palace and even partake in sailing, cycling and hiking.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-63-lake-chiemsee-germany.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-63-lake-chiemsee-germany-water-texture-swatch.jpg',
        'hex' => '#C3D7EE',
        'l' => 84.78,
        'a' => -2.9,
        'b' => -14.25,
    ],
    [
        'rank' => 64,
        'location' => 'Lake Vyrnwy',
        'country' => 'Wales',
        'measured_at' => null,
        'description' => 'Surrounded by the Berwyn Mountains, Lake Vrynwy offers breathtaking scenery of green woodlands and blue waters. The landscape is the perfect escape for wildlife enthusiasts and thrill-seekers alike.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-64-lake-vyrnwy-wales.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-64-lake-vyrnwy-wales-water-texture-swatch.jpg',
        'hex' => '#3B4559',
        'l' => 28.87,
        'a' => 0.25,
        'b' => -13.91,
    ],
    [
        'rank' => 65,
        'location' => 'Durdle Door & Lulworth Cove',
        'country' => 'England',
        'measured_at' => null,
        'description' => 'Situated on the Jurassic Coast of England, the iconic geological formation is on many people’s bucket lists. Shaped by millions of years of erosion, road trippers can capture incredible views of the blue coastal landscape, as well as enjoy plenty of hikes along the natural trails.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-65-durdle-door-lulworth-cove-england.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-65-durdle-door-lulworth-cove-england-water-texture-swatch.jpg',
        'hex' => '#527A8A',
        'l' => 48.61,
        'a' => -11.34,
        'b' => -13.74,
    ],
    [
        'rank' => 66,
        'location' => 'Lake Saimaa',
        'country' => 'Finland',
        'measured_at' => null,
        'description' => 'Finland’s largest lake is a must-visit hidden gem in Europe. With sweeping forests, the lake is a haven for those wanting a peaceful retreat among nature - road trippers can enjoy sailing, kayaking and even relaxing from the shoreline.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-66-lake-saimaa-finland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-66-lake-saimaa-finland-water-texture-swatch.jpg',
        'hex' => '#4C5F71',
        'l' => 39.01,
        'a' => -2.51,
        'b' => -13.72,
    ],
    [
        'rank' => 67,
        'location' => 'Lago de Sanabria',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'Dramatic mountains, green forests, and wildlife spotting are some of the best parts of a visit to Lago de Sanobria in Spain’s Zamora province. Tucked away in nature, this beautiful body of water offers a secluded escape from day-to-day life.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-67-lago-de-sanabria-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-67-lago-de-sanabria-spain-water-texture-swatch.jpg',
        'hex' => '#7B859B',
        'l' => 55.29,
        'a' => 0.6,
        'b' => -13.61,
    ],
    [
        'rank' => 68,
        'location' => 'Blue Lagoon',
        'country' => 'Iceland',
        'measured_at' => null,
        'description' => 'A popular holiday destination for travelers worldwide, the Blue Lagoon is renowned for its beautiful blue water. The natural geothermal spa offers visitors a soothing and relaxing experience and is a must-visit for those looking for rejuvenation.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-68-blue-lagoon-iceland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-68-blue-lagoon-iceland-water-texture-swatch.jpg',
        'hex' => '#A4DBE8',
        'l' => 83.57,
        'a' => -16.08,
        'b' => -13.32,
    ],
    [
        'rank' => 69,
        'location' => 'Loch Ness',
        'country' => 'Scotland',
        'measured_at' => '(Measured at Drumnadrochit)',
        'description' => 'World-famous due to the legend of the Loch Ness Monster, Loch Ness boasts incredible deep blue water. With sweeping landscapes, serene cruises and rich history, visitors will love soaking up the beautiful backdrop of the area.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-69-loch-ness-scotland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-69-loch-ness-scotland-water-texture-swatch.jpg',
        'hex' => '#869CAE',
        'l' => 62.88,
        'a' => -4.52,
        'b' => -13.03,
    ],
    [
        'rank' => 70,
        'location' => 'Lake Usmas',
        'country' => 'Latvia',
        'measured_at' => null,
        'description' => 'The nearby campsites make Lake Usmas a fantastic option for a road trip this summer. With fishing and boating opportunities galore, the Latvian beauty is the ideal escape.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-70-lake-usmas-latvia.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-70-lake-usmas-latvia-water-texture-swatch.jpg',
        'hex' => '#8FA4B7',
        'l' => 66.03,
        'a' => -4.31,
        'b' => -12.95,
    ],
    [
        'rank' => 71,
        'location' => 'Estany de Banyoles',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'This tranquil escape is Cataloinia’s largest natural lake and offers incredible clear blue waters that visitors can enjoy from the shoreline or while kayaking or sailing. And with a 7-kilometer hike around the circuit of the lake, road trippers can truly immerse themselves in the rolling landscapes.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-71-estany-de-banyoles-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-71-estany-de-banyoles-spain-water-texture-swatch.jpg',
        'hex' => '#115E67',
        'l' => 35.43,
        'a' => -20.62,
        'b' => -12.8,
    ],
    [
        'rank' => 72,
        'location' => 'Kynance Cove',
        'country' => 'England',
        'measured_at' => null,
        'description' => 'Kynance Cove is often considered one of the most beautiful parts of the UK. Located on Cornwall’s Lizard Peninsula, the cove is home to secluded caves, turquoise waters and unforgettable rock formations.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-72-kynance-cove-england.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-72-kynance-cove-england-water-texture-swatch.jpg',
        'hex' => '#369DA0',
        'l' => 58.48,
        'a' => -29.86,
        'b' => -12.04,
    ],
    [
        'rank' => 73,
        'location' => 'Lac de Pareloup',
        'country' => 'France',
        'measured_at' => '(Measured at Aveyron)',
        'description' => 'With plenty of activities available for guests to take part in, Lac de Pareloup in the Averyron region of Southern France is the perfect road trip destination for families to visit. From swimming, sailing, hiking and fishing opportunities available, no one will be bored while visiting this hotspot.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-73-lac-de-pareloup-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-73-lac-de-pareloup-france-water-texture-swatch.jpg',
        'hex' => '#6B8F9C',
        'l' => 56.81,
        'a' => -10.24,
        'b' => -12.02,
    ],
    [
        'rank' => 74,
        'location' => 'Lac de Sainte-Croix',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'This Provence gem is best known for its stunning light blue waters that make it a haven for visitors seeking a true escape. Not only will nature enthusiasts enjoy the local scenery and wildlife, but adventure seekers can also take part in plenty of water-based activities.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-74-lac-de-sainte-croix-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-74-lac-de-sainte-croix-france-water-texture-swatch.jpg',
        'hex' => '#049193',
        'l' => 53.59,
        'a' => -33.08,
        'b' => -11.98,
    ],
    [
        'rank' => 75,
        'location' => 'Lac de Pontcharra',
        'country' => 'France',
        'measured_at' => '(Measured at Bréda)',
        'description' => 'If you’re looking for a road trip spot for a refreshing dip, Lac de Pontcharra is the one for you. With two interconnected lakes - one for swimming and one for fishing - tourists can enjoy the gorgeous views while relaxing in the sun.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-75-lac-de-pontcharra-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-75-lac-de-pontcharra-france-water-texture-swatch.jpg',
        'hex' => '#4B6775',
        'l' => 41.7,
        'a' => -7.9,
        'b' => -11.74,
    ],
    [
        'rank' => 76,
        'location' => 'Luskentyre Beach',
        'country' => 'Scotland',
        'measured_at' => '(Measured at Harris)',
        'description' => 'Situated on the Isle of Harris, this beach offers a relaxing setting for those looking to escape the hustle and bustle. With little light pollution, Luskentyre Beach is the perfect spot for those looking to get a glimpse of the night sky in all its glory.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-76-luskentyre-beach-scotland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-76-luskentyre-beach-scotland-water-texture-swatch.jpg',
        'hex' => '#7FA0AC',
        'l' => 63.39,
        'a' => -9.36,
        'b' => -11.0,
    ],
    [
        'rank' => 77,
        'location' => 'Gulf of Finland',
        'country' => 'Finland',
        'measured_at' => null,
        'description' => 'The Gulf of Finland stretches from Helsinki to St. Petersburg, and not only provides the perfect seaside backdrop but also offers plenty of historic references. Have a go at fishing, sailing or taking a walk to soak up the exquisite views of the Baltic Sea.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-77-gulf-of-finland-finland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-77-gulf-of-finland-finland-water-texture-swatch.jpg',
        'hex' => '#6F9BA4',
        'l' => 60.73,
        'a' => -12.84,
        'b' => -10.65,
    ],
    [
        'rank' => 78,
        'location' => 'Lac du Salagou',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'The clear water of Lac du Salagou makes it an ideal spot for those looking to take a dip this summer. And with other activities such as kayaking, paddle boarding and sailing available, the gorgeous water provides a perfect backdrop for a day of relaxation.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-78-lac-du-salagou-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-78-lac-du-salagou-france-water-texture-swatch.jpg',
        'hex' => '#7A939C',
        'l' => 59.09,
        'a' => -7.07,
        'b' => -8.29,
    ],
    [
        'rank' => 79,
        'location' => 'Playa de las Catedrales',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'Eye-catching sea arches, secluded caves and dramatic cliffs are what await visitors of Playa de las Catedrales on the Galician coast. Best visited at low tide, visitors can explore the caves and take in the eye-catching blue hues of the tide.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-79-playa-de-las-catedrales-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-79-playa-de-las-catedrales-spain-water-texture-swatch.jpg',
        'hex' => '#7FA9AE',
        'l' => 65.99,
        'a' => -13.63,
        'b' => -8.28,
    ],
    [
        'rank' => 80,
        'location' => 'Embalse de Yesa',
        'country' => 'Spain',
        'measured_at' => '(Measured at Tiermas)',
        'description' => 'Embalse de Yesa is a picture-perfect reservoir in northern Spain, between Navarre and Aragon. For those looking to get a glimpse of perfect blue hues in Europe this summer, look no further than this Spanish gem.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-80-embalse-de-yesa-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-80-embalse-de-yesa-spain-water-texture-swatch.jpg',
        'hex' => '#5CB8B2',
        'l' => 68.63,
        'a' => -29.88,
        'b' => -7.0,
    ],
    [
        'rank' => 81,
        'location' => 'Albufera de Valencia',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'Just 10 kilometers out of the city, Albufera de Valencia boasts incredible freshwater lagoons and is a haven for many different species of birds. Most renowned as the origin of paella, those looking to taste the local cuisine will hit the jackpot at this hotspot.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-81-albufera-de-valencia-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-81-albufera-de-valencia-spain-water-texture-swatch.jpg',
        'hex' => '#A6B8C1',
        'l' => 73.48,
        'a' => -5.07,
        'b' => -6.98,
    ],
    [
        'rank' => 82,
        'location' => 'Llyn Tegid',
        'country' => 'Wales',
        'measured_at' => '(Measured at Gwynedd)',
        'description' => 'Llyn Tegid is the largest natural lake in Wales and is tucked away between the Snowdonia and Berwyn mountain ranges, making it the perfect backdrop for a mountain escape.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-82-llyn-tegid-wales.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-82-llyn-tegid-wales-water-texture-swatch.jpg',
        'hex' => '#2E3C41',
        'l' => 24.2,
        'a' => -5.06,
        'b' => -5.41,
    ],
    [
        'rank' => 83,
        'location' => 'Lake Plitvice',
        'country' => 'Croatia',
        'measured_at' => null,
        'description' => 'Best known for its breathtaking turquoise water that changes color with the season, Lake Plitvice is located in Plitvice Lakes National Park, a UNESCO World Heritage site. The gorgeous body of water offers spectacular views and stunning hiking trails.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-83-lake-plitvice-croatia.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-83-lake-plitvice-croatia-water-texture-swatch.jpg',
        'hex' => '#009681',
        'l' => 52.34,
        'a' => -57.95,
        'b' => -4.89,
    ],
    [
        'rank' => 84,
        'location' => 'Cala Macarella & Cala Macarelleta',
        'country' => 'Spain',
        'measured_at' => '(Measured at Menorca)',
        'description' => 'The idyllic Menorca beaches, Cala Macarella and Cala Macaraletta boast gorgeous clear blue waters, as well as fine white sand. The coastal landscape offers a luscious retreat for those looking to step into nature.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-84-cala-macarella-cala-macarelleta-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-84-cala-macarella-cala-macarelleta-spain-water-texture-swatch.jpg',
        'hex' => '#00CFB4',
        'l' => 73.1,
        'a' => -53.58,
        'b' => -3.01,
    ],
    [
        'rank' => 85,
        'location' => 'Cardigan Bay',
        'country' => 'Wales',
        'measured_at' => '(Measured at Llangrannog)',
        'description' => 'If you’re looking to spot marine life in the UK, head to Cardigan Bay - renowned for being one of the best places to spot bottlenose dolphins in the country. With vast stretches of sand and nostalgic seaside towns, Cardigan Bay is an unmissable destination on a UK roadtrip.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-85-cardigan-bay-wales.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-85-cardigan-bay-wales-water-texture-swatch.jpg',
        'hex' => '#6A8E89',
        'l' => 55.82,
        'a' => -12.77,
        'b' => -2.77,
    ],
    [
        'rank' => 86,
        'location' => 'Lake Killarney',
        'country' => 'Ireland',
        'measured_at' => null,
        'description' => 'With plenty of history and folklore to learn, Lake Killarney is a unique addition to a road trip itinerary. For those looking for activities such as boating and hiking in Ireland, look no further than Killarney National Park.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-86-lake-killarney-ireland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-86-lake-killarney-ireland-water-texture-swatch.jpg',
        'hex' => '#717C7D',
        'l' => 51.09,
        'a' => -5.29,
        'b' => -2.37,
    ],
    [
        'rank' => 87,
        'location' => 'Gorges du Verdon',
        'country' => 'France',
        'measured_at' => null,
        'description' => 'Referred to as the ‘Grand Canyon of Europe’, the Gorges du Verdon is a true showstopper. With stunning turquoise waters and dramatic cliffs, this body of water is ideal for those looking to blend activity with relaxation.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-87-gorges-du-verdon-france.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-87-gorges-du-verdon-france-water-texture-swatch.jpg',
        'hex' => '#00C7B1',
        'l' => 72.0,
        'a' => -47.0,
        'b' => -2.0,
    ],
    [
        'rank' => 88,
        'location' => 'Embalse de Cijara',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'Located within the Cíjara Regional Nature Reserve, this stunning body of water spans over 6,500 hectares. With designated picnic and BBQ areas, guests can enjoy a day in the sun from the shoreline.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-88-embalse-de-cijara-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-88-embalse-de-cijara-spain-water-texture-swatch.jpg',
        'hex' => '#A7A8A9',
        'l' => 68.87,
        'a' => -0.15,
        'b' => -1.06,
    ],
    [
        'rank' => 89,
        'location' => 'Congost de Mont-rebei',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'This natural wonder is home to dramatic cliffs, a deep gorge and plenty of land and water-based activities. Thrill-seekers love scaling the walls of the gorge, while others indulge in a day of relaxation by the water’s edge.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-89-congost-de-mont-rebei-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-89-congost-de-mont-rebei-spain-water-texture-swatch.jpg',
        'hex' => '#1C8172',
        'l' => 47.97,
        'a' => -33.18,
        'b' => -1.05,
    ],
    [
        'rank' => 90,
        'location' => 'Lake Königssee',
        'country' => 'Germany',
        'measured_at' => '(Measured at Pilgrimage Church of St. Bartholomew, Bavaria)',
        'description' => 'Lake Königssee boasts incredible waters, as well as dramatic scenery due to its location amongst Germany’s Bavarian Alps. Tourists can take a boat trip to St. Bartholomä Church for a picture-perfect outing.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-90-lake-konigssee-germany.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-90-lake-konigssee-germany-water-texture-swatch.jpg',
        'hex' => '#024638',
        'l' => 25.25,
        'a' => -23.37,
        'b' => 1.78,
    ],
    [
        'rank' => 91,
        'location' => 'Dublin Bay',
        'country' => 'Ireland',
        'measured_at' => null,
        'description' => 'If you’re looking for a gorgeous body of water with coastal walks to keep you entertained, look no further than Dublin Bay. With epic views of Dublin’s skyline, the bay is a must-visit when in the capital.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-91-dublin-bay-ireland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-91-dublin-bay-ireland-water-texture-swatch.jpg',
        'hex' => '#596C62',
        'l' => 43.78,
        'a' => -8.41,
        'b' => 2.54,
    ],
    [
        'rank' => 92,
        'location' => 'Lake of Menteith',
        'country' => 'Scotland',
        'measured_at' => '(Measured at Inchmahome)',
        'description' => 'The Lake of Menteith is Scotland’s only natural lake and offers plenty of water-based activities for tourists. And with plenty of relaxing local hotels available, road trippers can extend their trip to get the most from their visit.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-92-lake-of-menteith-scotland.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-92-lake-of-menteith-scotland-water-texture-swatch.jpg',
        'hex' => '#D7D9D2',
        'l' => 86.26,
        'a' => -1.5,
        'b' => 3.18,
    ],
    [
        'rank' => 93,
        'location' => 'Playa de Gulpiyuri',
        'country' => 'Spain',
        'measured_at' => '(Measured at Asturias)',
        'description' => 'Best known for being the world’s smallest beach, Playa de Gulpiyuri was formed by a collapsed cave that allows seawater to flow through underground tunnels. Despite its small size, this inland beach is extremely popular among tourists.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-93-playa-de-gulpiyuri-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-93-playa-de-gulpiyuri-spain-water-texture-swatch.jpg',
        'hex' => '#304F42',
        'l' => 30.62,
        'a' => -13.61,
        'b' => 3.27,
    ],
    [
        'rank' => 94,
        'location' => 'Estany de Sant Maurici',
        'country' => 'Spain',
        'measured_at' => null,
        'description' => 'With a gorgeous alpine landscape and breathtaking views of the nearby peaks, Estany de Sant Maurici is the perfect road trip destination for those looking for a true oasis in the beautiful continent.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-94-estany-de-sant-maurici-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-94-estany-de-sant-maurici-spain-water-texture-swatch.jpg',
        'hex' => '#385542',
        'l' => 33.38,
        'a' => -14.77,
        'b' => 7.25,
    ],
    [
        'rank' => 95,
        'location' => 'Embalse de El Chorro',
        'country' => 'Spain',
        'measured_at' => '(Measured at Málaga)',
        'description' => 'With sublime views of the Guadalhorce Gorge, Embalse de El Chorro is a haven for thrill-seekers. Visitors can rock climb, hike, boat and even explore Caminito del Rey during their trip.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-95-embalse-de-el-chorro-spain.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-95-embalse-de-el-chorro-spain-water-texture-swatch.jpg',
        'hex' => '#267859',
        'l' => 44.69,
        'a' => -31.92,
        'b' => 8.62,
    ],
    [
        'rank' => 96,
        'location' => 'Lake Balaton',
        'country' => 'Hungary',
        'measured_at' => null,
        'description' => 'With shallow waters, Lake Balaton is a brilliant option for families looking for water-based adventures. From sailing to swimming, this hotspot guarantees fun.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-96-lake-balaton-hungary.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-96-lake-balaton-hungary-water-texture-swatch.jpg',
        'hex' => '#57664D',
        'l' => 41.13,
        'a' => -9.38,
        'b' => 11.94,
    ],
    [
        'rank' => 97,
        'location' => 'Kravica Waterfalls',
        'country' => 'Bosnia and Herzegovina',
        'measured_at' => null,
        'description' => 'Just a short trip from Mostar, Kravica Waterfalls are a must-visit when road-tripping through Europe. With brilliant photo opportunities, as well as plenty of water-based activities available, this natural wonder offers an unforgettable experience.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-97-kravica-waterfalls-bosnia-and-herzegovina.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-97-kravica-waterfalls-bosnia-and-herzegovina-water-texture-swatch.jpg',
        'hex' => '#1C4220',
        'l' => 24.15,
        'a' => -20.85,
        'b' => 15.58,
    ],
    [
        'rank' => 98,
        'location' => 'Göksu River',
        'country' => 'Turkey',
        'measured_at' => '(Measured at Silifke)',
        'description' => 'If you’re looking for cascading waterfalls, interesting wildlife and striking views, look no further than Goksu River. Not only is the river home to gorgeous water but there is also plenty of greenery from the surrounding trees.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-98-goksu-river-turkey.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-98-goksu-river-turkey-water-texture-swatch.jpg',
        'hex' => '#74956C',
        'l' => 58.3,
        'a' => -19.33,
        'b' => 17.5,
    ],
    [
        'rank' => 99,
        'location' => 'Lake Vänern',
        'country' => 'Sweden',
        'measured_at' => '(Measured at Kållandsö)',
        'description' => 'Sweden’s largest lake has captured the heart of many tourists - not only is it home to pristine waters, but it also offers incredible scenic views of the surrounding areas.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-99-lake-vanern-sweden.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-99-lake-vanern-sweden-water-texture-swatch.jpg',
        'hex' => '#737B4C',
        'l' => 50.05,
        'a' => -8.32,
        'b' => 24.17,
    ],
    [
        'rank' => 100,
        'location' => 'Gulf of Riga',
        'country' => 'Latvia/Estonia',
        'measured_at' => null,
        'description' => 'Known for its shallow waters, the Gulf of Riga offers sweeping beaches and stunning views of the coastal landscapes. If looking for a relaxing retreat, look no further than the charming nearby towns in the Gulf of Riga.',
        'map_top' => null,
        'map_left' => null,
        'main_image' => 'sixt-eu-tones-of-the-sea-100-gulf-of-riga-latvia-estonia.jpg',
        'water_image' => 'sixt-eu-tones-of-the-sea-100-gulf-of-riga-latvia-estonia-water-texture-swatch.jpg',
        'hex' => '#614F25',
        'l' => 35.0,
        'a' => 4.5,
        'b' => 27.46,
    ],
];

// Extract unique countries and sort them A-Z
$countries = array_unique(array_column($map_data, 'country'));
sort($countries);

$map_svg_url = plugin_dir_url( __FILE__ ) . 'map-images/world-map.svg';




?>

<div class="ras-qc-content-black">
    <div class="ras-tots-slider-container">
        <button class="ras-tots-slider-nav ras-tots-slider-prev" aria-label="Previous slide">
            <svg class="ras-tots-slider-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 9L4.5 6L7.5 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        
        <div class="ras-tots-slider-wrapper">
            <ul id="ras-tots-slider" class="ras-tots-slider-track">
                <?php foreach ( array_slice($map_data, 0, 20) as $index => $location ) : ?>
                    <li class="ras-tots-slider-item <?php echo $index === 1 ? 'ras-tots-slider-active' : ''; ?>" 
                        data-index="<?php echo $index - 1; ?>" 
                        data-location="<?php echo esc_attr($location['location']); ?>"
                        data-measured-at="<?php echo esc_attr($location['measured_at']); ?>"
                        data-image="<?php 
                            $main_id = get_attachment_id_by_filename($location['main_image']);
                            echo $main_id ? esc_url(wp_get_attachment_url($main_id)) : esc_url(plugin_dir_url(__FILE__) . 'images/' . $location['main_image']);
                        ?>"
                        data-water-image="<?php 
                            $water_id = get_attachment_id_by_filename($location['water_image']);
                            echo $water_id ? esc_url(wp_get_attachment_url($water_id)) : esc_url(plugin_dir_url(__FILE__) . 'images/' . $location['water_image']);
                        ?>">
                        <div class="ras-tots-slider-item-inner">
                            <?php 
                            $main_image_id = get_attachment_id_by_filename($location['main_image']);
                            if ($main_image_id) {
                                echo wp_get_attachment_image($main_image_id, 'large', false, ['alt' => esc_attr($location['location'])]);
                            } else {
                                echo '<img src="' . esc_url(plugin_dir_url(__FILE__) . 'images/' . $location['main_image']) . '" alt="' . esc_attr($location['location']) . '">';
                            }
                            ?>
                            <div class="ras-tots-water-image">
                                <?php 
                                $water_image_id = get_attachment_id_by_filename($location['water_image']);
                                if ($water_image_id) {
                                    echo wp_get_attachment_image($water_image_id, 'medium', false, ['alt' => esc_attr($location['location'] . ' water texture')]);
                                } else {
                                    echo '<img src="' . esc_url(plugin_dir_url(__FILE__) . 'images/' . $location['water_image']) . '" alt="' . esc_attr($location['location'] . ' water texture') . '">';
                                }
                                ?>
                            </div>
                            <span class="ras-tots-slider-index"><?php echo $index + 1; ?></span>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <button class="ras-tots-slider-nav ras-tots-slider-next" aria-label="Next slide">
            <svg class="ras-tots-slider-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 3L7.5 6L4.5 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

    <div class="ras-tots-slider-content">
        <div class="ras-tots-slider-content-inner">
            <h4 class="ras-tots-slider-location"></h4>
            <div class="ras-tots-slider-measured-at"></div>
        </div>
    </div>





    <div class="ras-tots-shades-slider">
        <div class="ras-tots-shades-slider-inner">
                    <div class="ras-tots-shades-slider-title">
            <h2>Find your Perfect shade of water</h2>
            
            <div class="ras-tots-shades-slider-controls">
                <div class="ras-tots-shades-slider-filter">
                    <select id="country-filter" class="ras-tots-country-select">
                        <option value="">All Countries (<?php echo count($map_data); ?>)</option>
                        <?php foreach ($countries as $country) : ?>
                            <?php $country_count = count(array_filter($map_data, function($item) use ($country) { return $item['country'] === $country; })); ?>
                            <option value="<?php echo esc_attr($country); ?>"><?php echo esc_html($country); ?> (<?php echo $country_count; ?>)</option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="ras-tots-shades-slider-nav-controls">
                    <button class="ras-tots-shades-slider-nav ras-tots-shades-slider-prev" aria-label="Previous slide">
                        <svg class="ras-tots-shades-slider-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 9L4.5 6L7.5 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="ras-tots-shades-slider-nav ras-tots-shades-slider-next" aria-label="Next slide">
                        <svg class="ras-tots-shades-slider-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 3L7.5 6L4.5 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

            <div class="ras-tots-shades-slider-wrapper">
                <ul class="ras-tots-shades-slider-track">
                <?php foreach ( $map_data as $index => $location ) : ?>
                    <?php
                    $water_image_id = get_attachment_id_by_filename($location['water_image']);
                    $water_image_url = $water_image_id ? wp_get_attachment_url($water_image_id) : plugin_dir_url(__FILE__) . 'images/' . $location['water_image'];
                    ?>
                                    <li class="ras-shades-slider-item <?php echo $index === 0 ? 'ras-shades-slider-active' : ''; ?>"
                    data-location="<?php echo esc_attr($location['location']); ?>"
                    data-country="<?php echo esc_attr($location['country']); ?>">
                        <div class="ras-shades-slider-item-inner" style="background-image: url('<?php echo esc_url($water_image_url); ?>');">
                            <span class="ras-shades-slider-index"><?php echo $index + 1; ?></span>
                            <div class="ras-shades-slider-content">
                                <p class="ras-shades-slider-location"><?php echo esc_html($location['location']); ?></p>
                                <p class="ras-shades-slider-measured"><?php echo esc_html($location['measured_at']); ?></p>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>



</div>


<!--
<div class="ras-tots-interactive-map-container"id="vfab-global-items">
    <h2>The most iconic bridge views Worldwide</h2>
    <div class="ras-tots-interactive-map-inner">
        <div class="ras-tots-interactive-map-content-wrapper">
            <div class="ras-tots-interactive-map-content">
                <?php foreach ( $map_locations as $index => $location ) : ?>
                    <div class="ras-tots-map-location-item <?php echo $index === 0 ? 'active' : ''; ?>" data-location-index="<?php echo $index; ?>">
                        <p class="ras-tots-map-location-item-number"><?php echo $index + 1; ?></p>
                        <img src="<?php echo esc_url( $location['image'] ); ?>" alt="<?php echo esc_attr( $location['title'] ); ?>">
                        <div class="ras-tots-map-location-item-content-container">
                            <h3><?php echo esc_html( $location['title'] ); ?></h3>
                            <p><?php echo esc_html( $location['location'] ); ?></p>
                            <?php echo $location['description']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="ras-tots-map-navigation">
                <button class="ras-tots-nav-button ras-tots-nav-prev" id="prevButton">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 9L4.5 6L7.5 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="ras-tots-nav-button ras-tots-nav-next" id="nextButton">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L7.5 6L4.5 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <div class="ras-tots-interactive-map-image">
            <?php
            
                echo '<img class="main-map" src="' . esc_url( $map_svg_url ) . '" alt="' . esc_attr__( 'Interactive Map of France', 'ra7-helper-plugin' ) . '">' ;
            
            ?>
            
            <div class="ras-tots-map-markers">
                <?php foreach ( $map_markers as $index => $position ) : ?>
                    <button 
                        class="ras-tots-map-marker <?php echo $index === 0 ? 'active' : ''; ?>" 
                        data-index="<?php echo $index; ?>"
                        style="top: <?php echo $position['top']; ?>; left: <?php echo $position['left']; ?>;"
                    >
                        <svg class="ras-tots-marker-icon" height="25" viewBox="0 0 83.24 99.65" width="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><clipPath id="a"><path d="m0 0h83.24v99.65h-83.24z"/></clipPath><g clip-path="url(#a)" fill="currentColor"><path d="m25.026 78.873c-33.326-15.218-33.66-61.681.741-75.741 26.171-10.68 55.965 7.109 57.414 35.848.934 18.424-9.244 32.467-26.106 40.513a9.816 9.816 0 0 0 -3.189 3.174q-6.023 8.378-11.757 16.726a.584.584 0 0 1 -.795.168.547.547 0 0 1 -.156-.152c-3.366-4.824-11.193-18.265-16.153-20.534m41.793-37.785a25.223 25.223 0 1 0 -25.218 24.85 25.038 25.038 0 0 0 25.218-24.85"/><path d="m113 94.862a16.823 16.823 0 1 1 -17.07 16.821 16.947 16.947 0 0 1 17.07-16.821" transform="translate(-71.388 -70.593)"/></g></svg>
                        <?php echo $index + 1; ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
--->


<script>
document.addEventListener('DOMContentLoaded', function() {
    const sliderTrack = document.getElementById('ras-tots-slider');
    const prevButton = document.querySelector('.ras-tots-slider-prev');
    const nextButton = document.querySelector('.ras-tots-slider-next');
    const contentLocation = document.querySelector('.ras-tots-slider-location');
    const contentMeasuredAt = document.querySelector('.ras-tots-slider-measured-at');

    if (!sliderTrack) return;

    const allSlides = Array.from(sliderTrack.querySelectorAll('li')).map(slide => ({
        location: slide.dataset.location,
        measuredAt: slide.dataset.measuredAt,
        image: slide.dataset.image,
        waterImage: slide.dataset.waterImage,
        index: slide.dataset.index
    }));
    
    let currentIndex = 0;
    const totalSlides = allSlides.length;

    function getIndices(idx, isDesktop) {
        if (isDesktop) {
            const prev2 = (idx - 2 + totalSlides) % totalSlides;
            const prev1 = (idx - 1 + totalSlides) % totalSlides;
            const active = idx;
            const next1 = (idx + 1) % totalSlides;
            const next2 = (idx + 2) % totalSlides;
            return [prev2, prev1, active, next1, next2];
        } else {
            const prev = (idx - 1 + totalSlides) % totalSlides;
            const active = idx;
            const next = (idx + 1) % totalSlides;
            return [prev, active, next];
        }
    }

    function getClasses(isDesktop) {
        return isDesktop 
            ? ['ras-tots-slider-item', 'ras-tots-slider-item', 'ras-tots-slider-item ras-tots-slider-active', 'ras-tots-slider-item', 'ras-tots-slider-item']
            : ['ras-tots-slider-item', 'ras-tots-slider-item ras-tots-slider-active', 'ras-tots-slider-item'];
    }

    function renderSlider() {
        const isDesktop = window.innerWidth >= 1024;
        const indices = getIndices(currentIndex, isDesktop);
        const classes = getClasses(isDesktop);
        const items = indices.map(idx => allSlides[idx]);
        
        updateContent();
        updateDOM(items, classes, indices);
    }

    function updateContent() {
        const activeSlide = allSlides[currentIndex];
        if (activeSlide && contentLocation && contentMeasuredAt) {
            contentLocation.textContent = activeSlide.location || '';
            contentMeasuredAt.textContent = activeSlide.measuredAt || '';
            
        }
    }

    function updateDOM(items, classes, indices) {
        sliderTrack.innerHTML = '';
        items.forEach((item, i) => {
            const li = document.createElement('li');
            li.className = classes[i];
            li.innerHTML = `<div class="ras-tots-slider-item-inner">
                <img src="${item.image}" alt="${item.location}">
                <div class="ras-tots-water-image">
                    <img src="${item.waterImage}" alt="${item.location} water">
                </div>
                <span class="ras-tots-slider-index">${indices[i] + 1}</span>
            </div>`;
            li.setAttribute('data-location', item.location);
            li.setAttribute('data-measured-at', item.measuredAt);
            li.setAttribute('data-image', item.image);
            li.setAttribute('data-water-image', item.waterImage);
            
            const isDesktop = window.innerWidth >= 1024;
            const centerIdx = isDesktop ? 2 : 1;
            if (i !== centerIdx) {
                li.style.cursor = 'pointer';
                li.addEventListener('click', () => {
                    if (i < centerIdx) prevSlide();
                    if (i > centerIdx) nextSlide();
                });
            }
            sliderTrack.appendChild(li);
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        renderSlider();
    }
    
    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        renderSlider();
    }

    if (prevButton) {
        prevButton.addEventListener('click', function(e) {
            e.preventDefault();
            prevSlide();
        });
    }

    if (nextButton) {
        nextButton.addEventListener('click', function(e) {
            e.preventDefault();
            nextSlide();
        });
    }

    window.addEventListener('resize', () => renderSlider());

    if (allSlides.length > 0) {
        renderSlider();
    }
});

// Shades Slider JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const shadesSlider = document.querySelector('.ras-tots-shades-slider-track');
    const shadesPrevButton = document.querySelector('.ras-tots-shades-slider-prev');
    const shadesNextButton = document.querySelector('.ras-tots-shades-slider-next');
    const shadesWrapper = document.querySelector('.ras-tots-shades-slider-wrapper');
    const countryFilter = document.getElementById('country-filter');
    
    if (!shadesSlider) return;
    
    const allShadesItems = Array.from(shadesSlider.querySelectorAll('.ras-shades-slider-item'));
    let filteredItems = [...allShadesItems];
    let currentShadesIndex = 0;
    let isDragging = false;
    let startX = 0;
    let currentX = 0;
    let initialTransform = 0;
    
    function getItemsPerView() {
        const containerWidth = shadesWrapper.offsetWidth;
        const itemWidth = window.innerWidth >= 1024 ? 350 : (window.innerWidth >= 768 ? 300 : 280);
        const gap = 20;
        return Math.floor((containerWidth + gap) / (itemWidth + gap));
    }
    
    function getMaxIndex() {
        const itemsPerView = getItemsPerView();
        return Math.max(0, filteredItems.length - itemsPerView);
    }
    
    function filterItems(selectedCountry) {
        // Hide all items first
        allShadesItems.forEach(item => {
            item.style.display = 'none';
        });
        
        // Filter and show relevant items
        if (selectedCountry === '') {
            filteredItems = [...allShadesItems];
        } else {
            filteredItems = allShadesItems.filter(item => 
                item.dataset.country === selectedCountry
            );
        }
        
        // Show filtered items and reindex them
        filteredItems.forEach((item, index) => {
            item.style.display = 'block';
            const indexSpan = item.querySelector('.ras-shades-slider-index');
            if (indexSpan) {
                indexSpan.textContent = index + 1;
            }
        });
        
        // Reset carousel position
        currentShadesIndex = 0;
        updateShadesSlider();
    }
    
    function updateShadesSlider() {
        const itemWidth = window.innerWidth >= 1024 ? 350 : (window.innerWidth >= 768 ? 300 : 280);
        const gap = 20;
        const offset = currentShadesIndex * (itemWidth + gap);
        
        shadesSlider.style.transform = `translateX(-${offset}px)`;
        
        // Update button states
        if (shadesPrevButton) {
            shadesPrevButton.disabled = currentShadesIndex === 0;
        }
        if (shadesNextButton) {
            shadesNextButton.disabled = currentShadesIndex >= getMaxIndex();
        }
        
        // Update active states for filtered items only
        filteredItems.forEach((item, index) => {
            item.classList.toggle('ras-shades-slider-active', index === currentShadesIndex);
        });
    }
    
    function nextShadesSlide() {
        const maxIndex = getMaxIndex();
        if (currentShadesIndex < maxIndex) {
            currentShadesIndex++;
            updateShadesSlider();
        }
    }
    
    function prevShadesSlide() {
        if (currentShadesIndex > 0) {
            currentShadesIndex--;
            updateShadesSlider();
        }
    }
    
    // Button event listeners
    if (shadesNextButton) {
        shadesNextButton.addEventListener('click', function(e) {
            e.preventDefault();
            nextShadesSlide();
        });
    }
    
    if (shadesPrevButton) {
        shadesPrevButton.addEventListener('click', function(e) {
            e.preventDefault();
            prevShadesSlide();
        });
    }
    
    // Country filter event listener
    if (countryFilter) {
        countryFilter.addEventListener('change', function() {
            filterItems(this.value);
        });
    }
    
    // Touch and drag functionality
    function handleStart(e) {
        isDragging = true;
        startX = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
        currentX = startX;
        
        const transform = getComputedStyle(shadesSlider).transform;
        if (transform !== 'none') {
            const matrix = transform.match(/matrix.*\((.+)\)/)[1].split(', ');
            initialTransform = parseInt(matrix[4]) || 0;
        } else {
            initialTransform = 0;
        }
        
        shadesSlider.style.transition = 'none';
        shadesSlider.style.cursor = 'grabbing';
    }
    
    function handleMove(e) {
        if (!isDragging) return;
        
        e.preventDefault();
        currentX = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
        const diff = currentX - startX;
        const newTransform = initialTransform + diff;
        
        shadesSlider.style.transform = `translateX(${newTransform}px)`;
    }
    
    function handleEnd() {
        if (!isDragging) return;
        
        isDragging = false;
        const diff = currentX - startX;
        const threshold = 50;
        
        shadesSlider.style.transition = 'transform 0.3s ease';
        shadesSlider.style.cursor = 'grab';
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                prevShadesSlide();
            } else {
                nextShadesSlide();
            }
        } else {
            updateShadesSlider();
        }
    }
    
    // Mouse events
    shadesSlider.addEventListener('mousedown', handleStart);
    document.addEventListener('mousemove', handleMove);
    document.addEventListener('mouseup', handleEnd);
    
    // Touch events
    shadesSlider.addEventListener('touchstart', handleStart, { passive: false });
    document.addEventListener('touchmove', handleMove, { passive: false });
    document.addEventListener('touchend', handleEnd);
    
    // Prevent context menu on long press
    shadesSlider.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
    
    // Window resize handler
    window.addEventListener('resize', function() {
        const maxIndex = getMaxIndex();
        if (currentShadesIndex > maxIndex) {
            currentShadesIndex = maxIndex;
        }
        updateShadesSlider();
    });
    
    // Initialize
    shadesSlider.style.cursor = 'grab';
    filterItems(''); // Initialize with all countries
    updateShadesSlider();
});
</script>

<!--
<script>
document.addEventListener('DOMContentLoaded', function() {
    const markers = document.querySelectorAll('.ras-tots-map-marker');
    const contentItems = document.querySelectorAll('.ras-tots-map-location-item');
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
</script> -->