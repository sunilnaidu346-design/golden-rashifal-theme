<?php
/**
 * Template Name: Horoscope Hub
 * Virtual Page: /horoscope/ — Premium Horoscope Hub.
 * Daily/Weekly/Monthly cards, 12 Zodiac grid, tools, trust.
 *
 * @package GoldenRashifal
 */

get_header();
?>

<main id="primary" class="gr-main gr-main--horoscope" role="main">

    <!-- Premium Hero -->
    <section class="gr-page-hero">
        <div class="gr-page-hero__inner">
            <div class="gr-page-hero__breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a>
                <span class="sep">›</span>
                <span>राशिफल</span>
            </div>
            <span class="gr-page-hero__badge">✦ प्रीमियम ज्योतिष</span>
            <h1 class="gr-page-hero__title"><?php esc_html_e( 'राशिफल — Horoscope Hub', 'golden-rashifal' ); ?></h1>
            <p class="gr-page-hero__subtitle"><?php esc_html_e( 'दैनिक, साप्ताहिक और मासिक राशिफल — 12 राशियों के लिए। वैदिक ज्योतिष सिद्धांतों पर आधारित, संपादकीय समीक्षित।', 'golden-rashifal' ); ?></p>
        </div>
    </section>

    <div class="gr-premium-content gr-premium-content--wide">

        <!-- Horoscope Type Cards -->
        <h2>राशिफल प्रकार</h2>
        <div class="gr-horoscope-types">
            <a class="gr-horoscope-type" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>">
                <div class="gr-horoscope-type__icon">☉</div>
                <div class="gr-horoscope-type__title">दैनिक राशिफल</div>
                <div class="gr-horoscope-type__text">आज के ग्रहों की स्थिति के अनुसार 12 राशियों का भाग्यफल। रोज़ सुबह अपडेट।</div>
                <span class="gr-horoscope-type__btn">पढ़ें →</span>
            </a>
            <a class="gr-horoscope-type" href="<?php echo esc_url( home_url( '/weekly-rashifal/' ) ); ?>">
                <div class="gr-horoscope-type__icon">◈</div>
                <div class="gr-horoscope-type__title">साप्ताहिक राशिफल</div>
                <div class="gr-horoscope-type__text">इस सप्ताह क्या है विशेष? करियर, प्रेम, स्वास्थ्य — 7 दिनों का overview।</div>
                <span class="gr-horoscope-type__btn">पढ़ें →</span>
            </a>
            <a class="gr-horoscope-type" href="<?php echo esc_url( home_url( '/monthly-rashifal/' ) ); ?>">
                <div class="gr-horoscope-type__icon">☾</div>
                <div class="gr-horoscope-type__title">मासिक राशिफल</div>
                <div class="gr-horoscope-type__text">इस महीने के major planetary transits और उनका प्रभाव। Monthly planning guide।</div>
                <span class="gr-horoscope-type__btn">पढ़ें →</span>
            </a>
        </div>

        <!-- 12 Zodiac Grid -->
        <h2>अपनी राशि चुनें</h2>
        <div class="gr-zodiac-hub">
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#mesh">
                <span class="gr-zodiac-hub__icon">♈</span>
                <span class="gr-zodiac-hub__name">मेष</span>
                <span class="gr-zodiac-hub__name-en">Aries</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#vrishabh">
                <span class="gr-zodiac-hub__icon">♉</span>
                <span class="gr-zodiac-hub__name">वृषभ</span>
                <span class="gr-zodiac-hub__name-en">Taurus</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#mithun">
                <span class="gr-zodiac-hub__icon">♊</span>
                <span class="gr-zodiac-hub__name">मिथुन</span>
                <span class="gr-zodiac-hub__name-en">Gemini</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#kark">
                <span class="gr-zodiac-hub__icon">♋</span>
                <span class="gr-zodiac-hub__name">कर्क</span>
                <span class="gr-zodiac-hub__name-en">Cancer</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#singh">
                <span class="gr-zodiac-hub__icon">♌</span>
                <span class="gr-zodiac-hub__name">सिंह</span>
                <span class="gr-zodiac-hub__name-en">Leo</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#kanya">
                <span class="gr-zodiac-hub__icon">♍</span>
                <span class="gr-zodiac-hub__name">कन्या</span>
                <span class="gr-zodiac-hub__name-en">Virgo</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#tula">
                <span class="gr-zodiac-hub__icon">♎</span>
                <span class="gr-zodiac-hub__name">तुला</span>
                <span class="gr-zodiac-hub__name-en">Libra</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#vrishchik">
                <span class="gr-zodiac-hub__icon">♏</span>
                <span class="gr-zodiac-hub__name">वृश्चिक</span>
                <span class="gr-zodiac-hub__name-en">Scorpio</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#dhanu">
                <span class="gr-zodiac-hub__icon">♐</span>
                <span class="gr-zodiac-hub__name">धनु</span>
                <span class="gr-zodiac-hub__name-en">Sagittarius</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#makar">
                <span class="gr-zodiac-hub__icon">♑</span>
                <span class="gr-zodiac-hub__name">मकर</span>
                <span class="gr-zodiac-hub__name-en">Capricorn</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#kumbh">
                <span class="gr-zodiac-hub__icon">♒</span>
                <span class="gr-zodiac-hub__name">कुंभ</span>
                <span class="gr-zodiac-hub__name-en">Aquarius</span>
            </a>
            <a class="gr-zodiac-hub__item" href="<?php echo esc_url( home_url( '/rashifal/' ) ); ?>#meen">
                <span class="gr-zodiac-hub__icon">♓</span>
                <span class="gr-zodiac-hub__name">मीन</span>
                <span class="gr-zodiac-hub__name-en">Pisces</span>
            </a>
        </div>

        <!-- Astrology Tools -->
        <h2>ज्योतिष टूल्स</h2>
        <div class="gr-pcard-grid gr-pcard-grid--4">
            <a class="gr-pcard" href="<?php echo esc_url( home_url( '/panchang/' ) ); ?>" style="text-decoration:none;">
                <div class="gr-pcard__icon">☉</div>
                <div class="gr-pcard__title">आज का पंचांग</div>
                <div class="gr-pcard__text">तिथि, नक्षत्र, योग, करण</div>
            </a>
            <a class="gr-pcard" href="<?php echo esc_url( home_url( '/choghadiya/' ) ); ?>" style="text-decoration:none;">
                <div class="gr-pcard__icon">⏱</div>
                <div class="gr-pcard__title">चौघड़िया</div>
                <div class="gr-pcard__text">शुभ-अशुभ समय चार्ट</div>
            </a>
            <a class="gr-pcard" href="<?php echo esc_url( home_url( '/rahukaal/' ) ); ?>" style="text-decoration:none;">
                <div class="gr-pcard__icon">◐</div>
                <div class="gr-pcard__title">राहुकाल</div>
                <div class="gr-pcard__text">आज का राहुकाल समय</div>
            </a>
            <a class="gr-pcard" href="<?php echo esc_url( home_url( '/muhurat/' ) ); ?>" style="text-decoration:none;">
                <div class="gr-pcard__icon">☆</div>
                <div class="gr-pcard__title">शुभ मुहूर्त</div>
                <div class="gr-pcard__text">विवाह, गृह प्रवेश</div>
            </a>
            <a class="gr-pcard" href="<?php echo esc_url( home_url( '/kundli/' ) ); ?>" style="text-decoration:none;">
                <div class="gr-pcard__icon">✧</div>
                <div class="gr-pcard__title">कुंडली</div>
                <div class="gr-pcard__text">जन्म कुंडली जानकारी</div>
            </a>
            <a class="gr-pcard" href="<?php echo esc_url( home_url( '/numerology/' ) ); ?>" style="text-decoration:none;">
                <div class="gr-pcard__icon">∞</div>
                <div class="gr-pcard__title">अंकज्योतिष</div>
                <div class="gr-pcard__text">मूलांक, भाग्यांक</div>
            </a>
            <a class="gr-pcard" href="<?php echo esc_url( home_url( '/navgraha/' ) ); ?>" style="text-decoration:none;">
                <div class="gr-pcard__icon">⊛</div>
                <div class="gr-pcard__title">नवग्रह</div>
                <div class="gr-pcard__text">ग्रहों की जानकारी</div>
            </a>
            <a class="gr-pcard" href="<?php echo esc_url( home_url( '/vastu/' ) ); ?>" style="text-decoration:none;">
                <div class="gr-pcard__icon">⌂</div>
                <div class="gr-pcard__title">वास्तु</div>
                <div class="gr-pcard__text">वास्तु शास्त्र टिप्स</div>
            </a>
        </div>

        <!-- More Sections -->
        <h2>और भी देखें</h2>
        <div class="gr-internal-links">
            <div class="gr-internal-links__grid">
                <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><span class="icon">⚑</span> त्योहार कैलेंडर</a>
                <a href="<?php echo esc_url( home_url( '/ekadashi/' ) ); ?>"><span class="icon">☸</span> एकादशी</a>
                <a href="<?php echo esc_url( home_url( '/purnima/' ) ); ?>"><span class="icon">◯</span> पूर्णिमा</a>
                <a href="<?php echo esc_url( home_url( '/hindu-calendar/' ) ); ?>"><span class="icon">📅</span> हिंदू कैलेंडर</a>
                <a href="<?php echo esc_url( home_url( '/ratna/manikya/' ) ); ?>"><span class="icon">💎</span> नवग्रह रत्न</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="icon">👥</span> हमारे बारे में</a>
            </div>
        </div>

        <!-- Trust Block -->
        <div class="gr-trust-block">
            <h2 class="gr-trust-block__title"><?php esc_html_e( 'Golden Rashifal पर भरोसा क्यों करें?', 'golden-rashifal' ); ?></h2>
            <div class="gr-trust-block__grid">
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> संपादकीय समीक्षित</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पंचांग सत्यापित</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> प्रतिदिन अपडेट</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पारंपरिक स्रोत</div>
                <div class="gr-trust-block__item"><span class="gr-trust-block__check">✓</span> पाठक केंद्रित</div>
            </div>
        </div>

        <div class="gr-footer-transition">
            <div class="gr-footer-transition__line"></div>
            <p class="gr-footer-transition__text"><?php esc_html_e( 'Golden Rashifal — प्रीमियम ज्योतिष अनुभव', 'golden-rashifal' ); ?></p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
