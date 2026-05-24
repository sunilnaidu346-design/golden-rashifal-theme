<?php
/**
 * Single — Related posts (premium card layout).
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

if ( count( $related ) < 2 ) {
    $extra = get_posts( array(
        'post_type'           => 'post',
        'posts_per_page'      => 4 - count( $related ),
        'post__not_in'        => array_merge( array( $current_id ), wp_list_pluck( $related, 'ID' ) ),
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    ) );
    $related = array_merge( $related, $extra );
}

if ( empty( $related ) ) {
    return;
}
?>
<section class="gr-related" aria-label="<?php esc_attr_e( 'संबंधित लेख', 'golden-rashifal' ); ?>">
    <h3 class="gr-related__title"><?php esc_html_e( 'संबंधित लेख', 'golden-rashifal' ); ?></h3>
    <div class="gr-related__grid">
        <?php foreach ( $related as $rel ) : ?>
        <a class="gr-related__card" href="<?php echo esc_url( get_permalink( $rel ) ); ?>">
            <div class="gr-related__thumb">
                <?php if ( has_post_thumbnail( $rel ) ) : ?>
                    <?php echo get_the_post_thumbnail( $rel, 'thumbnail', array( 'loading' => 'lazy' ) ); ?>
                <?php endif; ?>
            </div>
            <div class="gr-related__info">
                <span class="gr-related__card-title"><?php echo esc_html( get_the_title( $rel ) ); ?></span>
                <span class="gr-related__card-meta"><?php echo esc_html( get_the_date( '', $rel ) ); ?></span>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</section>
