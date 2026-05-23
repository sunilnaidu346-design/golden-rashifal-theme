<?php
/**
 * Homepage — Newsletter bar (pink/orange gradient).
 * Matches screenshot 6.
 *
 * @package GoldenRashifal
 */
?>
<section class="gr-newsletter-bar">
    <div class="gr-wrap gr-newsletter-bar__inner">
        <div class="gr-newsletter-bar__text">
            <h3>🔔 <?php esc_html_e( 'दैनिक राशिफल के लिए जुड़ें', 'golden-rashifal' ); ?></h3>
            <p><?php esc_html_e( 'हर रोज़ सुबह अपनी राशि का भविष्यफल पाएं', 'golden-rashifal' ); ?></p>
        </div>
        <form class="gr-newsletter-bar__form" action="#" method="post">
            <input type="email" name="email" placeholder="<?php esc_attr_e( 'email दर्ज करें', 'golden-rashifal' ); ?>" required />
            <button type="submit" class="gr-btn gr-btn--gold"><?php esc_html_e( 'जुड़ें', 'golden-rashifal' ); ?></button>
        </form>
    </div>
</section>
