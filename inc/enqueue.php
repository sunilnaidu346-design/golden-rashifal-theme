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

    /*
     * Cache-busting: use file modification time (filemtime) for local assets
     * so browsers immediately pick up CSS/JS changes after any deployment.
     * Falls back to GOLDEN_RASHIFAL_VERSION for files that don't exist on disk
     * (e.g. during unit tests or when the path is wrong).
     */
    $base = GOLDEN_RASHIFAL_DIR;
    $fallback = GOLDEN_RASHIFAL_VERSION;

    $ver_fn = function( $rel_path ) use ( $base, $fallback ) {
        $abs = $base . ltrim( $rel_path, '/' );
        $mtime = @filemtime( $abs );
        return $mtime ? (string) $mtime : $fallback;
    };

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
        $ver_fn( 'style.css' )
    );

    // Main UI styles.
    wp_enqueue_style(
        'golden-rashifal-main',
        GOLDEN_RASHIFAL_URI . 'assets/css/main.css',
        array( 'golden-rashifal-base' ),
        $ver_fn( 'assets/css/main.css' )
    );

    // Responsive layer is small — load it everywhere.
    wp_enqueue_style(
        'golden-rashifal-responsive',
        GOLDEN_RASHIFAL_URI . 'assets/css/responsive.css',
        array( 'golden-rashifal-main' ),
        $ver_fn( 'assets/css/responsive.css' )
    );

    // Premium enhancements — progress bar, mobile nav, skeletons, animations.
    wp_enqueue_style(
        'golden-rashifal-premium',
        GOLDEN_RASHIFAL_URI . 'assets/css/premium-enhancements.css',
        array( 'golden-rashifal-responsive' ),
        $ver_fn( 'assets/css/premium-enhancements.css' )
    );

    // Single post premium layout CSS.
    if ( is_singular( 'post' ) ) {
        wp_enqueue_style(
            'golden-rashifal-single',
            GOLDEN_RASHIFAL_URI . 'assets/css/single-post.css',
            array( 'golden-rashifal-premium' ),
            $ver_fn( 'assets/css/single-post.css' )
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
        $ver_fn( 'assets/js/main.js' ),
        true
    );
    wp_script_add_data( 'golden-rashifal-main', 'defer', true );

    // Premium enhancements JS — mobile nav, animations, search suggestions.
    wp_enqueue_script(
        'golden-rashifal-premium',
        GOLDEN_RASHIFAL_URI . 'assets/js/premium.js',
        array( 'golden-rashifal-main' ),
        $ver_fn( 'assets/js/premium.js' ),
        true
    );
    wp_script_add_data( 'golden-rashifal-premium', 'defer', true );

    // Live header clock — only loaded if the user shows it via Customizer.
    if ( get_theme_mod( 'gr_show_live_clock', true ) ) {
        wp_enqueue_script(
            'golden-rashifal-clock',
            GOLDEN_RASHIFAL_URI . 'assets/js/live-clock.js',
            array(),
            $ver_fn( 'assets/js/live-clock.js' ),
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
            $ver_fn( 'assets/js/countdown.js' ),
            true
        );
        wp_script_add_data( 'golden-rashifal-countdown', 'defer', true );
    }

    /*
     * Cookie consent notice — loaded on every public page.
     * Deferred so it never blocks rendering. The banner itself is rendered
     * inline in footer.php; this script only handles show/hide logic.
     */
    wp_enqueue_script(
        'golden-rashifal-cookie',
        GOLDEN_RASHIFAL_URI . 'assets/js/cookie-notice.js',
        array(), // no dependencies
        $ver_fn( 'assets/js/cookie-notice.js' ),
        true  // footer
    );
    wp_script_add_data( 'golden-rashifal-cookie', 'defer', true );
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
 * Block editor (Gutenberg) compatibility.
 *
 * Ensures the block editor iframe and REST API endpoint are not blocked
 * by theme code. Also adds the 'wp-edit-post' script dependency guard
 * so theme JS never loads inside the block editor iframe.
 *
 * WHY THIS EXISTS:
 * The WordPress block editor (Gutenberg) renders inside an iframe since WP 6.x.
 * If any theme script or style is enqueued without proper guards it can be
 * injected into the editor iframe and break block rendering, causing the
 * "editor appears empty" symptom even when database content is intact.
 *
 * This function explicitly dequeues all theme front-end assets from the
 * admin/editor context so they can never interfere with Gutenberg.
 */
function golden_rashifal_dequeue_from_editor() {
    // Only run inside the block editor screen.
    $screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;
    if ( ! $screen || ! method_exists( $screen, 'is_block_editor' ) || ! $screen->is_block_editor() ) {
        return;
    }

    // Dequeue all front-end theme styles from the editor — they are added via
    // add_editor_style() at the correct point instead.
    $theme_styles = array(
        'golden-rashifal-fonts',
        'golden-rashifal-base',
        'golden-rashifal-main',
        'golden-rashifal-responsive',
        'golden-rashifal-premium',
        'golden-rashifal-single',
    );
    foreach ( $theme_styles as $handle ) {
        wp_dequeue_style( $handle );
        wp_deregister_style( $handle );
    }

    // Dequeue all front-end theme scripts from the editor.
    $theme_scripts = array(
        'golden-rashifal-main',
        'golden-rashifal-premium',
        'golden-rashifal-clock',
        'golden-rashifal-countdown',
        'golden-rashifal-cookie',
    );
    foreach ( $theme_scripts as $handle ) {
        wp_dequeue_script( $handle );
        wp_deregister_script( $handle );
    }
}
add_action( 'admin_enqueue_scripts', 'golden_rashifal_dequeue_from_editor', 100 );

/**
 * Ensure the REST API is never blocked for logged-in editors.
 *
 * Some theme code or security hardening can accidentally restrict REST API
 * access. The block editor relies entirely on the REST API to load and save
 * post content. Without it the editor loads but shows empty content.
 *
 * This filter guarantees the theme never adds authentication errors to the
 * REST API for users who have edit_posts capability.
 */
function golden_rashifal_rest_api_allow_editor( $result ) {
    // Only act if something has already added a WP_Error to the REST request.
    if ( ! is_wp_error( $result ) ) {
        return $result;
    }
    // If the current user can edit posts, clear any theme-originated restriction.
    if ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) {
        return true; // Allow — let WordPress handle auth normally.
    }
    return $result;
}
add_filter( 'rest_authentication_errors', 'golden_rashifal_rest_api_allow_editor', 5 );

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
