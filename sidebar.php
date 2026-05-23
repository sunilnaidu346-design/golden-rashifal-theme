<?php
/**
 * Sidebar.
 *
 * @package GoldenRashifal
 */

if ( ! is_active_sidebar( 'sidebar-main' ) ) {
    // Fallback content when no widgets are assigned.
    ?>
    <aside class="gr-col-side" aria-label="<?php esc_attr_e( 'साइडबार', 'golden-rashifal' ); ?>">
        <section class="gr-widget">
            <h3 class="gr-widget__title"><?php esc_html_e( 'आज का पंचांग', 'golden-rashifal' ); ?></h3>
            <?php
            $rows = golden_rashifal_panchang_summary();
            echo '<dl class="gr-panchang">';
            foreach ( $rows as $label => $value ) {
                echo '<div class="gr-panchang__row"><dt>' . esc_html( $label ) . '</dt><dd>' . esc_html( $value ) . '</dd></div>';
            }
            echo '</dl>';
            ?>
            <p class="gr-widget__note"><?php esc_html_e( 'समय सांकेतिक है।', 'golden-rashifal' ); ?></p>
        </section>

        <section class="gr-widget">
            <h3 class="gr-widget__title"><?php esc_html_e( 'ट्रेंडिंग', 'golden-rashifal' ); ?></h3>
            <?php
            $q = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 5, 'no_found_rows' => true, 'meta_key' => '_gr_views', 'orderby' => 'meta_value_num date', 'order' => 'DESC' ) );
            if ( $q->have_posts() ) {
                echo '<ul class="gr-trending">';
                $rank = 1;
                while ( $q->have_posts() ) { $q->the_post();
                    echo '<li class="gr-trending__item"><span class="gr-trending__rank">' . esc_html( $rank ) . '</span><a class="gr-trending__link" href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></li>';
                    $rank++;
                }
                echo '</ul>';
                wp_reset_postdata();
            }
            ?>
        </section>
    </aside>
    <?php
    return;
}
?>
<aside class="gr-col-side" aria-label="<?php esc_attr_e( 'साइडबार', 'golden-rashifal' ); ?>">
    <?php dynamic_sidebar( 'sidebar-main' ); ?>
</aside>
