<?php
/**
 * Homepage — Kundli & Navgraha section (dark blue).
 * Matches screenshot 4: form + planet positions list.
 *
 * @package GoldenRashifal
 */

$planets = array(
    array( 'name' => 'सूर्य', 'rashi' => 'मेष 15°', 'sym' => '☉', 'color' => '#ff5722', 'status' => 'शुभ', 'scolor' => '#28a745' ),
    array( 'name' => 'चंद्र', 'rashi' => 'वृष 8°', 'sym' => '☽', 'color' => '#9e9e9e', 'status' => 'शुभ', 'scolor' => '#28a745' ),
    array( 'name' => 'मंगल', 'rashi' => 'कर्क 22°', 'sym' => '♂', 'color' => '#f44336', 'status' => 'सामान्य', 'scolor' => '#ff8c00' ),
    array( 'name' => 'बुध', 'rashi' => 'मेष 28°', 'sym' => '☿', 'color' => '#4caf50', 'status' => 'शुभ', 'scolor' => '#28a745' ),
    array( 'name' => 'गुरु', 'rashi' => 'वृष 12°', 'sym' => '♃', 'color' => '#ff9800', 'status' => 'अति शुभ', 'scolor' => '#28a745' ),
    array( 'name' => 'शुक्र', 'rashi' => 'मीन 5°', 'sym' => '♀', 'color' => '#e91e63', 'status' => 'शुभ', 'scolor' => '#28a745' ),
    array( 'name' => 'शनि', 'rashi' => 'कुंभ 18°', 'sym' => '♄', 'color' => '#795548', 'status' => 'सावधान', 'scolor' => '#dc3545' ),
    array( 'name' => 'राहु', 'rashi' => 'मीन 19°', 'sym' => '☊', 'color' => '#607d8b', 'status' => 'सामान्य', 'scolor' => '#ff8c00' ),
    array( 'name' => 'केतु', 'rashi' => 'कन्या 19°', 'sym' => '☋', 'color' => '#9c27b0', 'status' => 'सामान्य', 'scolor' => '#ff8c00' ),
);
?>
<section class="gr-section gr-section--kundli gr-section--kundli-light">
    <div class="gr-wrap">

        <header class="gr-section__head gr-section__head--center gr-section__head--light">
            <span class="gr-section__badge gr-section__badge--light">☆ कुंडली एवं ग्रह स्थिति</span>
            <h2 class="gr-section__title gr-section__title--light">कुंडली और <span class="gr-text--gold">नवग्रह</span></h2>
        </header>

        <div class="gr-kundli-layout">

            <div class="gr-kundli-form">
                <h3>🔮 अपनी कुंडली जानें</h3>
                <form>
                    <label>आपका नाम</label>
                    <input type="text" placeholder="अपना नाम लिखें" />
                    <label>जन्म तिथि</label>
                    <input type="date" />
                    <label>राशि</label>
                    <select><option>राशि चुनें</option></select>
                    <button type="button" class="gr-btn gr-btn--gold-full">✦ कुंडली देखें</button>
                </form>
            </div>

            <div class="gr-kundli-planets">
                <h3>☀ आज की ग्रह स्थिति</h3>
                <div class="gr-planet-list">
                    <?php foreach ( $planets as $p ) : ?>
                    <div class="gr-planet-row">
                        <span class="gr-planet-row__sym" style="background:<?php echo esc_attr( $p['color'] ); ?>"><?php echo esc_html( $p['sym'] ); ?></span>
                        <div class="gr-planet-row__info">
                            <strong><?php echo esc_html( $p['name'] ); ?></strong>
                            <span><?php echo esc_html( $p['rashi'] ); ?></span>
                        </div>
                        <span class="gr-planet-row__status" style="color:<?php echo esc_attr( $p['scolor'] ); ?>"><?php echo esc_html( $p['status'] ); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a class="gr-btn gr-btn--outline-light" href="<?php echo esc_url( home_url( '/kundli/' ) ); ?>">विस्तृत ग्रह रिपोर्ट देखें ></a>
            </div>

        </div>
    </div>
</section>
