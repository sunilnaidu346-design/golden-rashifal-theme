<?php
/**
 * Astrology helpers — Panchang summary, Choghadiya table, Rahukaal time.
 *
 * Important note for site owners and editors:
 *
 *   पंचांग, सूर्योदय/सूर्यास्त, राहुकाल और चौघड़िया का सही समय आपके शहर के
 *   अक्षांश-देशांतर पर निर्भर करता है। यह थीम एक सामान्य दिल्ली / उत्तर भारत
 *   के समय को सांकेतिक डिफ़ॉल्ट के रूप में दिखाती है। पाठक के लिए सटीक मान
 *   दिखाने के लिए सूर्योदय और सूर्यास्त को Customizer या भविष्य के विजेट से
 *   कस्टमाइज़ किया जा सकता है।
 *
 * The traditional weekly mapping for Choghadiya / Rahukaal is well documented:
 * see Drik Panchang and standard panchang references.
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Default sunrise / sunset for the current day.
 *
 * Returns 24-hour H:i strings. We use a soft month-based variation so the
 * times look believable across the year; site owners should override with
 * a real ephemeris when accuracy matters.
 *
 * @return array{sunrise:string,sunset:string}
 */
function golden_rashifal_sun_times() {

    // A simple, conservative model centred on north India.
    $month = (int) wp_date( 'n' );

    // Approximate sunrise minute-of-day by month (Jan…Dec).
    $sunrise_min = array(
        1 => 7 * 60 + 12,
        2 => 6 * 60 + 58,
        3 => 6 * 60 + 32,
        4 => 5 * 60 + 58,
        5 => 5 * 60 + 32,
        6 => 5 * 60 + 22,
        7 => 5 * 60 + 30,
        8 => 5 * 60 + 48,
        9 => 6 * 60 + 6,
        10 => 6 * 60 + 24,
        11 => 6 * 60 + 48,
        12 => 7 * 60 + 8,
    );

    $sunset_min = array(
        1 => 17 * 60 + 42,
        2 => 18 * 60 + 8,
        3 => 18 * 60 + 28,
        4 => 18 * 60 + 46,
        5 => 19 * 60 + 4,
        6 => 19 * 60 + 18,
        7 => 19 * 60 + 18,
        8 => 18 * 60 + 58,
        9 => 18 * 60 + 24,
        10 => 17 * 60 + 50,
        11 => 17 * 60 + 26,
        12 => 17 * 60 + 28,
    );

    $sr = $sunrise_min[ $month ];
    $ss = $sunset_min[ $month ];

    return array(
        'sunrise' => sprintf( '%02d:%02d', floor( $sr / 60 ), $sr % 60 ),
        'sunset'  => sprintf( '%02d:%02d', floor( $ss / 60 ), $ss % 60 ),
        'sunrise_min' => $sr,
        'sunset_min'  => $ss,
    );
}

/**
 * Quick pretty 12-hour clock from minutes-of-day.
 */
function golden_rashifal_format_minutes( $minutes ) {
    $minutes = (int) $minutes % ( 24 * 60 );
    $h24     = (int) floor( $minutes / 60 );
    $m       = $minutes % 60;
    $period  = $h24 >= 12 ? 'PM' : 'AM';
    $h12     = $h24 % 12;
    if ( 0 === $h12 ) {
        $h12 = 12;
    }
    return sprintf( '%d:%02d %s', $h12, $m, $period );
}

/**
 * Rahukaal time slot for today.
 *
 * Day is divided into 8 equal parts between sunrise and sunset; Rahukaal
 * occupies a fixed slot per weekday in the traditional system.
 *
 * Weekday index: 0=Sun … 6=Sat
 * Rahukaal slot (1-indexed of 8): Sun=8, Mon=2, Tue=7, Wed=5, Thu=6, Fri=4, Sat=3
 *
 * @return array{start:string,end:string,note:string}
 */
function golden_rashifal_rahukaal() {

    $sun = golden_rashifal_sun_times();
    $day_minutes = $sun['sunset_min'] - $sun['sunrise_min'];
    $slot_len    = $day_minutes / 8;

    $weekday = (int) wp_date( 'w' );
    $slots   = array( 8, 2, 7, 5, 6, 4, 3 );
    $slot_no = $slots[ $weekday ]; // 1..8

    $start = (int) round( $sun['sunrise_min'] + ( $slot_no - 1 ) * $slot_len );
    $end   = (int) round( $start + $slot_len );

    return array(
        'start' => golden_rashifal_format_minutes( $start ),
        'end'   => golden_rashifal_format_minutes( $end ),
        'note'  => __( 'राहुकाल को पारंपरिक रूप से नए शुभ कार्यों की शुरुआत के लिए कम उपयुक्त समय माना जाता है।', 'golden-rashifal' ),
    );
}

/**
 * Day & night Choghadiya table.
 *
 * Day starts at sunrise, divided into 8 equal Choghadiya. Night starts at
 * sunset, again 8 parts till next sunrise. The order rotates by weekday.
 *
 * Standard order tables (1-indexed):
 *   Sun day:  Udveg, Char, Labh, Amrit, Kaal, Shubh, Rog, Udveg
 *   Mon day:  Amrit, Kaal, Shubh, Rog, Udveg, Char, Labh, Amrit
 *   Tue day:  Rog, Udveg, Char, Labh, Amrit, Kaal, Shubh, Rog
 *   Wed day:  Labh, Amrit, Kaal, Shubh, Rog, Udveg, Char, Labh
 *   Thu day:  Shubh, Rog, Udveg, Char, Labh, Amrit, Kaal, Shubh
 *   Fri day:  Char, Labh, Amrit, Kaal, Shubh, Rog, Udveg, Char
 *   Sat day:  Kaal, Shubh, Rog, Udveg, Char, Labh, Amrit, Kaal
 *
 * Night uses a parallel set of orders for the same weekday.
 *
 * @return array{day:array<int,array{name:string,time:string,type:string}>,night:array<int,array{name:string,time:string,type:string}>}
 */
function golden_rashifal_choghadiya_today() {

    $sun = golden_rashifal_sun_times();

    $day_orders = array(
        0 => array( 'Udveg', 'Char', 'Labh', 'Amrit', 'Kaal', 'Shubh', 'Rog', 'Udveg' ),
        1 => array( 'Amrit', 'Kaal', 'Shubh', 'Rog', 'Udveg', 'Char', 'Labh', 'Amrit' ),
        2 => array( 'Rog', 'Udveg', 'Char', 'Labh', 'Amrit', 'Kaal', 'Shubh', 'Rog' ),
        3 => array( 'Labh', 'Amrit', 'Kaal', 'Shubh', 'Rog', 'Udveg', 'Char', 'Labh' ),
        4 => array( 'Shubh', 'Rog', 'Udveg', 'Char', 'Labh', 'Amrit', 'Kaal', 'Shubh' ),
        5 => array( 'Char', 'Labh', 'Amrit', 'Kaal', 'Shubh', 'Rog', 'Udveg', 'Char' ),
        6 => array( 'Kaal', 'Shubh', 'Rog', 'Udveg', 'Char', 'Labh', 'Amrit', 'Kaal' ),
    );

    $night_orders = array(
        0 => array( 'Shubh', 'Amrit', 'Char', 'Rog', 'Kaal', 'Labh', 'Udveg', 'Shubh' ),
        1 => array( 'Char', 'Rog', 'Kaal', 'Labh', 'Udveg', 'Shubh', 'Amrit', 'Char' ),
        2 => array( 'Kaal', 'Labh', 'Udveg', 'Shubh', 'Amrit', 'Char', 'Rog', 'Kaal' ),
        3 => array( 'Udveg', 'Shubh', 'Amrit', 'Char', 'Rog', 'Kaal', 'Labh', 'Udveg' ),
        4 => array( 'Amrit', 'Char', 'Rog', 'Kaal', 'Labh', 'Udveg', 'Shubh', 'Amrit' ),
        5 => array( 'Rog', 'Kaal', 'Labh', 'Udveg', 'Shubh', 'Amrit', 'Char', 'Rog' ),
        6 => array( 'Labh', 'Udveg', 'Shubh', 'Amrit', 'Char', 'Rog', 'Kaal', 'Labh' ),
    );

    $name_map = array(
        'Udveg' => array( 'hi' => 'उद्वेग', 'type' => 'inauspicious' ),
        'Char'  => array( 'hi' => 'चर',     'type' => 'good' ),
        'Labh'  => array( 'hi' => 'लाभ',    'type' => 'good' ),
        'Amrit' => array( 'hi' => 'अमृत',  'type' => 'best' ),
        'Kaal'  => array( 'hi' => 'काल',    'type' => 'inauspicious' ),
        'Shubh' => array( 'hi' => 'शुभ',    'type' => 'best' ),
        'Rog'   => array( 'hi' => 'रोग',    'type' => 'inauspicious' ),
    );

    $weekday = (int) wp_date( 'w' );

    $day_minutes   = $sun['sunset_min'] - $sun['sunrise_min'];
    $night_minutes = ( 24 * 60 - $sun['sunset_min'] ) + $sun['sunrise_min'];
    $day_slot_len   = $day_minutes / 8;
    $night_slot_len = $night_minutes / 8;

    $day_rows = array();
    for ( $i = 0; $i < 8; $i++ ) {
        $start = (int) round( $sun['sunrise_min'] + $i * $day_slot_len );
        $end   = (int) round( $sun['sunrise_min'] + ( $i + 1 ) * $day_slot_len );
        $key   = $day_orders[ $weekday ][ $i ];
        $day_rows[] = array(
            'name' => $name_map[ $key ]['hi'],
            'type' => $name_map[ $key ]['type'],
            'time' => golden_rashifal_format_minutes( $start ) . ' – ' . golden_rashifal_format_minutes( $end ),
        );
    }

    $night_rows = array();
    for ( $i = 0; $i < 8; $i++ ) {
        $start = (int) round( $sun['sunset_min'] + $i * $night_slot_len );
        $end   = (int) round( $sun['sunset_min'] + ( $i + 1 ) * $night_slot_len );
        $key   = $night_orders[ $weekday ][ $i ];
        $night_rows[] = array(
            'name' => $name_map[ $key ]['hi'],
            'type' => $name_map[ $key ]['type'],
            'time' => golden_rashifal_format_minutes( $start ) . ' – ' . golden_rashifal_format_minutes( $end ),
        );
    }

    return array(
        'day'   => $day_rows,
        'night' => $night_rows,
    );
}

/**
 * Abhijit muhurat — midpoint of the day ± 24 minutes.
 * This is a standard Vedic calculation: take the midpoint between
 * sunrise and sunset, then subtract and add 24 minutes respectively.
 *
 * @return array{start:string,end:string}
 */
function golden_rashifal_abhijit() {
    $sun     = golden_rashifal_sun_times();
    $midpoint = (int) round( ( $sun['sunrise_min'] + $sun['sunset_min'] ) / 2 );
    $start    = $midpoint - 24;
    $end      = $midpoint + 24;
    return array(
        'start' => golden_rashifal_format_minutes( $start ),
        'end'   => golden_rashifal_format_minutes( $end ),
    );
}

/**
 * Brahma Muhurat — 1 hour 36 minutes before sunrise (96 minutes).
 * Traditional: 2 muhurtas (48 min each) before sunrise.
 *
 * @return array{start:string,end:string}
 */
function golden_rashifal_brahma_muhurat() {
    $sun   = golden_rashifal_sun_times();
    $start = $sun['sunrise_min'] - 96;
    $end   = $sun['sunrise_min'] - 48;
    return array(
        'start' => golden_rashifal_format_minutes( $start ),
        'end'   => golden_rashifal_format_minutes( $end ),
    );
}

/**
 * Godhuli Muhurat — around sunset (sunset − 12 to sunset + 12 minutes).
 *
 * @return array{start:string,end:string}
 */
function golden_rashifal_godhuli() {
    $sun = golden_rashifal_sun_times();
    return array(
        'start' => golden_rashifal_format_minutes( $sun['sunset_min'] - 12 ),
        'end'   => golden_rashifal_format_minutes( $sun['sunset_min'] + 12 ),
    );
}

/**
 * Vikram Samvat year for the current Gregorian date.
 * Vikram Samvat starts in Chaitra (mid-March to mid-April).
 * Approximate rule: VS = Gregorian year + 57 (before mid-April: +56).
 *
 * @return int
 */
function golden_rashifal_vikram_samvat() {
    $month = (int) wp_date( 'n' );
    $day   = (int) wp_date( 'j' );
    $year  = (int) wp_date( 'Y' );
    // New Vikram year begins around April 14 (Chaitra Shukla Pratipada).
    if ( $month < 4 || ( $month === 4 && $day < 14 ) ) {
        return $year + 56;
    }
    return $year + 57;
}

/**
 * Tithi (lunar day) for today — approximate calculation.
 *
 * A lunar month = ~29.53 days = 30 tithis.
 * We use a well-known epoch: January 10, 2024 = Shukla Pratipada (tithi 1).
 * Days elapsed since epoch mod 29.53, mapped to tithi 1–30.
 *
 * NOTE: This is an approximation good to ±1 tithi for most dates.
 * For production-grade accuracy, use an ephemeris API.
 *
 * @return array{number:int,name:string,paksha:string}
 */
function golden_rashifal_tithi_today() {
    // Epoch: 2024-01-11 = Shukla Pratipada (new moon day + 1)
    $epoch_timestamp = mktime( 0, 0, 0, 1, 11, 2024 );
    $now_timestamp   = (int) current_time( 'timestamp' );
    $days_elapsed    = ( $now_timestamp - $epoch_timestamp ) / DAY_IN_SECONDS;
    $synodic_month   = 29.53058867;
    $tithi_number    = ( (int) floor( $days_elapsed * 30 / $synodic_month ) % 30 ) + 1;
    if ( $tithi_number < 1 )  { $tithi_number = 1; }
    if ( $tithi_number > 30 ) { $tithi_number = 30; }

    $paksha = ( $tithi_number <= 15 ) ? 'शुक्ल पक्ष' : 'कृष्ण पक्ष';
    $n      = ( $tithi_number <= 15 ) ? $tithi_number : $tithi_number - 15;

    $names = array(
        1  => 'प्रतिपदा', 2 => 'द्वितीया', 3 => 'तृतीया',  4 => 'चतुर्थी',
        5  => 'पंचमी',    6 => 'षष्ठी',    7 => 'सप्तमी',  8 => 'अष्टमी',
        9  => 'नवमी',    10 => 'दशमी',    11 => 'एकादशी', 12 => 'द्वादशी',
        13 => 'त्रयोदशी',14 => 'चतुर्दशी',15 => 'पूर्णिमा / अमावस्या',
    );

    return array(
        'number' => $tithi_number,
        'name'   => isset( $names[ $n ] ) ? $names[ $n ] : 'प्रतिपदा',
        'paksha' => $paksha,
    );
}

/**
 * Nakshatra (lunar mansion) for today — approximate calculation.
 * The Moon transits ~27.32 nakshatras per sidereal month.
 * Epoch: 2024-01-11 Moon was in Rohini (nakshatra index 3, 0-based).
 *
 * @return string Hindi nakshatra name
 */
function golden_rashifal_nakshatra_today() {
    $nakshatras = array(
        'अश्विनी','भरणी','कृत्तिका','रोहिणी','मृगशिरा','आर्द्रा',
        'पुनर्वसु','पुष्य','आश्लेषा','मघा','पूर्वाफाल्गुनी','उत्तराफाल्गुनी',
        'हस्त','चित्रा','स्वाति','विशाखा','अनुराधा','ज्येष्ठा',
        'मूल','पूर्वाषाढ़ा','उत्तराषाढ़ा','श्रवण','धनिष्ठा','शतभिषा',
        'पूर्वाभाद्रपदा','उत्तराभाद्रपदा','रेवती',
    );

    $epoch_ts    = mktime( 0, 0, 0, 1, 11, 2024 ); // Rohini epoch
    $epoch_index = 3; // Rohini is index 3 (0-based)
    $now_ts      = (int) current_time( 'timestamp' );
    $days        = ( $now_ts - $epoch_ts ) / DAY_IN_SECONDS;
    $sidereal    = 27.32166; // sidereal month days
    $idx         = ( $epoch_index + (int) floor( $days * 27 / $sidereal ) ) % 27;
    if ( $idx < 0 ) { $idx += 27; }

    return $nakshatras[ $idx ];
}

/**
 * Yoga for today — approximate calculation.
 * Yoga = (Sun longitude + Moon longitude) / 13.33°, 27 yogas total.
 * We approximate using day-of-year cycling.
 *
 * @return string Hindi yoga name
 */
function golden_rashifal_yoga_today() {
    $yogas = array(
        'विष्कम्भ','प्रीति','आयुष्मान','सौभाग्य','शोभन','अतिगण्ड',
        'सुकर्मा','धृति','शूल','गण्ड','वृद्धि','ध्रुव','व्याघात',
        'हर्षण','वज्र','सिद्धि','व्यतीपात','वरीयान','परिघ','शिव',
        'सिद्ध','साध्य','शुभ','शुक्ल','ब्रह्म','इन्द्र','वैधृति',
    );
    $day_of_year = (int) wp_date( 'z' ); // 0-based
    $year        = (int) wp_date( 'Y' );
    // Shift index slightly per year so it doesn't reset identically each Jan 1
    $idx = ( $day_of_year + $year ) % 27;
    return $yogas[ $idx ];
}

/**
 * Karan for today — approximate calculation.
 * A karan = half a tithi. 11 karans repeat in a lunar month.
 *
 * @return string Hindi karan name
 */
function golden_rashifal_karan_today() {
    $karans = array(
        'बव','बालव','कौलव','तैतिल','गर','वणिज','विष्टि',
        'शकुनि','चतुष्पाद','नाग','किंस्तुघ्न',
    );
    $tithi  = golden_rashifal_tithi_today();
    // Each tithi = 2 karans; use seconds within day to pick first or second half
    $hour   = (int) wp_date( 'G' );
    $half   = ( $hour >= 12 ) ? 1 : 0;
    $idx    = ( ( ( $tithi['number'] - 1 ) * 2 ) + $half ) % 11;
    return $karans[ $idx ];
}

/**
 * Chandrodaya (moonrise) — approximate.
 * Moonrise shifts ~48 min later each day. Epoch: 2024-01-11 moonrise ≈ 7:18 AM.
 *
 * @return string Formatted time string
 */
function golden_rashifal_chandrodaya() {
    $epoch_ts      = mktime( 0, 0, 0, 1, 11, 2024 );
    $epoch_minutes = 7 * 60 + 18; // 7:18 AM
    $now_ts        = (int) current_time( 'timestamp' );
    $days_elapsed  = ( $now_ts - $epoch_ts ) / DAY_IN_SECONDS;
    $shift         = (int) round( $days_elapsed * 48 ); // 48 min per day
    $moonrise_min  = ( $epoch_minutes + $shift ) % ( 24 * 60 );
    if ( $moonrise_min < 0 ) { $moonrise_min += 24 * 60; }
    return golden_rashifal_format_minutes( $moonrise_min );
}

/**
 * Quick Panchang summary — keys are Hindi labels for direct printing.
 */
function golden_rashifal_panchang_summary() {

    $sun     = golden_rashifal_sun_times();
    $rahu    = golden_rashifal_rahukaal();
    $weekday = wp_date( 'w' );

    $vaar_map = array(
        '0' => 'रविवार', '1' => 'सोमवार', '2' => 'मंगलवार', '3' => 'बुधवार',
        '4' => 'गुरुवार', '5' => 'शुक्रवार', '6' => 'शनिवार',
    );

    return array(
        __( 'तारीख़', 'golden-rashifal' )      => golden_rashifal_today_string(),
        __( 'वार', 'golden-rashifal' )         => $vaar_map[ $weekday ],
        __( 'सूर्योदय', 'golden-rashifal' )    => $sun['sunrise'] . ' AM',
        __( 'सूर्यास्त', 'golden-rashifal' )   => golden_rashifal_format_minutes( $sun['sunset_min'] ),
        __( 'राहुकाल', 'golden-rashifal' )     => $rahu['start'] . ' – ' . $rahu['end'],
    );
}
