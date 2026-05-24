<?php
/**
 * Virtual Page: आज का चौघड़िया
 * Full Hindi content with FAQ, internal links, proper SEO structure.
 *
 * @package GoldenRashifal
 */

get_header();

$sun  = golden_rashifal_sun_times();
$chog = golden_rashifal_choghadiya_today();
?>

<main id="primary" class="gr-main" role="main">
<article class="gr-wrap gr-content-wrap gr-article">

<header class="gr-article__head">
    <h1 class="gr-article__title">आज का चौघड़िया — शुभ और अशुभ समय की पूरी जानकारी</h1>
    <p class="gr-article__lede">चौघड़िया एक पारंपरिक हिंदू समय-विभाजन पद्धति है जो दिन और रात को 8-8 भागों में बाँटती है। हर भाग का अपना नाम और महत्व होता है। कोई भी नया काम शुरू करने से पहले कई लोग चौघड़िया ज़रूर देखते हैं।</p>
</header>

<div class="gr-article__body">

<h2>चौघड़िया क्या होता है?</h2>
<p>सीधी बात करें तो चौघड़िया एक तरह का टाइम-टेबल है। जैसे स्कूल में पीरियड होते हैं, वैसे ही दिन को शुभ और अशुभ समय-खंडों में बाँटा गया है। सूर्योदय से सूर्यास्त तक 8 भाग — इन्हें "दिन का चौघड़िया" कहते हैं। फिर सूर्यास्त से अगले दिन सूर्योदय तक 8 भाग — ये "रात का चौघड़िया" कहलाता है।</p>

<p>हर भाग करीब डेढ़ घंटे का होता है, लेकिन ये fix नहीं है। मौसम के हिसाब से दिन छोटा-बड़ा होता है, तो चौघड़िया का समय भी बदलता रहता है।</p>

<h2>आज का दिन का चौघड़िया</h2>
<p>नीचे आज (<?php echo esc_html( golden_rashifal_today_string() ); ?>) के दिन के चौघड़िया की सूची दी गई है। ध्यान रखें — ये समय सांकेतिक है और उत्तर भारत (दिल्ली) के अनुसार है। आपके शहर में 5-10 मिनट का अंतर हो सकता है।</p>

<div class="gr-chog">
<h3>दिन का चौघड़िया (सूर्योदय <?php echo esc_html( golden_rashifal_format_minutes( $sun['sunrise_min'] ) ); ?> से)</h3>
<ul class="gr-chog__list">
<?php foreach ( $chog['day'] as $row ) : ?>
<li class="gr-chog__row gr-chog__row--<?php echo esc_attr( $row['type'] ); ?>">
    <span class="gr-chog__name"><?php echo esc_html( $row['name'] ); ?></span>
    <span class="gr-chog__time"><?php echo esc_html( $row['time'] ); ?></span>
    <span class="gr-chog__type"><?php
        if ( 'best' === $row['type'] ) echo '✅ अति शुभ';
        elseif ( 'good' === $row['type'] ) echo '👍 शुभ';
        else echo '⚠️ अशुभ';
    ?></span>
</li>
<?php endforeach; ?>
</ul>
</div>

<div class="gr-chog" style="margin-top:24px">
<h3>रात का चौघड़िया (सूर्यास्त <?php echo esc_html( golden_rashifal_format_minutes( $sun['sunset_min'] ) ); ?> से)</h3>
<ul class="gr-chog__list">
<?php foreach ( $chog['night'] as $row ) : ?>
<li class="gr-chog__row gr-chog__row--<?php echo esc_attr( $row['type'] ); ?>">
    <span class="gr-chog__name"><?php echo esc_html( $row['name'] ); ?></span>
    <span class="gr-chog__time"><?php echo esc_html( $row['time'] ); ?></span>
    <span class="gr-chog__type"><?php
        if ( 'best' === $row['type'] ) echo '✅ अति शुभ';
        elseif ( 'good' === $row['type'] ) echo '👍 शुभ';
        else echo '⚠️ अशुभ';
    ?></span>
</li>
<?php endforeach; ?>
</ul>
</div>

<h2>चौघड़िया के 7 प्रकार — सरल समझ</h2>
<p>कुल 7 तरह के चौघड़िया होते हैं। इनमें से 4 को शुभ माना जाता है और 3 को कम अनुकूल। आइए एक-एक करके समझते हैं:</p>

<h3>शुभ चौघड़िया (अच्छे समय)</h3>
<p><strong>अमृत</strong> — परंपरागत रूप से सबसे अच्छा समय माना जाता है। कई लोग बड़े फैसले इसी समय लेना पसंद करते हैं।</p>
<p><strong>शुभ</strong> — नाम से ही ज़ाहिर है। शादी, पूजा, नया व्यापार शुरू करने के लिए उपयुक्त माना जाता है।</p>
<p><strong>लाभ</strong> — धन-संबंधी कामों, खरीद-बिक्री, और निवेश के लिए कई लोग इसे प्राथमिकता देते हैं।</p>
<p><strong>चर</strong> — यात्रा के लिए अनुकूल माना जाता है। अगर कहीं जाना है तो इस समय निकलना अच्छा रहता है — ऐसी मान्यता है।</p>

<h3>अशुभ चौघड़िया (कम अनुकूल समय)</h3>
<p><strong>उद्वेग</strong> — सरकारी कामों के लिए कुछ लोग इसे ठीक मानते हैं, लेकिन नए काम शुरू करने से बचना बेहतर माना जाता है।</p>
<p><strong>काल</strong> — इसमें शुभ कार्य टालने की सलाह दी जाती है।</p>
<p><strong>रोग</strong> — स्वास्थ्य संबंधी कामों के अलावा इस समय नया काम शुरू करने से बचा जाता है।</p>

<h2>चौघड़िया और वार (दिन) का संबंध</h2>
<p>एक बात जो बहुत कम लोग जानते हैं — चौघड़िया का क्रम हर दिन बदलता है। सोमवार का पहला चौघड़िया अलग होगा, मंगलवार का अलग। ये वार (day) के ग्रह-स्वामी पर निर्भर करता है।</p>
<p>जैसे रविवार का स्वामी सूर्य है, तो दिन का पहला चौघड़िया उद्वेग होगा। सोमवार का स्वामी चंद्रमा है, तो पहला चौघड़िया अमृत होगा।</p>

<h2>चौघड़िया कैसे इस्तेमाल करें?</h2>
<p>सबसे पहले — ये एक traditional reference है, कोई scientific guarantee नहीं। लेकिन अगर आप इसे follow करना चाहते हैं, तो कुछ practical tips:</p>
<ul style="list-style:disc;padding-left:1.4em;margin-bottom:1.2em">
<li>नया business शुरू करना है? अमृत या शुभ चौघड़िया देखें।</li>
<li>कहीं travel करना है? चर चौघड़िया अच्छा माना जाता है।</li>
<li>Property खरीदनी है? लाभ चौघड़िया प्राथमिकता दें।</li>
<li>किसी important meeting में जाना है? उद्वेग, काल, और रोग से बचें (if possible)।</li>
</ul>

<h2>चौघड़िया और राहुकाल में फर्क</h2>
<p>ये दोनों अलग चीज़ें हैं। <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">राहुकाल</a> दिन का एक specific 1.5 घंटे का समय है जिसमें नया शुभ काम न करने की सलाह दी जाती है। चौघड़िया पूरे दिन-रात का विभाजन है।</p>
<p>कुछ लोग दोनों मिलाकर देखते हैं — यानी ऐसा चौघड़िया चुनते हैं जो शुभ भी हो और राहुकाल में भी न आता हो।</p>

<h2>क्या चौघड़िया पर पूरा भरोसा करना चाहिए?</h2>
<p>ईमानदारी से कहूँ तो ये एक परंपरा है, विज्ञान नहीं। कई परिवारों में पीढ़ियों से इसे follow किया जाता है। कई successful लोग इसे देखते हैं, कई नहीं देखते। दोनों ठीक हैं।</p>
<p>हमारा सुझाव — अगर आपको इसमें विश्वास है तो reference के तौर पर इस्तेमाल करें। लेकिन सिर्फ चौघड़िया के भरोसे कोई बड़ा फैसला न लें। अपनी मेहनत, planning, और practical wisdom को प्राथमिकता दें।</p>

<h2>संबंधित जानकारी</h2>
<p>👉 <a href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>">आज का पंचांग</a> — तिथि, नक्षत्र, योग, करण की जानकारी</p>
<p>👉 <a href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>">आज का राहुकाल</a> — किस समय शुभ काम न करें</p>
<p>👉 <a href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>">शुभ मुहूर्त</a> — विवाह, गृह प्रवेश के लिए उचित समय</p>
<p>👉 <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">त्योहार कैलेंडर 2025</a> — आने वाले प्रमुख हिंदू पर्व</p>

<h2>अक्सर पूछे जाने वाले सवाल</h2>

<div class="gr-faq">
<details class="gr-faq__item" open>
<summary class="gr-faq__q"><strong>चौघड़िया रोज़ बदलता है क्या?</strong></summary>
<div class="gr-faq__a">हाँ, चौघड़िया का क्रम हर दिन बदलता है। ये वार (day) के ग्रह-स्वामी पर निर्भर करता है। इसलिए रोज़ ताज़ा चौघड़िया देखना ज़रूरी है।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>क्या रात में भी चौघड़िया देखा जाता है?</strong></summary>
<div class="gr-faq__a">बिल्कुल। रात का चौघड़िया सूर्यास्त से अगले दिन सूर्योदय तक चलता है। अगर रात को कोई शुभ काम करना है (जैसे किसी मुहूर्त पर पूजा), तो रात का चौघड़िया देखें।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>अमृत और शुभ चौघड़िया में कौन बेहतर है?</strong></summary>
<div class="gr-faq__a">पारंपरिक रूप से अमृत को सबसे अच्छा माना जाता है। शुभ दूसरे स्थान पर आता है। लेकिन दोनों ही अच्छे कामों के लिए उपयुक्त माने जाते हैं।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>क्या चौघड़िया सभी शहरों के लिए एक जैसा होता है?</strong></summary>
<div class="gr-faq__a">नहीं। चौघड़िया सूर्योदय और सूर्यास्त पर आधारित है, जो शहर के अनुसार अलग होता है। दिल्ली और मुंबई का चौघड़िया समय थोड़ा अलग होगा।</div>
</details>

<details class="gr-faq__item">
<summary class="gr-faq__q"><strong>Emergency में क्या चौघड़िया देखना ज़रूरी है?</strong></summary>
<div class="gr-faq__a">बिल्कुल नहीं। चौघड़िया एक reference tool है। अगर कोई urgent काम है — medical emergency, ज़रूरी travel, या कोई critical decision — तो चौघड़िया की चिंता न करें। व्यावहारिक ज़रूरत हमेशा पहले आती है।</div>
</details>
</div>

</div>
</article>
</main>

<?php get_footer(); ?>
