<?php
/**
 * Sidebar — main right-rail.
 *
 * Falls back to a sensible Panchang + popular block when the sidebar is empty
 * so brand-new sites still look complete.
 *
 * @package GoldenRashifal
 */

if ( ! is_active_sidebar( 'sidebar-main' ) && is_singular( 'post' ) === false && is_archive() === false && is_search() === false ) {
    return;
}
?>
<aside class="gr-col-side" aria-label="<?php esc_attr_e( 'साइडबार', 'golden-rashifal' ); ?>">

    <?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar-main' ); ?>

    <?php else : ?>

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
            <p class="gr-widget__note"><?php esc_html_e( 'समय सांकेतिक है। सटीक स्थानीय समय के लिए अपने शहर का पंचांग देखें।', 'golden-rashifal' ); ?></p>
        </section>

        <section class="gr-widget">
            <h3 class="gr-widget__title"><?php esc_html_e( 'राशियाँ', 'golden-rashifal' ); ?></h3>
            <?php
            $signs = array_slice( golden_rashifal_zodiac_signs(), 0, 6 );
            echo '<ul class="gr-rashifal-list">';
            foreach ( $signs as $sign ) {
                echo '<li class="gr-rashifal-list__item"><span class="gr-rashifal-list__icon">' . golden_rashifal_zodiac_icon( $sign['icon'] ) . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                echo '<a class="gr-rashifal-list__link" href="' . esc_url( home_url( '/rashifal/' . $sign['slug'] . '/' ) ) . '">';
                echo '<strong>' . esc_html( $sign['hi'] ) . '</strong>';
                echo '<span class="gr-rashifal-list__hint">' . esc_html( $sign['range'] ) . '</span>';
                echo '</a></li>';
            }
            echo '</ul>';
            ?>
        </section>

        <section class="gr-widget">
            <h3 class="gr-widget__title"><?php esc_html_e( 'ट्रेंडिंग लेख', 'golden-rashifal' ); ?></h3>
            <?php
            $q = new WP_Query(
                array(
                    'post_type'           => 'post',
                    'posts_per_page'      => 5,
                    'ignore_sticky_posts' => true,
                    'no_found_rows'       => true,
                    'meta_key'            => '_gr_views',
                    'orderby'             => 'meta_value_num date',
                    'order'               => 'DESC',
                )
            );
            if ( $q->have_posts() ) {
                echo '<ul class="gr-trending">';
                $rank = 1;
                while ( $q->have_posts() ) {
                    $q->the_post();
                    echo '<li class="gr-trending__item">';
                    echo '<span class="gr-trending__rank">' . esc_html( number_format_i18n( $rank ) ) . '</span>';
                    echo '<a class="gr-trending__link" href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a>';
                    echo '</li>';
                    $rank++;
                }
                echo '</ul>';
                wp_reset_postdata();
            }
            ?>
        </section>

    <?php endif; ?>

</aside>
