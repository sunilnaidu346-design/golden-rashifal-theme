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
        'dmca'             => array( 'title' => 'DMCA नीति — DMCA Policy', 'template' => 'page-templates/dmca.php' ),
        /* 'sitemap' removed — /sitemap/ page deregistered. The HTML sitemap
         * page is no longer needed. XML sitemaps are handled exclusively by
         * Rank Math: /sitemap_index.xml, /post-sitemap.xml, /page-sitemap.xml. */
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
 *
 * SITEMAP PROTECTION: Rank Math, Yoast, and WP Core sitemaps all hook into
 * template_redirect to serve XML. We must never intercept sitemap requests.
 * Check for sitemap query vars and URL patterns BEFORE doing anything else.
 */
function golden_rashifal_handle_virtual_pages() {

    // ── SITEMAP & FEED EXCLUSIONS ───────────────────────────────────
    // Never intercept any sitemap request — let Rank Math / Yoast / WP core
    // handle their own routing entirely uninterrupted.
    $request_uri = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '';

    // Rank Math, Yoast, WP core sitemap URL patterns.
    $sitemap_patterns = array(
        'sitemap_index.xml',
        'sitemap.xml',
        '-sitemap.xml',
        'sitemap-',
        'news-sitemap.xml',
        'video-sitemap.xml',
        'image-sitemap.xml',
        'author-sitemap.xml',
        'robots.txt',
    );
    foreach ( $sitemap_patterns as $pattern ) {
        if ( false !== strpos( $request_uri, $pattern ) ) {
            return; // Let the SEO plugin handle this completely.
        }
    }

    // WordPress core sitemap query vars (?sitemap=, ?sitemap-subtype=).
    if ( get_query_var( 'sitemap' ) || get_query_var( 'sitemap-subtype' ) ) {
        return;
    }

    // Rank Math specific query vars.
    if ( get_query_var( 'rm_sitemap' ) || get_query_var( 'rankmath_sitemap' ) ) {
        return;
    }

    // Feed requests — never intercept.
    if ( is_feed() ) {
        return;
    }
    // ── END EXCLUSIONS ──────────────────────────────────────────────

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
 *
 * Each page is created with a meaningful post_content so the WordPress
 * editor is never empty. This ensures:
 *   1. The block editor shows content immediately on first open.
 *   2. Admins can edit all page content from WP Admin without touching theme files.
 *   3. The template_include filter routes through page.php → the_content()
 *      for all pages that have content — never silently ignoring admin edits.
 */
function golden_rashifal_auto_create_pages_on_activation() {
    $pages = golden_rashifal_virtual_pages();

    $placeholder = '<!-- wp:paragraph --><p>यह पृष्ठ थीम द्वारा स्वचालित रूप से प्रदर्शित किया जाता है। इस सामग्री को यहाँ संपादित करें — यह पृष्ठ के शीर्ष पर दिखेगी।</p><!-- /wp:paragraph -->';

    foreach ( $pages as $slug => $data ) {
        $existing = get_page_by_path( $slug );

        if ( $existing ) {
            // Page exists but editor may be empty — fix it.
            if ( empty( trim( $existing->post_content ) ) ) {
                wp_update_post( array(
                    'ID'           => $existing->ID,
                    'post_content' => $placeholder,
                ) );
            }
            continue;
        }

        $page_data = array(
            'post_title'   => $data['title'],
            'post_name'    => sanitize_title( basename( $slug ) ),
            'post_content' => $placeholder,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_author'  => 1,
        );

        // Handle nested slugs (rashifal/mesh, ratna/manikya, etc.)
        if ( strpos( $slug, '/' ) !== false ) {
            $parts       = explode( '/', $slug );
            $child_slug  = end( $parts );
            $parent_slug = $parts[0];

            $page_data['post_name'] = $child_slug;

            // ── DUPLICATE CHECK — prevents /munga-2/ style duplicates ──────
            // If a page with this child slug already exists (any parent),
            // do not insert a new one. Update parent if needed instead.
            $existing_by_slug = get_page_by_path( $child_slug );
            if ( $existing_by_slug ) {
                $parent      = get_page_by_path( $parent_slug );
                $correct_pid = $parent ? $parent->ID : 0;
                if ( (int) $existing_by_slug->post_parent !== $correct_pid ) {
                    wp_update_post( array(
                        'ID'          => $existing_by_slug->ID,
                        'post_parent' => $correct_pid,
                    ) );
                }
                continue; // Never create a duplicate.
            }
            // ── END DUPLICATE CHECK ─────────────────────────────────────────

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
 * Populate rich Hindi content for the 6 key trust pages.
 * Runs once via transient 'gr_content_v3'.
 * Delete transient to re-run.
 */
function golden_rashifal_fix_empty_page_content() {
    if ( get_transient( 'gr_content_v3' ) ) {
        return;
    }
    if ( defined( 'WP_CLI' ) && WP_CLI ) {
        return;
    }
    set_transient( 'gr_content_v3', 1, YEAR_IN_SECONDS );

    $placeholder = '<!-- wp:paragraph --><p>यह पृष्ठ थीम द्वारा स्वचालित रूप से प्रदर्शित किया जाता है।</p><!-- /wp:paragraph -->';

    // Rich content for the 6 key pages.
    $page_contents = array(

        'about' => '<!-- wp:heading --><h2>Golden Rashifal क्यों बना?</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>सुबह उठकर सूर्योदय का समय देखना हो, आज का राहुकाल जानना हो, या किसी नए काम के लिए शुभ मुहूर्त ढूंढना हो — ये ज़रूरतें करोड़ों भारतीय परिवारों की रोज़मर्रा की दिनचर्या में शामिल हैं। Golden Rashifal इन्हीं ज़रूरतों को ध्यान में रखकर बनाया गया।</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>यहाँ पंचांग, चौघड़िया, राशिफल और मुहूर्त की जानकारी उस भाषा में मिलती है जो हर उम्र के पाठक को सीधे समझ में आए — बिना किसी जटिलता या डर के।</p><!-- /wp:paragraph -->
<!-- wp:heading --><h2>हमारी सोच</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>ज्योतिष और पंचांग भारत की समृद्ध परंपरा का हिस्सा हैं। हम इस ज्ञान को डर या अंधविश्वास के साथ नहीं परोसते। हमारा नज़रिया सरल है — पाठक को जानकारी दो, निर्णय उनका।</p><!-- /wp:paragraph -->
<!-- wp:heading --><h2>हम क्या प्रकाशित करते हैं</h2><!-- /wp:heading -->
<!-- wp:list --><ul><li><strong>दैनिक राशिफल</strong> — मेष से मीन, सभी बारह राशियाँ, प्रतिदिन अपडेट।</li><li><strong>आज का पंचांग</strong> — तिथि, वार, नक्षत्र, योग, करण।</li><li><strong>चौघड़िया और राहुकाल</strong> — शुभ और अशुभ समय की सूची।</li><li><strong>शुभ मुहूर्त</strong> — विवाह, गृह प्रवेश, वाहन, व्यवसाय।</li><li><strong>एकादशी और पूर्णिमा</strong> — व्रत तिथियाँ और महत्व।</li><li><strong>त्योहार कैलेंडर</strong> — प्रमुख हिंदू पर्वों की तिथि।</li><li><strong>वास्तु मार्गदर्शन</strong> — घर और कार्यस्थल के लिए सरल सुझाव।</li></ul><!-- /wp:list -->
<!-- wp:heading --><h2>पाठकों के प्रति हमारी प्रतिबद्धता</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>हम यहाँ किसी को डराने नहीं आए। न कोई पत्थर बेचने के लिए, न कोई भुगतान परामर्श देने के लिए। Golden Rashifal पर जो जानकारी मिलती है वह शुद्ध, निष्पक्ष और पाठक-हितैषी है।</p><!-- /wp:paragraph -->
<!-- wp:heading --><h2>सह-संस्थापक परिचय</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><strong>Vedansh Vallabh</strong> — सह-संस्थापक एवं ज्योतिषीय सामग्री संपादक। वे राशिफल, पंचांग, चौघड़िया और मुहूर्त से जुड़ी सामग्री तैयार करते हैं। उनका प्रयास है कि पारंपरिक ज्ञान सरल और उपयोगी भाषा में पाठकों तक पहुँचे।</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>📧 <a href="mailto:support@goldenrashifal.in">support@goldenrashifal.in</a> | 📞 +91 9045432034</p><!-- /wp:paragraph -->',

        'contact' => '<!-- wp:heading --><h2>हमसे संपर्क करें</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>कोई भी सवाल हो, कोई जानकारी गलत लगे, या कोई सुझाव देना हो — हम हर संदेश को ध्यान से पढ़ते हैं। आमतौर पर २ से ५ कार्य दिनों में जवाब देते हैं।</p><!-- /wp:paragraph -->
<!-- wp:heading --><h2>संपर्क जानकारी</h2><!-- /wp:heading -->
<!-- wp:list --><ul><li>📧 <strong>ईमेल:</strong> <a href="mailto:support@goldenrashifal.in">support@goldenrashifal.in</a></li><li>📞 <strong>फ़ोन:</strong> +91 9045432034</li><li>💬 <strong>व्हाट्सऐप चैनल:</strong> <a href="https://wa.me/919045432034">चैनल से जुड़ें</a></li><li>📍 <strong>पता:</strong> D-9 A/1, Indira Colony, Sector 52, Gurugram, Haryana 122003, India</li></ul><!-- /wp:list -->
<!-- wp:heading --><h2>सह-संस्थापक</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><strong>Vedansh Vallabh</strong> — सह-संस्थापक एवं ज्योतिषीय सामग्री संपादक, Golden Rashifal। राशिफल, पंचांग, चौघड़िया और मुहूर्त से जुड़ी जानकारी के लिए सीधे संपर्क करें।</p><!-- /wp:paragraph -->
<!-- wp:heading --><h2>सामाजिक माध्यम</h2><!-- /wp:heading -->
<!-- wp:list --><ul><li><a href="https://www.facebook.com/astrovedansh/">फेसबुक पेज</a></li><li><a href="https://www.instagram.com/astro_vedansh/">इंस्टाग्राम</a></li><li><a href="https://www.youtube.com/@Astrovedansh/">यूट्यूब चैनल</a></li></ul><!-- /wp:list -->',

        'privacy-policy' => '<!-- wp:heading --><h2>गोपनीयता नीति</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><strong>वेबसाइट:</strong> goldenrashifal.in | <strong>अंतिम अद्यतन:</strong> मई 2026</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>Golden Rashifal पर आपकी गोपनीयता हमारी प्राथमिकता है। यह नीति स्पष्ट करती है कि हम कौन सी जानकारी एकत्र करते हैं और उसका उपयोग कैसे होता है।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>हम कौन हैं?</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Golden Rashifal एक हिंदी ज्योतिष सूचना पोर्टल है जो दैनिक राशिफल, पंचांग, चौघड़िया, राहुकाल, शुभ मुहूर्त, एकादशी, पूर्णिमा और हिंदू त्योहारों की जानकारी प्रदान करता है। संपर्क: <a href="mailto:support@goldenrashifal.in">support@goldenrashifal.in</a></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>कौन सी जानकारी एकत्र होती है?</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>जब आप वेबसाइट पर आते हैं तो उपकरण का प्रकार, ब्राउज़र, अनुमानित स्थान और देखे गए पृष्ठ स्वत: दर्ज होते हैं। यह व्यक्तिगत पहचान से नहीं जुड़ा होता। संपर्क प्रपत्र भरने पर नाम, ईमेल और संदेश प्राप्त होता है — केवल उत्तर देने के लिए।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>कुकी का उपयोग</h3><!-- /wp:heading -->
<!-- wp:list --><ul><li><strong>आवश्यक कुकी</strong> — वेबसाइट के सही संचालन के लिए।</li><li><strong>विश्लेषण कुकी</strong> — पठन व्यवहार समझने के लिए (Google Analytics)।</li><li><strong>विज्ञापन कुकी</strong> — विज्ञापन नेटवर्क द्वारा उपयोग।</li></ul><!-- /wp:list -->
<!-- wp:paragraph --><p>ब्राउज़र सेटिंग में जाकर कुकी बंद की जा सकती है।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>आपके अधिकार</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>आप अपनी जानकारी देखने, हटाने या किसी चिंता की जानकारी देने के लिए हमसे संपर्क कर सकते हैं: <a href="mailto:support@goldenrashifal.in">support@goldenrashifal.in</a></p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>हम आपकी जानकारी किसी को बेचते या साझा नहीं करते।</p><!-- /wp:paragraph -->',

        'disclaimer' => '<!-- wp:heading --><h2>अस्वीकरण</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><strong>वेबसाइट:</strong> goldenrashifal.in | <strong>अंतिम अद्यतन:</strong> मई 2026</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>Golden Rashifal पर प्रकाशित सभी सामग्री — राशिफल, पंचांग, चौघड़िया, राहुकाल, शुभ मुहूर्त, एकादशी, पूर्णिमा और वास्तु — सामान्य जानकारी और शैक्षणिक उद्देश्य से है।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>ज्योतिषीय सामग्री के बारे में</h3><!-- /wp:heading -->
<!-- wp:list --><ul><li>यह सामग्री परंपरागत मान्यताओं पर आधारित है, वैज्ञानिक प्रमाण नहीं।</li><li>किसी भी महत्वपूर्ण निर्णय के लिए केवल राशिफल पर निर्भर न रहें।</li><li>हम किसी परिणाम की गारंटी नहीं देते।</li></ul><!-- /wp:list -->
<!-- wp:heading {"level":3} --><h3>पंचांग और समय की जानकारी</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>सूर्योदय, सूर्यास्त, राहुकाल और चौघड़िया के समय अनुमानित हैं — मुख्यतः उत्तर भारत के लिए। आपके स्थान पर ५–१५ मिनट का अंतर हो सकता है।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>विज्ञापन</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>वेबसाइट पर विज्ञापन नेटवर्क के माध्यम से विज्ञापन दिखाए जाते हैं। विज्ञापित उत्पादों की गुणवत्ता हमारी जिम्मेदारी नहीं।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>संपर्क</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>कोई गलती दिखे तो बताएँ: <a href="mailto:support@goldenrashifal.in">support@goldenrashifal.in</a></p><!-- /wp:paragraph -->',

        'terms' => '<!-- wp:heading --><h2>नियम एवं शर्तें</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><strong>वेबसाइट:</strong> goldenrashifal.in | <strong>अंतिम अद्यतन:</strong> मई 2026</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>goldenrashifal.in का उपयोग करके आप इन नियमों से सहमत होते हैं। असहमति की स्थिति में वेबसाइट का उपयोग न करें।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>वेबसाइट का उद्देश्य</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Golden Rashifal दैनिक राशिफल, पंचांग, चौघड़िया, राहुकाल, शुभ मुहूर्त, एकादशी, पूर्णिमा और हिंदू त्योहारों की जानकारी देता है — शैक्षणिक उद्देश्य से। यह किसी व्यावसायिक परामर्श का विकल्प नहीं।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>बौद्धिक संपदा</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>वेबसाइट की सामग्री Golden Rashifal की है। बिना अनुमति कॉपी, पुनर्मुद्रण या वितरण प्रतिबंधित है।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>उपयोगकर्ता आचरण</h3><!-- /wp:heading -->
<!-- wp:list --><ul><li>स्वचालित उपकरणों से सामग्री न निकालें।</li><li>वेबसाइट की कार्यप्रणाली बाधित करने का प्रयास न करें।</li><li>संपर्क प्रपत्र में आपत्तिजनक सामग्री न डालें।</li></ul><!-- /wp:list -->
<!-- wp:heading {"level":3} --><h3>उत्तरदायित्व की सीमा</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Golden Rashifal किसी भी नुकसान के लिए उत्तरदायी नहीं है जो इस वेबसाइट की जानकारी के आधार पर लिए गए निर्णयों से हो।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>संपर्क</h3>-- /wp:heading -->
<!-- wp:paragraph --><p>📧 <a href="mailto:support@goldenrashifal.in">support@goldenrashifal.in</a></p><!-- /wp:paragraph -->',

        'editorial-policy' => '<!-- wp:heading --><h2>हमारी संपादकीय पहचान</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>Golden Rashifal एक पाठक-केंद्रित ज्योतिष सूचना पोर्टल है। सह-संस्थापक <strong>Vedansh Vallabh</strong> के नेतृत्व में यहाँ परंपरागत ज्ञान सरल, संतुलित भाषा में प्रकाशित होता है।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>सामग्री निर्माण प्रक्रिया</h3><!-- /wp:heading -->
<!-- wp:list --><ul><li><strong>शोध:</strong> परंपरागत ग्रंथ, प्रामाणिक पंचांग और खगोलीय गणनाएँ।</li><li><strong>लेखन:</strong> सरल हिंदी, संस्कृत शब्दों के अर्थ सहित।</li><li><strong>समीक्षा:</strong> प्रकाशन से पहले तथ्य जाँच।</li><li><strong>अद्यतन:</strong> दैनिक राशिफल, चौघड़िया और राहुकाल नियमित रूप से।</li></ul><!-- /wp:list -->
<!-- wp:heading {"level":3} --><h3>हम क्या नहीं करते</h3><!-- /wp:heading -->
<!-- wp:list --><ul><li>किसी परिणाम की गारंटी नहीं देते।</li><li>डर आधारित भाषा का उपयोग नहीं करते।</li><li>दूसरी वेबसाइटों की नकल नहीं करते।</li><li>व्यक्तिगत परामर्श सेवा नहीं देते।</li></ul><!-- /wp:list -->
<!-- wp:heading {"level":3} --><h3>त्रुटि सुधार नीति</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>कोई गलती मिले तो <a href="mailto:support@goldenrashifal.in">support@goldenrashifal.in</a> पर सूचित करें। ४८ घंटों के भीतर समीक्षा और तत्काल सुधार।</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>विज्ञापन और संपादकीय स्वतंत्रता</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>विज्ञापन हमारी आय का स्रोत है लेकिन विज्ञापनदाता हमारी सामग्री को प्रभावित नहीं करते।</p><!-- /wp:paragraph -->',

    );

    foreach ( $page_contents as $slug => $content ) {
        $page = get_page_by_path( $slug );
        if ( $page ) {
            wp_update_post( array(
                'ID'           => $page->ID,
                'post_content' => $content,
            ) );
        }
    }

    // For all OTHER pages that are still using the old placeholder, keep them.
    $pages       = golden_rashifal_virtual_pages();
    $basic_ph    = '<!-- wp:paragraph --><p>यह पृष्ठ थीम द्वारा स्वचालित रूप से प्रदर्शित किया जाता है।</p><!-- /wp:paragraph -->';
    foreach ( $pages as $slug => $data ) {
        if ( isset( $page_contents[ $slug ] ) ) {
            continue; // Already handled above.
        }
        $existing = get_page_by_path( $slug );
        if ( ! $existing ) {
            $existing = get_page_by_path( basename( $slug ) );
        }
        if ( $existing && empty( trim( $existing->post_content ) ) ) {
            wp_update_post( array(
                'ID'           => $existing->ID,
                'post_content' => $basic_ph,
            ) );
        }
    }
}
add_action( 'wp_loaded', 'golden_rashifal_fix_empty_page_content', 20 );

/**
 * Assign theme template to pages that match virtual page slugs.
 *
 * IMPORTANT: This filter only fires when the WordPress page has NO content
 * saved in the editor (post_content is empty / whitespace only).
 *
 * SITEMAP PROTECTION: This filter must never intercept Rank Math, Yoast, or
 * WP core sitemap requests. Those plugins hook template_redirect to serve XML
 * output directly. If this filter returns a PHP template file for a sitemap
 * URL, the SEO plugin's XML output is replaced by HTML — causing 404 errors
 * on sitemap_index.xml, post-sitemap.xml, page-sitemap.xml, etc.
 */
function golden_rashifal_assign_page_templates( $template ) {

    // ── SITEMAP & FEED EXCLUSIONS ─────────────────────────────────
    // Always return the unchanged $template for any sitemap / feed / robots
    // request so Rank Math / Yoast / WP core can serve their XML unmodified.
    $request_uri = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '';

    $sitemap_patterns = array(
        'sitemap_index.xml',
        'sitemap.xml',
        '-sitemap.xml',
        'sitemap-',
        'news-sitemap.xml',
        'video-sitemap.xml',
        'image-sitemap.xml',
        'author-sitemap.xml',
        'robots.txt',
    );
    foreach ( $sitemap_patterns as $pattern ) {
        if ( false !== strpos( $request_uri, $pattern ) ) {
            return $template;
        }
    }

    if ( get_query_var( 'sitemap' ) || get_query_var( 'sitemap-subtype' ) ) {
        return $template;
    }

    if ( get_query_var( 'rm_sitemap' ) || get_query_var( 'rankmath_sitemap' ) ) {
        return $template;
    }

    if ( is_feed() ) {
        return $template;
    }
    // ── END EXCLUSIONS ────────────────────────────────────────────

    if ( ! is_page() ) {
        return $template;
    }

    $page_obj = get_queried_object();
    if ( ! $page_obj ) {
        return $template;
    }

    /*
     * If the page already has content written in the WordPress editor,
     * step aside and let WordPress render it through the standard page.php
     * template (which calls the_content()).  Editor content ALWAYS wins.
     */
    if ( ! empty( trim( $page_obj->post_content ) ) ) {
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
 * Flush rewrite rules on theme activation and deactivation so Rank Math
 * sitemap rewrite rules are properly registered and never stale.
 */
function golden_rashifal_flush_rewrite_rules() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'golden_rashifal_flush_rewrite_rules', 20 );
add_action( 'switch_theme',       'golden_rashifal_flush_rewrite_rules', 20 );

/**
 * Ensure WordPress rewrite rules are registered on init so Rank Math sitemap
 * query vars (?sitemap=, ?sitemap-subtype=) are always available.
 * This prevents a race condition where WP parses the sitemap URL before
 * Rank Math has registered its rewrite endpoints.
 */
function golden_rashifal_register_sitemap_query_vars( $vars ) {
    // Ensure Rank Math and WP core sitemap query vars pass through.
    $sitemap_vars = array( 'sitemap', 'sitemap-subtype', 'rm_sitemap', 'rankmath_sitemap' );
    foreach ( $sitemap_vars as $var ) {
        if ( ! in_array( $var, $vars, true ) ) {
            $vars[] = $var;
        }
    }
    return $vars;
}
add_filter( 'query_vars', 'golden_rashifal_register_sitemap_query_vars' );
