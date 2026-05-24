<?php
/**
 * Premium Features — Reading time, OG images, structured data, auto-linking.
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Google Discover optimized featured image sizing.
 * Register a large image size for Discover/OG cards (1200x628).
 */
function golden_rashifal_premium_image_sizes() {
    add_image_size( 'gr-discover', 1200, 628, true );
    add_image_size( 'gr-og', 1200, 630, true );
    add_image_size( 'gr-thumb', 300, 200, true );
}
add_action( 'after_setup_theme', 'golden_rashifal_premium_image_sizes' );

/**
 * Open Graph image optimization.
 * Outputs OG meta tags in head for better social sharing.
 */
function golden_rashifal_og_meta() {
    if ( ! is_singular() ) {
        return;
    }

    $title = get_the_title();
    $desc  = has_excerpt() ? wp_strip_all_tags( get_the_excerpt() ) : wp_trim_words( wp_strip_all_tags( get_the_content() ), 30 );
    $url   = get_permalink();
    $image = '';

    if ( has_post_thumbnail() ) {
        $img_data = wp_get_attachment_image_src( get_post_thumbnail_id(), 'gr-og' );
        if ( $img_data ) {
            $image = $img_data[0];
        }
    }

    echo '<meta property="og:type" content="article" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr( $title ) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $desc ) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $url ) . '" />' . "\n";
    if ( $image ) {
        echo '<meta property="og:image" content="' . esc_url( $image ) . '" />' . "\n";
        echo '<meta property="og:image:width" content="1200" />' . "\n";
        echo '<meta property="og:image:height" content="630" />' . "\n";
    }
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
}
add_action( 'wp_head', 'golden_rashifal_og_meta', 5 );

/**
 * Auto FAQ Schema verification — outputs JSON-LD for FAQ sections.
 */
function golden_rashifal_faq_schema() {
    if ( ! is_singular() ) {
        return;
    }

    $content = get_post_field( 'post_content', get_the_ID() );
    if ( ! $content ) {
        return;
    }

    // Look for FAQ pattern in content (details/summary or h3+p pairs).
    if ( ! preg_match_all( '/<summary[^>]*>(.*?)<\/summary>\s*<div[^>]*>(.*?)<\/div>/is', $content, $matches, PREG_SET_ORDER ) ) {
        return;
    }

    if ( count( $matches ) < 2 ) {
        return;
    }

    $faqs = array();
    foreach ( $matches as $m ) {
        $q = wp_strip_all_tags( $m[1] );
        $a = wp_strip_all_tags( $m[2] );
        if ( $q && $a ) {
            $faqs[] = array(
                '@type'          => 'Question',
                'name'           => $q,
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => $a,
                ),
            );
        }
    }

    if ( empty( $faqs ) ) {
        return;
    }

    $schema = array(
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $faqs,
    );

    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}
add_action( 'wp_head', 'golden_rashifal_faq_schema', 20 );

/**
 * Auto internal linking system.
 * Automatically links key terms in post content to relevant pages.
 */
function golden_rashifal_auto_internal_links( $content ) {
    if ( ! is_singular( 'post' ) || is_admin() ) {
        return $content;
    }

    $links = array(
        'चौघड़िया'   => '/choghadiya/',
        'पंचांग'     => '/panchang/',
        'राहुकाल'    => '/rahukaal/',
        'मुहूर्त'    => '/muhurat/',
        'राशिफल'     => '/rashifal/',
        'वास्तु'     => '/vastu/',
        'एकादशी'     => '/ekadashi/',
        'पूर्णिमा'   => '/purnima/',
        'कुंडली'     => '/kundli/',
        'नवग्रह'     => '/navgraha/',
        'अंक ज्योतिष' => '/numerology/',
    );

    $current_path = wp_parse_url( get_permalink(), PHP_URL_PATH );
    $count = 0;
    $max_links = 3;

    foreach ( $links as $term => $path ) {
        if ( $count >= $max_links ) {
            break;
        }
        if ( $path === $current_path ) {
            continue;
        }
        $url = home_url( $path );
        // Only replace first occurrence, skip if already in a link.
        $pattern = '/(?<!["\/>])(' . preg_quote( $term, '/' ) . ')(?![^<]*<\/a>)/u';
        $replacement = '<a href="' . esc_url( $url ) . '">' . $term . '</a>';
        $new_content = preg_replace( $pattern, $replacement, $content, 1, $replaced );
        if ( $replaced ) {
            $content = $new_content;
            $count++;
        }
    }

    return $content;
}
add_filter( 'the_content', 'golden_rashifal_auto_internal_links', 20 );

/**
 * Article lastmod structured data for Google.
 */
function golden_rashifal_article_schema() {
    if ( ! is_singular( 'post' ) ) {
        return;
    }

    $schema = array(
        '@context'      => 'https://schema.org',
        '@type'         => 'Article',
        'headline'      => get_the_title(),
        'datePublished' => get_the_date( 'c' ),
        'dateModified'  => get_the_modified_date( 'c' ),
        'author'        => array(
            '@type' => 'Person',
            'name'  => get_the_author(),
        ),
        'publisher'     => array(
            '@type' => 'Organization',
            'name'  => 'Golden Rashifal',
        ),
    );

    if ( has_post_thumbnail() ) {
        $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'gr-discover' );
        if ( $img ) {
            $schema['image'] = $img[0];
        }
    }

    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}
add_action( 'wp_head', 'golden_rashifal_article_schema', 21 );

/**
 * Premium ad placement spacing — adds proper spacing around ads.
 */
function golden_rashifal_ad_spacing( $content ) {
    if ( ! is_singular() ) {
        return $content;
    }
    // Wrap any ad divs with proper spacing class.
    $content = str_replace( 'class="gr-ad"', 'class="gr-ad" style="margin:var(--sp-6) 0;text-align:center"', $content );
    return $content;
}
add_filter( 'the_content', 'golden_rashifal_ad_spacing', 99 );
