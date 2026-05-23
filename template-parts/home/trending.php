<?php
/**
 * Homepage — Trending Spiritual Articles.
 *
 * Pulls latest 6 published posts. Card layout has clear breathing room so
 * readers' eyes (and AdSense) don't feel crowded.
 *
 * @package GoldenRashifal
 */

$query = new WP_Query(
    array(
        'post_type'           => 'post',
        'posts_per_page'      => 6,
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    )
);

if ( ! $query->have_posts() ) {
    return;
}
?>
<section class="gr-section gr-section--trending" aria-label="<?php esc_attr_e( 'ट्रेंडिंग आध्यात्मिक लेख', 'golden-rashifal' ); ?>">
    <div class="gr-wrap">
        <header class="gr-section__head">
            <h2 class="gr-section__title"><?php esc_html_e( 'ट्रेंडिंग आध्यात्मिक लेख', 'golden-rashifal' ); ?></h2>
            <p class="gr-section__sub"><?php esc_html_e( 'आज सबसे ज़्यादा पढ़े जा रहे लेख — सरल भाषा, संतुलित जानकारी।', 'golden-rashifal' ); ?></p>
            <a class="gr-section__more" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'सभी लेख', 'golden-rashifal' ); ?> →</a>
        </header>

        <div class="gr-trend-grid">
            <?php
            $i = 0;
            while ( $query->have_posts() ) :
                $query->the_post();
                $featured = ( 0 === $i );
                ?>
                <article class="gr-tcard <?php echo $featured ? 'gr-tcard--feature' : ''; ?>">
                    <a class="gr-tcard__media" href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                        <?php
                        if ( has_post_thumbnail() ) {
                            golden_rashifal_thumbnail( $featured ? 'gr-card' : 'gr-thumb' );
                        } else {
                            echo '<div class="gr-tcard__placeholder" aria-hidden="true">✦</div>';
                        }
                        ?>
                    </a>
                    <div class="gr-tcard__body">
                        <?php
                        $cats = get_the_category();
                        if ( ! empty( $cats ) ) :
                            ?>
                            <a class="gr-tcard__cat" href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"><?php echo esc_html( $cats[0]->name ); ?></a>
                        <?php endif; ?>

                        <h3 class="gr-tcard__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>

                        <?php if ( $featured ) : ?>
                            <p class="gr-tcard__excerpt"><?php echo esc_html( wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 28, '…' ) ); ?></p>
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
