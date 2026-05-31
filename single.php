<?php
/**
 * Single post — Premium astrology portal layout.
 * Full-width 1280px container with 820px content + 360px sidebar.
 *
 * @package GoldenRashifal
 */

get_header();

while ( have_posts() ) :
    the_post();
    ?>

    <div class="gr-progress" data-gr-progress aria-hidden="true"><span class="gr-progress__bar"></span></div>

    <main id="primary" class="gr-main gr-main--single" role="main">
        <div class="gr-single-wrap">

            <!-- Article Column -->
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'gr-post' ); ?>>

                <!-- Article Header -->
                <header class="gr-post__header">
                    <?php
                    $cats = get_the_category();
                    if ( ! empty( $cats ) ) :
                    ?>
                    <a class="gr-post__cat" href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"><?php echo esc_html( $cats[0]->name ); ?></a>
                    <?php endif; ?>

                    <h1 class="gr-post__title"><?php the_title(); ?></h1>

                    <?php if ( has_excerpt() ) : ?>
                        <p class="gr-post__lede"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
                    <?php endif; ?>

                    <div class="gr-post__meta">
                        <div class="gr-post__author-row">
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="gr-post__avatar-link" tabindex="-1" aria-hidden="true">
                                <img
                                    src="<?php echo esc_url( GR_AUTHOR_IMG ); ?>"
                                    alt="<?php echo esc_attr( GR_AUTHOR_NAME ); ?>"
                                    width="36"
                                    height="36"
                                    class="gr-post__avatar"
                                    loading="lazy"
                                    decoding="async"
                                    onerror="this.onerror=null;this.src='<?php echo esc_url( get_avatar_url( get_the_author_meta( 'ID' ), array( 'size' => 36 ) ) ); ?>';"
                                />
                            </a>
                            <div>
                                <strong class="gr-post__author-name"><?php echo esc_html( GR_AUTHOR_NAME ); ?></strong>
                                <div class="gr-post__dates">
                                    <span><?php echo esc_html( get_the_date() ); ?></span>
                                    <span><?php echo esc_html( golden_rashifal_reading_time() ); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <figure class="gr-post__hero">
                        <?php the_post_thumbnail( 'large', array( 'class' => 'gr-post__hero-img', 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?>
                    </figure>
                <?php endif; ?>

                <!-- Ad Position 1: After Intro -->
                <?php golden_rashifal_ad( 'gr_ad_above_content', __( 'विज्ञापन', 'golden-rashifal' ) ); ?>

                <!-- Share Bar -->
                <?php get_template_part( 'template-parts/single/share' ); ?>

                <!-- Table of Contents -->
                <?php get_template_part( 'template-parts/single/toc' ); ?>

                <!-- Article Body -->
                <div class="gr-post__body">
                    <?php the_content(); ?>
                </div>

                <!-- Ad Position 2: After Content -->
                <?php golden_rashifal_ad( 'gr_ad_below_content', __( 'विज्ञापन', 'golden-rashifal' ) ); ?>

                <!-- Tags -->
                <?php
                $tags = get_the_tags();
                if ( $tags ) :
                ?>
                <div class="gr-post__tags">
                    <?php foreach ( $tags as $tag ) : ?>
                        <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">#<?php echo esc_html( $tag->name ); ?></a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <!-- Internal Links -->
                <nav class="gr-post__internal" aria-label="<?php esc_attr_e( 'संबंधित पृष्ठ', 'golden-rashifal' ); ?>">
                    <h3><?php esc_html_e( 'और पढ़ें', 'golden-rashifal' ); ?></h3>
                    <div class="gr-post__internal-links">
                        <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">दैनिक राशिफल</a>
                        <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">आज का पंचांग</a>
                        <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">चौघड़िया</a>
                        <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">राहुकाल</a>
                        <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">शुभ मुहूर्त</a>
                    </div>
                </nav>

                <!-- Author Box -->
                <?php get_template_part( 'template-parts/single/author-box' ); ?>

                <!-- Ad Position 3: Before Related -->
                <?php golden_rashifal_ad( 'gr_ad_home_mid', __( 'विज्ञापन', 'golden-rashifal' ) ); ?>

                <!-- Related Posts -->
                <?php get_template_part( 'template-parts/single/related' ); ?>

                <!-- Comments -->
                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            </article>

            <!-- Sidebar Column -->
            <?php get_sidebar(); ?>

        </div>
    </main>

    <?php
endwhile;

get_footer();
