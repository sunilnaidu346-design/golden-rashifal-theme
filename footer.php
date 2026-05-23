<?php
/**
 * Footer — Dark, 4-column layout matching screenshot 6.
 *
 * @package GoldenRashifal
 */
?>

<footer class="gr-footer" role="contentinfo">
    <div class="gr-wrap gr-footer__top">

        <div class="gr-footer__brand">
            <a class="gr-logo gr-logo--footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span class="gr-logo__icon">✦</span> Golden <span class="gr-logo__highlight">Rashifal</span>
            </a>
            <span class="gr-footer__tagline">प्रीमियम ज्योतिष पोर्टल</span>
            <p class="gr-footer__about">Golden Rashifal भारत का अग्रणी ज्योतिष पोर्टल है जो राशिफल, पंचांग, चौघड़िया, मुहूर्त और आध्यात्मिक जानकारी प्रदान करता है।</p>
            <ul class="gr-footer__contact">
                <li>⏰ <span data-gr-clock-time>--:--</span></li>
                <li>✉ contact@goldenrashifal.com</li>
                <li>📞 +91 98765 43210</li>
                <li>📍 भारत</li>
            </ul>
            <div class="gr-footer__social">
                <a href="#" aria-label="Instagram">📷</a>
                <a href="#" aria-label="YouTube">▶</a>
                <a href="#" aria-label="Pinterest">📌</a>
                <a href="#" aria-label="Telegram">✈</a>
                <a href="#" aria-label="Chat">💬</a>
            </div>
        </div>

        <div class="gr-footer__col">
            <h4 class="gr-footer__col-title">राशिफल</h4>
            <nav class="gr-footer__links">
                <?php
                $rashi_links = array( 'मेष','वृष','मिथुन','कर्क','सिंह','कन्या','तुला','वृश्चिक','धनु','मकर','कुंभ','मीन' );
                foreach ( $rashi_links as $r ) {
                    echo '<a href="' . esc_url( home_url( '/rashifal/' ) ) . '">' . esc_html( $r ) . ' राशिफल</a>';
                }
                ?>
            </nav>
        </div>

        <div class="gr-footer__col">
            <h4 class="gr-footer__col-title">ज्योतिष</h4>
            <nav class="gr-footer__links">
                <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">पंचांग</a>
                <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">चौघड़िया</a>
                <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">राहु काल</a>
                <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">मुहूर्त</a>
                <a href="<?php echo esc_url( home_url( '/kundli/' ) ); ?>">कुंडली</a>
                <a href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>">वास्तु</a>
                <a href="<?php echo esc_url( home_url( '/navgraha/' ) ); ?>">नवग्रह</a>
                <a href="<?php echo esc_url( home_url( '/numerology/' ) ); ?>">संख्याशास्त्र</a>
            </nav>
        </div>

        <div class="gr-footer__col">
            <h4 class="gr-footer__col-title">पेज</h4>
            <nav class="gr-footer__links">
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">हमारे बारे में</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">संपर्क करें</a>
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">गोपनीयता नीति</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">अस्वीकरण</a>
                <a href="<?php echo esc_url( home_url( '/dmca/' ) ); ?>">DMCA नीति</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">नियम और शर्तें</a>
                <a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">साइटमैप</a>
            </nav>
        </div>

    </div>

    <div class="gr-footer__bottom">
        <div class="gr-wrap gr-footer__bottom-inner">
            <p>© <?php echo esc_html( wp_date( 'Y' ) ); ?> <strong>Golden Rashifal</strong>. सर्वाधिकार सुरक्षित।</p>
            <div class="gr-footer__legal">
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">गोपनीयता नीति</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">अस्वीकरण</a>
                <a href="<?php echo esc_url( home_url( '/dmca/' ) ); ?>">DMCA</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">नियम</a>
                <a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">साइटमैप</a>
            </div>
            <span class="gr-footer__made">Made with ❤️ in India</span>
        </div>
    </div>

    <div class="gr-footer__disclaimer">
        <div class="gr-wrap">
            <p><strong>अस्वीकरण:</strong> Golden Rashifal पर प्रकाशित सभी ज्योतिष और राशिफल की जानकारी स्वरूपवान और सामान्य जानकारी के उद्देश्य से है। किसी भी महत्वपूर्ण निर्णय लेने से पहले कृपया किसी योग्य ज्योतिषाचार्य से परामर्श लें।</p>
        </div>
    </div>
</footer>

<button class="gr-totop" data-gr-totop aria-label="<?php esc_attr_e( 'ऊपर जाएँ', 'golden-rashifal' ); ?>" hidden>↑</button>

<!-- Floating social buttons -->
<div class="gr-floating" aria-hidden="true">
    <a class="gr-floating__btn gr-floating__btn--share" href="#" aria-label="Share">↗</a>
    <a class="gr-floating__btn gr-floating__btn--chat" href="#" aria-label="Chat">💬</a>
    <a class="gr-floating__btn gr-floating__btn--star" href="#" aria-label="Bookmark">⭐</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
