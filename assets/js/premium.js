/**
 * Golden Rashifal — Premium Enhancements JS
 * Mobile nav active state, search suggestions, animations, AJAX search
 */
(function(){
'use strict';
var doc=document;
function $(s,c){return(c||doc).querySelector(s)}
function $$(s,c){return[].slice.call((c||doc).querySelectorAll(s))}

/* Mobile bottom nav — highlight active */
(function(){
    var items=$$('.gr-mobile-nav__item');
    if(!items.length)return;
    var path=location.pathname;
    items.forEach(function(a){
        var href=a.getAttribute('href');
        if(href&&path.indexOf(href)===0&&href!=='/'){a.classList.add('is-active')}
        else if(href==='/'&&path==='/'){a.classList.add('is-active')}
    });
})();

/* Search popup popular tags click */
(function(){
    var tags=$$('.gr-search-pop__tags a');
    tags.forEach(function(a){
        a.addEventListener('click',function(e){
            e.preventDefault();
            var input=$('.gr-search-pop .gr-search__input');
            if(input){input.value=a.textContent.trim();input.form.submit()}
        });
    });
})();

/* Intersection Observer for fade-in animations */
(function(){
    if(!('IntersectionObserver' in window))return;
    var sections=$$('.gr-section, .gr-benefit-card, .gr-service-card, .gr-editorial-trust');
    var obs=new IntersectionObserver(function(entries){
        entries.forEach(function(e){
            if(e.isIntersecting){e.target.classList.add('gr-animate-in');obs.unobserve(e.target)}
        });
    },{threshold:0.1,rootMargin:'0px 0px -40px 0px'});
    sections.forEach(function(el){obs.observe(el)});
})();

/* Daily badge pulse — stop after 5s */
(function(){
    var dots=$$('.gr-daily-badge__dot');
    if(!dots.length)return;
    setTimeout(function(){dots.forEach(function(d){d.style.animation='none'})},5000);
})();

})();
