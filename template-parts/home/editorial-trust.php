<?php
/**
 * Homepage — Premium Editorial Authority Block.
 * Full-width, two-column (60/40), brand story + trust + stats.
 * E-E-A-T optimized, professional editorial identity.
 *
 * @package GoldenRashifal
 */

$founder_name = get_theme_mod( 'gr_founder_name', 'Golden Rashifal Editorial Team' );
$founder_bio  = get_theme_mod( 'gr_founder_bio', '' );
$founder_img  = get_theme_mod( 'gr_founder_image', '' );
?>
<section class="gr-authority" aria-label="<?php esc_attr_e( 'संपादकीय अधिकार', 'golden-rashifal' ); ?>" itemscope itemtype="https://schema.org/Organization">
    <meta itemprop="name" content="Golden Rashifal" />
    <meta itemprop="url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />

    <div class="gr-wrap gr-authority__inner">

        <!-- LEFT: Content (60%) -->
        <div class="gr-authority__content">

            <span class="gr-authority__label"><?php esc_html_e( 'हम पर विश्वास क्यों करें', 'golden-rashifal' ); ?></span>

            <h2 class="gr-authority__title" itemprop="description">
                <?php esc_html_e( 'Golden Rashifal की कहानी', 'golden-rashifal' ); ?>
            </h2>

            <p class="gr-authority__subtitle">
                <?php esc_html_e( 'परंपरा, प्रामाणिकता और आधुनिक ज्योतिष का संगम', 'golden-rashifal' ); ?>
            </p>

            <div class="gr-authority__desc">
                <p><?php esc_html_e( 'Golden Rashifal की संपादकीय टीम वैदिक ज्योतिष, पंचांग गणना, शुभ मुहूर्त, राहुकाल और हिंदू परंपराओं पर आधारित जानकारी को सरल, सटीक और विश्वसनीय रूप में प्रस्तुत करती है।', 'golden-rashifal' ); ?></p>
                <p><?php esc_html_e( 'हमारा उद्देश्य पाठकों तक प्रामाणिक और अद्यतन जानकारी पहुँचाना है।', 'golden-rashifal' ); ?></p>
                <p class="gr-authority__desc-en">Every article is reviewed before publication and regularly updated.</p>
            </div>

            <!-- Trust Badges -->
            <div class="gr-authority__badges">
                <span class="gr-authority__badge"><span class="gr-authority__badge-check">✓</span> <?php esc_html_e( 'Editorially Reviewed', 'golden-rashifal' ); ?></span>
                <span class="gr-authority__badge"><span class="gr-authority__badge-check">✓</span> <?php esc_html_e( 'Panchang Verified', 'golden-rashifal' ); ?></span>
                <span class="gr-authority__badge"><span class="gr-authority__badge-check">✓</span> <?php esc_html_e( 'Daily Updated', 'golden-rashifal' ); ?></span>
                <span class="gr-authority__badge"><span class="gr-authority__badge-check">✓</span> <?php esc_html_e( 'Traditional Sources', 'golden-rashifal' ); ?></span>
                <span class="gr-authority__badge"><span class="gr-authority__badge-check">✓</span> <?php esc_html_e( 'Reader Focused', 'golden-rashifal' ); ?></span>
                <span class="gr-authority__badge"><span class="gr-authority__badge-check">✓</span> <?php esc_html_e( 'Astrology Verified', 'golden-rashifal' ); ?></span>
            </div>

            <!-- Statistics -->
            <div class="gr-authority__stats">
                <div class="gr-authority__stat">
                    <span class="gr-authority__stat-num">1000+</span>
                    <span class="gr-authority__stat-label"><?php esc_html_e( 'Published Articles', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-authority__stat">
                    <span class="gr-authority__stat-num">365</span>
                    <span class="gr-authority__stat-label"><?php esc_html_e( 'Daily Updates', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-authority__stat">
                    <span class="gr-authority__stat-num">50+</span>
                    <span class="gr-authority__stat-label"><?php esc_html_e( 'Astrology Topics', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-authority__stat">
                    <span class="gr-authority__stat-num">100%</span>
                    <span class="gr-authority__stat-label"><?php esc_html_e( 'Editorial Review', 'golden-rashifal' ); ?></span>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="gr-authority__buttons">
                <a class="gr-authority__btn gr-authority__btn--primary" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">
                    <?php esc_html_e( 'About Us', 'golden-rashifal' ); ?>
                </a>
                <a class="gr-authority__btn gr-authority__btn--outline" href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">
                    <?php esc_html_e( 'Editorial Policy', 'golden-rashifal' ); ?>
                </a>
                <a class="gr-authority__btn gr-authority__btn--outline" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
                    <?php esc_html_e( 'Contact Us', 'golden-rashifal' ); ?>
                </a>
            </div>

        </div>

        <!-- RIGHT: Image + Identity (40%) -->
        <div class="gr-authority__visual">
            <div class="gr-authority__image-wrap">
                <?php if ( $founder_img ) : ?>
                    <img class="gr-authority__image" src="<?php echo esc_url( $founder_img ); ?>" alt="<?php echo esc_attr( $founder_name ); ?>" width="400" height="440" loading="lazy" itemprop="image" />
                <?php else : ?>
                    <div class="gr-authority__placeholder" aria-hidden="true">
                        <svg viewBox="0 0 400 440" xmlns="http://www.w3.org/2000/svg">
                            <rect width="400" height="440" rx="20" fill="#f8f4e8"/>
                            <circle cx="200" cy="160" r="70" fill="#fdf6e3" stroke="#d4af37" stroke-width="3"/>
                            <text x="200" y="178" text-anchor="middle" font-size="48" fill="#a68b1b" font-family="serif">✦</text>
                            <rect x="120" y="260" width="160" height="12" rx="6" fill="#eae4d8"/>
                            <rect x="140" y="284" width="120" height="8" rx="4" fill="#f0e8d6"/>
                            <rect x="80" y="320" width="240" height="6" rx="3" fill="#f5f0e4"/>
                            <rect x="100" y="336" width="200" height="6" rx="3" fill="#f5f0e4"/>
                            <rect x="130" y="352" width="140" height="6" rx="3" fill="#f5f0e4"/>
                            <circle cx="160" cy="400" r="16" fill="#fdf6e3" stroke="#d4af37" stroke-width="1.5"/>
                            <circle cx="200" cy="400" r="16" fill="#fdf6e3" stroke="#d4af37" stroke-width="1.5"/>
                            <circle cx="240" cy="400" r="16" fill="#fdf6e3" stroke="#d4af37" stroke-width="1.5"/>
                            <text x="160" y="406" text-anchor="middle" font-size="14" fill="#a68b1b">✓</text>
                            <text x="200" y="406" text-anchor="middle" font-size="14" fill="#a68b1b">☉</text>
                            <text x="240" y="406" text-anchor="middle" font-size="14" fill="#a68b1b">✎</text>
                        </svg>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Identity below image -->
            <div class="gr-authority__identity" itemprop="founder" itemscope itemtype="https://schema.org/Person">
                <h3 class="gr-authority__identity-name" itemprop="name"><?php echo esc_html( $founder_name ); ?></h3>
                <p class="gr-authority__identity-role"><?php esc_html_e( 'Vedic Astrology Experts', 'golden-rashifal' ); ?></p>
                <p class="gr-authority__identity-desc"><?php esc_html_e( 'Dedicated to authentic Panchang, Muhurat, Rashifal and Hindu calendar information.', 'golden-rashifal' ); ?></p>
            </div>
        </div>

    </div>
</section>
