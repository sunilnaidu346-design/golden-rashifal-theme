<?php
/**
 * Empty state — premium no-results layout.
 *
 * @package GoldenRashifal
 */
?>
<section class="gr-no-results">
    <div class="gr-no-results__icon" aria-hidden="true">&#10026;</div>
    <h2 class="gr-no-results__title"><?php esc_html_e( 'कोई परिणाम नहीं मिला', 'golden-rashifal' ); ?></h2>
    <p class="gr-no-results__text"><?php esc_html_e( 'आपकी खोज से मेल खाता कोई लेख नहीं मिला। कृपया अलग शब्दों से खोजें या नीचे दिए गए लिंक आज़माएं।', 'golden-rashifal' ); ?></p>
    <div style="max-width:400px;margin:0 auto var(--sp-5);">
        <?php get_search_form(); ?>
    </div>
    <div class="gr-no-results__suggestions">
        <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><?php esc_html_e( 'राशिफल', 'golden-rashifal' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>"><?php esc_html_e( 'पंचांग', 'golden-rashifal' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>"><?php esc_html_e( 'चौघड़िया', 'golden-rashifal' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>"><?php esc_html_e( 'मुहूर्त', 'golden-rashifal' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><?php esc_html_e( 'त्योहार', 'golden-rashifal' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>"><?php esc_html_e( 'वास्तु', 'golden-rashifal' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'होम पेज', 'golden-rashifal' ); ?></a>
    </div>
</section>
