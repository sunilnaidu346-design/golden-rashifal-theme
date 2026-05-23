<?php
/**
 * Site header — top bar, sticky brand row, primary nav, search popup, breadcrumbs.
 *
 * @package GoldenRashifal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="theme-color" content="#FFFFFF" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="gr-skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'मुख्य सामग्री पर जाएँ', 'golden-rashifal' ); ?></a>

<?php if ( get_theme_mod( 'gr_show_topbar', true ) ) : ?>
<div class="gr-topbar" role="complementary" aria-label="<?php esc_attr_e( 'टॉप बार', 'golden-rashifal' ); ?>">
    <div class="gr-wrap gr-topbar__inner">

        <div class="gr-topbar__left">
            <span class="gr-topbar__date" aria-live="polite">
                <svg class="gr-icon gr-icon--sm" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M7 3v3M17 3v3M3 9h18M5 6h14a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <?php echo esc_html( golden_rashifal_today_string() ); ?>
            </span>

            <?php if ( get_theme_mod( 'gr_show_live_clock', true ) ) : ?>
                <span class="gr-topbar__clock" data-gr-clock aria-label="<?php esc_attr_e( 'लाइव समय', 'golden-rashifal' ); ?>">
                    <svg class="gr-icon gr-icon--sm" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.6"/><path d="M12 7v5l3 2" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
                    <span data-gr-clock-time>--:--</span>
                </span>
            <?php endif; ?>
        </div>

        <div class="gr-topbar__right">
            <?php
            $socials = array(
                'facebook'  => 'M13 22v-8h3l1-4h-4V8c0-1 .3-2 2-2h2V2h-3c-3 0-4 2-4 4v4H7v4h3v8h3z',
                'instagram' => 'M7 3h10a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4zm5 5a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm5-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2z',
                'youtube'   => 'M22 8s-.2-1.5-.8-2.1c-.8-.9-1.6-.9-2-1C16 4.5 12 4.5 12 4.5s-4 0-7.2.4c-.4.1-1.2.1-2 1C2.2 6.5 2 8 2 8s-.2 1.7-.2 3.5v1.5c0 1.7.2 3.5.2 3.5s.2 1.5.8 2.1c.8.9 1.9.9 2.4 1 1.7.2 7 .4 7 .4s4 0 7.2-.4c.4-.1 1.2-.1 2-1 .6-.6.8-2.1.8-2.1S22 14.7 22 13v-1.5C22 9.7 22 8 22 8zM10 15V9l5 3-5 3z',
                'twitter'   => 'M22 5.8c-.7.3-1.5.6-2.3.7.8-.5 1.5-1.3 1.8-2.2-.8.5-1.7.8-2.6 1A4.1 4.1 0 0 0 12 9.4c0 .3 0 .6.1.9A11.6 11.6 0 0 1 3 5a4.1 4.1 0 0 0 1.3 5.5 4 4 0 0 1-1.9-.5v.1c0 2 1.4 3.7 3.3 4.1a4 4 0 0 1-1.9.1 4.1 4.1 0 0 0 3.8 2.9A8.2 8.2 0 0 1 2 18.6 11.6 11.6 0 0 0 8.3 20c7.5 0 11.6-6.2 11.6-11.6v-.5c.8-.6 1.5-1.3 2.1-2.1z',
                'pinterest' => 'M12 2a10 10 0 0 0-3.6 19.3c-.1-.8-.2-2 0-2.9l1.3-5.5s-.3-.7-.3-1.6c0-1.5.9-2.7 2-2.7 1 0 1.4.7 1.4 1.6 0 1-.6 2.5-1 4 .3 1 1.5 1.6 2.6 1.4 2.2-.4 3.7-2.7 3.4-5.4-.4-2.7-2.6-4.5-5.4-4.4-3.2 0-5.1 2.4-5 4.8 0 .9.4 1.9.8 2.5.1.1.1.2 0 .3l-.3 1.2c-.1.2-.2.3-.4.2C5.6 14 5 12.2 5 10.8c0-3 2.2-6.4 6.6-6.4 3.5 0 5.8 2.5 5.8 5.3 0 3.6-2 6.3-5 6.3-1 0-2-.5-2.3-1.2l-.6 2.4c-.2.9-.8 2-1.2 2.7A10 10 0 1 0 12 2z',
                'whatsapp'  => 'M20 12a8 8 0 0 1-12.4 6.7L4 20l1.4-3.4A8 8 0 1 1 20 12zm-8-6a6 6 0 0 0-5.2 9l-.7 1.7 1.8-.6A6 6 0 1 0 12 6zm3.4 7.4c-.2-.1-.9-.4-1-.5-.3-.1-.5-.1-.6.1l-.4.5c-.2.2-.4.2-.6.1-.7-.4-1.5-1-2-1.7-.2-.3 0-.4.1-.6l.3-.4c.1-.2.1-.3 0-.5-.1-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.5-.4h-.5c-.2 0-.5.1-.7.3-.5.5-1 .9-1 2.2s1 2.6 1.1 2.8c.1.2 1.9 3 4.7 4 .7.2 1.2.4 1.6.5.7.2 1.3.2 1.7.1.5-.1 1.6-.7 1.8-1.3.2-.6.2-1.1.1-1.2-.1-.1-.3-.2-.5-.3z',
                'telegram'  => 'M22 4.4 19 19.7c-.2.9-.8 1.1-1.6.7l-4.4-3.3-2.1 2c-.2.2-.4.4-.9.4l.3-4.6 8.4-7.6c.4-.3-.1-.5-.5-.2L8 13l-4.4-1.4c-.9-.3-.9-.9.2-1.4l17.2-6.6c.8-.3 1.5.2 1 1.4z',
            );
            foreach ( $socials as $net => $path ) :
                $url = get_theme_mod( 'gr_social_' . $net, '' );
                if ( ! $url ) {
                    continue;
                }
                ?>
                <a class="gr-topbar__social" href="<?php echo esc_url( $url ); ?>" rel="noopener" target="_blank" aria-label="<?php echo esc_attr( ucfirst( $net ) ); ?>">
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="<?php echo esc_attr( $path ); ?>" fill="currentColor"/></svg>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<?php endif; ?>

<header class="gr-header" data-gr-header>
    <div class="gr-wrap gr-header__inner">

        <button class="gr-header__burger" data-gr-toggle="menu" aria-controls="gr-mobile-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'मेनू खोलें', 'golden-rashifal' ); ?>">
            <span></span><span></span><span></span>
        </button>

        <div class="gr-header__brand">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a class="gr-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?><span> ✦</span>
                </a>
                <?php
                $tag = get_theme_mod( 'gr_tagline', __( 'राशिफल · पंचांग · मुहूर्त · आध्यात्मिक ज्ञान', 'golden-rashifal' ) );
                if ( $tag ) :
                    ?>
                    <p class="gr-logo__tag"><?php echo esc_html( $tag ); ?></p>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <nav class="gr-nav" aria-label="<?php esc_attr_e( 'मुख्य मेनू', 'golden-rashifal' ); ?>">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'gr-primary-menu',
                        'container'      => false,
                        'menu_class'     => 'gr-nav__list',
                        'depth'          => 3,
                    )
                );
            } else {
                echo '<ul class="gr-nav__list gr-nav__list--fallback">';
                echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'होम', 'golden-rashifal' ) . '</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/rashifal/' ) ) . '">' . esc_html__( 'राशिफल', 'golden-rashifal' ) . '</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/panchang/' ) ) . '">' . esc_html__( 'पंचांग', 'golden-rashifal' ) . '</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/choghadiya/' ) ) . '">' . esc_html__( 'चौघड़िया', 'golden-rashifal' ) . '</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/festival/' ) ) . '">' . esc_html__( 'त्योहार', 'golden-rashifal' ) . '</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/muhurat/' ) ) . '">' . esc_html__( 'मुहूर्त', 'golden-rashifal' ) . '</a></li>';
                echo '</ul>';
            }
            ?>
        </nav>

        <div class="gr-header__actions">
            <button class="gr-header__search-btn" data-gr-toggle="search" aria-controls="gr-search-popup" aria-expanded="false" aria-label="<?php esc_attr_e( 'खोजें', 'golden-rashifal' ); ?>">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="11" cy="11" r="7" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="m20 20-3.5-3.5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
            </button>
        </div>

    </div>

    <div class="gr-quickbar" aria-label="<?php esc_attr_e( 'त्वरित पंचांग लिंक', 'golden-rashifal' ); ?>">
        <div class="gr-wrap gr-quickbar__inner">
            <a class="gr-quickbar__link" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">
                <span class="gr-quickbar__icon">✶</span><?php esc_html_e( 'आज का राशिफल', 'golden-rashifal' ); ?>
            </a>
            <a class="gr-quickbar__link" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">
                <span class="gr-quickbar__icon">☀</span><?php esc_html_e( 'पंचांग', 'golden-rashifal' ); ?>
            </a>
            <a class="gr-quickbar__link" href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">
                <span class="gr-quickbar__icon">⏳</span><?php esc_html_e( 'चौघड़िया', 'golden-rashifal' ); ?>
            </a>
            <a class="gr-quickbar__link" href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">
                <span class="gr-quickbar__icon">⚠</span><?php esc_html_e( 'राहुकाल', 'golden-rashifal' ); ?>
            </a>
            <a class="gr-quickbar__link" href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">
                <span class="gr-quickbar__icon">✦</span><?php esc_html_e( 'शुभ मुहूर्त', 'golden-rashifal' ); ?>
            </a>
            <a class="gr-quickbar__link" href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">
                <span class="gr-quickbar__icon">🪔</span><?php esc_html_e( 'त्योहार', 'golden-rashifal' ); ?>
            </a>
        </div>
    </div>
</header>

<!-- Mobile drawer -->
<div class="gr-mobile" id="gr-mobile-menu" data-gr-mobile aria-hidden="true">
    <div class="gr-mobile__panel" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'मेनू', 'golden-rashifal' ); ?>">
        <button class="gr-mobile__close" data-gr-toggle="menu" aria-label="<?php esc_attr_e( 'मेनू बंद करें', 'golden-rashifal' ); ?>">×</button>
        <div class="gr-mobile__brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'gr-mobile-menu-list',
                    'container'      => false,
                    'menu_class'     => 'gr-mobile__list',
                    'depth'          => 2,
                )
            );
        }
        ?>
        <div class="gr-mobile__cta">
            <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>" class="gr-btn gr-btn--gold"><?php esc_html_e( 'आज का राशिफल पढ़ें', 'golden-rashifal' ); ?></a>
        </div>
    </div>
</div>

<!-- Search popup -->
<div class="gr-search-pop" id="gr-search-popup" data-gr-search aria-hidden="true">
    <div class="gr-search-pop__panel" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'खोजें', 'golden-rashifal' ); ?>">
        <button class="gr-search-pop__close" data-gr-toggle="search" aria-label="<?php esc_attr_e( 'बंद करें', 'golden-rashifal' ); ?>">×</button>
        <h2 class="gr-search-pop__title"><?php esc_html_e( 'क्या खोज रहे हैं?', 'golden-rashifal' ); ?></h2>
        <p class="gr-search-pop__hint"><?php esc_html_e( 'राशि का नाम, त्योहार, पंचांग या लेख का शीर्षक टाइप करें।', 'golden-rashifal' ); ?></p>
        <?php get_search_form(); ?>
        <div class="gr-search-pop__tags">
            <span class="gr-search-pop__tags-label"><?php esc_html_e( 'पॉपुलर:', 'golden-rashifal' ); ?></span>
            <a href="<?php echo esc_url( home_url( '/?s=राशिफल' ) ); ?>"><?php esc_html_e( 'राशिफल', 'golden-rashifal' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/?s=पंचांग' ) ); ?>"><?php esc_html_e( 'पंचांग', 'golden-rashifal' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/?s=चौघड़िया' ) ); ?>"><?php esc_html_e( 'चौघड़िया', 'golden-rashifal' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/?s=दिवाली' ) ); ?>"><?php esc_html_e( 'दिवाली', 'golden-rashifal' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/?s=होली' ) ); ?>"><?php esc_html_e( 'होली', 'golden-rashifal' ); ?></a>
        </div>
    </div>
</div>

<?php if ( ! is_front_page() ) : ?>
    <div class="gr-breadcrumbs-wrap">
        <div class="gr-wrap">
            <?php golden_rashifal_breadcrumbs(); ?>
        </div>
    </div>
<?php endif; ?>
