<?php
/**
 * Single — Table of Contents built from H2/H3.
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

$h2_count = count( array_filter( $matches, function ( $m ) { return '2' === $m[1]; } ) );
if ( $h2_count < 3 ) {
    return;
}

$items = array();
foreach ( $matches as $m ) {
    $text = trim( wp_strip_all_tags( $m[3] ) );
    if ( '' === $text ) {
        continue;
    }
    $items[] = array(
        'level' => (int) $m[1],
        'text'  => $text,
        'slug'  => sanitize_title( $text ) . '-' . substr( md5( $text ), 0, 4 ),
    );
}
if ( empty( $items ) ) {
    return;
}
?>
<nav class="gr-toc" aria-label="<?php esc_attr_e( 'विषय-सूची', 'golden-rashifal' ); ?>" data-gr-toc>
    <details open>
        <summary class="gr-toc__summary"><?php esc_html_e( 'विषय-सूची', 'golden-rashifal' ); ?> (<?php echo esc_html( count( $items ) ); ?>)</summary>
        <ol class="gr-toc__list">
            <?php foreach ( $items as $i => $item ) : ?>
            <li class="gr-toc__item gr-toc__item--h<?php echo $item['level']; ?>">
                <a href="#<?php echo esc_attr( $item['slug'] ); ?>" data-gr-toc-link>
                    <span class="gr-toc__num"><?php echo esc_html( $i + 1 ); ?>.</span>
                    <?php echo esc_html( $item['text'] ); ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ol>
    </details>
</nav>
<?php

/* Inject heading IDs into post content */
if ( ! function_exists( 'golden_rashifal_inject_heading_ids' ) ) {
    function golden_rashifal_inject_heading_ids( $content ) {
        if ( ! is_singular() ) {
            return $content;
        }
        return preg_replace_callback(
            '/<h([23])(.*?)>(.*?)<\/h\1>/iu',
            function ( $m ) {
                $text = trim( wp_strip_all_tags( $m[3] ) );
                if ( '' === $text || false !== stripos( $m[2], 'id=' ) ) {
                    return $m[0];
                }
                $slug = sanitize_title( $text ) . '-' . substr( md5( $text ), 0, 4 );
                return '<h' . $m[1] . ' id="' . esc_attr( $slug ) . '"' . $m[2] . '>' . $m[3] . '</h' . $m[1] . '>';
            },
            $content
        );
    }
    add_filter( 'the_content', 'golden_rashifal_inject_heading_ids', 9 );
}
