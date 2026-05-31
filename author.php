<?php
/**
 * Author Archive — Premium Editorial Profile Page.
 * E-E-A-T optimized, AdSense friendly, professional design.
 * Author data is hardcoded from global GR_AUTHOR_* constants (functions.php).
 *
 * @package GoldenRashifal
 */

get_header();

$author    = get_queried_object();
$author_id = $author ? $author->ID : 0;
$count     = count_user_posts( $author_id );
?>

<main id="primary" class="gr-main gr-main--author" role="main" itemscope itemtype="https://schema.org/Person">

    <!-- Author Hero Section -->
    <section class="gr-author-hero">
        <div class="gr-author-hero__inner">

            <div class="gr-author-hero__img">
                <img
                    src="<?php echo esc_url( GR_AUTHOR_IMG ); ?>"
                    alt="<?php echo esc_attr( GR_AUTHOR_NAME ); ?>"
                    width="120"
                    height="120"
                    loading="eager"
                    decoding="async"
                    itemprop="image"
                    onerror="this.onerror=null;this.src='<?php echo esc_url( get_avatar_url( $author_id, array( 'size' => 120 ) ) ); ?>';"
                />
            </div>

            <h1 class="gr-author-hero__name" itemprop="name"><?php echo esc_html( GR_AUTHOR_NAME ); ?></h1>
            <p class="gr-author-hero__role" itemprop="jobTitle"><?php echo esc_html( GR_AUTHOR_ROLE ); ?></p>
            <p class="gr-author-hero__bio" itemprop="description"><?php echo esc_html( GR_AUTHOR_BIO ); ?></p>

            <!-- Stats -->
            <div class="gr-author-hero__stats">
                <div class="gr-author-hero__stat">
                    <span class="gr-author-hero__stat-num"><?php echo esc_html( $count ); ?>+</span>
                    <span class="gr-author-hero__stat-label"><?php esc_html_e( 'प्रकाशित लेख', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-author-hero__stat">
                    <span class="gr-author-hero__stat-num">12</span>
                    <span class="gr-author-hero__stat-label"><?php esc_html_e( 'राशि चिह्न', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-author-hero__stat">
                    <span class="gr-author-hero__stat-num">365</span>
                    <span class="gr-author-hero__stat-label"><?php esc_html_e( 'दिन अपडेट', 'golden-rashifal' ); ?></span>
                </div>
            </div>

            <!-- E-E-A-T Badges -->
            <div class="gr-author-hero__badges">
                <span><?php esc_html_e( 'संपादकीय समीक्षित', 'golden-rashifal' ); ?></span>
                <span><?php esc_html_e( 'पंचांग सत्यापित', 'golden-rashifal' ); ?></span>
                <span><?php esc_html_e( 'प्रतिदिन अपडेट', 'golden-rashifal' ); ?></span>
            </div>

            <!-- Social links -->
            <div class="gr-author-hero__social" aria-label="<?php esc_attr_e( 'सोशल मीडिया', 'golden-rashifal' ); ?>">
                <a href="<?php echo esc_url( GR_AUTHOR_FB ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--fb" aria-label="Facebook">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="<?php echo esc_url( GR_AUTHOR_IG ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--ig" aria-label="Instagram">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="<?php echo esc_url( GR_AUTHOR_YT ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--yt" aria-label="YouTube">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <a href="<?php echo esc_url( GR_AUTHOR_WA ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--wa" aria-label="WhatsApp">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.532 5.855L.057 23.48a.75.75 0 0 0 .914.914l5.674-1.485A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.222-3.875 1.015 1.033-3.772-.243-.389A9.953 9.953 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                </a>
                <a href="mailto:<?php echo esc_attr( GR_AUTHOR_EMAIL ); ?>" class="gr-about-hero__social-btn" aria-label="Email" itemprop="email">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </a>
            </div>

            <a class="gr-author-hero__cta" href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>"><?php esc_html_e( 'संपादकीय नीति देखें', 'golden-rashifal' ); ?></a>
        </div>
    </section>

    <!-- Expertise Section -->
    <section class="gr-author-expertise">
        <div class="gr-wrap">
            <h2><?php esc_html_e( 'विशेषज्ञता के क्षेत्र', 'golden-rashifal' ); ?></h2>
            <div class="gr-author-expertise__grid">
                <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">दैनिक राशिफल</a>
                <a href="<?php echo esc_url( home_url( '/weekly-rashifal/' ) ); ?>">साप्ताहिक राशिफल</a>
                <a href="<?php echo esc_url( home_url( '/monthly-rashifal/' ) ); ?>">मासिक राशिफल</a>
                <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">पंचांग</a>
                <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">शुभ मुहूर्त</a>
                <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">राहुकाल</a>
                <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">हिंदू त्योहार</a>
                <a href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>">वास्तु शास्त्र</a>
            </div>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="gr-author-posts">
        <div class="gr-wrap">
            <h2><?php esc_html_e( 'प्रकाशित लेख', 'golden-rashifal' ); ?></h2>
            <?php if ( have_posts() ) : ?>
                <div class="gr-author-posts__grid">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <a class="gr-author-card" href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <div class="gr-author-card__img">
                            <?php the_post_thumbnail( 'medium', array( 'loading' => 'lazy' ) ); ?>
                        </div>
                        <?php endif; ?>
                        <div class="gr-author-card__body">
                            <h3><?php the_title(); ?></h3>
                            <span class="gr-author-card__date"><?php echo esc_html( get_the_date() ); ?></span>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
                <?php the_posts_pagination( array( 'mid_size' => 1, 'prev_text' => '&laquo;', 'next_text' => '&raquo;' ) ); ?>
            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
        </div>
    </section>

    <!-- E-E-A-T Trust Block -->
    <section class="gr-author-trust">
        <div class="gr-wrap">
            <h2><?php esc_html_e( 'इस लेखक पर भरोसा क्यों करें?', 'golden-rashifal' ); ?></h2>
            <div class="gr-author-trust__grid">
                <div class="gr-author-trust__item">
                    <strong><?php esc_html_e( 'समीक्षित सामग्री', 'golden-rashifal' ); ?></strong>
                    <p><?php esc_html_e( 'हर लेख प्रकाशन से पहले संपादकीय समीक्षा से गुज़रता है।', 'golden-rashifal' ); ?></p>
                </div>
                <div class="gr-author-trust__item">
                    <strong><?php esc_html_e( 'पारंपरिक स्रोत', 'golden-rashifal' ); ?></strong>
                    <p><?php esc_html_e( 'सभी जानकारी वैदिक शास्त्रों और प्रामाणिक पंचांग पर आधारित है।', 'golden-rashifal' ); ?></p>
                </div>
                <div class="gr-author-trust__item">
                    <strong><?php esc_html_e( 'नियमित अपडेट', 'golden-rashifal' ); ?></strong>
                    <p><?php esc_html_e( 'सामग्री प्रतिदिन अपडेट की जाती है ताकि जानकारी सटीक रहे।', 'golden-rashifal' ); ?></p>
                </div>
                <div class="gr-author-trust__item">
                    <strong><?php esc_html_e( 'पाठक केंद्रित', 'golden-rashifal' ); ?></strong>
                    <p><?php esc_html_e( 'सरल हिंदी भाषा में, बिना अतिशयोक्ति के, संतुलित जानकारी।', 'golden-rashifal' ); ?></p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
