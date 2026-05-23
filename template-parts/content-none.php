<?php
/**
 * Empty state.
 *
 * @package GoldenRashifal
 */
?>
<section class="gr-empty">
    <div class="gr-empty__icon" aria-hidden="true">✦</div>
    <h2 class="gr-empty__title"><?php esc_html_e( 'कोई लेख नहीं मिला', 'golden-rashifal' ); ?></h2>
    <p class="gr-empty__text"><?php esc_html_e( 'अलग शब्दों से खोजकर देखें या होम पर जाएँ।', 'golden-rashifal' ); ?></p>
    <div style="margin-top:16px;display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
        <?php get_search_form(); ?>
        <a class="gr-btn gr-btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'होम', 'golden-rashifal' ); ?></a>
    </div>
</section>
