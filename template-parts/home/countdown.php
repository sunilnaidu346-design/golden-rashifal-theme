<?php
/**
 * Homepage — Festival Countdown.
 *
 * Hidden if no date is set. Date format expected: YYYY-MM-DD (Customizer hint).
 *
 * @package GoldenRashifal
 */

$festival_name = get_theme_mod( 'gr_festival_name', __( 'अगला मुख्य त्योहार', 'golden-rashifal' ) );
$festival_date = trim( (string) get_theme_mod( 'gr_festival_date', '' ) );

// Be forgiving with the date format: only accept a strict YYYY-MM-DD string.
if ( '' === $festival_date || ! preg_match( '/^\d{4}-\d{2}-\d{2}$/', $festival_date ) ) {
    return;
}

// If the date is in the past, hide the section quietly.
$timestamp_now    = current_time( 'timestamp' ); // phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.Requested
$timestamp_target = strtotime( $festival_date . ' 00:00:00' );
if ( ! $timestamp_target || $timestamp_target < $timestamp_now ) {
    return;
}
?>
<section class="gr-section gr-section--countdown" aria-label="<?php esc_attr_e( 'त्योहार काउंटडाउन', 'golden-rashifal' ); ?>">
    <div class="gr-wrap">
        <div class="gr-count" data-gr-count data-target="<?php echo esc_attr( $festival_date . 'T00:00:00' ); ?>">

            <div class="gr-count__head">
                <span class="gr-count__pretitle"><?php esc_html_e( 'त्योहार काउंटडाउन', 'golden-rashifal' ); ?></span>
                <h2 class="gr-count__title"><?php echo esc_html( $festival_name ); ?></h2>
                <p class="gr-count__sub">
                    <?php
                    /* translators: %s: target date e.g. 12 नवंबर 2026 */
                    printf( esc_html__( 'तारीख़: %s', 'golden-rashifal' ), esc_html( wp_date( 'j F Y', $timestamp_target ) ) );
                    ?>
                </p>
            </div>

            <ul class="gr-count__grid" role="list">
                <li><span class="gr-count__num" data-gr-count-days>—</span><span class="gr-count__lbl"><?php esc_html_e( 'दिन', 'golden-rashifal' ); ?></span></li>
                <li><span class="gr-count__num" data-gr-count-hours>—</span><span class="gr-count__lbl"><?php esc_html_e( 'घंटे', 'golden-rashifal' ); ?></span></li>
                <li><span class="gr-count__num" data-gr-count-mins>—</span><span class="gr-count__lbl"><?php esc_html_e( 'मिनट', 'golden-rashifal' ); ?></span></li>
                <li><span class="gr-count__num" data-gr-count-secs>—</span><span class="gr-count__lbl"><?php esc_html_e( 'सेकंड', 'golden-rashifal' ); ?></span></li>
            </ul>

            <div class="gr-count__cta">
                <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>" class="gr-btn gr-btn--ghost"><?php esc_html_e( 'पूरा त्योहार कैलेंडर', 'golden-rashifal' ); ?> →</a>
            </div>

        </div>
    </div>
</section>
