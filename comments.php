<?php
/**
 * Comments template.
 *
 * @package GoldenRashifal
 */

if ( post_password_required() ) {
    return;
}
?>
<section id="comments" class="gr-comments" aria-label="<?php esc_attr_e( 'टिप्पणियाँ', 'golden-rashifal' ); ?>">

    <?php if ( have_comments() ) : ?>
        <h2 class="gr-comments__title">
            <?php
            $count = (int) get_comments_number();
            printf( esc_html( _n( '%s टिप्पणी', '%s टिप्पणियाँ', $count, 'golden-rashifal' ) ), esc_html( number_format_i18n( $count ) ) );
            ?>
        </h2>
        <ol class="gr-comments__list">
            <?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true, 'avatar_size' => 44 ) ); ?>
        </ol>
        <?php the_comments_navigation( array( 'prev_text' => '&laquo;', 'next_text' => '&raquo;' ) ); ?>
        <?php if ( ! comments_open() ) : ?>
            <p class="gr-comments__closed"><?php esc_html_e( 'टिप्पणियाँ बंद हैं।', 'golden-rashifal' ); ?></p>
        <?php endif; ?>
    <?php endif; ?>

    <?php
    comment_form( array(
        'title_reply'          => __( 'टिप्पणी लिखें', 'golden-rashifal' ),
        'label_submit'         => __( 'भेजें', 'golden-rashifal' ),
        'comment_notes_before' => '<p class="gr-comments__note">' . esc_html__( 'ईमेल प्रकाशित नहीं होगा।', 'golden-rashifal' ) . '</p>',
        'comment_notes_after'  => '',
        'class_form'           => 'gr-comment-form',
        'class_submit'         => 'gr-btn gr-btn--primary',
    ) );
    ?>
</section>
