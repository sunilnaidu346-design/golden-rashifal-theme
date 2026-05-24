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
                <a href="#" aria-label="Facebook" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
                <a href="#" aria-label="Instagram" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 3H8a5 5 0 0 0-5 5v8a5 5 0 0 0 5 5h8a5 5 0 0 0 5-5V8a5 5 0 0 0-5-5zm-4 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm5-9a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg></a>
                <a href="#" aria-label="YouTube" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M22.5 6.4a2.8 2.8 0 0 0-2-2C18.9 4 12 4 12 4s-6.9 0-8.5.4a2.8 2.8 0 0 0-2 2A30 30 0 0 0 1 12a30 30 0 0 0 .5 5.6 2.8 2.8 0 0 0 2 2c1.6.4 8.5.4 8.5.4s6.9 0 8.5-.4a2.8 2.8 0 0 0 2-2c.5-1.6.5-5.6.5-5.6s0-4-.5-5.6zM10 15V9l5.2 3L10 15z"/></svg></a>
                <a href="#" aria-label="Twitter" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 22.4.36a9 9 0 0 1-2.88 1.1A4.52 4.52 0 0 0 12 7.5 12.94 12.94 0 0 1 2.46 2.11 4.48 4.48 0 0 0 3.8 8.16 4.4 4.4 0 0 1 1.64 7.6v.05a4.52 4.52 0 0 0 3.63 4.43 4.5 4.5 0 0 1-2.04.08 4.53 4.53 0 0 0 4.22 3.14A9.06 9.06 0 0 1 1 19.54a12.8 12.8 0 0 0 6.92 2.03c8.3 0 12.84-6.87 12.84-12.84 0-.2 0-.39-.01-.58A9.2 9.2 0 0 0 23 3z"/></svg></a>
                <a href="#" aria-label="Telegram" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></a>
                <a href="#" aria-label="Pinterest" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.5 2 2 6.5 2 12c0 4.2 2.6 7.8 6.3 9.3-.1-.8-.2-2 0-2.9l1.3-5.5s-.3-.7-.3-1.6c0-1.5.9-2.7 2-2.7 1 0 1.4.7 1.4 1.6 0 1-.6 2.5-1 4 .3 1.1 1.2 1.8 2.3 1.8 2.8 0 4.9-2.9 4.9-7.2 0-3.7-2.7-6.4-6.5-6.4-4.4 0-7 3.3-7 6.8 0 1.3.5 2.8 1.1 3.5.1.2.2.2.1.4l-.4 1.6c-.1.3-.2.4-.5.2-1.8-.8-2.9-3.5-2.9-5.6 0-4.6 3.3-8.8 9.6-8.8 5 0 8.9 3.6 8.9 8.4 0 5-3.1 9-7.5 9-1.5 0-2.8-.8-3.3-1.7l-.9 3.4c-.3 1.2-1.2 2.7-1.8 3.6C10 22 11 22 12 22c5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg></a>
            </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="gr-footer__col">
            <h4 class="gr-footer__col-title">Quick Links</h4>
            <nav class="gr-footer__links" aria-label="<?php esc_attr_e( 'Quick Links', 'golden-rashifal' ); ?>">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">Disclaimer</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms & Conditions</a>
                <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">Editorial Policy</a>
                <a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">Sitemap</a>
            </nav>
        </div>

        <!-- Column 3: Categories -->
        <div class="gr-footer__col">
            <h4 class="gr-footer__col-title">Categories</h4>
            <nav class="gr-footer__links" aria-label="<?php esc_attr_e( 'Categories', 'golden-rashifal' ); ?>">
                <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">Today Choghadiya</a>
                <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">Panchang</a>
                <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">Rahukal</a>
                <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">Shubh Muhurat</a>
                <a href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>">Vastu Tips</a>
                <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">Festival Dates</a>
                <a href="<?php echo esc_url( home_url( '/ekadashi/' ) ); ?>">Ekadashi</a>
                <a href="<?php echo esc_url( home_url( '/purnima/' ) ); ?>">Purnima</a>
                <a href="<?php echo esc_url( home_url( '/hindu-calendar/' ) ); ?>">Hindu Calendar</a>
            </nav>
        </div>

        <!-- Column 4: Contact Address -->
        <div class="gr-footer__col gr-footer__col--contact">
            <h4 class="gr-footer__col-title">Contact Us</h4>
            <div class="gr-footer__contact-info">
                <div class="gr-footer__contact-item">
                    <span class="gr-footer__contact-icon">🌐</span>
                    <span><strong>Golden Rashifal</strong><br>Premium Jyotish Portal</span>
                </div>
                <div class="gr-footer__contact-item">
                    <span class="gr-footer__contact-icon">✉️</span>
                    <a href="mailto:contact@goldenrashifal.com">contact@goldenrashifal.com</a>
                </div>
                <div class="gr-footer__contact-item">
                    <span class="gr-footer__contact-icon">📞</span>
                    <span>+91 98765 43210</span>
                </div>
                <div class="gr-footer__contact-item">
                    <span class="gr-footer__contact-icon">📍</span>
                    <span>India</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Copyright & Legal -->
    <div class="gr-footer__bottom">
        <div class="gr-wrap gr-footer__bottom-inner">
            <p class="gr-footer__copy">© <?php echo esc_html( wp_date( 'Y' ) ); ?> <strong>Golden Rashifal</strong>. All Rights Reserved.</p>
            <nav class="gr-footer__legal" aria-label="<?php esc_attr_e( 'Legal', 'golden-rashifal' ); ?>">
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">Disclaimer</a>
                <a href="<?php echo esc_url( home_url( '/dmca/' ) ); ?>">DMCA</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms</a>
                <a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">Sitemap</a>
            </nav>
            <span class="gr-footer__made">Made with ❤️ in India</span>
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

<!-- Floating social buttons -->
<div class="gr-floating" aria-hidden="true">
    <a class="gr-floating__btn gr-floating__btn--share" href="#" aria-label="Share">↗</a>
    <a class="gr-floating__btn gr-floating__btn--chat" href="#" aria-label="Chat">💬</a>
    <a class="gr-floating__btn gr-floating__btn--star" href="#" aria-label="Bookmark">⭐</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
