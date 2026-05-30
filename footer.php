<?php
/**
 * Footer — Professional 4-column layout.
 * Columns: About Website | Quick Links | Categories | Contact Address
 *
 * @package GoldenRashifal
 */
?>

<footer class="gr-footer" role="contentinfo">
    <div class="gr-wrap gr-footer__top">

        <!-- Column 1: About Website -->
        <div class="gr-footer__col gr-footer__col--about">
            <a class="gr-footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span class="gr-footer__logo-icon">✦</span>
                <span class="gr-footer__logo-text">Golden <span>Rashifal</span></span>
            </a>
            <p class="gr-footer__desc">Golden Rashifal एक भरोसेमंद हिंदी ज्योतिष पोर्टल है जहाँ आपको दैनिक पंचांग, चौघड़िया, शुभ मुहूर्त, राहुकाल और हिंदू त्योहारों की सही जानकारी सरल भाषा में मिलती है। हमारा उद्देश्य पारंपरिक ज्ञान को संतुलित और पाठक-केंद्रित तरीके से प्रस्तुत करना है।</p>
            <div class="gr-footer__social">
                <a href="<?php echo esc_url( GR_AUTHOR_FB ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
                <a href="<?php echo esc_url( GR_AUTHOR_IG ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 3H8a5 5 0 0 0-5 5v8a5 5 0 0 0 5 5h8a5 5 0 0 0 5-5V8a5 5 0 0 0-5-5zm-4 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm5-9a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg></a>
                <a href="<?php echo esc_url( GR_AUTHOR_YT ); ?>" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M22.5 6.4a2.8 2.8 0 0 0-2-2C18.9 4 12 4 12 4s-6.9 0-8.5.4a2.8 2.8 0 0 0-2 2A30 30 0 0 0 1 12a30 30 0 0 0 .5 5.6 2.8 2.8 0 0 0 2 2c1.6.4 8.5.4 8.5.4s6.9 0 8.5-.4a2.8 2.8 0 0 0 2-2c.5-1.6.5-5.6.5-5.6s0-4-.5-5.6zM10 15V9l5.2 3L10 15z"/></svg></a>
                <a href="<?php echo esc_url( GR_AUTHOR_WA ); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.532 5.855L.057 23.48a.75.75 0 0 0 .914.914l5.674-1.485A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.222-3.875 1.015 1.033-3.772-.243-.389A9.953 9.953 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg></a>
            </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="gr-footer__col">
            <h4 class="gr-footer__col-title">महत्वपूर्ण लिंक</h4>
            <nav class="gr-footer__links" aria-label="<?php esc_attr_e( 'Quick Links', 'golden-rashifal' ); ?>">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">मुख्य पृष्ठ</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">हमारे बारे में</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">संपर्क करें</a>
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">गोपनीयता नीति</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">अस्वीकरण</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">नियम और शर्तें</a>
                <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">संपादकीय नीति</a>
                <a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">साइटमैप</a>
            </nav>
        </div>

        <!-- Column 3: Categories -->
        <div class="gr-footer__col">
            <h4 class="gr-footer__col-title">श्रेणियाँ</h4>
            <nav class="gr-footer__links" aria-label="<?php esc_attr_e( 'Categories', 'golden-rashifal' ); ?>">
                <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">आज का चौघड़िया</a>
                <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">आज का पंचांग</a>
                <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">राहुकाल</a>
                <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">शुभ मुहूर्त</a>
                <a href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>">वास्तु टिप्स</a>
                <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">त्योहार तिथियाँ</a>
                <a href="<?php echo esc_url( home_url( '/ekadashi/' ) ); ?>">एकादशी</a>
                <a href="<?php echo esc_url( home_url( '/purnima/' ) ); ?>">पूर्णिमा</a>
                <a href="<?php echo esc_url( home_url( '/hindu-calendar/' ) ); ?>">हिंदू कैलेंडर</a>
            </nav>
        </div>

        <!-- Column 4: Contact Address -->
        <div class="gr-footer__col gr-footer__col--contact">
            <h4 class="gr-footer__col-title">संपर्क जानकारी</h4>
            <div class="gr-footer__contact-info">
                <div class="gr-footer__contact-item">
                    <span class="gr-footer__contact-icon">◈</span>
                    <span><strong>Golden Rashifal</strong><br>प्रीमियम ज्योतिष पोर्टल</span>
                </div>
                <div class="gr-footer__contact-item">
                    <span class="gr-footer__contact-icon">✉</span>
                    <a href="mailto:<?php echo esc_attr( GR_AUTHOR_EMAIL ); ?>"><?php echo esc_html( GR_AUTHOR_EMAIL ); ?></a>
                </div>
                <div class="gr-footer__contact-item">
                    <span class="gr-footer__contact-icon">☎</span>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'संपर्क फ़ॉर्म', 'golden-rashifal' ); ?></a>
                </div>
                <div class="gr-footer__contact-item">
                    <span class="gr-footer__contact-icon">⊙</span>
                    <span>India</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Copyright & Legal -->
    <div class="gr-footer__bottom">
        <div class="gr-wrap gr-footer__bottom-inner">
            <p class="gr-footer__copy">© <?php echo esc_html( wp_date( 'Y' ) ); ?> <strong>Golden Rashifal</strong>. सर्वाधिकार सुरक्षित।</p>
            <nav class="gr-footer__legal" aria-label="<?php esc_attr_e( 'Legal', 'golden-rashifal' ); ?>">
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">गोपनीयता</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">अस्वीकरण</a>
                <a href="<?php echo esc_url( home_url( '/dmca/' ) ); ?>">DMCA</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">शर्तें</a>
                <a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">साइटमैप</a>
            </nav>
            <span class="gr-footer__made">भारत में निर्मित</span>
        </div>
    </div>

    <!-- Disclaimer -->
    <div class="gr-footer__disclaimer">
        <div class="gr-wrap">
            <p><strong>Disclaimer:</strong> Golden Rashifal पर प्रकाशित सामग्री पारंपरिक मान्यताओं और सामान्य जानकारी पर आधारित है। किसी भी महत्वपूर्ण निर्णय से पहले योग्य ज्योतिषाचार्य से परामर्श लें। यह किसी चिकित्सकीय, कानूनी या वित्तीय सलाह का विकल्प नहीं है।</p>
        </div>
    </div>


</footer>

<button class="gr-totop" data-gr-totop aria-label="<?php esc_attr_e( 'Back to top', 'golden-rashifal' ); ?>" hidden>↑</button>

<!-- Mobile Bottom Navigation -->
<nav class="gr-mobile-nav" aria-label="<?php esc_attr_e( 'मोबाइल नेविगेशन', 'golden-rashifal' ); ?>">
    <div class="gr-mobile-nav__inner">
        <a class="gr-mobile-nav__item" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <span class="gr-mobile-nav__icon">&#9750;</span>
            <?php esc_html_e( 'होम', 'golden-rashifal' ); ?>
        </a>
        <a class="gr-mobile-nav__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">
            <span class="gr-mobile-nav__icon">&#10026;</span>
            <?php esc_html_e( 'राशिफल', 'golden-rashifal' ); ?>
        </a>
        <a class="gr-mobile-nav__item" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">
            <span class="gr-mobile-nav__icon">&#9788;</span>
            <?php esc_html_e( 'पंचांग', 'golden-rashifal' ); ?>
        </a>
        <a class="gr-mobile-nav__item" href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">
            <span class="gr-mobile-nav__icon">&#9201;</span>
            <?php esc_html_e( 'चौघड़िया', 'golden-rashifal' ); ?>
        </a>
        <a class="gr-mobile-nav__item" href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">
            <span class="gr-mobile-nav__icon">&#9734;</span>
            <?php esc_html_e( 'मुहूर्त', 'golden-rashifal' ); ?>
        </a>
    </div>
</nav>

<!-- Floating social buttons -->
<div class="gr-floating" aria-hidden="true">
    <a class="gr-floating__btn gr-floating__btn--wa" href="<?php echo esc_url( GR_AUTHOR_WA ); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.532 5.855L.057 23.48a.75.75 0 0 0 .914.914l5.674-1.485A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.222-3.875 1.015 1.033-3.772-.243-.389A9.953 9.953 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
    </a>
    <a class="gr-floating__btn gr-floating__btn--top" href="#" aria-label="Top">↑</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
