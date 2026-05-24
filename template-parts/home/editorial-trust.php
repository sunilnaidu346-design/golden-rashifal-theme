<?php
/**
 * Homepage — Editorial Trust / About Introduction section.
 * Premium editorial layout with left-right structure for trust-building.
 *
 * @package GoldenRashifal
 */
?>
<section class="gr-editorial-trust" aria-label="<?php esc_attr_e( 'हमारे बारे में', 'golden-rashifal' ); ?>">
    <div class="gr-wrap gr-editorial-trust__inner">

        <div class="gr-editorial-trust__left">
            <span class="gr-editorial-trust__label"><?php esc_html_e( 'Golden Rashifal', 'golden-rashifal' ); ?></span>
            <h2 class="gr-editorial-trust__title"><?php esc_html_e( 'प्रामाणिक ज्योतिष ज्ञान, आधुनिक प्रस्तुति', 'golden-rashifal' ); ?></h2>
            <p class="gr-editorial-trust__desc">
                <?php esc_html_e( 'Golden Rashifal भारत का विश्वसनीय हिंदी ज्योतिष मंच है जहाँ प्राचीन वैदिक ज्ञान को आधुनिक शोध और सटीक गणनाओं के साथ प्रस्तुत किया जाता है। हमारी टीम अनुभवी ज्योतिषाचार्यों और संपादकों से मिलकर बनी है जो प्रतिदिन पंचांग, राशिफल, मुहूर्त और चौघड़िया की जानकारी तैयार करती है।', 'golden-rashifal' ); ?>
            </p>
            <ul class="gr-editorial-trust__points">
                <li>
                    <span class="gr-editorial-trust__point-icon" aria-hidden="true">&#10003;</span>
                    <?php esc_html_e( 'वैदिक सिद्धांतों पर आधारित सटीक पंचांग गणना', 'golden-rashifal' ); ?>
                </li>
                <li>
                    <span class="gr-editorial-trust__point-icon" aria-hidden="true">&#10003;</span>
                    <?php esc_html_e( 'अनुभवी ज्योतिषाचार्यों द्वारा संपादित सामग्री', 'golden-rashifal' ); ?>
                </li>
                <li>
                    <span class="gr-editorial-trust__point-icon" aria-hidden="true">&#10003;</span>
                    <?php esc_html_e( 'प्रतिदिन अपडेट होने वाला राशिफल और मुहूर्त', 'golden-rashifal' ); ?>
                </li>
                <li>
                    <span class="gr-editorial-trust__point-icon" aria-hidden="true">&#10003;</span>
                    <?php esc_html_e( 'लाखों पाठकों का भरोसा, पारदर्शी संपादकीय नीति', 'golden-rashifal' ); ?>
                </li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="gr-editorial-trust__link">
                <?php esc_html_e( 'संपादकीय नीति पढ़ें', 'golden-rashifal' ); ?>
                <span aria-hidden="true">&rarr;</span>
            </a>
        </div>

        <div class="gr-editorial-trust__right">
            <div class="gr-editorial-trust__visual">
                <div class="gr-editorial-trust__visual-card">
                    <div class="gr-editorial-trust__visual-icon" aria-hidden="true">&#9788;</div>
                    <span class="gr-editorial-trust__visual-label"><?php esc_html_e( 'वैदिक ज्योतिष', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-editorial-trust__visual-stat">
                    <span class="gr-editorial-trust__stat-number"><?php esc_html_e( '12', 'golden-rashifal' ); ?></span>
                    <span class="gr-editorial-trust__stat-text"><?php esc_html_e( 'राशियाँ', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-editorial-trust__visual-stat">
                    <span class="gr-editorial-trust__stat-number"><?php esc_html_e( '27', 'golden-rashifal' ); ?></span>
                    <span class="gr-editorial-trust__stat-text"><?php esc_html_e( 'नक्षत्र', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-editorial-trust__visual-stat">
                    <span class="gr-editorial-trust__stat-number"><?php esc_html_e( '9', 'golden-rashifal' ); ?></span>
                    <span class="gr-editorial-trust__stat-text"><?php esc_html_e( 'ग्रह', 'golden-rashifal' ); ?></span>
                </div>
            </div>
        </div>

    </div>
</section>
