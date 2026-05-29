<?php
/**
 * Asset loading — fonts, CSS, JS.
 *
 * Strategy:
 *   - Preconnect to Google Fonts and load Noto Sans Devanagari with display=swap.
 *   - Bundle-free: each CSS file is small and only loaded where it's needed.
 *   - JS is deferred and split per concern (core, countdown, clock).
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Output font preconnects in <head> as early as possible.
 */
function golden_rashifal_resource_hints( $hints, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $hints[] = array(
            'href'        => 'https://fonts.googleapis.com',
            'crossorigin' => 'anonymous',
        );
        $hints[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'golden_rashifal_resource_hints', 10, 2 );

/**
 * Enqueue stylesheets and scripts on the front-end.
 */
function golden_rashifal_enqueue_assets() {

    $ver = GOLDEN_RASHIFAL_VERSION;

    // Fonts — single, tuned request. Noto Sans Devanagari covers Hindi cleanly.
    wp_enqueue_style(
        'golden-rashifal-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // The theme header lives in style.css (required by WP).
    wp_enqueue_style(
        'golden-rashifal-base',
        get_stylesheet_uri(),
        array( 'golden-rashifal-fonts' ),
        $ver
    );

    // Main UI styles.
    wp_enqueue_style(
        'golden-rashifal-main',
        GOLDEN_RASHIFAL_URI . 'assets/css/main.css',
        array( 'golden-rashifal-base' ),
        $ver
    );

    // Responsive layer is small — load it everywhere.
    wp_enqueue_style(
        'golden-rashifal-responsive',
        GOLDEN_RASHIFAL_URI . 'assets/css/responsive.css',
        array( 'golden-rashifal-main' ),
        $ver
    );

    // Premium enhancements — progress bar, mobile nav, skeletons, animations.
    wp_enqueue_style(
        'golden-rashifal-premium',
        GOLDEN_RASHIFAL_URI . 'assets/css/premium-enhancements.css',
        array( 'golden-rashifal-responsive' ),
        $ver
    );

    // Single post premium layout CSS.
    if ( is_singular( 'post' ) ) {
        wp_enqueue_style(
            'golden-rashifal-single',
            GOLDEN_RASHIFAL_URI . 'assets/css/single-post.css',
            array( 'golden-rashifal-premium' ),
            $ver
        );
    }

    // Comments script only when needed.
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // Core interactions — sticky header, mobile menu, search popup, share.
    wp_enqueue_script(
        'golden-rashifal-main',
        GOLDEN_RASHIFAL_URI . 'assets/js/main.js',
        array(),
        $ver,
        true
    );
    wp_script_add_data( 'golden-rashifal-main', 'defer', true );

    // Premium enhancements JS — mobile nav, animations, search suggestions.
    wp_enqueue_script(
        'golden-rashifal-premium',
        GOLDEN_RASHIFAL_URI . 'assets/js/premium.js',
        array( 'golden-rashifal-main' ),
        $ver,
        true
    );
    wp_script_add_data( 'golden-rashifal-premium', 'defer', true );

    // Live header clock — only loaded if the user shows it via Customizer.
    if ( get_theme_mod( 'gr_show_live_clock', true ) ) {
        wp_enqueue_script(
            'golden-rashifal-clock',
            GOLDEN_RASHIFAL_URI . 'assets/js/live-clock.js',
            array(),
            $ver,
            true
        );
        wp_script_add_data( 'golden-rashifal-clock', 'defer', true );
    }

    // Festival countdown — only on the homepage.
    if ( is_front_page() ) {
        wp_enqueue_script(
            'golden-rashifal-countdown',
            GOLDEN_RASHIFAL_URI . 'assets/js/countdown.js',
            array(),
            $ver,
            true
        );
        wp_script_add_data( 'golden-rashifal-countdown', 'defer', true );
    }
}
add_action( 'wp_enqueue_scripts', 'golden_rashifal_enqueue_assets' );

/**
 * Add async/defer attributes when the script registered them via wp_script_add_data().
 */
function golden_rashifal_script_loader_tag( $tag, $handle ) {
    foreach ( array( 'defer', 'async' ) as $attr ) {
        if ( ! wp_scripts()->get_data( $handle, $attr ) ) {
            continue;
        }
        // Avoid duplicating the attribute.
        if ( false === stripos( $tag, " {$attr}" ) && false === stripos( $tag, " {$attr}=" ) ) {
            $tag = preg_replace( ':(?=></script>):', ' ' . $attr, $tag, 1 );
        }
        break;
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'golden_rashifal_script_loader_tag', 10, 2 );

/**
 * Editor styles — keep the block editor visually consistent with the front end.
 */
function golden_rashifal_block_editor_assets() {
    add_editor_style( array( 'assets/css/main.css' ) );
}
add_action( 'after_setup_theme', 'golden_rashifal_block_editor_assets' );

/**
 * Tiny inline critical CSS for above-the-fold rendering — keeps LCP snappy.
 */
function golden_rashifal_critical_css() {
    ?>
    <style id="gr-critical">
        body{margin:0;font-family:"Noto Sans Devanagari","Inter",-apple-system,sans-serif;background:#fff;color:#1f2937;line-height:1.72}
        .gr-topbar{background:#111827;color:#ddd;font-size:.76rem;padding:7px 0}
        .gr-header{background:#fff;position:sticky;top:0;z-index:100;border-bottom:1px solid #eae4d8;box-shadow:0 1px 3px rgba(0,0,0,.04)}
        .gr-header__inner{display:flex;align-items:center;justify-content:space-between;gap:16px;height:62px;max-width:1200px;margin:0 auto;padding:0 16px}
        .gr-logo{font-weight:800;font-size:1.22rem;color:#1f2937;display:flex;align-items:center;gap:8px}
        .gr-logo__icon{color:#d4af37}
        .gr-logo__highlight{color:#ff6b00}
        img,svg{max-width:100%;height:auto;display:block}
    </style>
    <?php
}
add_action( 'wp_head', 'golden_rashifal_critical_css', 1 );
