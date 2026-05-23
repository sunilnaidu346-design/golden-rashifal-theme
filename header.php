<?php
/**
 * Header — Dark nav with Golden Rashifal branding, nav links, search, CTA.
 * Matches reference screenshot 7.
 *
 * @package GoldenRashifal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="theme-color" content="#1a1230" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="gr-skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'मुख्य सामग्री पर जाएँ', 'golden-rashifal' ); ?></a>

<!-- Top info bar (black) with live panchang data -->
<div class="gr-topbar">
    <div class="gr-wrap gr-topbar__inner">
        <div class="gr-topbar__left">
            <span class="gr-topbar__live">LIVE</span>
            <span class="gr-topbar__item">☀ सूर्योदय <strong><?php echo esc_html( golden_rashifal_format_minutes( golden_rashifal_sun_times()['sunrise_min'] ) ); ?></strong></span>
            <span class="gr-topbar__item">🌙 चंद्रोदय <strong>09:30 AM</strong></span>
            <span class="gr-topbar__item">⭐ नक्षत्र <strong>रोहिणी</strong></span>
            <span class="gr-topbar__item">📅 तिथि <strong>छठी</strong></span>
        </div>
        <div class="gr-topbar__right">
            <span class="gr-topbar__item">आज का चौघड़िया: लाभ 09:12-10:42 • अमृत 10:42-12:12 • शुभ 13:42-15:12</span>
        </div>
    </div>
</div>

<!-- Main header -->
<header class="gr-header" data-gr-header>
    <div class="gr-wrap gr-header__inner">

        <div class="gr-header__left">
            <button class="gr-header__burger" data-gr-toggle="menu" aria-label="<?php esc_attr_e( 'मेनू', 'golden-rashifal' ); ?>">
                <span></span><span></span><span></span>
            </button>

            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a class="gr-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <span class="gr-logo__icon">✦</span>
                    <span class="gr-logo__text">Golden <span class="gr-logo__highlight">Rashifal</span></span>
                    <span class="gr-logo__tag">प्रीमियम ज्योतिष · पंचांग · राशिफल</span>
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
                    'depth'          => 2,
                ) );
            } else {
                echo '<ul class="gr-nav__list">';
                echo '<li><a href="' . esc_url( home_url( '/rashifal/' ) ) . '">राशिफल</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/panchang/' ) ) . '">पंचांग ▾</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/choghadiya/' ) ) . '">चौघड़िया ▾</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/muhurat/' ) ) . '">मुहूर्त ▾</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/festival/' ) ) . '">त्योहार लेख</a></li>';
                echo '</ul>';
            }
            ?>
        </nav>

        <div class="gr-header__right">
            <button class="gr-header__search-btn" data-gr-toggle="search" aria-label="<?php esc_attr_e( 'खोजें', 'golden-rashifal' ); ?>">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
            </button>
            <a class="gr-header__cta" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">आज का राशिफल</a>
        </div>

    </div>
</header>

<!-- Mobile drawer -->
<div class="gr-mobile" id="gr-mobile-menu" data-gr-mobile aria-hidden="true">
    <div class="gr-mobile__panel">
        <button class="gr-mobile__close" data-gr-toggle="menu" aria-label="<?php esc_attr_e( 'बंद', 'golden-rashifal' ); ?>">×</button>
        <a class="gr-logo gr-logo--mobile" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <span class="gr-logo__icon">✦</span> Golden <span class="gr-logo__highlight">Rashifal</span>
        </a>
        <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'gr-mobile__list', 'depth' => 2 ) );
        }
        ?>
    </div>
</div>

<!-- Search popup -->
<div class="gr-search-pop" id="gr-search-popup" data-gr-search aria-hidden="true">
    <div class="gr-search-pop__panel">
        <button class="gr-search-pop__close" data-gr-toggle="search" aria-label="<?php esc_attr_e( 'बंद', 'golden-rashifal' ); ?>">×</button>
        <h2><?php esc_html_e( 'क्या खोज रहे हैं?', 'golden-rashifal' ); ?></h2>
        <?php get_search_form(); ?>
    </div>
</div>

<?php if ( ! is_front_page() ) : ?>
<div class="gr-breadcrumbs-wrap">
    <div class="gr-wrap"><?php golden_rashifal_breadcrumbs(); ?></div>
</div>
<?php endif; ?>
