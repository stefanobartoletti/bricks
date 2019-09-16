"use strict";

(function($){

/* Site wide
---------------------------------------------------*/

// Add class to header when scrolled

$(document).scroll(function(){
    var scroll = $(this).scrollTop();
    if (scroll > 50) {
        $('.header-wrap').addClass('header-scrolled');
    } else {
        $('.header-wrap').removeClass('header-scrolled');
    }
});
   
})(jQuery);

// --- Vanilla JS ---

// Back to top

var html = document.querySelector('html');
var backToTop = document.querySelector('#backtotop');

document.addEventListener('scroll', function() {
    var scrolled = html.scrollTop;
    if (scrolled > 200) {
        backToTop.classList.remove('hidden');
    } else {
        backToTop.classList.add('hidden');
    }
});

backToTop.addEventListener('click', function() {
    window.scrollTo(0, 0);
});


// BS nav class to post pagination

var postPager = document.querySelectorAll('.index-post-pager .page-numbers');

postPager.forEach(function(el) {
    el.classList.add('nav-link');
});


// Comment form textarea remove cols

var commentBox = document.querySelector('.comment-form-comment textarea');

commentBox.removeAttribute('cols');