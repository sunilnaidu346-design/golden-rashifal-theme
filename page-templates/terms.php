<?php
/**
 * Virtual Page: नियम और शर्तें — Terms & Conditions
 * Trust page for AdSense compliance.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article">

<header class="gr-article__head">
    <h1 class="gr-article__title">नियम और शर्तें — Terms & Conditions</h1>
    <p class="gr-article__lede">Golden Rashifal (goldenrashifal.com / sipindustries.in) website का उपयोग करने से पहले कृपया ये नियम और शर्तें ध्यान से पढ़ें। website access करने का मतलब है कि आप इन शर्तों से सहमत हैं।</p>
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



<h2>1. स्वीकृति (Acceptance)</h2>
<p>इस website को access करके और इसका content पढ़कर आप इन Terms & Conditions को accept करते हैं। अगर आप किसी भी शर्त से असहमत हैं, तो कृपया website का उपयोग न करें।</p>

<p>हम समय-समय पर इन नियमों में बदलाव कर सकते हैं — बिना पूर्व सूचना के। Updated terms इसी page पर publish किए जाएँगे।</p>

<h2>2. Website का उद्देश्य</h2>
<p>Golden Rashifal एक informational website है। हम ज्योतिष, पंचांग, राशिफल, वास्तु, मुहूर्त, और हिंदू त्योहारों से related content provide करते हैं।</p>

<p>ये content educational और informational purpose के लिए है। ये किसी भी तरह की professional advice (medical, legal, financial) का विकल्प नहीं है।</p>

<h2>3. Content Disclaimer</h2>
<p>हमारी website पर दी गई जानकारी पारंपरिक ज्योतिष शास्त्र और हिंदू धर्म ग्रंथों पर आधारित है। हम:</p>

<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>किसी prediction या forecast की accuracy guarantee नहीं करते</li>
<li>किसी "उपाय" या remedy के result की ज़िम्मेदारी नहीं लेते</li>
<li>पंचांग data approximate है — exact values location, time zone, और calculation method पर depend करती हैं</li>
<li>राशिफल general guidance है, personalized prediction नहीं</li>
</ul>

<h2>4. Intellectual Property</h2>
<p>इस website पर सभी content — text, images, graphics, layout — Golden Rashifal की intellectual property है। बिना written permission के इसे copy, reproduce, या distribute करना prohibited है।</p>

<p>आप personal, non-commercial use के लिए content पढ़ और share कर सकते हैं (link share करके, copy-paste करके नहीं)।</p>

<h2>5. User Conduct</h2>
<p>Website use करते समय आपसे ये अपेक्षा है:</p>

<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>किसी भी automated tool (scraper, bot) से content copy न करें</li>
<li>Website की functionality को disrupt करने की कोशिश न करें</li>
<li>किसी offensive, hateful, या inappropriate content को comments या forms में submit न करें</li>
<li>किसी दूसरे person की identity impersonate न करें</li>
</ul>

<h2>6. Third-Party Links</h2>
<p>हमारी website पर कभी-कभी external websites के links हो सकते हैं। इन websites का content, privacy practices, या accuracy हमारी ज़िम्मेदारी नहीं है। External links follow करना आपकी अपनी choice है।</p>

<h2>7. Advertising</h2>
<p>हम Google AdSense और/या अन्य advertising networks के through ads display कर सकते हैं। ये ads third-party advertisers के हैं — उनके products या services की quality हमारी responsibility नहीं है।</p>

<p>Advertising revenue से ही ये website free content provide कर पाती है। Ad blockers use करना आपकी choice है, लेकिन ये हमारी revenue affect करता है।</p>

<h2>8. Limitation of Liability</h2>
<p>Golden Rashifal किसी भी direct, indirect, incidental, या consequential damage के लिए liable नहीं है जो इस website के content use करने से हो सकता है।</p>

<p>Specifically:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>ज्योतिष predictions पर based decisions से होने वाला कोई भी नुकसान</li>
<li>Incorrect timing data (राहुकाल, चौघड़िया) से कोई inconvenience</li>
<li>वास्तु या मुहूर्त suggestions follow करने के results</li>
<li>Website downtime या technical issues</li>
</ul>

<h2>9. Changes to Website</h2>
<p>हम कभी भी, बिना notice के:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>Website content modify कर सकते हैं</li>
<li>Features add या remove कर सकते हैं</li>
<li>Website temporarily या permanently बंद कर सकते हैं</li>
</ul>

<h2>10. Governing Law</h2>
<p>ये Terms & Conditions भारतीय कानून (Indian Law) के अधीन हैं। किसी भी dispute की स्थिति में भारत की courts jurisdiction रखेंगी।</p>

<h2>11. Contact</h2>
<p>इन Terms & Conditions से related कोई सवाल हो तो:</p>
<p>✉️ Email: contact@goldenrashifal.com</p>

<p><strong>Last Updated:</strong> January 2026</p>

<h2>संबंधित पेज</h2>
<p>📋 <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">गोपनीयता नीति (Privacy Policy)</a></p>
<p>⚖️ <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">अस्वीकरण (Disclaimer)</a></p>
<p>✏️ <a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">संपादकीय नीति (Editorial Policy)</a></p>
<p>🛡️ <a href="<?php echo esc_url( home_url( '/dmca/' ) ); ?>">DMCA नीति</a></p>
<p>📞 <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">संपर्क करें</a></p>

<h2>अक्सर पूछे जाने वाले सवाल</h2>

<div class="gr-faq">
<details class="gr-faq__item" open>
<summary class="gr-faq__q"><strong>क्या इस website का content free है?</strong></summary>
<div class="gr-faq__a">हाँ, सभी content free में पढ़ा जा सकता है। हमारी revenue advertising (ads) से आती है। कोई paid subscription या premium content नहीं है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>क्या मैं इस website का content अपने blog पर copy कर सकता हूँ?</strong></summary>
<div class="gr-faq__a">नहीं। Content copy करना copyright infringement है। आप link share कर सकते हैं, या कम शब्दों में (with proper attribution और link) reference दे सकते हैं। Full article copy करना prohibited है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>ज्योतिष predictions ग़लत निकलें तो?</strong></summary>
<div class="gr-faq__a">हमारा content informational है, guaranteed prediction नहीं। राशिफल general trends दिखाता है — specific results की guarantee कोई नहीं दे सकता। Important decisions में professional advice लें, सिर्फ राशिफल पर depend न करें।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>ये Terms कब update हुई हैं?</strong></summary>
<div class="gr-faq__a">ये Terms January 2026 में last update हुई हैं। हम ज़रूरत पड़ने पर बिना notice के changes कर सकते हैं। Regular basis पर इस page को check करते रहें।</div>
</details>
</div>

</div>
</article>
</main>

<?php get_footer(); ?>
