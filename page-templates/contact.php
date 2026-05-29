<?php
/**
 * Virtual Page: Contact Us — Premium Layout.
 * Cards, FAQ, trust block, internal links.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--contact" role="main">

    <!-- Premium Hero -->
    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>संपर्क करें</span>
            </div>
            <span class="gr-page-hero__badge">✉ हमसे बात करें</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'संपर्क करें — Contact Us', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'कोई सवाल, सुझाव, correction request, या feedback हो — हमसे बात करें। हम हर genuine message का जवाब देने की कोशिश करते हैं।', 'golden-rashifal' ); ?></p>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--narrow">

        <!-- Contact Cards -->
        <div class="gr-contact-cards">
            <div class="gr-contact-card">
                <div class="gr-contact-card__icon">📧</div>
                <div class="gr-contact-card__label">Email Address</div>
                <div class="gr-contact-card__value"><a href="mailto:contact@goldenrashifal.com">contact@goldenrashifal.com</a></div>
            </div>
            <div class="gr-contact-card">
                <div class="gr-contact-card__icon">🌐</div>
                <div class="gr-contact-card__label">Website</div>
                <div class="gr-contact-card__value"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Golden Rashifal</a></div>
            </div>
            <div class="gr-contact-card">
                <div class="gr-contact-card__icon">📍</div>
                <div class="gr-contact-card__label">Location</div>
                <div class="gr-contact-card__value">India</div>
            </div>
            <div class="gr-contact-card">
                <div class="gr-contact-card__icon">⏰</div>
                <div class="gr-contact-card__label">Response Time</div>
                <div class="gr-contact-card__value">2-5 Working Days</div>
            </div>
        </div>

        <h2>किन कामों के लिए संपर्क कर सकते हैं?</h2>
        <div class="gr-pcard-grid gr-pcard-grid--3">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">✎</div>
                <div class="gr-pcard__title">Content Correction</div>
                <div class="gr-pcard__text">किसी article में गलत जानकारी दिखी है? हम 48 घंटे के अंदर fix करते हैं।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">💡</div>
                <div class="gr-pcard__title">Feedback / सुझाव</div>
                <div class="gr-pcard__text">कोई नया topic cover करना चाहिए? आपका feedback directly team तक पहुँचता है।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">©</div>
                <div class="gr-pcard__title">Copyright / DMCA</div>
                <div class="gr-pcard__text">Copyrighted material बिना permission use हुआ है? Details के साथ email करें।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">💼</div>
                <div class="gr-pcard__title">Business Inquiry</div>
                <div class="gr-pcard__text">Advertising या collaboration? Subject line में "Business Inquiry" लिखें।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">🔧</div>
                <div class="gr-pcard__title">Technical Issue</div>
                <div class="gr-pcard__text">Website ठीक से load नहीं हो रही? Mobile पर दिक्कत? हमें बताएं।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">🙏</div>
                <div class="gr-pcard__title">Appreciation</div>
                <div class="gr-pcard__text">अगर हमारा content helpful लगा तो बताएं — team को motivation मिलता है!</div>
            </div>
        </div>

        <h2>किन कामों के लिए संपर्क न करें</h2>
        <ul>
            <li><strong>Personal ज्योतिष consultation</strong> — हम paid या free कोई भी personal prediction service नहीं देते।</li>
            <li><strong>Kundli matching / गुण मिलान</strong> — ये service हम provide नहीं करते।</li>
            <li><strong>"मेरी शादी कब होगी?" जैसे personal सवाल</strong> — इनका जवाब देना हमारे scope में नहीं है।</li>
            <li><strong>Spam, link exchange, या guest post requests</strong> — ऐसे emails का reply नहीं दिया जाता।</li>
        </ul>

        <h2>Email भेजते समय ध्यान रखें</h2>
        <ul>
            <li>Subject line clear लिखें (जैसे: "Panchang page पर date correction")</li>
            <li>अगर किसी specific page की बात है तो उसका URL दें</li>
            <li>Screenshot attach कर सकते हैं (optional)</li>
            <li>अपना नाम लिखें (optional, लेकिन helpful)</li>
        </ul>

        <h2>Social Media</h2>
        <div class="gr-pcard-grid gr-pcard-grid--4">
            <div class="gr-pcard" style="text-align:center;padding:20px;">
                <div class="gr-pcard__icon" style="margin:0 auto 8px;">📘</div>
                <div class="gr-pcard__title">Facebook</div>
            </div>
            <div class="gr-pcard" style="text-align:center;padding:20px;">
                <div class="gr-pcard__icon" style="margin:0 auto 8px;">📸</div>
                <div class="gr-pcard__title">Instagram</div>
            </div>
            <div class="gr-pcard" style="text-align:center;padding:20px;">
                <div class="gr-pcard__icon" style="margin:0 auto 8px;">📺</div>
                <div class="gr-pcard__title">YouTube</div>
            </div>
            <div class="gr-pcard" style="text-align:center;padding:20px;">
                <div class="gr-pcard__icon" style="margin:0 auto 8px;">✈</div>
                <div class="gr-pcard__title">Telegram</div>
            </div>
        </div>
        <p style="font-size:.84rem;color:var(--gr-muted);text-align:center;">Social media पर DM का reply हमेशा possible नहीं होता। Important communication के लिए email prefer करें।</p>

        <!-- FAQ -->
        <h2>अक्सर पूछे जाने वाले सवाल</h2>
        <div class="gr-faq">
            <details class="gr-faq__item" open>
                <summary class="gr-faq__q"><strong>Email का reply कितने दिन में मिलता है?</strong></summary>
                <div class="gr-faq__a">आमतौर पर 2-5 working days। हम हर genuine email पढ़ते हैं।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>क्या phone पर बात हो सकती है?</strong></summary>
                <div class="gr-faq__a">फिलहाल phone support available नहीं है। Email सबसे reliable तरीका है।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Guest post या backlink exchange के लिए contact कर सकते हैं?</strong></summary>
                <div class="gr-faq__a">नहीं। हम guest posts accept नहीं करते और link exchange requests का reply नहीं देते।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Content में mistake report करने पर क्या action होता है?</strong></summary>
                <div class="gr-faq__a">हम report verify करते हैं। अगर गलती सही पाई जाती है तो 48 घंटे के अंदर correction publish कर दी जाती है।</div>
            </details>
            <details class="gr-faq__item">
                <summary class="gr-faq__q"><strong>Advertising rates क्या हैं?</strong></summary>
                <div class="gr-faq__a">Subject line में "Advertising Inquiry" लिखकर email करें। Spam-type ads हम accept नहीं करते।</div>
            </details>
        </div>

        <!-- CTA -->
        <div class="gr-page-cta">
            <h2 class="gr-page-cta__title"><?php esc_html_e( 'आज का राशिफल देखें', 'golden-rashifal' ); ?></h2>
            <p class="gr-page-cta__text"><?php esc_html_e( 'अपनी राशि चुनें और आज की भविष्यवाणी पढ़ें', 'golden-rashifal' ); ?></p>
            <div class="gr-page-cta__buttons">
                <a class="gr-page-cta__btn gr-page-cta__btn--gold" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">राशिफल पढ़ें</a>
                <a class="gr-page-cta__btn gr-page-cta__btn--outline" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">हमारे बारे में</a>
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
            <h2 class="gr-internal-links__title"><?php esc_html_e( 'महत्वपूर्ण पेज', 'golden-rashifal' ); ?></h2>
            <div class="gr-internal-links__grid">
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="icon">👥</span> हमारे बारे में</a>
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><span class="icon">🔒</span> गोपनीयता नीति</a>
                <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>"><span class="icon">⚖</span> अस्वीकरण</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><span class="icon">📜</span> नियम और शर्तें</a>
                <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>"><span class="icon">✏</span> संपादकीय नीति</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="icon">🏠</span> मुख्य पृष्ठ</a>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — भरोसेमंद ज्योतिष जानकारी', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
