/**
 * Golden Rashifal v2 — Main interactions.
 * Vanilla JS, zero dependencies, each module in its own IIFE.
 */

(function () {
    'use strict';

    var doc = document;
    function $(sel, ctx) { return (ctx || doc).querySelector(sel); }
    function $$(sel, ctx) { return [].slice.call((ctx || doc).querySelectorAll(sel)); }

    /* Sticky header shadow */
    (function () {
        var header = $('[data-gr-header]');
        if (!header) return;
        var ticking = false;
        function check() {
            header.classList.toggle('is-scrolled', window.scrollY > 8);
            ticking = false;
        }
        window.addEventListener('scroll', function () {
            if (!ticking) { requestAnimationFrame(check); ticking = true; }
        }, { passive: true });
        check();
    })();

    /* Mobile menu + search popup toggle */
    (function () {
        function open(el) { el.classList.add('is-open'); el.setAttribute('aria-hidden', 'false'); doc.body.style.overflow = 'hidden'; }
        function close(el) { el.classList.remove('is-open'); el.setAttribute('aria-hidden', 'true'); doc.body.style.overflow = ''; }

        $$('[data-gr-toggle]').forEach(function (btn) {
            var key = btn.getAttribute('data-gr-toggle');
            var panel = key === 'menu' ? $('[data-gr-mobile]') : key === 'search' ? $('[data-gr-search]') : null;
            if (!panel) return;
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                if (panel.classList.contains('is-open')) { close(panel); btn.setAttribute('aria-expanded', 'false'); }
                else { open(panel); btn.setAttribute('aria-expanded', 'true'); var inp = panel.querySelector('input[type="search"]'); if (inp) setTimeout(function () { inp.focus(); }, 60); }
            });
        });

        $$('[data-gr-mobile], [data-gr-search]').forEach(function (overlay) {
            overlay.addEventListener('click', function (e) { if (e.target === overlay) close(overlay); });
        });

        doc.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') $$('.gr-mobile.is-open, .gr-search-pop.is-open').forEach(close);
        });
    })();

    /* Scroll-to-top */
    (function () {
        var btn = $('[data-gr-totop]');
        if (!btn) return;
        btn.removeAttribute('hidden');
        function check() { btn.classList.toggle('is-visible', window.scrollY > 500); }
        window.addEventListener('scroll', check, { passive: true });
        btn.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: 'smooth' }); });
        check();
    })();

    /* Reading progress bar */
    (function () {
        var bar = $('[data-gr-progress] .gr-progress__bar');
        var article = $('.gr-article__body') || $('.gr-article');
        if (!bar || !article) return;
        function update() {
            var rect = article.getBoundingClientRect();
            var top = rect.top + window.scrollY;
            var height = article.offsetHeight - window.innerHeight;
            if (height <= 0) { bar.style.width = '100%'; return; }
            var pct = Math.max(0, Math.min(100, ((window.scrollY - top) / height) * 100));
            bar.style.width = pct + '%';
        }
        window.addEventListener('scroll', update, { passive: true });
        update();
    })();

    /* TOC active link tracking */
    (function () {
        var links = $$('a[data-gr-toc-link]');
        if (!links.length) return;
        var targets = links.map(function (a) {
            var hash = a.getAttribute('href');
            if (!hash || hash.charAt(0) !== '#') return null;
            var el = doc.getElementById(hash.substring(1));
            return el ? { link: a, el: el } : null;
        }).filter(Boolean);
        if (!targets.length) return;

        function setActive() {
            var threshold = window.innerHeight * 0.25;
            var current = null;
            for (var i = 0; i < targets.length; i++) {
                if (targets[i].el.getBoundingClientRect().top - threshold <= 0) current = targets[i];
                else break;
            }
            links.forEach(function (a) { a.classList.remove('is-active'); });
            if (current) current.link.classList.add('is-active');
        }
        window.addEventListener('scroll', setActive, { passive: true });
        setActive();

        targets.forEach(function (t) {
            t.link.addEventListener('click', function (e) {
                e.preventDefault();
                var top = t.el.getBoundingClientRect().top + window.scrollY - 80;
                window.scrollTo({ top: top, behavior: 'smooth' });
                history.pushState(null, '', '#' + t.el.id);
            });
        });
    })();

    /* Share buttons — popup window + clipboard copy */
    (function () {
        var block = $('[data-gr-share]');
        if (!block) return;

        $$('a.gr-share__btn', block).forEach(function (a) {
            if (a.hasAttribute('data-gr-share-copy')) return;
            a.addEventListener('click', function (e) {
                if (a.target === '_blank' && a.href && a.href !== '#') {
                    e.preventDefault();
                    window.open(a.href, 'gr-share', 'width=560,height=480,left=' + ((screen.width - 560) / 2) + ',top=' + ((screen.height - 480) / 2));
                }
            });
        });

        var copyBtn = $('[data-gr-share-copy]', block);
        if (copyBtn) {
            copyBtn.addEventListener('click', function (e) {
                e.preventDefault();
                var url = block.getAttribute('data-share-url') || location.href;
                if (navigator.clipboard) { navigator.clipboard.writeText(url).then(flash); }
                else { var ta = doc.createElement('textarea'); ta.value = url; ta.style.position = 'fixed'; ta.style.left = '-9999px'; doc.body.appendChild(ta); ta.select(); doc.execCommand('copy'); doc.body.removeChild(ta); flash(); }
            });
            function flash() { copyBtn.classList.add('is-copied'); setTimeout(function () { copyBtn.classList.remove('is-copied'); }, 1200); }
        }
    })();

    /* External links in article open in new tab */
    (function () {
        var body = $('.gr-article__body');
        if (!body) return;
        var host = location.hostname;
        $$('a[href^="http"]', body).forEach(function (a) {
            try {
                if (new URL(a.href).hostname !== host) {
                    a.setAttribute('target', '_blank');
                    a.setAttribute('rel', ((a.getAttribute('rel') || '') + ' noopener nofollow').trim());
                }
            } catch (e) {}
        });
    })();

})();
