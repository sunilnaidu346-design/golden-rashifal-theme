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

/*
 * OG meta tags are handled exclusively by seo.php (golden_rashifal_meta_tags).
 * That function already outputs og:type, og:title, og:description, og:url,
 * og:image, twitter:card, and twitter:image — and correctly guards against
 * duplicate output when Yoast / Rank Math / AIOSEO is active.
 *
 * The duplicate golden_rashifal_og_meta() function has been removed to prevent
 * double OG tags appearing in page source on all singular pages.
 */

/*
 * FAQ schema is handled exclusively by the [gr_faq] shortcode in seo.php
 * (golden_rashifal_faq_shortcode). That function outputs FAQPage JSON-LD
 * inline at the point of the shortcode, which is the correct W3C approach.
 *
 * The duplicate golden_rashifal_faq_schema() wp_head hook has been removed.
 * It was scanning post_content for <summary>/<div> patterns and emitting a
 * second FAQPage block on every page that contained a <details> element —
 * causing duplicate structured data errors in Google Search Console.
 */

/**
 * Auto internal linking system.
 * Automatically links key terms in post content to relevant pages.
 */
function golden_rashifal_auto_internal_links( $content ) {
    // Never run on admin, REST API requests, or anything other than singular post front-end.
    if ( is_admin() ) {
        return $content;
    }
    if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
        return $content;
    }
    if ( ! is_singular( 'post' ) ) {
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

/*
 * Article schema is handled exclusively by seo.php (golden_rashifal_schema_jsonld
 * at wp_head priority 6). That function outputs a complete @graph block
 * containing @type:WebSite and @type:Article with headline, datePublished,
 * dateModified, author, publisher, image, and description — and correctly
 * guards against duplicate output when an SEO plugin is active.
 *
 * The duplicate golden_rashifal_article_schema() function has been removed
 * to prevent two @type:Article JSON-LD blocks appearing on every single post,
 * which caused structured data errors in Google Search Console.
 */

/**
 * Premium ad placement spacing — adds proper spacing around ads.
 */
function golden_rashifal_ad_spacing( $content ) {
    if ( is_admin() ) {
        return $content;
    }
    if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
        return $content;
    }
    if ( ! is_singular() ) {
        return $content;
    }
    // Wrap any ad divs with proper spacing class.
    $content = str_replace( 'class="gr-ad"', 'class="gr-ad" style="margin:var(--sp-6) 0;text-align:center"', $content );
    return $content;
}
add_filter( 'the_content', 'golden_rashifal_ad_spacing', 99 );
