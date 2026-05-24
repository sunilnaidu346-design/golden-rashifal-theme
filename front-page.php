<?php
/**
 * Front page — premium homepage.
 * Each section is a dedicated template part for easy reordering.
 * NO video/shorts section.
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
    if ( get_theme_mod( 'gr_ad_home_mid', '' ) ) {
        echo '<div class="gr-wrap gr-section gr-section--ad">';
        golden_rashifal_ad( 'gr_ad_home_mid', __( 'विज्ञापन', 'golden-rashifal' ) );
        echo '</div>';
    }
    ?>

    <?php get_template_part( 'template-parts/home/trending' ); ?>

    <?php get_template_part( 'template-parts/home/countdown' ); ?>

    <?php get_template_part( 'template-parts/home/newsletter' ); ?>

</main>

<?php
get_footer();
