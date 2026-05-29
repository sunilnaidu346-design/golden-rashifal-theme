<?php
/**
 * Virtual Page: Privacy Policy — Premium Layout.
 * Hero, card sections, trust block, internal links.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--privacy" role="main">

    <!-- Premium Hero -->
    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>गोपनीयता नीति</span>
            </div>
            <span class="gr-page-hero__badge">🔒 आपकी Privacy सुरक्षित</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'गोपनीयता नीति — Privacy Policy', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'Golden Rashifal पर आपकी privacy हमारे लिए महत्वपूर्ण है। ये page बताता है कि हम आपकी information कैसे collect, use और protect करते हैं।', 'golden-rashifal' ); ?></p>
            <div class="gr-page-hero__meta">
                <span>Last Updated: <?php echo esc_html( wp_date( 'F Y' ) ); ?></span>
                <span>Website: <?php echo esc_html( home_url( '/' ) ); ?></span>
            </div>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--narrow">

        <h2>हम कौन सी information collect करते हैं?</h2>

        <h3>Automatically collected data</h3>
        <p>जब आप हमारी website visit करते हैं, तो कुछ information automatically collect होती है:</p>
        <ul>
            <li>IP Address (approximate location identify करने के लिए)</li>
            <li>Browser type और version</li>
            <li>Operating system</li>
            <li>Pages visited और time spent</li>
            <li>Referring website (आप कहाँ से आए)</li>
            <li>Device type (mobile/desktop/tablet)</li>
        </ul>

        <h3>Cookies</h3>
        <div class="gr-pcard-grid gr-pcard-grid--3">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">⚙</div>
                <div class="gr-pcard__title">Essential Cookies</div>
                <div class="gr-pcard__text">Website ठीक से चलाने के लिए ज़रूरी</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">📊</div>
                <div class="gr-pcard__title">Analytics Cookies</div>
                <div class="gr-pcard__text">Traffic patterns समझने के लिए (Google Analytics)</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">📢</div>
                <div class="gr-pcard__title">Advertising Cookies</div>
                <div class="gr-pcard__text">Relevant ads दिखाने के लिए (Google AdSense)</div>
            </div>
        </div>

        <h3>Personal information</h3>
        <p>हम deliberately कोई personal information collect नहीं करते। हमारी website पर कोई registration, login, या account creation feature नहीं है।</p>
        <p>अगर आप हमें email करते हैं, तो आपका email address और message content हमारे पास रहता है — सिर्फ reply देने के purpose से।</p>

        <h2>Google AdSense और Third-Party Advertising</h2>
        <p>हम Google AdSense use करते हैं जो third-party advertising service है। Google और उसके partners:</p>
        <ul>
            <li>Cookies use करके ads personalize कर सकते हैं</li>
            <li>आपकी पिछली visits के based पर relevant ads दिखा सकते हैं</li>
            <li>DoubleClick cookie use करते हैं</li>
        </ul>
        <p>आप <a href="https://adssettings.google.com/" rel="noopener nofollow" target="_blank">Google Ad Settings</a> पर personalized advertising opt-out कर सकते हैं।</p>

        <h2>Google Analytics</h2>
        <p>हम Google Analytics use करते हैं website traffic analyze करने के लिए। ये personally identifiable information collect नहीं करती।</p>
        <p>Opt-out: <a href="https://tools.google.com/dlpage/gaoptout" rel="noopener nofollow" target="_blank">tools.google.com/dlpage/gaoptout</a></p>

        <h2>Data कैसे use होता है?</h2>
        <ul>
            <li>Website improve करने के लिए</li>
            <li>Technical issues identify और fix करने के लिए</li>
            <li>Content strategy plan करने के लिए</li>
            <li>Advertising revenue generate करने के लिए</li>
        </ul>
        <p><strong>हम आपका data किसी third party को sell नहीं करते। कभी नहीं।</strong></p>

        <h2>Data Security</h2>
        <div class="gr-pcard-grid gr-pcard-grid--3">
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">🔐</div>
                <div class="gr-pcard__title">SSL/HTTPS</div>
                <div class="gr-pcard__text">सारा data encrypted travel करता है</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">🔄</div>
                <div class="gr-pcard__title">Regular Updates</div>
                <div class="gr-pcard__text">Security patches timely apply किए जाते हैं</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">👤</div>
                <div class="gr-pcard__title">Limited Access</div>
                <div class="gr-pcard__text">सिर्फ authorized team members को admin access</div>
            </div>
        </div>

        <h2>Children's Privacy</h2>
        <p>हमारी website specifically 13 साल से कम उम्र के बच्चों को target नहीं करती। हम जानबूझकर minors से personal information collect नहीं करते।</p>

        <h2>आपके अधिकार (Your Rights)</h2>
        <ul>
            <li><strong>जानने का अधिकार</strong> — हम क्या data रखते हैं</li>
            <li><strong>Deletion का अधिकार</strong> — अपना data delete करवाने का request</li>
            <li><strong>Opt-out</strong> — advertising cookies disable करने का option</li>
            <li><strong>Complaint</strong> — अगर कोई concern हो तो हमसे संपर्क करें</li>
        </ul>

        <h2>Policy Changes</h2>
        <p>हम ये privacy policy समय-समय पर update कर सकते हैं। Major change होने पर "Last Updated" date change हो जाएगी।</p>

        <h2>संपर्क</h2>
        <p>Privacy से related कोई सवाल हो: <strong>contact@goldenrashifal.com</strong> — Subject line में "Privacy Request" लिखें।</p>

        <!-- FAQ -->
        <h2>अक्सर पूछे जाने वाले सवाल</h2>
        <div class="gr-faq">
            <details class="gr-faq__item" open>
                <summary class="gr-faq__q"><strong>क्या मेरा personal data sell होता है?</strong></summary>
                <div class="gr-faq__a">नहीं। हम किसी का personal data sell नहीं करते। Revenue model advertising based है।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Cookies disable कर सकते हैं?</strong></summary>
                <div class="gr-faq__a">हाँ। Browser settings से cookies disable कर सकते हैं। कुछ features ठीक से काम नहीं कर सकते।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Google AdSense ads personalized होते हैं?</strong></summary>
                <div class="gr-faq__a">हाँ, Google browsing history based पर personalized ads दिखा सकता है। Google Ad Settings से control कर सकते हैं।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>क्या website पर account बनाना ज़रूरी है?</strong></summary>
                <div class="gr-faq__a">नहीं। कोई registration system नहीं है। सारा content freely accessible है।</div>
            </details>
        </div>

        <!-- CTA -->
        <div class="gr-page-cta">
            <h2 class="gr-page-cta__title"><?php esc_html_e( 'आज का राशिफल पढ़ें', 'golden-rashifal' ); ?></h2>
            <p class="gr-page-cta__text"><?php esc_html_e( 'निःशुल्क दैनिक भविष्यवाणी — 12 राशियों के लिए', 'golden-rashifal' ); ?></p>
            <div class="gr-page-cta__buttons">
                <a class="gr-page-cta__btn gr-page-cta__btn--gold" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">राशिफल पढ़ें</a>
                <a class="gr-page-cta__btn gr-page-cta__btn--outline" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">पंचांग देखें</a>
            </div>
        </div>

        <!-- Trust Block -->
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

        <!-- Internal Links -->
        <div class="gr-internal-links">
            <h2 class="gr-internal-links__title"><?php esc_html_e( 'संबंधित पेज', 'golden-rashifal' ); ?></h2>
            <div class="gr-internal-links__grid">
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="icon">👥</span> हमारे बारे में</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>"><span class="icon">⚖</span> अस्वीकरण</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><span class="icon">📜</span> नियम और शर्तें</a>
                <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>"><span class="icon">✏</span> संपादकीय नीति</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="icon">📞</span> संपर्क करें</a>
                <a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>"><span class="icon">🍪</span> Cookie Policy</a>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — आपकी Privacy हमारी प्राथमिकता', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
