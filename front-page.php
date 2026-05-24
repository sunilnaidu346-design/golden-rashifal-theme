<?php
/**
 * Front page — Homepage composer.
 * Sections match reference screenshots 1-7 in exact order.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--home" role="main">

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

    <?php get_template_part( 'template-parts/home/editorial-trust' ); ?>

    <?php get_template_part( 'template-parts/home/newsletter' ); ?>

    <?php get_template_part( 'template-parts/home/reader-benefits' ); ?>

</main>

<?php
get_footer();
