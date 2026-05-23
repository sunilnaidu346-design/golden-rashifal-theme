<?php
/**
 * Single — Author box.
 *
 * @package GoldenRashifal
 */

$author_id = (int) get_the_author_meta( 'ID' );
if ( ! $author_id ) {
    return;
}
$bio = get_the_author_meta( 'description', $author_id );
?>
<section class="gr-author" aria-label="<?php esc_attr_e( 'लेखक', 'golden-rashifal' ); ?>">
    <div class="gr-author__avatar">
        <?php echo get_avatar( $author_id, 80, '', '', array( 'class' => 'gr-author__img' ) ); ?>
    </div>
    <div class="gr-author__body">
        <span class="gr-author__pre"><?php esc_html_e( 'लेखक', 'golden-rashifal' ); ?></span>
        <h3 class="gr-author__name">
            <a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"><?php echo esc_html( get_the_author_meta( 'display_name', $author_id ) ); ?></a>
        </h3>
        <?php if ( $bio ) : ?>
            <p class="gr-author__bio"><?php echo esc_html( $bio ); ?></p>
        <?php else : ?>
            <p class="gr-author__bio"><?php esc_html_e( 'गोल्डन राशिफल टीम का सदस्य — पंचांग, राशिफल और पारंपरिक संस्कार-संदर्भों पर सरल लेखन।', 'golden-rashifal' ); ?></p>
        <?php endif; ?>
        <a class="gr-btn gr-btn--sm gr-btn--outline" href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"><?php esc_html_e( 'सभी लेख देखें', 'golden-rashifal' ); ?></a>
    </div>
</section>
