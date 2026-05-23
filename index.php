<?php
/**
 * Default fallback template.
 *
 * WordPress lands here when no more specific template matches. The theme keeps
 * a single, readable layout for archives and the blog page so users always
 * see a clean, AdSense-friendly listing.
 *
 * @package GoldenRashifal
 */

get_header(); ?>

<main id="primary" class="gr-main gr-main--archive" role="main">
    <div class="gr-wrap gr-grid">

        <section class="gr-col-main">

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header class="gr-page-head">
                    <h1 class="gr-page-title"><?php single_post_title(); ?></h1>
                    <p class="gr-page-sub"><?php esc_html_e( 'ताज़ा राशिफल, पंचांग और आध्यात्मिक लेख — एक ही जगह।', 'golden-rashifal' ); ?></p>
                </header>
            <?php endif; ?>

            <?php if ( have_posts() ) : ?>

                <div class="gr-post-list">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', 'card' );
                    endwhile;
                    ?>
                </div>

                <?php
                the_posts_pagination(
                    array(
                        'mid_size'  => 1,
                        'prev_text' => __( '&laquo; पिछला', 'golden-rashifal' ),
                        'next_text' => __( 'अगला &raquo;', 'golden-rashifal' ),
                    )
                );
                ?>

            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>

        </section>

        <?php get_sidebar(); ?>

    </div>
</main>

<?php
get_footer();
