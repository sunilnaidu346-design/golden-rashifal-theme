<?php
/**
 * Homepage — Popular articles masonry grid.
 * Matches screenshot 5: gradient thumbnail cards with category/status badges.
 *
 * @package GoldenRashifal
 */

$articles = array(
    array( 'title' => 'मेष राशि 2025 वार्षिक राशिफल: करियर, प्रेम और बड़े बदलाव', 'cat' => 'राशिफल', 'badge' => 'ट्रेंडिंग', 'gradient' => 'linear-gradient(135deg,#7c3aed,#4f46e5)', 'featured' => true ),
    array( 'title' => 'शनि की साढ़ेसाती 2025: किन राशियों पर होगा असर, जानें उपाय', 'cat' => 'ज्योतिष', 'badge' => 'लोकप्रिय', 'gradient' => 'linear-gradient(135deg,#4f46e5,#7c3aed)', 'time' => '8 मिनट', 'views' => '67.8K' ),
    array( 'title' => 'घर में लक्ष्मी माता को बुलाने के 7 वास्तु टिप्स', 'cat' => 'वास्तु', 'badge' => '✨ नया', 'gradient' => 'linear-gradient(135deg,#10b981,#059669)', 'time' => '6 मिनट', 'views' => '38.9K' ),
    array( 'title' => 'विवाह के लिए सर्वश्रेष्ठ राशि मिलान 2025 - गुण मिलान गाइड', 'cat' => 'कुंडली', 'badge' => 'ट्रेंडिंग', 'gradient' => 'linear-gradient(135deg,#ec4899,#db2777)', 'time' => '10 मिनट', 'views' => '52.3K' ),
    array( 'title' => 'गायत्री मंत्र का सही उच्चारण और इसके चमत्कारी लाभ', 'cat' => 'मंत्र', 'badge' => 'लोकप्रिय', 'gradient' => 'linear-gradient(135deg,#7c3aed,#9333ea)', 'time' => '7 मिनट', 'views' => '89.1K' ),
    array( 'title' => 'राहु-केतु गोचर 2025: इन राशियों की बदलेगी किस्मत', 'cat' => 'नवग्रह', 'badge' => '✨ नया', 'gradient' => 'linear-gradient(135deg,#1f2937,#374151)', 'time' => '9 मिनट', 'views' => '41.5K' ),
);
?>
<section class="gr-section gr-section--articles">
    <div class="gr-wrap">

        <header class="gr-section__head">
            <div>
                <span class="gr-section__badge">✨ ज्योतिष लेख</span>
                <h2 class="gr-section__title">लोकप्रिय <span class="gr-text--red">लेख</span></h2>
            </div>
            <a class="gr-section__more" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">सभी लेख देखें ></a>
        </header>

        <div class="gr-articles-grid">
            <?php foreach ( $articles as $i => $a ) : $is_feat = ! empty( $a['featured'] ); ?>
            <article class="gr-article-card <?php echo $is_feat ? 'gr-article-card--featured' : ''; ?>">
                <div class="gr-article-card__thumb" style="background:<?php echo esc_attr( $a['gradient'] ); ?>">
                    <span class="gr-article-card__cat"><?php echo esc_html( $a['cat'] ); ?></span>
                    <span class="gr-article-card__status"><?php echo esc_html( $a['badge'] ); ?></span>
                </div>
                <div class="gr-article-card__body">
                    <h3 class="gr-article-card__title"><?php echo esc_html( $a['title'] ); ?></h3>
                    <?php if ( ! empty( $a['time'] ) ) : ?>
                    <div class="gr-article-card__meta">
                        <span>⏱ <?php echo esc_html( $a['time'] ); ?> पढ़ें</span>
                        <span>👁 <?php echo esc_html( $a['views'] ); ?></span>
                    </div>
                    <?php endif; ?>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>
