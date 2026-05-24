<?php
/**
 * Homepage — Spiritual section (3 columns: time table, mantras, gemstones).
 *
 * @package GoldenRashifal
 */

$sun = golden_rashifal_sun_times();
$rahu = golden_rashifal_rahukaal();
?>
<section class="gr-section gr-section--spiritual">
    <div class="gr-wrap">

        <header class="gr-section__head gr-section__head--center">
            <span class="gr-section__badge">आध्यात्मिक जानकारी</span>
            <h2 class="gr-section__title">आध्यात्मिक <span class="gr-text--orange">जगत</span></h2>
        </header>

        <div class="gr-spiritual-grid">

            <!-- Column 1: Time Table -->
            <div class="gr-spiritual-col">
                <h3 class="gr-spiritual-col__title">आज का समय सारणी</h3>
                <ul class="gr-time-list">
                    <li><span>ब्रह्म मुहूर्त</span><strong>04:32-05:22</strong><span class="gr-dot gr-dot--green"></span></li>
                    <li><span>प्रातःकाल</span><strong>05:22-06:12</strong><span class="gr-dot gr-dot--green"></span></li>
                    <li><span>सूर्योदय</span><strong><?php echo esc_html( golden_rashifal_format_minutes( $sun['sunrise_min'] ) ); ?></strong><span class="gr-dot gr-dot--green"></span></li>
                    <li><span>राहु काल</span><strong><?php echo esc_html( $rahu['start'] . '-' . $rahu['end'] ); ?></strong><span class="gr-dot gr-dot--red"></span></li>
                    <li><span>अभिजित</span><strong>11:55-12:45</strong><span class="gr-dot gr-dot--green"></span></li>
                    <li><span>गोधूलि</span><strong>18:30-18:54</strong><span class="gr-dot gr-dot--green"></span></li>
                    <li><span>प्रदोष</span><strong>18:45-20:15</strong><span class="gr-dot gr-dot--green"></span></li>

                    <li><span>सूर्यास्त</span><strong><?php echo esc_html( golden_rashifal_format_minutes( $sun['sunset_min'] ) ); ?></strong><span class="gr-dot gr-dot--green"></span></li>
                </ul>
            </div>

            <!-- Column 2: Mantras -->
            <div class="gr-spiritual-col">
                <h3 class="gr-spiritual-col__title">शुभ मंत्र</h3>
                <div class="gr-mantra-list">
                    <a class="gr-mantra-item" href="<?php echo esc_url( home_url( '/mantra/mahamrityunjay/' ) ); ?>">
                        <span class="gr-mantra-item__icon" style="color:#7c3aed;">&#9788;</span>
                        <div><strong>महामृत्युंजय मंत्र</strong><span>मृत्यु भय से मुक्ति</span></div>
                    </a>
                    <a class="gr-mantra-item" href="<?php echo esc_url( home_url( '/mantra/gayatri/' ) ); ?>">
                        <span class="gr-mantra-item__icon" style="color:#d97706;">&#9728;</span>
                        <div><strong>गायत्री मंत्र</strong><span>बुद्धि और ज्ञान</span></div>
                    </a>
                    <a class="gr-mantra-item" href="<?php echo esc_url( home_url( '/mantra/hanuman-chalisa/' ) ); ?>">
                        <span class="gr-mantra-item__icon" style="color:#dc2626;">&#10038;</span>
                        <div><strong>हनुमान चालीसा</strong><span>शक्ति और रक्षा</span></div>
                    </a>
                    <a class="gr-mantra-item" href="<?php echo esc_url( home_url( '/mantra/shri-sukta/' ) ); ?>">
                        <span class="gr-mantra-item__icon" style="color:#b8960c;">&#9733;</span>
                        <div><strong>श्री सूक्त</strong><span>धन और समृद्धि</span></div>
                    </a>
                </div>

                <div class="gr-spiritual-quote">
                    <p>"जो सोचा जाए वह हो जाए,<br>जो चाहा जाए वह मिल जाए!"</p>
                    <span>— वेद वचन</span>
                </div>
            </div>

            <!-- Column 3: Gemstones -->
            <div class="gr-spiritual-col">
                <h3 class="gr-spiritual-col__title">नवग्रह रत्न</h3>
                <div class="gr-gems-grid">
                    <a class="gr-gem" href="<?php echo esc_url( home_url( '/ratna/manikya/' ) ); ?>">
                        <span class="gr-gem__stone" style="color:#c62828;">&#9670;</span>
                        <strong>माणिक्य</strong><span>सूर्य<br>शक्ति</span>
                    </a>
                    <a class="gr-gem" href="<?php echo esc_url( home_url( '/ratna/moti/' ) ); ?>">
                        <span class="gr-gem__stone" style="color:#78909c;">&#9675;</span>
                        <strong>मोती</strong><span>चंद्र<br>शांति</span>
                    </a>
                    <a class="gr-gem" href="<?php echo esc_url( home_url( '/ratna/munga/' ) ); ?>">
                        <span class="gr-gem__stone" style="color:#d32f2f;">&#9650;</span>
                        <strong>मूंगा</strong><span>मंगल<br>साहस</span>
                    </a>

                    <a class="gr-gem" href="<?php echo esc_url( home_url( '/ratna/panna/' ) ); ?>">
                        <span class="gr-gem__stone" style="color:#2e7d32;">&#9671;</span>
                        <strong>पन्ना</strong><span>बुध<br>बुद्धि</span>
                    </a>
                    <a class="gr-gem" href="<?php echo esc_url( home_url( '/ratna/pukhraj/' ) ); ?>">
                        <span class="gr-gem__stone" style="color:#f9a825;">&#9733;</span>
                        <strong>पुखराज</strong><span>गुरु<br>भाग्य</span>
                    </a>
                    <a class="gr-gem" href="<?php echo esc_url( home_url( '/ratna/heera/' ) ); ?>">
                        <span class="gr-gem__stone" style="color:#0097a7;">&#10070;</span>
                        <strong>हीरा</strong><span>शुक्र<br>प्रेम</span>
                    </a>
                    <a class="gr-gem" href="<?php echo esc_url( home_url( '/ratna/neelam/' ) ); ?>">
                        <span class="gr-gem__stone" style="color:#1565c0;">&#9679;</span>
                        <strong>नीलम</strong><span>शनि<br>धन</span>
                    </a>
                    <a class="gr-gem" href="<?php echo esc_url( home_url( '/ratna/gomed/' ) ); ?>">
                        <span class="gr-gem__stone" style="color:#5d4037;">&#9683;</span>
                        <strong>गोमेद</strong><span>राहु<br>सुरक्षा</span>
                    </a>
                    <a class="gr-gem" href="<?php echo esc_url( home_url( '/ratna/lahsuniya/' ) ); ?>">
                        <span class="gr-gem__stone" style="color:#607d8b;">&#9680;</span>
                        <strong>लहसुनिया</strong><span>केतु<br>मोक्ष</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
