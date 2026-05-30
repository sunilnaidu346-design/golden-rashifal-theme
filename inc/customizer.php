<?php
/**
 * Theme Customizer — branding, social links, ad codes, homepage controls.
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Customizer panels and controls.
 */
function golden_rashifal_customize_register( $wp_customize ) {

    // ----- Branding -----
    $wp_customize->add_section(
        'gr_branding',
        array(
            'title'    => __( 'गोल्डन राशिफल — ब्रांडिंग', 'golden-rashifal' ),
            'priority' => 30,
        )
    );

    $wp_customize->add_setting(
        'gr_tagline',
        array(
            'default'           => __( 'राशिफल · पंचांग · मुहूर्त · आध्यात्मिक ज्ञान', 'golden-rashifal' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'gr_tagline',
        array(
            'label'   => __( 'टैगलाइन (हेडर के नीचे)', 'golden-rashifal' ),
            'section' => 'gr_branding',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting(
        'gr_show_topbar',
        array(
            'default'           => true,
            'sanitize_callback' => 'rest_sanitize_boolean',
        )
    );
    $wp_customize->add_control(
        'gr_show_topbar',
        array(
            'label'   => __( 'टॉप बार दिखाएँ (तारीख़ और सोशल लिंक)', 'golden-rashifal' ),
            'section' => 'gr_branding',
            'type'    => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'gr_show_live_clock',
        array(
            'default'           => true,
            'sanitize_callback' => 'rest_sanitize_boolean',
        )
    );
    $wp_customize->add_control(
        'gr_show_live_clock',
        array(
            'label'   => __( 'टॉप बार में लाइव घड़ी दिखाएँ', 'golden-rashifal' ),
            'section' => 'gr_branding',
            'type'    => 'checkbox',
        )
    );

    // ----- Social Links -----
    $wp_customize->add_section(
        'gr_social',
        array(
            'title'    => __( 'सोशल मीडिया लिंक', 'golden-rashifal' ),
            'priority' => 40,
        )
    );
    foreach ( array( 'facebook', 'instagram', 'youtube', 'twitter', 'pinterest', 'whatsapp', 'telegram' ) as $net ) {
        $wp_customize->add_setting(
            'gr_social_' . $net,
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize->add_control(
            'gr_social_' . $net,
            array(
                'label'   => ucfirst( $net ),
                'section' => 'gr_social',
                'type'    => 'url',
            )
        );
    }

    // ----- Homepage controls -----
    $wp_customize->add_section(
        'gr_homepage',
        array(
            'title'    => __( 'होमपेज सेक्शन', 'golden-rashifal' ),
            'priority' => 45,
        )
    );

    $wp_customize->add_setting(
        'gr_hero_title',
        array(
            'default'           => __( 'आज का राशिफल, पंचांग और मुहूर्त — एक साफ़ और भरोसेमंद जगह पर', 'golden-rashifal' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'gr_hero_title',
        array(
            'label'   => __( 'हीरो हेडलाइन', 'golden-rashifal' ),
            'section' => 'gr_homepage',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting(
        'gr_hero_sub',
        array(
            'default'           => __( '12 राशियों का दैनिक राशिफल, सूर्योदय-सूर्यास्त, चौघड़िया, राहुकाल और हिंदू त्योहारों की जानकारी — आसान भाषा में, बिना अतिशय दावों के।', 'golden-rashifal' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'gr_hero_sub',
        array(
            'label'   => __( 'हीरो सब-हेडलाइन', 'golden-rashifal' ),
            'section' => 'gr_homepage',
            'type'    => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'gr_festival_name',
        array(
            'default'           => __( 'अगला मुख्य त्योहार', 'golden-rashifal' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'gr_festival_name',
        array(
            'label'   => __( 'त्योहार का नाम (काउंटडाउन)', 'golden-rashifal' ),
            'section' => 'gr_homepage',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting(
        'gr_festival_date',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'gr_festival_date',
        array(
            'label'       => __( 'त्योहार की तारीख़ (YYYY-MM-DD)', 'golden-rashifal' ),
            'description' => __( 'खाली छोड़ने पर काउंटडाउन छुपा रहेगा।', 'golden-rashifal' ),
            'section'     => 'gr_homepage',
            'type'        => 'text',
        )
    );

    $wp_customize->add_setting(
        'gr_video_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        'gr_video_url',
        array(
            'label'       => __( 'YouTube वीडियो URL (होमपेज)', 'golden-rashifal' ),
            'description' => __( 'खाली छोड़ने पर वीडियो सेक्शन छुपा रहेगा।', 'golden-rashifal' ),
            'section'     => 'gr_homepage',
            'type'        => 'url',
        )
    );

    // ----- AdSense slots -----
    $wp_customize->add_section(
        'gr_ads',
        array(
            'title'       => __( 'विज्ञापन (AdSense) कोड', 'golden-rashifal' ),
            'description' => __( 'अपना AdSense कोड यहाँ चिपकाएँ। कोड HTML के रूप में आउटपुट होगा।', 'golden-rashifal' ),
            'priority'    => 50,
        )
    );
    foreach (
        array(
            'gr_ad_above_content' => __( 'लेख की शुरुआत में', 'golden-rashifal' ),
            'gr_ad_in_content'    => __( 'लेख के बीच में', 'golden-rashifal' ),
            'gr_ad_below_content' => __( 'लेख के अंत में', 'golden-rashifal' ),
            'gr_ad_home_mid'      => __( 'होमपेज (मध्य)', 'golden-rashifal' ),
        ) as $key => $label
    ) {
        $wp_customize->add_setting(
            $key,
            array(
                'default'           => '',
                'sanitize_callback' => 'golden_rashifal_sanitize_ad_code',
            )
        );
        $wp_customize->add_control(
            $key,
            array(
                'label'   => $label,
                'section' => 'gr_ads',
                'type'    => 'textarea',
            )
        );
    }

    // ----- Footer / Legal -----
    $wp_customize->add_section(
        'gr_footer',
        array(
            'title'    => __( 'फुटर सेटिंग्स', 'golden-rashifal' ),
            'priority' => 60,
        )
    );
    $wp_customize->add_setting(
        'gr_footer_about',
        array(
            'default'           => __( 'गोल्डन राशिफल पर आपको सरल भाषा में राशिफल, पंचांग, चौघड़िया, राहुकाल, मुहूर्त और हिंदू त्योहारों की जानकारी मिलती है। हम सांस्कृतिक और परंपरागत संदर्भ का सम्मान करते हुए संतुलित और पाठक-केंद्रित सामग्री प्रकाशित करते हैं।', 'golden-rashifal' ),
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    $wp_customize->add_control(
        'gr_footer_about',
        array(
            'label'   => __( 'फुटर About पैराग्राफ', 'golden-rashifal' ),
            'section' => 'gr_footer',
            'type'    => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'gr_disclaimer',
        array(
            'default'           => __( 'इस वेबसाइट पर दी गई सामग्री पारंपरिक मान्यताओं और सामान्य ज्ञान पर आधारित है। यह किसी चिकित्सकीय, कानूनी या वित्तीय सलाह का विकल्प नहीं है।', 'golden-rashifal' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'gr_disclaimer',
        array(
            'label'   => __( 'डिस्क्लेमर लाइन (फुटर के ऊपर)', 'golden-rashifal' ),
            'section' => 'gr_footer',
            'type'    => 'textarea',
        )
    );
}
add_action( 'customize_register', 'golden_rashifal_customize_register' );

/**
 * Allow only safe tags inside ad code fields.
 */
function golden_rashifal_sanitize_ad_code( $value ) {
    return wp_kses( (string) $value, golden_rashifal_ad_allowed_tags() );
}

/**
 * Tags allowed inside an ad / script slot.
 */
function golden_rashifal_ad_allowed_tags() {
    return array(
        'script' => array(
            'src'   => true,
            'async' => true,
            'data-ad-client' => true,
            'data-ad-slot'   => true,
            'data-ad-format' => true,
            'data-full-width-responsive' => true,
            'crossorigin' => true,
            'type'  => true,
        ),
        'ins'    => array(
            'class' => true,
            'style' => true,
            'data-ad-client' => true,
            'data-ad-slot'   => true,
            'data-ad-format' => true,
            'data-full-width-responsive' => true,
            'data-ad-layout' => true,
            'data-ad-layout-key' => true,
        ),
        'iframe' => array(
            'src'   => true,
            'width' => true,
            'height'=> true,
            'frameborder' => true,
            'allow' => true,
            'allowfullscreen' => true,
            'loading' => true,
            'title'   => true,
            'referrerpolicy' => true,
        ),
        'div'    => array( 'class' => true, 'id' => true, 'style' => true ),
        'a'      => array( 'href' => true, 'class' => true, 'rel' => true, 'target' => true ),
        'img'    => array( 'src' => true, 'alt' => true, 'width' => true, 'height' => true, 'loading' => true, 'class' => true ),
        'br'     => array(),
    );
}


/**
 * Founder/Author Bio section settings (Why Trust Us on homepage).
 */
function golden_rashifal_founder_customizer( $wp_customize ) {

    $wp_customize->add_section( 'gr_founder', array(
        'title'    => __( 'संस्थापक / संपादक प्रोफ़ाइल', 'golden-rashifal' ),
        'priority' => 35,
    ) );

    // Founder Image
    $wp_customize->add_setting( 'gr_founder_image', array(
        'default'           => GR_AUTHOR_IMG,
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gr_founder_image', array(
        'label'   => __( 'संस्थापक की फ़ोटो', 'golden-rashifal' ),
        'section' => 'gr_founder',
    ) ) );

    // Founder Name
    $wp_customize->add_setting( 'gr_founder_name', array(
        'default'           => GR_AUTHOR_NAME,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'gr_founder_name', array(
        'label'   => __( 'संस्थापक का नाम', 'golden-rashifal' ),
        'section' => 'gr_founder',
        'type'    => 'text',
    ) );

    // Founder Role
    $wp_customize->add_setting( 'gr_founder_role', array(
        'default'           => GR_AUTHOR_ROLE,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'gr_founder_role', array(
        'label'   => __( 'संस्थापक का पद', 'golden-rashifal' ),
        'section' => 'gr_founder',
        'type'    => 'text',
    ) );

    // Founder Bio
    $wp_customize->add_setting( 'gr_founder_bio', array(
        'default'           => GR_AUTHOR_BIO,
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'gr_founder_bio', array(
        'label'   => __( 'संस्थापक का परिचय', 'golden-rashifal' ),
        'section' => 'gr_founder',
        'type'    => 'textarea',
    ) );
}
add_action( 'customize_register', 'golden_rashifal_founder_customizer' );
