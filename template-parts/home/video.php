<?php
/**
 * Homepage — Featured YouTube video.
 *
 * Accepts youtube.com/watch?v=, youtu.be/short, and shorts/ URLs.
 * Renders a lightweight wrapper that reserves aspect-ratio space (no CLS)
 * and uses a privacy-friendly youtube-nocookie embed.
 *
 * @package GoldenRashifal
 */

$url = trim( (string) get_theme_mod( 'gr_video_url', '' ) );
if ( '' === $url ) {
    return;
}

$id = '';
if ( preg_match( '~(?:youtu\.be/|youtube\.com/(?:watch\?v=|shorts/|embed/))([A-Za-z0-9_-]{11})~', $url, $m ) ) {
    $id = $m[1];
}
if ( '' === $id ) {
    return;
}

$is_short = false !== strpos( $url, '/shorts/' );
?>
<section class="gr-section gr-section--video" aria-label="<?php esc_attr_e( 'फ़ीचर्ड वीडियो', 'golden-rashifal' ); ?>">
    <div class="gr-wrap">
        <header class="gr-section__head">
            <h2 class="gr-section__title"><?php esc_html_e( 'इस सप्ताह का चुना हुआ वीडियो', 'golden-rashifal' ); ?></h2>
            <p class="gr-section__sub"><?php esc_html_e( 'त्योहार, मुहूर्त और परंपरा से जुड़ी एक छोटी सी समझाइश।', 'golden-rashifal' ); ?></p>
        </header>

        <div class="gr-video <?php echo $is_short ? 'gr-video--short' : ''; ?>">
            <iframe
                src="https://www.youtube-nocookie.com/embed/<?php echo esc_attr( $id ); ?>?rel=0&modestbranding=1"
                title="<?php esc_attr_e( 'फ़ीचर्ड वीडियो', 'golden-rashifal' ); ?>"
                loading="lazy"
                referrerpolicy="strict-origin-when-cross-origin"
                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
</section>
