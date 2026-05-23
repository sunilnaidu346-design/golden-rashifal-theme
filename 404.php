<?php
/**
 * 404 — page not found.
 *
 * Calm, helpful layout: a soft Hindi line, search form, trending posts,
 * and a return-home button.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--404" role="main">
    <div class="gr-wrap gr-404">

        <div class="gr-404__top">
            <div class="gr-404__icon" aria-hidden="true">
                <svg viewBox="0 0 120 120" focusable="false">
                    <circle cx="60" cy="60" r="56" fill="#FFF8E2" stroke="#D4AF37" stroke-width="2"/>
                    <text x="60" y="74" text-anchor="middle" font-family="Noto Sans Devanagari, serif" font-size="40" font-weight="700" fill="#A8860C">ॐ</text>
                </svg>
            </div>

            <span class="gr-404__pre"><?php esc_html_e( '404 — पेज नहीं मिला', 'golden-rashifal' ); ?></span>
            <h1 class="gr-404__title"><?php esc_html_e( 'जो खोज रहे थे, वह यहाँ नहीं मिला', 'golden-rashifal' ); ?></h1>
            <p class="gr-404__quote">
                <em><?php esc_html_e( '“कभी-कभी रास्ता थोड़ा बदल जाता है — पर मंज़िल वहीं रहती है।”', 'golden-rashifal' ); ?></em>
            </p>
            <p class="gr-404__text">
                <?php esc_html_e( 'पेज शायद हटा दिया गया हो या लिंक बदल गया हो। आप नीचे खोज सकते हैं या होम पर वापस जा सकते हैं।', 'golden-rashifal' ); ?>
            </p>

            <div class="gr-404__cta">
                <a class="gr-btn gr-btn--gold" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php esc_html_e( 'होम पर जाएँ', 'golden-rashifal' ); ?>
                </a>
                <a class="gr-btn gr-btn--ghost" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">
                    <?php esc_html_e( 'आज का राशिफल पढ़ें', 'golden-rashifal' ); ?>
                </a>
            </div>

            <div class="gr-404__search">
                <?php get_search_form(); ?>
            </div>
        </div>

        <section class="gr-404__trending" aria-label="<?php esc_attr_e( 'ट्रेंडिंग लेख', 'golden-rashifal' ); ?>">
            <h2 class="gr-404__trending-title"><?php esc_html_e( 'पाठकों को ये लेख अभी पसंद आ रहे हैं', 'golden-rashifal' ); ?></h2>
            <?php
            $trending = new WP_Query(
                array(
                    'post_type'           => 'post',
                    'posts_per_page'      => 4,
                    'ignore_sticky_posts' => true,
                    'no_found_rows'       => true,
                    'meta_key'            => '_gr_views',
                    'orderby'             => 'meta_value_num date',
                    'order'               => 'DESC',
                )
            );
            if ( ! $trending->have_posts() ) {
                $trending = new WP_Query(
                    array(
                        'post_type'           => 'post',
                        'posts_per_page'      => 4,
                        'ignore_sticky_posts' => true,
                        'no_found_rows'       => true,
                    )
                );
            }
            if ( $trending->have_posts() ) :
                ?>
                <div class="gr-related__grid">
                    <?php while ( $trending->have_posts() ) : $trending->the_post(); ?>
                        <article class="gr-rcard">
                            <a class="gr-rcard__media" href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php golden_rashifal_thumbnail( 'gr-thumb', array( 'class' => 'gr-rcard__img' ) ); ?>
                                <?php else : ?>
                                    <div class="gr-rcard__placeholder" aria-hidden="true">✦</div>
                                <?php endif; ?>
                            </a>
                            <div class="gr-rcard__body">
                                <h3 class="gr-rcard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <span class="gr-rcard__date"><?php echo esc_html( get_the_date() ); ?></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                <?php
                wp_reset_postdata();
            endif;
            ?>
        </section>

    </div>
</main>

<?php
get_footer();
