<?php
/**
 * Site footer — dark premium, 4-column layout, disclaimer, legal row.
 *
 * @package GoldenRashifal
 */
?>

<footer class="gr-footer" role="contentinfo">

    <div class="gr-wrap gr-footer__top">

        <!-- Brand column -->
        <div class="gr-footer__col gr-footer__col--brand">
            <a class="gr-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span class="gr-logo__mark">✦</span> <?php bloginfo( 'name' ); ?>
            </a>
            <p class="gr-footer__about">
                <?php
                echo esc_html( get_theme_mod(
                    'gr_footer_about',
                    __( 'गोल्डन राशिफल पर सरल हिंदी में राशिफल, पंचांग, चौघड़िया, मुहूर्त और त्योहार की जानकारी मिलती है — संतुलित दृष्टिकोण और पाठक-केंद्रित सामग्री के साथ।', 'golden-rashifal' )
                ) );
                ?>
            </p>
            <div class="gr-footer__social">
                <?php
                $social_icons = array(
                    'facebook'  => 'M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z',
                    'instagram' => 'M16 3H8a5 5 0 0 0-5 5v8a5 5 0 0 0 5 5h8a5 5 0 0 0 5-5V8a5 5 0 0 0-5-5zM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm5-2a1 1 0 1 1 0 2 1 1 0 0 1 0-2z',
                    'youtube'   => 'M22.5 6.4a2.8 2.8 0 0 0-2-2C18.9 4 12 4 12 4s-6.9 0-8.5.4a2.8 2.8 0 0 0-2 2A30 30 0 0 0 1 12a30 30 0 0 0 .5 5.6 2.8 2.8 0 0 0 2 2c1.6.4 8.5.4 8.5.4s6.9 0 8.5-.4a2.8 2.8 0 0 0 2-2A30 30 0 0 0 23 12a30 30 0 0 0-.5-5.6zM10 15V9l5.2 3L10 15z',
                    'twitter'   => 'M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 16 3a4.48 4.48 0 0 0-4.47 5.5A12.94 12.94 0 0 1 2 4s-4 9 5 13a13 13 0 0 1-7 2c9 5 20 0 20-11.5 0-.28 0-.54-.02-.8A7.72 7.72 0 0 0 23 3z',
                    'telegram'  => 'M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z',
                );
                foreach ( $social_icons as $network => $path ) :
                    $url = get_theme_mod( 'gr_social_' . $network, '' );
                    if ( ! $url ) { continue; }
                    ?>
                    <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener" aria-label="<?php echo esc_attr( ucfirst( $network ) ); ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="<?php echo esc_attr( $path ); ?>"/></svg>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Links column 1 -->
        <div class="gr-footer__col">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php else : ?>
                <h4 class="gr-footer__col-title"><?php esc_html_e( 'मुख्य खंड', 'golden-rashifal' ); ?></h4>
                <nav class="gr-footer__links">
                    <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><?php esc_html_e( 'दैनिक राशिफल', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>"><?php esc_html_e( 'आज का पंचांग', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>"><?php esc_html_e( 'चौघड़िया', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>"><?php esc_html_e( 'शुभ मुहूर्त', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><?php esc_html_e( 'त्योहार कैलेंडर', 'golden-rashifal' ); ?></a>
                </nav>
            <?php endif; ?>
        </div>

        <!-- Links column 2 -->
        <div class="gr-footer__col">
            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <?php dynamic_sidebar( 'footer-2' ); ?>
            <?php else : ?>
                <h4 class="gr-footer__col-title"><?php esc_html_e( 'और जानें', 'golden-rashifal' ); ?></h4>
                <nav class="gr-footer__links">
                    <a href="<?php echo esc_url( home_url( '/numerology/' ) ); ?>"><?php esc_html_e( 'अंकज्योतिष', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>"><?php esc_html_e( 'वास्तु टिप्स', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>"><?php esc_html_e( 'राहुकाल', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/weekly-rashifal/' ) ); ?>"><?php esc_html_e( 'साप्ताहिक राशिफल', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/monthly-rashifal/' ) ); ?>"><?php esc_html_e( 'मासिक राशिफल', 'golden-rashifal' ); ?></a>
                </nav>
            <?php endif; ?>
        </div>

        <!-- Links column 3 -->
        <div class="gr-footer__col">
            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <?php dynamic_sidebar( 'footer-3' ); ?>
            <?php else : ?>
                <h4 class="gr-footer__col-title"><?php esc_html_e( 'सहायता', 'golden-rashifal' ); ?></h4>
                <nav class="gr-footer__links">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'हमारे बारे में', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'संपर्क', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'प्राइवेसी पॉलिसी', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>"><?php esc_html_e( 'डिस्क्लेमर', 'golden-rashifal' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/dmca/' ) ); ?>"><?php esc_html_e( 'DMCA', 'golden-rashifal' ); ?></a>
                </nav>
            <?php endif; ?>
        </div>

    </div>

    <?php
    $disclaimer = get_theme_mod( 'gr_disclaimer', __( 'इस वेबसाइट पर दी गई सामग्री पारंपरिक मान्यताओं और सामान्य ज्ञान पर आधारित है। यह किसी चिकित्सकीय, कानूनी या वित्तीय सलाह का विकल्प नहीं है।', 'golden-rashifal' ) );
    if ( $disclaimer ) :
    ?>
    <div class="gr-footer__disclaimer">
        <div class="gr-wrap">
            <p><?php echo esc_html( $disclaimer ); ?></p>
        </div>
    </div>
    <?php endif; ?>

    <div class="gr-footer__bottom">
        <div class="gr-wrap" style="display:flex;justify-content:space-between;align-items:center;gap:16px;flex-wrap:wrap;">
            <p>© <?php echo esc_html( wp_date( 'Y' ) ); ?> <strong><?php bloginfo( 'name' ); ?></strong>. <?php esc_html_e( 'सर्वाधिकार सुरक्षित।', 'golden-rashifal' ); ?></p>
            <?php
            if ( has_nav_menu( 'footer' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'gr-footer__legal',
                    'depth'          => 1,
                ) );
            } else {
                echo '<ul class="gr-footer__legal">';
                echo '<li><a href="' . esc_url( home_url( '/sitemap/' ) ) . '">' . esc_html__( 'साइटमैप', 'golden-rashifal' ) . '</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/terms/' ) ) . '">' . esc_html__( 'शर्तें', 'golden-rashifal' ) . '</a></li>';
                echo '</ul>';
            }
            ?>
        </div>
    </div>

</footer>

<button class="gr-totop" data-gr-totop aria-label="<?php esc_attr_e( 'ऊपर जाएँ', 'golden-rashifal' ); ?>" hidden>
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 14l6-6 6 6"/></svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
