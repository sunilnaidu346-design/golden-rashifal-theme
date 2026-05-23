/**
 * Golden Rashifal — main interactions
 *
 * Vanilla JS, no dependencies, no frameworks. Each block is wrapped in a
 * tiny IIFE so naming stays local and one failure can't cascade.
 *
 * Modules:
 *   - Sticky header scroll state
 *   - Mobile drawer (gr-mobile)
 *   - Search popup (gr-search-pop)
 *   - Sticky scroll-to-top button
 *   - Reading progress bar (single posts)
 *   - TOC active link tracking
 *   - Share buttons (popup-window for socials, copy-to-clipboard for "copy")
 */

(function () {
    'use strict';

    var doc = document;

    /* Helpers ------------------------------------------------------------- */
    function $(sel, ctx) { return (ctx || doc).querySelector(sel); }
    function $$(sel, ctx) { return Array.prototype.slice.call((ctx || doc).querySelectorAll(sel)); }

    /* Sticky header shadow on scroll ------------------------------------- */
    (function () {
        var header = $('[data-gr-header]');
        if (!header) return;
        var ticking = false;
        function onScroll() {
            if (window.scrollY > 4) header.classList.add('is-scrolled');
            else header.classList.remove('is-scrolled');
            ticking = false;
        }
        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(onScroll);
                ticking = true;
            }
        }, { passive: true });
        onScroll();
    })();

    /* Mobile drawer + search popup --------------------------------------- */
    (function () {
        function open(el) {
            el.classList.add('is-open');
            el.setAttribute('aria-hidden', 'false');
            doc.body.style.overflow = 'hidden';
        }
        function close(el) {
            el.classList.remove('is-open');
            el.setAttribute('aria-hidden', 'true');
            doc.body.style.overflow = '';
        }

        $$('[data-gr-toggle]').forEach(function (btn) {
            var target = btn.getAttribute('data-gr-toggle');
            var panel = '';
            if (target === 'menu') panel = '[data-gr-mobile]';
            else if (target === 'search') panel = '[data-gr-search]';
            else return;

            var el = $(panel);
            if (!el) return;
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                if (el.classList.contains('is-open')) {
                    close(el);
                    btn.setAttribute('aria-expanded', 'false');
                } else {
                    open(el);
                    btn.setAttribute('aria-expanded', 'true');
                    var input = el.querySelector('input[type="search"]');
                    if (input) setTimeout(function () { input.focus(); }, 50);
                }
            });
        });

        // Click outside the panel closes it.
        $$('[data-gr-mobile], [data-gr-search]').forEach(function (overlay) {
            overlay.addEventListener('click', function (e) {
                if (e.target === overlay) close(overlay);
            });
        });

        // Esc closes both.
        doc.addEventListener('keydown', function (e) {
            if (e.key !== 'Escape') return;
            var openPanels = $$('.gr-mobile.is-open, .gr-search-pop.is-open');
            openPanels.forEach(close);
        });
    })();

    /* Scroll-to-top ------------------------------------------------------- */
    (function () {
        var btn = $('[data-gr-totop]');
        if (!btn) return;
        btn.removeAttribute('hidden');
        var threshold = 480;
        function check() {
            if (window.scrollY > threshold) btn.classList.add('is-visible');
            else btn.classList.remove('is-visible');
        }
        window.addEventListener('scroll', check, { passive: true });
        btn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        check();
    })();

    /* Reading progress bar ------------------------------------------------ */
    (function () {
        var bar = $('[data-gr-progress] .gr-progress__bar');
        var article = $('.gr-article__body') || $('.gr-article');
        if (!bar || !article) return;
        function update() {
            var rect = article.getBoundingClientRect();
            var top = rect.top + window.scrollY;
            var height = article.offsetHeight - window.innerHeight;
            if (height <= 0) {
                bar.style.width = '100%';
                return;
            }
            var scrolled = window.scrollY - top;
            var pct = Math.max(0, Math.min(100, (scrolled / height) * 100));
            bar.style.width = pct + '%';
        }
        window.addEventListener('scroll', update, { passive: true });
        window.addEventListener('resize', update);
        update();
    })();

    /* TOC active link tracking ------------------------------------------- */
    (function () {
        var toc = $('[data-gr-toc]');
        if (!toc) return;
        var links = $$('a[data-gr-toc-link]', toc);
        if (!links.length) return;

        var targets = links
            .map(function (a) {
                var hash = a.getAttribute('href');
                if (!hash || hash.charAt(0) !== '#') return null;
                var el = doc.getElementById(hash.substring(1));
                return el ? { link: a, el: el } : null;
            })
            .filter(Boolean);
        if (!targets.length) return;

        function setActive() {
            var threshold = window.innerHeight * 0.25;
            var current = null;
            for (var i = 0; i < targets.length; i++) {
                var top = targets[i].el.getBoundingClientRect().top;
                if (top - threshold <= 0) current = targets[i];
                else break;
            }
            links.forEach(function (a) { a.classList.remove('is-active'); });
            if (current) current.link.classList.add('is-active');
        }
        window.addEventListener('scroll', setActive, { passive: true });
        setActive();

        // Smooth-scroll with header offset.
        targets.forEach(function (t) {
            t.link.addEventListener('click', function (e) {
                e.preventDefault();
                var headerOffset = 80;
                var top = t.el.getBoundingClientRect().top + window.scrollY - headerOffset;
                window.scrollTo({ top: top, behavior: 'smooth' });
                history.pushState(null, '', '#' + t.el.id);
            });
        });
    })();

    /* Share buttons: open in centered popup, copy-link to clipboard ------ */
    (function () {
        var shareBlock = $('[data-gr-share]');
        if (!shareBlock) return;

        // External share popups
        $$('a.gr-share__btn', shareBlock).forEach(function (a) {
            if (a.hasAttribute('data-gr-share-copy')) return;
            a.addEventListener('click', function (e) {
                if (a.target === '_blank' && a.href && a.href !== '#') {
                    e.preventDefault();
                    var w = 560;
                    var h = 480;
                    var left = (window.screen.width - w) / 2;
                    var top = (window.screen.height - h) / 2;
                    window.open(a.href, 'gr-share', 'width=' + w + ',height=' + h + ',left=' + left + ',top=' + top + ',noopener');
                }
            });
        });

        // Copy link
        var copyBtn = $('[data-gr-share-copy]', shareBlock);
        if (copyBtn) {
            copyBtn.addEventListener('click', function (e) {
                e.preventDefault();
                var url = shareBlock.getAttribute('data-share-url') || window.location.href;
                if (navigator.clipboard && navigator.clipboard.writeText) {
                    navigator.clipboard.writeText(url).then(showCopied).catch(legacyCopy.bind(null, url));
                } else {
                    legacyCopy(url);
                }
            });

            function legacyCopy(text) {
                try {
                    var ta = doc.createElement('textarea');
                    ta.value = text;
                    ta.setAttribute('readonly', '');
                    ta.style.position = 'absolute';
                    ta.style.left = '-9999px';
                    doc.body.appendChild(ta);
                    ta.select();
                    doc.execCommand('copy');
                    doc.body.removeChild(ta);
                    showCopied();
                } catch (err) { /* silent */ }
            }

            function showCopied() {
                copyBtn.classList.add('is-copied');
                setTimeout(function () { copyBtn.classList.remove('is-copied'); }, 1400);
            }
        }
    })();

    /* External links inside post content open in new tab ----------------- */
    (function () {
        var body = $('.gr-article__body');
        if (!body) return;
        var host = window.location.hostname;
        $$('a[href^="http"]', body).forEach(function (a) {
            try {
                var u = new URL(a.href);
                if (u.hostname && u.hostname !== host) {
                    a.setAttribute('target', '_blank');
                    var rel = (a.getAttribute('rel') || '').split(' ');
                    if (rel.indexOf('noopener') === -1) rel.push('noopener');
                    if (rel.indexOf('nofollow') === -1) rel.push('nofollow');
                    a.setAttribute('rel', rel.join(' ').trim());
                }
            } catch (e) { /* ignore bad URLs */ }
        });
    })();

})();
