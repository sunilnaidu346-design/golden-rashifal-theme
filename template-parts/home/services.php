<?php
/**
 * Homepage — 8 service cards (2 rows × 4).
 * Matches screenshot 1: colored circular icons, Hindi title, English subtitle, description, "देखें >" link.
 *
 * @package GoldenRashifal
 */

$services = array(
    array( 'title' => 'आज का राशिफल', 'en' => 'Daily Horoscope', 'desc' => 'सभी 12 राशियों का विस्तृत दैनिक भविष्यफल पढ़ें', 'icon' => '☀', 'color' => '#ff8c00', 'badge' => 'आज', 'url' => '/rashifal/' ),
    array( 'title' => 'साप्ताहिक राशिफल', 'en' => 'Weekly Horoscope', 'desc' => 'इस सप्ताह आपकी राशि के लिए क्या है खास', 'icon' => '📊', 'color' => '#dc3545', 'badge' => 'इस सप्ताह', 'url' => '/weekly-rashifal/' ),
    array( 'title' => 'मासिक राशिफल', 'en' => 'Monthly Horoscope', 'desc' => 'इस महीने के सभी ग्रहों का आप पर प्रभाव', 'icon' => '🌙', 'color' => '#2563eb', 'badge' => 'इस माह', 'url' => '/monthly-rashifal/' ),
    array( 'title' => 'चौघड़िया', 'en' => 'Choghadiya Today', 'desc' => 'शुभ और अशुभ समय की जानकारी', 'icon' => '🔥', 'color' => '#ff8c00', 'badge' => 'आज', 'url' => '/choghadiya/' ),
    array( 'title' => 'राहुकाल', 'en' => 'Rahukaal Timing', 'desc' => 'आज राहु काल और बचने के उपाय', 'icon' => '🚫', 'color' => '#dc3545', 'badge' => '07:30-09:00', 'url' => '/rahukaal/' ),
    array( 'title' => 'पंचांग', 'en' => "Today's Panchang", 'desc' => 'तिथि, नक्षत्र, योग, करण की जानकारी', 'icon' => '🪐', 'color' => '#f59e0b', 'badge' => 'आज', 'url' => '/panchang/' ),
    array( 'title' => 'त्योहार कैलेंडर', 'en' => 'Festival Calendar', 'desc' => '2025 के सभी हिंदू त्योहारों की सूची', 'icon' => '🌺', 'color' => '#10b981', 'badge' => '2025', 'url' => '/festival/' ),
    array( 'title' => 'मुहूर्त', 'en' => 'Auspicious Muhurat', 'desc' => 'विवाह, गृह प्रवेश और अन्य शुभ मुहूर्त', 'icon' => '⭐', 'color' => '#7c3aed', 'badge' => '2025', 'url' => '/muhurat/' ),
);
?>
<section class="gr-section gr-section--services">
    <div class="gr-wrap">
        <header class="gr-section__head gr-section__head--center">
            <span class="gr-section__badge">● Live ज्योतिष सेवाएं</span>
            <h2 class="gr-section__title">ज्योतिष <span class="gr-text--orange">सेवाएं</span></h2>
            <p class="gr-section__sub"><?php esc_html_e( 'सभी प्रमुख ज्योतिष सेवाएं एक जगह', 'golden-rashifal' ); ?></p>
        </header>

        <div class="gr-services-grid">
            <?php foreach ( $services as $s ) : ?>
            <a class="gr-service-card" href="<?php echo esc_url( home_url( $s['url'] ) ); ?>">
                <span class="gr-service-card__badge"><?php echo esc_html( $s['badge'] ); ?></span>
                <span class="gr-service-card__icon" style="background:<?php echo esc_attr( $s['color'] ); ?>"><?php echo $s['icon']; ?></span>
                <h3 class="gr-service-card__title"><?php echo esc_html( $s['title'] ); ?></h3>
                <span class="gr-service-card__en"><?php echo esc_html( $s['en'] ); ?></span>
                <p class="gr-service-card__desc"><?php echo esc_html( $s['desc'] ); ?></p>
                <span class="gr-service-card__link">देखें ></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
