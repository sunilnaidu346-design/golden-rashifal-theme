<?php
/**
 * Homepage — Festival Calendar section.
 * Matches screenshot 3: festival cards with date, description, badges.
 *
 * @package GoldenRashifal
 */

$festivals = array(
    array( 'name' => 'महाशिवरात्रि', 'date' => '26 फरवरी 2025', 'desc' => 'भगवान शिव की महारात्रि - व्रत, पूजा और जागरण का पर्व', 'badge' => 'अति महत्वपूर्ण', 'color' => '#ff8c00' ),
    array( 'name' => 'होली', 'date' => '14 मार्च 2025', 'desc' => 'रंगों का त्योहार - प्रेम, खुशी और एकता का उत्सव', 'badge' => 'प्रमुख त्योहार', 'color' => '#e91e8c' ),
    array( 'name' => 'राम नवमी', 'date' => '6 अप्रैल 2025', 'desc' => 'भगवान श्री राम का जन्मोत्सव - धर्म और मर्यादा का पर्व', 'badge' => 'शुभ दिन', 'color' => '#10b981' ),
    array( 'name' => 'हनुमान जयंती', 'date' => '12 अप्रैल 2025', 'desc' => 'श्री हनुमान जी का प्राकट्य दिवस - शक्ति और भक्ति का पर्व', 'badge' => 'पवित्र दिवस', 'color' => '#f59e0b' ),
    array( 'name' => 'नवरात्रि', 'date' => '22 सितम्बर 2025', 'desc' => 'माँ दुर्गा के नौ स्वरूपों की पूजा - शक्ति का महोत्सव', 'badge' => 'प्रमुख त्योहार', 'color' => '#e91e8c' ),
    array( 'name' => 'दीपावली', 'date' => '20 अक्टूबर 2025', 'desc' => 'दीपों का त्योहार - लक्ष्मी पूजन और प्रकाश का उत्सव', 'badge' => 'महापर्व', 'color' => '#dc3545' ),
);
?>
<section class="gr-section gr-section--festival">
    <div class="gr-wrap">

        <header class="gr-section__head gr-section__head--center">
            <span class="gr-section__badge">🪔 हिंदू त्योहार 2025</span>
            <h2 class="gr-section__title">त्योहार <span class="gr-text--red">कैलेंडर</span></h2>
            <p class="gr-section__sub"><?php esc_html_e( 'आगामी हिंदू त्योहारों की गिनती और जानकारी', 'golden-rashifal' ); ?></p>
        </header>

        <div class="gr-festival-grid">
            <?php foreach ( $festivals as $f ) : ?>
            <div class="gr-festival-card" style="border-left-color:<?php echo esc_attr( $f['color'] ); ?>">
                <div class="gr-festival-card__top">
                    <h3 class="gr-festival-card__name"><?php echo esc_html( $f['name'] ); ?></h3>
                    <span class="gr-festival-card__badge" style="background:<?php echo esc_attr( $f['color'] ); ?>"><?php echo esc_html( $f['badge'] ); ?></span>
                </div>
                <span class="gr-festival-card__date">📅 <?php echo esc_html( $f['date'] ); ?></span>
                <p class="gr-festival-card__desc"><?php echo esc_html( $f['desc'] ); ?></p>
                <div class="gr-festival-card__bottom">
                    <span class="gr-festival-card__done">✅ यह त्योहार मना लिया गया</span>
                    <a class="gr-festival-card__link" href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">विस्तृत जानकारी ></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="gr-section__cta-wrap">
            <a class="gr-btn gr-btn--outline" href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><?php esc_html_e( 'सभी त्योहार देखें >', 'golden-rashifal' ); ?></a>
        </div>

    </div>
</section>
