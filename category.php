<?php
/**
 * Category archive — same shell as archive.php but adds a category-specific
 * intro line so readers immediately understand the topic.
 *
 * @package GoldenRashifal
 */

get_header();

$term = get_queried_object();
?>

<main id="primary" class="gr-main gr-main--archive" role="main">
    <div class="gr-wrap gr-grid">

        <section class="gr-col-main">

            <header class="gr-archive__head gr-archive__head--cat">
                <span class="gr-archive__pre"><?php esc_html_e( 'श्रेणी', 'golden-rashifal' ); ?></span>
                <h1 class="gr-archive__title"><?php echo esc_html( single_cat_title( '', false ) ); ?></h1>
                <?php if ( $term && ! empty( $term->description ) ) : ?>
                    <p class="gr-archive__desc"><?php echo esc_html( wp_strip_all_tags( $term->description ) ); ?></p>
                <?php else : ?>
                    <p class="gr-archive__desc">
                        <?php
                        /* translators: %s: category name */
                        printf( esc_html__( '%s से जुड़े सभी लेख — सरल भाषा में और संतुलित दृष्टिकोण के साथ।', 'golden-rashifal' ), esc_html( single_cat_title( '', false ) ) );
                        ?>
                    </p>
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
