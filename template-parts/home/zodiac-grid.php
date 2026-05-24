<?php
/**
 * Homepage — 12 zodiac signs grid.
 *
 * @package GoldenRashifal
 */

$signs = golden_rashifal_zodiac_signs();
?>
<section class="gr-section gr-section--alt">
    <div class="gr-wrap">
        <div class="gr-section__header gr-section__header--center">
            <span class="gr-section__eyebrow"><?php esc_html_e( 'राशि चक्र', 'golden-rashifal' ); ?></span>
            <h2 class="gr-section__title"><?php esc_html_e( 'अपनी राशि चुनें', 'golden-rashifal' ); ?></h2>
            <p class="gr-section__desc"><?php esc_html_e( 'जन्म तारीख़ के अनुसार अपनी सूर्य राशि पर क्लिक करें।', 'golden-rashifal' ); ?></p>
        </div>

        <ul class="gr-zodiac-grid" role="list">
            <?php foreach ( $signs as $sign ) : ?>
            <li>
                <a class="gr-zcard" href="<?php echo esc_url( home_url( '/rashifal/' . $sign['slug'] . '/' ) ); ?>">
                    <span class="gr-zcard__icon"><?php echo golden_rashifal_zodiac_icon( $sign['icon'] ); ?></span>
                    <span class="gr-zcard__name"><?php echo esc_html( $sign['hi'] ); ?></span>
                    <span class="gr-zcard__en"><?php echo esc_html( $sign['en'] ); ?></span>
                    <span class="gr-zcard__range"><?php echo esc_html( $sign['range'] ); ?></span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
