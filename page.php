<?php
/**
 * Default page template.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
    <div class="gr-content-wrap">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'gr-page' ); ?>>
                <header class="gr-page__head">
                    <h1 class="gr-page__title"><?php the_title(); ?></h1>
                </header>
                <div class="gr-page__body gr-article__body">
                    <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<nav class="gr-pagelinks">', 'after' => '</nav>' ) ); ?>
                </div>
            </article>
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
