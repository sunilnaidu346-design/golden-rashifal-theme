<?php
/**
 * Virtual Page: Correction Policy — Premium Layout.
 * E-E-A-T trust page showing correction/update process.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--correction" role="main">

    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>Correction Policy</span>
            </div>
            <span class="gr-page-hero__badge">✎ सुधार नीति</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'Correction Policy — सुधार नीति', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'Golden Rashifal पर published content में अगर कोई factual error पाया जाता है तो हम तुरंत action लेते हैं। ये page हमारी correction process बताता है।', 'golden-rashifal' ); ?></p>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--narrow">

        <h2>हमारी Correction Process</h2>
        <p>गलतियाँ हो सकती हैं — हम human हैं। लेकिन हमारा commitment है कि हर reported error को seriously लिया जाए और जल्द-से-जल्द fix किया जाए।</p>

        <div class="gr-pcard-grid gr-pcard-grid--3">
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">1️⃣</div>
                <div class="gr-pcard__title">Report Receive</div>
                <div class="gr-pcard__text">Reader या team member error report करता है। Email, comment, या internal review से।</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">2️⃣</div>
                <div class="gr-pcard__title">Verification</div>
                <div class="gr-pcard__text">Editorial team reported error verify करती है। Source check, calculation re-verify, fact-check।</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">3️⃣</div>
                <div class="gr-pcard__title">Correction</div>
                <div class="gr-pcard__text">Error confirmed होने पर 48 hours में correction publish। "Updated" note add।</div>
            </div>
        </div>

        <h2>Correction Categories</h2>
        <div class="gr-pcard-grid">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">📝</div>
                <div class="gr-pcard__title">Minor Corrections</div>
                <div class="gr-pcard__text">Typos, spelling errors, formatting issues — silently corrected without notice।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">⚠</div>
                <div class="gr-pcard__title">Factual Corrections</div>
                <div class="gr-pcard__text">Wrong dates, incorrect timings, factual errors — corrected + "Updated" note visible।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">🚨</div>
                <div class="gr-pcard__title">Major Corrections</div>
                <div class="gr-pcard__text">Misleading info, major calculation error — article updated/removed + correction notice + email to reporter।</div>
            </div>
        </div>

        <h2>Error Report कैसे करें?</h2>
        <ul>
            <li>Email: <strong>contact@goldenrashifal.com</strong></li>
            <li>Subject: "Correction Report: [Article Title]"</li>
            <li>Article URL include करें</li>
            <li>Specific error और correct information बताएं</li>
            <li>Source/reference provide करें (if possible)</li>
        </ul>

        <h2>Timeline</h2>
        <ul>
            <li><strong>Acknowledgment:</strong> 24 hours के अंदर</li>
            <li><strong>Verification:</strong> 24-48 hours</li>
            <li><strong>Correction publish:</strong> 48 hours (verification के बाद)</li>
            <li><strong>Reporter notification:</strong> Correction publish होने पर email</li>
        </ul>

        <h2>हमारी Commitment</h2>
        <p>हम accuracy को seriously लेते हैं। अगर कोई reader हमें error बताता है और वो genuine पाया जाता है, तो हम correction करते हैं — चाहे article कितना भी पुराना हो। Reader feedback हमारे content quality improvement का सबसे important source है।</p>

        <h2>अक्सर पूछे जाने वाले सवाल</h2>
        <div class="gr-faq">
            <details class="gr-faq__item" open>
                <summary class="gr-faq__q"><strong>Correction report करने पर कितने दिन में fix होता है?</strong></summary>
                <div class="gr-faq__a">Verification के बाद 48 hours में। Total timeline report से 3-4 working days।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Anonymous report कर सकते हैं?</strong></summary>
                <div class="gr-faq__a">हाँ। Name देना optional है। Error details और article URL ज़रूर दें।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>पुराने article में error हो तो?</strong></summary>
                <div class="gr-faq__a">कोई time limit नहीं। चाहे article 1 साल पुराना हो — error report करें, हम fix करेंगे।</div>
            </details>
        </div>

        <div class="gr-page-cta">
            <h2 class="gr-page-cta__title"><?php esc_html_e( 'Error Report करें', 'golden-rashifal' ); ?></h2>
            <p class="gr-page-cta__text"><?php esc_html_e( 'कोई गलती दिखी? हमें तुरंत बताएं', 'golden-rashifal' ); ?></p>
            <div class="gr-page-cta__buttons">
                <a class="gr-page-cta__btn gr-page-cta__btn--gold" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">संपर्क करें</a>
                <a class="gr-page-cta__btn gr-page-cta__btn--outline" href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">संपादकीय नीति</a>
            </div>
        </div>

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
                <a href="<?php echo esc_url( home_url( '/fact-check-policy/' ) ); ?>"><span class="icon">🔍</span> Fact-Check Policy</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="icon">👥</span> हमारे बारे में</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="icon">📞</span> संपर्क करें</a>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — Transparent Correction Process', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
