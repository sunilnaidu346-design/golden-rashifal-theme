<?php
/**
 * Search results.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
    <div class="gr-wrap gr-grid">
        <section class="gr-col-main">
            <header class="gr-search-head">
                <span class="gr-search-head__pre"><?php esc_html_e( 'खोज परिणाम', 'golden-rashifal' ); ?></span>
                <h1 class="gr-search-head__title"><?php printf( esc_html__( '"%s" के लिए', 'golden-rashifal' ), esc_html( get_search_query() ) ); ?></h1>
                <?php global $wp_query; ?>
                <p class="gr-search-head__count"><?php printf( esc_html( _n( '%s लेख मिला', '%s लेख मिले', $wp_query->found_posts, 'golden-rashifal' ) ), number_format_i18n( $wp_query->found_posts ) ); ?></p>
                <?php get_search_form(); ?>
            </header>

            <?php if ( have_posts() ) : ?>
                <div class="gr-post-list">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/content', 'card' ); ?>
                    <?php endwhile; ?>
                </div>
                <?php the_posts_pagination( array( 'mid_size' => 1, 'prev_text' => '&laquo;', 'next_text' => '&raquo;' ) ); ?>
            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
        </section>
        <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>
