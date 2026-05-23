<?php
/**
 * AdSense-friendly ad placement helpers.
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render an ad slot from a Customizer setting.
 *
 * @param string $key       Customizer key (e.g., gr_ad_above_content).
 * @param string $label_key Translation key for the small "Advertisement" label.
 */
function golden_rashifal_ad( $key, $label_key = 'विज्ञापन' ) {
    $code = get_theme_mod( $key, '' );
    if ( '' === trim( (string) $code ) ) {
        return;
    }
    echo '<aside class="gr-ad-slot gr-ad-slot--' . esc_attr( str_replace( 'gr_ad_', '', $key ) ) . '" aria-label="' . esc_attr( $label_key ) . '">';
    echo '<span class="gr-ad-slot__label">' . esc_html( $label_key ) . '</span>';
    echo wp_kses( $code, golden_rashifal_ad_allowed_tags() );
    echo '</aside>';
}

/**
 * Inject a mid-content ad after the Nth paragraph of single posts.
 *
 * Reader-friendly: only inserts if the post has enough paragraphs so we don't
 * crowd short articles. This matches Google's recommended ad density.
 */
function golden_rashifal_inject_inline_ad( $content ) {

    if ( ! is_singular( 'post' ) || ! is_main_query() ) {
        return $content;
    }
    $code = get_theme_mod( 'gr_ad_in_content', '' );
    if ( '' === trim( (string) $code ) ) {
        return $content;
    }

    $paragraphs = explode( '</p>', $content );
    $total      = count( $paragraphs );
    if ( $total < 6 ) {
        return $content;
    }

    $insert_after = (int) apply_filters( 'golden_rashifal_inline_ad_after', 3 );
    $ad_html      = '<aside class="gr-ad-slot gr-ad-slot--inline" aria-label="' . esc_attr__( 'विज्ञापन', 'golden-rashifal' ) . '">';
    $ad_html     .= '<span class="gr-ad-slot__label">' . esc_html__( 'विज्ञापन', 'golden-rashifal' ) . '</span>';
    $ad_html     .= wp_kses( $code, golden_rashifal_ad_allowed_tags() );
    $ad_html     .= '</aside>';

    $output = '';
    foreach ( $paragraphs as $i => $para ) {
        $output .= $para;
        if ( $i + 1 < $total ) {
            $output .= '</p>';
        }
        if ( $i + 1 === $insert_after ) {
            $output .= $ad_html;
        }
    }
    return $output;
}
add_filter( 'the_content', 'golden_rashifal_inject_inline_ad', 18 );
