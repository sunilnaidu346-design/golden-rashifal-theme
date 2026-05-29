<?php
/**
 * Virtual Page: Terms & Conditions — Premium Layout.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--terms" role="main">

    <!-- Premium Hero -->
    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>नियम और शर्तें</span>
            </div>
            <span class="gr-page-hero__badge">📜 उपयोग की शर्तें</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'नियम और शर्तें — Terms & Conditions', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'Golden Rashifal website का उपयोग करने से पहले कृपया ये नियम और शर्तें ध्यान से पढ़ें।', 'golden-rashifal' ); ?></p>
            <div class="gr-page-hero__meta">
                <span>Last Updated: January 2026</span>
            </div>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--narrow">

        <h2>1. स्वीकृति (Acceptance)</h2>
        <p>इस website को access करके आप इन Terms & Conditions को accept करते हैं। अगर आप किसी शर्त से असहमत हैं, तो कृपया website का उपयोग न करें।</p>

        <h2>2. Website का उद्देश्य</h2>
        <p>Golden Rashifal एक informational website है। हम ज्योतिष, पंचांग, राशिफल, वास्तु, मुहूर्त, और हिंदू त्योहारों से related content provide करते हैं। ये educational और informational purpose के लिए है।</p>

        <h2>3. Content Disclaimer</h2>
        <div class="gr-pcard-grid gr-pcard-grid--4">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">⚡</div>
                <div class="gr-pcard__title">No Guarantee</div>
                <div class="gr-pcard__text">Prediction accuracy की guarantee नहीं</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">◐</div>
                <div class="gr-pcard__title">Approximate Data</div>
                <div class="gr-pcard__text">पंचांग data approximate है</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">☆</div>
                <div class="gr-pcard__title">General Guidance</div>
                <div class="gr-pcard__text">राशिफल personalized prediction नहीं</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">⚖</div>
                <div class="gr-pcard__title">No Liability</div>
                <div class="gr-pcard__text">Remedy results की ज़िम्मेदारी नहीं</div>
            </div>
        </div>

        <h2>4. Intellectual Property</h2>
        <p>इस website पर सभी content — text, images, graphics, layout — Golden Rashifal की intellectual property है। बिना written permission के copy, reproduce, या distribute करना prohibited है।</p>
        <p>आप personal, non-commercial use के लिए content पढ़ और link share कर सकते हैं।</p>

        <h2>5. User Conduct</h2>
        <ul>
            <li>Automated tool (scraper, bot) से content copy न करें</li>
            <li>Website functionality disrupt करने की कोशिश न करें</li>
            <li>Offensive, hateful, या inappropriate content submit न करें</li>
            <li>किसी दूसरे person की identity impersonate न करें</li>
        </ul>

        <h2>6. Third-Party Links</h2>
        <p>External websites का content, privacy practices, या accuracy हमारी ज़िम्मेदारी नहीं है।</p>

        <h2>7. Advertising</h2>
        <p>हम Google AdSense के through ads display करते हैं। Products या services की quality हमारी responsibility नहीं है। Advertising revenue से ही website free content provide करती है।</p>

        <h2>8. Limitation of Liability</h2>
        <p>Golden Rashifal किसी भी direct, indirect, incidental, या consequential damage के लिए liable नहीं है।</p>

        <h2>9. Changes</h2>
        <p>हम कभी भी website content modify, features add/remove, या website temporarily/permanently बंद कर सकते हैं।</p>

        <h2>10. Governing Law</h2>
        <p>ये Terms भारतीय कानून (Indian Law) के अधीन हैं। किसी dispute में भारत की courts jurisdiction रखेंगी।</p>

        <h2>11. संपर्क</h2>
        <p>✉ Email: <strong>contact@goldenrashifal.com</strong></p>

        <!-- FAQ -->
        <h2>अक्सर पूछे जाने वाले सवाल</h2>
        <div class="gr-faq">
            <details class="gr-faq__item" open>
                <summary class="gr-faq__q"><strong>क्या इस website का content free है?</strong></summary>
                <div class="gr-faq__a">हाँ, सभी content free है। Revenue advertising से आती है।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>क्या content अपने blog पर copy कर सकता हूँ?</strong></summary>
                <div class="gr-faq__a">नहीं। Link share कर सकते हैं, full article copy prohibited है।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>ज्योतिष predictions ग़लत निकलें तो?</strong></summary>
                <div class="gr-faq__a">Content informational है, guaranteed prediction नहीं। Important decisions में professional advice लें।</div>
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
                <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>"><span class="icon">✏</span> संपादकीय नीति</a>
                <a href="<?php echo esc_url( home_url( '/dmca/' ) ); ?>"><span class="icon">🛡</span> DMCA</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="icon">📞</span> संपर्क करें</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="icon">👥</span> हमारे बारे में</a>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — पारदर्शी और जिम्मेदार', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
