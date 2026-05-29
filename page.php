<?php
/**
 * Default Page Template — Premium Layout.
 * Hero section + premium content container + trust + links.
 * Ensures NO page looks like a default WordPress page.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--page gr-default-page" role="main">
    <?php while ( have_posts() ) : the_post(); ?>

    <!-- Premium Hero -->
    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span><?php the_title(); ?></span>
            </div>
            <h1 class="gr-page-hero__title"><?php the_title(); ?></h1>
            <?php if ( has_excerpt() ) : ?>
                <p class="gr-page-hero__subtitle"><?php echo esc_html( get_the_excerpt() ); ?></p>
            <?php endif; ?>
            <div class="gr-page-hero__meta">
                <span><?php esc_html_e( 'Last Updated:', 'golden-rashifal' ); ?> <?php echo esc_html( get_the_modified_date() ); ?></span>
            </div>
        </div>
    </section>

    <!-- Premium Content -->
    <div class="gr-premium-content gr-premium-content--narrow">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="gr-page__body">
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<nav class="gr-pagelinks">', 'after' => '</nav>' ) ); ?>
            </div>
        </article>

        <?php if ( comments_open() || get_comments_number() ) : ?>
            <?php comments_template(); ?>
        <?php endif; ?>

        <!-- CTA Section -->
        <div class="gr-page-cta">
            <h2 class="gr-page-cta__title"><?php esc_html_e( 'और जानकारी देखें', 'golden-rashifal' ); ?></h2>
            <p class="gr-page-cta__text"><?php esc_html_e( 'राशिफल, पंचांग, मुहूर्त — सब एक जगह', 'golden-rashifal' ); ?></p>
            <div class="gr-page-cta__buttons">
                <a class="gr-page-cta__btn gr-page-cta__btn--gold" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">राशिफल पढ़ें</a>
                <a class="gr-page-cta__btn gr-page-cta__btn--outline" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">पंचांग देखें</a>
            </div>
        </div>

        <!-- Trust Block -->
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

        <!-- Internal Links -->
        <div class="gr-internal-links">
            <h2 class="gr-internal-links__title"><?php esc_html_e( 'लोकप्रिय पेज', 'golden-rashifal' ); ?></h2>
            <div class="gr-internal-links__grid">
                <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><span class="icon">✦</span> राशिफल</a>
                <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>"><span class="icon">☉</span> पंचांग</a>
                <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>"><span class="icon">⏱</span> चौघड़िया</a>
                <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>"><span class="icon">☆</span> मुहूर्त</a>
                <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>"><span class="icon">◐</span> राहुकाल</a>
                <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><span class="icon">⚑</span> त्योहार</a>
            </div>
        </div>

        <!-- Footer Transition -->
        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — भरोसेमंद ज्योतिष जानकारी', 'golden-rashifal' ); ?></p>
        </div>
    </div>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
