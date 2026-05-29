<?php
/**
 * Author Archive — Premium Editorial Profile Page.
 * E-E-A-T optimized, AdSense friendly, professional design.
 *
 * @package GoldenRashifal
 */

get_header();

$author    = get_queried_object();
$author_id = $author ? $author->ID : 0;
$name      = get_theme_mod( 'gr_founder_name', 'Golden Rashifal Editorial Team' );
$bio       = get_theme_mod( 'gr_founder_bio', 'Golden Rashifal Editorial Team वैदिक ज्योतिष सिद्धांतों, पंचांग गणनाओं, ग्रहों की स्थिति और त्योहार अनुसंधान पर आधारित प्रामाणिक ज्योतिष सामग्री प्रदान करने के लिए समर्पित है। हमारी सामग्री प्रकाशन से पहले समीक्षित और नियमित रूप से अपडेट की जाती है।' );
$img       = get_theme_mod( 'gr_founder_image', '' );
$count     = count_user_posts( $author_id );
?>

<main id="primary" class="gr-main gr-main--author" role="main">

    <!-- Author Hero Section -->
    <section class="gr-author-hero">
        <div class="gr-author-hero__inner">
            <div class="gr-author-hero__img">
                <?php if ( $img ) : ?>
                    <img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $name ); ?>" width="120" height="120" loading="eager" />
                <?php else : ?>
                    <?php echo get_avatar( $author_id, 120, '', $name ); ?>
                <?php endif; ?>
            </div>
            <h1 class="gr-author-hero__name"><?php echo esc_html( $name ); ?></h1>
            <p class="gr-author-hero__role"><?php esc_html_e( 'वैदिक ज्योतिष विशेषज्ञ', 'golden-rashifal' ); ?></p>
            <p class="gr-author-hero__bio"><?php echo esc_html( $bio ); ?></p>
            <div class="gr-author-hero__stats">
                <div class="gr-author-hero__stat">
                    <span class="gr-author-hero__stat-num"><?php echo esc_html( $count ); ?>+</span>
                    <span class="gr-author-hero__stat-label"><?php esc_html_e( 'प्रकाशित लेख', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-author-hero__stat">
                    <span class="gr-author-hero__stat-num">45+</span>
                    <span class="gr-author-hero__stat-label"><?php esc_html_e( 'विषय श्रेणियाँ', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-author-hero__stat">
                    <span class="gr-author-hero__stat-num">365</span>
                    <span class="gr-author-hero__stat-label"><?php esc_html_e( 'दिन अपडेट', 'golden-rashifal' ); ?></span>
                </div>
            </div>
            <div class="gr-author-hero__badges">
                <span><?php esc_html_e( 'संपादकीय समीक्षित', 'golden-rashifal' ); ?></span>
                <span><?php esc_html_e( 'पंचांग सत्यापित', 'golden-rashifal' ); ?></span>
                <span><?php esc_html_e( 'प्रतिदिन अपडेट', 'golden-rashifal' ); ?></span>
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
