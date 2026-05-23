<?php
/**
 * Author archive.
 *
 * @package GoldenRashifal
 */

get_header();
$author = get_queried_object();
$bio    = $author ? get_the_author_meta( 'description', $author->ID ) : '';
?>

<main id="primary" class="gr-main" role="main">
    <div class="gr-wrap gr-grid">
        <section class="gr-col-main">
            <header class="gr-author-head">
                <div>
                    <?php echo get_avatar( $author ? $author->ID : 0, 80, '', '', array( 'class' => 'gr-author-head__img' ) ); ?>
                </div>
                <div>
                    <span class="gr-author-head__pre"><?php esc_html_e( 'लेखक', 'golden-rashifal' ); ?></span>
                    <h1 class="gr-author-head__name"><?php echo esc_html( $author ? $author->display_name : '' ); ?></h1>
                    <?php if ( $bio ) : ?>
                        <p class="gr-author-head__bio"><?php echo esc_html( $bio ); ?></p>
                    <?php endif; ?>
                </div>
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
