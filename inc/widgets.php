<?php
/**
 * Custom widgets — Panchang summary, Choghadiya, Rahukaal, Today Rashifal, Trending posts.
 *
 * Each widget keeps the markup small and uses theme CSS for styling.
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Today Rashifal widget — shows a quick rashifal teaser per zodiac sign.
 */
class Golden_Rashifal_Today_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'gr_today_rashifal',
            __( 'Golden Rashifal — आज का राशिफल', 'golden-rashifal' ),
            array( 'description' => __( 'चुनिंदा राशि का छोटा सा आज का राशिफल टीज़र।', 'golden-rashifal' ) )
        );
    }

    public function widget( $args, $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'आज का राशिफल', 'golden-rashifal' );
        echo $args['before_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo $args['before_title'] . esc_html( $title ) . $args['after_title']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

        $signs = golden_rashifal_zodiac_signs();
        echo '<ul class="gr-rashifal-list">';
        foreach ( array_slice( $signs, 0, 6 ) as $sign ) {
            echo '<li class="gr-rashifal-list__item">';
            echo '<span class="gr-rashifal-list__icon">' . golden_rashifal_zodiac_icon( $sign['icon'] ) . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            echo '<a class="gr-rashifal-list__link" href="' . esc_url( home_url( '/rashifal/' . $sign['slug'] . '/' ) ) . '">';
            echo '<strong>' . esc_html( $sign['hi'] ) . '</strong>';
            echo '<span class="gr-rashifal-list__hint">' . esc_html( $sign['range'] ) . '</span>';
            echo '</a></li>';
        }
        echo '</ul>';
        echo '<a class="gr-widget__cta" href="' . esc_url( home_url( '/rashifal/' ) ) . '">' . esc_html__( 'सभी 12 राशियाँ देखें →', 'golden-rashifal' ) . '</a>';
        echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }

    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : __( 'आज का राशिफल', 'golden-rashifal' );
        ?>
        <p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'शीर्षक:', 'golden-rashifal' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"></p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        return array( 'title' => sanitize_text_field( $new_instance['title'] ) );
    }
}

/**
 * Panchang widget — quick day summary built on the astrology helpers.
 */
class Golden_Rashifal_Panchang_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'gr_panchang',
            __( 'Golden Rashifal — आज का पंचांग', 'golden-rashifal' ),
            array( 'description' => __( 'सूर्योदय, सूर्यास्त, राहुकाल और तिथि का सारांश।', 'golden-rashifal' ) )
        );
    }

    public function widget( $args, $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'आज का पंचांग', 'golden-rashifal' );
        echo $args['before_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo $args['before_title'] . esc_html( $title ) . $args['after_title']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

        $rows = golden_rashifal_panchang_summary();
        echo '<dl class="gr-panchang">';
        foreach ( $rows as $label => $value ) {
            echo '<div class="gr-panchang__row">';
            echo '<dt>' . esc_html( $label ) . '</dt>';
            echo '<dd>' . esc_html( $value ) . '</dd>';
            echo '</div>';
        }
        echo '</dl>';
        echo '<p class="gr-widget__note">' . esc_html__( 'समय सांकेतिक है। सटीक स्थानीय समय के लिए अपने शहर का पंचांग देखें।', 'golden-rashifal' ) . '</p>';
        echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }

    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : __( 'आज का पंचांग', 'golden-rashifal' );
        ?>
        <p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'शीर्षक:', 'golden-rashifal' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"></p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        return array( 'title' => sanitize_text_field( $new_instance['title'] ) );
    }
}

/**
 * Choghadiya widget — day & night choghadiya in a tidy table.
 */
class Golden_Rashifal_Choghadiya_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'gr_choghadiya',
            __( 'Golden Rashifal — आज का चौघड़िया', 'golden-rashifal' ),
            array( 'description' => __( 'दिन और रात के चौघड़िया का साधारण चार्ट।', 'golden-rashifal' ) )
        );
    }

    public function widget( $args, $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'आज का चौघड़िया', 'golden-rashifal' );
        echo $args['before_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo $args['before_title'] . esc_html( $title ) . $args['after_title']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

        $chog = golden_rashifal_choghadiya_today();

        echo '<div class="gr-chog">';
        foreach ( array( 'day' => __( 'दिन', 'golden-rashifal' ), 'night' => __( 'रात', 'golden-rashifal' ) ) as $key => $label ) {
            echo '<h4 class="gr-chog__title">' . esc_html( $label ) . '</h4>';
            echo '<ul class="gr-chog__list">';
            foreach ( $chog[ $key ] as $row ) {
                echo '<li class="gr-chog__row gr-chog__row--' . esc_attr( $row['type'] ) . '">';
                echo '<span class="gr-chog__name">' . esc_html( $row['name'] ) . '</span>';
                echo '<span class="gr-chog__time">' . esc_html( $row['time'] ) . '</span>';
                echo '</li>';
            }
            echo '</ul>';
        }
        echo '</div>';

        echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }

    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : __( 'आज का चौघड़िया', 'golden-rashifal' );
        ?>
        <p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'शीर्षक:', 'golden-rashifal' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"></p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        return array( 'title' => sanitize_text_field( $new_instance['title'] ) );
    }
}

/**
 * Trending Posts widget — uses the lightweight view counter.
 */
class Golden_Rashifal_Trending_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'gr_trending',
            __( 'Golden Rashifal — ट्रेंडिंग लेख', 'golden-rashifal' ),
            array( 'description' => __( 'सबसे ज़्यादा पढ़े जा रहे लेख।', 'golden-rashifal' ) )
        );
    }

    public function widget( $args, $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'ट्रेंडिंग लेख', 'golden-rashifal' );
        $count = isset( $instance['count'] ) ? max( 1, (int) $instance['count'] ) : 5;

        echo $args['before_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo $args['before_title'] . esc_html( $title ) . $args['after_title']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

        $q = new WP_Query(
            array(
                'post_type'           => 'post',
                'posts_per_page'      => $count,
                'ignore_sticky_posts' => true,
                'meta_key'            => '_gr_views',
                'orderby'             => 'meta_value_num date',
                'order'               => 'DESC',
                'no_found_rows'       => true,
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
        } else {
            echo '<p class="gr-widget__note">' . esc_html__( 'अभी कोई ट्रेंडिंग लेख नहीं है।', 'golden-rashifal' ) . '</p>';
        }

        echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }

    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : __( 'ट्रेंडिंग लेख', 'golden-rashifal' );
        $count = isset( $instance['count'] ) ? (int) $instance['count'] : 5;
        ?>
        <p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'शीर्षक:', 'golden-rashifal' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"></p>
        <p><label for="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>"><?php esc_html_e( 'कितने लेख:', 'golden-rashifal' ); ?></label>
        <input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'count' ) ); ?>" type="number" min="1" max="20" value="<?php echo esc_attr( $count ); ?>"></p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        return array(
            'title' => sanitize_text_field( $new_instance['title'] ),
            'count' => max( 1, min( 20, (int) $new_instance['count'] ) ),
        );
    }
}

/**
 * Sticky ad slot widget — renders a slot wrapper for ad code via the Customizer.
 */
class Golden_Rashifal_Ad_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'gr_ad_slot',
            __( 'Golden Rashifal — विज्ञापन स्लॉट', 'golden-rashifal' ),
            array( 'description' => __( 'किसी भी HTML विज्ञापन कोड के लिए साफ़ कंटेनर।', 'golden-rashifal' ) )
        );
    }

    public function widget( $args, $instance ) {
        $code = isset( $instance['code'] ) ? $instance['code'] : '';
        if ( '' === trim( (string) $code ) ) {
            return;
        }
        echo $args['before_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo '<div class="gr-ad-slot gr-ad-slot--sidebar">';
        echo '<span class="gr-ad-slot__label">' . esc_html__( 'विज्ञापन', 'golden-rashifal' ) . '</span>';
        echo wp_kses( $code, golden_rashifal_ad_allowed_tags() );
        echo '</div>';
        echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }

    public function form( $instance ) {
        $code = isset( $instance['code'] ) ? $instance['code'] : '';
        ?>
        <p><label for="<?php echo esc_attr( $this->get_field_id( 'code' ) ); ?>"><?php esc_html_e( 'विज्ञापन कोड (HTML):', 'golden-rashifal' ); ?></label>
        <textarea class="widefat" rows="6" id="<?php echo esc_attr( $this->get_field_id( 'code' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'code' ) ); ?>"><?php echo esc_textarea( $code ); ?></textarea></p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        return array( 'code' => trim( (string) $new_instance['code'] ) );
    }
}

/**
 * Register all custom widgets.
 */
function golden_rashifal_register_widgets() {
    register_widget( 'Golden_Rashifal_Today_Widget' );
    register_widget( 'Golden_Rashifal_Panchang_Widget' );
    register_widget( 'Golden_Rashifal_Choghadiya_Widget' );
    register_widget( 'Golden_Rashifal_Trending_Widget' );
    register_widget( 'Golden_Rashifal_Ad_Widget' );
}
add_action( 'widgets_init', 'golden_rashifal_register_widgets' );
