<?php
/**
 * Page Template: Contact Us — संपर्क करें
 * E-E-A-T optimised, AdSense-ready, production-grade contact page.
 * Template Name: Contact Us
 * @package GoldenRashifal
 */
get_header();

// LocalBusiness JSON-LD Schema
$schema = array(
    '@context'       => 'https://schema.org',
    '@type'          => array( 'Organization', 'LocalBusiness' ),
    'name'           => 'Golden Rashifal',
    'url'            => home_url( '/' ),
    'email'          => GR_AUTHOR_EMAIL,
    'telephone'      => GR_AUTHOR_PHONE,
    'address'        => array(
        '@type'           => 'PostalAddress',
        'streetAddress'   => 'D-9 A/1, Indira Colony, Sector 52',
        'addressLocality' => 'Gurugram',
        'addressRegion'   => 'Haryana',
        'postalCode'      => '122003',
        'addressCountry'  => 'IN',
    ),
    'sameAs' => array( GR_AUTHOR_FB, GR_AUTHOR_IG, GR_AUTHOR_YT ),
    'founder' => array(
        '@type'   => 'Person',
        'name'    => GR_AUTHOR_NAME,
        'jobTitle'=> GR_AUTHOR_ROLE,
        'image'   => GR_AUTHOR_IMG,
        'email'   => GR_AUTHOR_EMAIL,
    ),
);
echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";
?>
<main id="primary" class="gr-main gr-main--contact" role="main">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    $ec = get_the_content();
    if ( ! empty( trim( $ec ) ) ) :
        echo '<div class="gr-wrap gr-content-wrap gr-article" style="padding-top:var(--sp-7)">';
        the_content();
        echo '<hr class="gr-content-divider" />';
        echo '</div>';
    endif;
endwhile; rewind_posts(); endif; ?>

<!-- ══════════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════════ -->
<section class="gr-contact-hero">
    <div class="gr-wrap gr-contact-hero__inner">
        <div class="gr-contact-hero__text">
            <span class="gr-contact-hero__eyebrow">📞 <?php esc_html_e( 'बात करें हमसे', 'golden-rashifal' ); ?></span>
            <h1 class="gr-contact-hero__title"><?php esc_html_e( 'संपर्क करें', 'golden-rashifal' ); ?></h1>
            <p class="gr-contact-hero__sub"><?php esc_html_e( 'कोई भी सवाल हो, कोई जानकारी गलत लगे, या कोई सुझाव देना हो — हम हर संदेश को ध्यान से पढ़ते हैं और जवाब देते हैं।', 'golden-rashifal' ); ?></p>
            <div class="gr-contact-hero__trust">
                <span>✅ <?php esc_html_e( 'वास्तविक पहचान', 'golden-rashifal' ); ?></span>
                <span>✅ <?php esc_html_e( 'सत्यापित ईमेल', 'golden-rashifal' ); ?></span>
                <span>✅ <?php esc_html_e( '२ से ५ दिन में उत्तर', 'golden-rashifal' ); ?></span>
            </div>
        </div>
        <div class="gr-contact-hero__founder" itemscope itemtype="https://schema.org/Person">
            <img src="<?php echo esc_url( GR_AUTHOR_IMG ); ?>"
                 alt="<?php echo esc_attr( GR_AUTHOR_NAME . ' — ' . GR_AUTHOR_ROLE ); ?>"
                 width="100" height="100" loading="eager" decoding="async"
                 class="gr-contact-hero__founder-img" itemprop="image"
                 onerror="this.onerror=null;this.style.background='var(--gr-bg-soft)';" />
            <div>
                <strong class="gr-contact-hero__founder-name" itemprop="name"><?php echo esc_html( GR_AUTHOR_NAME ); ?></strong>
                <span class="gr-contact-hero__founder-role" itemprop="jobTitle"><?php echo esc_html( GR_AUTHOR_ROLE ); ?></span>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════════
     CONTACT INFO + FORM GRID
══════════════════════════════════════════════════════════════ -->
<section class="gr-contact-body">
<div class="gr-wrap gr-contact-body__inner">

    <!-- LEFT: Info Cards -->
    <div class="gr-contact-info">

        <!-- Email -->
        <div class="gr-contact-card gr-contact-card--email">
            <div class="gr-contact-card__icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div class="gr-contact-card__body">
                <span class="gr-contact-card__label"><?php esc_html_e( 'ईमेल पता', 'golden-rashifal' ); ?></span>
                <a class="gr-contact-card__value" href="mailto:<?php echo esc_attr( GR_AUTHOR_EMAIL ); ?>" itemprop="email"><?php echo esc_html( GR_AUTHOR_EMAIL ); ?></a>
                <span class="gr-contact-card__note"><?php esc_html_e( 'सहायता एवं सुझाव', 'golden-rashifal' ); ?></span>
            </div>
        </div>

        <!-- Phone -->
        <div class="gr-contact-card gr-contact-card--phone">
            <div class="gr-contact-card__icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.64 3.48 2 2 0 0 1 3.62 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <div class="gr-contact-card__body">
                <span class="gr-contact-card__label"><?php esc_html_e( 'फ़ोन नंबर', 'golden-rashifal' ); ?></span>
                <a class="gr-contact-card__value" href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', GR_AUTHOR_PHONE ) ); ?>" itemprop="telephone"><?php echo esc_html( GR_AUTHOR_PHONE ); ?></a>
                <span class="gr-contact-card__note"><?php esc_html_e( 'सोमवार–शुक्रवार, सुबह १० से शाम ६ बजे', 'golden-rashifal' ); ?></span>
            </div>
        </div>

        <!-- WhatsApp -->
        <div class="gr-contact-card gr-contact-card--wa">
            <div class="gr-contact-card__icon gr-contact-card__icon--wa">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.532 5.855L.057 23.48a.75.75 0 0 0 .914.914l5.674-1.485A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.222-3.875 1.015 1.033-3.772-.243-.389A9.953 9.953 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
            </div>
            <div class="gr-contact-card__body">
                <span class="gr-contact-card__label">व्हाट्सऐप चैनल</span>
                <a class="gr-contact-card__value" href="<?php echo esc_url( GR_AUTHOR_WA ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'चैनल से जुड़ें', 'golden-rashifal' ); ?></a>
                <span class="gr-contact-card__note"><?php esc_html_e( 'दैनिक राशिफल और अपडेट', 'golden-rashifal' ); ?></span>
            </div>
        </div>

        <!-- Address -->
        <div class="gr-contact-card gr-contact-card--address" itemscope itemtype="https://schema.org/PostalAddress">
            <div class="gr-contact-card__icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div class="gr-contact-card__body">
                <span class="gr-contact-card__label"><?php esc_html_e( 'पता', 'golden-rashifal' ); ?></span>
                <address class="gr-contact-card__address" itemprop="address">
                    <strong>Golden Rashifal</strong><br>
                    <span itemprop="streetAddress">D-9 A/1, Indira Colony, Sector 52</span><br>
                    <span itemprop="addressLocality">Gurugram</span>,
                    <span itemprop="addressRegion">Haryana</span>
                    <span itemprop="postalCode">122003</span><br>
                    <span itemprop="addressCountry">India</span>
                </address>
            </div>
        </div>

    </div><!-- /.gr-contact-info -->


    <!-- RIGHT: Contact Form -->
    <div class="gr-contact-form-wrap">
        <div class="gr-contact-form-header">
            <h2 class="gr-contact-form-title"><?php esc_html_e( 'अपनी बात लिखें', 'golden-rashifal' ); ?></h2>
            <p class="gr-contact-form-subtitle"><?php esc_html_e( 'हम आमतौर पर २ से ५ कार्य दिनों में जवाब देते हैं।', 'golden-rashifal' ); ?></p>
        </div>

        <?php
        // Show success/error message after form submission
        $gr_contact_sent  = false;
        $gr_contact_error = '';

        if ( isset( $_POST['gr_contact_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['gr_contact_nonce'] ) ), 'gr_contact_form' ) ) {
            $gr_name    = sanitize_text_field( wp_unslash( $_POST['gr_contact_name'] ?? '' ) );
            $gr_email   = sanitize_email( wp_unslash( $_POST['gr_contact_email'] ?? '' ) );
            $gr_subject = sanitize_text_field( wp_unslash( $_POST['gr_contact_subject'] ?? '' ) );
            $gr_message = sanitize_textarea_field( wp_unslash( $_POST['gr_contact_message'] ?? '' ) );

            if ( empty( $gr_name ) || empty( $gr_email ) || empty( $gr_message ) ) {
                $gr_contact_error = __( 'कृपया सभी आवश्यक फ़ील्ड भरें।', 'golden-rashifal' );
            } elseif ( ! is_email( $gr_email ) ) {
                $gr_contact_error = __( 'कृपया एक सही ईमेल पता दर्ज करें।', 'golden-rashifal' );
            } else {
                $to      = GR_AUTHOR_EMAIL;
                $subj    = sprintf( '[Golden Rashifal Contact] %s — %s', $gr_subject ?: __( 'Website Message', 'golden-rashifal' ), $gr_name );
                $body    = "Name: {$gr_name}\nEmail: {$gr_email}\n\nMessage:\n{$gr_message}";
                $headers = array( 'Content-Type: text/plain; charset=UTF-8', "Reply-To: {$gr_name} <{$gr_email}>" );
                $sent    = wp_mail( $to, $subj, $body, $headers );
                if ( $sent ) {
                    $gr_contact_sent = true;
                } else {
                    $gr_contact_error = __( 'संदेश भेजने में समस्या हुई। कृपया ईमेल द्वारा संपर्क करें।', 'golden-rashifal' );
                }
            }
        }
        ?>

        <?php if ( $gr_contact_sent ) : ?>
        <div class="gr-contact-success" role="alert">
            <span class="gr-contact-success__icon">✅</span>
            <div>
                <strong><?php esc_html_e( 'संदेश सफलतापूर्वक भेज दिया गया!', 'golden-rashifal' ); ?></strong>
                <p><?php esc_html_e( 'हम जल्द ही आपसे संपर्क करेंगे। धन्यवाद!', 'golden-rashifal' ); ?></p>
            </div>
        </div>
        <?php endif; ?>

        <?php if ( $gr_contact_error ) : ?>
        <div class="gr-contact-error" role="alert">
            <span>⚠️</span> <?php echo esc_html( $gr_contact_error ); ?>
        </div>
        <?php endif; ?>

        <form
            class="gr-contact-form"
            method="post"
            action="<?php echo esc_url( get_permalink() ); ?>"
            novalidate
        >
            <?php wp_nonce_field( 'gr_contact_form', 'gr_contact_nonce' ); ?>
            <div class="gr-contact-form__row">
                <div class="gr-contact-form__field">
                    <label for="gr_contact_name"><?php esc_html_e( 'आपका नाम', 'golden-rashifal' ); ?> <span class="gr-contact-form__req" aria-hidden="true">*</span></label>
                    <input type="text" id="gr_contact_name" name="gr_contact_name" placeholder="<?php esc_attr_e( 'पूरा नाम', 'golden-rashifal' ); ?>" required value="<?php echo esc_attr( $_POST['gr_contact_name'] ?? '' ); ?>" />
                </div>
                <div class="gr-contact-form__field">
                    <label for="gr_contact_email"><?php esc_html_e( 'ईमेल पता', 'golden-rashifal' ); ?> <span class="gr-contact-form__req" aria-hidden="true">*</span></label>
                    <input type="email" id="gr_contact_email" name="gr_contact_email" placeholder="<?php esc_attr_e( 'example@gmail.com', 'golden-rashifal' ); ?>" required value="<?php echo esc_attr( $_POST['gr_contact_email'] ?? '' ); ?>" />
                </div>
            </div>
            <div class="gr-contact-form__field">
                <label for="gr_contact_subject"><?php esc_html_e( 'विषय', 'golden-rashifal' ); ?></label>
                <input type="text" id="gr_contact_subject" name="gr_contact_subject" placeholder="<?php esc_attr_e( 'संदेश का विषय', 'golden-rashifal' ); ?>" value="<?php echo esc_attr( $_POST['gr_contact_subject'] ?? '' ); ?>" />
            </div>
            <div class="gr-contact-form__field">
                <label for="gr_contact_message"><?php esc_html_e( 'आपका संदेश', 'golden-rashifal' ); ?> <span class="gr-contact-form__req" aria-hidden="true">*</span></label>
                <textarea id="gr_contact_message" name="gr_contact_message" rows="6" placeholder="<?php esc_attr_e( 'अपना संदेश यहाँ लिखें…', 'golden-rashifal' ); ?>" required><?php echo esc_textarea( $_POST['gr_contact_message'] ?? '' ); ?></textarea>
            </div>
            <button type="submit" class="gr-contact-form__submit">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                <?php esc_html_e( 'संदेश भेजें', 'golden-rashifal' ); ?>
            </button>
        </form>
    </div><!-- /.gr-contact-form-wrap -->

</div><!-- /.gr-contact-body__inner -->
</section><!-- /.gr-contact-body -->


<!-- ══════════════════════════════════════════════════════════════
     FOUNDER / AUTHOR SECTION
══════════════════════════════════════════════════════════════ -->
<section class="gr-contact-founder" itemscope itemtype="https://schema.org/Person">
<div class="gr-wrap gr-contact-founder__inner">

    <div class="gr-contact-founder__img-wrap">
        <img src="<?php echo esc_url( GR_AUTHOR_IMG ); ?>"
             alt="<?php echo esc_attr( GR_AUTHOR_NAME . ' — ' . GR_AUTHOR_ROLE ); ?>"
             width="200" height="200" loading="lazy" decoding="async"
             class="gr-contact-founder__img" itemprop="image"
             onerror="this.onerror=null;this.style.background='var(--gr-bg-soft)';" />
        <span class="gr-contact-founder__badge">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <?php esc_html_e( 'Verified', 'golden-rashifal' ); ?>
        </span>
    </div>

    <div class="gr-contact-founder__details">
        <span class="gr-contact-founder__eyebrow"><?php esc_html_e( 'सह-संस्थापक — Golden Rashifal', 'golden-rashifal' ); ?></span>
        <h2 class="gr-contact-founder__name" itemprop="name"><?php echo esc_html( GR_AUTHOR_NAME ); ?></h2>
        <p class="gr-contact-founder__role" itemprop="jobTitle"><?php echo esc_html( GR_AUTHOR_ROLE ); ?></p>
        <p class="gr-contact-founder__bio" itemprop="description"><?php echo esc_html( GR_AUTHOR_BIO ); ?></p>

        <div class="gr-contact-founder__contact">
            <a href="mailto:<?php echo esc_attr( GR_AUTHOR_EMAIL ); ?>" class="gr-contact-founder__contact-item" itemprop="email">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <?php echo esc_html( GR_AUTHOR_EMAIL ); ?>
            </a>
            <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', GR_AUTHOR_PHONE ) ); ?>" class="gr-contact-founder__contact-item" itemprop="telephone">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.64 3.48 2 2 0 0 1 3.62 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <?php echo esc_html( GR_AUTHOR_PHONE ); ?>
            </a>
        </div>

        <div class="gr-contact-founder__social" aria-label="<?php esc_attr_e( 'सोशल मीडिया', 'golden-rashifal' ); ?>">
            <a href="<?php echo esc_url( GR_AUTHOR_FB ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--fb" aria-label="Facebook"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
            <a href="<?php echo esc_url( GR_AUTHOR_IG ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--ig" aria-label="Instagram"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
            <a href="<?php echo esc_url( GR_AUTHOR_YT ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--yt" aria-label="YouTube"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
            <a href="<?php echo esc_url( GR_AUTHOR_WA ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--wa" aria-label="WhatsApp"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.532 5.855L.057 23.48a.75.75 0 0 0 .914.914l5.674-1.485A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.222-3.875 1.015 1.033-3.772-.243-.389A9.953 9.953 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg></a>
        </div>
    </div>

</div>
</section>


<!-- ══════════════════════════════════════════════════════════════
     POLICY LINKS + TRUST ROW
══════════════════════════════════════════════════════════════ -->
<section class="gr-contact-footer-section">
<div class="gr-wrap gr-contact-footer-section__inner">

    <div class="gr-contact-policy-links">
        <h3><?php esc_html_e( 'महत्वपूर्ण पेज', 'golden-rashifal' ); ?></h3>
        <ul>
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">📖 <?php esc_html_e( 'हमारे बारे में', 'golden-rashifal' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">🔒 <?php esc_html_e( 'गोपनीयता नीति', 'golden-rashifal' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">⚖️ <?php esc_html_e( 'अस्वीकरण', 'golden-rashifal' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">📜 <?php esc_html_e( 'नियम और शर्तें', 'golden-rashifal' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">✏️ <?php esc_html_e( 'संपादकीय नीति', 'golden-rashifal' ); ?></a></li>
        </ul>
    </div>

    <div class="gr-contact-trust-row">
        <div class="gr-contact-trust-item">
            <span class="gr-contact-trust-item__icon">✅</span>
            <strong><?php esc_html_e( 'वास्तविक संपर्क जानकारी', 'golden-rashifal' ); ?></strong>
            <p><?php esc_html_e( 'सत्यापित ईमेल, फ़ोन और पता', 'golden-rashifal' ); ?></p>
        </div>
        <div class="gr-contact-trust-item">
            <span class="gr-contact-trust-item__icon">🔒</span>
            <strong><?php esc_html_e( 'गोपनीयता सुरक्षित', 'golden-rashifal' ); ?></strong>
            <p><?php esc_html_e( 'आपकी जानकारी कभी साझा नहीं होती', 'golden-rashifal' ); ?></p>
        </div>
        <div class="gr-contact-trust-item">
            <span class="gr-contact-trust-item__icon">⚡</span>
            <strong><?php esc_html_e( 'शीघ्र उत्तर', 'golden-rashifal' ); ?></strong>
            <p><?php esc_html_e( '२ से ५ कार्य दिनों में जवाब', 'golden-rashifal' ); ?></p>
        </div>
        <div class="gr-contact-trust-item">
            <span class="gr-contact-trust-item__icon">🕉️</span>
            <strong><?php esc_html_e( 'वैदिक ज्योतिष', 'golden-rashifal' ); ?></strong>
            <p><?php esc_html_e( 'परंपरागत और प्रामाणिक जानकारी', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</div>
</section>

</main>
<?php get_footer(); ?>
