<?php
/**
 * Homepage — Why Trust Golden Rashifal
 * Premium glassmorphism trust-signal section placed directly above the footer.
 *
 * Structure:
 *  1. Section header (eyebrow + title + subtitle)
 *  2. Four feature cards (4-col desktop / 2-col tablet / 1-col mobile)
 *  3. Statistics/trust row
 *  4. About block
 *  5. CTA block with two buttons
 *
 * @package GoldenRashifal
 */
?>
<section
    class="gr-ts"
    id="why-trust-golden-rashifal"
    aria-labelledby="gr-ts-heading"
    itemscope
    itemtype="https://schema.org/Organization"
>
    <!-- Decorative background blobs (CSS-only, aria-hidden) -->
    <div class="gr-ts__bg" aria-hidden="true">
        <span class="gr-ts__blob gr-ts__blob--1"></span>
        <span class="gr-ts__blob gr-ts__blob--2"></span>
        <span class="gr-ts__blob gr-ts__blob--3"></span>
    </div>

    <div class="gr-wrap gr-ts__inner">

        <!-- ── 1. SECTION HEADER ──────────────────────────────────── -->
        <header class="gr-ts__header gr-ts__fadein" data-gr-ts-fadein>
            <span class="gr-ts__eyebrow">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <?php esc_html_e( 'विश्वसनीयता', 'golden-rashifal' ); ?>
            </span>
            <h2 class="gr-ts__title" id="gr-ts-heading" itemprop="name">
                <?php esc_html_e( 'Why Trust', 'golden-rashifal' ); ?>
                <span class="gr-ts__title-highlight"><?php esc_html_e( 'Golden Rashifal?', 'golden-rashifal' ); ?></span>
            </h2>
            <p class="gr-ts__subtitle" itemprop="description">
                <?php esc_html_e( 'Accurate Rashifal, Daily Panchang, Choghadiya, and Muhurat information based on traditional Vedic astrology principles.', 'golden-rashifal' ); ?>
            </p>
        </header>

        <!-- ── 2. FOUR FEATURE CARDS ─────────────────────────────── -->
        <div class="gr-ts__cards" role="list">

            <!-- Card 1 -->
            <article class="gr-ts__card gr-ts__fadein" data-gr-ts-fadein data-gr-ts-delay="0" role="listitem">
                <div class="gr-ts__card-icon-wrap gr-ts__card-icon-wrap--violet" aria-hidden="true">
                    <svg class="gr-ts__card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 2a7 7 0 0 1 7 7c0 5-7 13-7 13S5 14 5 9a7 7 0 0 1 7-7z"/>
                        <circle cx="12" cy="9" r="2.5"/>
                    </svg>
                </div>
                <div class="gr-ts__card-body">
                    <h3 class="gr-ts__card-title"><?php esc_html_e( 'Accurate Daily Rashifal', 'golden-rashifal' ); ?></h3>
                    <p class="gr-ts__card-text"><?php esc_html_e( 'Get regularly updated horoscope predictions prepared using traditional Vedic astrology calculations.', 'golden-rashifal' ); ?></p>
                </div>
                <div class="gr-ts__card-footer">
                    <a class="gr-ts__card-link" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">
                        <?php esc_html_e( 'राशिफल देखें', 'golden-rashifal' ); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <span class="gr-ts__card-badge"><?php esc_html_e( 'Daily', 'golden-rashifal' ); ?></span>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="gr-ts__card gr-ts__fadein" data-gr-ts-fadein data-gr-ts-delay="80" role="listitem">
                <div class="gr-ts__card-icon-wrap gr-ts__card-icon-wrap--amber" aria-hidden="true">
                    <svg class="gr-ts__card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                        <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01"/>
                    </svg>
                </div>
                <div class="gr-ts__card-body">
                    <h3 class="gr-ts__card-title"><?php esc_html_e( 'Daily Panchang & Muhurat', 'golden-rashifal' ); ?></h3>
                    <p class="gr-ts__card-text"><?php esc_html_e( 'Access Panchang, Choghadiya, Rahu Kaal, Abhijit Muhurat, and other important daily timings.', 'golden-rashifal' ); ?></p>
                </div>
                <div class="gr-ts__card-footer">
                    <a class="gr-ts__card-link" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">
                        <?php esc_html_e( 'पंचांग देखें', 'golden-rashifal' ); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <span class="gr-ts__card-badge"><?php esc_html_e( 'Live', 'golden-rashifal' ); ?></span>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="gr-ts__card gr-ts__fadein" data-gr-ts-fadein data-gr-ts-delay="160" role="listitem">
                <div class="gr-ts__card-icon-wrap gr-ts__card-icon-wrap--teal" aria-hidden="true">
                    <svg class="gr-ts__card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <div class="gr-ts__card-body">
                    <h3 class="gr-ts__card-title"><?php esc_html_e( 'Authentic Vedic Knowledge', 'golden-rashifal' ); ?></h3>
                    <p class="gr-ts__card-text"><?php esc_html_e( 'Content is created using classical astrology principles and verified Panchang calculations.', 'golden-rashifal' ); ?></p>
                </div>
                <div class="gr-ts__card-footer">
                    <a class="gr-ts__card-link" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">
                        <?php esc_html_e( 'हमारे बारे में', 'golden-rashifal' ); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <span class="gr-ts__card-badge gr-ts__card-badge--green"><?php esc_html_e( 'Verified', 'golden-rashifal' ); ?></span>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="gr-ts__card gr-ts__fadein" data-gr-ts-fadein data-gr-ts-delay="240" role="listitem">
                <div class="gr-ts__card-icon-wrap gr-ts__card-icon-wrap--blue" aria-hidden="true">
                    <svg class="gr-ts__card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                    </svg>
                </div>
                <div class="gr-ts__card-body">
                    <h3 class="gr-ts__card-title"><?php esc_html_e( 'Fast & Easy Experience', 'golden-rashifal' ); ?></h3>
                    <p class="gr-ts__card-text"><?php esc_html_e( 'Mobile-friendly design, quick loading pages, and a smooth reading experience across all devices.', 'golden-rashifal' ); ?></p>
                </div>
                <div class="gr-ts__card-footer">
                    <a class="gr-ts__card-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php esc_html_e( 'अभी पढ़ें', 'golden-rashifal' ); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <span class="gr-ts__card-badge gr-ts__card-badge--blue"><?php esc_html_e( 'Mobile Ready', 'golden-rashifal' ); ?></span>
                </div>
            </article>

        </div><!-- /.gr-ts__cards -->

        <!-- ── 3. STATISTICS / TRUST ROW ─────────────────────────── -->
        <div class="gr-ts__stats gr-ts__fadein" data-gr-ts-fadein data-gr-ts-delay="100">
            <div class="gr-ts__stat">
                <span class="gr-ts__stat-icon" aria-hidden="true">⭐</span>
                <span class="gr-ts__stat-label"><?php esc_html_e( 'Daily Updated Content', 'golden-rashifal' ); ?></span>
            </div>
            <div class="gr-ts__stat-divider" aria-hidden="true"></div>
            <div class="gr-ts__stat">
                <span class="gr-ts__stat-icon" aria-hidden="true">🔮</span>
                <span class="gr-ts__stat-label"><?php esc_html_e( '12 Zodiac Signs Covered', 'golden-rashifal' ); ?></span>
            </div>
            <div class="gr-ts__stat-divider" aria-hidden="true"></div>
            <div class="gr-ts__stat">
                <span class="gr-ts__stat-icon" aria-hidden="true">📅</span>
                <span class="gr-ts__stat-label"><?php esc_html_e( 'Panchang & Muhurat Information', 'golden-rashifal' ); ?></span>
            </div>
            <div class="gr-ts__stat-divider" aria-hidden="true"></div>
            <div class="gr-ts__stat">
                <span class="gr-ts__stat-icon" aria-hidden="true">🕉️</span>
                <span class="gr-ts__stat-label"><?php esc_html_e( 'Vedic Astrology Based', 'golden-rashifal' ); ?></span>
            </div>
        </div>

        <!-- ── 4. ABOUT BLOCK ────────────────────────────────────── -->
        <div class="gr-ts__about gr-ts__fadein" data-gr-ts-fadein data-gr-ts-delay="120" itemprop="description">
            <div class="gr-ts__about-logo" aria-hidden="true">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            </div>
            <div class="gr-ts__about-body">
                <strong class="gr-ts__about-name"><?php esc_html_e( 'Golden Rashifal', 'golden-rashifal' ); ?></strong>
                <p class="gr-ts__about-text">
                    <?php esc_html_e( 'Golden Rashifal provides daily horoscope predictions, Panchang, Choghadiya, Muhurat, and astrology insights for readers across India. Our goal is to present reliable information in a simple and easy-to-understand format while preserving the authenticity of traditional Vedic astrology.', 'golden-rashifal' ); ?>
                </p>
            </div>
        </div>

        <!-- ── 5. CTA BLOCK ──────────────────────────────────────── -->
        <div class="gr-ts__cta gr-ts__fadein" data-gr-ts-fadein data-gr-ts-delay="80">
            <div class="gr-ts__cta-glow" aria-hidden="true"></div>
            <div class="gr-ts__cta-content">
                <div class="gr-ts__cta-text">
                    <h3 class="gr-ts__cta-heading"><?php esc_html_e( 'Explore Today\'s Astrology Insights', 'golden-rashifal' ); ?></h3>
                    <p class="gr-ts__cta-sub"><?php esc_html_e( 'Stay updated with today\'s Rashifal, Panchang, Choghadiya, and Muhurat information.', 'golden-rashifal' ); ?></p>
                </div>
                <div class="gr-ts__cta-buttons">
                    <a
                        class="gr-ts__btn gr-ts__btn--primary"
                        href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"
                    >
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 2a7 7 0 0 1 7 7c0 5-7 13-7 13S5 14 5 9a7 7 0 0 1 7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
                        <?php esc_html_e( 'View Today\'s Rashifal', 'golden-rashifal' ); ?>
                    </a>
                    <a
                        class="gr-ts__btn gr-ts__btn--secondary"
                        href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>"
                    >
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        <?php esc_html_e( 'Check Today\'s Panchang', 'golden-rashifal' ); ?>
                    </a>
                </div>
            </div>
        </div>

    </div><!-- /.gr-ts__inner -->
</section>
