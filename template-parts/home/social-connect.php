<?php
/**
 * Homepage — Connect With Golden Rashifal
 * Position: directly above footer, below FAQ section.
 *
 * 4 social channel cards: WhatsApp, Instagram, YouTube, Facebook.
 * All links, icons, colours, and labels are real production values.
 *
 * @package GoldenRashifal
 */

$gr_channels = array(
    array(
        'id'          => 'whatsapp',
        'name'        => 'WhatsApp Channel',
        'desc'        => 'दैनिक राशिफल, पंचांग और महत्वपूर्ण अपडेट प्राप्त करें।',
        'btn'         => 'Join Channel',
        'url'         => 'https://wa.me/919045432034',
        'color_from'  => '#25d366',
        'color_to'    => '#128c7e',
        'text_color'  => '#ffffff',
        'icon'        => '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.532 5.855L.057 23.48a.75.75 0 0 0 .914.914l5.674-1.485A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.222-3.875 1.015 1.033-3.772-.243-.389A9.953 9.953 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>',
        'members'     => '10K+ Members',
        'new_tab'     => true,
    ),
    array(
        'id'          => 'instagram',
        'name'        => 'Instagram',
        'desc'        => 'ज्योतिष, राशिफल और विशेष पोस्ट के साथ जुड़े रहें।',
        'btn'         => 'Follow Us',
        'url'         => 'https://www.instagram.com/astro_vedansh/',
        'color_from'  => '#f9ce34',
        'color_to'    => '#ee2a7b',
        'text_color'  => '#ffffff',
        'icon'        => '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>',
        'members'     => '5K+ Followers',
        'new_tab'     => true,
    ),
    array(
        'id'          => 'youtube',
        'name'        => 'YouTube Channel',
        'desc'        => 'ज्योतिष, राशिफल और पंचांग से जुड़े वीडियो देखें।',
        'btn'         => 'Subscribe',
        'url'         => 'https://www.youtube.com/@Astrovedansh/',
        'color_from'  => '#ff0000',
        'color_to'    => '#cc0000',
        'text_color'  => '#ffffff',
        'icon'        => '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>',
        'members'     => '8K+ Subscribers',
        'new_tab'     => true,
    ),
    array(
        'id'          => 'facebook',
        'name'        => 'Facebook Page',
        'desc'        => 'नई जानकारी और महत्वपूर्ण अपडेट सबसे पहले प्राप्त करें।',
        'btn'         => 'Follow Page',
        'url'         => 'https://www.facebook.com/astrovedansh/',
        'color_from'  => '#1877f2',
        'color_to'    => '#0d5bba',
        'text_color'  => '#ffffff',
        'icon'        => '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>',
        'members'     => '12K+ Followers',
        'new_tab'     => true,
    ),
);
?>
<section
    class="gr-connect"
    id="connect-section"
    aria-labelledby="gr-connect-heading"
>
    <div class="gr-connect__topline" aria-hidden="true"></div>

    <div class="gr-wrap gr-connect__inner">

        <!-- ── Header ─────────────────────────────────────────────── -->
        <header class="gr-connect__header">
            <span class="gr-connect__eyebrow">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                <?php esc_html_e( 'सोशल मीडिया', 'golden-rashifal' ); ?>
            </span>
            <h2 class="gr-connect__title" id="gr-connect-heading">
                <?php esc_html_e( 'हमसे', 'golden-rashifal' ); ?>
                <span class="gr-connect__title-accent"><?php esc_html_e( 'जुड़ें', 'golden-rashifal' ); ?></span>
            </h2>
            <p class="gr-connect__subtitle">
                <?php esc_html_e( 'राशिफल, पंचांग, चौघड़िया और मुहूर्त से जुड़ी नई जानकारी सबसे पहले प्राप्त करें।', 'golden-rashifal' ); ?>
            </p>
        </header>

        <!-- ── Cards Grid ─────────────────────────────────────────── -->
        <div class="gr-connect__grid" role="list">
            <?php foreach ( $gr_channels as $ch ) : ?>
            <div
                class="gr-connect__card gr-connect__card--<?php echo esc_attr( $ch['id'] ); ?>"
                role="listitem"
            >
                <!-- Gradient top bar -->
                <div
                    class="gr-connect__card-bar"
                    style="background:linear-gradient(135deg,<?php echo esc_attr( $ch['color_from'] ); ?>,<?php echo esc_attr( $ch['color_to'] ); ?>);"
                    aria-hidden="true"
                ></div>

                <!-- Icon circle -->
                <div
                    class="gr-connect__card-icon"
                    style="background:linear-gradient(135deg,<?php echo esc_attr( $ch['color_from'] ); ?>,<?php echo esc_attr( $ch['color_to'] ); ?>);color:<?php echo esc_attr( $ch['text_color'] ); ?>;"
                    aria-hidden="true"
                >
                    <?php echo $ch['icon']; // SVG, no user input — safe ?>
                </div>

                <!-- Content -->
                <div class="gr-connect__card-body">
                    <h3 class="gr-connect__card-name"><?php echo esc_html( $ch['name'] ); ?></h3>
                    <p class="gr-connect__card-desc"><?php echo esc_html( $ch['desc'] ); ?></p>
                    <span class="gr-connect__card-members"><?php echo esc_html( $ch['members'] ); ?></span>
                </div>

                <!-- CTA Button -->
                <a
                    class="gr-connect__card-btn"
                    href="<?php echo esc_url( $ch['url'] ); ?>"
                    <?php echo $ch['new_tab'] ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
                    style="background:linear-gradient(135deg,<?php echo esc_attr( $ch['color_from'] ); ?>,<?php echo esc_attr( $ch['color_to'] ); ?>);color:<?php echo esc_attr( $ch['text_color'] ); ?>;"
                    aria-label="<?php echo esc_attr( $ch['btn'] . ' — ' . $ch['name'] ); ?>"
                >
                    <?php echo esc_html( $ch['btn'] ); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- /.gr-connect__grid -->

    </div>
    <!-- /.gr-connect__inner -->
</section>
