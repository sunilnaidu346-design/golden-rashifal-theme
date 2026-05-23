<?php
/**
 * Generic archive template — date, tag, custom taxonomy.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--archive" role="main">
    <div class="gr-wrap gr-grid">

        <section class="gr-col-main">

            <header class="gr-archive__head">
                <h1 class="gr-archive__title"><?php the_archive_title(); ?></h1>
                <?php
                $desc = get_the_archive_description();
                if ( $desc ) :
                    ?>
                    <div class="gr-archive__desc"><?php echo wp_kses_post( $desc ); ?></div>
                <?php endif; ?>
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
