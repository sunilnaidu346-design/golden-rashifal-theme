/**
 * Golden Rashifal — Cookie Notice
 *
 * Behaviour:
 *   - Reads localStorage key 'gr_cookie_consent' on every page load.
 *   - If key is absent → show the banner after a 600ms delay (not on first paint).
 *   - Accept  → stores 'accepted', removes banner, fires custom event.
 *   - Decline → stores 'declined', removes banner.
 *   - Once stored the banner never reappears on any page in the session or future visits.
 *   - No cookies are set by the notice itself — preference lives in localStorage only.
 *
 * Zero dependencies. Self-contained IIFE. Works on all modern browsers.
 * Gracefully degrades when localStorage is unavailable (incognito, storage full).
 */
(function () {
    'use strict';

    var STORAGE_KEY = 'gr_cookie_consent';
    var BANNER_ID   = 'gr-cookie-banner';

    /* ── Helpers ──────────────────────────────────────────────── */

    function storageGet() {
        try { return localStorage.getItem(STORAGE_KEY); } catch (e) { return null; }
    }

    function storageSet(val) {
        try { localStorage.setItem(STORAGE_KEY, val); } catch (e) {}
    }

    function dismiss(val) {
        storageSet(val);
        var el = document.getElementById(BANNER_ID);
        if (!el) return;
        el.classList.remove('gr-cookie--visible');
        el.setAttribute('aria-hidden', 'true');
        /* Remove from DOM after transition finishes */
        el.addEventListener('transitionend', function () {
            if (el.parentNode) el.parentNode.removeChild(el);
        }, { once: true });
        /* Dispatch event so analytics / tag managers can react */
        try {
            document.dispatchEvent(new CustomEvent('gr:cookieConsent', { detail: { choice: val } }));
        } catch (e) {}
    }

    /* ── Init ─────────────────────────────────────────────────── */

    function init() {
        /* Already answered — do nothing */
        if (storageGet()) return;

        var banner = document.getElementById(BANNER_ID);
        if (!banner) return;

        /* Show after short delay to avoid layout shift on first paint */
        setTimeout(function () {
            banner.classList.add('gr-cookie--visible');
            banner.removeAttribute('aria-hidden');
            /* Move focus to the Accept button for keyboard users */
            var acceptBtn = banner.querySelector('[data-gr-cookie-accept]');
            if (acceptBtn) acceptBtn.focus();
        }, 600);

        /* Button listeners */
        var acceptBtn  = banner.querySelector('[data-gr-cookie-accept]');
        var declineBtn = banner.querySelector('[data-gr-cookie-decline]');

        if (acceptBtn)  acceptBtn.addEventListener('click',  function () { dismiss('accepted'); });
        if (declineBtn) declineBtn.addEventListener('click', function () { dismiss('declined'); });

        /* Keyboard: Escape key dismisses (counts as decline) */
        document.addEventListener('keydown', function onKey(e) {
            if (e.key === 'Escape') {
                dismiss('declined');
                document.removeEventListener('keydown', onKey);
            }
        });
    }

    /* Run after DOM is ready */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
