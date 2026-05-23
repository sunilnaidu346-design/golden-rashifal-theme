<?php
/**
 * Homepage — Newsletter subscription section.
 * Compact, elegant, no oversized gradients.
 *
 * @package GoldenRashifal
 */
?>
<section class="gr-section">
    <div class="gr-wrap">
        <div class="gr-newsletter">
            <div class="gr-newsletter__content">
                <h2 class="gr-newsletter__title"><?php esc_html_e( 'रोज़ राशिफल अपने इनबॉक्स में पाएँ', 'golden-rashifal' ); ?></h2>
                <p class="gr-newsletter__desc"><?php esc_html_e( 'हर सुबह आज का राशिफल, पंचांग का सारांश और कोई एक उपयोगी टिप — सीधे आपके ईमेल पर। कभी भी unsubscribe करें।', 'golden-rashifal' ); ?></p>
            </div>
            <div class="gr-newsletter__form-wrap">
                <form class="gr-newsletter__form" action="#" method="post">
                    <input class="gr-newsletter__input" type="email" name="email" placeholder="<?php esc_attr_e( 'आपका ईमेल पता', 'golden-rashifal' ); ?>" required />
                    <button class="gr-btn gr-btn--primary" type="submit"><?php esc_html_e( 'जुड़ें', 'golden-rashifal' ); ?></button>
                </form>
                <p class="gr-newsletter__note"><?php esc_html_e( 'कोई स्पैम नहीं। सिर्फ़ उपयोगी सामग्री।', 'golden-rashifal' ); ?></p>
            </div>
        </div>
    </div>
</section>
