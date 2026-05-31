<?php
/**
 * Homepage — Kundli & Navgraha section.
 * Functional form with validation, result display, and planet positions.
 *
 * @package GoldenRashifal
 */

$planets = array(
    array( 'name' => 'सूर्य', 'rashi' => 'मेष 15°', 'sym' => '☉', 'color' => '#ff5722', 'status' => 'शुभ', 'scolor' => '#28a745' ),
    array( 'name' => 'चंद्र', 'rashi' => 'वृष 8°', 'sym' => '☽', 'color' => '#9e9e9e', 'status' => 'शुभ', 'scolor' => '#28a745' ),
    array( 'name' => 'मंगल', 'rashi' => 'कर्क 22°', 'sym' => '♂', 'color' => '#f44336', 'status' => 'सामान्य', 'scolor' => '#ff8c00' ),
    array( 'name' => 'बुध', 'rashi' => 'मेष 28°', 'sym' => '☿', 'color' => '#4caf50', 'status' => 'शुभ', 'scolor' => '#28a745' ),
    array( 'name' => 'गुरु', 'rashi' => 'वृष 12°', 'sym' => '♃', 'color' => '#ff9800', 'status' => 'अति शुभ', 'scolor' => '#28a745' ),
    array( 'name' => 'शुक्र', 'rashi' => 'मीन 5°', 'sym' => '♀', 'color' => '#e91e63', 'status' => 'शुभ', 'scolor' => '#28a745' ),
    array( 'name' => 'शनि', 'rashi' => 'कुंभ 18°', 'sym' => '♄', 'color' => '#795548', 'status' => 'सावधान', 'scolor' => '#dc3545' ),
    array( 'name' => 'राहु', 'rashi' => 'मीन 19°', 'sym' => '☊', 'color' => '#607d8b', 'status' => 'सामान्य', 'scolor' => '#ff8c00' ),
    array( 'name' => 'केतु', 'rashi' => 'कन्या 19°', 'sym' => '☋', 'color' => '#9c27b0', 'status' => 'सामान्य', 'scolor' => '#ff8c00' ),
);

$rashis = array(
    'mesh'    => array( 'hi' => 'मेष', 'en' => 'Aries', 'lord' => 'मंगल', 'element' => 'अग्नि' ),
    'vrishabh' => array( 'hi' => 'वृषभ', 'en' => 'Taurus', 'lord' => 'शुक्र', 'element' => 'पृथ्वी' ),
    'mithun'  => array( 'hi' => 'मिथुन', 'en' => 'Gemini', 'lord' => 'बुध', 'element' => 'वायु' ),
    'kark'    => array( 'hi' => 'कर्क', 'en' => 'Cancer', 'lord' => 'चंद्र', 'element' => 'जल' ),
    'singh'   => array( 'hi' => 'सिंह', 'en' => 'Leo', 'lord' => 'सूर्य', 'element' => 'अग्नि' ),
    'kanya'   => array( 'hi' => 'कन्या', 'en' => 'Virgo', 'lord' => 'बुध', 'element' => 'पृथ्वी' ),
    'tula'    => array( 'hi' => 'तुला', 'en' => 'Libra', 'lord' => 'शुक्र', 'element' => 'वायु' ),
    'vrishchik' => array( 'hi' => 'वृश्चिक', 'en' => 'Scorpio', 'lord' => 'मंगल', 'element' => 'जल' ),
    'dhanu'   => array( 'hi' => 'धनु', 'en' => 'Sagittarius', 'lord' => 'गुरु', 'element' => 'अग्नि' ),
    'makar'   => array( 'hi' => 'मकर', 'en' => 'Capricorn', 'lord' => 'शनि', 'element' => 'पृथ्वी' ),
    'kumbh'   => array( 'hi' => 'कुंभ', 'en' => 'Aquarius', 'lord' => 'शनि', 'element' => 'वायु' ),
    'meen'    => array( 'hi' => 'मीन', 'en' => 'Pisces', 'lord' => 'गुरु', 'element' => 'जल' ),
);
?>
<section class="gr-section gr-section--kundli gr-section--kundli-light">
    <div class="gr-wrap">

        <header class="gr-section__head gr-section__head--center gr-section__head--light">
            <span class="gr-section__badge gr-section__badge--light">कुंडली एवं ग्रह स्थिति</span>
            <h2 class="gr-section__title gr-section__title--light">कुंडली और <span class="gr-text--gold">नवग्रह</span></h2>
        </header>

        <div class="gr-kundli-layout">

            <div class="gr-kundli-form">
                <h3><?php esc_html_e( 'अपनी कुंडली जानें', 'golden-rashifal' ); ?></h3>
                <form id="gr-kundli-form" novalidate>
                    <label for="gr-kundli-name"><?php esc_html_e( 'आपका नाम', 'golden-rashifal' ); ?></label>
                    <input type="text" id="gr-kundli-name" name="kundli_name" placeholder="<?php esc_attr_e( 'अपना नाम लिखें', 'golden-rashifal' ); ?>" required autocomplete="name" />

                    <label for="gr-kundli-date"><?php esc_html_e( 'जन्म तिथि', 'golden-rashifal' ); ?></label>
                    <input type="date" id="gr-kundli-date" name="kundli_date" required max="<?php echo esc_attr( wp_date( 'Y-m-d' ) ); ?>" />

                    <label for="gr-kundli-rashi"><?php esc_html_e( 'राशि चुनें', 'golden-rashifal' ); ?></label>
                    <select id="gr-kundli-rashi" name="kundli_rashi" required>
                        <option value=""><?php esc_html_e( 'राशि चुनें', 'golden-rashifal' ); ?></option>
                        <?php foreach ( $rashis as $key => $r ) : ?>
                        <option value="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $r['hi'] . ' (' . $r['en'] . ')' ); ?></option>
                        <?php endforeach; ?>
                    </select>

                    <div class="gr-kundli-form__error" id="gr-kundli-error" role="alert" aria-live="polite"></div>

                    <button type="submit" class="gr-btn gr-btn--gold-full" id="gr-kundli-submit">
                        <span class="gr-kundli-form__btn-text"><?php esc_html_e( 'कुंडली देखें', 'golden-rashifal' ); ?></span>
                        <span class="gr-kundli-form__btn-loading" style="display:none"><?php esc_html_e( 'तैयार हो रही है...', 'golden-rashifal' ); ?></span>
                    </button>
                </form>

                <!-- Result Area -->
                <div class="gr-kundli-result" id="gr-kundli-result" style="display:none" aria-live="polite">
                    <div class="gr-kundli-result__card">
                        <div class="gr-kundli-result__head">
                            <span class="gr-kundli-result__icon" aria-hidden="true">&#9788;</span>
                            <div>
                                <h4 class="gr-kundli-result__title" id="gr-kundli-result-title"></h4>
                                <span class="gr-kundli-result__sub" id="gr-kundli-result-sub"></span>
                            </div>
                        </div>
                        <div class="gr-kundli-result__body" id="gr-kundli-result-body"></div>
                        <div class="gr-kundli-result__footer">
                            <button type="button" class="gr-btn gr-btn--outline-light gr-btn--sm" id="gr-kundli-reset"><?php esc_html_e( 'फिर से देखें', 'golden-rashifal' ); ?></button>
                            <a class="gr-btn gr-btn--ghost gr-btn--sm" href="<?php echo esc_url( home_url( '/kundli/' ) ); ?>"><?php esc_html_e( 'विस्तृत जानकारी', 'golden-rashifal' ); ?> &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gr-kundli-planets">
                <h3><?php esc_html_e( 'आज की ग्रह स्थिति', 'golden-rashifal' ); ?></h3>
                <div class="gr-planet-list">
                    <?php foreach ( $planets as $p ) : ?>
                    <div class="gr-planet-row">
                        <span class="gr-planet-row__sym" style="background:<?php echo esc_attr( $p['color'] ); ?>"><?php echo esc_html( $p['sym'] ); ?></span>
                        <div class="gr-planet-row__info">
                            <strong><?php echo esc_html( $p['name'] ); ?></strong>
                            <span><?php echo esc_html( $p['rashi'] ); ?></span>
                        </div>
                        <span class="gr-planet-row__status" style="color:<?php echo esc_attr( $p['scolor'] ); ?>"><?php echo esc_html( $p['status'] ); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a class="gr-btn gr-btn--outline-light" href="<?php echo esc_url( home_url( '/kundli/' ) ); ?>"><?php esc_html_e( 'विस्तृत ग्रह रिपोर्ट देखें', 'golden-rashifal' ); ?> &rarr;</a>
            </div>

        </div>
    </div>
</section>

<script>
(function(){
'use strict';

var rashiData = <?php echo wp_json_encode( $rashis ); ?>;

var form = document.getElementById('gr-kundli-form');
var nameInput = document.getElementById('gr-kundli-name');
var dateInput = document.getElementById('gr-kundli-date');
var rashiSelect = document.getElementById('gr-kundli-rashi');
var errorDiv = document.getElementById('gr-kundli-error');
var resultDiv = document.getElementById('gr-kundli-result');
var submitBtn = document.getElementById('gr-kundli-submit');
var resetBtn = document.getElementById('gr-kundli-reset');
var btnText = form.querySelector('.gr-kundli-form__btn-text');
var btnLoading = form.querySelector('.gr-kundli-form__btn-loading');

if (!form) return;

function showError(msg) {
    errorDiv.textContent = msg;
    errorDiv.style.display = 'block';
}

function hideError() {
    errorDiv.textContent = '';
    errorDiv.style.display = 'none';
}

function setLoading(state) {
    submitBtn.disabled = state;
    btnText.style.display = state ? 'none' : '';
    btnLoading.style.display = state ? 'inline' : 'none';
}

function calculateAge(dateStr) {
    var birth = new Date(dateStr);
    var today = new Date();
    var age = today.getFullYear() - birth.getFullYear();
    var m = today.getMonth() - birth.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birth.getDate())) age--;
    return age;
}

function getDayOfWeek(dateStr) {
    var days = ['रविवार','सोमवार','मंगलवार','बुधवार','गुरुवार','शुक्रवार','शनिवार'];
    return days[new Date(dateStr).getDay()];
}

function getNakshatra(rashiKey) {
    var map = {
        mesh:'अश्विनी / भरणी / कृत्तिका',vrishabh:'कृत्तिका / रोहिणी / मृगशिरा',
        mithun:'मृगशिरा / आर्द्रा / पुनर्वसु',kark:'पुनर्वसु / पुष्य / आश्लेषा',
        singh:'मघा / पूर्वा फाल्गुनी / उत्तरा फाल्गुनी',kanya:'उत्तरा फाल्गुनी / हस्त / चित्रा',
        tula:'चित्रा / स्वाति / विशाखा',vrishchik:'विशाखा / अनुराधा / ज्येष्ठा',
        dhanu:'मूल / पूर्वाषाढ़ा / उत्तराषाढ़ा',makar:'उत्तराषाढ़ा / श्रवण / धनिष्ठा',
        kumbh:'धनिष्ठा / शतभिषा / पूर्वा भाद्रपद',meen:'पूर्वा भाद्रपद / उत्तरा भाद्रपद / रेवती'
    };
    return map[rashiKey] || 'N/A';
}

function getLuckyNumber(rashiKey) {
    var map = {mesh:'9',vrishabh:'6',mithun:'5',kark:'2',singh:'1',kanya:'5',tula:'6',vrishchik:'9',dhanu:'3',makar:'8',kumbh:'8',meen:'3'};
    return map[rashiKey] || '7';
}

function getLuckyColor(rashiKey) {
    var map = {mesh:'लाल',vrishabh:'हरा',mithun:'पीला',kark:'सफ़ेद',singh:'सुनहरा',kanya:'हरा',tula:'नीला',vrishchik:'गहरा लाल',dhanu:'पीला',makar:'काला',kumbh:'नीला',meen:'पीला'};
    return map[rashiKey] || 'सफ़ेद';
}

function generateResult(name, dateStr, rashiKey) {
    var rashi = rashiData[rashiKey];
    var age = calculateAge(dateStr);
    var day = getDayOfWeek(dateStr);
    var nakshatra = getNakshatra(rashiKey);
    var luckyNum = getLuckyNumber(rashiKey);
    var luckyColor = getLuckyColor(rashiKey);

    document.getElementById('gr-kundli-result-title').textContent = name + ' की कुंडली';
    document.getElementById('gr-kundli-result-sub').textContent = rashi.hi + ' राशि (' + rashi.en + ')';

    var html = '<div class="gr-kundli-result__grid">';
    html += '<div class="gr-kundli-result__item"><span class="gr-kundli-result__label">राशि</span><strong>' + rashi.hi + '</strong></div>';
    html += '<div class="gr-kundli-result__item"><span class="gr-kundli-result__label">राशि स्वामी</span><strong>' + rashi.lord + '</strong></div>';
    html += '<div class="gr-kundli-result__item"><span class="gr-kundli-result__label">तत्व</span><strong>' + rashi.element + '</strong></div>';
    html += '<div class="gr-kundli-result__item"><span class="gr-kundli-result__label">आयु</span><strong>' + age + ' वर्ष</strong></div>';
    html += '<div class="gr-kundli-result__item"><span class="gr-kundli-result__label">जन्म दिवस</span><strong>' + day + '</strong></div>';
    html += '<div class="gr-kundli-result__item"><span class="gr-kundli-result__label">संभावित नक्षत्र</span><strong>' + nakshatra + '</strong></div>';
    html += '<div class="gr-kundli-result__item"><span class="gr-kundli-result__label">भाग्यांक</span><strong>' + luckyNum + '</strong></div>';
    html += '<div class="gr-kundli-result__item"><span class="gr-kundli-result__label">शुभ रंग</span><strong>' + luckyColor + '</strong></div>';
    html += '</div>';
    html += '<p class="gr-kundli-result__note">यह सामान्य राशि-आधारित जानकारी है। सटीक कुंडली के लिए जन्म समय और स्थान भी आवश्यक है।</p>';

    document.getElementById('gr-kundli-result-body').innerHTML = html;
}

form.addEventListener('submit', function(e) {
    e.preventDefault();
    hideError();

    var name = nameInput.value.trim();
    var dateVal = dateInput.value;
    var rashiVal = rashiSelect.value;

    // Validation
    if (!name) { showError('कृपया अपना नाम दर्ज करें।'); nameInput.focus(); return; }
    if (name.length < 2) { showError('नाम कम से कम 2 अक्षर का होना चाहिए।'); nameInput.focus(); return; }
    if (!dateVal) { showError('कृपया जन्म तिथि चुनें।'); dateInput.focus(); return; }

    var birthDate = new Date(dateVal);
    var today = new Date();
    if (birthDate > today) { showError('जन्म तिथि भविष्य की नहीं हो सकती।'); dateInput.focus(); return; }
    if (birthDate.getFullYear() < 1900) { showError('कृपया सही जन्म तिथि दर्ज करें।'); dateInput.focus(); return; }

    if (!rashiVal) { showError('कृपया अपनी राशि चुनें।'); rashiSelect.focus(); return; }

    // Show loading
    setLoading(true);

    // Simulate brief processing for UX (feels more real)
    setTimeout(function() {
        generateResult(name, dateVal, rashiVal);
        resultDiv.style.display = 'block';
        form.style.display = 'none';
        setLoading(false);
        resultDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }, 600);
});

resetBtn.addEventListener('click', function() {
    resultDiv.style.display = 'none';
    form.style.display = 'block';
    form.reset();
    hideError();
});

})();
</script>
