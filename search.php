<?php
/**
 * Search results.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--search" role="main">
    <div class="gr-wrap gr-grid">

        <section class="gr-col-main">

            <header class="gr-search-head">
                <span class="gr-search-head__pre"><?php esc_html_e( 'खोज परिणाम', 'golden-rashifal' ); ?></span>
                <h1 class="gr-search-head__title">
                    <?php
                    /* translators: %s: search query */
                    printf( esc_html__( '“%s” के लिए परिणाम', 'golden-rashifal' ), esc_html( get_search_query() ) );
                    ?>
                </h1>
                <p class="gr-search-head__count">
                    <?php
                    global $wp_query;
                    $found = (int) $wp_query->found_posts;
                    /* translators: %s: number of results */
                    printf( esc_html( _n( '%s लेख मिला', '%s लेख मिले', $found, 'golden-rashifal' ) ), esc_html( number_format_i18n( $found ) ) );
                    ?>
                </p>
                <?php get_search_form(); ?>
            </header>

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
