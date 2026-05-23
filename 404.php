<?php
/**
 * 404 page.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
    <div class="gr-wrap gr-404">

        <div class="gr-404__icon" aria-hidden="true">
            <svg viewBox="0 0 120 120"><circle cx="60" cy="60" r="56" fill="#faf7f0" stroke="#d4af37" stroke-width="2"/><text x="60" y="74" text-anchor="middle" font-family="Noto Sans Devanagari, serif" font-size="36" font-weight="700" fill="#a68b1b">ॐ</text></svg>
        </div>

        <span class="gr-404__pre"><?php esc_html_e( '404 — पेज नहीं मिला', 'golden-rashifal' ); ?></span>
        <h1 class="gr-404__title"><?php esc_html_e( 'यह पेज अभी उपलब्ध नहीं है', 'golden-rashifal' ); ?></h1>
        <p class="gr-404__quote"><em><?php esc_html_e( '"रास्ता बदला है, मंज़िल नहीं।"', 'golden-rashifal' ); ?></em></p>
        <p class="gr-404__text"><?php esc_html_e( 'शायद लिंक बदल गया हो या पेज हटा दिया गया हो। नीचे खोज सकते हैं या होम पर वापस जा सकते हैं।', 'golden-rashifal' ); ?></p>

        <div class="gr-404__cta">
            <a class="gr-btn gr-btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'होम पर जाएँ', 'golden-rashifal' ); ?></a>
            <a class="gr-btn gr-btn--outline" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><?php esc_html_e( 'राशिफल पढ़ें', 'golden-rashifal' ); ?></a>
        </div>

        <div class="gr-404__search">
            <?php get_search_form(); ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>
