/**
 * Festival countdown — fills [data-gr-count-days|hours|mins|secs] every second.
 *
 * The container [data-gr-count] carries data-target="YYYY-MM-DDTHH:MM:SS".
 */

(function () {
    'use strict';

    var box = document.querySelector('[data-gr-count]');
    if (!box) return;

    var targetStr = box.getAttribute('data-target');
    if (!targetStr) return;

    var targetTime = new Date(targetStr).getTime();
    if (isNaN(targetTime)) return;

    var slots = {
        days:  box.querySelector('[data-gr-count-days]'),
        hours: box.querySelector('[data-gr-count-hours]'),
        mins:  box.querySelector('[data-gr-count-mins]'),
        secs:  box.querySelector('[data-gr-count-secs]')
    };

    function pad(n) { return n < 10 ? '0' + n : '' + n; }

    function update() {
        var diff = targetTime - Date.now();
        if (diff <= 0) {
            if (slots.days)  slots.days.textContent  = '0';
            if (slots.hours) slots.hours.textContent = '00';
            if (slots.mins)  slots.mins.textContent  = '00';
            if (slots.secs)  slots.secs.textContent  = '00';
            box.classList.add('is-finished');
            clearInterval(timer);
            return;
        }
        var d = Math.floor(diff / (1000 * 60 * 60 * 24));
        var h = Math.floor((diff / (1000 * 60 * 60)) % 24);
        var m = Math.floor((diff / (1000 * 60)) % 60);
        var s = Math.floor((diff / 1000) % 60);

        if (slots.days)  slots.days.textContent  = String(d);
        if (slots.hours) slots.hours.textContent = pad(h);
        if (slots.mins)  slots.mins.textContent  = pad(m);
        if (slots.secs)  slots.secs.textContent  = pad(s);
    }

    update();
    var timer = setInterval(update, 1000);
})();
