<?php
/**
 * Virtual Page: Cookie Policy — Premium Layout.
 * Required for cookie consent compliance.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--cookie" role="main">

    <!-- Premium Hero -->
    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>Cookie Policy</span>
            </div>
            <span class="gr-page-hero__badge">🍪 Cookie Information</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'Cookie Policy — कुकी नीति', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'यह page बताता है कि Golden Rashifal cookies कैसे use करता है और आप उन्हें कैसे manage कर सकते हैं।', 'golden-rashifal' ); ?></p>
            <div class="gr-page-hero__meta">
                <span>Last Updated: <?php echo esc_html( wp_date( 'F Y' ) ); ?></span>
            </div>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--narrow">

        <h2>Cookies क्या हैं?</h2>
        <p>Cookies छोटी text files हैं जो आपके browser में store होती हैं जब आप कोई website visit करते हैं। ये website को properly function करने, user experience improve करने, और analytics provide करने में help करती हैं।</p>

        <h2>हम कौन सी Cookies use करते हैं?</h2>
        <div class="gr-pcard-grid gr-pcard-grid--3">
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">⚙</div>
                <div class="gr-pcard__title">Essential Cookies</div>
                <div class="gr-pcard__text">Website के basic functions (navigation, security, preferences) के लिए ज़रूरी। इन्हें disable नहीं किया जा सकता।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">📊</div>
                <div class="gr-pcard__title">Analytics Cookies</div>
                <div class="gr-pcard__text">Google Analytics — visitors कैसे website use करते हैं ये समझने के लिए। Anonymous data collect करती हैं।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">📢</div>
                <div class="gr-pcard__title">Advertising Cookies</div>
                <div class="gr-pcard__text">Google AdSense — relevant ads दिखाने और ad performance measure करने के लिए। Personalized ads।</div>
            </div>
        </div>

        <h2>Third-Party Cookies</h2>
        <p>हमारी website पर ये third-party services cookies set कर सकती हैं:</p>
        <div class="gr-pcard-grid gr-pcard-grid--4">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">G</div>
                <div class="gr-pcard__title">Google Analytics</div>
                <div class="gr-pcard__text">Traffic analysis</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">A</div>
                <div class="gr-pcard__title">Google AdSense</div>
                <div class="gr-pcard__text">Ad personalization</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">D</div>
                <div class="gr-pcard__title">DoubleClick</div>
                <div class="gr-pcard__text">Ad serving</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">Y</div>
                <div class="gr-pcard__title">YouTube</div>
                <div class="gr-pcard__text">Embedded videos</div>
            </div>
        </div>

        <h2>Cookies कैसे Manage करें?</h2>
        <h3>Browser Settings</h3>
        <p>सभी modern browsers में cookies manage करने का option होता है:</p>
        <ul>
            <li><strong>Chrome:</strong> Settings → Privacy and Security → Cookies</li>
            <li><strong>Firefox:</strong> Settings → Privacy & Security → Cookies</li>
            <li><strong>Safari:</strong> Preferences → Privacy → Cookies</li>
            <li><strong>Edge:</strong> Settings → Cookies and site permissions</li>
        </ul>

        <h3>Opt-Out Options</h3>
        <ul>
            <li>Google Ad Settings: <a href="https://adssettings.google.com/" rel="noopener nofollow" target="_blank">adssettings.google.com</a></li>
            <li>Google Analytics Opt-out: <a href="https://tools.google.com/dlpage/gaoptout" rel="noopener nofollow" target="_blank">tools.google.com/dlpage/gaoptout</a></li>
            <li>Network Advertising Initiative: <a href="https://optout.networkadvertising.org/" rel="noopener nofollow" target="_blank">optout.networkadvertising.org</a></li>
        </ul>

        <h2>Cookies Disable करने का प्रभाव</h2>
        <p>अगर आप cookies disable करते हैं:</p>
        <ul>
            <li>Website के कुछ features ठीक से काम नहीं कर सकते</li>
            <li>Cookie consent preference remember नहीं होगी</li>
            <li>Ads less relevant हो सकते हैं</li>
            <li>Analytics data collect नहीं होगा</li>
        </ul>

        <h2>Cookie Consent</h2>
        <p>पहली बार website visit करने पर आपको cookie consent banner दिखाया जाता है जहाँ आप:</p>
        <ul>
            <li><strong>Accept All</strong> — सभी cookies allow</li>
            <li><strong>Reject All</strong> — सिर्फ essential cookies (non-essential reject)</li>
            <li><strong>Preferences</strong> — Category-wise choose</li>
        </ul>

        <h2>Contact</h2>
        <p>Cookie policy से related कोई सवाल: <strong>contact@goldenrashifal.com</strong></p>

        <!-- FAQ -->
        <h2>अक्सर पूछे जाने वाले सवाल</h2>
        <div class="gr-faq">
            <details class="gr-faq__item" open>
                <summary class="gr-faq__q"><strong>क्या cookies मेरा personal data steal कर सकती हैं?</strong></summary>
                <div class="gr-faq__a">नहीं। Cookies सिर्फ small text files हैं। ये आपके computer से data access नहीं कर सकतीं। वो बस browsing preferences और anonymous usage data store करती हैं।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Cookies disable करने से website काम करेगी?</strong></summary>
                <div class="gr-faq__a">Basic content accessible रहेगा। लेकिन कुछ features (preferences, personalization) ठीक से काम नहीं कर सकते।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Cookie consent choice बाद में change कर सकते हैं?</strong></summary>
                <div class="gr-faq__a">हाँ। Browser cookies clear करके website refresh करें — consent banner फिर दिखेगा।</div>
            </details>
        </div>

        <!-- CTA -->
        <div class="gr-page-cta">
            <h2 class="gr-page-cta__title"><?php esc_html_e( 'राशिफल और पंचांग देखें', 'golden-rashifal' ); ?></h2>
            <p class="gr-page-cta__text"><?php esc_html_e( 'आज की ज्योतिष जानकारी — निःशुल्क', 'golden-rashifal' ); ?></p>
            <div class="gr-page-cta__buttons">
                <a class="gr-page-cta__btn gr-page-cta__btn--gold" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">राशिफल पढ़ें</a>
                <a class="gr-page-cta__btn gr-page-cta__btn--outline" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">पंचांग देखें</a>
            </div>
        </div>

        <!-- Trust & Links -->
        <div class="gr-trust-block">
            <h2 class="gr-trust-block__title"><?php esc_html_e( 'Golden Rashifal पर भरोसा क्यों करें?', 'golden-rashifal' ); ?></h2>
            <div class="gr-trust-block__grid">
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> संपादकीय समीक्षित</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पंचांग सत्यापित</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> प्रतिदिन अपडेट</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पारंपरिक स्रोत</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पाठक केंद्रित</div>
            </div>
        </div>

        <div class="gr-internal-links">
            <h2 class="gr-internal-links__title"><?php esc_html_e( 'संबंधित पेज', 'golden-rashifal' ); ?></h2>
            <div class="gr-internal-links__grid">
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><span class="icon">🔒</span> गोपनीयता नीति</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>"><span class="icon">⚖</span> अस्वीकरण</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><span class="icon">📜</span> नियम और शर्तें</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="icon">👥</span> हमारे बारे में</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="icon">📞</span> संपर्क करें</a>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — Transparent Cookie Usage', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
