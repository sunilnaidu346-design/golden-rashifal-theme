<?php
/**
 * Generic archive template.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
    <div class="gr-wrap gr-grid">
        <section class="gr-col-main">
            <header class="gr-archive__head">
                <span class="gr-archive__pre"><?php esc_html_e( 'संग्रह', 'golden-rashifal' ); ?></span>
                <h1 class="gr-archive__title"><?php the_archive_title(); ?></h1>
                <?php $desc = get_the_archive_description(); if ( $desc ) : ?>
                    <div class="gr-archive__desc"><?php echo wp_kses_post( $desc ); ?></div>
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
