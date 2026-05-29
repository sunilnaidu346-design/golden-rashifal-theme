<?php
/**
 * Virtual Page: Privacy Policy — गोपनीयता नीति
 * Required for AdSense approval. Bilingual (Hindi + English terms).
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article">

<header class="gr-article__head">
    <h1 class="gr-article__title">गोपनीयता नीति — Privacy Policy</h1>
    <p class="gr-article__lede">Golden Rashifal (sipindustries.in) पर आपकी privacy हमारे लिए महत्वपूर्ण है। ये page बताता है कि हम आपकी information कैसे collect, use और protect करते हैं।</p>
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



<p><strong>Last Updated:</strong> <?php echo esc_html( wp_date( 'F Y' ) ); ?></p>
<p><strong>Website:</strong> <?php echo esc_url( home_url( '/' ) ); ?></p>

<h2>हम कौन सी information collect करते हैं?</h2>

<h3>Automatically collected data</h3>
<p>जब आप हमारी website visit करते हैं, तो कुछ information automatically collect होती है:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>IP Address (approximate location identify करने के लिए)</li>
<li>Browser type और version</li>
<li>Operating system</li>
<li>Pages visited और time spent</li>
<li>Referring website (आप कहाँ से आए)</li>
<li>Device type (mobile/desktop/tablet)</li>
</ul>

<h3>Cookies</h3>
<p>हमारी website cookies use करती है। Cookies छोटी text files हैं जो आपके browser में store होती हैं। ये website को properly function करने और user experience improve करने में help करती हैं।</p>

<p>हम ये cookies use करते हैं:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li><strong>Essential cookies</strong> — website ठीक से चलाने के लिए ज़रूरी</li>
<li><strong>Analytics cookies</strong> — traffic patterns समझने के लिए (Google Analytics)</li>
<li><strong>Advertising cookies</strong> — relevant ads दिखाने के लिए (Google AdSense)</li>
</ul>

<h3>Personal information</h3>
<p>हम deliberately कोई personal information collect नहीं करते। हमारी website पर कोई registration, login, या account creation feature नहीं है।</p>
<p>अगर आप हमें email करते हैं, तो आपका email address और message content हमारे पास रहता है — सिर्फ reply देने के purpose से।</p>

<h2>Google AdSense और Third-Party Advertising</h2>
<p>हम Google AdSense use करते हैं जो third-party advertising service है। Google और उसके partners:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>Cookies use करके ads personalize कर सकते हैं</li>
<li>आपकी पिछली visits के based पर relevant ads दिखा सकते हैं</li>
<li>DoubleClick cookie use करते हैं</li>
</ul>
<p>आप Google Ad Settings (<a href="https://adssettings.google.com/" rel="noopener nofollow" target="_blank">adssettings.google.com</a>) पर जाकर personalized advertising opt-out कर सकते हैं।</p>

<h2>Google Analytics</h2>
<p>हम Google Analytics use करते हैं website traffic analyze करने के लिए। ये service Google Inc. द्वारा provide की जाती है। Google Analytics cookies use करके visitor behavior track करती है, लेकिन personally identifiable information collect नहीं करती।</p>
<p>Google Analytics opt-out: <a href="https://tools.google.com/dlpage/gaoptout" rel="noopener nofollow" target="_blank">tools.google.com/dlpage/gaoptout</a></p>

<h2>Data कैसे use होता है?</h2>
<p>Collected data का use:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>Website improve करने के लिए (कौन से pages popular हैं, कहाँ users drop करते हैं)</li>
<li>Technical issues identify और fix करने के लिए</li>
<li>Content strategy plan करने के लिए</li>
<li>Advertising revenue generate करने के लिए (Google AdSense through)</li>
</ul>
<p>हम आपका data किसी third party को sell नहीं करते। कभी नहीं।</p>

<h2>Data Security</h2>
<p>हम standard security measures follow करते हैं:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>SSL/HTTPS encryption — सारा data encrypted travel करता है</li>
<li>Regular security updates</li>
<li>Limited access — सिर्फ authorized team members को admin access</li>
</ul>
<p>लेकिन ईमानदारी से — internet पर 100% security guarantee करना किसी के लिए possible नहीं है। हम best practices follow करते हैं।</p>

<h2>Children's Privacy</h2>
<p>हमारी website specifically 13 साल से कम उम्र के बच्चों को target नहीं करती। हम जानबूझकर minors से personal information collect नहीं करते।</p>

<h2>External Links</h2>
<p>हमारी website पर कभी-कभी external websites के links हो सकते हैं। उन websites की privacy practices हमारे control में नहीं हैं। External link click करने से पहले उस website की privacy policy ज़रूर पढ़ें।</p>

<h2>आपके अधिकार (Your Rights)</h2>
<p>आपके पास ये rights हैं:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>जानने का अधिकार — हम क्या data रखते हैं</li>
<li>Deletion का अधिकार — अपना data delete करवाने का request</li>
<li>Opt-out — advertising cookies disable करने का option</li>
<li>Complaint — अगर कोई concern हो तो हमसे संपर्क करें</li>
</ul>

<h2>Policy Changes</h2>
<p>हम ये privacy policy समय-समय पर update कर सकते हैं। कोई major change होने पर page पर "Last Updated" date change हो जाएगी। Regular visitors को recommend करते हैं कि occasionally ये page check करें।</p>

<h2>संपर्क</h2>
<p>Privacy से related कोई सवाल या request हो:</p>
<p>✉️ <strong>Email:</strong> contact@goldenrashifal.com</p>
<p>Subject line में "Privacy Request" लिखें।</p>

<h2>अक्सर पूछे जाने वाले सवाल</h2>

<div class="gr-faq">
<details class="gr-faq__item" open>
<summary class="gr-faq__q"><strong>क्या मेरा personal data sell होता है?</strong></summary>
<div class="gr-faq__a">नहीं। हम किसी का personal data किसी third party को sell नहीं करते। हमारा revenue model advertising (Google AdSense) based है, data selling नहीं।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>Cookies disable कर सकते हैं?</strong></summary>
<div class="gr-faq__a">हाँ। आप अपने browser settings से cookies disable कर सकते हैं। लेकिन ध्यान रखें कि कुछ website features ठीक से काम नहीं कर सकते।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>Google AdSense ads personalized होते हैं?</strong></summary>
<div class="gr-faq__a">हाँ, Google आपकी browsing history based पर personalized ads दिखा सकता है। आप Google Ad Settings से इसे control कर सकते हैं।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>क्या website पर account बनाना ज़रूरी है?</strong></summary>
<div class="gr-faq__a">नहीं। हमारी website पर कोई registration या login system नहीं है। सारा content freely accessible है।</div>
</details>
</div>

</div>
</article>
</main>

<?php get_footer(); ?>
