/**
 * Live clock — updates every second.
 *
 * Locale-aware time string. Falls back to a simple HH:MM:SS if Intl is
 * not available. No external dependencies.
 */

(function () {
    'use strict';

    var slots = document.querySelectorAll('[data-gr-clock-time]');
    if (!slots.length) return;

    var formatter = null;
    try {
        formatter = new Intl.DateTimeFormat(document.documentElement.lang || 'hi-IN', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        });
    } catch (e) { /* old browser, fall through */ }

    function pad(n) { return n < 10 ? '0' + n : '' + n; }

    function tick() {
        var now = new Date();
        var text;
        if (formatter) {
            text = formatter.format(now);
        } else {
            var h = now.getHours();
            var period = h >= 12 ? ' PM' : ' AM';
            var h12 = h % 12;
            if (h12 === 0) h12 = 12;
            text = pad(h12) + ':' + pad(now.getMinutes()) + ':' + pad(now.getSeconds()) + period;
        }
        for (var i = 0; i < slots.length; i++) {
            slots[i].textContent = text;
        }
    }

    tick();
    setInterval(tick, 1000);
})();
