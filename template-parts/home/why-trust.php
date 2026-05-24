<?php
/**
 * Homepage — Why Trust Us / Founder Editorial section.
 * Premium left-right editorial layout with author bio on right.
 *
 * @package GoldenRashifal
 */
?>
<section class="gr-why-trust" aria-label="<?php esc_attr_e( 'हम पर विश्वास क्यों करें', 'golden-rashifal' ); ?>">
    <div class="gr-wrap gr-why-trust__inner">

        <div class="gr-why-trust__left">
            <span class="gr-why-trust__label"><?php esc_html_e( 'हम पर विश्वास क्यों करें', 'golden-rashifal' ); ?></span>
            <h2 class="gr-why-trust__title"><?php esc_html_e( 'परंपरा और प्रामाणिकता का संगम', 'golden-rashifal' ); ?></h2>
            <p class="gr-why-trust__desc"><?php esc_html_e( 'Golden Rashifal की संपादकीय टीम वैदिक ज्योतिष, पंचांग गणना और शास्त्रीय परंपराओं में गहरा अनुभव रखती है। हम हर जानकारी को प्रकाशित करने से पहले प्रामाणिक स्रोतों से सत्यापित करते हैं। हमारा उद्देश्य पाठकों को सरल, संतुलित और विश्वसनीय ज्योतिषीय मार्गदर्शन देना है — बिना किसी अतिशयोक्ति या भ्रामक दावों के।', 'golden-rashifal' ); ?></p>
            <div class="gr-why-trust__points">
                <div class="gr-why-trust__point">
                    <span class="gr-why-trust__point-num">01</span>
                    <div>
                        <strong><?php esc_html_e( 'संपादकीय सत्यापन', 'golden-rashifal' ); ?></strong>
                        <span><?php esc_html_e( 'हर लेख अनुभवी संपादकों द्वारा जाँचा और सत्यापित किया जाता है', 'golden-rashifal' ); ?></span>
                    </div>
                </div>
                <div class="gr-why-trust__point">
                    <span class="gr-why-trust__point-num">02</span>
                    <div>
                        <strong><?php esc_html_e( 'शास्त्रीय आधार', 'golden-rashifal' ); ?></strong>
                        <span><?php esc_html_e( 'सभी गणनाएँ वैदिक सिद्धांतों और पारंपरिक पंचांग विधियों पर आधारित हैं', 'golden-rashifal' ); ?></span>
                    </div>
                </div>
                <div class="gr-why-trust__point">
                    <span class="gr-why-trust__point-num">03</span>
                    <div>
                        <strong><?php esc_html_e( 'पारदर्शी नीति', 'golden-rashifal' ); ?></strong>
                        <span><?php esc_html_e( 'हमारी संपादकीय नीति सार्वजनिक है — पाठक जान सकते हैं कि हम क्या लिखते हैं और क्यों', 'golden-rashifal' ); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="gr-why-trust__right">
            <div class="gr-why-trust__profile">
                <div class="gr-why-trust__profile-img">
                    <?php
                    // Show customizer-set image or default avatar placeholder.
                    $founder_img = get_theme_mod( 'gr_founder_image', '' );
                    if ( $founder_img ) {
                        echo '<img src="' . esc_url( $founder_img ) . '" alt="' . esc_attr__( 'संस्थापक', 'golden-rashifal' ) . '" loading="lazy" />';
                    } else {
                        // Default: show admin avatar or placeholder silhouette.
                        echo get_avatar( get_option( 'admin_email' ), 180, '', 'संस्थापक', array( 'class' => 'gr-why-trust__avatar' ) );
                    }
                    ?>
                </div>
                <div class="gr-why-trust__profile-badge">
                    <span><?php esc_html_e( 'संस्थापक एवं मुख्य संपादक', 'golden-rashifal' ); ?></span>
                </div>
                <div class="gr-why-trust__profile-info">
                    <h3 class="gr-why-trust__profile-name"><?php echo esc_html( get_theme_mod( 'gr_founder_name', 'Golden Rashifal टीम' ) ); ?></h3>
                    <p class="gr-why-trust__profile-bio"><?php echo esc_html( get_theme_mod( 'gr_founder_bio', 'वैदिक ज्योतिष और पंचांग विज्ञान में अनुभवी। पाठकों को प्रामाणिक, संतुलित और सरल ज्योतिषीय जानकारी देने के उद्देश्य से Golden Rashifal की स्थापना की।' ) ); ?></p>
                </div>
                <div class="gr-why-trust__profile-stats">
                    <div class="gr-why-trust__pstat">
                        <span class="gr-why-trust__pstat-val"><?php esc_html_e( '100+', 'golden-rashifal' ); ?></span>
                        <span class="gr-why-trust__pstat-label"><?php esc_html_e( 'प्रकाशित लेख', 'golden-rashifal' ); ?></span>
                    </div>
                    <div class="gr-why-trust__pstat">
                        <span class="gr-why-trust__pstat-val"><?php esc_html_e( '365', 'golden-rashifal' ); ?></span>
                        <span class="gr-why-trust__pstat-label"><?php esc_html_e( 'दिन अपडेट', 'golden-rashifal' ); ?></span>
                    </div>
                    <div class="gr-why-trust__pstat">
                        <span class="gr-why-trust__pstat-val"><?php esc_html_e( '45+', 'golden-rashifal' ); ?></span>
                        <span class="gr-why-trust__pstat-label"><?php esc_html_e( 'विषय श्रेणियाँ', 'golden-rashifal' ); ?></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
