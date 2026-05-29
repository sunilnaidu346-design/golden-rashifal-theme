<?php
/**
 * Virtual Page: Editorial Policy — Premium Layout.
 * E-E-A-T trust page with process cards, standards, FAQ.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--editorial" role="main">

    <!-- Premium Hero -->
    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>संपादकीय नीति</span>
            </div>
            <span class="gr-page-hero__badge">✏ Editorial Standards</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'संपादकीय नीति — Editorial Policy', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'Golden Rashifal पर publish होने वाले हर article की quality, accuracy, और balance maintain करने के लिए हम strict editorial process follow करते हैं।', 'golden-rashifal' ); ?></p>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--narrow">

        <h2>हमारे Content Standards</h2>
        <p>हम ज्योतिष और आध्यात्मिक content publish करते हैं — एक ऐसा domain जहाँ misinformation और exaggeration बहुत common है। हमारी editorial policy का मकसद है — responsible और balanced content create करना।</p>

        <div class="gr-pcard-grid gr-pcard-grid--3">
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">◎</div>
                <div class="gr-pcard__title">Accuracy (सटीकता)</div>
                <div class="gr-pcard__text">Panchang data astronomical calculations पर based। Standard algorithms use करते हैं। Approximate values clearly mention।</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">⚖</div>
                <div class="gr-pcard__title">Balance (संतुलन)</div>
                <div class="gr-pcard__text">"पारंपरिक रूप से माना जाता है" — न blindly promote, न reject। Traditional beliefs को respect with balance।</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">✎</div>
                <div class="gr-pcard__title">Clarity (स्पष्टता)</div>
                <div class="gr-pcard__text">Technical jargon simple Hindi में। Sanskrit terms + translation। 18 साल का student भी समझ सके।</div>
            </div>
        </div>

        <h2>Content Creation Process</h2>
        <div class="gr-pcard-grid">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">1️⃣</div>
                <div class="gr-pcard__title">Step 1: Research</div>
                <div class="gr-pcard__text">Traditional texts, reliable sources, established ज्योतिष principles से research। Random internet content copy नहीं।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">2️⃣</div>
                <div class="gr-pcard__title">Step 2: Writing</div>
                <div class="gr-pcard__text">90% Hindi + 10% English mix। Conversational tone, short paragraphs, specific details।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">3️⃣</div>
                <div class="gr-pcard__title">Step 3: Review</div>
                <div class="gr-pcard__text">Misleading claims check, balanced भाषा, factual errors, family-safe, practical value verify।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">4️⃣</div>
                <div class="gr-pcard__title">Step 4: Updates</div>
                <div class="gr-pcard__text">Published content regularly review। Outdated info update। Reader feedback पर corrections।</div>
            </div>
        </div>

        <h2>ये हम नहीं करते</h2>
        <ul>
            <li><strong>Fear-based content</strong> — "ये न करें वरना बर्बाद हो जाएँगे" ऐसी भाषा नहीं</li>
            <li><strong>Guaranteed predictions</strong> — "100% सटीक भविष्यवाणी" ऐसे claims नहीं</li>
            <li><strong>Paid promotions without disclosure</strong> — sponsored content clearly marked</li>
            <li><strong>Plagiarism</strong> — दूसरी websites से content copy strictly prohibited</li>
            <li><strong>Sensationalism</strong> — clickbait titles या exaggerated claims avoid</li>
        </ul>

        <h2>Sources और Attribution</h2>
        <div class="gr-pcard-grid gr-pcard-grid--4">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">📚</div>
                <div class="gr-pcard__title">ज्योतिष ग्रंथ</div>
                <div class="gr-pcard__text">बृहत् पाराशर होराशास्त्र, फलदीपिका</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">📅</div>
                <div class="gr-pcard__title">Standard पंचांग</div>
                <div class="gr-pcard__text">Established पंचांग publications</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">🔬</div>
                <div class="gr-pcard__title">Astronomical Data</div>
                <div class="gr-pcard__text">Standard sunrise/sunset algorithms</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">🏛</div>
                <div class="gr-pcard__title">Government Sources</div>
                <div class="gr-pcard__text">Festival dates, public holidays</div>
            </div>
        </div>

        <h2>Corrections Policy</h2>
        <p>गलती हो सकती है — हम human हैं। अगर कोई factual error reported हो:</p>
        <ul>
            <li>48 घंटे के अंदर review</li>
            <li>Error confirmed — immediate correction</li>
            <li>Major corrections पर "Updated" note add</li>
        </ul>
        <p>Errors report करने के लिए: <strong>contact@goldenrashifal.com</strong></p>

        <h2>AI Content Disclosure</h2>
        <p>हम content creation में AI tools की help ले सकते हैं — research, drafting, या structuring के लिए। लेकिन हर article <strong>human-reviewed और human-edited</strong> है। Raw AI output publish नहीं किया जाता।</p>

        <h2>Advertising और Editorial Independence</h2>
        <p>Ads revenue source हैं, लेकिन advertisers editorial content influence नहीं करते। Ad content और editorial content separate रहता है।</p>

        <!-- FAQ -->
        <h2>अक्सर पूछे जाने वाले सवाल</h2>
        <div class="gr-faq">
            <details class="gr-faq__item" open>
                <summary class="gr-faq__q"><strong>क्या articles में AI-generated content है?</strong></summary>
                <div class="gr-faq__a">AI tools research/drafting में use हो सकते हैं। लेकिन हर article human-reviewed, fact-checked, और manually edited है।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Content में गलती मिले तो कैसे report करें?</strong></summary>
                <div class="gr-faq__a">contact@goldenrashifal.com — article URL और specific error mention करें। 48 hours में review।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Sponsored content कैसे identify करें?</strong></summary>
                <div class="gr-faq__a">"Sponsored", "Promoted", या "Paid Partnership" label clearly visible होगा।</div>
            </details>
        </div>

        <!-- CTA -->
        <div class="gr-page-cta">
            <h2 class="gr-page-cta__title"><?php esc_html_e( 'हमारी Content Quality देखें', 'golden-rashifal' ); ?></h2>
            <p class="gr-page-cta__text"><?php esc_html_e( 'आज का राशिफल और पंचांग पढ़ें — हमारे editorial standards का अनुभव करें', 'golden-rashifal' ); ?></p>
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

        <!-- Internal Links -->
        <div class="gr-internal-links">
            <h2 class="gr-internal-links__title"><?php esc_html_e( 'संबंधित पेज', 'golden-rashifal' ); ?></h2>
            <div class="gr-internal-links__grid">
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="icon">👥</span> हमारे बारे में</a>
                <a href="<?php echo esc_url( home_url( '/fact-check-policy/' ) ); ?>"><span class="icon">🔍</span> Fact-Check Policy</a>
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><span class="icon">🔒</span> गोपनीयता नीति</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>"><span class="icon">⚖</span> अस्वीकरण</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><span class="icon">📜</span> नियम और शर्तें</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="icon">📞</span> संपर्क करें</a>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — Responsible & Balanced Content', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
