<?php
/**
 * Homepage — 12 zodiac signs grid (6×2 with pastel backgrounds).
 * Matches screenshot 2: purple icons, alternating pastel card colors, personality keywords.
 *
 * @package GoldenRashifal
 */

$signs = golden_rashifal_zodiac_signs();

$pastels = array(
    'var(--gr-pastel-peach)',
    'var(--gr-pastel-yellow)',
    'var(--gr-pastel-green)',
    'var(--gr-pastel-blue)',
    'var(--gr-pastel-purple)',
    'var(--gr-pastel-cyan)',
    'var(--gr-pastel-cyan)',
    'var(--gr-pastel-purple)',
    'var(--gr-pastel-blue)',
    'var(--gr-pastel-green)',
    'var(--gr-pastel-yellow)',
    'var(--gr-pastel-peach)',
);

$keywords = array(
    'साहसी, ऊर्जावान',
    'स्थिर, भरोसेमंद',
    'बुद्धिमान, जिज्ञासु',
    'संवेदनशील, देखभाल',
    'नेतृत्व, आत्मविश्वास',
    'विश्लेषक, परिश्रमी',
    'संतुलित, न्यायी',
    'गहन, रहस्यमय',
    'आशावादी, स्वतंत्र',
    'अनुशासित, महत्वाकांक्षी',
    'नवाचारी, मानवतावादी',
    'संवेदनशील, सपने देखने वाला',
);
?>
<section class="gr-section gr-section--zodiac">
    <div class="gr-wrap">

        <header class="gr-section__head gr-section__head--center">
            <span class="gr-section__badge">🔮 सभी 12 राशियाँ</span>
            <h2 class="gr-section__title">राशि <span class="gr-text--red">चक्र</span></h2>
            <p class="gr-section__sub"><?php esc_html_e( 'अपनी राशि चुनकर विस्तृत जानकारी पाएं', 'golden-rashifal' ); ?></p>
        </header>

        <div class="gr-zodiac-grid">
            <?php foreach ( $signs as $i => $sign ) : ?>
            <a class="gr-zodiac-card" href="<?php echo esc_url( home_url( '/rashifal/' . $sign['slug'] . '/' ) ); ?>" style="background:<?php echo esc_attr( $pastels[ $i ] ); ?>">
                <span class="gr-zodiac-card__icon"><?php echo golden_rashifal_zodiac_icon( $sign['icon'] ); ?></span>
                <strong class="gr-zodiac-card__name"><?php echo esc_html( $sign['hi'] ); ?></strong>
                <span class="gr-zodiac-card__en"><?php echo esc_html( $sign['en'] ); ?></span>
                <span class="gr-zodiac-card__range"><?php echo esc_html( $sign['range'] ); ?></span>
                <span class="gr-zodiac-card__keywords"><?php echo esc_html( $keywords[ $i ] ); ?></span>
            </a>
            <?php endforeach; ?>
        </div>

        <div class="gr-section__cta-wrap">
            <a class="gr-btn gr-btn--gold" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><?php esc_html_e( 'सभी राशियों का राशिफल देखें >', 'golden-rashifal' ); ?></a>
        </div>

    </div>
</section>
