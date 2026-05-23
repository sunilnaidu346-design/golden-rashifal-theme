<?php
/**
 * Homepage — Astrology service cards with unique per-topic SVG icons.
 * Each card has a different icon color via CSS modifier class.
 * Icons are inline SVG — no background boxes, just clean strokes.
 *
 * @package GoldenRashifal
 */

$cards = array(
    array(
        'key'   => 'rashifal',
        'title' => __( 'दैनिक राशिफल', 'golden-rashifal' ),
        'desc'  => __( '12 राशियों का संक्षिप्त दैनिक मार्गदर्शन — करियर, सेहत और रिश्तों पर।', 'golden-rashifal' ),
        'url'   => home_url( '/rashifal/' ),
        'icon'  => '<path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z"/>',
    ),
    array(
        'key'   => 'panchang',
        'title' => __( 'आज का पंचांग', 'golden-rashifal' ),
        'desc'  => __( 'तिथि, नक्षत्र, योग, करण और सूर्योदय-सूर्यास्त — एक नज़र में।', 'golden-rashifal' ),
        'url'   => home_url( '/panchang/' ),
        'icon'  => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/>',
    ),
    array(
        'key'   => 'choghadiya',
        'title' => __( 'चौघड़िया', 'golden-rashifal' ),
        'desc'  => __( 'शुभ, अमृत, लाभ और अशुभ समय का सरल चार्ट।', 'golden-rashifal' ),
        'url'   => home_url( '/choghadiya/' ),
        'icon'  => '<path d="M12 2v10l7 4M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/>',
    ),
    array(
        'key'   => 'muhurat',
        'title' => __( 'शुभ मुहूर्त', 'golden-rashifal' ),
        'desc'  => __( 'विवाह, गृह प्रवेश, नामकरण के लिए पारंपरिक संदर्भ।', 'golden-rashifal' ),
        'url'   => home_url( '/muhurat/' ),
        'icon'  => '<path d="M9 12l2 2 4-4M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/>',
    ),
    array(
        'key'   => 'rahukaal',
        'title' => __( 'राहुकाल', 'golden-rashifal' ),
        'desc'  => __( 'आज का अनुमानित राहुकाल समय और उसकी पारंपरिक समझ।', 'golden-rashifal' ),
        'url'   => home_url( '/rahukaal/' ),
        'icon'  => '<path d="M12 9v4M12 17h.01M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/>',
    ),
    array(
        'key'   => 'numerology',
        'title' => __( 'अंकज्योतिष', 'golden-rashifal' ),
        'desc'  => __( 'मूलांक, भाग्यांक और नामांक की बुनियादी जानकारी।', 'golden-rashifal' ),
        'url'   => home_url( '/numerology/' ),
        'icon'  => '<path d="M4 6h4M4 12h6M4 18h8M15 4v16M12 8h6M12 16h6"/>',
    ),
    array(
        'key'   => 'vastu',
        'title' => __( 'वास्तु टिप्स', 'golden-rashifal' ),
        'desc'  => __( 'घर और ऑफ़िस के लिए सामान्य वास्तु सुझाव।', 'golden-rashifal' ),
        'url'   => home_url( '/vastu/' ),
        'icon'  => '<path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6"/>',
    ),
    array(
        'key'   => 'festival',
        'title' => __( 'त्योहार कैलेंडर', 'golden-rashifal' ),
        'desc'  => __( 'आने वाले हिंदू त्योहार, उनकी तिथि और परंपरा।', 'golden-rashifal' ),
        'url'   => home_url( '/festival/' ),
        'icon'  => '<path d="M8 2v4M16 2v4M3 10h18M5 4h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/>',
    ),
);
?>
<section class="gr-section">
    <div class="gr-wrap">
        <div class="gr-section__header gr-section__header--center">
            <span class="gr-section__eyebrow"><?php esc_html_e( 'सेवाएँ', 'golden-rashifal' ); ?></span>
            <h2 class="gr-section__title"><?php esc_html_e( 'रोज़ का सब कुछ — एक जगह', 'golden-rashifal' ); ?></h2>
            <p class="gr-section__desc"><?php esc_html_e( 'राशिफल से लेकर वास्तु तक, हर विषय पर संक्षिप्त और संतुलित जानकारी।', 'golden-rashifal' ); ?></p>
        </div>

        <div class="gr-cards">
            <?php foreach ( $cards as $c ) : ?>
            <a class="gr-card gr-card--<?php echo esc_attr( $c['key'] ); ?>" href="<?php echo esc_url( $c['url'] ); ?>">
                <span class="gr-card__icon">
                    <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><?php echo $c['icon']; ?></svg>
                </span>
                <h3 class="gr-card__title"><?php echo esc_html( $c['title'] ); ?></h3>
                <p class="gr-card__desc"><?php echo esc_html( $c['desc'] ); ?></p>
                <span class="gr-card__link">
                    <?php esc_html_e( 'पढ़ें', 'golden-rashifal' ); ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h13m-5-5 5 5-5 5"/></svg>
                </span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
