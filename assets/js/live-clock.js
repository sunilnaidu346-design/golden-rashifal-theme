/**
 * Live clock — updates [data-gr-clock-time] every second.
 * Optional: only runs if the element exists in the DOM.
 */
(function () {
    'use strict';
    var slots = document.querySelectorAll('[data-gr-clock-time]');
    if (!slots.length) return;

    var fmt = null;
    try {
        fmt = new Intl.DateTimeFormat(document.documentElement.lang || 'hi-IN', {
            hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true
        });
    } catch (e) {}

    function pad(n) { return n < 10 ? '0' + n : '' + n; }

    function tick() {
        var now = new Date();
        var text;
        if (fmt) { text = fmt.format(now); }
        else {
            var h = now.getHours(), p = h >= 12 ? ' PM' : ' AM', h12 = h % 12 || 12;
            text = pad(h12) + ':' + pad(now.getMinutes()) + ':' + pad(now.getSeconds()) + p;
        }
        for (var i = 0; i < slots.length; i++) slots[i].textContent = text;
    }

    tick();
    setInterval(tick, 1000);
})();
