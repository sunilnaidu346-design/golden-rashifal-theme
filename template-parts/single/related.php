<?php
/**
 * Single — Related posts.
 *
 * Strategy:
 *   1. Try same category posts (excluding current).
 *   2. If fewer than 3 found, top up with latest posts.
 *
 * @package GoldenRashifal
 */

$current_id = get_the_ID();
$cats       = wp_get_post_categories( $current_id );

$args = array(
    'post_type'           => 'post',
    'posts_per_page'      => 4,
    'post__not_in'        => array( $current_id ),
    'ignore_sticky_posts' => true,
    'no_found_rows'       => true,
);

if ( ! empty( $cats ) ) {
    $args['category__in'] = $cats;
}

$related = get_posts( $args );

if ( count( $related ) < 3 ) {
    $extra = get_posts(
        array(
            'post_type'           => 'post',
            'posts_per_page'      => 4 - count( $related ),
            'post__not_in'        => array_merge( array( $current_id ), wp_list_pluck( $related, 'ID' ) ),
            'ignore_sticky_posts' => true,
            'no_found_rows'       => true,
        )
    );
    $related = array_merge( $related, $extra );
}

if ( empty( $related ) ) {
    return;
}
?>
<section class="gr-related" aria-label="<?php esc_attr_e( 'संबंधित लेख', 'golden-rashifal' ); ?>">
    <header class="gr-related__head">
        <h3 class="gr-related__title"><?php esc_html_e( 'और पढ़ें — संबंधित लेख', 'golden-rashifal' ); ?></h3>
        <p class="gr-related__sub"><?php esc_html_e( 'इसी विषय पर पाठकों को उपयोगी लगने वाले कुछ और लेख।', 'golden-rashifal' ); ?></p>
    </header>
    <div class="gr-related__grid">
        <?php foreach ( $related as $rel ) : ?>
            <article class="gr-rcard">
                <a class="gr-rcard__media" href="<?php echo esc_url( get_permalink( $rel ) ); ?>" aria-label="<?php echo esc_attr( get_the_title( $rel ) ); ?>">
                    <?php
                    if ( has_post_thumbnail( $rel ) ) {
                        echo get_the_post_thumbnail( $rel, 'gr-thumb', array( 'loading' => 'lazy', 'decoding' => 'async', 'class' => 'gr-rcard__img' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    } else {
                        echo '<div class="gr-rcard__placeholder" aria-hidden="true">✦</div>';
                    }
                    ?>
                </a>
                <div class="gr-rcard__body">
                    <h4 class="gr-rcard__title">
                        <a href="<?php echo esc_url( get_permalink( $rel ) ); ?>"><?php echo esc_html( get_the_title( $rel ) ); ?></a>
                    </h4>
                    <span class="gr-rcard__date"><?php echo esc_html( get_the_date( '', $rel ) ); ?></span>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
