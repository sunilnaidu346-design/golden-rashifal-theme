<?php
/**
 * Virtual Pages — registers theme-defined pages that serve content
 * without requiring manual page creation in WordPress admin.
 *
 * This solves the 404 problem: when a user visits /choghadiya/ or /about/,
 * the theme intercepts the request and renders the appropriate template
 * with built-in content.
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * List of virtual pages the theme provides.
 * Key = slug, Value = array with title and template file.
 */
function golden_rashifal_virtual_pages() {
    return array(
        'choghadiya'       => array( 'title' => 'आज का चौघड़िया — शुभ और अशुभ समय की जानकारी', 'template' => 'page-templates/choghadiya.php' ),
        'panchang'         => array( 'title' => 'आज का पंचांग — तिथि, नक्षत्र, योग, करण', 'template' => 'page-templates/panchang.php' ),
        'rahukaal'         => array( 'title' => 'आज का राहुकाल — समय और बचाव के उपाय', 'template' => 'page-templates/rahukaal.php' ),
        'muhurat'          => array( 'title' => 'शुभ मुहूर्त — विवाह, गृह प्रवेश, नामकरण', 'template' => 'page-templates/muhurat.php' ),
        'rashifal'         => array( 'title' => 'आज का राशिफल — 12 राशियों का दैनिक भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'vastu'            => array( 'title' => 'वास्तु टिप्स — घर और ऑफिस के लिए सुझाव', 'template' => 'page-templates/vastu.php' ),
        'festival'         => array( 'title' => 'हिंदू त्योहार कैलेंडर 2025 — तिथि और जानकारी', 'template' => 'page-templates/festival.php' ),
        'about'            => array( 'title' => 'हमारे बारे में — Golden Rashifal', 'template' => 'page-templates/about.php' ),
        'contact'          => array( 'title' => 'संपर्क करें — Golden Rashifal', 'template' => 'page-templates/contact.php' ),
        'privacy-policy'   => array( 'title' => 'गोपनीयता नीति — Privacy Policy', 'template' => 'page-templates/privacy-policy.php' ),
        'disclaimer'       => array( 'title' => 'अस्वीकरण — Disclaimer', 'template' => 'page-templates/disclaimer.php' ),
        'terms'            => array( 'title' => 'नियम और शर्तें — Terms & Conditions', 'template' => 'page-templates/terms.php' ),
        'editorial-policy' => array( 'title' => 'संपादकीय नीति — Editorial Policy', 'template' => 'page-templates/editorial-policy.php' ),
        'dmca'             => array( 'title' => 'DMCA नीति — DMCA Policy', 'template' => 'page-templates/dmca.php' ),
        'sitemap'          => array( 'title' => 'साइटमैप — Sitemap', 'template' => 'page-templates/sitemap.php' ),
        'ekadashi'         => array( 'title' => 'एकादशी व्रत — तिथि, महत्व और नियम', 'template' => 'page-templates/ekadashi.php' ),
        'purnima'          => array( 'title' => 'पूर्णिमा — तिथि, व्रत विधि और महत्व', 'template' => 'page-templates/purnima.php' ),
        'hindu-calendar'   => array( 'title' => 'हिंदू कैलेंडर 2025 — पंचांग तिथियाँ', 'template' => 'page-templates/hindu-calendar.php' ),
        'numerology'       => array( 'title' => 'अंकज्योतिष — मूलांक और भाग्यांक', 'template' => 'page-templates/numerology.php' ),
        'kundli'           => array( 'title' => 'कुंडली — जन्म कुंडली और ग्रह स्थिति', 'template' => 'page-templates/kundli.php' ),
        'navgraha'         => array( 'title' => 'नवग्रह — ग्रहों का प्रभाव और उपाय', 'template' => 'page-templates/navgraha.php' ),
        'weekly-rashifal'  => array( 'title' => 'साप्ताहिक राशिफल — इस सप्ताह का भविष्यफल', 'template' => 'page-templates/weekly-rashifal.php' ),
        'monthly-rashifal' => array( 'title' => 'मासिक राशिफल — इस महीने का भविष्यफल', 'template' => 'page-templates/monthly-rashifal.php' ),
    );
}

/**
 * Intercept requests for virtual page slugs.
 * If a WordPress page with that slug already exists, WordPress handles it normally.
 * If not, we serve our theme template instead of a 404.
 */
function golden_rashifal_handle_virtual_pages() {

    // Only run on 404s (i.e., when WP couldn't find a matching page/post).
    if ( ! is_404() ) {
        return;
    }

    // Get the requested path.
    $request_path = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );

    // Remove any subdirectory prefix if WP is in a subfolder.
    $home_path = trim( parse_url( home_url(), PHP_URL_PATH ), '/' );
    if ( $home_path && 0 === strpos( $request_path, $home_path ) ) {
        $request_path = trim( substr( $request_path, strlen( $home_path ) ), '/' );
    }

    $pages = golden_rashifal_virtual_pages();

    if ( ! isset( $pages[ $request_path ] ) ) {
        return;
    }

    $page = $pages[ $request_path ];
    $template_path = GOLDEN_RASHIFAL_DIR . $page['template'];

    if ( ! file_exists( $template_path ) ) {
        return;
    }

    // Reset 404 status.
    global $wp_query;
    status_header( 200 );
    $wp_query->is_404 = false;
    $wp_query->is_page = true;
    $wp_query->is_singular = true;

    // Set the page title for wp_title() and document_title.
    add_filter( 'pre_get_document_title', function() use ( $page ) {
        return $page['title'] . ' — ' . get_bloginfo( 'name' );
    });

    // Load the template.
    include $template_path;
    exit;
}
add_action( 'template_redirect', 'golden_rashifal_handle_virtual_pages' );

/**
 * Add virtual pages to the XML sitemap (for Yoast/RankMath/default WP sitemap).
 */
function golden_rashifal_add_virtual_to_sitemap( $url_list ) {
    $pages = golden_rashifal_virtual_pages();
    foreach ( $pages as $slug => $data ) {
        $url_list[] = array(
            'loc' => home_url( '/' . $slug . '/' ),
        );
    }
    return $url_list;
}
// Hook for WP core sitemaps (WP 5.5+).
add_filter( 'wp_sitemaps_posts_pre_url_list', 'golden_rashifal_add_virtual_to_sitemap' );
