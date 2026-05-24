<?php
/**
 * Virtual Page: नवग्रह रत्न (Gemstone) — Universal template.
 * Detects slug from URL and renders the matching gemstone content.
 *
 * @package GoldenRashifal
 */

// Determine which gemstone to show from the URL.
$request_path = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );
$home_path    = trim( parse_url( home_url(), PHP_URL_PATH ), '/' );
if ( $home_path && 0 === strpos( $request_path, $home_path ) ) {
    $request_path = trim( substr( $request_path, strlen( $home_path ) ), '/' );
}
$slug_parts = explode( '/', $request_path );
$ratna_slug = isset( $slug_parts[1] ) ? $slug_parts[1] : '';

// Gemstone data — all 9 Navgraha ratnas.
$gems = array(
    'manikya' => array(
        'name'     => 'माणिक्य',
        'en'       => 'Ruby',
        'graha'    => 'सूर्य',
        'color'    => '#c62828',
        'icon'     => '&#9670;',
        'element'  => 'अग्नि',
        'finger'   => 'अनामिका (दाहिना हाथ)',
        'metal'    => 'सोना या ताँबा',
        'day'      => 'रविवार',
        'weight'   => '3 से 7 रत्ती',
        'mantra'   => 'ॐ ह्रां ह्रीं ह्रौं सः सूर्याय नमः',
    ),
    'moti' => array(
        'name'     => 'मोती',
        'en'       => 'Pearl',
        'graha'    => 'चंद्रमा',
        'color'    => '#78909c',
        'icon'     => '&#9675;',
        'element'  => 'जल',
        'finger'   => 'कनिष्ठा (दाहिना हाथ)',
        'metal'    => 'चाँदी',
        'day'      => 'सोमवार',
        'weight'   => '4 से 6 रत्ती',
        'mantra'   => 'ॐ श्रां श्रीं श्रौं सः चंद्रमसे नमः',
    ),

    'munga' => array(
        'name'     => 'मूंगा',
        'en'       => 'Red Coral',
        'graha'    => 'मंगल',
        'color'    => '#d32f2f',
        'icon'     => '&#9650;',
        'element'  => 'अग्नि',
        'finger'   => 'अनामिका (दाहिना हाथ)',
        'metal'    => 'सोना या ताँबा',
        'day'      => 'मंगलवार',
        'weight'   => '6 से 9 रत्ती',
        'mantra'   => 'ॐ क्रां क्रीं क्रौं सः भौमाय नमः',
    ),
    'panna' => array(
        'name'     => 'पन्ना',
        'en'       => 'Emerald',
        'graha'    => 'बुध',
        'color'    => '#2e7d32',
        'icon'     => '&#9671;',
        'element'  => 'पृथ्वी',
        'finger'   => 'कनिष्ठा (दाहिना हाथ)',
        'metal'    => 'सोना',
        'day'      => 'बुधवार',
        'weight'   => '3 से 6 रत्ती',
        'mantra'   => 'ॐ ब्रां ब्रीं ब्रौं सः बुधाय नमः',
    ),
    'pukhraj' => array(
        'name'     => 'पुखराज',
        'en'       => 'Yellow Sapphire',
        'graha'    => 'बृहस्पति',
        'color'    => '#f9a825',
        'icon'     => '&#9733;',
        'element'  => 'आकाश',
        'finger'   => 'तर्जनी (दाहिना हाथ)',
        'metal'    => 'सोना',
        'day'      => 'गुरुवार',
        'weight'   => '3 से 5 रत्ती',
        'mantra'   => 'ॐ ग्रां ग्रीं ग्रौं सः गुरवे नमः',
    ),
    'heera' => array(
        'name'     => 'हीरा',
        'en'       => 'Diamond',
        'graha'    => 'शुक्र',
        'color'    => '#0097a7',
        'icon'     => '&#10070;',
        'element'  => 'जल',
        'finger'   => 'मध्यमा (दाहिना हाथ)',
        'metal'    => 'प्लैटिनम या सोना',
        'day'      => 'शुक्रवार',
        'weight'   => '1 से 2 रत्ती',
        'mantra'   => 'ॐ द्रां द्रीं द्रौं सः शुक्राय नमः',
    ),

    'neelam' => array(
        'name'     => 'नीलम',
        'en'       => 'Blue Sapphire',
        'graha'    => 'शनि',
        'color'    => '#1565c0',
        'icon'     => '&#9679;',
        'element'  => 'वायु',
        'finger'   => 'मध्यमा (दाहिना हाथ)',
        'metal'    => 'सोना या पंचधातु',
        'day'      => 'शनिवार',
        'weight'   => '3 से 5 रत्ती',
        'mantra'   => 'ॐ प्रां प्रीं प्रौं सः शनैश्चराय नमः',
    ),
    'gomed' => array(
        'name'     => 'गोमेद',
        'en'       => 'Hessonite',
        'graha'    => 'राहु',
        'color'    => '#5d4037',
        'icon'     => '&#9683;',
        'element'  => 'वायु',
        'finger'   => 'मध्यमा (दाहिना हाथ)',
        'metal'    => 'चाँदी या अष्टधातु',
        'day'      => 'शनिवार',
        'weight'   => '5 से 8 रत्ती',
        'mantra'   => 'ॐ भ्रां भ्रीं भ्रौं सः राहवे नमः',
    ),
    'lahsuniya' => array(
        'name'     => 'लहसुनिया',
        'en'       => "Cat's Eye",
        'graha'    => 'केतु',
        'color'    => '#607d8b',
        'icon'     => '&#9680;',
        'element'  => 'अग्नि',
        'finger'   => 'मध्यमा या अनामिका',
        'metal'    => 'चाँदी या पंचधातु',
        'day'      => 'मंगलवार या शनिवार',
        'weight'   => '3 से 5 रत्ती',
        'mantra'   => 'ॐ स्रां स्रीं स्रौं सः केतवे नमः',
    ),
);

// Get current gem data.
$gem = isset( $gems[ $ratna_slug ] ) ? $gems[ $ratna_slug ] : null;
if ( ! $gem ) {
    // Fallback to 404 if slug doesn't match.
    status_header( 404 );
    include GOLDEN_RASHIFAL_DIR . '404.php';
    exit;
}

get_header();
?>


<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article">

<header class="gr-article__head">
    <h1 class="gr-article__title"><?php echo esc_html( $gem['name'] ); ?> रत्न — <?php echo esc_html( $gem['graha'] ); ?> का रत्न, लाभ और धारण विधि</h1>
    <p class="gr-article__lede"><?php echo esc_html( $gem['name'] ); ?> (<?php echo esc_html( $gem['en'] ); ?>) <?php echo esc_html( $gem['graha'] ); ?> ग्रह का प्रतिनिधि रत्न है। वैदिक ज्योतिष में इसे <?php echo esc_html( $gem['graha'] ); ?> को मज़बूत करने और उनकी कृपा प्राप्त करने के लिए धारण किया जाता है। यहाँ इस रत्न की संपूर्ण जानकारी प्रस्तुत है।</p>
</header>

<div class="gr-article__body">

<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:12px;margin-bottom:32px;">
    <div style="padding:16px;background:#f9f7f4;border:1px solid #eae4d8;border-radius:10px;text-align:center;">
        <span style="font-size:1.6rem;color:<?php echo esc_attr( $gem['color'] ); ?>;display:block;margin-bottom:4px;"><?php echo $gem['icon']; ?></span>
        <strong style="font-size:.88rem;"><?php echo esc_html( $gem['name'] ); ?></strong>
        <span style="display:block;font-size:.74rem;color:#6b7280;"><?php echo esc_html( $gem['en'] ); ?></span>
    </div>
    <div style="padding:16px;background:#f9f7f4;border:1px solid #eae4d8;border-radius:10px;text-align:center;">
        <span style="font-size:.72rem;color:#6b7280;display:block;margin-bottom:4px;">ग्रह</span>
        <strong style="font-size:.92rem;"><?php echo esc_html( $gem['graha'] ); ?></strong>
    </div>
    <div style="padding:16px;background:#f9f7f4;border:1px solid #eae4d8;border-radius:10px;text-align:center;">
        <span style="font-size:.72rem;color:#6b7280;display:block;margin-bottom:4px;">तत्व</span>
        <strong style="font-size:.92rem;"><?php echo esc_html( $gem['element'] ); ?></strong>
    </div>
    <div style="padding:16px;background:#f9f7f4;border:1px solid #eae4d8;border-radius:10px;text-align:center;">
        <span style="font-size:.72rem;color:#6b7280;display:block;margin-bottom:4px;">अंगूठी</span>
        <strong style="font-size:.92rem;"><?php echo esc_html( $gem['finger'] ); ?></strong>
    </div>
</div>


<h2><?php echo esc_html( $gem['name'] ); ?> रत्न क्या है?</h2>
<p><?php echo esc_html( $gem['name'] ); ?> (<?php echo esc_html( $gem['en'] ); ?>) वैदिक ज्योतिष में <?php echo esc_html( $gem['graha'] ); ?> ग्रह का प्रमुख रत्न माना जाता है। जब किसी व्यक्ति की कुंडली में <?php echo esc_html( $gem['graha'] ); ?> कमज़ोर हो या अशुभ स्थिति में हो, तब ज्योतिषाचार्य इस रत्न को धारण करने की सलाह देते हैं। यह रत्न <?php echo esc_html( $gem['element'] ); ?> तत्व से जुड़ा है।</p>

<p>ध्यान रखें — कोई भी रत्न चमत्कारिक रूप से जीवन नहीं बदलता। यह एक पारंपरिक मान्यता है जिसमें ग्रहों की ऊर्जा को संतुलित करने का विश्वास है। रत्न धारण करना एक व्यक्तिगत निर्णय है और इसे किसी योग्य ज्योतिषाचार्य की सलाह से ही करें।</p>

<h2><?php echo esc_html( $gem['graha'] ); ?> ग्रह और <?php echo esc_html( $gem['name'] ); ?> का संबंध</h2>
<p>वैदिक ज्योतिष में नवग्रह — सूर्य, चंद्र, मंगल, बुध, गुरु, शुक्र, शनि, राहु और केतु — प्रत्येक का एक विशिष्ट रत्न निर्धारित है। <?php echo esc_html( $gem['graha'] ); ?> का प्रतिनिधि रत्न <?php echo esc_html( $gem['name'] ); ?> है।</p>

<p>जब कुंडली में <?php echo esc_html( $gem['graha'] ); ?> लग्न भाव, पंचम, नवम या दशम भाव का स्वामी हो और कमज़ोर स्थिति में हो — तब यह रत्न धारण करने का विचार किया जाता है। लेकिन यदि <?php echo esc_html( $gem['graha'] ); ?> मारक या अशुभ भाव का स्वामी हो, तो यह रत्न नुकसान भी कर सकता है।</p>

<h2>धारण करने की विधि</h2>
<p><?php echo esc_html( $gem['name'] ); ?> रत्न धारण करने के लिए निम्न बातें ध्यान रखें:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em;">
<li><strong>धातु:</strong> <?php echo esc_html( $gem['metal'] ); ?> में जड़वाएँ</li>
<li><strong>उंगली:</strong> <?php echo esc_html( $gem['finger'] ); ?></li>
<li><strong>वज़न:</strong> <?php echo esc_html( $gem['weight'] ); ?></li>
<li><strong>दिन:</strong> <?php echo esc_html( $gem['day'] ); ?> के सूर्योदय के बाद शुभ मुहूर्त में</li>
<li><strong>मंत्र:</strong> <?php echo esc_html( $gem['mantra'] ); ?> — 108 बार जाप करें</li>
<li><strong>शुद्धि:</strong> रत्न को कच्चे दूध और गंगाजल से धोकर पहनें</li>
</ul>


<h2>संभावित लाभ</h2>
<p>पारंपरिक मान्यताओं के अनुसार <?php echo esc_html( $gem['name'] ); ?> रत्न धारण करने से <?php echo esc_html( $gem['graha'] ); ?> ग्रह से संबंधित जीवन के क्षेत्रों में सकारात्मक प्रभाव हो सकता है। यह कोई गारंटी नहीं है — बल्कि एक पारंपरिक विश्वास है जो सदियों से चला आ रहा है।</p>

<p>विशेष ध्यान दें — रत्न कोई दवाई नहीं है। स्वास्थ्य समस्याओं के लिए चिकित्सक से मिलें, आर्थिक समस्याओं के लिए वित्तीय सलाहकार से बात करें। रत्न को एक आध्यात्मिक और मनोवैज्ञानिक सहारे की तरह देखें — जादुई समाधान की तरह नहीं।</p>

<h2>सावधानियाँ</h2>
<p><?php echo esc_html( $gem['name'] ); ?> रत्न धारण करने से पहले इन बातों का विशेष ध्यान रखें:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em;">
<li>बिना कुंडली विश्लेषण के रत्न कभी न धारण करें</li>
<li>सस्ते या नकली रत्न से बचें — प्रमाणित रत्न विक्रेता से ही ख़रीदें</li>
<li>यदि रत्न पहनने के बाद 72 घंटों में अशुभ संकेत मिलें तो तुरंत उतारें</li>
<li><?php echo esc_html( $gem['graha'] ); ?> के शत्रु ग्रह का रत्न साथ में न पहनें</li>
<li>टूटा, फटा या खंडित रत्न कभी धारण न करें</li>
<li>किसी और का पहना हुआ रत्न अपने लिए उपयोग न करें</li>
</ul>

<h2>असली <?php echo esc_html( $gem['name'] ); ?> की पहचान</h2>
<p>बाज़ार में नकली रत्नों की बहुत अधिक भरमार है। असली <?php echo esc_html( $gem['name'] ); ?> की पहचान के लिए सरकार द्वारा मान्यता प्राप्त जेमोलॉजिकल प्रयोगशाला (जैसे GIA, IGI, या भारतीय GTL) से प्रमाणपत्र अवश्य लें। केवल विश्वसनीय और प्रतिष्ठित रत्न विक्रेता से ही ख़रीदारी करें।</p>

<h2>संबंधित जानकारी</h2>
<p>अधिक जानकारी के लिए ये पृष्ठ देखें:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em;">
<li><a href="<?php echo esc_url( home_url( '/navgraha/' ) ); ?>">नवग्रह — सभी ग्रहों की विस्तृत जानकारी</a></li>
<li><a href="<?php echo esc_url( home_url( '/kundli/' ) ); ?>">कुंडली — जन्म कुंडली और ग्रह स्थिति</a></li>
<li><a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">राशिफल — दैनिक भविष्यफल</a></li>
<li><a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">शुभ मुहूर्त — रत्न धारण का शुभ समय</a></li>
</ul>


<h2>अन्य नवग्रह रत्न</h2>
<div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(140px,1fr));gap:10px;margin-bottom:32px;">
<?php foreach ( $gems as $g_slug => $g ) :
    if ( $g_slug === $ratna_slug ) continue;
?>
<a href="<?php echo esc_url( home_url( '/ratna/' . $g_slug . '/' ) ); ?>" style="display:flex;flex-direction:column;align-items:center;padding:14px 8px;border:1px solid #eae4d8;border-radius:10px;text-align:center;transition:border-color .15s,box-shadow .15s;text-decoration:none;color:inherit;">
    <span style="font-size:1.3rem;color:<?php echo esc_attr( $g['color'] ); ?>;margin-bottom:4px;"><?php echo $g['icon']; ?></span>
    <strong style="font-size:.82rem;color:#1f2937;"><?php echo esc_html( $g['name'] ); ?></strong>
    <span style="font-size:.68rem;color:#6b7280;"><?php echo esc_html( $g['graha'] ); ?></span>
</a>
<?php endforeach; ?>
</div>

<h2>अक्सर पूछे जाने वाले प्रश्न</h2>

<div class="gr-faq">
<details class="gr-faq__item" open>
<summary class="gr-faq__q"><strong><?php echo esc_html( $gem['name'] ); ?> रत्न किसे पहनना चाहिए?</strong></summary>
<div class="gr-faq__a">जिनकी कुंडली में <?php echo esc_html( $gem['graha'] ); ?> लग्नेश, पंचमेश, नवमेश या दशमेश हो और कमज़ोर स्थिति में हो — उन्हें योग्य ज्योतिषाचार्य की सलाह पर यह रत्न धारण करना चाहिए। बिना कुंडली विश्लेषण के रत्न न पहनें।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong><?php echo esc_html( $gem['name'] ); ?> कितने दिनों में असर दिखाता है?</strong></summary>
<div class="gr-faq__a">पारंपरिक मान्यता के अनुसार रत्न का प्रभाव 30 से 45 दिनों में दिखना शुरू हो सकता है। लेकिन यह एक सामान्य विश्वास है — वैज्ञानिक रूप से इसकी पुष्टि नहीं है। यदि 72 घंटों में नकारात्मक अनुभव हो तो रत्न तुरंत उतार दें।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>क्या नकली <?php echo esc_html( $gem['name'] ); ?> भी काम करता है?</strong></summary>
<div class="gr-faq__a">ज्योतिष शास्त्र के अनुसार केवल प्राकृतिक और असली रत्न ही प्रभावी माने जाते हैं। कृत्रिम या सिंथेटिक रत्न ज्योतिषीय प्रयोजन के लिए उपयुक्त नहीं माने जाते। हमेशा प्रमाणित प्रयोगशाला से जाँच कराएँ।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong><?php echo esc_html( $gem['name'] ); ?> की क़ीमत कितनी होती है?</strong></summary>
<div class="gr-faq__a">क़ीमत गुणवत्ता, स्पष्टता, रंग और वज़न पर निर्भर करती है। बहुत सस्ता रत्न अक्सर नकली या उपचारित होता है। विश्वसनीय विक्रेता से प्रमाणपत्र सहित ख़रीदें और अत्यधिक सस्ते दामों के लालच में न पड़ें।</div>
</details>
</div>

</div>
</article>
</main>

<?php get_footer(); ?>
