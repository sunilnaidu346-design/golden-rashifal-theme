<?php
/**
 * Template tags — small, focused helpers used inside template files.
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Print the post date in a localised, Hindi-friendly format.
 */
function golden_rashifal_posted_on() {
    $time_string = sprintf(
        '<time class="gr-meta__date" datetime="%1$s">%2$s</time>',
        esc_attr( get_the_date( DATE_W3C ) ),
        esc_html( get_the_date() )
    );
    echo '<span class="gr-meta__item">' . $time_string . '</span>';
}

/**
 * Print author with a "By" prefix that fits a Hindi context.
 */
function golden_rashifal_posted_by() {
    printf(
        '<span class="gr-meta__item gr-meta__author">%1$s <a href="%2$s">%3$s</a></span>',
        esc_html__( 'लेखक:', 'golden-rashifal' ),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        esc_html( get_the_author() )
    );
}

/**
 * Reading time estimate based on word count.
 *
 * @param int $words_per_minute Words per minute baseline.
 * @return string
 */
function golden_rashifal_reading_time( $words_per_minute = 200 ) {
    $content = get_post_field( 'post_content', get_the_ID() );
    $word_count = str_word_count( wp_strip_all_tags( (string) $content ) );
    $minutes    = max( 1, (int) ceil( $word_count / max( 1, (int) $words_per_minute ) ) );
    /* translators: %d: minutes */
    return sprintf( _n( '%d मिनट का पढ़ाव', '%d मिनट का पढ़ाव', $minutes, 'golden-rashifal' ), $minutes );
}

/**
 * Render a breadcrumb trail with Schema.org BreadcrumbList markup.
 */
function golden_rashifal_breadcrumbs() {

    if ( is_front_page() ) {
        return;
    }

    $items = array();

    $items[] = array(
        'label' => __( 'होम', 'golden-rashifal' ),
        'url'   => home_url( '/' ),
    );

    if ( is_category() || is_single() ) {
        $cats = get_the_category();
        if ( ! empty( $cats ) ) {
            $cat = $cats[0];
            $items[] = array(
                'label' => $cat->name,
                'url'   => get_category_link( $cat->term_id ),
            );
        }
    } elseif ( is_archive() ) {
        $items[] = array(
            'label' => get_the_archive_title(),
            'url'   => '',
        );
    } elseif ( is_search() ) {
        /* translators: %s: search query */
        $items[] = array(
            'label' => sprintf( __( 'खोज: %s', 'golden-rashifal' ), get_search_query() ),
            'url'   => '',
        );
    } elseif ( is_404() ) {
        $items[] = array(
            'label' => __( 'पेज नहीं मिला', 'golden-rashifal' ),
            'url'   => '',
        );
    }

    if ( is_singular() && ! is_front_page() ) {
        $items[] = array(
            'label' => get_the_title(),
            'url'   => '',
        );
    }

    if ( count( $items ) < 2 ) {
        return;
    }

    echo '<nav class="gr-breadcrumbs" aria-label="' . esc_attr__( 'पेज पथ', 'golden-rashifal' ) . '"><ol itemscope itemtype="https://schema.org/BreadcrumbList">';
    $position = 1;
    $last_index = count( $items ) - 1;
    foreach ( $items as $i => $item ) {
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        if ( $item['url'] && $i !== $last_index ) {
            echo '<a itemprop="item" href="' . esc_url( $item['url'] ) . '"><span itemprop="name">' . esc_html( $item['label'] ) . '</span></a>';
        } else {
            echo '<span itemprop="name">' . esc_html( $item['label'] ) . '</span>';
        }
        echo '<meta itemprop="position" content="' . (int) $position . '" />';
        echo '</li>';
        if ( $i !== $last_index ) {
            echo '<li class="gr-breadcrumbs__sep" aria-hidden="true">›</li>';
        }
        $position++;
    }
    echo '</ol></nav>';
}

/**
 * Pretty post views (uses meta saved by track_views).
 */
function golden_rashifal_post_views( $post_id = null ) {
    $post_id = $post_id ? $post_id : get_the_ID();
    $views   = (int) get_post_meta( $post_id, '_gr_views', true );
    if ( $views < 1 ) {
        return '';
    }
    if ( $views >= 1000 ) {
        $views = number_format_i18n( $views / 1000, 1 ) . 'K';
    } else {
        $views = number_format_i18n( $views );
    }
    /* translators: %s: formatted view count */
    return sprintf( __( '%s बार पढ़ा गया', 'golden-rashifal' ), $views );
}

/**
 * Format a Hindi date string for the topbar (e.g., "शनिवार, 23 मई 2026").
 */
function golden_rashifal_today_string() {
    $weekdays = array(
        'Sunday'    => 'रविवार',
        'Monday'    => 'सोमवार',
        'Tuesday'   => 'मंगलवार',
        'Wednesday' => 'बुधवार',
        'Thursday'  => 'गुरुवार',
        'Friday'    => 'शुक्रवार',
        'Saturday'  => 'शनिवार',
    );
    $months = array(
        'January'   => 'जनवरी',
        'February'  => 'फ़रवरी',
        'March'     => 'मार्च',
        'April'     => 'अप्रैल',
        'May'       => 'मई',
        'June'      => 'जून',
        'July'      => 'जुलाई',
        'August'    => 'अगस्त',
        'September' => 'सितंबर',
        'October'   => 'अक्टूबर',
        'November'  => 'नवंबर',
        'December'  => 'दिसंबर',
    );

    $weekday = $weekdays[ wp_date( 'l' ) ] ?? wp_date( 'l' );
    $month   = $months[ wp_date( 'F' ) ] ?? wp_date( 'F' );
    $day     = wp_date( 'j' );
    $year    = wp_date( 'Y' );

    return sprintf( '%s, %s %s %s', $weekday, $day, $month, $year );
}

/**
 * Output the post thumbnail with sensible alt fallback and lazy loading.
 */
function golden_rashifal_thumbnail( $size = 'gr-card', $args = array() ) {
    if ( ! has_post_thumbnail() ) {
        return;
    }
    $defaults = array(
        'loading' => 'lazy',
        'decoding'=> 'async',
        'class'   => 'gr-thumb__img',
        'alt'     => the_title_attribute( array( 'echo' => false ) ),
    );
    the_post_thumbnail( $size, wp_parse_args( $args, $defaults ) );
}

/**
 * List of 12 zodiac signs with Hindi name, English name, slug and date range.
 *
 * Date ranges follow the widely used Western tropical zodiac so they line up
 * with most online tools readers already use; the Hindi name is what readers
 * actually search for in our market.
 */
function golden_rashifal_zodiac_signs() {
    return array(
        array( 'slug' => 'mesh',     'hi' => 'मेष',    'en' => 'Aries',       'range' => '21 मार्च – 19 अप्रैल',   'icon' => 'aries' ),
        array( 'slug' => 'vrishabh', 'hi' => 'वृषभ',  'en' => 'Taurus',      'range' => '20 अप्रैल – 20 मई',     'icon' => 'taurus' ),
        array( 'slug' => 'mithun',   'hi' => 'मिथुन',  'en' => 'Gemini',      'range' => '21 मई – 20 जून',        'icon' => 'gemini' ),
        array( 'slug' => 'kark',     'hi' => 'कर्क',   'en' => 'Cancer',      'range' => '21 जून – 22 जुलाई',     'icon' => 'cancer' ),
        array( 'slug' => 'singh',    'hi' => 'सिंह',   'en' => 'Leo',         'range' => '23 जुलाई – 22 अगस्त',    'icon' => 'leo' ),
        array( 'slug' => 'kanya',    'hi' => 'कन्या',  'en' => 'Virgo',       'range' => '23 अगस्त – 22 सितंबर',   'icon' => 'virgo' ),
        array( 'slug' => 'tula',     'hi' => 'तुला',   'en' => 'Libra',       'range' => '23 सितंबर – 22 अक्टूबर', 'icon' => 'libra' ),
        array( 'slug' => 'vrischik', 'hi' => 'वृश्चिक','en' => 'Scorpio',     'range' => '23 अक्टूबर – 21 नवंबर',  'icon' => 'scorpio' ),
        array( 'slug' => 'dhanu',    'hi' => 'धनु',    'en' => 'Sagittarius', 'range' => '22 नवंबर – 21 दिसंबर',   'icon' => 'sagittarius' ),
        array( 'slug' => 'makar',    'hi' => 'मकर',    'en' => 'Capricorn',   'range' => '22 दिसंबर – 19 जनवरी',   'icon' => 'capricorn' ),
        array( 'slug' => 'kumbh',    'hi' => 'कुंभ',   'en' => 'Aquarius',    'range' => '20 जनवरी – 18 फ़रवरी',   'icon' => 'aquarius' ),
        array( 'slug' => 'meen',     'hi' => 'मीन',    'en' => 'Pisces',      'range' => '19 फ़रवरी – 20 मार्च',   'icon' => 'pisces' ),
    );
}

/**
 * Inline SVG icon for a given zodiac sign.
 *
 * Keeping icons inline avoids an extra HTTP request and lets CSS colour them.
 */
function golden_rashifal_zodiac_icon( $slug ) {
    $paths = array(
        'aries'       => 'M12 4c-3 4-3 6-3 8a3 3 0 1 0 6 0c0-2 0-4-3-8z',
        'taurus'      => 'M5 6a4 4 0 0 1 7 3 4 4 0 0 1 7-3M9 14a3 3 0 1 1 6 0 3 3 0 1 1-6 0z',
        'gemini'      => 'M7 5h10M7 19h10M9 5v14M15 5v14',
        'cancer'      => 'M5 9c0-2 2-3 4-3s3 1 3 3-1 3-3 3-4-1-4-3zm14 6c0 2-2 3-4 3s-3-1-3-3 1-3 3-3 4 1 4 3z',
        'leo'         => 'M9 14a3 3 0 1 1 6 0c0 3-3 5-5 5s-3-2-1-4M12 3v8',
        'virgo'       => 'M5 7v10M9 7v10c0 1 1 2 2 2M13 7v10c0 1 1 2 2 2 2 0 4-2 4-5',
        'libra'       => 'M4 18h16M6 14a6 6 0 1 1 12 0',
        'scorpio'     => 'M5 7v10M9 7v10M13 7v10c0 1 1 2 2 2 2 0 4-2 4-5l-2 2',
        'sagittarius' => 'M5 19L19 5M13 5h6v6M9 9l4 4',
        'capricorn'   => 'M5 7v10M9 7v6c2 0 3-1 3-3s-1-3-3-3M12 13c2 0 4 2 4 4a3 3 0 1 1-6 0',
        'aquarius'    => 'M4 9l3 3 3-3 3 3 3-3 3 3M4 15l3 3 3-3 3 3 3-3 3 3',
        'pisces'      => 'M6 5c2 4 2 10 0 14M18 5c-2 4-2 10 0 14M5 12h14',
    );
    $path = isset( $paths[ $slug ] ) ? $paths[ $slug ] : $paths['aries'];
    return '<svg class="gr-zodiac-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="' . esc_attr( $path ) . '" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>';
}


/**
 * Zodiac wheel SVG for the hero section.
 * Inline so it loads with zero extra requests and CSS can colour it.
 */
function golden_rashifal_zodiac_wheel_svg() {
    $signs = golden_rashifal_zodiac_signs();
    $svg   = '<svg class="gr-wheel" viewBox="0 0 360 360" role="img" aria-label="' . esc_attr__( 'राशि चक्र', 'golden-rashifal' ) . '">';

    // Defs.
    $svg .= '<defs>';
    $svg .= '<linearGradient id="gr-wg" x1="0%" y1="0%" x2="100%" y2="100%">';
    $svg .= '<stop offset="0%" stop-color="#d4af37"/><stop offset="100%" stop-color="#a68b1b"/>';
    $svg .= '</linearGradient>';
    $svg .= '</defs>';

    // Circles.
    $svg .= '<circle cx="180" cy="180" r="168" fill="none" stroke="url(#gr-wg)" stroke-width="1.5" opacity="0.4"/>';
    $svg .= '<circle cx="180" cy="180" r="140" fill="none" stroke="#d4af37" stroke-width="0.8" opacity="0.3"/>';
    $svg .= '<circle cx="180" cy="180" r="60" fill="rgba(212,175,55,0.06)" stroke="#d4af37" stroke-width="1"/>';

    // Signs around the wheel.
    $cx = 180; $cy = 180; $r = 130;
    foreach ( $signs as $i => $sign ) {
        $angle = deg2rad( -90 + $i * 30 );
        $x = $cx + cos( $angle ) * $r;
        $y = $cy + sin( $angle ) * $r;

        // Small circle for each sign.
        $svg .= '<circle cx="' . round( $x, 1 ) . '" cy="' . round( $y, 1 ) . '" r="16" fill="rgba(20,18,16,0.6)" stroke="#d4af37" stroke-width="1"/>';

        // Spoke line.
        $sx = $cx + cos( $angle ) * 60;
        $sy = $cy + sin( $angle ) * 60;
        $ex = $cx + cos( $angle ) * 114;
        $ey = $cy + sin( $angle ) * 114;
        $svg .= '<line x1="' . round( $sx, 1 ) . '" y1="' . round( $sy, 1 ) . '" x2="' . round( $ex, 1 ) . '" y2="' . round( $ey, 1 ) . '" stroke="#d4af37" stroke-width="0.5" opacity="0.3"/>';
    }

    // Centre OM.
    $svg .= '<text x="180" y="190" text-anchor="middle" font-family="Noto Sans Devanagari, serif" font-size="30" font-weight="700" fill="#d4af37">ॐ</text>';
    $svg .= '</svg>';
    return $svg;
}
