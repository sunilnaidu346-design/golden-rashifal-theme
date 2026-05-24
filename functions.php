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
