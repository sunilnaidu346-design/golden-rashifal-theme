<?php
/**
 * Article card — used in archives and the index fallback.
 *
 * @package GoldenRashifal
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'gr-card gr-card--post' ); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <a class="gr-card__media" href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
            <?php golden_rashifal_thumbnail( 'gr-card' ); ?>
        </a>
    <?php endif; ?>

    <div class="gr-card__body">
        <?php
        $cats = get_the_category();
        if ( ! empty( $cats ) ) :
            ?>
            <a class="gr-card__cat" href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>">
                <?php echo esc_html( $cats[0]->name ); ?>
            </a>
        <?php endif; ?>

        <h2 class="gr-card__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <div class="gr-card__excerpt">
            <?php the_excerpt(); ?>
        </div>

        <footer class="gr-card__meta">
            <?php golden_rashifal_posted_on(); ?>
            <span class="gr-meta__sep">·</span>
            <span class="gr-meta__item"><?php echo esc_html( golden_rashifal_reading_time() ); ?></span>
        </footer>
    </div>
</article>
