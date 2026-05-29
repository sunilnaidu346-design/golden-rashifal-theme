<?php
/**
 * Template Name: Authors
 * Virtual Page: /authors/ — Editorial Team listing.
 * Premium layout with team member cards.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--authors" role="main">

    <!-- Premium Hero -->
    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>लेखक</span>
            </div>
            <span class="gr-page-hero__badge">✦ Editorial Team</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'हमारी संपादकीय टीम — Authors', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'Golden Rashifal की content team — experienced writers, researchers, और editors जो आपके लिए quality ज्योतिष content तैयार करते हैं।', 'golden-rashifal' ); ?></p>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--wide">

        <!-- Team Grid -->
        <h2>संपादकीय टीम</h2>
        <div class="gr-authors-grid">
            <?php
            $founder_name = get_theme_mod( 'gr_founder_name', 'Golden Rashifal Editorial Team' );
            $founder_bio  = get_theme_mod( 'gr_founder_bio', 'वैदिक ज्योतिष सिद्धांतों, पंचांग गणनाओं, ग्रहों की स्थिति और त्योहार अनुसंधान पर आधारित प्रामाणिक ज्योतिष सामग्री प्रदान करने के लिए समर्पित।' );
            $founder_img  = get_theme_mod( 'gr_founder_image', '' );
            ?>
            <div class="gr-author-profile">
                <div class="gr-author-profile__img">
                    <?php if ( $founder_img ) : ?>
                        <img src="<?php echo esc_url( $founder_img ); ?>" alt="<?php echo esc_attr( $founder_name ); ?>" width="80" height="80" />
                    <?php else : ?>
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80'%3E%3Crect fill='%23f0e6c8' width='80' height='80'/%3E%3Ctext x='40' y='48' text-anchor='middle' font-size='28' fill='%23a68b1b'%3E✦%3C/text%3E%3C/svg%3E" alt="Team" width="80" height="80" />
                    <?php endif; ?>
                </div>
                <h3 class="gr-author-profile__name"><?php echo esc_html( $founder_name ); ?></h3>
                <p class="gr-author-profile__role"><?php esc_html_e( 'Founder & Chief Editor', 'golden-rashifal' ); ?></p>
                <p class="gr-author-profile__bio"><?php echo esc_html( wp_trim_words( $founder_bio, 20, '...' ) ); ?></p>
                <a class="gr-author-profile__link" href="<?php echo esc_url( home_url( '/author/' ) ); ?>">प्रोफ़ाइल देखें →</a>
            </div>

            <div class="gr-author-profile">
                <div class="gr-author-profile__img">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80'%3E%3Crect fill='%23e8f0e8' width='80' height='80'/%3E%3Ctext x='40' y='48' text-anchor='middle' font-size='28' fill='%23166534'%3E✎%3C/text%3E%3C/svg%3E" alt="Content Team" width="80" height="80" />
                </div>
                <h3 class="gr-author-profile__name"><?php esc_html_e( 'Content Research Team', 'golden-rashifal' ); ?></h3>
                <p class="gr-author-profile__role"><?php esc_html_e( 'Research & Writing', 'golden-rashifal' ); ?></p>
                <p class="gr-author-profile__bio"><?php esc_html_e( 'ज्योतिष शास्त्र, पंचांग गणना, और हिंदू धर्म ग्रंथों पर research करके content तैयार करती है।', 'golden-rashifal' ); ?></p>
                <a class="gr-author-profile__link" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">और जानें →</a>
            </div>

            <div class="gr-author-profile">
                <div class="gr-author-profile__img">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80'%3E%3Crect fill='%23f0e8f4' width='80' height='80'/%3E%3Ctext x='40' y='48' text-anchor='middle' font-size='28' fill='%237c3aed'%3E◎%3C/text%3E%3C/svg%3E" alt="Fact Check" width="80" height="80" />
                </div>
                <h3 class="gr-author-profile__name"><?php esc_html_e( 'Fact-Check & Review', 'golden-rashifal' ); ?></h3>
                <p class="gr-author-profile__role"><?php esc_html_e( 'Quality Assurance', 'golden-rashifal' ); ?></p>
                <p class="gr-author-profile__bio"><?php esc_html_e( 'हर article publish से पहले factual accuracy, balanced language, और source verification ensure करती है।', 'golden-rashifal' ); ?></p>
                <a class="gr-author-profile__link" href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">नीति देखें →</a>
            </div>
        </div>

        <!-- Editorial Process -->
        <h2>हमारी Editorial Process</h2>
        <div class="gr-pcard-grid gr-pcard-grid--4">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">🔬</div>
                <div class="gr-pcard__title">Research</div>
                <div class="gr-pcard__text">Traditional texts और verified sources से deep research</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">✎</div>
                <div class="gr-pcard__title">Writing</div>
                <div class="gr-pcard__text">सरल Hindi में, balanced और reader-friendly content creation</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">🔍</div>
                <div class="gr-pcard__title">Fact-Check</div>
                <div class="gr-pcard__text">Accuracy verify, misleading claims remove, source validate</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">✓</div>
                <div class="gr-pcard__title">Publish</div>
                <div class="gr-pcard__text">Final review, SEO optimization, और publish</div>
            </div>
        </div>

        <!-- CTA -->
        <div class="gr-page-cta">
            <h2 class="gr-page-cta__title"><?php esc_html_e( 'हमारा Content पढ़ें', 'golden-rashifal' ); ?></h2>
            <p class="gr-page-cta__text"><?php esc_html_e( 'Editorially reviewed, fact-checked — रोज़ ताज़ा ज्योतिष content', 'golden-rashifal' ); ?></p>
            <div class="gr-page-cta__buttons">
                <a class="gr-page-cta__btn gr-page-cta__btn--gold" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">राशिफल पढ़ें</a>
                <a class="gr-page-cta__btn gr-page-cta__btn--outline" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">पंचांग देखें</a>
            </div>
        </div>

        <!-- Trust -->
        <div class="gr-trust-block">
            <h2 class="gr-trust-block__title"><?php esc_html_e( 'Golden Rashifal पर भरोसा क्यों करें?', 'golden-rashifal' ); ?></h2>
            <div class="gr-trust-block__grid">
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> संपादकीय समीक्षित</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पंचांग सत्यापित</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> प्रतिदिन अपडेट</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पारंपरिक स्रोत</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पाठक केंद्रित</div>
            </div>
        </div>

        <div class="gr-internal-links">
            <h2 class="gr-internal-links__title"><?php esc_html_e( 'संबंधित पेज', 'golden-rashifal' ); ?></h2>
            <div class="gr-internal-links__grid">
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="icon">👥</span> हमारे बारे में</a>
                <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>"><span class="icon">✏</span> संपादकीय नीति</a>
                <a href="<?php echo esc_url( home_url( '/fact-check-policy/' ) ); ?>"><span class="icon">🔍</span> Fact-Check Policy</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="icon">📞</span> संपर्क करें</a>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — Professional Editorial Team', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
