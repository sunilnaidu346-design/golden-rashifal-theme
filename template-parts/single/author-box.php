<?php
/**
 * Single — Author box. E-E-A-T friendly: shows photo, name, role, bio, links.
 *
 * @package GoldenRashifal
 */

$author_id = (int) get_the_author_meta( 'ID' );
if ( ! $author_id ) {
    return;
}
$bio = get_the_author_meta( 'description', $author_id );
?>
<section class="gr-author" aria-label="<?php esc_attr_e( 'लेख के लेखक के बारे में', 'golden-rashifal' ); ?>">
    <div class="gr-author__avatar">
        <?php echo get_avatar( $author_id, 88, '', '', array( 'class' => 'gr-author__img' ) ); ?>
    </div>
    <div class="gr-author__body">
        <span class="gr-author__pre"><?php esc_html_e( 'लेख — ', 'golden-rashifal' ); ?></span>
        <h3 class="gr-author__name">
            <a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"><?php echo esc_html( get_the_author_meta( 'display_name', $author_id ) ); ?></a>
        </h3>
        <?php if ( $bio ) : ?>
            <p class="gr-author__bio"><?php echo esc_html( $bio ); ?></p>
        <?php else : ?>
            <p class="gr-author__bio"><?php esc_html_e( 'गोल्डन राशिफल के लेखक — पंचांग, राशिफल और पारंपरिक संस्कार-संदर्भों पर सरल, संतुलित और पाठक-केंद्रित लेखन।', 'golden-rashifal' ); ?></p>
        <?php endif; ?>
        <div class="gr-author__links">
            <a class="gr-btn gr-btn--ghost gr-btn--sm" href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>">
                <?php esc_html_e( 'इस लेखक के सभी लेख', 'golden-rashifal' ); ?> →
            </a>
            <?php
            $url = get_the_author_meta( 'user_url', $author_id );
            if ( $url ) :
                ?>
                <a class="gr-author__site" href="<?php echo esc_url( $url ); ?>" rel="noopener" target="_blank">
                    <?php esc_html_e( 'वेबसाइट', 'golden-rashifal' ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
