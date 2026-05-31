<?php
/**
 * Homepage — Popular / Latest articles grid.
 * Pulls real published posts from WordPress — fully reflects whatever is
 * published via WP Admin → Posts.  No hardcoded demo content.
 *
 * @package GoldenRashifal
 */

$gr_articles_query = new WP_Query( array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 6,
    'ignore_sticky_posts' => true,
    'no_found_rows'       => true,
    'orderby'             => 'date',
    'order'               => 'DESC',
) );

if ( ! $gr_articles_query->have_posts() ) {
    wp_reset_postdata();
    return;
}

/*
 * Gradient palette cycles through cards so even posts without thumbnails
 * look visually polished.
 */
$gr_gradients = array(
    'linear-gradient(135deg,#7c3aed,#4f46e5)',
    'linear-gradient(135deg,#4f46e5,#7c3aed)',
    'linear-gradient(135deg,#10b981,#059669)',
    'linear-gradient(135deg,#ec4899,#db2777)',
    'linear-gradient(135deg,#7c3aed,#9333ea)',
    'linear-gradient(135deg,#1f2937,#374151)',
);
?>
<section class="gr-section gr-section--articles">
    <div class="gr-wrap">

        <header class="gr-section__head">
            <div>
                <span class="gr-section__badge">✨ ज्योतिष लेख</span>
                <h2 class="gr-section__title">लोकप्रिय <span class="gr-text--red">लेख</span></h2>
            </div>
            <a class="gr-section__more" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'सभी लेख देखें >', 'golden-rashifal' ); ?></a>
        </header>

        <div class="gr-articles-grid">
            <?php
            $gr_i = 0;
            while ( $gr_articles_query->have_posts() ) :
                $gr_articles_query->the_post();

                $gr_cats     = get_the_category();
                $gr_cat_name = ! empty( $gr_cats ) ? $gr_cats[0]->name : '';
                $gr_gradient = $gr_gradients[ $gr_i % count( $gr_gradients ) ];
                $gr_is_feat  = ( 0 === $gr_i );

                // Reading-time estimate.
                $gr_word_count = str_word_count( wp_strip_all_tags( get_the_content() ) );
                $gr_read_min   = max( 1, (int) ceil( $gr_word_count / 200 ) );
                ?>
                <article class="gr-article-card <?php echo $gr_is_feat ? 'gr-article-card--featured' : ''; ?>">
                    <a href="<?php the_permalink(); ?>" class="gr-article-card__link" aria-label="<?php the_title_attribute(); ?>">
                        <div class="gr-article-card__thumb" style="background:<?php echo esc_attr( $gr_gradient ); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'gr-card', array( 'loading' => 'lazy', 'decoding' => 'async', 'class' => 'gr-article-card__img' ) ); ?>
                            <?php endif; ?>
                            <?php if ( $gr_cat_name ) : ?>
                                <span class="gr-article-card__cat"><?php echo esc_html( $gr_cat_name ); ?></span>
                            <?php endif; ?>
                            <?php if ( $gr_is_feat ) : ?>
                                <span class="gr-article-card__status"><?php esc_html_e( 'ट्रेंडिंग', 'golden-rashifal' ); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="gr-article-card__body">
                            <h3 class="gr-article-card__title"><?php the_title(); ?></h3>
                            <div class="gr-article-card__meta">
                                <span>⏱ <?php echo esc_html( $gr_read_min ); ?> <?php esc_html_e( 'मिनट', 'golden-rashifal' ); ?></span>
                                <span><?php echo esc_html( get_the_date() ); ?></span>
                            </div>
                        </div>
                    </a>
                </article>
                <?php
                $gr_i++;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

    </div>
</section>
