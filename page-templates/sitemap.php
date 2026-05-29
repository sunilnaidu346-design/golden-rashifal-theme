<?php
/**
 * Virtual Page: HTML Sitemap
 * Links to all pages for crawlability and user navigation.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article">

<header class="gr-article__head">
    <h1 class="gr-article__title">साइटमैप — Sitemap</h1>
    <p class="gr-article__lede">Golden Rashifal website के सभी pages की सूची। यहाँ से आप किसी भी section में directly जा सकते हैं।</p>
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



<h2>दैनिक जानकारी (Daily Features)</h2>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li><a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">आज का पंचांग</a> — तिथि, नक्षत्र, योग, करण, सूर्योदय-सूर्यास्त</li>
<li><a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">आज का चौघड़िया</a> — दिन और रात के शुभ-अशुभ समय</li>
<li><a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">आज का राहुकाल</a> — राहुकाल का समय और जानकारी</li>
</ul>

<h2>राशिफल (Horoscope)</h2>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li><a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">दैनिक राशिफल</a> — आज का राशिफल (12 राशियाँ)</li>
<li><a href="<?php echo esc_url( home_url( '/weekly-rashifal/' ) ); ?>">साप्ताहिक राशिफल</a> — इस सप्ताह का भविष्यफल</li>
<li><a href="<?php echo esc_url( home_url( '/monthly-rashifal/' ) ); ?>">मासिक राशिफल</a> — इस महीने का भविष्यफल</li>
</ul>

<h2>ज्योतिष ज्ञान (Astrology)</h2>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li><a href="<?php echo esc_url( home_url( '/kundli/' ) ); ?>">कुंडली</a> — जन्म कुंडली और ग्रह स्थिति</li>
<li><a href="<?php echo esc_url( home_url( '/navgraha/' ) ); ?>">नवग्रह</a> — 9 ग्रहों का प्रभाव और जानकारी</li>
<li><a href="<?php echo esc_url( home_url( '/numerology/' ) ); ?>">अंकज्योतिष</a> — मूलांक और भाग्यांक</li>
<li><a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">शुभ मुहूर्त</a> — विवाह, गृह प्रवेश, नामकरण</li>
</ul>

<h2>कैलेंडर और त्योहार (Calendar & Festivals)</h2>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li><a href="<?php echo esc_url( home_url( '/hindu-calendar/' ) ); ?>">हिंदू कैलेंडर 2026</a> — पंचांग तिथियाँ और महीने</li>
<li><a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">त्योहार कैलेंडर 2026</a> — प्रमुख हिंदू पर्वों की सूची</li>
<li><a href="<?php echo esc_url( home_url( '/ekadashi/' ) ); ?>">एकादशी व्रत</a> — तिथि, महत्व, नियम</li>
<li><a href="<?php echo esc_url( home_url( '/purnima/' ) ); ?>">पूर्णिमा</a> — व्रत विधि और 2026 की तिथियाँ</li>
</ul>

<h2>वास्तु और जीवनशैली (Vastu & Lifestyle)</h2>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li><a href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>">वास्तु शास्त्र</a> — घर और ऑफिस के लिए सुझाव</li>
</ul>

<h2>Website Information</h2>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">होमपेज</a></li>
<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">हमारे बारे में</a></li>
<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">संपर्क करें</a></li>
</ul>

<h2>Legal & Policy Pages</h2>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">गोपनीयता नीति (Privacy Policy)</a></li>
<li><a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">अस्वीकरण (Disclaimer)</a></li>
<li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">नियम और शर्तें (Terms & Conditions)</a></li>
<li><a href="<?php echo esc_url( home_url( '/editorial-policy/' ) ); ?>">संपादकीय नीति (Editorial Policy)</a></li>
<li><a href="<?php echo esc_url( home_url( '/dmca/' ) ); ?>">DMCA नीति</a></li>
</ul>

<h2>इस Sitemap के बारे में</h2>
<p>ये एक HTML sitemap है — visitors के लिए। Search engines के लिए हमारे पास XML sitemap भी है जो automatically generate होता है।</p>

<p>अगर कोई link काम नहीं कर रहा या कोई page missing है, तो कृपया <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">हमें बताएँ</a>।</p>

<h2>अक्सर पूछे जाने वाले सवाल</h2>

<div class="gr-faq">
<details class="gr-faq__item" open>
<summary class="gr-faq__q"><strong>Sitemap और XML Sitemap में क्या difference है?</strong></summary>
<div class="gr-faq__a">ये HTML sitemap visitors के लिए है — ताकि वो easily navigate कर सकें। XML sitemap search engines (Google, Bing) के लिए है — ताकि वो सभी pages efficiently crawl कर सकें। दोनों अलग-अलग purpose serve करते हैं।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>कोई page open नहीं हो रहा — क्या करें?</strong></summary>
<div class="gr-faq__a">Page refresh करें या cache clear करें। अगर फिर भी issue हो, तो हमें <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">contact</a> करें — URL और error screenshot share करें। हम जल्द fix करेंगे।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>क्या ये website हिंदी के अलावा किसी और language में है?</strong></summary>
<div class="gr-faq__a">फ़िलहाल नहीं। Golden Rashifal primarily Hindi content website है। English explanation जहाँ ज़रूरी है वहाँ mixed in है, लेकिन dedicated English version अभी available नहीं है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>नए pages कब add होते हैं?</strong></summary>
<div class="gr-faq__a">हम regularly नए articles और pages add करते हैं। Major updates newsletter और social media पर announce किए जाते हैं। ये sitemap page भी updated रहता है।</div>
</details>
</div>

</div>
</article>
</main>

<?php get_footer(); ?>
