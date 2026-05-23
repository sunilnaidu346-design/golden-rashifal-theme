<?php
/**
 * SEO helpers — Open Graph, Twitter Card, Article and FAQ schema.
 *
 * The theme stays out of the way when Rank Math or Yoast is active so we
 * don't double-print tags. We only emit our own when no SEO plugin handles it.
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Detect whether a major SEO plugin is active.
 */
function golden_rashifal_seo_plugin_active() {
    if ( defined( 'WPSEO_VERSION' ) ) {
        return 'yoast';
    }
    if ( defined( 'RANK_MATH_VERSION' ) || class_exists( 'RankMath' ) ) {
        return 'rankmath';
    }
    if ( defined( 'AIOSEO_VERSION' ) ) {
        return 'aioseo';
    }
    return false;
}

/**
 * Output OG / Twitter meta tags when no SEO plugin is active.
 */
function golden_rashifal_meta_tags() {

    if ( golden_rashifal_seo_plugin_active() ) {
        return;
    }

    $title       = wp_get_document_title();
    $description = '';
    $url         = '';
    $image       = '';
    $type        = 'website';

    if ( is_singular() ) {
        $url = get_permalink();
        if ( has_excerpt() ) {
            $description = wp_strip_all_tags( get_the_excerpt() );
        } else {
            $description = wp_trim_words( wp_strip_all_tags( get_post_field( 'post_content' ) ), 30, '…' );
        }
        if ( has_post_thumbnail() ) {
            $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        }
        $type = is_singular( 'post' ) ? 'article' : 'website';
    } else {
        $url         = home_url( add_query_arg( array(), $GLOBALS['wp']->request ) );
        $description = get_bloginfo( 'description' );
    }

    if ( ! $image ) {
        $logo_id = get_theme_mod( 'custom_logo' );
        if ( $logo_id ) {
            $image = wp_get_attachment_image_url( $logo_id, 'full' );
        }
    }

    echo "\n<!-- Golden Rashifal SEO -->\n";
    echo '<meta name="description" content="' . esc_attr( $description ) . '" />' . "\n";
    echo '<meta property="og:locale" content="' . esc_attr( str_replace( '-', '_', get_locale() ) ) . '" />' . "\n";
    echo '<meta property="og:type" content="' . esc_attr( $type ) . '" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr( $title ) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $description ) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $url ) . '" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />' . "\n";
    if ( $image ) {
        echo '<meta property="og:image" content="' . esc_url( $image ) . '" />' . "\n";
    }
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '" />' . "\n";
    if ( $image ) {
        echo '<meta name="twitter:image" content="' . esc_url( $image ) . '" />' . "\n";
    }

    if ( is_singular() ) {
        echo '<link rel="canonical" href="' . esc_url( get_permalink() ) . '" />' . "\n";
    }
}
add_action( 'wp_head', 'golden_rashifal_meta_tags', 5 );

/**
 * Article + Website JSON-LD schema.
 */
function golden_rashifal_schema_jsonld() {

    if ( golden_rashifal_seo_plugin_active() ) {
        return;
    }

    $graph = array();

    // Website / Organisation.
    $graph[] = array(
        '@type' => 'WebSite',
        '@id'   => home_url( '/#website' ),
        'url'   => home_url( '/' ),
        'name'  => get_bloginfo( 'name' ),
        'description' => get_bloginfo( 'description' ),
        'inLanguage'  => get_locale(),
        'potentialAction' => array(
            '@type'       => 'SearchAction',
            'target'      => home_url( '/?s={search_term_string}' ),
            'query-input' => 'required name=search_term_string',
        ),
    );

    if ( is_singular( 'post' ) ) {
        $post_id = get_queried_object_id();
        $author_id = (int) get_post_field( 'post_author', $post_id );

        $article = array(
            '@type'         => 'Article',
            '@id'           => get_permalink( $post_id ) . '#article',
            'mainEntityOfPage' => get_permalink( $post_id ),
            'headline'      => get_the_title( $post_id ),
            'datePublished' => get_the_date( DATE_W3C, $post_id ),
            'dateModified'  => get_the_modified_date( DATE_W3C, $post_id ),
            'inLanguage'    => get_locale(),
            'author'        => array(
                '@type' => 'Person',
                'name'  => get_the_author_meta( 'display_name', $author_id ),
                'url'   => get_author_posts_url( $author_id ),
            ),
            'publisher'     => array(
                '@type' => 'Organization',
                'name'  => get_bloginfo( 'name' ),
                'url'   => home_url( '/' ),
            ),
        );

        if ( has_post_thumbnail( $post_id ) ) {
            $article['image'] = get_the_post_thumbnail_url( $post_id, 'full' );
        }
        if ( has_excerpt( $post_id ) ) {
            $article['description'] = wp_strip_all_tags( get_the_excerpt( $post_id ) );
        }

        $graph[] = $article;
    }

    $payload = array(
        '@context' => 'https://schema.org',
        '@graph'   => $graph,
    );

    echo "\n<script type=\"application/ld+json\">" . wp_json_encode( $payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";
}
add_action( 'wp_head', 'golden_rashifal_schema_jsonld', 6 );

/**
 * Auto-build FAQ schema from a [gr_faq] shortcode.
 *
 * Usage:
 *   [gr_faq]
 *   Q: सवाल यहाँ
 *   A: जवाब यहाँ
 *
 *   Q: ...
 *   A: ...
 *   [/gr_faq]
 *
 * Renders a clean FAQ block AND injects FAQPage JSON-LD.
 */
function golden_rashifal_faq_shortcode( $atts, $content = '' ) {

    $content = trim( wp_strip_all_tags( html_entity_decode( $content ) ) );
    if ( '' === $content ) {
        return '';
    }

    $pairs = array();
    // Split on blank lines so each Q/A block is independent.
    $blocks = preg_split( '/\n\s*\n/', $content );
    foreach ( $blocks as $block ) {
        if ( ! preg_match( '/Q:\s*(.+?)\n+A:\s*(.+)/su', trim( $block ), $m ) ) {
            continue;
        }
        $pairs[] = array(
            'q' => trim( $m[1] ),
            'a' => trim( $m[2] ),
        );
    }

    if ( empty( $pairs ) ) {
        return '';
    }

    // Visible FAQ block.
    $html  = '<section class="gr-faq" aria-label="' . esc_attr__( 'अक्सर पूछे जाने वाले सवाल', 'golden-rashifal' ) . '">';
    $html .= '<h2 class="gr-faq__title">' . esc_html__( 'अक्सर पूछे जाने वाले सवाल', 'golden-rashifal' ) . '</h2>';
    foreach ( $pairs as $i => $p ) {
        $html .= '<details class="gr-faq__item"' . ( 0 === $i ? ' open' : '' ) . '>';
        $html .= '<summary class="gr-faq__q">' . esc_html( $p['q'] ) . '</summary>';
        $html .= '<div class="gr-faq__a">' . wp_kses_post( wpautop( $p['a'] ) ) . '</div>';
        $html .= '</details>';
    }
    $html .= '</section>';

    // FAQPage schema.
    $entities = array();
    foreach ( $pairs as $p ) {
        $entities[] = array(
            '@type'          => 'Question',
            'name'           => $p['q'],
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text'  => $p['a'],
            ),
        );
    }
    $schema = array(
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $entities,
    );
    $html .= '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>';

    return $html;
}
add_shortcode( 'gr_faq', 'golden_rashifal_faq_shortcode' );
