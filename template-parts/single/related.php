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
    <div class="gr-related__head">
        <h3 class="gr-related__title"><?php esc_html_e( 'संबंधित लेख', 'golden-rashifal' ); ?></h3>
        <span class="gr-related__count"><?php echo count( $related ); ?> <?php esc_html_e( 'लेख', 'golden-rashifal' ); ?></span>
    </div>
    <div class="gr-related__grid">
        <?php foreach ( $related as $rel ) :
            $rel_cats = get_the_category( $rel->ID );
            $rel_cat  = ! empty( $rel_cats ) ? $rel_cats[0]->name : '';
        ?>
        <a class="gr-related__card" href="<?php echo esc_url( get_permalink( $rel ) ); ?>">
            <div class="gr-related__thumb">
                <?php if ( has_post_thumbnail( $rel ) ) : ?>
                    <?php echo get_the_post_thumbnail( $rel, 'medium', array( 'loading' => 'lazy', 'decoding' => 'async' ) ); ?>
                <?php else : ?>
                    <div class="gr-related__thumb-placeholder">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                <?php endif; ?>
                <?php if ( $rel_cat ) : ?>
                    <span class="gr-related__cat-badge"><?php echo esc_html( $rel_cat ); ?></span>
                <?php endif; ?>
            </div>
            <div class="gr-related__info">
                <span class="gr-related__card-title"><?php echo esc_html( get_the_title( $rel ) ); ?></span>
                <div class="gr-related__card-footer">
                    <span class="gr-related__card-date">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        <?php echo esc_html( get_the_date( '', $rel ) ); ?>
                    </span>
                    <span class="gr-related__card-read"><?php esc_html_e( 'पढ़ें →', 'golden-rashifal' ); ?></span>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</section>
