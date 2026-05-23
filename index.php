<?php
/**
 * Default fallback template.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
    <div class="gr-wrap gr-grid">
        <section class="gr-col-main">
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header class="gr-archive__head">
                    <h1 class="gr-archive__title"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

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
