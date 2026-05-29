<?php
/**
 * Virtual Page: Disclaimer — Premium Layout.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--disclaimer" role="main">

    <!-- Premium Hero -->
    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>अस्वीकरण</span>
            </div>
            <span class="gr-page-hero__badge">⚖ पारदर्शिता</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'अस्वीकरण — Disclaimer', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'Golden Rashifal पर प्रकाशित सभी सामग्री informational purpose से है। यहाँ हमारी content की सीमाएँ और जिम्मेदारियाँ स्पष्ट की गई हैं।', 'golden-rashifal' ); ?></p>
            <div class="gr-page-hero__meta">
                <span>Last Updated: <?php echo esc_html( wp_date( 'F Y' ) ); ?></span>
            </div>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--narrow">

        <h2>सामान्य अस्वीकरण</h2>
        <p>Golden Rashifal पर published सभी content — articles, पंचांग data, चौघड़िया charts, राशिफल, मुहूर्त information — पूरी तरह से <strong>सामान्य जानकारी और शैक्षिक उद्देश्य</strong> से प्रदान की जाती है।</p>
        <p>यह content किसी भी professional advice (चिकित्सा, कानूनी, वित्तीय, या ज्योतिषीय) का विकल्प नहीं है।</p>

        <h2>ज्योतिष content के बारे में</h2>
        <div class="gr-pcard-grid gr-pcard-grid--3">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">☆</div>
                <div class="gr-pcard__title">पारंपरिक मान्यता</div>
                <div class="gr-pcard__text">राशिफल और मुहूर्त content पारंपरिक मान्यताओं पर based है, scientifically proven नहीं।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">⚡</div>
                <div class="gr-pcard__title">कोई Guarantee नहीं</div>
                <div class="gr-pcard__text">हम किसी outcome की guarantee नहीं देते। Content entertainment और cultural reference के लिए है।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">⚠</div>
                <div class="gr-pcard__title">निर्णय लेने से पहले</div>
                <div class="gr-pcard__text">बड़े जीवन-निर्णय के लिए सिर्फ राशिफल पर depend न करें। Professional advice लें।</div>
            </div>
        </div>

        <h2>पंचांग और समय-संबंधी data</h2>
        <p>हमारी website पर दिए गए सूर्योदय/सूर्यास्त, राहुकाल, चौघड़िया, तिथि, नक्षत्र ये सब <strong>approximate values</strong> हैं जो standard algorithms से calculate की जाती हैं।</p>
        <p>ये North India (Delhi region) के coordinates पर primarily based हैं। आपके specific location पर 5-15 मिनट का variation हो सकता है।</p>

        <h2>Medical Disclaimer</h2>
        <ul>
            <li>Medical advice नहीं है</li>
            <li>किसी doctor की सलाह का विकल्प नहीं है</li>
            <li>Self-diagnosis या self-treatment के लिए use न करें</li>
        </ul>

        <h2>Financial Disclaimer</h2>
        <ul>
            <li>Financial advice नहीं है</li>
            <li>Investment decisions qualified financial advisor की सलाह पर लें</li>
            <li>"शुभ मुहूर्त में invest करने से profit होगा" — ऐसा हम claim नहीं करते</li>
        </ul>

        <h2>External Links</h2>
        <ul>
            <li>External websites के content, accuracy, या safety की ज़िम्मेदारी नहीं लेते</li>
            <li>External link provide करने का मतलब endorsement नहीं है</li>
            <li>Users अपनी responsibility पर external links follow करें</li>
        </ul>

        <h2>Advertising Disclaimer</h2>
        <ul>
            <li>Ads का content हमारे control में नहीं है</li>
            <li>Advertised products/services की quality की guarantee हम नहीं देते</li>
            <li>Ad पर click करने और purchase करने का decision user की responsibility है</li>
        </ul>

        <h2>Limitation of Liability</h2>
        <p>Golden Rashifal किसी भी direct, indirect, incidental, या consequential damages के लिए liable नहीं है। Website "as is" basis पर provide की जाती है।</p>

        <h2>संपर्क</h2>
        <p>इस disclaimer से related कोई सवाल हो: <strong>contact@goldenrashifal.com</strong></p>

        <!-- FAQ -->
        <h2>अक्सर पूछे जाने वाले सवाल</h2>
        <div class="gr-faq">
            <details class="gr-faq__item" open>
                <summary class="gr-faq__q"><strong>क्या राशिफल content पर पूरा भरोसा कर सकते हैं?</strong></summary>
                <div class="gr-faq__a">राशिफल पारंपरिक मान्यताओं पर based है। Entertainment/cultural reference के तौर पर लें। Life decisions सिर्फ राशिफल पर based न लें।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>पंचांग timings 100% accurate हैं?</strong></summary>
                <div class="gr-faq__a">Approximate values हैं। Location पर 5-15 मिनट difference हो सकता है।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Ads में दिखने वाले products recommend किए गए हैं?</strong></summary>
                <div class="gr-faq__a">नहीं। Ads automatically serve होते हैं। हम products endorse नहीं करते।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Content गलत लगे तो क्या करें?</strong></summary>
                <div class="gr-faq__a">Email करें: contact@goldenrashifal.com। 48 घंटे में correction की कोशिश।</div>
            </details>
        </div>

        <!-- CTA -->
        <div class="gr-page-cta">
            <h2 class="gr-page-cta__title"><?php esc_html_e( 'आज का पंचांग देखें', 'golden-rashifal' ); ?></h2>
            <p class="gr-page-cta__text"><?php esc_html_e( 'तिथि, नक्षत्र, योग, करण — सब एक जगह', 'golden-rashifal' ); ?></p>
            <div class="gr-page-cta__buttons">
                <a class="gr-page-cta__btn gr-page-cta__btn--gold" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">पंचांग देखें</a>
                <a class="gr-page-cta__btn gr-page-cta__btn--outline" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">राशिफल पढ़ें</a>
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
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><span class="icon">📜</span> नियम और शर्तें</a>
                <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>"><span class="icon">✏</span> संपादकीय नीति</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="icon">📞</span> संपर्क करें</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="icon">👥</span> हमारे बारे में</a>
                <a href="<?php echo esc_url( home_url( '/dmca/' ) ); ?>"><span class="icon">🛡</span> DMCA</a>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — पारदर्शी और जिम्मेदार', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
