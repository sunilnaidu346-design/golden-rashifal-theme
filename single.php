<?php
/**
 * Single post — refined article layout.
 *
 * @package GoldenRashifal
 */

get_header();

while ( have_posts() ) :
    the_post();
    ?>

    <div class="gr-progress" data-gr-progress aria-hidden="true"><span class="gr-progress__bar"></span></div>

    <main id="primary" class="gr-main gr-main--single" role="main">
        <div class="gr-wrap gr-grid">

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'gr-article' ); ?>>

                <header class="gr-article__head">
                    <?php
                    $cats = get_the_category();
                    if ( ! empty( $cats ) ) :
                        ?>
                        <a class="gr-article__cat" href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"><?php echo esc_html( $cats[0]->name ); ?></a>
                    <?php endif; ?>

                    <h1 class="gr-article__title"><?php the_title(); ?></h1>

                    <?php if ( has_excerpt() ) : ?>
                        <p class="gr-article__lede"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
                    <?php endif; ?>

                    <div class="gr-article__meta">
                        <span class="gr-article__author">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 34, '', '', array( 'class' => 'gr-article__avatar' ) ); ?>
                            <span>
                                <strong><?php the_author(); ?></strong>
                                <span class="gr-article__meta-sub">
                                    <?php golden_rashifal_posted_on(); ?>
                                    <span class="gr-meta__sep">·</span>
                                    <?php echo esc_html( golden_rashifal_reading_time() ); ?>
                                </span>
                            </span>
                        </span>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <figure class="gr-article__hero">
                        <?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'gr-article__hero-img', 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?>
                        <?php
                        $cap = get_the_post_thumbnail_caption();
                        if ( $cap ) :
                            ?>
                            <figcaption class="gr-article__hero-cap"><?php echo esc_html( $cap ); ?></figcaption>
                        <?php endif; ?>
                    </figure>
                <?php endif; ?>

                <?php golden_rashifal_ad( 'gr_ad_above_content', __( 'विज्ञापन', 'golden-rashifal' ) ); ?>

                <?php get_template_part( 'template-parts/single/share' ); ?>

                <?php get_template_part( 'template-parts/single/toc' ); ?>

                <div class="gr-article__body">
                    <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<nav class="gr-pagelinks">', 'after' => '</nav>' ) ); ?>
                </div>

                <?php
                $tags = get_the_tags();
                if ( $tags ) :
                    ?>
                    <div class="gr-article__tags">
                        <span class="gr-article__tags-label"><?php esc_html_e( 'टैग:', 'golden-rashifal' ); ?></span>
                        <?php foreach ( $tags as $tag ) : ?>
                            <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">#<?php echo esc_html( $tag->name ); ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php golden_rashifal_ad( 'gr_ad_below_content', __( 'विज्ञापन', 'golden-rashifal' ) ); ?>

                <?php get_template_part( 'template-parts/single/author-box' ); ?>

                <?php get_template_part( 'template-parts/single/related' ); ?>

                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            </article>

            <?php get_sidebar(); ?>

        </div>
    </main>

    <?php
endwhile;

get_footer();
