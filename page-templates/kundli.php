<?php
/**
 * Virtual Page: कुंडली (Kundli / Birth Chart)
 * Full Hindi content about Kundli.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article">

<header class="gr-article__head">
    <h1 class="gr-article__title">कुंडली — जन्म कुंडली, भाव, ग्रह स्थिति की पूरी जानकारी</h1>
    <p class="gr-article__lede">कुंडली (Birth Chart / Natal Chart) आपके जन्म के समय आकाश में ग्रहों की स्थिति का एक map है। Vedic astrology में इसे "जन्मपत्री" भी कहते हैं। यहाँ कुंडली की basic structure और concepts समझाए गए हैं।</p>
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



<h2>कुंडली क्या होती है?</h2>
<p>जब आप पैदा हुए — उस exact moment पर सूर्य, चंद्रमा, और बाकी ग्रह आकाश में एक specific position पर थे। कुंडली इसी position का diagram है। 12 भावों (houses) में 9 ग्रहों की placement — ये है आपकी कुंडली।</p>

<p>ये एक snapshot है — frozen in time। ये change नहीं होती। लेकिन ग्रहों की current position (transit/gochar) बदलती रहती है, और उसे कुंडली के reference में देखा जाता है।</p>

<h2>कुंडली बनाने के लिए क्या चाहिए?</h2>
<p>तीन चीज़ें ज़रूरी हैं:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li><strong>जन्म तिथि</strong> (Date of Birth) — exact date</li>
<li><strong>जन्म समय</strong> (Time of Birth) — जितना accurate हो उतना अच्छा। 5 मिनट का difference भी लग्न बदल सकता है</li>
<li><strong>जन्म स्थान</strong> (Place of Birth) — longitude और latitude determine करने के लिए</li>
</ul>

<p>अगर जन्म समय नहीं पता तो कुंडली approximate बनती है। लग्न (ascendant) और चंद्रमा की position accurately determine नहीं हो पाती। ये एक common problem है — ख़ासकर older generations में birth time record करने का culture कम था।</p>

<h2>कुंडली के 12 भाव (Houses)</h2>
<p>कुंडली को 12 sections में बाँटा जाता है। हर section को "भाव" या "house" कहते हैं। हर भाव life के एक specific area से related है:</p>

<p><strong>1st भाव (लग्न)</strong> — आपका व्यक्तित्व, शारीरिक appearance, overall health, first impression।</p>
<p><strong>2nd भाव</strong> — धन, परिवार, speech, food habits, early education।</p>
<p><strong>3rd भाव</strong> — भाई-बहन, courage, short travels, communication skills।</p>
<p><strong>4th भाव</strong> — माता, घर, vehicle, emotional peace, basic education।</p>
<p><strong>5th भाव</strong> — संतान, romance, creativity, intelligence, speculation।</p>
<p><strong>6th भाव</strong> — शत्रु, रोग, debt, competition, daily work।</p>
<p><strong>7th भाव</strong> — विवाह, partnership, spouse, business partner।</p>
<p><strong>8th भाव</strong> — आयु, death, hidden things, inheritance, occult।</p>
<p><strong>9th भाव</strong> — भाग्य, पिता, long travels, higher education, dharma।</p>
<p><strong>10th भाव</strong> — कर्म, career, profession, fame, authority।</p>
<p><strong>11th भाव</strong> — लाभ, income, friends, elder siblings, aspirations।</p>
<p><strong>12th भाव</strong> — व्यय, losses, foreign lands, spirituality, sleep।</p>

<h2>9 ग्रह कुंडली में</h2>
<p>Vedic astrology 9 ग्रह use करती है (Uranus, Neptune, Pluto consider नहीं होते):</p>
<p>सूर्य, चंद्रमा, मंगल, बुध, बृहस्पति, शुक्र, शनि, राहु, केतु।</p>

<p>हर ग्रह जिस भाव में बैठता है — उस भाव के matters को influence करता है। ग्रह अच्छा result भी दे सकता है, challenging भी — ये depend करता है कि वो किस भाव में, किस राशि में, और किन ग्रहों के साथ/opposite है।</p>

<p>ज़्यादा detail के लिए <a href="<?php echo esc_url( home_url( '/navgraha/' ) ); ?>">नवग्रह</a> page देखें।</p>

<h2>लग्न (Ascendant) — सबसे important point</h2>
<p>लग्न वो राशि है जो आपके जन्म के समय पूर्वी horizon पर rise कर रही थी। ये हर 2 घंटे में बदलता है — इसलिए exact birth time इतना crucial है।</p>

<p>लग्न से पूरी कुंडली का structure decide होता है — कौन सा भाव कहाँ आएगा, कौन सा ग्रह कितना powerful होगा। दो लोग same date पर born हों लेकिन 3 घंटे अंतर पर — उनकी कुंडली बिल्कुल अलग हो सकती है।</p>

<h2>कुंडली मिलान (Kundli Matching)</h2>
<p>विवाह से पहले वर-वधू की कुंडली मिलाना भारत में बहुत common practice है। इसमें 36 "गुण" match किए जाते हैं (Ashtakoot system)। 18+ गुण match होने पर विवाह शुभ माना जाता है।</p>

<p>8 categories check होती हैं: वर्ण, वश्य, तारा, योनि, ग्रह मैत्री, गण, भकूट, नाड़ी।</p>

<p>Reality check — कुंडली मिलान एक traditional practice है। 36 में 36 गुण match हों तो भी successful marriage guarantee नहीं। और 18 से कम हों तो भी happy marriages होती हैं। Compatibility practical understanding, communication, और mutual respect पर depend करती है — सिर्फ कुंडली पर नहीं।</p>

<h2>दशा System — Timing of Events</h2>
<p>कुंडली static है, लेकिन life dynamic। "दशा" system बताता है कि किस time period में कौन सा ग्रह active है। Vimshottari Dasha सबसे popular system है — 120 years का cycle 9 ग्रहों में divide होता है।</p>

<p>जैसे अगर शनि दशा चल रही है — तो शनि से related themes (discipline, delays, hard work) ज़्यादा prominent होंगी। ये general framework है — exact results व्यक्ति की कुंडली पर depend करते हैं।</p>

<h2>क्या कुंडली से भविष्य पता चलता है?</h2>
<p>Honest perspective — कुंडली tendencies और patterns indicate करती है, exact events नहीं। "आपको 2026 में promotion मिलेगी" — ऐसी specific prediction reliable नहीं मानी जानी चाहिए।</p>

<p>"आपके career में growth period है" — ये broad trend indication acceptable है।</p>

<p>कुंडली को एक personality assessment और timing tool की तरह देखें — fortune-telling device की तरह नहीं।</p>

<h2>संबंधित जानकारी</h2>
<p>👉 <a href="<?php echo esc_url( home_url( '/navgraha/' ) ); ?>">नवग्रह</a> — 9 ग्रहों की विस्तृत जानकारी</p>
<p>👉 <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">राशिफल</a> — आज का दैनिक भविष्यफल</p>
<p>👉 <a href="<?php echo esc_url( home_url( '/numerology/' ) ); ?>">अंकज्योतिष</a> — numbers और planets का connection</p>
<p>👉 <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">शुभ मुहूर्त</a> — विवाह के लिए शुभ समय</p>

<h2>अक्सर पूछे जाने वाले सवाल</h2>

<div class="gr-faq">
<details class="gr-faq__item" open>
<summary class="gr-faq__q"><strong>जन्म समय नहीं पता — कुंडली बन सकती है?</strong></summary>
<div class="gr-faq__a">Approximate बन सकती है, लेकिन accuracy कम होगी। लग्न determine करने के लिए exact time ज़रूरी है। कुछ ज्योतिषी "प्रश्न कुंडली" (Horary) method use करते हैं जहाँ birth time ज़रूरी नहीं होता।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>कुंडली मिलान में 36 में कम गुण मिलें तो शादी नहीं करनी चाहिए?</strong></summary>
<div class="gr-faq__a">ऐसा ज़रूरी नहीं। गुण मिलान एक traditional reference है, absolute rule नहीं। कई experienced ज्योतिषी कहते हैं कि specific "दोष" (जैसे नाड़ी दोष) पर ध्यान दें, total score पर उतना नहीं। Final decision practical compatibility, family understanding, और mutual respect पर base करें।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>Online कुंडली software reliable हैं?</strong></summary>
<div class="gr-faq__a">Calculation accuracy के लिए — हाँ, reputable software (like Jagannatha Hora, Kundli Software) accurate planetary positions दिखाते हैं। लेकिन interpretation (ग्रह फल बताना) — इसमें human expertise ज़रूरी है। Software generic text generate करते हैं जो always accurate नहीं होता।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>कुंडली में "दोष" (मांगलिक, काल सर्प) कितने serious हैं?</strong></summary>
<div class="gr-faq__a">बहुत सी websites और ज्योतिषी दोषों को बहुत exaggerate करते हैं — पैसे कमाने के लिए। Reality में — मांगलिक दोष करीब 50% लोगों में होता है, काल सर्प योग भी common है। ये automatic "bad luck" नहीं है। Context, भाव, और overall कुंडली strength matter करती है।</div>
</details>
</div>

</div>
</article>
</main>

<?php get_footer(); ?>
