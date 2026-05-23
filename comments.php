<?php
/**
 * Comments — clean, accessible, threaded.
 *
 * @package GoldenRashifal
 */

if ( post_password_required() ) {
    return;
}
?>
<section id="comments" class="gr-comments" aria-label="<?php esc_attr_e( 'पाठक टिप्पणियाँ', 'golden-rashifal' ); ?>">

    <?php if ( have_comments() ) : ?>

        <h2 class="gr-comments__title">
            <?php
            $count = (int) get_comments_number();
            if ( 1 === $count ) {
                esc_html_e( '1 टिप्पणी', 'golden-rashifal' );
            } else {
                /* translators: %s: comment count */
                printf( esc_html__( '%s टिप्पणियाँ', 'golden-rashifal' ), esc_html( number_format_i18n( $count ) ) );
            }
            ?>
        </h2>

        <ol class="gr-comments__list">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size'=> 48,
                )
            );
            ?>
        </ol>

        <?php
        the_comments_navigation(
            array(
                'prev_text' => __( '&laquo; पुरानी टिप्पणियाँ', 'golden-rashifal' ),
                'next_text' => __( 'नई टिप्पणियाँ &raquo;', 'golden-rashifal' ),
            )
        );

        if ( ! comments_open() ) :
            ?>
            <p class="gr-comments__closed"><?php esc_html_e( 'इस लेख पर टिप्पणियाँ अब बंद हैं।', 'golden-rashifal' ); ?></p>
            <?php
        endif;
        ?>

    <?php endif; ?>

    <?php
    comment_form(
        array(
            'title_reply'         => __( 'अपनी टिप्पणी जोड़ें', 'golden-rashifal' ),
            'title_reply_to'      => __( '%s को जवाब दें', 'golden-rashifal' ),
            'cancel_reply_link'   => __( 'जवाब रद्द करें', 'golden-rashifal' ),
            'label_submit'        => __( 'टिप्पणी भेजें', 'golden-rashifal' ),
            'comment_notes_before'=> '<p class="gr-comments__note">' . esc_html__( 'आपका ईमेल कहीं प्रकाशित नहीं होगा। ज़रूरी फ़ील्ड * से चिह्नित हैं।', 'golden-rashifal' ) . '</p>',
            'comment_notes_after' => '',
            'class_form'          => 'gr-comment-form',
            'class_submit'        => 'gr-btn gr-btn--gold',
        )
    );
    ?>
</section>
