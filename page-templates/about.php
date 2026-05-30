<?php
/**
 * Page Template: About Us — हमारे बारे में
 * Premium E-E-A-T focused author profile + site information.
 * AdSense-ready, trust-building, fully editable from WP Admin.
 *
 * Template Name: About Us
 * @package GoldenRashifal
 */

get_header();

// ── Author constants (single source of truth) ─────────────────────────────
$gr_ab_name    = 'Vedansh Vallabh';
$gr_ab_role    = 'Co-Founder & Astrology Content Editor';
$gr_ab_img     = 'https://goldenrashifal.in/wp-content/uploads/2026/05/Co-founders-Author-Vedansh-Vallabh.webp';
$gr_ab_email   = 'support@goldenrashifal.in';
$gr_ab_phone   = '+91 9045432034';
$gr_ab_address = 'D-9 A/1, Indira Colony, Sector 52, Gurugram, Haryana 122003, India';
$gr_ab_fb      = 'https://www.facebook.com/astrovedansh/';
$gr_ab_ig      = 'https://www.instagram.com/astro_vedansh/';
$gr_ab_yt      = 'https://www.youtube.com/@Astrovedansh/';
$gr_ab_wa      = 'https://wa.me/919045432034';
?>
<main id="primary" class="gr-main gr-main--about" role="main">

<?php
/* ── WordPress editor content takes priority ─────────────────────────────── */
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        $gr_editor = get_the_content();
        if ( ! empty( trim( $gr_editor ) ) ) :
?>
<div class="gr-wrap gr-content-wrap gr-article" style="padding-top:var(--sp-8)">
    <?php the_content(); ?>
</div>
<?php
        endif;
    endwhile;
    rewind_posts();
endif;
?>


<!-- ══════════════════════════════════════════════════════════════
     HERO — Author profile card
     ══════════════════════════════════════════════════════════════ -->
<section
    class="gr-about-hero"
    itemscope
    itemtype="https://schema.org/Person"
    aria-labelledby="gr-about-author-name"
>
    <div class="gr-wrap gr-about-hero__inner">

        <!-- Left: image -->
        <div class="gr-about-hero__img-wrap">
            <img
                src="<?php echo esc_url( $gr_ab_img ); ?>"
                alt="<?php echo esc_attr( $gr_ab_name . ' — ' . $gr_ab_role ); ?>"
                width="280" height="280"
                loading="eager"
                decoding="async"
                class="gr-about-hero__img"
                itemprop="image"
                onerror="this.onerror=null;this.style.background='var(--gr-bg-soft)';"
            />
            <div class="gr-about-hero__img-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <?php esc_html_e( 'Verified Author', 'golden-rashifal' ); ?>
            </div>
        </div>

        <!-- Right: details -->
        <div class="gr-about-hero__details">
            <span class="gr-about-hero__eyebrow"><?php esc_html_e( 'Golden Rashifal के बारे में', 'golden-rashifal' ); ?></span>
            <h1 class="gr-about-hero__name" id="gr-about-author-name" itemprop="name"><?php echo esc_html( $gr_ab_name ); ?></h1>
            <p class="gr-about-hero__role" itemprop="jobTitle"><?php echo esc_html( $gr_ab_role ); ?></p>

            <p class="gr-about-hero__bio" itemprop="description">
                <?php esc_html_e( 'Vedansh Vallabh is the Co-Founder of Golden Rashifal and contributes astrology, Panchang, Choghadiya, Muhurat, and horoscope-related content. His focus is to present traditional information in a simple, reader-friendly, and easy-to-understand format.', 'golden-rashifal' ); ?>
            </p>

            <!-- Contact row -->
            <ul class="gr-about-hero__contact" aria-label="<?php esc_attr_e( 'संपर्क जानकारी', 'golden-rashifal' ); ?>">
                <li itemprop="email">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <a href="mailto:<?php echo esc_attr( $gr_ab_email ); ?>"><?php echo esc_html( $gr_ab_email ); ?></a>
                </li>
                <li itemprop="telephone">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.64 3.48 2 2 0 0 1 3.62 1.27h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $gr_ab_phone ) ); ?>"><?php echo esc_html( $gr_ab_phone ); ?></a>
                </li>
                <li itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span itemprop="streetAddress"><?php echo esc_html( $gr_ab_address ); ?></span>
                </li>
            </ul>

            <!-- Social icons -->
            <div class="gr-about-hero__social" aria-label="<?php esc_attr_e( 'सोशल मीडिया', 'golden-rashifal' ); ?>">
                <a href="<?php echo esc_url( $gr_ab_fb ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--fb" aria-label="Facebook">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="<?php echo esc_url( $gr_ab_ig ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--ig" aria-label="Instagram">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="<?php echo esc_url( $gr_ab_yt ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--yt" aria-label="YouTube">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <a href="<?php echo esc_url( $gr_ab_wa ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--wa" aria-label="WhatsApp">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.532 5.855L.057 23.48a.75.75 0 0 0 .914.914l5.674-1.485A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.222-3.875 1.015 1.033-3.772-.243-.389A9.953 9.953 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                </a>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════════════════════════════
     BIOGRAPHY & SITE INFO
     ══════════════════════════════════════════════════════════════ -->
<section class="gr-about-content">
    <div class="gr-wrap gr-about-content__inner">

        <!-- Biography -->
        <div class="gr-about-bio">
            <h2 class="gr-about-bio__title"><?php esc_html_e( 'Golden Rashifal के बारे में', 'golden-rashifal' ); ?></h2>
            <p><?php esc_html_e( 'Golden Rashifal एक हिंदी ज्योतिष जानकारी पोर्टल है। हम पंचांग, चौघड़िया, राहुकाल, शुभ मुहूर्त, राशिफल और हिंदू त्योहारों की जानकारी सरल भाषा में देते हैं।', 'golden-rashifal' ); ?></p>
            <p><?php esc_html_e( 'वेबसाइट का उद्देश्य है — भारतीय पारंपरिक ज्ञान को सही, संतुलित और आसान भाषा में पाठकों तक पहुँचाना। हम किसी भी प्रकार की भुगतान आधारित ज्योतिष परामर्श सेवा नहीं देते।', 'golden-rashifal' ); ?></p>

            <h3><?php esc_html_e( 'हम क्या cover करते हैं?', 'golden-rashifal' ); ?></h3>
            <ul class="gr-about-list">
                <li><strong><?php esc_html_e( 'दैनिक राशिफल', 'golden-rashifal' ); ?></strong> — <?php esc_html_e( 'सभी 12 राशियों के लिए प्रतिदिन अपडेट।', 'golden-rashifal' ); ?></li>
                <li><strong><?php esc_html_e( 'पंचांग', 'golden-rashifal' ); ?></strong> — <?php esc_html_e( 'तिथि, नक्षत्र, योग, करण, सूर्योदय-सूर्यास्त।', 'golden-rashifal' ); ?></li>
                <li><strong><?php esc_html_e( 'चौघड़िया', 'golden-rashifal' ); ?></strong> — <?php esc_html_e( 'दिन और रात के शुभ-अशुभ समय का चार्ट।', 'golden-rashifal' ); ?></li>
                <li><strong><?php esc_html_e( 'राहुकाल', 'golden-rashifal' ); ?></strong> — <?php esc_html_e( 'आज का राहुकाल समय।', 'golden-rashifal' ); ?></li>
                <li><strong><?php esc_html_e( 'शुभ मुहूर्त', 'golden-rashifal' ); ?></strong> — <?php esc_html_e( 'विवाह, गृह प्रवेश, नामकरण, मुंडन आदि।', 'golden-rashifal' ); ?></li>
                <li><strong><?php esc_html_e( 'त्योहार कैलेंडर', 'golden-rashifal' ); ?></strong> — <?php esc_html_e( 'प्रमुख हिंदू पर्वों की तिथि और जानकारी।', 'golden-rashifal' ); ?></li>
            </ul>

            <h3><?php esc_html_e( 'हमारा दृष्टिकोण', 'golden-rashifal' ); ?></h3>
            <p><?php esc_html_e( 'हम पारंपरिक ज्योतिष को सम्मान देते हैं लेकिन किसी भी प्रकार की गारंटी नहीं देते। हमारी भाषा संतुलित, तथ्यात्मक और पाठक-हितैषी है। कोई डर, कोई अंधविश्वास नहीं।', 'golden-rashifal' ); ?></p>
        </div>

        <!-- Trust sidebar -->
        <aside class="gr-about-trust" aria-label="<?php esc_attr_e( 'विश्वसनीयता', 'golden-rashifal' ); ?>">

            <!-- E-E-A-T badges -->
            <div class="gr-about-trust__card">
                <h3 class="gr-about-trust__card-title"><?php esc_html_e( 'विश्वसनीयता के कारण', 'golden-rashifal' ); ?></h3>
                <ul class="gr-about-trust__list">
                    <li>
                        <span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span>
                        <?php esc_html_e( 'Vedic Astrology आधारित सामग्री', 'golden-rashifal' ); ?>
                    </li>
                    <li>
                        <span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span>
                        <?php esc_html_e( 'प्रतिदिन अपडेट किया जाता है', 'golden-rashifal' ); ?>
                    </li>
                    <li>
                        <span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span>
                        <?php esc_html_e( 'संपादकीय समीक्षा के बाद प्रकाशित', 'golden-rashifal' ); ?>
                    </li>
                    <li>
                        <span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span>
                        <?php esc_html_e( 'कोई paid consultation नहीं', 'golden-rashifal' ); ?>
                    </li>
                    <li>
                        <span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span>
                        <?php esc_html_e( 'Mobile-friendly, fast loading', 'golden-rashifal' ); ?>
                    </li>
                </ul>
            </div>

            <!-- Contact card -->
            <div class="gr-about-trust__card gr-about-trust__card--contact" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="name" content="Golden Rashifal" />
                <h3 class="gr-about-trust__card-title"><?php esc_html_e( 'संपर्क जानकारी', 'golden-rashifal' ); ?></h3>
                <ul class="gr-about-contact-list">
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <a href="mailto:<?php echo esc_attr( $gr_ab_email ); ?>" itemprop="email"><?php echo esc_html( $gr_ab_email ); ?></a>
                    </li>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.64 3.48 2 2 0 0 1 3.62 1.27h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $gr_ab_phone ) ); ?>" itemprop="telephone"><?php echo esc_html( $gr_ab_phone ); ?></a>
                    </li>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span itemprop="address"><?php echo esc_html( $gr_ab_address ); ?></span>
                    </li>
                </ul>
                <div class="gr-about-contact-social">
                    <a href="<?php echo esc_url( $gr_ab_fb ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="gr-about-contact-social__btn gr-about-contact-social__btn--fb"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                    <a href="<?php echo esc_url( $gr_ab_ig ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="gr-about-contact-social__btn gr-about-contact-social__btn--ig"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                    <a href="<?php echo esc_url( $gr_ab_yt ); ?>" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="gr-about-contact-social__btn gr-about-contact-social__btn--yt"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
                    <a href="<?php echo esc_url( $gr_ab_wa ); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="gr-about-contact-social__btn gr-about-contact-social__btn--wa"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.532 5.855L.057 23.48a.75.75 0 0 0 .914.914l5.674-1.485A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.222-3.875 1.015 1.033-3.772-.243-.389A9.953 9.953 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg></a>
                </div>
            </div>

            <!-- Quick links -->
            <div class="gr-about-trust__card">
                <h3 class="gr-about-trust__card-title"><?php esc_html_e( 'महत्वपूर्ण पेज', 'golden-rashifal' ); ?></h3>
                <ul class="gr-about-links">
                    <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( '🔒 गोपनीयता नीति', 'golden-rashifal' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>"><?php esc_html_e( '⚖️ अस्वीकरण', 'golden-rashifal' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php esc_html_e( '📜 नियम और शर्तें', 'golden-rashifal' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>"><?php esc_html_e( '✏️ संपादकीय नीति', 'golden-rashifal' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( '📞 संपर्क करें', 'golden-rashifal' ); ?></a></li>
                </ul>
            </div>

        </aside>

    </div>
</section>

</main>
<?php get_footer(); ?>
