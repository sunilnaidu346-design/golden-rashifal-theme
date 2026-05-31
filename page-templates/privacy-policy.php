<?php
/**
 * Page Template: गोपनीयता नीति — Privacy Policy
 * Template Name: Privacy Policy
 * @package GoldenRashifal
 */
get_header();
$updated = wp_date( 'd F Y' );
?>
<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article" itemscope itemtype="https://schema.org/WebPage">

<header class="gr-article__head">
    <div class="gr-legal-badge">🔒 <?php esc_html_e( 'गोपनीयता नीति', 'golden-rashifal' ); ?></div>
    <h1 class="gr-article__title" itemprop="name"><?php esc_html_e( 'गोपनीयता नीति', 'golden-rashifal' ); ?></h1>
    <p class="gr-article__lede"><?php esc_html_e( 'Golden Rashifal पर आपकी गोपनीयता हमारी प्राथमिकता है। यह नीति स्पष्ट करती है कि हम कौन सी जानकारी एकत्र करते हैं, उसका उपयोग किस प्रकार होता है, और आपके अधिकार क्या हैं।', 'golden-rashifal' ); ?></p>
    <p class="gr-legal-meta">
        <strong><?php esc_html_e( 'वेबसाइट:', 'golden-rashifal' ); ?></strong> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">goldenrashifal.in</a> &nbsp;|&nbsp;
        <strong><?php esc_html_e( 'अंतिम अद्यतन:', 'golden-rashifal' ); ?></strong> <?php echo esc_html( $updated ); ?>
    </p>
</header>

<div class="gr-article__body">
<?php
if ( have_posts() ) { while ( have_posts() ) { the_post();
    $ec = get_the_content();
    if ( ! empty( trim( $ec ) ) ) { the_content(); echo '<hr class="gr-content-divider" />'; }
} rewind_posts(); }
?>

<h2>१. हमारे बारे में</h2>
<p>Golden Rashifal (goldenrashifal.in) एक हिंदी ज्योतिष सूचना पोर्टल है जो दैनिक राशिफल, पंचांग, चौघड़िया, राहुकाल, शुभ मुहूर्त, एकादशी, पूर्णिमा और हिंदू त्योहारों की जानकारी प्रदान करता है। इस वेबसाइट के सह-संस्थापक एवं संपादक Vedansh Vallabh हैं।</p>
<p>संपर्क ईमेल: <a href="mailto:<?php echo esc_attr( GR_AUTHOR_EMAIL ); ?>"><?php echo esc_html( GR_AUTHOR_EMAIL ); ?></a></p>

<h2>२. कौन सी जानकारी एकत्र होती है?</h2>

<h3>स्वत: एकत्र होने वाली तकनीकी जानकारी</h3>
<p>जब आप इस वेबसाइट पर आते हैं, तो कुछ सामान्य तकनीकी जानकारी स्वत: दर्ज होती है जैसे — आपके उपकरण का प्रकार (मोबाइल, टैबलेट, कंप्यूटर), ब्राउज़र का नाम, अनुमानित स्थान, देखे गए पृष्ठ और उन पर बिताया गया समय। यह जानकारी व्यक्तिगत पहचान से नहीं जुड़ी होती।</p>

<h3>संपर्क प्रपत्र की जानकारी</h3>
<p>यदि आप हमारे संपर्क पृष्ठ से संदेश भेजते हैं, तो आपका नाम, ईमेल पता और संदेश हमें प्राप्त होता है। इसका उपयोग केवल आपके संदेश का उत्तर देने के लिए किया जाता है। यह जानकारी किसी तृतीय पक्ष के साथ साझा नहीं की जाती।</p>

<h3>टिप्पणी प्रणाली</h3>
<p>यदि आप किसी लेख पर टिप्पणी करते हैं तो आपका नाम, ईमेल और टिप्पणी सहेजी जाती है। ईमेल सार्वजनिक नहीं किया जाता — केवल अनुमोदन प्रक्रिया के लिए उपयोग होता है।</p>

<h2>३. कुकी (Cookie) का उपयोग</h2>
<p>कुकी एक छोटी सी डिजिटल फ़ाइल होती है जो ब्राउज़र में सहेजी जाती है। हम निम्नलिखित प्रकार की कुकी उपयोग करते हैं:</p>
<ul>
    <li><strong>आवश्यक कुकी</strong> — वेबसाइट के सही संचालन के लिए अनिवार्य।</li>
    <li><strong>विश्लेषण कुकी</strong> — यह समझने के लिए कि कौन से पृष्ठ अधिक देखे जाते हैं (Google Analytics)।</li>
    <li><strong>विज्ञापन कुकी</strong> — आपकी रुचि के अनुसार विज्ञापन दिखाने के लिए जो विज्ञापन नेटवर्क उपयोग करता है।</li>
</ul>
<p>आप अपने ब्राउज़र की सेटिंग में जाकर कुकी बंद कर सकते हैं। ध्यान रखें कि कुछ सुविधाएँ उसके बाद ठीक से काम नहीं कर सकतीं।</p>

<h2>४. Google Analytics और विश्लेषण सेवाएँ</h2>
<p>हम Google Analytics का उपयोग वेबसाइट के आगंतुकों की संख्या और व्यवहार समझने के लिए करते हैं — जैसे कौन से राशिफल, पंचांग या मुहूर्त पृष्ठ सबसे अधिक पढ़े जाते हैं। यह सेवा Google LLC द्वारा संचालित है। इसमें कोई व्यक्तिगत पहचान योग्य जानकारी एकत्र नहीं होती।</p>
<p>Google Analytics से बाहर निकलें: <a href="https://tools.google.com/dlpage/gaoptout" rel="noopener nofollow" target="_blank">tools.google.com/dlpage/gaoptout</a></p>

<h2>५. विज्ञापन सेवाएँ</h2>
<p>यह वेबसाइट विज्ञापन नेटवर्क के माध्यम से विज्ञापन दिखाती है। ये विज्ञापन कभी-कभी आपकी पिछली ब्राउज़िंग रुचि के आधार पर हो सकते हैं। इसके लिए एक छोटी कुकी का उपयोग होता है।</p>
<p>यदि आप व्यक्तिगत विज्ञापन नहीं देखना चाहते, तो ब्राउज़र सेटिंग में कुकी बंद करें।</p>

<h2>६. तृतीय पक्ष सेवाएँ</h2>
<p>इस वेबसाइट पर बाहरी पृष्ठों के लिंक हो सकते हैं। उन वेबसाइटों की गोपनीयता नीतियाँ भिन्न हो सकती हैं और उनके लिए हम उत्तरदायी नहीं हैं। किसी बाहरी लिंक पर जाने से पहले उस साइट की नीति स्वयं पढ़ें।</p>

<h2>७. आपकी जानकारी की सुरक्षा</h2>
<p>हम SSL एन्क्रिप्शन (HTTPS), नियमित सुरक्षा अद्यतन और सीमित प्रशासनिक पहुँच के माध्यम से डेटा सुरक्षा बनाए रखते हैं। हम आपकी जानकारी किसी को बेचते या किराए पर नहीं देते।</p>

<h2>८. आपके अधिकार</h2>
<p>आपके पास ये अधिकार हैं:</p>
<ul>
    <li><strong>जानने का अधिकार</strong> — हमारे पास आपकी कौन सी जानकारी है।</li>
    <li><strong>हटाने का अनुरोध</strong> — हमारे पास जमा जानकारी हटवाने का अनुरोध।</li>
    <li><strong>विज्ञापन प्राथमिकताएँ</strong> — Google के माध्यम से व्यक्तिगत विज्ञापन नियंत्रित करना।</li>
    <li><strong>शिकायत</strong> — किसी चिंता के लिए <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">संपर्क पृष्ठ</a> पर आएँ।</li>
</ul>

<h2>९. नाबालिगों की गोपनीयता</h2>
<p>यह वेबसाइट 13 वर्ष से कम आयु के बच्चों से कोई जानकारी जानबूझकर एकत्र नहीं करती। यदि आपको लगता है कि किसी बच्चे की जानकारी हमारे पास आ गई है, तो कृपया हमसे संपर्क करें — हम तुरंत कार्रवाई करेंगे।</p>

<h2>१०. नीति में परिवर्तन</h2>
<p>हम आवश्यकता पड़ने पर इस गोपनीयता नीति को अद्यतन कर सकते हैं। प्रत्येक परिवर्तन के बाद इस पृष्ठ पर "अंतिम अद्यतन" तिथि बदल जाएगी। नियमित पाठकों को सलाह है कि समय-समय पर इस पृष्ठ को देखते रहें।</p>

<h2>११. संपर्क</h2>
<p>गोपनीयता संबंधी किसी भी प्रश्न या अनुरोध के लिए:</p>
<p>📧 <strong>ईमेल:</strong> <a href="mailto:<?php echo esc_attr( GR_AUTHOR_EMAIL ); ?>"><?php echo esc_html( GR_AUTHOR_EMAIL ); ?></a></p>
<p>📞 <strong>फ़ोन:</strong> <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', GR_AUTHOR_PHONE ) ); ?>"><?php echo esc_html( GR_AUTHOR_PHONE ); ?></a></p>
<p>📍 <strong>पता:</strong> D-9 A/1, Indira Colony, Sector 52, Gurugram, Haryana 122003, India</p>

<div class="gr-legal-links">
    <strong><?php esc_html_e( 'संबंधित नीतियाँ:', 'golden-rashifal' ); ?></strong>
    <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">⚖️ <?php esc_html_e( 'अस्वीकरण', 'golden-rashifal' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">📜 <?php esc_html_e( 'नियम एवं शर्तें', 'golden-rashifal' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">✏️ <?php esc_html_e( 'संपादकीय नीति', 'golden-rashifal' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">📞 <?php esc_html_e( 'संपर्क करें', 'golden-rashifal' ); ?></a>
</div>

</div>
</article>
</main>
<?php get_footer(); ?>
