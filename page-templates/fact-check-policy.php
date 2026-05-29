<?php
/**
 * Virtual Page: Fact-Check Policy — Premium Layout.
 * New page for E-E-A-T trust signals.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--factcheck" role="main">

    <!-- Premium Hero -->
    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>Fact-Check Policy</span>
            </div>
            <span class="gr-page-hero__badge">🔍 तथ्य-जाँच नीति</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'Fact-Check Policy — तथ्य-जाँच नीति', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'Golden Rashifal पर प्रकाशित जानकारी की सटीकता सुनिश्चित करने के लिए हम systematic fact-checking process follow करते हैं।', 'golden-rashifal' ); ?></p>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--narrow">

        <h2>हमारी Fact-Check प्रक्रिया</h2>
        <p>ज्योतिष content में misinformation बहुत common है। हम ये ensure करते हैं कि हमारा content reliable sources पर based हो और factual accuracy maintain हो।</p>

        <div class="gr-pcard-grid">
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">1️⃣</div>
                <div class="gr-pcard__title">Source Verification</div>
                <div class="gr-pcard__text">हर claim का source verify किया जाता है। पारंपरिक ग्रंथ, established पंचांग, और astronomical data cross-check।</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">2️⃣</div>
                <div class="gr-pcard__title">Data Validation</div>
                <div class="gr-pcard__text">Panchang timings, तिथि, नक्षत्र calculations standard algorithms से validate। Manual checking भी।</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">3️⃣</div>
                <div class="gr-pcard__title">Language Check</div>
                <div class="gr-pcard__text">Misleading language, exaggerated claims, fear-based statements identify और remove। Balance maintain।</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">4️⃣</div>
                <div class="gr-pcard__title">Peer Review</div>
                <div class="gr-pcard__text">Important content दूसरे team member द्वारा review। Multiple perspectives ensure balance।</div>
            </div>
        </div>

        <h2>क्या verify किया जाता है?</h2>
        <div class="gr-pcard-grid gr-pcard-grid--3">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">📅</div>
                <div class="gr-pcard__title">तिथि और समय</div>
                <div class="gr-pcard__text">Festival dates, muhurat timings, panchang data — सब standard calculations से verify।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">📖</div>
                <div class="gr-pcard__title">शास्त्र संदर्भ</div>
                <div class="gr-pcard__text">ज्योतिष principles original texts से cross-reference। Misquotation avoid।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">⚖</div>
                <div class="gr-pcard__title">Claims और भाषा</div>
                <div class="gr-pcard__text">"100% सटीक" जैसे absolute claims remove। Balanced language ensure।</div>
            </div>
        </div>

        <h2>Correction Process</h2>
        <p>अगर published content में कोई factual error पाया जाता है:</p>
        <ul>
            <li><strong>Minor errors</strong> (typo, spelling) — Silently corrected</li>
            <li><strong>Factual errors</strong> (wrong date, timing) — Corrected + "Updated" note</li>
            <li><strong>Major errors</strong> (misleading information) — Article updated/removed + correction notice</li>
        </ul>
        <p>Correction timeline: <strong>48 घंटे</strong> के अंदर (report मिलने के बाद)</p>

        <h2>Reader Reporting</h2>
        <p>अगर आपको हमारे किसी content में factual error दिखे:</p>
        <ul>
            <li>Email करें: <strong>contact@goldenrashifal.com</strong></li>
            <li>Subject: "Fact-Check Report: [Article Title]"</li>
            <li>Article URL include करें</li>
            <li>Specific error और correct information बताएं</li>
            <li>Source/reference provide करें (if possible)</li>
        </ul>

        <h2>Limitations</h2>
        <p>ईमानदारी से ये स्वीकार करते हैं:</p>
        <ul>
            <li>ज्योतिष content "facts" नहीं — traditional beliefs हैं</li>
            <li>Panchang data approximate है (location-specific variation possible)</li>
            <li>राशिफल general guidance है, personalized prediction नहीं</li>
            <li>Human error संभव है — 100% accuracy guarantee नहीं</li>
        </ul>

        <!-- FAQ -->
        <h2>अक्सर पूछे जाने वाले सवाल</h2>
        <div class="gr-faq">
            <details class="gr-faq__item" open>
                <summary class="gr-faq__q"><strong>Fact-check process कितना समय लेता है?</strong></summary>
                <div class="gr-faq__a">Standard articles के लिए same-day review। Complex astronomical data या festival dates के लिए 24-48 hours।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Reader की report पर क्या action होता है?</strong></summary>
                <div class="gr-faq__a">हर genuine report review की जाती है। Error confirmed होने पर 48 hours में correction publish। Reporter को email acknowledgment।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>ज्योतिष content को "fact" कैसे verify करते हैं?</strong></summary>
                <div class="gr-faq__a">हम beliefs को "facts" नहीं बताते। हम verify करते हैं: source accuracy, calculation correctness, language balance, और traditional reference authenticity।</div>
            </details>
        </div>

        <!-- CTA -->
        <div class="gr-page-cta">
            <h2 class="gr-page-cta__title"><?php esc_html_e( 'हमारा Content पढ़ें', 'golden-rashifal' ); ?></h2>
            <p class="gr-page-cta__text"><?php esc_html_e( 'Fact-checked और editorially reviewed — रोज़ ताज़ा content', 'golden-rashifal' ); ?></p>
            <div class="gr-page-cta__buttons">
                <a class="gr-page-cta__btn gr-page-cta__btn--gold" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">राशिफल पढ़ें</a>
                <a class="gr-page-cta__btn gr-page-cta__btn--outline" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">पंचांग देखें</a>
            </div>
        </div>

        <!-- Trust -->
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
                <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>"><span class="icon">✏</span> संपादकीय नीति</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="icon">👥</span> हमारे बारे में</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>"><span class="icon">⚖</span> अस्वीकरण</a>
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><span class="icon">🔒</span> गोपनीयता नीति</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="icon">📞</span> संपर्क करें</a>
                <a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>"><span class="icon">🍪</span> Cookie Policy</a>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — Fact-Checked & Verified Content', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
