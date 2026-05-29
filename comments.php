<?php
/**
 * Comments template — Premium redesign.
 *
 * @package GoldenRashifal
 */

if ( post_password_required() ) {
    return;
}
?>
<section id="comments" class="gr-comments" aria-label="<?php esc_attr_e( 'टिप्पणियाँ', 'golden-rashifal' ); ?>">

    <?php if ( have_comments() ) : ?>
        <div class="gr-comments__header">
            <h2 class="gr-comments__title">
                <?php
                $count = (int) get_comments_number();
                printf(
                    esc_html( _n( '%s टिप्पणी', '%s टिप्पणियाँ', $count, 'golden-rashifal' ) ),
                    esc_html( number_format_i18n( $count ) )
                );
                ?>
            </h2>
        </div>

        <ol class="gr-comments__list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 48,
                'callback'    => 'golden_rashifal_comment_template',
            ) );
            ?>
        </ol>

        <?php the_comments_navigation( array(
            'prev_text' => '&larr; ' . __( 'पुरानी टिप्पणियाँ', 'golden-rashifal' ),
            'next_text' => __( 'नई टिप्पणियाँ', 'golden-rashifal' ) . ' &rarr;',
        ) ); ?>

        <?php if ( ! comments_open() ) : ?>
            <p class="gr-comments__closed"><?php esc_html_e( 'टिप्पणियाँ बंद हैं।', 'golden-rashifal' ); ?></p>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ( comments_open() ) : ?>
    <div class="gr-comment-form-wrap">
        <div class="gr-comment-form-header">
            <span class="gr-comment-form-icon">✏️</span>
            <div>
                <h3 class="gr-comment-form-title"><?php esc_html_e( 'अपनी टिप्पणी लिखें', 'golden-rashifal' ); ?></h3>
                <p class="gr-comment-form-subtitle"><?php esc_html_e( 'आपका ईमेल प्रकाशित नहीं होगा।', 'golden-rashifal' ); ?></p>
            </div>
        </div>

        <?php
        comment_form( array(
            'title_reply'          => '',
            'title_reply_before'   => '',
            'title_reply_after'    => '',
            'comment_notes_before' => '',
            'comment_notes_after'  => '',
            'class_form'           => 'gr-comment-form',
            'class_submit'         => 'gr-comment-submit',
            'label_submit'         => __( 'टिप्पणी भेजें →', 'golden-rashifal' ),
            'fields'               => array(
                'author' => '<div class="gr-comment-fields-row"><div class="gr-comment-field">'
                    . '<label for="author">' . __( 'नाम', 'golden-rashifal' ) . ' <span class="gr-comment-required">*</span></label>'
                    . '<input id="author" name="author" type="text" placeholder="' . esc_attr__( 'आपका नाम', 'golden-rashifal' ) . '" required /></div>',
                'email'  => '<div class="gr-comment-field">'
                    . '<label for="email">' . __( 'ईमेल', 'golden-rashifal' ) . ' <span class="gr-comment-required">*</span></label>'
                    . '<input id="email" name="email" type="email" placeholder="' . esc_attr__( 'आपका ईमेल', 'golden-rashifal' ) . '" required /></div></div>',
                'url'    => '',
                'cookies' => '<div class="gr-comment-field gr-comment-field--full gr-comment-cookies">'
                    . '<label><input name="wp-comment-cookies-consent" id="wp-comment-cookies-consent" type="checkbox" value="yes" />'
                    . ' ' . esc_html__( 'अगली बार के लिए मेरा नाम और ईमेल सहेजें।', 'golden-rashifal' ) . '</label></div>',
            ),
            'comment_field' => '<div class="gr-comment-field gr-comment-field--full">'
                . '<label for="comment">' . __( 'टिप्पणी', 'golden-rashifal' ) . ' <span class="gr-comment-required">*</span></label>'
                . '<textarea id="comment" name="comment" rows="6" placeholder="' . esc_attr__( 'अपने विचार यहाँ लिखें…', 'golden-rashifal' ) . '" required></textarea></div>',
            'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" %4$s>'
                . '<span>' . __( 'टिप्पणी भेजें', 'golden-rashifal' ) . '</span>'
                . '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>'
                . '</button>',
            'submit_field'  => '<div class="gr-comment-submit-wrap">%1$s %2$s</div>',
        ) );
        ?>
    </div>
    <?php endif; ?>

</section>
