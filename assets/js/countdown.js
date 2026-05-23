/**
 * Festival countdown timer.
 * Reads data-target from [data-gr-count] and updates cells each second.
 */
(function () {
    'use strict';
    var box = document.querySelector('[data-gr-count]');
    if (!box) return;
    var target = new Date(box.getAttribute('data-target')).getTime();
    if (isNaN(target)) return;

    var els = {
        d: box.querySelector('[data-gr-count-days]'),
        h: box.querySelector('[data-gr-count-hours]'),
        m: box.querySelector('[data-gr-count-mins]'),
        s: box.querySelector('[data-gr-count-secs]')
    };

    function pad(n) { return n < 10 ? '0' + n : '' + n; }

    function tick() {
        var diff = target - Date.now();
        if (diff <= 0) {
            if (els.d) els.d.textContent = '0';
            if (els.h) els.h.textContent = '00';
            if (els.m) els.m.textContent = '00';
            if (els.s) els.s.textContent = '00';
            clearInterval(timer);
            return;
        }
        var d = Math.floor(diff / 86400000);
        var h = Math.floor((diff / 3600000) % 24);
        var m = Math.floor((diff / 60000) % 60);
        var s = Math.floor((diff / 1000) % 60);
        if (els.d) els.d.textContent = String(d);
        if (els.h) els.h.textContent = pad(h);
        if (els.m) els.m.textContent = pad(m);
        if (els.s) els.s.textContent = pad(s);
    }

    tick();
    var timer = setInterval(tick, 1000);
})();
