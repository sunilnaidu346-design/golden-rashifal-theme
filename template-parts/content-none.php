<?php
/**
 * Empty state — shown when no posts match the current query.
 *
 * @package GoldenRashifal
 */
?>
<section class="gr-empty">
    <div class="gr-empty__icon" aria-hidden="true">✦</div>
    <h2 class="gr-empty__title"><?php esc_html_e( 'इस श्रेणी में अभी कोई लेख नहीं है', 'golden-rashifal' ); ?></h2>
    <p class="gr-empty__text">
        <?php esc_html_e( 'थोड़ा अलग शब्दों से खोजकर देखें या नीचे दिए गए सुझावों पर जाएँ।', 'golden-rashifal' ); ?>
    </p>
    <div class="gr-empty__actions">
        <?php get_search_form(); ?>
        <a class="gr-btn gr-btn--gold" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'होम पर जाएँ', 'golden-rashifal' ); ?></a>
    </div>
</section>
