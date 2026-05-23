<?php
/**
 * Homepage — Trending articles grid.
 *
 * @package GoldenRashifal
 */

$query = new WP_Query( array(
    'post_type'           => 'post',
    'posts_per_page'      => 5,
    'ignore_sticky_posts' => true,
    'no_found_rows'       => true,
) );

if ( ! $query->have_posts() ) {
    return;
}
?>
<section class="gr-section">
    <div class="gr-wrap">
        <div class="gr-section__header">
            <span class="gr-section__eyebrow"><?php esc_html_e( 'ट्रेंडिंग', 'golden-rashifal' ); ?></span>
            <h2 class="gr-section__title"><?php esc_html_e( 'लोकप्रिय आध्यात्मिक लेख', 'golden-rashifal' ); ?></h2>
            <p class="gr-section__desc"><?php esc_html_e( 'पाठकों को ये लेख इस समय सबसे उपयोगी लग रहे हैं।', 'golden-rashifal' ); ?></p>
        </div>

        <div class="gr-trend-grid">
            <?php
            $i = 0;
            while ( $query->have_posts() ) :
                $query->the_post();
                $featured = ( 0 === $i );
                ?>
                <article class="gr-tcard <?php echo $featured ? 'gr-tcard--featured' : ''; ?>">
                    <a class="gr-tcard__media" href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php golden_rashifal_thumbnail( $featured ? 'gr-card' : 'gr-thumb' ); ?>
                        <?php else : ?>
                            <div class="gr-tcard__placeholder">✦</div>
                        <?php endif; ?>
                    </a>
                    <div class="gr-tcard__body">
                        <?php
                        $cats = get_the_category();
                        if ( ! empty( $cats ) ) :
                            ?>
                            <a class="gr-tcard__cat" href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"><?php echo esc_html( $cats[0]->name ); ?></a>
                        <?php endif; ?>
                        <h3 class="gr-tcard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php if ( $featured ) : ?>
                            <p class="gr-tcard__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24, '…' ) ); ?></p>
                        <?php endif; ?>
                        <div class="gr-tcard__meta">
                            <span><?php echo esc_html( get_the_date() ); ?></span>
                            <span class="gr-meta__sep">·</span>
                            <span><?php echo esc_html( golden_rashifal_reading_time() ); ?></span>
                        </div>
                    </div>
                </article>
                <?php
                $i++;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
