<?php
/**
 * Site header — sticky nav, logo, search, mobile drawer.
 * Clean, premium, minimal. No topbar clutter.
 *
 * @package GoldenRashifal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="gr-skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'मुख्य सामग्री पर जाएँ', 'golden-rashifal' ); ?></a>

<header class="gr-header" data-gr-header>
    <div class="gr-wrap gr-header__inner">

        <div class="gr-header__left">
            <button class="gr-header__burger" data-gr-toggle="menu" aria-controls="gr-mobile-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'मेनू', 'golden-rashifal' ); ?>">
                <span></span><span></span><span></span>
            </button>

            <div class="gr-header__brand">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a class="gr-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <span class="gr-logo__mark">✦</span> <?php bloginfo( 'name' ); ?>
                    </a>
                <?php endif; ?>
            </div>

            <nav class="gr-nav" aria-label="<?php esc_attr_e( 'मुख्य मेनू', 'golden-rashifal' ); ?>">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'gr-nav__list',
                        'depth'          => 3,
                    ) );
                } else {
                    echo '<ul class="gr-nav__list">';
                    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'होम', 'golden-rashifal' ) . '</a></li>';
                    echo '<li><a href="' . esc_url( home_url( '/rashifal/' ) ) . '">' . esc_html__( 'राशिफल', 'golden-rashifal' ) . '</a></li>';
                    echo '<li><a href="' . esc_url( home_url( '/panchang/' ) ) . '">' . esc_html__( 'पंचांग', 'golden-rashifal' ) . '</a></li>';
                    echo '<li><a href="' . esc_url( home_url( '/choghadiya/' ) ) . '">' . esc_html__( 'चौघड़िया', 'golden-rashifal' ) . '</a></li>';
                    echo '<li><a href="' . esc_url( home_url( '/muhurat/' ) ) . '">' . esc_html__( 'मुहूर्त', 'golden-rashifal' ) . '</a></li>';
                    echo '<li><a href="' . esc_url( home_url( '/festival/' ) ) . '">' . esc_html__( 'त्योहार', 'golden-rashifal' ) . '</a></li>';
                    echo '</ul>';
                }
                ?>
            </nav>
        </div>

        <div class="gr-header__right">
            <button class="gr-header__search-btn" data-gr-toggle="search" aria-controls="gr-search-popup" aria-expanded="false" aria-label="<?php esc_attr_e( 'खोजें', 'golden-rashifal' ); ?>">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
            </button>
        </div>

    </div>
</header>

<!-- Mobile drawer -->
<div class="gr-mobile" id="gr-mobile-menu" data-gr-mobile aria-hidden="true">
    <div class="gr-mobile__panel">
        <button class="gr-mobile__close" data-gr-toggle="menu" aria-label="<?php esc_attr_e( 'बंद करें', 'golden-rashifal' ); ?>">×</button>
        <div class="gr-mobile__brand">
            <a class="gr-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span class="gr-logo__mark">✦</span> <?php bloginfo( 'name' ); ?>
            </a>
        </div>
        <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'gr-mobile__list',
                'depth'          => 2,
            ) );
        }
        ?>
    </div>
</div>

<!-- Search popup -->
<div class="gr-search-pop" id="gr-search-popup" data-gr-search aria-hidden="true">
    <div class="gr-search-pop__panel">
        <button class="gr-search-pop__close" data-gr-toggle="search" aria-label="<?php esc_attr_e( 'बंद करें', 'golden-rashifal' ); ?>">×</button>
        <h2 class="gr-search-pop__title"><?php esc_html_e( 'क्या खोज रहे हैं?', 'golden-rashifal' ); ?></h2>
        <p class="gr-search-pop__hint"><?php esc_html_e( 'राशि, त्योहार, पंचांग या कोई लेख — यहाँ टाइप करें।', 'golden-rashifal' ); ?></p>
        <?php get_search_form(); ?>
    </div>
</div>

<?php if ( ! is_front_page() ) : ?>
<div class="gr-breadcrumbs-wrap">
    <div class="gr-wrap">
        <?php golden_rashifal_breadcrumbs(); ?>
    </div>
</div>
<?php endif; ?>
