<?php
/**
 * Front page (Homepage).
 *
 * Each homepage section is its own template part so site editors can
 * reorder, hide, or replace any block without touching surrounding code.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--home" role="main">

    <?php get_template_part( 'template-parts/home/hero' ); ?>

    <?php get_template_part( 'template-parts/home/live-cards' ); ?>

    <?php get_template_part( 'template-parts/home/zodiac-grid' ); ?>

    <?php
    // Mid-page ad slot (optional, set in Customizer).
    if ( get_theme_mod( 'gr_ad_home_mid', '' ) ) :
        ?>
        <div class="gr-wrap gr-section gr-section--ad">
            <?php golden_rashifal_ad( 'gr_ad_home_mid', __( 'विज्ञापन', 'golden-rashifal' ) ); ?>
        </div>
        <?php
    endif;
    ?>

    <?php get_template_part( 'template-parts/home/trending' ); ?>

    <?php get_template_part( 'template-parts/home/countdown' ); ?>

    <?php get_template_part( 'template-parts/home/video' ); ?>

</main>

<?php
get_footer();
