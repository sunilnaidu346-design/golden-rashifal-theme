<?php
/**
 * Theme setup — feature support, menus, sidebars, content width.
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'golden_rashifal_setup' ) ) :
    /**
     * Register theme features. Runs once per request, on after_setup_theme.
     */
    function golden_rashifal_setup() {

        load_theme_textdomain( 'golden-rashifal', GOLDEN_RASHIFAL_DIR . 'languages' );

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 80,
                'width'       => 240,
                'flex-height' => true,
                'flex-width'  => true,
            )
        );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'custom-background', array( 'default-color' => 'ffffff' ) );

        // Editor color palette — keeps Gutenberg blocks on-brand.
        add_theme_support(
            'editor-color-palette',
            array(
                array(
                    'name'  => __( 'गोल्डन', 'golden-rashifal' ),
                    'slug'  => 'gr-gold',
                    'color' => '#D4AF37',
                ),
                array(
                    'name'  => __( 'गहरा गोल्डन', 'golden-rashifal' ),
                    'slug'  => 'gr-gold-deep',
                    'color' => '#A8860C',
                ),
                array(
                    'name'  => __( 'ऑरेंज', 'golden-rashifal' ),
                    'slug'  => 'gr-orange',
                    'color' => '#FF5100',
                ),
                array(
                    'name'  => __( 'गुलाबी', 'golden-rashifal' ),
                    'slug'  => 'gr-pink',
                    'color' => '#F00098',
                ),
                array(
                    'name'  => __( 'सफ़ेद', 'golden-rashifal' ),
                    'slug'  => 'gr-white',
                    'color' => '#FFFFFF',
                ),
                array(
                    'name'  => __( 'काला', 'golden-rashifal' ),
                    'slug'  => 'gr-ink',
                    'color' => '#1A1A1A',
                ),
            )
        );

        // Image sizes used across the theme.
        set_post_thumbnail_size( 1200, 720, true );
        add_image_size( 'gr-card', 720, 460, true );
        add_image_size( 'gr-thumb', 240, 160, true );
        add_image_size( 'gr-pinterest', 1000, 1500, true );

        // Navigation menus.
        register_nav_menus(
            array(
                'primary' => __( 'मुख्य मेनू (Header)', 'golden-rashifal' ),
                'footer'  => __( 'फुटर मेनू', 'golden-rashifal' ),
                'topbar'  => __( 'टॉप बार लिंक', 'golden-rashifal' ),
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'golden_rashifal_setup' );

/**
 * Sensible content width default for embeds.
 */
function golden_rashifal_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'golden_rashifal_content_width', 760 );
}
add_action( 'after_setup_theme', 'golden_rashifal_content_width', 0 );

/**
 * Register sidebars.
 */
function golden_rashifal_widgets_init() {

    register_sidebar(
        array(
            'name'          => __( 'मुख्य साइडबार', 'golden-rashifal' ),
            'id'            => 'sidebar-main',
            'description'   => __( 'पोस्ट और पेज के साथ दिखने वाला साइडबार।', 'golden-rashifal' ),
            'before_widget' => '<section id="%1$s" class="gr-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="gr-widget__title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'होमपेज साइडबार', 'golden-rashifal' ),
            'id'            => 'sidebar-home',
            'description'   => __( 'होमपेज पर दाईं तरफ़ दिखने वाले विजेट।', 'golden-rashifal' ),
            'before_widget' => '<section id="%1$s" class="gr-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="gr-widget__title">',
            'after_title'   => '</h3>',
        )
    );

    for ( $i = 1; $i <= 4; $i++ ) {
        register_sidebar(
            array(
                /* translators: %d: footer column number */
                'name'          => sprintf( __( 'फुटर कॉलम %d', 'golden-rashifal' ), $i ),
                'id'            => 'footer-' . $i,
                'before_widget' => '<section id="%1$s" class="gr-foot-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h4 class="gr-foot-widget__title">',
                'after_title'   => '</h4>',
            )
        );
    }
}
add_action( 'widgets_init', 'golden_rashifal_widgets_init' );

/**
 * Add a "post views" lightweight counter (no external plugin required).
 */
function golden_rashifal_track_views() {
    if ( ! is_singular( 'post' ) || is_admin() ) {
        return;
    }
    $post_id = get_queried_object_id();
    if ( ! $post_id ) {
        return;
    }
    $views = (int) get_post_meta( $post_id, '_gr_views', true );
    update_post_meta( $post_id, '_gr_views', $views + 1 );
}
add_action( 'wp_head', 'golden_rashifal_track_views', 99 );

/**
 * Add a body class that flags the active layout — helps theme CSS scope rules.
 */
function golden_rashifal_body_classes( $classes ) {
    if ( is_singular( 'post' ) ) {
        $classes[] = 'gr-layout-single';
    } elseif ( is_front_page() ) {
        $classes[] = 'gr-layout-home';
    } else {
        $classes[] = 'gr-layout-archive';
    }
    if ( is_active_sidebar( 'sidebar-main' ) ) {
        $classes[] = 'gr-has-sidebar';
    }
    return $classes;
}
add_filter( 'body_class', 'golden_rashifal_body_classes' );

/**
 * Tighter excerpt length for card UIs.
 */
function golden_rashifal_excerpt_length( $length ) {
    return 28;
}
add_filter( 'excerpt_length', 'golden_rashifal_excerpt_length', 999 );

function golden_rashifal_excerpt_more( $more ) {
    return '…';
}
add_filter( 'excerpt_more', 'golden_rashifal_excerpt_more' );
