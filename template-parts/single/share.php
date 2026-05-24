<?php
/**
 * Single — social share bar.
 *
 * @package GoldenRashifal
 */

$url   = get_permalink();
$title = get_the_title();

$nets = array(
    'whatsapp' => array(
        'label' => 'WhatsApp',
        'href'  => 'https://api.whatsapp.com/send?text=' . rawurlencode( $title . ' — ' . $url ),
        'icon'  => 'M20 12a8 8 0 0 1-12.4 6.7L4 20l1.4-3.4A8 8 0 1 1 20 12z',
    ),
    'facebook' => array(
        'label' => 'Facebook',
        'href'  => 'https://www.facebook.com/sharer/sharer.php?u=' . rawurlencode( $url ),
        'icon'  => 'M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z',
    ),
    'twitter' => array(
        'label' => 'Twitter',
        'href'  => 'https://twitter.com/intent/tweet?text=' . rawurlencode( $title ) . '&url=' . rawurlencode( $url ),
        'icon'  => 'M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 16 3a4.48 4.48 0 0 0-4.47 5.5A12.94 12.94 0 0 1 2 4s-4 9 5 13a13 13 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z',
    ),
    'telegram' => array(
        'label' => 'Telegram',
        'href'  => 'https://t.me/share/url?url=' . rawurlencode( $url ) . '&text=' . rawurlencode( $title ),
        'icon'  => 'M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z',
    ),
    'copy' => array(
        'label' => __( 'लिंक कॉपी', 'golden-rashifal' ),
        'href'  => '#',
        'icon'  => 'M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71',
    ),
);
?>
<aside class="gr-share" aria-label="<?php esc_attr_e( 'शेयर करें', 'golden-rashifal' ); ?>" data-gr-share data-share-url="<?php echo esc_url( $url ); ?>">
    <span class="gr-share__label"><?php esc_html_e( 'शेयर', 'golden-rashifal' ); ?></span>
    <ul class="gr-share__list">
        <?php foreach ( $nets as $key => $n ) : ?>
        <li>
            <a class="gr-share__btn gr-share__btn--<?php echo esc_attr( $key ); ?>"
               href="<?php echo esc_url( $n['href'] ); ?>"
               <?php echo 'copy' === $key ? 'data-gr-share-copy' : 'target="_blank" rel="noopener nofollow"'; ?>
               aria-label="<?php echo esc_attr( $n['label'] ); ?>">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="<?php echo esc_attr( $n['icon'] ); ?>"/></svg>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</aside>
