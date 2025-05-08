<?php
/**
 * Hoagie Hunter Table Shortcode
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function ra7_hoagie_hunter_table_shortcode() {
    ob_start();
    
    $data = array(
        array(
          'Rank' => 1,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #8659',
          'Address' => '3267 Proffit Rd, Charlottesville, VA 22911',
          'Google_Review_Score' => 4.3,
          'Number_of_Reviews' => 387,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 84.5
        ),
        array(
          'Rank' => 2,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #6304',
          'Address' => '1401 Tallahassee Hwy, Bainbridge, GA 39819',
          'Google_Review_Score' => 5,
          'Number_of_Reviews' => 1,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 79.1
        ),
        array(
          'Rank' => 3,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #93',
          'Address' => '4401 West Stone Dr, Kingsport, TN, 37660',
          'Google_Review_Score' => 4.5,
          'Number_of_Reviews' => 623,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 78.1
        ),
        array(
          'Rank' => 4,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #4067',
          'Address' => '11873 Potranco Rd, San Antonio, TX 78253',
          'Google_Review_Score' => 4.5,
          'Number_of_Reviews' => 288,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 74.2
        ),
        array(
          'Rank' => 5,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5801',
          'Address' => '18968 Greeno Road, Fairhope, AL 36532',
          'Google_Review_Score' => 3.9,
          'Number_of_Reviews' => 68,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 70.3
        ),
        array(
          'Rank' => 6,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5325',
          'Address' => '2373 SW Archer Road, Gainesville, FL 32608',
          'Google_Review_Score' => 3.5,
          'Number_of_Reviews' => 166,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 69.4
        ),
        array(
          'Rank' => 7,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5438',
          'Address' => '3267 Proffit Rd, Charlottesville, VA 22911',
          'Google_Review_Score' => 4,
          'Number_of_Reviews' => 5,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 69.2
        ),
        array(
          'Rank' => 8,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #90',
          'Address' => '2865 Winfield Dunn Pkwy, Sevierville, TN, 37764',
          'Google_Review_Score' => 4.4,
          'Number_of_Reviews' => 344,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 68.1
        ),
        array(
          'Rank' => 9,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5323',
          'Address' => '4322 SW Archer Rd, Gainesville, FL 32608',
          'Google_Review_Score' => 3.5,
          'Number_of_Reviews' => 119,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 67.9
        ),
        array(
          'Rank' => 10,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5384',
          'Address' => '2305 NW 13th Street, Gainesville, FL 32609',
          'Google_Review_Score' => 3.5,
          'Number_of_Reviews' => 115,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 67.8
        ),
        array(
          'Rank' => 11,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #6307',
          'Address' => '356 West Orange Street, Jesup, GA 31545',
          'Google_Review_Score' => 3.8,
          'Number_of_Reviews' => 18,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 67.7
        ),
        array(
          'Rank' => 12,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5805',
          'Address' => '664 Schillinger Rd, Mobile, AL 36695',
          'Google_Review_Score' => 3.8,
          'Number_of_Reviews' => 10,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 67.4
        ),
        array(
          'Rank' => 13,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #4070',
          'Address' => '6618 Medina Base Rd, San Antonio, TX 78242',
          'Google_Review_Score' => 4.3,
          'Number_of_Reviews' => 128,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 67.1
        ),
        array(
          'Rank' => 14,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #6303',
          'Address' => '4330 New Jessup Hwy, Brunswick, GA 31520',
          'Google_Review_Score' => 3.7,
          'Number_of_Reviews' => 19,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 66.7
        ),
        array(
          'Rank' => 15,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5385',
          'Address' => '1614 West University Ave, Gainesville, FL 32603',
          'Google_Review_Score' => 3.5,
          'Number_of_Reviews' => 66,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 66.2
        ),
        array(
          'Rank' => 16,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #31',
          'Address' => '5116 S Sheridan Rd, Tulsa, OK 74145',
          'Google_Review_Score' => 4.5,
          'Number_of_Reviews' => 34,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 66.1
        ),
        array(
          'Rank' => 17,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #531',
          'Address' => '1900 SE 37th St, Grimes, IA 50111',
          'Google_Review_Score' => 4.5,
          'Number_of_Reviews' => 26,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 65.8
        ),
        array(
          'Rank' => 18,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #374',
          'Address' => '8723 W 13th St N, Wichita, KS 67212',
          'Google_Review_Score' => 4.4,
          'Number_of_Reviews' => 55,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 65.8
        ),
        array(
          'Rank' => 19,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #7170',
          'Address' => '4001 Buttermilk Rd, Cottondale, AL 35453',
          'Google_Review_Score' => 4.2,
          'Number_of_Reviews' => 115,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 65.7
        ),
        array(
          'Rank' => 20,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5313',
          'Address' => '1007 East University Ave, Gainesville, FL 32601',
          'Google_Review_Score' => 3.3,
          'Number_of_Reviews' => 105,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 65.5
        ),
        array(
          'Rank' => 21,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #32',
          'Address' => '102 SE Washington Blvd, Bartlesville, OK 74006',
          'Google_Review_Score' => 4.3,
          'Number_of_Reviews' => 75,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 65.4
        ),
        array(
          'Rank' => 22,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #150',
          'Address' => '309 S Broadway, Oak Grove, MO 64075',
          'Google_Review_Score' => 4.2,
          'Number_of_Reviews' => 105,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 65.4
        ),
        array(
          'Rank' => 23,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #7171',
          'Address' => '2220 Hwy 84, Calera, AL 35040',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 129,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 65.1
        ),
        array(
          'Rank' => 24,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #1009',
          'Address' => '680 River Hwy, Mooresville, NC 28117',
          'Google_Review_Score' => 4.3,
          'Number_of_Reviews' => 64,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 65.1
        ),
        array(
          'Rank' => 25,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #534',
          'Address' => '2945 E University Ave, Des Moines, IA 50317',
          'Google_Review_Score' => 4.2,
          'Number_of_Reviews' => 93,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 65
        ),
        array(
          'Rank' => 26,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #152',
          'Address' => '4005 S Little Blue Pkwy, Independence, MO 64057',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 105,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 64.4
        ),
        array(
          'Rank' => 27,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5431',
          'Address' => '1495 Capital Cir NW, Tallahassee, FL 32303',
          'Google_Review_Score' => 3.3,
          'Number_of_Reviews' => 58,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 63.9
        ),
        array(
          'Rank' => 28,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #78',
          'Address' => '2105 Hwy 321, Maryville, TN, 37801',
          'Google_Review_Score' => 4.5,
          'Number_of_Reviews' => 170,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 63.5
        ),
        array(
          'Rank' => 29,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #1012',
          'Address' => '383 George Liles Pkwy, Concord, NC 28027',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 77,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 63.5
        ),
        array(
          'Rank' => 30,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #1403',
          'Address' => '1550 E Baseline Rd, Phoenix, AZ 85042',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 72,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 63.3
        ),
        array(
          'Rank' => 31,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5800',
          'Address' => '7075 Cottage Hill Road, Mobile, AL 36695',
          'Google_Review_Score' => 3.3,
          'Number_of_Reviews' => 33,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 63.1
        ),
        array(
          'Rank' => 32,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #112',
          'Address' => '700 E Broadway Blvd, Jefferson City, TN 37760, USA',
          'Google_Review_Score' => 5,
          'Number_of_Reviews' => 2,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 63.1
        ),
        array(
          'Rank' => 33,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #105',
          'Address' => '4041 Hixson Pike, Chattanooga, TN, USA',
          'Google_Review_Score' => 5,
          'Number_of_Reviews' => 2,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 63.1
        ),
        array(
          'Rank' => 34,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #579',
          'Address' => '1704 S 72nd St, Omaha, NE 68124',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 66,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 63.1
        ),
        array(
          'Rank' => 35,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #1404',
          'Address' => '3720 S Val Vista Dr, Gilbert, AZ 85297',
          'Google_Review_Score' => 4,
          'Number_of_Reviews' => 86,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 62.8
        ),
        array(
          'Rank' => 36,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #8660',
          'Address' => '1215 Seminole Trail, Charlottesville, VA 22901',
          'Google_Review_Score' => 3.2,
          'Number_of_Reviews' => 34,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 62.2
        ),
        array(
          'Rank' => 37,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #8698',
          'Address' => '1544 Martinsburg Pike, Winchester, VA 22603',
          'Google_Review_Score' => 3.2,
          'Number_of_Reviews' => 34,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 62.2
        ),
        array(
          'Rank' => 38,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #376',
          'Address' => '2106 S Rock Rd, Wichita, KS 67207',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 33,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 62.1
        ),
        array(
          'Rank' => 39,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #1400',
          'Address' => '2150 E University Dr, Tempe, AZ 85281',
          'Google_Review_Score' => 3.9,
          'Number_of_Reviews' => 95,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 62
        ),
        array(
          'Rank' => 40,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #1863',
          'Address' => '8141 Gasoline Alley, Northlake, TX 76262',
          'Google_Review_Score' => 3.7,
          'Number_of_Reviews' => 157,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 62
        ),
        array(
          'Rank' => 41,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5803',
          'Address' => '21022 Hwy 59, Robertsdale, AL 36567',
          'Google_Review_Score' => 3.2,
          'Number_of_Reviews' => 23,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 61.8
        ),
        array(
          'Rank' => 42,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #373',
          'Address' => '1607 E Lincoln, Wichita, KS 67211',
          'Google_Review_Score' => 4,
          'Number_of_Reviews' => 55,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 61.8
        ),
        array(
          'Rank' => 43,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #577',
          'Address' => '11626 Virginia Plaza, La Vista, NE 68128',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 22,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 61.7
        ),
        array(
          'Rank' => 44,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #91',
          'Address' => '616 Wears Valley Road, Pigeon Forge, TN, USA',
          'Google_Review_Score' => 4.7,
          'Number_of_Reviews' => 40,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 61.3
        ),
        array(
          'Rank' => 45,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #1133',
          'Address' => '4701 Augusta Rd, Greenville, SC 29605',
          'Google_Review_Score' => 3.9,
          'Number_of_Reviews' => 56,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 60.8
        ),
        array(
          'Rank' => 46,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #1131',
          'Address' => '489 W Main St, Spartanburg, SC 29301',
          'Google_Review_Score' => 3.8,
          'Number_of_Reviews' => 76,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 60.4
        ),
        array(
          'Rank' => 47,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5455',
          'Address' => '8840 Boesch Lane, Pensacola, FL 32534',
          'Google_Review_Score' => 3,
          'Number_of_Reviews' => 41,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 60.4
        ),
        array(
          'Rank' => 48,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #30',
          'Address' => '5111 S Lewis Ave E, Tulsa, OK 74105',
          'Google_Review_Score' => 3.8,
          'Number_of_Reviews' => 71,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 60.3
        ),
        array(
          'Rank' => 49,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #103',
          'Address' => '210 Lovell Rd, Knoxville, TN 37934, USA',
          'Google_Review_Score' => 4.4,
          'Number_of_Reviews' => 96,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 60.1
        ),
        array(
          'Rank' => 50,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #530',
          'Address' => '1424 E Euclid Ave, Des Moines, IA 50313',
          'Google_Review_Score' => 3.8,
          'Number_of_Reviews' => 55,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 59.8
        ),
        array(
          'Rank' => 51,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #576',
          'Address' => '3201 L St, Omaha, NE 68107',
          'Google_Review_Score' => 3.8,
          'Number_of_Reviews' => 54,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 59.7
        ),
        array(
          'Rank' => 52,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #92',
          'Address' => '1150 Hunters Crossing Drive, Alcoa, TN, 37701',
          'Google_Review_Score' => 4.4,
          'Number_of_Reviews' => 79,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 59.6
        ),
        array(
          'Rank' => 53,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #109',
          'Address' => '1421 North Concord Road, Chattanooga, TN, USA',
          'Google_Review_Score' => 4.6,
          'Number_of_Reviews' => 14,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 59.5
        ),
        array(
          'Rank' => 54,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #703',
          'Address' => '2040 Beaver Ruin Rd, Norcross, GA 30071',
          'Google_Review_Score' => 3.6,
          'Number_of_Reviews' => 85,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 58.7
        ),
        array(
          'Rank' => 55,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #96',
          'Address' => '3685 Roy Messer Hwy, White Pine, TN, USA',
          'Google_Review_Score' => 4.4,
          'Number_of_Reviews' => 51,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 58.7
        ),
        array(
          'Rank' => 56,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #99',
          'Address' => '152 Headtown Road, Jonesborough, TN, USA',
          'Google_Review_Score' => 4.5,
          'Number_of_Reviews' => 4,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 58.2
        ),
        array(
          'Rank' => 57,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #7096',
          'Address' => '2121 S Edwin C Moses Blvd, Dayton, OH 45417',
          'Google_Review_Score' => 3.7,
          'Number_of_Reviews' => 33,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 58.1
        ),
        array(
          'Rank' => 58,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #7203',
          'Address' => '1320 May Rd, Peru, IL 61354',
          'Google_Review_Score' => 3.7,
          'Number_of_Reviews' => 30,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 58
        ),
        array(
          'Rank' => 59,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #153',
          'Address' => '1401 Armour Rd, North Kansas City, MO 64116',
          'Google_Review_Score' => 3.4,
          'Number_of_Reviews' => 118,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 57.8
        ),
        array(
          'Rank' => 60,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #1004',
          'Address' => '3025 Wilkinson Blvd, Charlotte, NC 28208',
          'Google_Review_Score' => 3.4,
          'Number_of_Reviews' => 116,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 57.7
        ),
        array(
          'Rank' => 61,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #1130',
          'Address' => '3450 Hwy 153, Piedmont, SC 29673',
          'Google_Review_Score' => 3.6,
          'Number_of_Reviews' => 53,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 57.7
        ),
        array(
          'Rank' => 62,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #110',
          'Address' => '4115 Georgetown Rd NW, Cleveland, TN 37312',
          'Google_Review_Score' => 4.3,
          'Number_of_Reviews' => 6,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 56.2
        ),
        array(
          'Rank' => 63,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #705',
          'Address' => '5795 Jimmy Carter Blvd, Norcross, GA 30071',
          'Google_Review_Score' => 3.3,
          'Number_of_Reviews' => 101,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 56.2
        ),
        array(
          'Rank' => 64,
          'Gas_Station_Brand' => 'QuikTrip',
          'Store_Number' => 'QuikTrip Store #700',
          'Address' => '741 W Pike St, Lawrenceville, GA 30046',
          'Google_Review_Score' => 3.4,
          'Number_of_Reviews' => 61,
          'Number_of_Sandwiches' => 10,
          'Average_Sandwich_Cost' => 7.05,
          'Total_Score' => 56
        ),
        array(
          'Rank' => 65,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #95',
          'Address' => '1416 Hwy 11 W, Bristol, TN 37620, USA',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 56,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 55.9
        ),
        array(
          'Rank' => 66,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #108',
          'Address' => '5531 Tennessee 58, Harrison, TN, USA',
          'Google_Review_Score' => 4.2,
          'Number_of_Reviews' => 22,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 55.8
        ),
        array(
          'Rank' => 67,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #82',
          'Address' => '2340 Clinton Hwy, Powell, TN, 37849',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 47,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 55.6
        ),
        array(
          'Rank' => 68,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #60',
          'Address' => '5904 Washington Pike, Knoxville, TN, 37918',
          'Google_Review_Score' => 4,
          'Number_of_Reviews' => 68,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 55.2
        ),
        array(
          'Rank' => 69,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #80',
          'Address' => '910 Cosby Hwy, Newport, TN, 37821',
          'Google_Review_Score' => 3.7,
          'Number_of_Reviews' => 151,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 54.9
        ),
        array(
          'Rank' => 70,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #62',
          'Address' => '12350 State Hwy 72, Loudon, TN, USA',
          'Google_Review_Score' => 3.9,
          'Number_of_Reviews' => 79,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 54.6
        ),
        array(
          'Rank' => 71,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #86',
          'Address' => '208 Hwy 68, Sweetwater, TN, 37874',
          'Google_Review_Score' => 3.7,
          'Number_of_Reviews' => 107,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 53.5
        ),
        array(
          'Rank' => 72,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #104',
          'Address' => '118 Union Valley Road, Oak Ridge, TN, USA',
          'Google_Review_Score' => 4,
          'Number_of_Reviews' => 7,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 53.3
        ),
        array(
          'Rank' => 73,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #83',
          'Address' => '2403 Jacksboro Pike, LaFollette, TN, 37766',
          'Google_Review_Score' => 3.8,
          'Number_of_Reviews' => 66,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 53.2
        ),
        array(
          'Rank' => 74,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #58',
          'Address' => '504 Gallaher Rd, Kingston, TN, USA',
          'Google_Review_Score' => 3.6,
          'Number_of_Reviews' => 94,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 52.1
        ),
        array(
          'Rank' => 75,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #66',
          'Address' => '4567 Hwy 321, Lenoir City, TN, 37771',
          'Google_Review_Score' => 3.7,
          'Number_of_Reviews' => 55,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 51.8
        ),
        array(
          'Rank' => 76,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #98',
          'Address' => '4555 W Andrew Johnson Hwy, Morristown, TN 37814, USA',
          'Google_Review_Score' => 3.7,
          'Number_of_Reviews' => 30,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 51
        ),
        array(
          'Rank' => 77,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #94',
          'Address' => '2810 East Stone Drive, Kingsport, TN, USA',
          'Google_Review_Score' => 3.7,
          'Number_of_Reviews' => 27,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 50.9
        ),
        array(
          'Rank' => 78,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #88',
          'Address' => '3815 Western Ave, Knoxville, TN, 37921',
          'Google_Review_Score' => 3.5,
          'Number_of_Reviews' => 75,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 50.5
        ),
        array(
          'Rank' => 79,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #64',
          'Address' => '2409 North Charles G Seivers Boulevard, Clinton, TN 37716, USA',
          'Google_Review_Score' => 3.3,
          'Number_of_Reviews' => 132,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 50.3
        ),
        array(
          'Rank' => 80,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #102',
          'Address' => '2805 Decatur Pike, Athens, TN 37303, USA',
          'Google_Review_Score' => 3.6,
          'Number_of_Reviews' => 33,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 50.1
        ),
        array(
          'Rank' => 81,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #97',
          'Address' => '5777 U.S. 11E, Piney Flats, TN 37686, USA',
          'Google_Review_Score' => 3.5,
          'Number_of_Reviews' => 26,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 48.9
        ),
        array(
          'Rank' => 82,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #69',
          'Address' => '1512 Dolly Parton Pkwy, Sevierville, TN, 37862',
          'Google_Review_Score' => 3.3,
          'Number_of_Reviews' => 86,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 48.8
        ),
        array(
          'Rank' => 83,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #101',
          'Address' => '5875 Hwy 153, Hixson, TN, USA',
          'Google_Review_Score' => 3.3,
          'Number_of_Reviews' => 56,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 47.9
        ),
        array(
          'Rank' => 84,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #84',
          'Address' => '3939 Chapman Hwy, Knoxville, TN, 37920',
          'Google_Review_Score' => 3.1,
          'Number_of_Reviews' => 111,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 47.6
        ),
        array(
          'Rank' => 85,
          'Gas_Station_Brand' => 'Weigel\'s',
          'Store_Number' => 'Store #100',
          'Address' => '2230 Polymer Drive, Chattanooga, TN 37421, USA',
          'Google_Review_Score' => 2.9,
          'Number_of_Reviews' => 9,
          'Number_of_Sandwiches' => 6,
          'Average_Sandwich_Cost' => 9.99,
          'Total_Score' => 42.3
        ),
        array(
          'Rank' => 86,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5443',
          'Address' => '50 Daydream Ave, Yulee, FL 32097',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 36,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 71.2
        ),
        array(
          'Rank' => 87,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #8667',
          'Address' => '820 Pantops Corner Way, Charlottesville, VA 22911',
          'Google_Review_Score' => 4,
          'Number_of_Reviews' => 114,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 72.7
        ),
        array(
          'Rank' => 88,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5266',
          'Address' => '8251 Old Middleburg Rd S, Jacksonville, FL 32222',
          'Google_Review_Score' => 3.3,
          'Number_of_Reviews' => 137,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 66.5
        ),
        array(
          'Rank' => 89,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5300',
          'Address' => '505 US NE Hwy 19, Crystal River, FL 34429',
          'Google_Review_Score' => 4.1,
          'Number_of_Reviews' => 308,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 80
        ),
        array(
          'Rank' => 90,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5351',
          'Address' => '1004 Edgewood Ave North, Jacksonville, FL 32254',
          'Google_Review_Score' => 3.9,
          'Number_of_Reviews' => 36,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 69.2
        ),
        array(
          'Rank' => 91,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5276',
          'Address' => '6787 Wilson Blvd, Jacksonville, FL 32210',
          'Google_Review_Score' => 3.7,
          'Number_of_Reviews' => 369,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 77.9
        ),
        array(
          'Rank' => 92,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5340',
          'Address' => '970 Cassat Ave, Jacksonville, FL 32205',
          'Google_Review_Score' => 3.8,
          'Number_of_Reviews' => 94,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 70.1
        ),
        array(
          'Rank' => 93,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5289',
          'Address' => '1563 Blanding Blvd, Middleburg, FL 32068',
          'Google_Review_Score' => 3.6,
          'Number_of_Reviews' => 144,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 69.7
        ),
        array(
          'Rank' => 94,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5349',
          'Address' => '7911 Blanding Blvd, Jacksonville, FL 32244',
          'Google_Review_Score' => 3.3,
          'Number_of_Reviews' => 122,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 66
        ),
        array(
          'Rank' => 95,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5263',
          'Address' => '678 Blanding Blvd, Orange Park, FL 32073',
          'Google_Review_Score' => 3.6,
          'Number_of_Reviews' => 133,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 69.4
        ),
        array(
          'Rank' => 96,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5320',
          'Address' => '2932 W Norvell Bryant Hwy, Lecanto, FL 34461',
          'Google_Review_Score' => 3.8,
          'Number_of_Reviews' => 177,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 72.8
        ),
        array(
          'Rank' => 97,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5328',
          'Address' => '300 Park Ave, Orange Park, FL 32073',
          'Google_Review_Score' => 3.5,
          'Number_of_Reviews' => 182,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 69.9
        ),
        array(
          'Rank' => 98,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5393',
          'Address' => '1331 University Blvd North, Jacksonville, FL 32211',
          'Google_Review_Score' => 3.9,
          'Number_of_Reviews' => 234,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 75.6
        ),
        array(
          'Rank' => 99,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5367',
          'Address' => '3561 Spring Park Road, Jacksonville, FL 32207',
          'Google_Review_Score' => 3.1,
          'Number_of_Reviews' => 37,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 61.3
        ),
        array(
          'Rank' => 100,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5333',
          'Address' => '5735 Phillips Hwy, Jacksonville, FL 32216',
          'Google_Review_Score' => 3.5,
          'Number_of_Reviews' => 236,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 71.7
        ),
        array(
          'Rank' => 101,
          'Gas_Station_Brand' => 'Wawa',
          'Store_Number' => 'Store #5274',
          'Address' => '9715 Beach Blvd, Jacksonville, FL 32246',
          'Google_Review_Score' => 4,
          'Number_of_Reviews' => 362,
          'Number_of_Sandwiches' => 20,
          'Average_Sandwich_Cost' => 7.76,
          'Total_Score' => 80.7
        )
      );
    ?>
    <div class="ras-hp-hh-container">
        <section class="ras-hp-hh-table-wrapper">
            <div class="ras-hp-hh-table-inner">
                <table class="ras-hp-hh-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gas Station</th>
                            <th>Store Number</th>
                            <th>Address</th>
                            <th>Review Score</th>
                            <th># of Reviews</th>
                            <th># of Sandwiches</th>
                            <th>Avg Sandwich Cost</th>
                            <th>Total Score</th>
                        </tr>
                    </thead>
                    <tbody id="hoagie-table-body">
                    </tbody>
                </table>
            </div>
        </section>
        <div class="ras-hp-hh-table-footer">
            <button id="load-more-btn" class="button">Show More</button>
            <span id="showing-count"></span>
        </div>
    </div>

    <style>
    .ras-hp-hh-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        background-color: #1a1a1a;
        margin: 20px 0 0 0;
        padding: 40px 0;
    }

    .ras-hp-hh-table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        width: 100%;
    }

    .ras-hp-hh-table-inner {
        max-width: 1320px;
        min-width: 1024px;
        margin: 50px auto;
        padding: 0 15px;
    }

    .ras-hp-hh-table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .ras-hp-hh-table th:nth-child(1),
    .ras-hp-hh-table td:nth-child(1) {
        width: 4%;
    }

    .ras-hp-hh-table th:nth-child(2),
    .ras-hp-hh-table td:nth-child(2) {
        width: 12%;
    }

    .ras-hp-hh-table th:nth-child(3),
    .ras-hp-hh-table td:nth-child(3) {
        width: 12%;
    }

    .ras-hp-hh-table th:nth-child(4),
    .ras-hp-hh-table td:nth-child(4) {
        width: 20%;
    }

    .ras-hp-hh-table th:nth-child(5),
    .ras-hp-hh-table td:nth-child(5),
    .ras-hp-hh-table th:nth-child(6),
    .ras-hp-hh-table td:nth-child(6),
    .ras-hp-hh-table th:nth-child(7),
    .ras-hp-hh-table td:nth-child(7),
    .ras-hp-hh-table th:nth-child(8),
    .ras-hp-hh-table td:nth-child(8),
    .ras-hp-hh-table th:nth-child(9),
    .ras-hp-hh-table td:nth-child(9) {
        width: 10.4%;
        text-align: center;
    }

    .ras-hp-hh-table tr {
        border-bottom: 1px solid #ff5101;
        padding: 10px 0;
    }

    .ras-hp-hh-table th,
    .ras-hp-hh-table td {
        background-color: transparent !important;
        color: #ffffff;
        padding: 4px 6px
    }
    .ras-hp-hh-table tbody tr {
        background-color: #2c2c2c;
        border-bottom: 10px #1a1a1a solid;
        margin: 5px 0;
    }

    .ras-hp-hh-table-center {
        text-align: center;
    }

    .ras-hp-hh-table-footer {
        text-align: center;
        margin-top: 20px;
        width: 100%;
        background-color: transparent;
        position: relative;
        z-index: 1;
        padding: 0 15px;
    }

    #load-more-btn {
        width: 100%;
        border-radius: 10px;
        padding: 10px;
        border: 1px solid #ff5101;
        color: #ffffff;
        cursor: pointer;
        transition: background-color 0.3s ease;
        max-width: 1280px;
        margin: 0 auto;
    }

    #load-more-btn:hover {
        background-color: #ff510175 !important;
        border: 1px solid #ff5101;
        color: #ffffff !important;
    }

    #showing-count {
        display: block;
        margin-top: 10px;
        color: #666;
    }
    </style>

    <script>
    (function() {
        const tableData = <?php echo json_encode($data); ?>;
        const itemsPerPage = 10;
        let currentPage = 1;
        
        function renderTableRows(start, end) {
            const tbody = document.getElementById('hoagie-table-body');
            const fragment = document.createDocumentFragment();
            
            for(let i = start; i < end && i < tableData.length; i++) {
                const row = tableData[i];
                const tr = document.createElement('tr');
                
                tr.innerHTML = `
                    <td>${row.Rank}</td>
                    <td>${row.Gas_Station_Brand}</td>
                    <td>${row.Store_Number}</td>
                    <td>${row.Address.replace(/,/, ',<br />')}</td>
                    <td class="ras-hp-hh-table-center">${row.Google_Review_Score}</td>
                    <td class="ras-hp-hh-table-center">${row.Number_of_Reviews}</td>
                    <td class="ras-hp-hh-table-center">${row.Number_of_Sandwiches}</td>
                    <td class="ras-hp-hh-table-center">$${row.Average_Sandwich_Cost}</td>
                    <td class="ras-hp-hh-table-center">${row.Total_Score}</td>
                `;
                
                fragment.appendChild(tr);
            }
            
            tbody.appendChild(fragment);
            updateShowingCount(end);
        }
        
        function updateShowingCount(showing) {
            const count = document.getElementById('showing-count');
            count.textContent = `Showing ${showing} of ${tableData.length} entries`;
            
            // Hide load more button if all items are shown
            const loadMoreBtn = document.getElementById('load-more-btn');
            if (showing >= tableData.length) {
                loadMoreBtn.style.display = 'none';
            }
        }
        
        function init() {
            // Initial render
            renderTableRows(0, itemsPerPage);
            
            // Load more button handler
            document.getElementById('load-more-btn').addEventListener('click', function() {
                const start = currentPage * itemsPerPage;
                const end = start + itemsPerPage;
                currentPage++;
                renderTableRows(start, end);
            });
        }
        
        // Initialize when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else {
            init();
        }
    })();
    </script>
    <?php
    return ob_get_clean(); // Return the buffered content
}

// Register the shortcode
add_shortcode('hoagie_hunter_table', 'ra7_hoagie_hunter_table_shortcode');

