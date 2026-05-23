<?php
/**
 * Single — Table of Contents (auto-built from H2/H3 in the post content).
 *
 * Generates anchor IDs for each heading and renders a clean nested list.
 * Skipped if the article has fewer than 3 H2 headings.
 *
 * @package GoldenRashifal
 */

$content = get_post_field( 'post_content', get_the_ID() );
if ( ! $content ) {
    return;
}

if ( ! preg_match_all( '/<h([23])(.*?)>(.*?)<\/h\1>/iu', $content, $matches, PREG_SET_ORDER ) ) {
    return;
}

if ( count( array_filter( $matches, function( $m ) { return '2' === $m[1]; } ) ) < 3 ) {
    return;
}

$items = array();
foreach ( $matches as $m ) {
    $level = (int) $m[1];
    $text  = trim( wp_strip_all_tags( $m[3] ) );
    if ( '' === $text ) {
        continue;
    }
    $items[] = array(
        'level' => $level,
        'text'  => $text,
        'slug'  => sanitize_title( $text ) . '-' . substr( md5( $text ), 0, 4 ),
    );
}
if ( empty( $items ) ) {
    return;
}
?>
<nav class="gr-toc" aria-label="<?php esc_attr_e( 'इस लेख की विषय-सूची', 'golden-rashifal' ); ?>" data-gr-toc>
    <details open>
        <summary class="gr-toc__summary">
            <span class="gr-toc__icon" aria-hidden="true">☰</span>
            <span class="gr-toc__label"><?php esc_html_e( 'विषय-सूची', 'golden-rashifal' ); ?></span>
            <span class="gr-toc__count">(<?php echo esc_html( number_format_i18n( count( $items ) ) ); ?>)</span>
        </summary>
        <ol class="gr-toc__list">
            <?php
            $current_level = 2;
            foreach ( $items as $i => $item ) :
                if ( 3 === $item['level'] && 2 === $current_level ) {
                    echo '<ol class="gr-toc__sublist">';
                    $current_level = 3;
                } elseif ( 2 === $item['level'] && 3 === $current_level ) {
                    echo '</ol>';
                    $current_level = 2;
                }
                ?>
                <li class="gr-toc__item gr-toc__item--h<?php echo (int) $item['level']; ?>">
                    <a href="#<?php echo esc_attr( $item['slug'] ); ?>" data-gr-toc-link>
                        <span class="gr-toc__num"><?php echo esc_html( number_format_i18n( $i + 1 ) ); ?>.</span>
                        <span class="gr-toc__text"><?php echo esc_html( $item['text'] ); ?></span>
                    </a>
                </li>
            <?php
            endforeach;
            if ( 3 === $current_level ) {
                echo '</ol>';
            }
            ?>
        </ol>
    </details>
</nav>
<?php

/**
 * Filter the_content to inject the same anchor IDs into the actual headings,
 * so TOC links jump to the right place. Only runs once per request.
 */
if ( ! function_exists( 'golden_rashifal_inject_heading_ids' ) ) {
    function golden_rashifal_inject_heading_ids( $content ) {
        if ( ! is_singular() ) {
            return $content;
        }
        return preg_replace_callback(
            '/<h([23])(.*?)>(.*?)<\/h\1>/iu',
            function( $m ) {
                $text = trim( wp_strip_all_tags( $m[3] ) );
                if ( '' === $text ) {
                    return $m[0];
                }
                $slug = sanitize_title( $text ) . '-' . substr( md5( $text ), 0, 4 );
                // Skip if the heading already has an id attribute.
                if ( false !== stripos( $m[2], 'id=' ) ) {
                    return $m[0];
                }
                return '<h' . $m[1] . ' id="' . esc_attr( $slug ) . '"' . $m[2] . '>' . $m[3] . '</h' . $m[1] . '>';
            },
            $content
        );
    }
    add_filter( 'the_content', 'golden_rashifal_inject_heading_ids', 9 );
}
