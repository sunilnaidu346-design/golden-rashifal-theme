<?php
/**
 * Virtual Page: Disclaimer — अस्वीकरण
 * Required for AdSense. Sets clear expectations about content limitations.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article">

<header class="gr-article__head">
    <h1 class="gr-article__title">अस्वीकरण — Disclaimer</h1>
    <p class="gr-article__lede">Golden Rashifal (sipindustries.in) पर प्रकाशित सभी सामग्री informational purpose से है। कृपया इस page को ध्यान से पढ़ें — यहाँ हमारी content की सीमाएँ और जिम्मेदारियाँ स्पष्ट की गई हैं।</p>
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

<h2>सामान्य अस्वीकरण (General Disclaimer)</h2>
<p>Golden Rashifal website पर published सभी content — articles, पंचांग data, चौघड़िया charts, राशिफल, मुहूर्त information — पूरी तरह से <strong>सामान्य जानकारी और शैक्षिक उद्देश्य</strong> से प्रदान की जाती है।</p>

<p>यह content किसी भी professional advice (चिकित्सा, कानूनी, वित्तीय, या ज्योतिषीय) का विकल्प नहीं है।</p>

<h2>ज्योतिष content के बारे में</h2>
<p>स्पष्ट शब्दों में कहें तो:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>हमारा राशिफल, मुहूर्त, और ज्योतिष content <strong>पारंपरिक मान्यताओं</strong> पर based है</li>
<li>ये scientifically proven predictions नहीं हैं</li>
<li>इन्हें entertainment और cultural reference के तौर पर लिया जाना चाहिए</li>
<li>किसी भी बड़े जीवन-निर्णय (शादी, career change, property purchase) के लिए सिर्फ राशिफल पर depend न करें</li>
<li>हम किसी outcome की guarantee नहीं देते</li>
</ul>

<p>हम "ये करो तो सफलता मिलेगी" या "ये न करो तो बुरा होगा" — ऐसी fear-based या guarantee-based भाषा से बचते हैं। लेकिन readers को भी ये समझना ज़रूरी है कि ज्योतिष content एक belief system है, proven science नहीं।</p>

<h2>पंचांग और समय-संबंधी data</h2>
<p>हमारी website पर दिए गए:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>सूर्योदय / सूर्यास्त timings</li>
<li>राहुकाल</li>
<li>चौघड़िया</li>
<li>तिथि, नक्षत्र</li>
</ul>
<p>ये सब <strong>approximate values</strong> हैं जो standard algorithms से calculate की जाती हैं। ये North India (Delhi region) के coordinates पर primarily based हैं। आपके specific location पर 5-15 मिनट का variation हो सकता है।</p>
<p>100% accurate local timings के लिए अपने शहर-specific पंचांग या Drik Panchang जैसी specialized service use करें।</p>

<h2>Medical Disclaimer</h2>
<p>हमारी website पर कभी-कभी आयुर्वेद, योग, या traditional health practices से related content हो सकता है। ये content:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>Medical advice नहीं है</li>
<li>किसी doctor या healthcare professional की सलाह का विकल्प नहीं है</li>
<li>किसी भी health issue के लिए qualified medical professional से consult करें</li>
<li>Self-diagnosis या self-treatment के लिए इस content का use न करें</li>
</ul>

<h2>Financial Disclaimer</h2>
<p>अगर कहीं investment, business, या financial decisions से related ज्योतिषीय content हो, तो:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>ये financial advice नहीं है</li>
<li>Investment decisions अपनी research और qualified financial advisor की सलाह पर लें</li>
<li>"शुभ मुहूर्त में invest करने से profit होगा" — ऐसा हम claim नहीं करते</li>
</ul>

<h2>External Links</h2>
<p>हमारी website पर external websites के links हो सकते हैं। हम:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>External websites के content, accuracy, या safety की ज़िम्मेदारी नहीं लेते</li>
<li>External link provide करने का मतलब endorsement नहीं है</li>
<li>Users अपनी responsibility पर external links follow करें</li>
</ul>

<h2>Advertising Disclaimer</h2>
<p>हमारी website पर Google AdSense और संभवतः अन्य advertising networks के ads दिख सकते हैं। इन ads में:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>Ads का content हमारे control में नहीं है</li>
<li>Advertised products/services की quality की guarantee हम नहीं देते</li>
<li>Ad पर click करने और purchase करने का decision user की अपनी responsibility है</li>
</ul>

<h2>Content Accuracy</h2>
<p>हम अपना best effort करते हैं content accurate रखने का। लेकिन:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>Human error संभव है</li>
<li>Information outdated हो सकती है</li>
<li>Typos और calculation errors हो सकते हैं</li>
<li>अगर कोई गलती दिखे तो हमें <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">contact करें</a></li>
</ul>
<p>हम errors report मिलने पर जल्द-से-जल्द correction करने की कोशिश करते हैं।</p>

<h2>Limitation of Liability</h2>
<p>Golden Rashifal और इसकी team किसी भी direct, indirect, incidental, या consequential damages के लिए liable नहीं है जो इस website के content use करने से हो सकते हैं।</p>
<p>Website "as is" basis पर provide की जाती है — बिना किसी express या implied warranty के।</p>

<h2>Changes to Disclaimer</h2>
<p>हम ये disclaimer update कर सकते हैं। "Last Updated" date check करके latest version देख सकते हैं।</p>

<h2>संपर्क</h2>
<p>इस disclaimer से related कोई सवाल हो:</p>
<p>✉️ <a href="mailto:contact@goldenrashifal.com">contact@goldenrashifal.com</a></p>

<h2>अक्सर पूछे जाने वाले सवाल</h2>

<div class="gr-faq">
<details class="gr-faq__item" open>
<summary class="gr-faq__q"><strong>क्या राशिफल content पर पूरा भरोसा कर सकते हैं?</strong></summary>
<div class="gr-faq__a">राशिफल पारंपरिक मान्यताओं पर based है और इसे entertainment/cultural reference के तौर पर लिया जाना चाहिए। Life decisions सिर्फ राशिफल पर based न लें।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>पंचांग timings 100% accurate हैं?</strong></summary>
<div class="gr-faq__a">ये approximate values हैं। आपके exact location पर 5-15 मिनट का difference हो सकता है। Precise timings के लिए city-specific पंचांग tools use करें।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>Website पर दिए उपाय follow करने से नुकसान हो तो?</strong></summary>
<div class="gr-faq__a">हमारा content informational है। किसी भी उपाय या सुझाव को follow करना reader की अपनी choice और responsibility है। हम outcomes की guarantee नहीं देते।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>Ads में दिखने वाले products recommend किए गए हैं?</strong></summary>
<div class="gr-faq__a">नहीं। Ads Google AdSense द्वारा automatically serve होते हैं। हम advertised products/services endorse नहीं करते। Purchase decisions user की responsibility है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>Content गलत लगे तो क्या करें?</strong></summary>
<div class="gr-faq__a">हमें email करें: contact@goldenrashifal.com। Page URL और गलती की details बताएं। हम verify करके 48 घंटे में correction करने की कोशिश करते हैं।</div>
</details>
</div>

</div>
</article>
</main>

<?php get_footer(); ?>
