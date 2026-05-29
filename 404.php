<?php
/**
 * 404 Page — Premium Design with Hero, Navigation & Trust Block.
 * No default WordPress look. Full premium experience.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--404" role="main">

    <!-- Premium 404 Hero -->
    <section class="gr-404-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>404 - पेज नहीं मिला</span>
            </div>
            <div class="gr-404-hero__code">404</div>
            <h1 class="gr-404-hero__title"><?php esc_html_e( 'यह पेज अभी उपलब्ध नहीं है', 'golden-rashifal' ); ?></h1>
            <p class="gr-404-hero__text"><?php esc_html_e( 'शायद लिंक बदल गया हो या पेज हटा दिया गया हो। नीचे खोज करें या हमारे लोकप्रिय पेज देखें।', 'golden-rashifal' ); ?></p>
            <div class="gr-404-hero__search">
                <?php get_search_form(); ?>
            </div>
            <div class="gr-page-cta__buttons">
                <a class="gr-page-cta__btn gr-page-cta__btn--gold" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'होम पर जाएँ', 'golden-rashifal' ); ?></a>
                <a class="gr-page-cta__btn gr-page-cta__btn--outline" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><?php esc_html_e( 'राशिफल पढ़ें', 'golden-rashifal' ); ?></a>
            </div>
        </div>
    </section>

    <!-- Internal Linking Section -->
    <div class="gr-premium-content gr-premium-content--wide">
        <div class="gr-internal-links">
            <h2 class="gr-internal-links__title"><?php esc_html_e( 'लोकप्रिय पेज देखें', 'golden-rashifal' ); ?></h2>
            <div class="gr-internal-links__grid">
                <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><span class="icon">✦</span> आज का राशिफल</a>
                <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>"><span class="icon">☉</span> आज का पंचांग</a>
                <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>"><span class="icon">⏱</span> चौघड़िया</a>
                <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>"><span class="icon">◐</span> राहुकाल</a>
                <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>"><span class="icon">☆</span> शुभ मुहूर्त</a>
                <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><span class="icon">⚑</span> त्योहार</a>
                <a href="<?php echo esc_url( home_url( '/weekly-rashifal/' ) ); ?>"><span class="icon">◈</span> साप्ताहिक राशिफल</a>
                <a href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>"><span class="icon">⌂</span> वास्तु टिप्स</a>
                <a href="<?php echo esc_url( home_url( '/kundli/' ) ); ?>"><span class="icon">✧</span> कुंडली</a>
                <a href="<?php echo esc_url( home_url( '/monthly-rashifal/' ) ); ?>"><span class="icon">☾</span> मासिक राशिफल</a>
                <a href="<?php echo esc_url( home_url( '/numerology/' ) ); ?>"><span class="icon">∞</span> अंकज्योतिष</a>
                <a href="<?php echo esc_url( home_url( '/ekadashi/' ) ); ?>"><span class="icon">☸</span> एकादशी</a>
            </div>
        </div>

        <!-- Trust Block -->
        <div class="gr-trust-block">
            <h2 class="gr-trust-block__title"><?php esc_html_e( 'Golden Rashifal पर भरोसा क्यों करें?', 'golden-rashifal' ); ?></h2>
            <div class="gr-trust-block__grid">
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> संपादकीय समीक्षित</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पंचांग सत्यापित</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> प्रतिदिन अपडेट</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पारंपरिक स्रोत</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पाठक केंद्रित</div>
            </div>
        </div>

        <!-- Footer Transition -->
        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — भरोसेमंद ज्योतिष जानकारी', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
