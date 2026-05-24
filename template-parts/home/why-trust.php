<?php
/**
 * Homepage — Why Trust Us / Founder Editorial section.
 * Premium redesigned layout with author bio card.
 *
 * @package GoldenRashifal
 */

$founder_img  = get_theme_mod( 'gr_founder_image', '' );
$founder_name = get_theme_mod( 'gr_founder_name', 'Golden Rashifal टीम' );
$founder_bio  = get_theme_mod( 'gr_founder_bio', 'वैदिक ज्योतिष और पंचांग विज्ञान में अनुभवी। पाठकों को प्रामाणिक, संतुलित और सरल ज्योतिषीय जानकारी देने के उद्देश्य से Golden Rashifal की स्थापना की।' );
?>
<section class="gr-trust-v2" aria-label="<?php esc_attr_e( 'हम पर विश्वास क्यों करें', 'golden-rashifal' ); ?>">
    <div class="gr-wrap gr-trust-v2__inner">

        <!-- LEFT: Editorial Content -->
        <div class="gr-trust-v2__content">
            <span class="gr-trust-v2__eyebrow"><?php esc_html_e( 'हम पर विश्वास क्यों करें', 'golden-rashifal' ); ?></span>
            <h2 class="gr-trust-v2__heading"><?php esc_html_e( 'परंपरा और प्रामाणिकता का संगम', 'golden-rashifal' ); ?></h2>
            <p class="gr-trust-v2__intro"><?php esc_html_e( 'Golden Rashifal की संपादकीय टीम वैदिक ज्योतिष, पंचांग गणना और शास्त्रीय परंपराओं में गहरा अनुभव रखती है। हम हर जानकारी को प्रकाशित करने से पहले प्रामाणिक स्रोतों से सत्यापित करते हैं — बिना किसी अतिशयोक्ति या भ्रामक दावों के।', 'golden-rashifal' ); ?></p>

            <div class="gr-trust-v2__features">
                <div class="gr-trust-v2__feat">
                    <div class="gr-trust-v2__feat-icon" style="color:#7c3aed;" aria-hidden="true">&#9670;</div>
                    <div class="gr-trust-v2__feat-body">
                        <h3><?php esc_html_e( 'संपादकीय सत्यापन', 'golden-rashifal' ); ?></h3>
                        <p><?php esc_html_e( 'हर लेख अनुभवी संपादकों द्वारा जाँचा और सत्यापित किया जाता है। कोई भी जानकारी बिना प्रमाण के प्रकाशित नहीं होती।', 'golden-rashifal' ); ?></p>
                    </div>
                </div>
                <div class="gr-trust-v2__feat">
                    <div class="gr-trust-v2__feat-icon" style="color:#0d9488;" aria-hidden="true">&#9733;</div>
                    <div class="gr-trust-v2__feat-body">
                        <h3><?php esc_html_e( 'शास्त्रीय आधार', 'golden-rashifal' ); ?></h3>
                        <p><?php esc_html_e( 'सभी गणनाएँ वैदिक सिद्धांतों और पारंपरिक पंचांग विधियों पर आधारित हैं। हम आधुनिक खगोलीय डेटा का भी उपयोग करते हैं।', 'golden-rashifal' ); ?></p>
                    </div>
                </div>
                <div class="gr-trust-v2__feat">
                    <div class="gr-trust-v2__feat-icon" style="color:#b8960c;" aria-hidden="true">&#9675;</div>
                    <div class="gr-trust-v2__feat-body">
                        <h3><?php esc_html_e( 'पारदर्शी नीति', 'golden-rashifal' ); ?></h3>
                        <p><?php esc_html_e( 'हमारी संपादकीय नीति सार्वजनिक है। पाठक जान सकते हैं कि हम क्या लिखते हैं, क्यों लिखते हैं, और किन स्रोतों से।', 'golden-rashifal' ); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT: Founder Profile Card -->
        <div class="gr-trust-v2__aside">
            <div class="gr-trust-v2__card">
                <div class="gr-trust-v2__card-img">
                    <?php if ( $founder_img ) : ?>
                        <img src="<?php echo esc_url( $founder_img ); ?>" alt="<?php echo esc_attr( $founder_name ); ?>" loading="lazy" width="160" height="160" />
                    <?php else : ?>
                        <?php echo get_avatar( get_option( 'admin_email' ), 160, '', $founder_name, array( 'class' => 'gr-trust-v2__avatar' ) ); ?>
                    <?php endif; ?>
                </div>
                <div class="gr-trust-v2__card-badge"><?php esc_html_e( 'संस्थापक एवं मुख्य संपादक', 'golden-rashifal' ); ?></div>
                <h3 class="gr-trust-v2__card-name"><?php echo esc_html( $founder_name ); ?></h3>
                <p class="gr-trust-v2__card-bio"><?php echo esc_html( $founder_bio ); ?></p>
                <div class="gr-trust-v2__card-stats">
                    <div class="gr-trust-v2__stat">
                        <span class="gr-trust-v2__stat-num">100+</span>
                        <span class="gr-trust-v2__stat-txt"><?php esc_html_e( 'प्रकाशित लेख', 'golden-rashifal' ); ?></span>
                    </div>
                    <div class="gr-trust-v2__stat">
                        <span class="gr-trust-v2__stat-num">365</span>
                        <span class="gr-trust-v2__stat-txt"><?php esc_html_e( 'दिन अपडेट', 'golden-rashifal' ); ?></span>
                    </div>
                    <div class="gr-trust-v2__stat">
                        <span class="gr-trust-v2__stat-num">45+</span>
                        <span class="gr-trust-v2__stat-txt"><?php esc_html_e( 'विषय श्रेणियाँ', 'golden-rashifal' ); ?></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
