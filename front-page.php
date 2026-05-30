<?php
/**
 * Front page — Homepage composer.
 * Sections match reference screenshots 1-7 in exact order.
 *
 * WordPress editor content takes priority: if the front page has content
 * saved in the WP editor (Gutenberg or Classic), it is rendered INSTEAD of
 * the theme sections. Theme sections only appear when the editor is empty —
 * they act as the default fallback layout.
 *
 * To customise the homepage from WP Admin:
 *   Pages → (your front page) → Edit → add content → Update
 * The saved content will immediately replace the theme sections below.
 *
 * @package GoldenRashifal
 */

get_header();

/*
 * Check whether the administrator has written any content in the WP editor
 * for the page that is set as the static front page.
 */
$front_page_id      = (int) get_option( 'page_on_front' );
$has_editor_content = false;

if ( $front_page_id > 0 ) {
    $front_page_post    = get_post( $front_page_id );
    $has_editor_content = $front_page_post
                          && ! empty( trim( $front_page_post->post_content ) );
}
?>

<main id="primary" class="gr-main gr-main--home" role="main">

<?php if ( $has_editor_content ) : ?>
    <?php
    /*
     * ---------------------------------------------------------------
     * WORDPRESS EDITOR CONTENT — shown when the front page has content
     * edited from Pages → Edit in WP Admin.
     * The hero section is still included above the content so the page
     * retains the branded header even when editor content is present.
     * ---------------------------------------------------------------
     */
    ?>
    <?php get_template_part( 'template-parts/home/hero' ); ?>

    <div class="gr-main-content-wrap">
        <div class="gr-wrap gr-content-wrap gr-article">
            <?php
            // Set up the front-page post loop so the_content() works correctly.
            if ( $front_page_id > 0 ) {
                // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                $post = get_post( $front_page_id );
                setup_postdata( $post );
            }
            the_content();
            wp_reset_postdata();
            ?>
        </div>
    </div>

<?php else : ?>
    <?php
    /*
     * ---------------------------------------------------------------
     * DEFAULT THEME SECTIONS — shown when the front page editor is empty.
     * Edit the front page in WP Admin to replace these with your own content.
     * ---------------------------------------------------------------
     */
    ?>
    <?php get_template_part( 'template-parts/home/hero' ); ?>

    <?php get_template_part( 'template-parts/home/services' ); ?>

    <?php get_template_part( 'template-parts/home/panchang' ); ?>

    <?php get_template_part( 'template-parts/home/rashifal' ); ?>

    <?php get_template_part( 'template-parts/home/zodiac-grid' ); ?>

    <?php get_template_part( 'template-parts/home/festival' ); ?>

    <?php get_template_part( 'template-parts/home/spiritual' ); ?>

    <?php get_template_part( 'template-parts/home/kundli' ); ?>

    <?php get_template_part( 'template-parts/home/articles' ); ?>

    <?php get_template_part( 'template-parts/home/why-trust' ); ?>

    <?php get_template_part( 'template-parts/home/newsletter' ); ?>

    <?php get_template_part( 'template-parts/home/trust-signal' ); ?>

    <?php get_template_part( 'template-parts/home/faq' ); ?>

    <?php get_template_part( 'template-parts/home/social-connect' ); ?>

<?php endif; ?>

</main>

<?php
get_footer();
