<?php
/**
 * Homepage — Dark premium hero with zodiac wheel and CTA.
 *
 * @package GoldenRashifal
 */

$hero_title = get_theme_mod( 'gr_hero_title', __( 'राशिफल, पंचांग और मुहूर्त — <em>एक भरोसेमंद जगह</em>', 'golden-rashifal' ) );
$hero_desc  = get_theme_mod( 'gr_hero_sub', __( 'दैनिक राशिफल, चौघड़िया, राहुकाल, त्योहार कैलेंडर और शुभ मुहूर्त की जानकारी — सरल हिंदी में, संतुलित दृष्टिकोण के साथ।', 'golden-rashifal' ) );
$sun        = golden_rashifal_sun_times();
$rahu       = golden_rashifal_rahukaal();
?>
<section class="gr-hero">
    <div class="gr-hero__glow gr-hero__glow--gold" aria-hidden="true"></div>
    <div class="gr-hero__glow gr-hero__glow--rose" aria-hidden="true"></div>

    <div class="gr-wrap gr-hero__inner">
        <div class="gr-hero__content">
            <div class="gr-hero__badge">
                <span class="gr-hero__badge-dot"></span>
                <?php echo esc_html( golden_rashifal_today_string() ); ?>
            </div>

            <h1 class="gr-hero__title"><?php echo wp_kses_post( $hero_title ); ?></h1>
            <p class="gr-hero__desc"><?php echo esc_html( $hero_desc ); ?></p>

            <div class="gr-hero__actions">
                <a class="gr-btn gr-btn--primary gr-btn--lg" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">
                    <?php esc_html_e( 'आज का राशिफल पढ़ें', 'golden-rashifal' ); ?>
                </a>
                <a class="gr-btn gr-btn--outline gr-btn--lg" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">
                    <?php esc_html_e( 'पंचांग देखें', 'golden-rashifal' ); ?>
                </a>
            </div>

            <div class="gr-hero__stats">
                <div>
                    <span class="gr-hero__stat-num"><?php echo esc_html( golden_rashifal_format_minutes( $sun['sunrise_min'] ) ); ?></span>
                    <span class="gr-hero__stat-label"><?php esc_html_e( 'सूर्योदय', 'golden-rashifal' ); ?></span>
                </div>
                <div>
                    <span class="gr-hero__stat-num"><?php echo esc_html( golden_rashifal_format_minutes( $sun['sunset_min'] ) ); ?></span>
                    <span class="gr-hero__stat-label"><?php esc_html_e( 'सूर्यास्त', 'golden-rashifal' ); ?></span>
                </div>
                <div>
                    <span class="gr-hero__stat-num"><?php echo esc_html( $rahu['start'] . ' – ' . $rahu['end'] ); ?></span>
                    <span class="gr-hero__stat-label"><?php esc_html_e( 'राहुकाल', 'golden-rashifal' ); ?></span>
                </div>
            </div>
        </div>

        <div class="gr-hero__visual">
            <?php echo golden_rashifal_zodiac_wheel_svg(); ?>
        </div>
    </div>
</section>
