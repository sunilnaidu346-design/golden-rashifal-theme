<?php
/**
 * Homepage — Festival countdown (dark card style).
 * Hidden when no date set in Customizer.
 *
 * @package GoldenRashifal
 */

$festival_name = get_theme_mod( 'gr_festival_name', __( 'अगला मुख्य त्योहार', 'golden-rashifal' ) );
$festival_date = trim( (string) get_theme_mod( 'gr_festival_date', '' ) );

if ( '' === $festival_date || ! preg_match( '/^\d{4}-\d{2}-\d{2}$/', $festival_date ) ) {
    return;
}

$ts_now    = current_time( 'timestamp' );
$ts_target = strtotime( $festival_date . ' 00:00:00' );
if ( ! $ts_target || $ts_target < $ts_now ) {
    return;
}
?>
<section class="gr-section">
    <div class="gr-wrap">
        <div class="gr-countdown" data-gr-count data-target="<?php echo esc_attr( $festival_date . 'T00:00:00' ); ?>">
            <span class="gr-countdown__eyebrow"><?php esc_html_e( 'काउंटडाउन', 'golden-rashifal' ); ?></span>
            <h2 class="gr-countdown__title"><?php echo esc_html( $festival_name ); ?></h2>
            <p class="gr-countdown__date"><?php echo esc_html( wp_date( 'j F Y', $ts_target ) ); ?></p>

            <div class="gr-countdown__grid">
                <div class="gr-countdown__cell">
                    <span class="gr-countdown__num" data-gr-count-days>—</span>
                    <span class="gr-countdown__label"><?php esc_html_e( 'दिन', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-countdown__cell">
                    <span class="gr-countdown__num" data-gr-count-hours>—</span>
                    <span class="gr-countdown__label"><?php esc_html_e( 'घंटे', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-countdown__cell">
                    <span class="gr-countdown__num" data-gr-count-mins>—</span>
                    <span class="gr-countdown__label"><?php esc_html_e( 'मिनट', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-countdown__cell">
                    <span class="gr-countdown__num" data-gr-count-secs>—</span>
                    <span class="gr-countdown__label"><?php esc_html_e( 'सेकंड', 'golden-rashifal' ); ?></span>
                </div>
            </div>

            <a class="gr-btn gr-btn--outline" href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><?php esc_html_e( 'पूरा कैलेंडर देखें', 'golden-rashifal' ); ?></a>
        </div>
    </div>
</section>
