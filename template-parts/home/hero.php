<?php
/**
 * Homepage — Hero section (dark cosmic background).
 * Matches screenshot 7: Golden Rashifal title, search bar, quick links, 4 zodiac cards.
 *
 * @package GoldenRashifal
 */
?>
<section class="gr-hero">
    <div class="gr-hero__bg" aria-hidden="true"></div>
    <div class="gr-wrap gr-hero__inner">

        <span class="gr-hero__badge">✨ <?php esc_html_e( 'भारत का सबसे प्रीमियम ज्योतिष पोर्टल', 'golden-rashifal' ); ?> ✨</span>

        <h1 class="gr-hero__title">Golden <span>Rashifal</span></h1>
        <p class="gr-hero__subtitle"><?php esc_html_e( 'आपकी किस्मत का सच्चा साथी', 'golden-rashifal' ); ?></p>
        <p class="gr-hero__services"><?php esc_html_e( 'राशिफल · पंचांग · चौघड़िया · मुहूर्त · कुंडली · त्योहार', 'golden-rashifal' ); ?></p>

        <form class="gr-hero__search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <span class="gr-hero__search-icon">🔍</span>
            <input type="search" name="s" placeholder="<?php esc_attr_e( 'Horoscope, Rashifal, Panchang...', 'golden-rashifal' ); ?>" />
            <button type="submit" class="gr-hero__search-btn-submit"><?php esc_html_e( 'खोजें', 'golden-rashifal' ); ?></button>
        </form>

        <div class="gr-hero__quicklinks">
            <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">📅 पंचांग</a>
            <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">⏰ चौघड़िया</a>
            <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">🚫 राहुकाल</a>
            <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">✨ मुहूर्त</a>
            <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">🪔 त्योहार</a>
            <a href="<?php echo esc_url( home_url( '/kundli/' ) ); ?>">🔮 कुंडली</a>
        </div>

        <div class="gr-hero__zodiac-row">
            <?php
            $preview_signs = array(
                array( 'slug' => 'mesh', 'hi' => 'मेष', 'en' => 'Aries', 'icon' => '♈' ),
                array( 'slug' => 'vrishabh', 'hi' => 'वृष', 'en' => 'Taurus', 'icon' => '♉' ),
                array( 'slug' => 'mithun', 'hi' => 'मिथुन', 'en' => 'Gemini', 'icon' => '♊' ),
                array( 'slug' => 'kark', 'hi' => 'कर्क', 'en' => 'Cancer', 'icon' => '♋' ),
            );
            foreach ( $preview_signs as $s ) :
            ?>
            <a class="gr-hero__zcard" href="<?php echo esc_url( home_url( '/rashifal/' . $s['slug'] . '/' ) ); ?>">
                <span class="gr-hero__zcard-icon"><?php echo esc_html( $s['icon'] ); ?></span>
                <strong><?php echo esc_html( $s['hi'] ); ?></strong>
                <span><?php echo esc_html( $s['en'] ); ?></span>
            </a>
            <?php endforeach; ?>
        </div>
        <a class="gr-hero__more" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><?php esc_html_e( 'और जानें', 'golden-rashifal' ); ?></a>

    </div>
</section>
