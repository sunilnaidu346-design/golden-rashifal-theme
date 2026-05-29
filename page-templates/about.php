<?php
/**
 * Virtual Page: About Us — हमारे बारे में
 * Trust-building page for AdSense approval. E-E-A-T focused.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article">

<header class="gr-article__head">
    <h1 class="gr-article__title">हमारे बारे में — Golden Rashifal</h1>
    <p class="gr-article__lede">Golden Rashifal एक हिंदी ज्योतिष जानकारी पोर्टल है। हम पंचांग, चौघड़िया, राहुकाल, शुभ मुहूर्त, राशिफल और हिंदू त्योहारों की जानकारी सरल भाषा में देते हैं — बिना किसी अतिशयोक्ति या भय-आधारित दावों के।</p>
</header>

<div class="gr-article__body">

    <?php
    /*
     * WordPress Editor Content — shown immediately when this page is edited
     * from WP Admin → Pages → Edit. Add your own content there and it will
     * appear here, above the default fallback text below.
     */
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            $editor_content = get_the_content();
            if ( ! empty( trim( $editor_content ) ) ) {
                the_content();
                echo '<hr class="gr-content-divider" />';
            }
        }
        rewind_posts();
    }
    ?>

<h2>Golden Rashifal क्या है?</h2>
<p>हम एक informational website हैं। हमारा काम है — भारतीय पारंपरिक ज्ञान (पंचांग, ज्योतिष, मुहूर्त, व्रत-त्योहार) को सही, संतुलित और आसान भाषा में पाठकों तक पहुँचाना।</p>

<p>बहुत सी websites पर ज्योतिष content या तो बहुत complicated होता है या फिर डराने वाला। "ये करो नहीं तो बुरा होगा" — इस तरह की भाषा हमें पसंद नहीं। हम मानते हैं कि पारंपरिक जानकारी को respectful और balanced तरीके से present किया जा सकता है।</p>

<h2>हम क्या-क्या cover करते हैं?</h2>

<p><strong>दैनिक पंचांग</strong> — तिथि, नक्षत्र, योग, करण, सूर्योदय-सूर्यास्त। रोज़ ताज़ा data।</p>
<p><strong>चौघड़िया</strong> — दिन और रात के शुभ-अशुभ समय का सरल चार्ट।</p>
<p><strong>राहुकाल</strong> — आज का राहुकाल समय और उसकी पारंपरिक समझ।</p>
<p><strong>शुभ मुहूर्त</strong> — विवाह, गृह प्रवेश, नामकरण, मुंडन जैसे संस्कारों के लिए reference information।</p>
<p><strong>राशिफल</strong> — दैनिक, साप्ताहिक और मासिक राशिफल। 12 राशियों के लिए।</p>
<p><strong>त्योहार कैलेंडर</strong> — प्रमुख हिंदू पर्वों की तिथि, महत्व और सामान्य जानकारी।</p>
<p><strong>वास्तु टिप्स</strong> — घर और workspace के लिए पारंपरिक सुझाव।</p>
<p><strong>अंकज्योतिष</strong> — मूलांक, भाग्यांक की बुनियादी जानकारी।</p>

<h2>हमारा approach क्या है?</h2>
<p>तीन शब्दों में: <strong>सटीक, संतुलित, सरल।</strong></p>

<p><strong>सटीक</strong> — पंचांग data astronomical calculations पर based है। हम verified sources और standard algorithms का इस्तेमाल करते हैं। Sunrise-sunset timings location-based variations को ध्यान में रखकर approximate रूप में दी जाती हैं।</p>

<p><strong>संतुलित</strong> — हम कोई "guarantee" नहीं देते। "ये करने से 100% सफलता मिलेगी" — ऐसा हम कभी नहीं लिखते। हम traditional beliefs को respect करते हैं, लेकिन उन्हें facts की तरह present नहीं करते। "पारंपरिक रूप से माना जाता है" — ये हमारी भाषा है।</p>

<p><strong>सरल</strong> — Sanskrit शब्दों और technical jargon को बिना simplify किए छोड़ देना हमें स्वीकार नहीं। हम चाहते हैं कि एक 18 साल का student भी, और 60 साल के बुज़ुर्ग भी — दोनों आसानी से समझ सकें।</p>

<h2>हम कौन हैं?</h2>
<p>Golden Rashifal की team में content writers, researchers, और web developers हैं। हम सब भारत में based हैं। हमारे content writers को हिंदी ज्योतिष साहित्य की अच्छी समझ है, लेकिन हम किसी को "ज्योतिषाचार्य" होने का दावा नहीं करते।</p>

<p>हम journalists और content creators हैं जो traditional knowledge को accessible format में present करते हैं। कोई personal consultation, paid prediction, या "उपाय बताने" की service हम नहीं देते।</p>

<h2>हम क्या नहीं हैं?</h2>
<p>ये बात clear करना ज़रूरी है:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>हम कोई ज्योतिष consultation service नहीं हैं</li>
<li>हम paid predictions नहीं बेचते</li>
<li>हम "गारंटीड उपाय" नहीं देते</li>
<li>हम medical, legal, या financial advice का विकल्प नहीं हैं</li>
<li>हम किसी अंधविश्वास को promote नहीं करते</li>
</ul>

<p>हमारा content purely informational है। Traditional knowledge का documentation — बस इतना।</p>

<h2>हमारी content policy</h2>
<p>हर article publish करने से पहले हम ये check करते हैं:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>क्या information factually correct है?</li>
<li>क्या भाषा balanced और respectful है?</li>
<li>क्या कोई misleading claim तो नहीं है?</li>
<li>क्या reader को practical value मिल रही है?</li>
<li>क्या content family-safe और culturally sensitive है?</li>
</ul>

<p>अगर कोई article इन criteria को pass नहीं करता, तो हम उसे publish नहीं करते — चाहे SEO के लिए कितना भी "अच्छा" topic हो।</p>

<h2>संपर्क जानकारी</h2>
<p>कोई सुझाव, correction, या feedback हो तो हमें लिखें:</p>
<p>✉️ <strong>Email:</strong> contact@goldenrashifal.com</p>
<p>📍 <strong>Location:</strong> India</p>
<p>🌐 <strong>Website:</strong> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">sipindustries.in</a></p>

<p>हम सभी genuine emails का जवाब देने की कोशिश करते हैं। Response time: 2-5 working days।</p>

<h2>इस website को और बेहतर बनाने में मदद करें</h2>
<p>अगर आपको कोई गलत information दिखे, कोई broken link मिले, या कोई सुझाव हो — तो ज़रूर बताएं। Reader feedback हमारे लिए बहुत valuable है। हम continuously improve करते रहते हैं।</p>

<h2>अन्य महत्वपूर्ण पेज</h2>
<p>📋 <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">गोपनीयता नीति (Privacy Policy)</a></p>
<p>⚖️ <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">अस्वीकरण (Disclaimer)</a></p>
<p>📜 <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">नियम और शर्तें (Terms & Conditions)</a></p>
<p>✏️ <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">संपादकीय नीति (Editorial Policy)</a></p>
<p>📞 <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">संपर्क करें (Contact Us)</a></p>

<h2>अक्सर पूछे जाने वाले सवाल</h2>

<div class="gr-faq">
<details class="gr-faq__item" open>
<summary class="gr-faq__q"><strong>Golden Rashifal कब शुरू हुआ?</strong></summary>
<div class="gr-faq__a">Golden Rashifal 2024 में शुरू किया गया। हमारा मकसद है — हिंदी में quality ज्योतिष content provide करना जो balanced, accessible और mobile-friendly हो।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>क्या आप paid astrology consultation देते हैं?</strong></summary>
<div class="gr-faq__a">नहीं। हम सिर्फ informational content publish करते हैं। किसी भी personal ज्योतिषीय सलाह के लिए आप किसी qualified ज्योतिषाचार्य से संपर्क करें।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>पंचांग data कहाँ से लिया जाता है?</strong></summary>
<div class="gr-faq__a">हम standard astronomical calculations और established पंचांग algorithms का इस्तेमाल करते हैं। Sunrise-sunset data approximate है और North India (Delhi region) के coordinates पर based है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>Content में कोई गलती हो तो क्या करें?</strong></summary>
<div class="gr-faq__a">हमें तुरंत email करें: contact@goldenrashifal.com। हम 48 घंटे के अंदर correction करने की कोशिश करते हैं। Reader feedback हमारे लिए बहुत important है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>क्या ये website Google AdSense approved है?</strong></summary>
<div class="gr-faq__a">हम Google की content policies का पूरा पालन करते हैं। हमारा content original, informational, और user-friendly है। AdSense status website पर ads दिखने/न दिखने से confirm किया जा सकता है।</div>
</details>
</div>

</div>
</article>
</main>

<?php get_footer(); ?>
