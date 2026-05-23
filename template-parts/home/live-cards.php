<?php
/**
 * Homepage — Live Astrology Cards (Today / Weekly / Monthly Rashifal,
 * Choghadiya, Rahukaal, Panchang, Festival Calendar, Muhurat).
 *
 * Built as plain anchor cards for crawlable, AdSense-friendly markup.
 *
 * @package GoldenRashifal
 */

$cards = array(
    array(
        'title'  => __( 'आज का राशिफल', 'golden-rashifal' ),
        'desc'   => __( '12 राशियों के लिए आज का संक्षिप्त मार्गदर्शन — काम, पैसा, सेहत और रिश्तों पर एक नज़र।', 'golden-rashifal' ),
        'cta'    => __( 'पढ़ें', 'golden-rashifal' ),
        'url'    => home_url( '/rashifal/' ),
        'icon'   => '✶',
        'accent' => 'gold',
    ),
    array(
        'title'  => __( 'साप्ताहिक राशिफल', 'golden-rashifal' ),
        'desc'   => __( 'इस सप्ताह की सामान्य प्रवृत्ति और कुछ काम की बातें, जिनसे आपके फ़ैसले थोड़े आसान हो सकते हैं।', 'golden-rashifal' ),
        'cta'    => __( 'देखें', 'golden-rashifal' ),
        'url'    => home_url( '/weekly-rashifal/' ),
        'icon'   => '☼',
        'accent' => 'orange',
    ),
    array(
        'title'  => __( 'मासिक राशिफल', 'golden-rashifal' ),
        'desc'   => __( 'पूरे महीने का संतुलित अवलोकन — कब आगे बढ़ें, कब रुककर सोचें, क्या ध्यान रखें।', 'golden-rashifal' ),
        'cta'    => __( 'खोलें', 'golden-rashifal' ),
        'url'    => home_url( '/monthly-rashifal/' ),
        'icon'   => '☾',
        'accent' => 'pink',
    ),
    array(
        'title'  => __( 'आज का चौघड़िया', 'golden-rashifal' ),
        'desc'   => __( 'दिन और रात के चौघड़िया का सरल चार्ट — शुभ, अमृत, लाभ, चर के साथ-साथ काल, रोग, उद्वेग की पहचान।', 'golden-rashifal' ),
        'cta'    => __( 'चार्ट देखें', 'golden-rashifal' ),
        'url'    => home_url( '/choghadiya/' ),
        'icon'   => '⏳',
        'accent' => 'gold',
    ),
    array(
        'title'  => __( 'राहुकाल', 'golden-rashifal' ),
        'desc'   => __( 'आज का अनुमानित राहुकाल। कई परंपराओं में नई शुरुआत के लिए यह कम उपयुक्त समय माना जाता है।', 'golden-rashifal' ),
        'cta'    => __( 'समय जानें', 'golden-rashifal' ),
        'url'    => home_url( '/rahukaal/' ),
        'icon'   => '⚠',
        'accent' => 'orange',
    ),
    array(
        'title'  => __( 'पंचांग', 'golden-rashifal' ),
        'desc'   => __( 'तिथि, वार, नक्षत्र, योग, करण और सूर्योदय-सूर्यास्त — एक नज़र में पूरा दिन।', 'golden-rashifal' ),
        'cta'    => __( 'पंचांग पढ़ें', 'golden-rashifal' ),
        'url'    => home_url( '/panchang/' ),
        'icon'   => '☀',
        'accent' => 'gold',
    ),
    array(
        'title'  => __( 'त्योहार कैलेंडर', 'golden-rashifal' ),
        'desc'   => __( 'आने वाले प्रमुख हिंदू त्योहार, उनकी परंपरा और सामान्य पूजा-विधि — सरल भाषा में।', 'golden-rashifal' ),
        'cta'    => __( 'कैलेंडर देखें', 'golden-rashifal' ),
        'url'    => home_url( '/festival/' ),
        'icon'   => '🪔',
        'accent' => 'pink',
    ),
    array(
        'title'  => __( 'शुभ मुहूर्त', 'golden-rashifal' ),
        'desc'   => __( 'विवाह, गृह प्रवेश, नामकरण, मुंडन और अन्य सामान्य संस्कारों के लिए संदर्भ-सूचना।', 'golden-rashifal' ),
        'cta'    => __( 'मुहूर्त देखें', 'golden-rashifal' ),
        'url'    => home_url( '/muhurat/' ),
        'icon'   => '✦',
        'accent' => 'orange',
    ),
);
?>
<section class="gr-section gr-section--cards" aria-label="<?php esc_attr_e( 'मुख्य ज्योतिष कार्ड', 'golden-rashifal' ); ?>">
    <div class="gr-wrap">
        <header class="gr-section__head">
            <h2 class="gr-section__title"><?php esc_html_e( 'एक जगह — रोज़ का सब कुछ', 'golden-rashifal' ); ?></h2>
            <p class="gr-section__sub"><?php esc_html_e( 'राशिफल, पंचांग, चौघड़िया से लेकर मुहूर्त तक — साफ़, संतुलित और जल्दी पढ़े जाने वाले छोटे कार्ड।', 'golden-rashifal' ); ?></p>
        </header>

        <div class="gr-cards-grid">
            <?php foreach ( $cards as $c ) : ?>
                <a class="gr-acard gr-acard--<?php echo esc_attr( $c['accent'] ); ?>" href="<?php echo esc_url( $c['url'] ); ?>">
                    <span class="gr-acard__icon" aria-hidden="true"><?php echo esc_html( $c['icon'] ); ?></span>
                    <h3 class="gr-acard__title"><?php echo esc_html( $c['title'] ); ?></h3>
                    <p class="gr-acard__desc"><?php echo esc_html( $c['desc'] ); ?></p>
                    <span class="gr-acard__cta">
                        <?php echo esc_html( $c['cta'] ); ?>
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
