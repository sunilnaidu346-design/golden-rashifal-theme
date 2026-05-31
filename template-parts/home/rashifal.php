<?php
/**
 * Homepage — आज का राशिफल section.
 * Matches screenshot 1: tabs, zodiac sidebar, rashifal content with progress bars.
 *
 * @package GoldenRashifal
 */

$signs = golden_rashifal_zodiac_signs();
?>
<section class="gr-section gr-section--rashifal">
    <div class="gr-wrap">

        <header class="gr-section__head gr-section__head--center">
            <span class="gr-section__badge">⭐ दैनिक राशिफल</span>
            <h2 class="gr-section__title">आज का <span class="gr-text--red">राशिफल</span></h2>
            <p class="gr-section__sub"><?php esc_html_e( 'अपनी राशि चुनें और आज का भविष्यफल जानें', 'golden-rashifal' ); ?></p>
        </header>

        <div class="gr-rashifal-tabs">
            <button class="gr-rashifal-tabs__btn is-active">आज</button>
            <button class="gr-rashifal-tabs__btn">साप्ताहिक</button>
            <button class="gr-rashifal-tabs__btn">मासिक</button>
        </div>

        <div class="gr-rashifal-layout">

            <div class="gr-rashifal-sidebar">
                <?php foreach ( $signs as $i => $sign ) : ?>
                <a class="gr-rashifal-sidebar__item <?php echo 0 === $i ? 'is-active' : ''; ?>" href="<?php echo esc_url( home_url( '/rashifal/' . $sign['slug'] . '/' ) ); ?>">
                    <?php echo golden_rashifal_zodiac_icon( $sign['icon'] ); ?>
                    <span class="gr-rashifal-sidebar__name"><?php echo esc_html( $sign['hi'] ); ?></span>
                    <span class="gr-rashifal-sidebar__en"><?php echo esc_html( $sign['en'] ); ?></span>
                </a>
                <?php endforeach; ?>
            </div>

            <div class="gr-rashifal-content">
                <div class="gr-rashifal-content__head">
                    <span class="gr-rashifal-content__icon"><?php echo golden_rashifal_zodiac_icon( 'aries' ); ?></span>
                    <div>
                        <h3 class="gr-rashifal-content__title">मेष राशि <span class="gr-rashifal-content__badge">ARIES</span></h3>
                        <p class="gr-rashifal-content__meta">तत्व: अग्नि &nbsp; स्वामी: मंगल &nbsp; शुभांक: 9 &nbsp; शुभ दिन: मंगलवार</p>
                    </div>
                </div>

                <div class="gr-rashifal-content__body">
                    <h4>आज भविष्यफल</h4>
                    <p class="gr-rashifal-content__highlight">आज आपके लिए बेहद शुभ दिन है। कार्यक्षेत्र में आपकी मेहनत रंग लाएगी। प्रेम जीवन में मधुरता रहेगी। स्वास्थ्य का ध्यान रखें।</p>
                    <p>आज का दिन आपके लिए विशेष महत्व रखता है। ग्रहों की स्थिति आपके पक्ष में है। अपने कार्यों को पूरी लगन से करें और सफलता आपके कदम चूमेगी।</p>
                </div>

                <div class="gr-rashifal-content__bars">
                    <div class="gr-rashifal-bar">
                        <span class="gr-rashifal-bar__label">❤️ प्रेम</span>
                        <div class="gr-rashifal-bar__track"><div class="gr-rashifal-bar__fill gr-rashifal-bar__fill--red" style="width:85%"></div></div>
                        <span class="gr-rashifal-bar__pct">85%</span>
                    </div>
                    <div class="gr-rashifal-bar">
                        <span class="gr-rashifal-bar__label">🏢 करियर</span>
                        <div class="gr-rashifal-bar__track"><div class="gr-rashifal-bar__fill gr-rashifal-bar__fill--blue" style="width:90%"></div></div>
                        <span class="gr-rashifal-bar__pct">90%</span>
                    </div>
                    <div class="gr-rashifal-bar">
                        <span class="gr-rashifal-bar__label">💰 धन</span>
                        <div class="gr-rashifal-bar__track"><div class="gr-rashifal-bar__fill gr-rashifal-bar__fill--yellow" style="width:75%"></div></div>
                        <span class="gr-rashifal-bar__pct">75%</span>
                    </div>
                    <div class="gr-rashifal-bar">
                        <span class="gr-rashifal-bar__label">🌿 स्वास्थ्य</span>
                        <div class="gr-rashifal-bar__track"><div class="gr-rashifal-bar__fill gr-rashifal-bar__fill--green" style="width:80%"></div></div>
                        <span class="gr-rashifal-bar__pct">80%</span>
                    </div>
                </div>

                <div class="gr-rashifal-content__lucky">
                    <h4>🍀 आज के शुभ संकेत</h4>
                    <div class="gr-rashifal-lucky-row">
                        <div class="gr-rashifal-lucky__item"><span class="gr-rashifal-lucky__dot" style="background:#e91e8c"></span><span>शुभ रंग</span></div>
                        <div class="gr-rashifal-lucky__item"><strong class="gr-rashifal-lucky__num">9</strong><span>शुभ अंक</span></div>
                        <div class="gr-rashifal-lucky__item"><span>🌙</span><span>शुभ दिन</span></div>
                    </div>
                </div>

                <a class="gr-btn gr-btn--gold" href="<?php echo esc_url( home_url( '/rashifal/mesh/' ) ); ?>"><?php esc_html_e( 'पूरा राशिफल पढ़ें >', 'golden-rashifal' ); ?></a>
            </div>

        </div>
    </div>
</section>
