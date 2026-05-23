<?php
/**
 * Homepage — 12 zodiac signs grid with hover preview.
 *
 * @package GoldenRashifal
 */

$signs = golden_rashifal_zodiac_signs();
?>
<section class="gr-section gr-section--zodiac" aria-label="<?php esc_attr_e( 'सभी 12 राशियाँ', 'golden-rashifal' ); ?>">
    <div class="gr-wrap">
        <header class="gr-section__head">
            <h2 class="gr-section__title"><?php esc_html_e( 'अपनी राशि चुनें', 'golden-rashifal' ); ?></h2>
            <p class="gr-section__sub"><?php esc_html_e( 'जन्म तारीख़ के अनुसार अपनी सूर्य राशि चुनें और आज का संक्षिप्त राशिफल पढ़ें।', 'golden-rashifal' ); ?></p>
        </header>

        <ul class="gr-zodiac-grid" role="list">
            <?php foreach ( $signs as $sign ) : ?>
                <li>
                    <a class="gr-zcard" href="<?php echo esc_url( home_url( '/rashifal/' . $sign['slug'] . '/' ) ); ?>" aria-label="<?php echo esc_attr( $sign['hi'] . ' — ' . $sign['range'] ); ?>">
                        <span class="gr-zcard__icon" aria-hidden="true"><?php echo golden_rashifal_zodiac_icon( $sign['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
                        <span class="gr-zcard__name"><?php echo esc_html( $sign['hi'] ); ?></span>
                        <span class="gr-zcard__en"><?php echo esc_html( $sign['en'] ); ?></span>
                        <span class="gr-zcard__range"><?php echo esc_html( $sign['range'] ); ?></span>
                        <span class="gr-zcard__hint"><?php esc_html_e( 'आज पढ़ें', 'golden-rashifal' ); ?> →</span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
