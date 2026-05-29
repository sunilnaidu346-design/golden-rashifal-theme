<?php
/**
 * Template Name: Web Stories
 * Virtual Page: /web-stories/ — Web Stories Hub.
 * Google Discover optimized stories landing page.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--stories" role="main">

    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>Web Stories</span>
            </div>
            <span class="gr-page-hero__badge">📱 Visual Stories</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'Web Stories — ज्योतिष कहानियाँ', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'राशिफल, त्योहार, मुहूर्त और ज्योतिष टिप्स — Visual story format में। Google Discover पर featured।', 'golden-rashifal' ); ?></p>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--wide">

        <!-- Story Categories -->
        <h2>Story Categories</h2>
        <div class="gr-pcard-grid gr-pcard-grid--4">
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">✦</div>
                <div class="gr-pcard__title">राशिफल Stories</div>
                <div class="gr-pcard__text">दैनिक, साप्ताहिक राशिफल visual format में। Quick read, shareable।</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">⚑</div>
                <div class="gr-pcard__title">त्योहार Stories</div>
                <div class="gr-pcard__text">हिंदू त्योहारों की तिथि, महत्व, और विधि — visual storytelling।</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">☆</div>
                <div class="gr-pcard__title">मुहूर्त Stories</div>
                <div class="gr-pcard__text">शुभ मुहूर्त की जानकारी — विवाह, गृह प्रवेश, व्यापार।</div>
            </div>
            <div class="gr-pcard gr-pcard--highlight">
                <div class="gr-pcard__icon">💡</div>
                <div class="gr-pcard__title">Astrology Tips</div>
                <div class="gr-pcard__text">रोज़मर्रा के ज्योतिष टिप्स — quick, actionable, visual।</div>
            </div>
        </div>

        <!-- Web Stories Grid (dynamic if Web Stories plugin active) -->
        <h2>Latest Stories</h2>
        <?php
        $stories_query = new WP_Query( array(
            'post_type'      => 'web-story',
            'posts_per_page' => 12,
            'post_status'    => 'publish',
        ) );

        if ( $stories_query->have_posts() ) : ?>
            <div class="gr-zodiac-hub">
                <?php while ( $stories_query->have_posts() ) : $stories_query->the_post(); ?>
                    <a class="gr-zodiac-hub__item" href="<?php the_permalink(); ?>" style="padding:12px;">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'thumbnail', array( 'style' => 'width:60px;height:60px;border-radius:8px;object-fit:cover;' ) ); ?>
                        <?php endif; ?>
                        <span class="gr-zodiac-hub__name" style="font-size:.78rem;margin-top:6px;"><?php echo esc_html( wp_trim_words( get_the_title(), 4 ) ); ?></span>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <div style="text-align:center;padding:40px 0;">
                <p style="color:var(--gr-muted);font-size:.95rem;"><?php esc_html_e( 'Web Stories जल्द आ रही हैं! Google Web Stories plugin activate करें और stories publish करें।', 'golden-rashifal' ); ?></p>
                <p style="font-size:.84rem;color:var(--gr-muted);margin-top:12px;">Plugin: <a href="https://developers.google.com/web-stories" target="_blank" rel="noopener">Google Web Stories</a></p>
            </div>
        <?php endif; ?>

        <!-- Benefits Section -->
        <h2>Web Stories के फ़ायदे</h2>
        <div class="gr-pcard-grid gr-pcard-grid--3">
            <div class="gr-pcard">
                <div class="gr-pcard__icon">📱</div>
                <div class="gr-pcard__title">Mobile-First</div>
                <div class="gr-pcard__text">Full-screen visual experience, designed for mobile readers।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">🔍</div>
                <div class="gr-pcard__title">Google Discover</div>
                <div class="gr-pcard__text">Stories Google Discover feed में show होती हैं — massive organic traffic।</div>
            </div>
            <div class="gr-pcard">
                <div class="gr-pcard__icon">⚡</div>
                <div class="gr-pcard__title">Fast & Shareable</div>
                <div class="gr-pcard__text">AMP-based, ultra-fast loading, WhatsApp/social share ready।</div>
            </div>
        </div>

        <div class="gr-internal-links">
            <h2 class="gr-internal-links__title"><?php esc_html_e( 'और देखें', 'golden-rashifal' ); ?></h2>
            <div class="gr-internal-links__grid">
                <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><span class="icon">✦</span> राशिफल</a>
                <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>"><span class="icon">☉</span> पंचांग</a>
                <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><span class="icon">⚑</span> त्योहार</a>
                <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>"><span class="icon">☆</span> मुहूर्त</a>
                <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>"><span class="icon">⏱</span> चौघड़िया</a>
                <a href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>"><span class="icon">⌂</span> वास्तु</a>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — Visual Astrology Stories', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
