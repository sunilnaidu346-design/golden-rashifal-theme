<?php
/**
 * Homepage — Festival Calendar section.
 * Done/upcoming badge is calculated dynamically based on today's date.
 *
 * @package GoldenRashifal
 */

// Current year for dynamic dates.
$current_year = (int) wp_date( 'Y' );
$today_ts     = (int) current_time( 'timestamp' );

/*
 * Festivals with their approximate Gregorian dates.
 * Dates are calculated for the current year where possible.
 * Hindu festival dates shift each year — these are 2025/2026 approximations.
 * For production, update dates annually or integrate a festival API.
 */
$festivals = array(
    array(
        'name'    => 'महाशिवरात्रि',
        'date_str'=> '26 फरवरी ' . $current_year,
        'date_ts' => mktime( 0, 0, 0, 2, 26, $current_year ),
        'desc'    => 'भगवान शिव की महारात्रि — व्रत, पूजा और जागरण का पर्व',
        'badge'   => 'अति महत्वपूर्ण',
        'color'   => '#ff8c00',
    ),
    array(
        'name'    => 'होली',
        'date_str'=> '14 मार्च ' . $current_year,
        'date_ts' => mktime( 0, 0, 0, 3, 14, $current_year ),
        'desc'    => 'रंगों का त्योहार — प्रेम, खुशी और एकता का उत्सव',
        'badge'   => 'प्रमुख त्योहार',
        'color'   => '#e91e8c',
    ),
    array(
        'name'    => 'राम नवमी',
        'date_str'=> '6 अप्रैल ' . $current_year,
        'date_ts' => mktime( 0, 0, 0, 4, 6, $current_year ),
        'desc'    => 'भगवान श्री राम का जन्मोत्सव — धर्म और मर्यादा का पर्व',
        'badge'   => 'शुभ दिन',
        'color'   => '#10b981',
    ),
    array(
        'name'    => 'हनुमान जयंती',
        'date_str'=> '12 अप्रैल ' . $current_year,
        'date_ts' => mktime( 0, 0, 0, 4, 12, $current_year ),
        'desc'    => 'श्री हनुमान जी का प्राकट्य दिवस — शक्ति और भक्ति का पर्व',
        'badge'   => 'पवित्र दिवस',
        'color'   => '#f59e0b',
    ),
    array(
        'name'    => 'नवरात्रि',
        'date_str'=> '22 सितम्बर ' . $current_year,
        'date_ts' => mktime( 0, 0, 0, 9, 22, $current_year ),
        'desc'    => 'माँ दुर्गा के नौ स्वरूपों की पूजा — शक्ति का महोत्सव',
        'badge'   => 'प्रमुख त्योहार',
        'color'   => '#e91e8c',
    ),
    array(
        'name'    => 'दीपावली',
        'date_str'=> '20 अक्टूबर ' . $current_year,
        'date_ts' => mktime( 0, 0, 0, 10, 20, $current_year ),
        'desc'    => 'दीपों का त्योहार — लक्ष्मी पूजन और प्रकाश का उत्सव',
        'badge'   => 'महापर्व',
        'color'   => '#dc3545',
    ),
);
?>
<section class="gr-section gr-section--festival">
    <div class="gr-wrap">

        <header class="gr-section__head gr-section__head--center">
            <span class="gr-section__badge">🪔 हिंदू त्योहार <?php echo esc_html( $current_year ); ?></span>
            <h2 class="gr-section__title">त्योहार <span class="gr-text--red">कैलेंडर</span></h2>
            <p class="gr-section__sub"><?php esc_html_e( 'आगामी हिंदू त्योहारों की गिनती और जानकारी', 'golden-rashifal' ); ?></p>
        </header>

        <div class="gr-festival-grid">
            <?php foreach ( $festivals as $f ) :
                $is_past = ( $f['date_ts'] < $today_ts );
                if ( $is_past ) {
                    // Calculate days since it passed
                    $days_ago = (int) floor( ( $today_ts - $f['date_ts'] ) / DAY_IN_SECONDS );
                    $status_text = ( $days_ago < 2 )
                        ? '✅ कल मनाया गया'
                        : '✅ ' . $days_ago . ' दिन पहले मनाया गया';
                } else {
                    $days_left = (int) ceil( ( $f['date_ts'] - $today_ts ) / DAY_IN_SECONDS );
                    if ( $days_left === 0 ) {
                        $status_text = '🎉 आज है!';
                    } elseif ( $days_left === 1 ) {
                        $status_text = '⏰ कल है!';
                    } else {
                        $status_text = '⏰ ' . $days_left . ' दिन बाकी';
                    }
                }
            ?>
            <div class="gr-festival-card" style="border-left-color:<?php echo esc_attr( $f['color'] ); ?>">
                <div class="gr-festival-card__top">
                    <h3 class="gr-festival-card__name"><?php echo esc_html( $f['name'] ); ?></h3>
                    <span class="gr-festival-card__badge" style="background:<?php echo esc_attr( $f['color'] ); ?>"><?php echo esc_html( $f['badge'] ); ?></span>
                </div>
                <span class="gr-festival-card__date">📅 <?php echo esc_html( $f['date_str'] ); ?></span>
                <p class="gr-festival-card__desc"><?php echo esc_html( $f['desc'] ); ?></p>
                <div class="gr-festival-card__bottom">
                    <span class="gr-festival-card__done <?php echo $is_past ? 'gr-festival-card__done--past' : 'gr-festival-card__done--upcoming'; ?>">
                        <?php echo esc_html( $status_text ); ?>
                    </span>
                    <a class="gr-festival-card__link" href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">विस्तृत जानकारी ></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="gr-section__cta-wrap">
            <a class="gr-btn gr-btn--outline" href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"><?php esc_html_e( 'सभी त्योहार देखें >', 'golden-rashifal' ); ?></a>
        </div>

    </div>
</section>
