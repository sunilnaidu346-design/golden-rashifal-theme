<?php
/**
 * Virtual Page: नवग्रह
 * Full Hindi content about 9 planets and their effects.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article">

<header class="gr-article__head">
    <h1 class="gr-article__title">नवग्रह — 9 ग्रहों का प्रभाव, वार और स्वभाव</h1>
    <p class="gr-article__lede">Vedic astrology में 9 ग्रह (नवग्रह) मानव जीवन को प्रभावित करते हैं — ऐसी पारंपरिक मान्यता है। सूर्य, चंद्रमा, मंगल, बुध, बृहस्पति, शुक्र, शनि, राहु, और केतु — इन सभी की जानकारी यहाँ दी गई है।</p>
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



<h2>नवग्रह कौन-कौन से हैं?</h2>
<p>Vedic astrology में 9 celestial bodies consider किए जाते हैं। ध्यान दें — ये modern astronomy से अलग है। यहाँ "ग्रह" का मतलब planet नहीं बल्कि "influencing body" है। सूर्य एक star है, चंद्रमा satellite है, राहु-केतु mathematical points हैं — लेकिन ज्योतिष में सबको "ग्रह" कहा जाता है।</p>

<h2>☀️ सूर्य (Sun)</h2>
<p><strong>स्वामित्व:</strong> सिंह राशि | <strong>वार:</strong> रविवार | <strong>रत्न:</strong> माणिक्य (Ruby) | <strong>धातु:</strong> सोना</p>

<p>सूर्य को ग्रहों का राजा माना जाता है। ये आत्मा, पिता, authority, government, और health का कारक है। Strong Sun वाले लोगों में confidence, leadership, और self-respect अच्छा होता है।</p>

<p>Weak Sun — low confidence, health issues (ख़ासकर heart और eyes), पिता से कम support। ये general indications हैं, हर case में apply हों ज़रूरी नहीं।</p>

<h2>🌙 चंद्रमा (Moon)</h2>
<p><strong>स्वामित्व:</strong> कर्क राशि | <strong>वार:</strong> सोमवार | <strong>रत्न:</strong> मोती (Pearl) | <strong>धातु:</strong> चाँदी</p>

<p>चंद्रमा मन, भावनाओं, माता, और mental peace का कारक है। Vedic astrology में चंद्रमा बहुत important है — चंद्र राशि (moon sign) ही आपकी primary राशि मानी जाती है।</p>

<p>Strong Moon — emotional stability, good relationship with mother, creative mind। Weak Moon — anxiety, mood swings, mental restlessness। चंद्रमा सबसे fast-moving ग्रह है — हर 2.25 दिन में राशि बदलता है।</p>

<h2>♂️ मंगल (Mars)</h2>
<p><strong>स्वामित्व:</strong> मेष और वृश्चिक | <strong>वार:</strong> मंगलवार | <strong>रत्न:</strong> मूँगा (Red Coral) | <strong>धातु:</strong> ताँबा</p>

<p>मंगल energy, courage, aggression, और property का कारक है। ये "सेनापति" है — action और warfare। Strong Mars — physical strength, courage, property gains। Weak Mars — anger issues, accidents prone, blood-related problems।</p>

<p>"मांगलिक दोष" — 1st, 4th, 7th, 8th, या 12th भाव में मंगल हो तो कहा जाता है। करीब 50% लोगों में ये combination होता है — इसलिए इसे ज़रूरत से ज़्यादा serious न लें।</p>

<h2>☿ बुध (Mercury)</h2>
<p><strong>स्वामित्व:</strong> मिथुन और कन्या | <strong>वार:</strong> बुधवार | <strong>रत्न:</strong> पन्ना (Emerald) | <strong>धातु:</strong> पीतल</p>

<p>बुध intelligence, communication, business, और education का कारक है। ये "राजकुमार" है — young, versatile, adaptable। Strong Mercury — sharp mind, good speech, business acumen। Weak Mercury — speech problems, nervous disorders, learning difficulties।</p>

<p>बुध सूर्य के सबसे करीब रहता है, इसलिए अक्सर "अस्त" (combust) होता है। Retrograde बुध (बुध वक्री) — communication और technology में disruptions indicate करता है — ऐसी मान्यता है।</p>

<h2>♃ बृहस्पति (Jupiter)</h2>
<p><strong>स्वामित्व:</strong> धनु और मीन | <strong>वार:</strong> गुरुवार | <strong>रत्न:</strong> पुखराज (Yellow Sapphire) | <strong>धातु:</strong> सोना</p>

<p>बृहस्पति (गुरु) wisdom, knowledge, spirituality, और prosperity का कारक है। "देवगुरु" — सबसे शुभ ग्रह माना जाता है। Strong Jupiter — good education, wisdom, prosperity, children। Weak Jupiter — financial issues, lack of faith, educational obstacles।</p>

<p>Jupiter करीब 1 साल एक राशि में रहता है। इसकी transit बड़े life changes indicate करती है।</p>

<h2>♀ शुक्र (Venus)</h2>
<p><strong>स्वामित्व:</strong> वृषभ और तुला | <strong>वार:</strong> शुक्रवार | <strong>रत्न:</strong> हीरा (Diamond) | <strong>धातु:</strong> चाँदी</p>

<p>शुक्र love, marriage, luxury, art, और beauty का कारक है। "दैत्यगुरु" — asuras के guru। Strong Venus — happy married life, financial comfort, artistic talent। Weak Venus — relationship problems, lack of comfort, kidney issues।</p>

<h2>♄ शनि (Saturn)</h2>
<p><strong>स्वामित्व:</strong> मकर और कुंभ | <strong>वार:</strong> शनिवार | <strong>रत्न:</strong> नीलम (Blue Sapphire) | <strong>धातु:</strong> लोहा</p>

<p>शनि discipline, karma, hard work, delays, और justice का कारक है। सबसे feared planet — लेकिन unfairly। शनि "बुरा" नहीं है — ये "strict teacher" है। Rewards देता है, but only after hard work।</p>

<p>"साढ़ेसाती" — शनि की transit जब आपकी चंद्र राशि से 12वीं, 1st, और 2nd राशि से गुज़रती है (करीब 7.5 years)। ये period challenging माना जाता है, but not necessarily bad। Personal growth भी इसी period में होती है।</p>

<h2>☊ राहु (North Node)</h2>
<p><strong>कोई राशि स्वामित्व नहीं</strong> (कुछ texts में कुंभ) | <strong>रत्न:</strong> गोमेद (Hessonite)</p>

<p>राहु छाया ग्रह है — physically exist नहीं करता। ये चंद्रमा की orbit और ecliptic के intersection का North point है। राहु obsession, illusion, foreign lands, और unconventional paths indicate करता है।</p>

<p>Strong Rahu — success in foreign lands, unconventional career, technology। Weak Rahu — confusion, addiction tendency, obsessive behavior। <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">राहुकाल</a> इसी ग्रह से related है।</p>

<h2>☋ केतु (South Node)</h2>
<p><strong>कोई राशि स्वामित्व नहीं</strong> (कुछ texts में वृश्चिक) | <strong>रत्न:</strong> लहसुनिया (Cat's Eye)</p>

<p>केतु भी छाया ग्रह है — राहु का opposite point। Spirituality, detachment, moksha, और past-life karma indicate करता है।</p>

<p>Strong Ketu — spiritual growth, intuition, research ability। Weak Ketu — confusion, lack of direction, mysterious health issues।</p>

<h2>ग्रह और उनकी मित्रता</h2>
<p>हर ग्रह के दूसरे ग्रहों के साथ friend, enemy, या neutral relationship है। जैसे:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>सूर्य और चंद्रमा — मित्र</li>
<li>सूर्य और शनि — शत्रु</li>
<li>बृहस्पति और शुक्र — शत्रु</li>
<li>बुध — किसी के साथ हो उसका friend बन जाता है</li>
</ul>

<p>ये relationships कुंडली interpretation में important role play करती हैं।</p>

<h2>संबंधित जानकारी</h2>
<p>👉 <a href="<?php echo esc_url( home_url( '/kundli/' ) ); ?>">कुंडली</a> — जन्म कुंडली और भाव system</p>
<p>👉 <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">राशिफल</a> — दैनिक भविष्यफल</p>
<p>👉 <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">राहुकाल</a> — राहु ग्रह का दैनिक प्रभाव</p>
<p>👉 <a href="<?php echo esc_url( home_url( '/numerology/' ) ); ?>">अंकज्योतिष</a> — ग्रह और numbers का connection</p>
<p>👉 <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">आज का पंचांग</a> — daily celestial data</p>

<h2>अक्सर पूछे जाने वाले सवाल</h2>

<div class="gr-faq">
<details class="gr-faq__item" open>
<summary class="gr-faq__q"><strong>सबसे शुभ ग्रह कौन सा है?</strong></summary>
<div class="gr-faq__a">Generally बृहस्पति (Jupiter) को सबसे शुभ माना जाता है। शुक्र और बुध भी benefic (शुभ) category में आते हैं। लेकिन ये universal नहीं — किसी specific कुंडली में शुभ ग्रह भी challenging results दे सकता है, depending on placement।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>शनि really इतना बुरा है?</strong></summary>
<div class="gr-faq__a">नहीं। शनि का reputation exaggerated है — mainly fear-based astrology की वजह से। शनि discipline, justice, और hard work represent करता है। अगर आप honest और hardworking हैं, तो शनि reward भी करता है। "साढ़ेसाती" automatically bad नहीं होती — कई लोगों को career growth इसी period में मिली है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>राहु और केतु ग्रह physically exist करते हैं?</strong></summary>
<div class="gr-faq__a">नहीं। ये mathematical points हैं — चंद्रमा की orbit और Earth की orbit (ecliptic) जहाँ intersect करती हैं, वो दो points राहु और केतु हैं। Solar और Lunar eclipses इन्हीं points के पास होती हैं। Ancient astronomers ने इन points को personify किया।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>ग्रह शांति के लिए gemstone पहनना ज़रूरी है?</strong></summary>
<div class="gr-faq__a">ज़रूरी नहीं। Gemstone recommendation एक commercial industry बन गई है। Without proper analysis, wrong gemstone पहनना harmful भी हो सकता है — ऐसा कई ज्योतिषी कहते हैं। अगर पहनना है तो किसी experienced ज्योतिषी की advice से, trial period के साथ।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>Vedic astrology में Uranus, Neptune, Pluto count नहीं होते?</strong></summary>
<div class="gr-faq__a">Traditional Vedic astrology में नहीं — क्योंकि ये planets ancient times में naked eye से visible नहीं थे। कुछ modern Vedic astrologers इन्हें consider करने लगे हैं, लेकिन classical system 9 ग्रहों तक limited है।</div>
</details>
</div>

</div>
</article>
</main>

<?php get_footer(); ?>
