<?php
/**
 * Single — sticky social share rail (desktop) + inline share (mobile).
 *
 * Uses canonical share URLs; no third-party tracking JS.
 *
 * @package GoldenRashifal
 */

$permalink = get_permalink();
$title     = get_the_title();

$networks = array(
    'whatsapp'  => array(
        'label' => __( 'WhatsApp', 'golden-rashifal' ),
        'url'   => 'https://api.whatsapp.com/send?text=' . rawurlencode( $title . ' — ' . $permalink ),
        'path'  => 'M20 12a8 8 0 0 1-12.4 6.7L4 20l1.4-3.4A8 8 0 1 1 20 12zm-8-6a6 6 0 0 0-5.2 9l-.7 1.7 1.8-.6A6 6 0 1 0 12 6zm3.4 7.4c-.2-.1-.9-.4-1-.5-.3-.1-.5-.1-.6.1l-.4.5c-.2.2-.4.2-.6.1-.7-.4-1.5-1-2-1.7-.2-.3 0-.4.1-.6l.3-.4c.1-.2.1-.3 0-.5-.1-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.5-.4h-.5c-.2 0-.5.1-.7.3-.5.5-1 .9-1 2.2s1 2.6 1.1 2.8c.1.2 1.9 3 4.7 4 .7.2 1.2.4 1.6.5.7.2 1.3.2 1.7.1.5-.1 1.6-.7 1.8-1.3.2-.6.2-1.1.1-1.2-.1-.1-.3-.2-.5-.3z',
    ),
    'facebook'  => array(
        'label' => __( 'Facebook', 'golden-rashifal' ),
        'url'   => 'https://www.facebook.com/sharer/sharer.php?u=' . rawurlencode( $permalink ),
        'path'  => 'M13 22v-8h3l1-4h-4V8c0-1 .3-2 2-2h2V2h-3c-3 0-4 2-4 4v4H7v4h3v8h3z',
    ),
    'twitter'   => array(
        'label' => __( 'Twitter / X', 'golden-rashifal' ),
        'url'   => 'https://twitter.com/intent/tweet?text=' . rawurlencode( $title ) . '&url=' . rawurlencode( $permalink ),
        'path'  => 'M22 5.8c-.7.3-1.5.6-2.3.7.8-.5 1.5-1.3 1.8-2.2-.8.5-1.7.8-2.6 1A4.1 4.1 0 0 0 12 9.4c0 .3 0 .6.1.9A11.6 11.6 0 0 1 3 5a4.1 4.1 0 0 0 1.3 5.5 4 4 0 0 1-1.9-.5v.1c0 2 1.4 3.7 3.3 4.1a4 4 0 0 1-1.9.1 4.1 4.1 0 0 0 3.8 2.9A8.2 8.2 0 0 1 2 18.6 11.6 11.6 0 0 0 8.3 20c7.5 0 11.6-6.2 11.6-11.6v-.5c.8-.6 1.5-1.3 2.1-2.1z',
    ),
    'telegram'  => array(
        'label' => __( 'Telegram', 'golden-rashifal' ),
        'url'   => 'https://t.me/share/url?url=' . rawurlencode( $permalink ) . '&text=' . rawurlencode( $title ),
        'path'  => 'M22 4.4 19 19.7c-.2.9-.8 1.1-1.6.7l-4.4-3.3-2.1 2c-.2.2-.4.4-.9.4l.3-4.6 8.4-7.6c.4-.3-.1-.5-.5-.2L8 13l-4.4-1.4c-.9-.3-.9-.9.2-1.4l17.2-6.6c.8-.3 1.5.2 1 1.4z',
    ),
    'pinterest' => array(
        'label' => __( 'Pinterest', 'golden-rashifal' ),
        'url'   => 'https://pinterest.com/pin/create/button/?url=' . rawurlencode( $permalink ) . '&description=' . rawurlencode( $title ),
        'path'  => 'M12 2a10 10 0 0 0-3.6 19.3c-.1-.8-.2-2 0-2.9l1.3-5.5s-.3-.7-.3-1.6c0-1.5.9-2.7 2-2.7 1 0 1.4.7 1.4 1.6 0 1-.6 2.5-1 4 .3 1 1.5 1.6 2.6 1.4 2.2-.4 3.7-2.7 3.4-5.4-.4-2.7-2.6-4.5-5.4-4.4-3.2 0-5.1 2.4-5 4.8 0 .9.4 1.9.8 2.5.1.1.1.2 0 .3l-.3 1.2c-.1.2-.2.3-.4.2C5.6 14 5 12.2 5 10.8c0-3 2.2-6.4 6.6-6.4 3.5 0 5.8 2.5 5.8 5.3 0 3.6-2 6.3-5 6.3-1 0-2-.5-2.3-1.2l-.6 2.4c-.2.9-.8 2-1.2 2.7A10 10 0 1 0 12 2z',
    ),
    'copy'      => array(
        'label' => __( 'लिंक कॉपी करें', 'golden-rashifal' ),
        'url'   => '#',
        'path'  => 'M9 13a4 4 0 0 1 4-4h6a4 4 0 1 1 0 8h-2M15 11a4 4 0 0 1-4 4H5a4 4 0 1 1 0-8h2',
    ),
);
?>
<aside class="gr-share" aria-label="<?php esc_attr_e( 'इस लेख को शेयर करें', 'golden-rashifal' ); ?>" data-gr-share data-share-url="<?php echo esc_url( $permalink ); ?>">
    <span class="gr-share__label"><?php esc_html_e( 'शेयर करें', 'golden-rashifal' ); ?></span>
    <ul class="gr-share__list">
        <?php foreach ( $networks as $key => $net ) : ?>
            <li>
                <a class="gr-share__btn gr-share__btn--<?php echo esc_attr( $key ); ?>"
                   href="<?php echo esc_url( $net['url'] ); ?>"
                   <?php echo 'copy' === $key ? 'data-gr-share-copy' : 'target="_blank" rel="noopener nofollow"'; ?>
                   aria-label="<?php echo esc_attr( $net['label'] ); ?>">
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="<?php echo esc_attr( $net['path'] ); ?>" fill="<?php echo 'copy' === $key ? 'none' : 'currentColor'; ?>" stroke="currentColor" stroke-width="<?php echo 'copy' === $key ? '1.6' : '0'; ?>" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>
