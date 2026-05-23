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
