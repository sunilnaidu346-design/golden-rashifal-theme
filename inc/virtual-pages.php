<?php
/**
 * Virtual Pages — registers theme-defined pages that serve content
 * without requiring manual page creation in WordPress admin.
 *
 * IMPORTANT: This system is a FALLBACK. If a real WordPress page exists
 * with the same slug, WordPress handles it normally — with full admin bar,
 * Edit button, Gutenberg/Classic editor, SEO fields, etc.
 *
 * To make all pages editable from WP admin, go to:
 * Appearance → पृष्ठ बनाएँ → Click "सभी बाकी पृष्ठ बनाएँ"
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
        'festival'         => array( 'title' => 'हिंदू त्योहार कैलेंडर 2026 — तिथि और जानकारी', 'template' => 'page-templates/festival.php' ),
        'about'            => array( 'title' => 'हमारे बारे में — Golden Rashifal', 'template' => 'page-templates/about.php' ),
        'contact'          => array( 'title' => 'संपर्क करें — Golden Rashifal', 'template' => 'page-templates/contact.php' ),
        'privacy-policy'   => array( 'title' => 'गोपनीयता नीति — Privacy Policy', 'template' => 'page-templates/privacy-policy.php' ),
        'disclaimer'       => array( 'title' => 'अस्वीकरण — Disclaimer', 'template' => 'page-templates/disclaimer.php' ),
        'terms'            => array( 'title' => 'नियम और शर्तें — Terms & Conditions', 'template' => 'page-templates/terms.php' ),
        'editorial-policy' => array( 'title' => 'संपादकीय नीति — Editorial Policy', 'template' => 'page-templates/editorial-policy.php' ),
        'fact-check-policy' => array( 'title' => 'Fact-Check Policy — तथ्य-जाँच नीति', 'template' => 'page-templates/fact-check-policy.php' ),
        'cookie-policy'    => array( 'title' => 'Cookie Policy — कुकी नीति', 'template' => 'page-templates/cookie-policy.php' ),
        'horoscope'        => array( 'title' => 'राशिफल — Horoscope Hub', 'template' => 'page-templates/horoscope.php' ),
        'authors'          => array( 'title' => 'हमारी संपादकीय टीम — Authors', 'template' => 'page-templates/authors.php' ),
        'dmca'             => array( 'title' => 'DMCA नीति — DMCA Policy', 'template' => 'page-templates/dmca.php' ),
        'sitemap'          => array( 'title' => 'साइटमैप — Sitemap', 'template' => 'page-templates/sitemap.php' ),
        'ekadashi'         => array( 'title' => 'एकादशी व्रत — तिथि, महत्व और नियम', 'template' => 'page-templates/ekadashi.php' ),
        'purnima'          => array( 'title' => 'पूर्णिमा — तिथि, व्रत विधि और महत्व', 'template' => 'page-templates/purnima.php' ),
        'hindu-calendar'   => array( 'title' => 'हिंदू कैलेंडर 2026 — पंचांग तिथियाँ', 'template' => 'page-templates/hindu-calendar.php' ),
        'numerology'       => array( 'title' => 'अंकज्योतिष — मूलांक और भाग्यांक', 'template' => 'page-templates/numerology.php' ),
        'kundli'           => array( 'title' => 'कुंडली — जन्म कुंडली और ग्रह स्थिति', 'template' => 'page-templates/kundli.php' ),
        'navgraha'         => array( 'title' => 'नवग्रह — ग्रहों का प्रभाव और उपाय', 'template' => 'page-templates/navgraha.php' ),
        'weekly-rashifal'  => array( 'title' => 'साप्ताहिक राशिफल — इस सप्ताह का भविष्यफल', 'template' => 'page-templates/weekly-rashifal.php' ),
        'monthly-rashifal' => array( 'title' => 'मासिक राशिफल — इस महीने का भविष्यफल', 'template' => 'page-templates/monthly-rashifal.php' ),
        'rashifal/mesh'      => array( 'title' => 'मेष राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/vrishabh'  => array( 'title' => 'वृषभ राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/mithun'    => array( 'title' => 'मिथुन राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/kark'      => array( 'title' => 'कर्क राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/singh'     => array( 'title' => 'सिंह राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/kanya'     => array( 'title' => 'कन्या राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/tula'      => array( 'title' => 'तुला राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/vrischik'  => array( 'title' => 'वृश्चिक राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/dhanu'     => array( 'title' => 'धनु राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/makar'     => array( 'title' => 'मकर राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/kumbh'     => array( 'title' => 'कुंभ राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'rashifal/meen'      => array( 'title' => 'मीन राशिफल — आज का भविष्यफल', 'template' => 'page-templates/rashifal.php' ),
        'mantra/mahamrityunjay' => array( 'title' => 'महामृत्युंजय मंत्र — अर्थ और विधि', 'template' => 'page-templates/rashifal.php' ),
        'mantra/gayatri'        => array( 'title' => 'गायत्री मंत्र — अर्थ और महत्व', 'template' => 'page-templates/rashifal.php' ),
        'mantra/hanuman-chalisa' => array( 'title' => 'हनुमान चालीसा — पाठ और लाभ', 'template' => 'page-templates/rashifal.php' ),
        'mantra/shri-sukta'     => array( 'title' => 'श्री सूक्त — अर्थ और विधि', 'template' => 'page-templates/rashifal.php' ),
        'ratna/manikya'    => array( 'title' => 'माणिक्य रत्न — सूर्य का रत्न, लाभ और धारण विधि', 'template' => 'page-templates/ratna.php' ),
        'ratna/moti'       => array( 'title' => 'मोती रत्न — चंद्रमा का रत्न, लाभ और धारण विधि', 'template' => 'page-templates/ratna.php' ),
        'ratna/munga'      => array( 'title' => 'मूंगा रत्न — मंगल का रत्न, लाभ और धारण विधि', 'template' => 'page-templates/ratna.php' ),
        'ratna/panna'      => array( 'title' => 'पन्ना रत्न — बुध का रत्न, लाभ और धारण विधि', 'template' => 'page-templates/ratna.php' ),
        'ratna/pukhraj'    => array( 'title' => 'पुखराज रत्न — बृहस्पति का रत्न, लाभ और धारण विधि', 'template' => 'page-templates/ratna.php' ),
        'ratna/heera'      => array( 'title' => 'हीरा रत्न — शुक्र का रत्न, लाभ और धारण विधि', 'template' => 'page-templates/ratna.php' ),
        'ratna/neelam'     => array( 'title' => 'नीलम रत्न — शनि का रत्न, लाभ और धारण विधि', 'template' => 'page-templates/ratna.php' ),
        'ratna/gomed'      => array( 'title' => 'गोमेद रत्न — राहु का रत्न, लाभ और धारण विधि', 'template' => 'page-templates/ratna.php' ),
        'ratna/lahsuniya'  => array( 'title' => 'लहसुनिया रत्न — केतु का रत्न, लाभ और धारण विधि', 'template' => 'page-templates/ratna.php' ),
    );
}

/**
 * Intercept requests for virtual page slugs.
 * ONLY triggers on 404 — if a real WordPress page exists, WP handles it
 * normally with full edit support, admin bar, Gutenberg, etc.
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

    // Add page-specific body class for category styling.
    add_filter( 'body_class', function( $classes ) use ( $request_path ) {
        $slug_class = str_replace( '/', '-', $request_path );
        $classes[] = 'gr-page-' . sanitize_html_class( $slug_class );
        return $classes;
    });

    // Load the template.
    include $template_path;
    exit;
}
add_action( 'template_redirect', 'golden_rashifal_handle_virtual_pages' );

/**
 * Add "Edit Page" or "Manage Pages" link to admin bar for virtual pages.
 * This ensures logged-in admins always see an editing action.
 */
function golden_rashifal_admin_bar_virtual_edit( $wp_admin_bar ) {
    if ( ! is_admin() && ! is_404() && is_user_logged_in() && current_user_can( 'manage_options' ) ) {
        // Check if this is a virtual page (no queried object = virtual).
        $queried = get_queried_object();
        if ( ! $queried ) {
            $wp_admin_bar->add_node( array(
                'id'    => 'gr-manage-pages',
                'title' => 'पृष्ठ प्रबंधन',
                'href'  => admin_url( 'themes.php?page=gr-create-pages' ),
                'meta'  => array( 'class' => 'gr-admin-bar-manage' ),
            ) );
        }
    }
}
add_action( 'admin_bar_menu', 'golden_rashifal_admin_bar_virtual_edit', 80 );

/**
 * Auto-create pages on theme activation.
 * This ensures all pages are immediately editable from WP admin.
 */
function golden_rashifal_auto_create_pages_on_activation() {
    $pages = golden_rashifal_virtual_pages();

    foreach ( $pages as $slug => $data ) {
        $existing = get_page_by_path( $slug );
        if ( $existing ) {
            continue;
        }

        $page_data = array(
            'post_title'   => $data['title'],
            'post_name'    => sanitize_title( basename( $slug ) ),
            'post_content' => '',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_author'  => 1,
        );

        // Handle nested slugs (rashifal/mesh, ratna/manikya, etc.)
        if ( strpos( $slug, '/' ) !== false ) {
            $parts = explode( '/', $slug );
            $page_data['post_name'] = end( $parts );

            $parent_slug = $parts[0];
            $parent = get_page_by_path( $parent_slug );
            if ( $parent ) {
                $page_data['post_parent'] = $parent->ID;
            }
        }

        wp_insert_post( $page_data );
    }
}
add_action( 'after_switch_theme', 'golden_rashifal_auto_create_pages_on_activation' );

/**
 * Assign theme template to pages that match virtual page slugs.
 * This tells WordPress to use our custom template when rendering real pages.
 */
function golden_rashifal_assign_page_templates( $template ) {
    if ( ! is_page() ) {
        return $template;
    }

    $page_obj = get_queried_object();
    if ( ! $page_obj ) {
        return $template;
    }

    // Build the full slug path (handles child pages).
    $slug = $page_obj->post_name;
    if ( $page_obj->post_parent ) {
        $parent = get_post( $page_obj->post_parent );
        if ( $parent ) {
            $slug = $parent->post_name . '/' . $slug;
        }
    }

    $pages = golden_rashifal_virtual_pages();

    if ( isset( $pages[ $slug ] ) ) {
        $theme_template = GOLDEN_RASHIFAL_DIR . $pages[ $slug ]['template'];
        if ( file_exists( $theme_template ) ) {
            return $theme_template;
        }
    }

    return $template;
}
add_filter( 'template_include', 'golden_rashifal_assign_page_templates', 99 );

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
add_filter( 'wp_sitemaps_posts_pre_url_list', 'golden_rashifal_add_virtual_to_sitemap' );
