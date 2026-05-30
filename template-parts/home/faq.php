<?php
/**
 * Homepage — Premium FAQ Section
 * Position: directly above footer (after trust-signal section).
 *
 * - Modern accordion using <details>/<summary> with JS-enhanced animation
 * - FAQPage JSON-LD schema embedded inline for Google Rich Results
 * - SEO-friendly heading hierarchy (h2 section title, no h3 inside items)
 * - Mobile-first responsive, AdSense-friendly, zero dependencies
 * - All text via esc_html_e() for i18n compatibility
 *
 * @package GoldenRashifal
 */

$gr_faqs = array(
    array(
        'q' => 'Golden Rashifal क्या है?',
        'a' => 'Golden Rashifal एक जानकारी आधारित मंच है जहाँ राशिफल, पंचांग, चौघड़िया, राहुकाल और विभिन्न मुहूर्तों से जुड़ी जानकारी सरल और उपयोगी रूप में उपलब्ध कराई जाती है।',
    ),
    array(
        'q' => 'क्या राशिफल प्रतिदिन अपडेट किया जाता है?',
        'a' => 'हाँ, राशिफल और अन्य दैनिक जानकारी नियमित रूप से अपडेट की जाती है ताकि पाठकों को समयानुसार नई और उपयोगी जानकारी प्राप्त हो सके।',
    ),
    array(
        'q' => 'क्या यहाँ सभी 12 राशियों की जानकारी उपलब्ध है?',
        'a' => 'हाँ, वेबसाइट पर मेष से मीन तक सभी 12 राशियों की जानकारी उपलब्ध है, जिससे पाठक अपनी राशि के अनुसार दैनिक विवरण देख सकते हैं।',
    ),
    array(
        'q' => 'क्या पंचांग की जानकारी भी मिलती है?',
        'a' => 'हाँ, दैनिक पंचांग से जुड़ी जानकारी जैसे तिथि, नक्षत्र, योग और अन्य महत्वपूर्ण विवरण वेबसाइट पर उपलब्ध कराए जाते हैं।',
    ),
    array(
        'q' => 'क्या चौघड़िया और राहुकाल देखा जा सकता है?',
        'a' => 'हाँ, उपयोगकर्ता प्रतिदिन चौघड़िया और राहुकाल की जानकारी देख सकते हैं, जिसे कई लोग महत्वपूर्ण कार्यों की योजना बनाने में उपयोगी मानते हैं।',
    ),
    array(
        'q' => 'क्या विभिन्न मुहूर्तों की जानकारी उपलब्ध है?',
        'a' => 'हाँ, वेबसाइट पर विवाह, गृह प्रवेश, वाहन, व्यवसाय और अन्य महत्वपूर्ण अवसरों से जुड़े मुहूर्तों की जानकारी उपलब्ध कराई जाती है।',
    ),
    array(
        'q' => 'क्या Golden Rashifal मोबाइल पर सही काम करता है?',
        'a' => 'हाँ, वेबसाइट को मोबाइल, टैबलेट और डेस्कटॉप सभी उपकरणों के लिए अनुकूलित किया गया है ताकि उपयोगकर्ताओं को बेहतर अनुभव मिल सके।',
    ),
    array(
        'q' => 'क्या वेबसाइट का उपयोग निःशुल्क है?',
        'a' => 'हाँ, राशिफल, पंचांग, चौघड़िया और मुहूर्त से जुड़ी अधिकांश जानकारी पाठकों के लिए बिना किसी शुल्क के उपलब्ध कराई जाती है।',
    ),
);
?>

<?php
/* ── FAQPage JSON-LD Schema ─────────────────────────────────────────────── */
$gr_faq_entities = array();
foreach ( $gr_faqs as $item ) {
    $gr_faq_entities[] = array(
        '@type'          => 'Question',
        'name'           => $item['q'],
        'acceptedAnswer' => array(
            '@type' => 'Answer',
            'text'  => $item['a'],
        ),
    );
}
$gr_faq_schema = array(
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => $gr_faq_entities,
);
echo '<script type="application/ld+json">'
    . wp_json_encode( $gr_faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES )
    . '</script>' . "\n";
?>

<section
    class="gr-faq-section"
    id="faq-section"
    aria-labelledby="gr-faq-heading"
>
    <!-- Decorative top border -->
    <div class="gr-faq-section__topline" aria-hidden="true"></div>

    <div class="gr-wrap gr-faq-section__inner">

        <!-- ── Section Header ──────────────────────────────────────── -->
        <header class="gr-faq-section__header">
            <span class="gr-faq-section__eyebrow">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                <?php esc_html_e( 'सहायता', 'golden-rashifal' ); ?>
            </span>
            <h2 class="gr-faq-section__title" id="gr-faq-heading">
                <?php esc_html_e( 'अक्सर पूछे जाने वाले', 'golden-rashifal' ); ?>
                <span class="gr-faq-section__title-accent"><?php esc_html_e( 'प्रश्न', 'golden-rashifal' ); ?></span>
            </h2>
            <p class="gr-faq-section__subtitle">
                <?php esc_html_e( 'राशिफल, पंचांग, चौघड़िया और मुहूर्त से जुड़े सामान्य प्रश्नों के उत्तर।', 'golden-rashifal' ); ?>
            </p>
        </header>

        <!-- ── Accordion List ──────────────────────────────────────── -->
        <div
            class="gr-faq-section__list"
            role="list"
            data-gr-faq-list
        >
            <?php foreach ( $gr_faqs as $idx => $item ) : ?>
            <div
                class="gr-faq-section__item<?php echo 0 === $idx ? ' is-open' : ''; ?>"
                role="listitem"
                data-gr-faq-item
            >
                <button
                    class="gr-faq-section__question"
                    type="button"
                    aria-expanded="<?php echo 0 === $idx ? 'true' : 'false'; ?>"
                    aria-controls="gr-faq-answer-<?php echo esc_attr( $idx ); ?>"
                    data-gr-faq-trigger
                >
                    <span class="gr-faq-section__q-num" aria-hidden="true"><?php printf( '%02d', $idx + 1 ); ?></span>
                    <span class="gr-faq-section__q-text"><?php echo esc_html( $item['q'] ); ?></span>
                    <span class="gr-faq-section__icon" aria-hidden="true">
                        <svg class="gr-faq-section__icon-plus" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        <svg class="gr-faq-section__icon-minus" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </span>
                </button>
                <div
                    class="gr-faq-section__answer-wrap"
                    id="gr-faq-answer-<?php echo esc_attr( $idx ); ?>"
                    role="region"
                    aria-labelledby="gr-faq-trigger-<?php echo esc_attr( $idx ); ?>"
                    data-gr-faq-panel
                >
                    <div class="gr-faq-section__answer">
                        <p><?php echo esc_html( $item['a'] ); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- /.gr-faq-section__list -->

    </div>
    <!-- /.gr-faq-section__inner -->
</section>
