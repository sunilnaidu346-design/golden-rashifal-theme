<?php
/**
 * Category archive.
 *
 * @package GoldenRashifal
 */

get_header();
$term = get_queried_object();
?>

<main id="primary" class="gr-main" role="main">
    <div class="gr-wrap gr-grid">
        <section class="gr-col-main">
            <header class="gr-archive__head">
                <span class="gr-archive__pre"><?php esc_html_e( 'श्रेणी', 'golden-rashifal' ); ?></span>
                <h1 class="gr-archive__title"><?php single_cat_title(); ?></h1>
                <?php if ( $term && $term->description ) : ?>
                    <p class="gr-archive__desc"><?php echo esc_html( $term->description ); ?></p>
                <?php endif; ?>
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
