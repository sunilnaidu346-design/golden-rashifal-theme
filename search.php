<?php
/**
 * Search Results — Premium Layout with Hero, Cards & Internal Links.
 *
 * @package GoldenRashifal
 */

get_header();
global $wp_query;
?>

<main id="primary" class="gr-main gr-main--search" role="main">

    <!-- Premium Search Hero -->
    <section class="gr-search-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>खोज परिणाम</span>
            </div>
            <h1 class="gr-search-hero__title"><?php esc_html_e( 'खोज परिणाम', 'golden-rashifal' ); ?></h1>
            <p class="gr-search-hero__query">"<?php echo esc_html( get_search_query() ); ?>"</p>
            <p class="gr-search-hero__count">
                <?php printf( esc_html( _n( '%s लेख मिला', '%s लेख मिले', $wp_query->found_posts, 'golden-rashifal' ) ), number_format_i18n( $wp_query->found_posts ) ); ?>
            </p>
            <form class="gr-search-hero__form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" name="s" placeholder="<?php esc_attr_e( 'यहाँ खोजें...', 'golden-rashifal' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" />
                <button type="submit"><?php esc_html_e( 'खोजें', 'golden-rashifal' ); ?></button>
            </form>
        </div>
    </section>

    <!-- Results Grid -->
    <div class="gr-premium-content gr-premium-content--wide">
        <?php if ( have_posts() ) : ?>
            <div class="gr-pcard-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <a class="gr-pcard" href="<?php the_permalink(); ?>" style="text-decoration:none;">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="margin:-28px -28px 18px;border-radius:14px 14px 0 0;overflow:hidden;aspect-ratio:16/9;">
                                <?php the_post_thumbnail( 'medium_large', array( 'style' => 'width:100%;height:100%;object-fit:cover;', 'loading' => 'lazy' ) ); ?>
                            </div>
                        <?php endif; ?>
                        <h3 class="gr-pcard__title"><?php the_title(); ?></h3>
                        <p class="gr-pcard__text"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20, '...' ) ); ?></p>
                        <span style="font-size:.78rem;color:var(--gr-muted);"><?php echo esc_html( get_the_date() ); ?></span>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination( array( 'mid_size' => 1, 'prev_text' => '&laquo; पिछला', 'next_text' => 'अगला &raquo;' ) ); ?>
        <?php else : ?>
            <div style="text-align:center;padding:48px 0;">
                <p style="font-size:1.1rem;color:var(--gr-muted);margin-bottom:24px;"><?php esc_html_e( 'कोई परिणाम नहीं मिला। कृपया अलग शब्दों से खोजें।', 'golden-rashifal' ); ?></p>
            </div>
        <?php endif; ?>

        <!-- Internal Linking -->
        <div class="gr-internal-links">
            <h2 class="gr-internal-links__title"><?php esc_html_e( 'लोकप्रिय पेज', 'golden-rashifal' ); ?></h2>
            <div class="gr-internal-links__grid">
                <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>"><span class="icon">✦</span> आज का राशिफल</a>
                <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>"><span class="icon">☉</span> पंचांग</a>
                <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>"><span class="icon">⏱</span> चौघड़िया</a>
                <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>"><span class="icon">☆</span> शुभ मुहूर्त</a>
                <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>"><span class="icon">◐</span> राहुकाल</a>
                <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><span class="icon">⚑</span> त्योहार</a>
                <a href="<?php echo esc_url( home_url( '/weekly-rashifal/' ) ); ?>"><span class="icon">◈</span> साप्ताहिक राशिफल</a>
                <a href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>"><span class="icon">⌂</span> वास्तु</a>
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

        <!-- Footer Transition -->
        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — प्रामाणिक ज्योतिष जानकारी हिंदी में', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
