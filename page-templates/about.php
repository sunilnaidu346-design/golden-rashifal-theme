<?php
/**
 * Page Template: About Us — हमारे बारे में
 * Completely rewritten with natural Hindi storytelling, E-E-A-T, AdSense-ready.
 * Template Name: About Us
 * @package GoldenRashifal
 */
get_header();

// Schema — Organization + Person
$schema = array(
    '@context' => 'https://schema.org',
    '@graph'   => array(
        array(
            '@type'       => 'Organization',
            'name'        => 'Golden Rashifal',
            'url'         => home_url( '/' ),
            'email'       => GR_AUTHOR_EMAIL,
            'telephone'   => GR_AUTHOR_PHONE,
            'sameAs'      => array( GR_AUTHOR_FB, GR_AUTHOR_IG, GR_AUTHOR_YT ),
            'founder'     => array( '@type' => 'Person', 'name' => GR_AUTHOR_NAME ),
            'address'     => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'D-9 A/1, Indira Colony, Sector 52',
                'addressLocality' => 'Gurugram',
                'addressRegion'   => 'Haryana',
                'postalCode'      => '122003',
                'addressCountry'  => 'IN',
            ),
        ),
        array(
            '@type'     => 'Person',
            'name'      => GR_AUTHOR_NAME,
            'jobTitle'  => GR_AUTHOR_ROLE,
            'image'     => GR_AUTHOR_IMG,
            'email'     => GR_AUTHOR_EMAIL,
            'worksFor'  => array( '@type' => 'Organization', 'name' => 'Golden Rashifal' ),
            'sameAs'    => array( GR_AUTHOR_FB, GR_AUTHOR_IG, GR_AUTHOR_YT ),
        ),
    ),
);
echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";
?>
<main id="primary" class="gr-main gr-main--about" role="main">

<?php
// WordPress editor content takes priority
if ( have_posts() ) : while ( have_posts() ) : the_post();
    $ec = get_the_content();
    if ( ! empty( trim( $ec ) ) ) :
        echo '<div class="gr-wrap gr-content-wrap gr-article" style="padding-top:var(--sp-8)">';
        the_content();
        echo '<hr class="gr-content-divider" />';
        echo '</div>';
    endif;
endwhile; rewind_posts(); endif;
?>

<!-- ══════════════════════════════════════════════════════════════
     HERO — Author Profile (Dark Gradient)
══════════════════════════════════════════════════════════════ -->
<section class="gr-about-hero" aria-labelledby="gr-about-name">
    <div class="gr-wrap gr-about-hero__inner">

        <div class="gr-about-hero__img-wrap">
            <img
                src="<?php echo esc_url( GR_AUTHOR_IMG ); ?>"
                alt="<?php echo esc_attr( GR_AUTHOR_NAME . ' — ' . GR_AUTHOR_ROLE ); ?>"
                width="280" height="280"
                loading="eager" decoding="async"
                class="gr-about-hero__img"
                itemprop="image"
                onerror="this.onerror=null;this.style.background='rgba(255,255,255,0.1)';"
            />
            <div class="gr-about-hero__img-badge">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <?php esc_html_e( 'सत्यापित लेखक', 'golden-rashifal' ); ?>
            </div>
        </div>

        <div class="gr-about-hero__details" itemscope itemtype="https://schema.org/Person">
            <span class="gr-about-hero__eyebrow"><?php esc_html_e( 'सह-संस्थापक परिचय', 'golden-rashifal' ); ?></span>
            <h1 class="gr-about-hero__name" id="gr-about-name" itemprop="name"><?php echo esc_html( GR_AUTHOR_NAME ); ?></h1>
            <p class="gr-about-hero__role" itemprop="jobTitle"><?php echo esc_html( GR_AUTHOR_ROLE ); ?></p>

            <p class="gr-about-hero__bio" itemprop="description">
                <?php esc_html_e( 'Vedansh Vallabh Golden Rashifal के सह-संस्थापक हैं और ज्योतिष, पंचांग, चौघड़िया, मुहूर्त तथा राशिफल से जुड़ी सामग्री तैयार करते हैं। उनका प्रयास रहता है कि परंपरागत ज्ञान को सरल, संतुलित और पाठक के लिए वास्तव में उपयोगी भाषा में प्रस्तुत किया जाए।', 'golden-rashifal' ); ?>
            </p>

            <ul class="gr-about-hero__contact" aria-label="<?php esc_attr_e( 'संपर्क विवरण', 'golden-rashifal' ); ?>">
                <li itemprop="email">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <a href="mailto:<?php echo esc_attr( GR_AUTHOR_EMAIL ); ?>"><?php echo esc_html( GR_AUTHOR_EMAIL ); ?></a>
                </li>
                <li itemprop="telephone">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.64 3.48 2 2 0 0 1 3.62 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', GR_AUTHOR_PHONE ) ); ?>"><?php echo esc_html( GR_AUTHOR_PHONE ); ?></a>
                </li>
                <li>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>D-9 A/1, Indira Colony, Sector 52, Gurugram, Haryana 122003</span>
                </li>
            </ul>

            <div class="gr-about-hero__social" aria-label="<?php esc_attr_e( 'सोशल मीडिया', 'golden-rashifal' ); ?>">
                <a href="<?php echo esc_url( GR_AUTHOR_FB ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--fb" aria-label="Facebook">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="<?php echo esc_url( GR_AUTHOR_IG ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--ig" aria-label="Instagram">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="<?php echo esc_url( GR_AUTHOR_YT ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--yt" aria-label="YouTube">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <a href="<?php echo esc_url( GR_AUTHOR_WA ); ?>" target="_blank" rel="noopener noreferrer" class="gr-about-hero__social-btn gr-about-hero__social-btn--wa" aria-label="WhatsApp">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.532 5.855L.057 23.48a.75.75 0 0 0 .914.914l5.674-1.485A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.222-3.875 1.015 1.033-3.772-.243-.389A9.953 9.953 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════════════════════════
     MAIN BODY — Storytelling + Trust Content
══════════════════════════════════════════════════════════════ -->
<section class="gr-about-content">
<div class="gr-wrap gr-about-content__inner">

<!-- LEFT: Main content -->
<div class="gr-about-bio">

<h2 class="gr-about-bio__title">स्वागत है Golden Rashifal पर</h2>
<p>जब कोई सुबह उठकर देखता है कि आज का राहुकाल कितने बजे है, या शादी के लिए शुभ मुहूर्त निकालना हो — तो इंटरनेट पर हिंदी में भरोसेमंद और सीधी जानकारी मिलना उतना आसान नहीं जितना लगता है। बहुत सी जगहें या तो जरूरत से ज्यादा जटिल हैं, या सिर्फ डर दिखाकर पाठक को उलझा देती हैं।</p>
<p>Golden Rashifal इसीलिए बनाया गया — ताकि पंचांग, चौघड़िया, राशिफल और मुहूर्त जैसी जानकारी सरल, सच्ची और वास्तव में पाठक के काम आने वाली भाषा में मिल सके।</p>

<h2>हमारी सोच</h2>
<p>ज्योतिष और पंचांग भारत की समृद्ध परंपरा का हिस्सा हैं। लेकिन हम यह भी मानते हैं कि इस ज्ञान को डर, अंधविश्वास या हड़बड़ाहट के साथ परोसना उचित नहीं। हमारा नजरिया यह है कि पाठक को जानकारी देनी है — निर्णय उनका है।</p>
<p>हम न तो यह कहते हैं कि "आज कुछ भी मत करो" और न यह कि "यह मंत्र जपो सब ठीक हो जाएगा।" हम बस यह बताते हैं कि परंपरागत मान्यताओं के अनुसार आज का पंचांग क्या कहता है, कौन सा समय शुभ माना गया है — और फिर पाठक खुद तय करें।</p>

<h2>हम क्या प्रकाशित करते हैं</h2>
<ul class="gr-about-list">
    <li>
        <strong>दैनिक राशिफल</strong> — मेष से मीन तक सभी बारह राशियों का राशिफल नियमित रूप से अपडेट होता है। सामान्य जीवन, करियर, स्वास्थ्य और रिश्तों पर सरल मार्गदर्शन।
    </li>
    <li>
        <strong>आज का पंचांग</strong> — तिथि, वार, नक्षत्र, योग, करण — ये पाँचों अंग हिंदू कैलेंडर की नींव हैं। इनकी जानकारी प्रतिदिन अपडेट की जाती है।
    </li>
    <li>
        <strong>चौघड़िया और राहुकाल</strong> — दिन की शुरुआत किस समय करें, कौन सा घड़ी शुभ है, राहुकाल कब है — यह जानकारी बहुत से लोग रोज सुबह देखते हैं।
    </li>
    <li>
        <strong>शुभ मुहूर्त</strong> — विवाह, गृह प्रवेश, नामकरण, वाहन खरीद, नया काम शुरू करने जैसे अवसरों के लिए शुभ समय की जानकारी।
    </li>
    <li>
        <strong>एकादशी और पूर्णिमा</strong> — व्रत, पूजा और धार्मिक आयोजनों की तिथियाँ और उनका महत्व।
    </li>
    <li>
        <strong>त्योहार कैलेंडर</strong> — होली, दीपावली, नवरात्रि, महाशिवरात्रि सहित सभी प्रमुख हिंदू पर्वों की तिथि, पूजा विधि और महत्व।
    </li>
    <li>
        <strong>वास्तु मार्गदर्शन</strong> — घर और कार्यस्थल के लिए वास्तु शास्त्र की बुनियादी जानकारी, सरल भाषा में।
    </li>
</ul>

<h2>जानकारी कैसे तैयार की जाती है</h2>
<p>पंचांग और ज्योतिष की जानकारी तैयार करने में हम शास्त्रीय ग्रंथों, प्रमाणित पंचांग प्रकाशनों और मानक खगोलीय गणनाओं का संदर्भ लेते हैं। सूर्योदय, सूर्यास्त, तिथि और नक्षत्र के समय मानक एल्गोरिदम के आधार पर दिए जाते हैं।</p>
<p>हर लेख प्रकाशन से पहले समीक्षा से गुजरता है। हम देखते हैं कि भाषा स्पष्ट है, कोई भ्रामक दावा तो नहीं है, और जानकारी वास्तव में पाठक के लिए उपयोगी है। यदि कोई तथ्य पुराना हो जाए या गलती हो तो उसे जल्द से जल्द सुधारा जाता है।</p>
<p>एक बात स्पष्ट रखें — पंचांग डेटा अनुमानित होता है। स्थान के अनुसार समय में 5 से 15 मिनट का अंतर सामान्य है। अपने नगर की सटीक जानकारी के लिए स्थानीय पंचांग से मिलान करना उचित है।</p>

<h2>पाठकों के प्रति हमारी प्रतिबद्धता</h2>
<p>हम यहाँ किसी को डराने नहीं आए। न कोई "शनि की महादशा से बचने का उपाय" बेचने के लिए, न किसी पत्थर या माला की दुकान चलाने के लिए। Golden Rashifal पर आप जो पढ़ते हैं वह शुद्ध जानकारी है — बिना किसी छिपे हुए इरादे के।</p>
<p>हम यह भी मानते हैं कि पाठक समझदार हैं। वे जानकारी लेकर खुद निर्णय ले सकते हैं। हमारा काम है उन्हें वह जानकारी देना जो पारंपरिक ज्ञान के आधार पर सही हो — और वह भी बिना किसी नाटक के।</p>

<h2>हमसे संपर्क और संवाद</h2>
<p>यदि कोई लेख में गलती हो, किसी विषय पर अधिक जानकारी चाहिए, या कोई सुझाव देना हो — तो हमें जरूर लिखें। हम हर सार्थक संदेश को गंभीरता से लेते हैं।</p>
<div class="gr-about-contact-row">
    <a href="mailto:<?php echo esc_attr( GR_AUTHOR_EMAIL ); ?>" class="gr-about-contact-btn">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        <?php echo esc_html( GR_AUTHOR_EMAIL ); ?>
    </a>
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gr-about-contact-btn gr-about-contact-btn--outline">
        <?php esc_html_e( 'संपर्क पृष्ठ →', 'golden-rashifal' ); ?>
    </a>
</div>

<h2>एक आखिरी बात</h2>
<p>हम जानते हैं कि ज्योतिष को लेकर हर किसी की अपनी राय होती है। कुछ लोग इसे पूरी तरह मानते हैं, कुछ बिल्कुल नहीं। हम न इसे थोपते हैं, न इसका मजाक उड़ाते हैं।</p>
<p>Golden Rashifal पर आने वाले पाठक के लिए हमारी कोशिश यही रहती है — जो जानकारी आप ढूंढ रहे हैं, वह सही जगह, सही समय और सही भाषा में मिले। बस।</p>

</div><!-- /.gr-about-bio -->


<!-- RIGHT: Trust Sidebar -->
<aside class="gr-about-trust" aria-label="<?php esc_attr_e( 'विश्वसनीयता', 'golden-rashifal' ); ?>">

    <div class="gr-about-trust__card">
        <h3 class="gr-about-trust__card-title"><?php esc_html_e( 'हम पर भरोसा क्यों?', 'golden-rashifal' ); ?></h3>
        <ul class="gr-about-trust__list">
            <li><span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span><?php esc_html_e( 'वैदिक ज्योतिष आधारित जानकारी', 'golden-rashifal' ); ?></li>
            <li><span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span><?php esc_html_e( 'प्रतिदिन अपडेट होती है सामग्री', 'golden-rashifal' ); ?></li>
            <li><span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span><?php esc_html_e( 'प्रकाशन से पहले संपादकीय समीक्षा', 'golden-rashifal' ); ?></li>
            <li><span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span><?php esc_html_e( 'कोई भुगतान आधारित परामर्श नहीं', 'golden-rashifal' ); ?></li>
            <li><span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span><?php esc_html_e( 'डर नहीं — जानकारी है', 'golden-rashifal' ); ?></li>
            <li><span class="gr-about-trust__icon gr-about-trust__icon--green">✓</span><?php esc_html_e( 'मोबाइल पर सुगम और तेज', 'golden-rashifal' ); ?></li>
        </ul>
    </div>

    <div class="gr-about-trust__card gr-about-trust__card--contact" itemscope itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="Golden Rashifal" />
        <h3 class="gr-about-trust__card-title"><?php esc_html_e( 'संपर्क जानकारी', 'golden-rashifal' ); ?></h3>
        <ul class="gr-about-contact-list">
            <li>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <a href="mailto:<?php echo esc_attr( GR_AUTHOR_EMAIL ); ?>" itemprop="email"><?php echo esc_html( GR_AUTHOR_EMAIL ); ?></a>
            </li>
            <li>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.64 3.48 2 2 0 0 1 3.62 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', GR_AUTHOR_PHONE ) ); ?>" itemprop="telephone"><?php echo esc_html( GR_AUTHOR_PHONE ); ?></a>
            </li>
            <li>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span itemprop="address">D-9 A/1, Sector 52, Gurugram 122003</span>
            </li>
        </ul>
        <div class="gr-about-contact-social">
            <a href="<?php echo esc_url( GR_AUTHOR_FB ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="gr-about-contact-social__btn gr-about-contact-social__btn--fb"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
            <a href="<?php echo esc_url( GR_AUTHOR_IG ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="gr-about-contact-social__btn gr-about-contact-social__btn--ig"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
            <a href="<?php echo esc_url( GR_AUTHOR_YT ); ?>" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="gr-about-contact-social__btn gr-about-contact-social__btn--yt"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
            <a href="<?php echo esc_url( GR_AUTHOR_WA ); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="gr-about-contact-social__btn gr-about-contact-social__btn--wa"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.532 5.855L.057 23.48a.75.75 0 0 0 .914.914l5.674-1.485A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.222-3.875 1.015 1.033-3.772-.243-.389A9.953 9.953 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg></a>
        </div>
    </div>

    <div class="gr-about-trust__card">
        <h3 class="gr-about-trust__card-title"><?php esc_html_e( 'महत्वपूर्ण पेज', 'golden-rashifal' ); ?></h3>
        <ul class="gr-about-links">
            <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">🔒 <?php esc_html_e( 'गोपनीयता नीति', 'golden-rashifal' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">⚖️ <?php esc_html_e( 'अस्वीकरण', 'golden-rashifal' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">📜 <?php esc_html_e( 'नियम एवं शर्तें', 'golden-rashifal' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">✏️ <?php esc_html_e( 'संपादकीय नीति', 'golden-rashifal' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">📞 <?php esc_html_e( 'संपर्क करें', 'golden-rashifal' ); ?></a></li>
        </ul>
    </div>

</aside>

</div><!-- /.gr-about-content__inner -->
</section><!-- /.gr-about-content -->

</main>
<?php get_footer(); ?>
