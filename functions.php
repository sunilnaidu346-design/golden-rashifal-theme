<?php
/**
 * Golden Rashifal — main theme bootstrap.
 *
 * This file deliberately stays slim. Anything bigger than a few lines lives
 * inside /inc, so each concern is easy to read, test and replace later.
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'GOLDEN_RASHIFAL_VERSION' ) ) {
    define( 'GOLDEN_RASHIFAL_VERSION', '3.1.0' );
}

if ( ! defined( 'GOLDEN_RASHIFAL_DIR' ) ) {
    define( 'GOLDEN_RASHIFAL_DIR', trailingslashit( get_template_directory() ) );
}

if ( ! defined( 'GOLDEN_RASHIFAL_URI' ) ) {
    define( 'GOLDEN_RASHIFAL_URI', trailingslashit( get_template_directory_uri() ) );
}

/*
 * ── Author constants — single source of truth for Vedansh Vallabh ──────────
 * Used by author-box.php, author.php, about.php, and any future template.
 * Defined here in functions.php so they are available on every request and
 * cannot cause "Cannot redefine constant" fatal errors when templates are
 * included more than once (e.g. via AJAX or nested loops).
 */
if ( ! defined( 'GR_AUTHOR_NAME' ) )  { define( 'GR_AUTHOR_NAME',  'Vedansh Vallabh' ); }
if ( ! defined( 'GR_AUTHOR_ROLE' ) )  { define( 'GR_AUTHOR_ROLE',  'Co-Founder & Astrology Content Editor' ); }
if ( ! defined( 'GR_AUTHOR_BIO' ) )   { define( 'GR_AUTHOR_BIO',   'Vedansh Vallabh is the Co-Founder of Golden Rashifal and contributes astrology, Panchang, Choghadiya, Muhurat, and horoscope-related content. His focus is to present traditional information in a simple, reader-friendly, and easy-to-understand format.' ); }
if ( ! defined( 'GR_AUTHOR_IMG' ) )   { define( 'GR_AUTHOR_IMG',   'https://goldenrashifal.in/wp-content/uploads/2026/05/Co-founders-Author-Vedansh-Vallabh.webp' ); }
if ( ! defined( 'GR_AUTHOR_EMAIL' ) ) { define( 'GR_AUTHOR_EMAIL', 'support@goldenrashifal.in' ); }
if ( ! defined( 'GR_AUTHOR_PHONE' ) ) { define( 'GR_AUTHOR_PHONE', '+91 9045432034' ); }
if ( ! defined( 'GR_AUTHOR_FB' ) )    { define( 'GR_AUTHOR_FB',    'https://www.facebook.com/astrovedansh/' ); }
if ( ! defined( 'GR_AUTHOR_IG' ) )    { define( 'GR_AUTHOR_IG',    'https://www.instagram.com/astro_vedansh/' ); }
if ( ! defined( 'GR_AUTHOR_YT' ) )    { define( 'GR_AUTHOR_YT',    'https://www.youtube.com/@Astrovedansh/' ); }
if ( ! defined( 'GR_AUTHOR_WA' ) )    { define( 'GR_AUTHOR_WA',    'https://wa.me/919045432034' ); }

/**
 * Load every helper module. Order matters only where dependencies are real.
 */
$gr_modules = array(
    'inc/theme-setup.php',
    'inc/enqueue.php',
    'inc/template-tags.php',
    'inc/widgets.php',
    'inc/customizer.php',
    'inc/seo.php',
    'inc/ad-placements.php',
    'inc/astrology-functions.php',
    'inc/virtual-pages.php',
    'inc/admin-pages-creator.php',
    'inc/premium-features.php',
);

foreach ( $gr_modules as $gr_module ) {
    $gr_path = GOLDEN_RASHIFAL_DIR . $gr_module;
    if ( file_exists( $gr_path ) ) {
        require_once $gr_path;
    }
}
unset( $gr_modules, $gr_module, $gr_path );
