<?php
/**
 * Homepage — Hero section with zodiac wheel, headline, search and quick stats.
 *
 * @package GoldenRashifal
 */

$hero_title = get_theme_mod( 'gr_hero_title', __( 'आज का राशिफल, पंचांग और मुहूर्त — एक साफ़ और भरोसेमंद जगह पर', 'golden-rashifal' ) );
$hero_sub   = get_theme_mod( 'gr_hero_sub', __( '12 राशियों का दैनिक राशिफल, सूर्योदय-सूर्यास्त, चौघड़िया, राहुकाल और हिंदू त्योहारों की जानकारी — आसान भाषा में, बिना अतिशय दावों के।', 'golden-rashifal' ) );
$panchang   = golden_rashifal_panchang_summary();
$rahukaal   = golden_rashifal_rahukaal();
?>
<section class="gr-hero" aria-label="<?php esc_attr_e( 'मुख्य परिचय', 'golden-rashifal' ); ?>">
    <div class="gr-hero__bg" aria-hidden="true">
        <span class="gr-hero__glow gr-hero__glow--gold"></span>
        <span class="gr-hero__glow gr-hero__glow--pink"></span>
        <span class="gr-hero__glow gr-hero__glow--orange"></span>
    </div>

    <div class="gr-wrap gr-hero__inner">

        <div class="gr-hero__content">
            <span class="gr-hero__eyebrow">
                <span class="gr-hero__dot" aria-hidden="true"></span>
                <?php echo esc_html( golden_rashifal_today_string() ); ?>
            </span>

            <h1 class="gr-hero__title"><?php echo esc_html( $hero_title ); ?></h1>
            <p class="gr-hero__sub"><?php echo esc_html( $hero_sub ); ?></p>

            <form role="search" method="get" class="gr-hero__search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <label for="gr-hero-s" class="screen-reader-text"><?php esc_html_e( 'खोजें', 'golden-rashifal' ); ?></label>
                <span class="gr-hero__search-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" focusable="false"><circle cx="11" cy="11" r="7" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="m20 20-3.5-3.5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
                </span>
                <input type="search" id="gr-hero-s" name="s" placeholder="<?php esc_attr_e( 'अपनी राशि, त्योहार या मुहूर्त खोजें…', 'golden-rashifal' ); ?>" />
                <button type="submit" class="gr-btn gr-btn--gold"><?php esc_html_e( 'खोजें', 'golden-rashifal' ); ?></button>
            </form>

            <ul class="gr-hero__stats" role="list">
                <li>
                    <span class="gr-hero__stat-num"><?php echo esc_html( $panchang[ __( 'सूर्योदय', 'golden-rashifal' ) ] ); ?></span>
                    <span class="gr-hero__stat-label"><?php esc_html_e( 'सूर्योदय', 'golden-rashifal' ); ?></span>
                </li>
                <li>
                    <span class="gr-hero__stat-num"><?php echo esc_html( $panchang[ __( 'सूर्यास्त', 'golden-rashifal' ) ] ); ?></span>
                    <span class="gr-hero__stat-label"><?php esc_html_e( 'सूर्यास्त', 'golden-rashifal' ); ?></span>
                </li>
                <li>
                    <span class="gr-hero__stat-num"><?php echo esc_html( $rahukaal['start'] . ' – ' . $rahukaal['end'] ); ?></span>
                    <span class="gr-hero__stat-label"><?php esc_html_e( 'राहुकाल', 'golden-rashifal' ); ?></span>
                </li>
            </ul>
        </div>

        <div class="gr-hero__wheel" aria-hidden="true">
            <?php echo golden_rashifal_zodiac_wheel_svg(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
        </div>

    </div>
</section>

<?php
/**
 * Render the zodiac wheel as inline SVG. Function lives here so the wheel
 * SVG can stay readable next to the hero markup that uses it.
 */
if ( ! function_exists( 'golden_rashifal_zodiac_wheel_svg' ) ) {
    function golden_rashifal_zodiac_wheel_svg() {
        $signs = golden_rashifal_zodiac_signs();
        $svg   = '<svg class="gr-wheel" viewBox="0 0 360 360" role="img" aria-label="' . esc_attr__( 'राशि चक्र', 'golden-rashifal' ) . '">';

        // Decorative circles.
        $svg .= '<defs>';
        $svg .= '<radialGradient id="gr-wheel-glow" cx="50%" cy="50%" r="50%">';
        $svg .= '<stop offset="0%" stop-color="#FFF6D6" stop-opacity="1"/>';
        $svg .= '<stop offset="100%" stop-color="#FFFFFF" stop-opacity="0"/>';
        $svg .= '</radialGradient>';
        $svg .= '<linearGradient id="gr-wheel-stroke" x1="0%" y1="0%" x2="100%" y2="100%">';
        $svg .= '<stop offset="0%" stop-color="#D4AF37"/><stop offset="100%" stop-color="#A8860C"/>';
        $svg .= '</linearGradient>';
        $svg .= '</defs>';

        $svg .= '<circle cx="180" cy="180" r="170" fill="url(#gr-wheel-glow)"/>';
        $svg .= '<circle cx="180" cy="180" r="160" fill="#FFFFFF" stroke="url(#gr-wheel-stroke)" stroke-width="2"/>';
        $svg .= '<circle cx="180" cy="180" r="120" fill="none" stroke="#ECE4CF" stroke-width="1"/>';
        $svg .= '<circle cx="180" cy="180" r="60" fill="#FFF8E2" stroke="url(#gr-wheel-stroke)" stroke-width="1.5"/>';

        // 12 segments with icons positioned around the wheel.
        $cx = 180; $cy = 180; $r = 138;
        foreach ( $signs as $i => $sign ) {
            $angle = deg2rad( -90 + $i * 30 );
            $x = $cx + cos( $angle ) * $r;
            $y = $cy + sin( $angle ) * $r;
            $svg .= '<g transform="translate(' . round( $x - 14, 2 ) . ' ' . round( $y - 14, 2 ) . ')" class="gr-wheel__sign">';
            $svg .= '<circle cx="14" cy="14" r="14" fill="#FFFFFF" stroke="#D4AF37" stroke-width="1.4"/>';
            $svg .= str_replace(
                array( '<svg class="gr-zodiac-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">', '</svg>' ),
                array( '<g transform="translate(2 2)" stroke="#A8860C">', '</g>' ),
                golden_rashifal_zodiac_icon( $sign['icon'] )
            );
            $svg .= '</g>';

            // Spoke.
            $sx = $cx + cos( $angle ) * 60;
            $sy = $cy + sin( $angle ) * 60;
            $ex = $cx + cos( $angle ) * 120;
            $ey = $cy + sin( $angle ) * 120;
            $svg .= '<line x1="' . round( $sx, 2 ) . '" y1="' . round( $sy, 2 ) . '" x2="' . round( $ex, 2 ) . '" y2="' . round( $ey, 2 ) . '" stroke="#ECE4CF" stroke-width="1"/>';
        }

        // Centre OM-ish flourish.
        $svg .= '<text x="180" y="190" text-anchor="middle" font-family="Noto Sans Devanagari, serif" font-size="34" font-weight="700" fill="#A8860C">ॐ</text>';
        $svg .= '</svg>';
        return $svg;
    }
}
