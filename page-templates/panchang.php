<?php
/**
 * Virtual Page: आज का पंचांग
 * Full Hindi content with live data, explanation, FAQ, internal links.
 *
 * @package GoldenRashifal
 */

get_header();

$sun      = golden_rashifal_sun_times();
$rahu     = golden_rashifal_rahukaal();
$panchang = golden_rashifal_panchang_summary();
?>

<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article">

<header class="gr-article__head">
    <h1 class="gr-article__title">आज का पंचांग — तिथि, नक्षत्र, योग, करण की पूरी जानकारी</h1>
    <p class="gr-article__lede">पंचांग हिंदू कालगणना की रीढ़ है। तिथि, वार, नक्षत्र, योग और करण — ये पाँच अंग मिलकर पंचांग बनाते हैं। रोज़मर्रा के फैसलों से लेकर शादी-ब्याह तक, कई परिवार पंचांग को reference के तौर पर इस्तेमाल करते हैं।</p>
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



<h2>आज का पंचांग — <?php echo esc_html( golden_rashifal_today_string() ); ?></h2>

<div class="gr-panchang" style="background:var(--gr-bg-soft);border:1px solid var(--gr-border);border-radius:var(--radius-lg);padding:24px;margin-bottom:28px">
<dl style="display:grid;grid-template-columns:1fr 1fr;gap:12px">
<?php foreach ( $panchang as $label => $value ) : ?>
<div class="gr-panchang__row" style="display:flex;justify-content:space-between;padding:8px 12px;background:#fff;border-radius:8px;border:1px solid var(--gr-border-light)">
    <dt style="font-size:.84rem;color:var(--gr-muted)"><?php echo esc_html( $label ); ?></dt>
    <dd style="font-weight:700;font-size:.92rem;margin:0"><?php echo esc_html( $value ); ?></dd>
</div>
<?php endforeach; ?>
</dl>
<p style="font-size:.78rem;color:var(--gr-muted);margin-top:12px;text-align:center">⚠ समय सांकेतिक है — आपके शहर में 5-10 मिनट का अंतर हो सकता है।</p>
</div>

<h2>पंचांग क्या है? सरल भाषा में समझें</h2>
<p>पंचांग संस्कृत शब्द है — "पंच" यानी पाँच, "अंग" यानी हिस्से। ये पाँच हिस्से हैं:</p>

<p><strong>1. तिथि</strong> — चंद्रमा और सूर्य के बीच का कोणीय अंतर। शुक्ल पक्ष में प्रतिपदा से पूर्णिमा तक 15 तिथियाँ, कृष्ण पक्ष में प्रतिपदा से अमावस्या तक 15 तिथियाँ। कुल 30 तिथियाँ एक चंद्र मास बनाती हैं।</p>

<p><strong>2. वार</strong> — सप्ताह का दिन। रविवार से शनिवार तक सात वार। हर वार का अपना ग्रह-स्वामी होता है — रवि (सूर्य), सोम (चंद्र), मंगल, बुध, गुरु, शुक्र, शनि।</p>

<p><strong>3. नक्षत्र</strong> — आकाश में 27 तारा-समूह। चंद्रमा हर दिन एक नक्षत्र में भ्रमण करता है। अश्विनी से लेकर रेवती तक — हर नक्षत्र का अपना स्वभाव और महत्व है।</p>

<p><strong>4. योग</strong> — सूर्य और चंद्रमा की स्थिति से बनने वाला एक calculation। कुल 27 योग होते हैं। विष्कुम्भ से लेकर वैधृति तक — कुछ शुभ माने जाते हैं, कुछ कम अनुकूल।</p>

<p><strong>5. करण</strong> — तिथि का आधा भाग। एक तिथि में दो करण होते हैं। कुल 11 प्रकार के करण होते हैं, जिनमें से 7 चर (बदलने वाले) और 4 स्थिर हैं।</p>

<h2>पंचांग रोज़ क्यों देखना चाहिए?</h2>
<p>ईमानदारी से — रोज़ देखना ज़रूरी नहीं है। लेकिन कुछ situations में पंचांग काम आ सकता है:</p>

<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li><strong>कोई नया काम शुरू करना है</strong> — तिथि और नक्षत्र देख लेना अच्छा माना जाता है</li>
<li><strong>व्रत रखना है</strong> — एकादशी, पूर्णिमा, अमावस्या की सही तारीख जानने के लिए</li>
<li><strong>शुभ मुहूर्त चाहिए</strong> — शादी, गृह प्रवेश, मुंडन जैसे संस्कारों के लिए</li>
<li><strong>त्योहार की तिथि confirm करनी है</strong> — कई बार दो dates आती हैं, पंचांग से clarity मिलती है</li>
<li><strong>ज्योतिषीय reference</strong> — राशिफल, ग्रह गोचर, दशा-अंतर्दशा समझने के लिए</li>
</ul>

<h2>सूर्योदय और सूर्यास्त का महत्व</h2>
<p>पंचांग में सबसे basic information सूर्योदय और सूर्यास्त का समय है। ये इसलिए important है क्योंकि:</p>
<p>→ <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">चौघड़िया</a> की गणना सूर्योदय-सूर्यास्त पर based है।</p>
<p>→ <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">राहुकाल</a> का समय भी इसी से निकलता है।</p>
<p>→ अभिजित मुहूर्त (दोपहर का सबसे शुभ समय) भी सूर्योदय-सूर्यास्त से calculate होता है।</p>

<h2>तिथि और पक्ष — शुक्ल और कृष्ण</h2>
<p>अमावस्या के बाद से पूर्णिमा तक "शुक्ल पक्ष" चलता है — चंद्रमा बढ़ता है। पूर्णिमा के बाद से अमावस्या तक "कृष्ण पक्ष" — चंद्रमा घटता है।</p>
<p>आमतौर पर शुक्ल पक्ष को नए कामों की शुरुआत के लिए बेहतर माना जाता है। लेकिन ये कोई hard rule नहीं है — कई शुभ त्योहार कृष्ण पक्ष में भी आते हैं (जैसे शिवरात्रि)।</p>

<h2>आज कौन से काम शुभ माने जाते हैं?</h2>
<p>ये सीधा जवाब देना मुश्किल है क्योंकि ये कई factors पर depend करता है — तिथि, नक्षत्र, योग, राहुकाल, आपकी कुंडली, और भी बहुत कुछ।</p>
<p>एक सामान्य guideline के तौर पर:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>शुभ तिथि + शुभ नक्षत्र + राहुकाल के बाहर = अच्छा समय</li>
<li>अमृत या शुभ <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">चौघड़िया</a> में काम करना = और भी बेहतर</li>
<li>अभिजित मुहूर्त (दोपहर) = सर्वाधिक शुभ माना जाता है</li>
</ul>

<h2>पंचांग कहाँ से देखें?</h2>
<p>Golden Rashifal पर हम रोज़ ताज़ा पंचांग की जानकारी देते हैं। इसके अलावा:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>Drik Panchang (drikpanchang.com) — शहर-आधारित accurate data</li>
<li>स्थानीय पंडित या ज्योतिषी — personalized सलाह के लिए</li>
<li>प्रिंटेड हिंदू पंचांग — काशी विश्वनाथ, रामनारायण पंचांग प्रसिद्ध हैं</li>
</ul>

<h2>क्या पंचांग scientifically accurate है?</h2>
<p>तिथि, नक्षत्र, सूर्योदय-सूर्यास्त — ये सब astronomical calculations हैं और mathematically सही होती हैं। लेकिन उनसे जो "शुभ-अशुभ" निकाला जाता है, वो traditional belief system का हिस्सा है, scientific proof नहीं।</p>
<p>हमारा approach: data accurate रखें, interpretation balanced रखें। कोई guarantee या fear-based claim नहीं।</p>

<h2>संबंधित पेज</h2>
<p>📅 <a href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>">आज का चौघड़िया</a> — शुभ-अशुभ समय का चार्ट</p>
<p>🚫 <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">राहुकाल</a> — आज किस समय शुभ काम न करें</p>
<p>✨ <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">शुभ मुहूर्त</a> — विवाह, गृह प्रवेश के लिए</p>
<p>🪔 <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">त्योहार कैलेंडर</a> — 2026 के प्रमुख हिंदू पर्व</p>
<p>🔮 <a href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">आज का राशिफल</a> — 12 राशियों का भविष्यफल</p>

<h2>अक्सर पूछे जाने वाले सवाल</h2>

<div class="gr-faq">
<details class="gr-faq__item" open>
<summary class="gr-faq__q"><strong>पंचांग में तिथि दो दिन क्यों दिखती है?</strong></summary>
<div class="gr-faq__a">तिथि सूर्योदय के समय जो चल रही हो, वो उस दिन मानी जाती है। कई बार एक तिथि दो दिनों के सूर्योदय पर चल रही होती है — इसलिए confusion होता है। सूर्योदय के समय की तिथि देखें, वही मान्य है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>हिंदू कैलेंडर और अंग्रेज़ी कैलेंडर में फर्क क्या है?</strong></summary>
<div class="gr-faq__a">अंग्रेज़ी (Gregorian) कैलेंडर सूर्य पर based है — 365/366 दिन। हिंदू पंचांग चंद्र-सौर (lunisolar) है — चंद्रमा के चक्र पर आधारित, लेकिन अधिक मास से सूर्य वर्ष से संतुलित किया जाता है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>पंचांग कौन बनाता है?</strong></summary>
<div class="gr-faq__a">पंचांग की गणना ज्योतिष शास्त्र और खगोल विज्ञान (astronomy) के नियमों से होती है। भारत में कई प्रसिद्ध पंचांग हैं — काशी हिंदू विश्वविद्यालय, रामनारायण पंचांगकर्ता, और लाहिड़ी पंचांग सबसे मान्य माने जाते हैं।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>क्या North और South India का पंचांग अलग होता है?</strong></summary>
<div class="gr-faq__a">हाँ, थोड़ा अंतर होता है। उत्तर भारत में "पूर्णिमांत" पंचांग चलता है (महीना पूर्णिमा पर खत्म), दक्षिण में "अमांत" (अमावस्या पर खत्म)। तिथि-नक्षत्र same रहते हैं, बस महीने की शुरुआत अलग मानी जाती है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>पंचांग में अभिजित मुहूर्त क्या है?</strong></summary>
<div class="gr-faq__a">अभिजित मुहूर्त दोपहर के समय का एक छोटा शुभ कालखंड है। ये लगभग 48 मिनट का होता है — दिन के ठीक बीच में। परंपरागत रूप से इसे सबसे पवित्र समय माना जाता है। रोज़ available रहता है, किसी खास दिन की ज़रूरत नहीं।</div>
</details>
</div>

</div>
</article>
</main>

<?php get_footer(); ?>
