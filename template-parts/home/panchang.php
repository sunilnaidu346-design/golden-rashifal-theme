<?php
/**
 * Homepage — Panchang section with live clock and fully dynamic data grid.
 *
 * All values are calculated dynamically from astrology-functions.php.
 * No hardcoded panchang values remain.
 *
 * @package GoldenRashifal
 */

$sun      = golden_rashifal_sun_times();
$rahu     = golden_rashifal_rahukaal();
$abhijit  = golden_rashifal_abhijit();
$tithi    = golden_rashifal_tithi_today();
$nakshatra = golden_rashifal_nakshatra_today();
$yoga     = golden_rashifal_yoga_today();
$karan    = golden_rashifal_karan_today();
$chandrodaya = golden_rashifal_chandrodaya();
$vs       = golden_rashifal_vikram_samvat();

$weekday_index = (int) wp_date( 'w' );
$vaar_map = array(
    0 => 'रविवार', 1 => 'सोमवार', 2 => 'मंगलवार', 3 => 'बुधवार',
    4 => 'गुरुवार', 5 => 'शुक्रवार', 6 => 'शनिवार',
);
$todays_vaar = $vaar_map[ $weekday_index ];
?>
<section class="gr-section gr-section--panchang">
    <div class="gr-wrap">

        <header class="gr-panchang-head">
            <span class="gr-panchang-head__label">📅 हिंदू पंचांग</span>
            <h2 class="gr-panchang-head__title">पंचांग <span class="gr-text--orange">· चौघड़िया ·</span> <span class="gr-text--red">मुहूर्त</span></h2>
        </header>

        <div class="gr-panchang-clock">
            <span class="gr-panchang-clock__live">● LIVE</span>
            <span class="gr-panchang-clock__time" data-gr-clock-time>--:--:-- pm</span>
            <span class="gr-panchang-clock__label">◎ भारतीय समय</span>
        </div>

        <div class="gr-panchang-tabs">
            <span class="gr-panchang-tabs__item is-active">📅 पंचांग</span>
            <span class="gr-panchang-tabs__item">⏰ चौघड़िया</span>
            <span class="gr-panchang-tabs__item">✨ मुहूर्त</span>
        </div>

        <div class="gr-panchang-grid">
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">तिथि</span><strong><?php echo esc_html( $tithi['name'] ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">वार</span><strong><?php echo esc_html( $todays_vaar ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">नक्षत्र</span><strong><?php echo esc_html( $nakshatra ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">योग</span><strong><?php echo esc_html( $yoga ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">करण</span><strong><?php echo esc_html( $karan ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">पक्ष</span><strong><?php echo esc_html( $tithi['paksha'] ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">सूर्योदय</span><strong><?php echo esc_html( golden_rashifal_format_minutes( $sun['sunrise_min'] ) ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">सूर्यास्त</span><strong><?php echo esc_html( golden_rashifal_format_minutes( $sun['sunset_min'] ) ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">चंद्रोदय</span><strong><?php echo esc_html( $chandrodaya ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">राहु काल</span><strong><?php echo esc_html( $rahu['start'] . '–' . $rahu['end'] ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">अभिजित</span><strong><?php echo esc_html( $abhijit['start'] . '–' . $abhijit['end'] ); ?></strong></div>
            <div class="gr-panchang-cell"><span class="gr-panchang-cell__label">विक्रम संवत</span><strong><?php echo esc_html( $vs ); ?></strong></div>
        </div>

        <div class="gr-rahukaal-bar">
            <div class="gr-rahukaal-bar__info">
                <span>🚫 राहु काल: <?php echo esc_html( $rahu['start'] . ' - ' . $rahu['end'] ); ?></span>
                <span class="gr-rahukaal-bar__badge">सावधान</span>
            </div>
            <div class="gr-rahukaal-bar__track">
                <span class="gr-rahukaal-bar__start"><?php echo esc_html( golden_rashifal_format_minutes( $sun['sunrise_min'] ) ); ?> (सूर्योदय)</span>
                <span class="gr-rahukaal-bar__zone">राहु काल</span>
                <span class="gr-rahukaal-bar__end"><?php echo esc_html( golden_rashifal_format_minutes( $sun['sunset_min'] ) ); ?> (सूर्यास्त)</span>
            </div>
            <p class="gr-rahukaal-bar__note">⚠ राहु काल में कोई शुभ कार्य न करें</p>
        </div>

    </div>
</section>
