<?php
/**
 * Custom search form.
 *
 * @package GoldenRashifal
 */
?>
<form role="search" method="get" class="gr-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="gr-s" class="screen-reader-text"><?php esc_html_e( 'खोजें', 'golden-rashifal' ); ?></label>
    <div class="gr-search__row">
        <span class="gr-search__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
        </span>
        <input type="search" id="gr-s" class="gr-search__input" name="s" placeholder="<?php esc_attr_e( 'राशि, त्योहार या लेख खोजें…', 'golden-rashifal' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" />
        <button type="submit" class="gr-search__submit"><?php esc_html_e( 'खोजें', 'golden-rashifal' ); ?></button>
    </div>
</form>
