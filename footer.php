<?php
/**
 * Site footer — disclaimer line, 4-column footer, legal row, scroll-to-top.
 *
 * @package GoldenRashifal
 */
?>

<footer class="gr-footer" role="contentinfo">

    <?php
    $disclaimer = get_theme_mod( 'gr_disclaimer', __( 'इस वेबसाइट पर दी गई सामग्री पारंपरिक मान्यताओं और सामान्य ज्ञान पर आधारित है। यह किसी चिकित्सकीय, कानूनी या वित्तीय सलाह का विकल्प नहीं है।', 'golden-rashifal' ) );
    if ( $disclaimer ) :
    ?>
    <div class="gr-footer__disclaimer">
        <div class="gr-wrap">
            <p>
                <span class="gr-footer__disclaimer-tag"><?php esc_html_e( 'सूचना', 'golden-rashifal' ); ?></span>
                <?php echo esc_html( $disclaimer ); ?>
            </p>
        </div>
    </div>
    <?php endif; ?>

    <div class="gr-footer__main">
        <div class="gr-wrap gr-footer__grid">

            <div class="gr-footer__col gr-footer__col--brand">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a class="gr-logo gr-logo--footer" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                <?php endif; ?>

                <p class="gr-footer__about">
                    <?php
                    echo wp_kses_post(
                        get_theme_mod(
                            'gr_footer_about',
                            __( 'गोल्डन राशिफल पर आपको सरल भाषा में राशिफल, पंचांग, चौघड़िया, राहुकाल, मुहूर्त और हिंदू त्योहारों की जानकारी मिलती है। हम सांस्कृतिक और परंपरागत संदर्भ का सम्मान करते हुए संतुलित और पाठक-केंद्रित सामग्री प्रकाशित करते हैं।', 'golden-rashifal' )
                        )
                    );
                    ?>
                </p>

                <ul class="gr-footer__social" aria-label="<?php esc_attr_e( 'सोशल मीडिया', 'golden-rashifal' ); ?>">
                    <?php
                    $socials = array(
                        'facebook'  => 'Facebook',
                        'instagram' => 'Instagram',
                        'youtube'   => 'YouTube',
                        'twitter'   => 'Twitter',
                        'pinterest' => 'Pinterest',
                        'whatsapp'  => 'WhatsApp',
                        'telegram'  => 'Telegram',
                    );
                    foreach ( $socials as $key => $label ) :
                        $url = get_theme_mod( 'gr_social_' . $key, '' );
                        if ( ! $url ) {
                            continue;
                        }
                        ?>
                        <li>
                            <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $label ); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="gr-footer__col">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php else : ?>
                    <h4 class="gr-foot-widget__title"><?php esc_html_e( 'लोकप्रिय खंड', 'golden-rashifal' ); ?></h4>
                    <ul class="gr-foot-list">
                        <li><a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><?php esc_html_e( 'दैनिक राशिफल', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/weekly-rashifal/' ) ); ?>"><?php esc_html_e( 'साप्ताहिक राशिफल', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/monthly-rashifal/' ) ); ?>"><?php esc_html_e( 'मासिक राशिफल', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>"><?php esc_html_e( 'आज का पंचांग', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>"><?php esc_html_e( 'आज का चौघड़िया', 'golden-rashifal' ); ?></a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <div class="gr-footer__col">
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                <?php else : ?>
                    <h4 class="gr-foot-widget__title"><?php esc_html_e( 'त्योहार और मुहूर्त', 'golden-rashifal' ); ?></h4>
                    <ul class="gr-foot-list">
                        <li><a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><?php esc_html_e( 'त्योहार कैलेंडर', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>"><?php esc_html_e( 'विवाह मुहूर्त', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/muhurat/griha-pravesh/' ) ); ?>"><?php esc_html_e( 'गृह प्रवेश', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/muhurat/namkaran/' ) ); ?>"><?php esc_html_e( 'नामकरण', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/muhurat/mundan/' ) ); ?>"><?php esc_html_e( 'मुंडन', 'golden-rashifal' ); ?></a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <div class="gr-footer__col">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php else : ?>
                    <h4 class="gr-foot-widget__title"><?php esc_html_e( 'सहायता और संपर्क', 'golden-rashifal' ); ?></h4>
                    <ul class="gr-foot-list">
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'हमारे बारे में', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'संपर्क करें', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'प्राइवेसी पॉलिसी', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php esc_html_e( 'नियम और शर्तें', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>"><?php esc_html_e( 'डिस्क्लेमर', 'golden-rashifal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/dmca/' ) ); ?>"><?php esc_html_e( 'DMCA', 'golden-rashifal' ); ?></a></li>
                    </ul>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <div class="gr-footer__bottom">
        <div class="gr-wrap gr-footer__bottom-inner">
            <p class="gr-footer__copy">
                © <?php echo esc_html( wp_date( 'Y' ) ); ?> <strong><?php bloginfo( 'name' ); ?></strong>.
                <?php esc_html_e( 'सर्वाधिकार सुरक्षित।', 'golden-rashifal' ); ?>
            </p>
            <?php
            if ( has_nav_menu( 'footer' ) ) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'gr-footer__legal',
                        'depth'          => 1,
                    )
                );
            } else {
                echo '<ul class="gr-footer__legal">';
                echo '<li><a href="' . esc_url( home_url( '/sitemap/' ) ) . '">' . esc_html__( 'साइटमैप', 'golden-rashifal' ) . '</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/privacy-policy/' ) ) . '">' . esc_html__( 'प्राइवेसी', 'golden-rashifal' ) . '</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/terms/' ) ) . '">' . esc_html__( 'शर्तें', 'golden-rashifal' ) . '</a></li>';
                echo '</ul>';
            }
            ?>
        </div>
    </div>
</footer>

<button class="gr-totop" data-gr-totop aria-label="<?php esc_attr_e( 'ऊपर जाएँ', 'golden-rashifal' ); ?>" hidden>
    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M6 14l6-6 6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
