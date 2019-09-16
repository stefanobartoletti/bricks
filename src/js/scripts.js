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


/* Back to top button
---------------------------------------------------*/

// Back to top

// $(".backtotop").click(function() {
//     $("html, body").animate({ scrollTop: 0 }, 400, 'linear');
// });

// Set visibility

$(document).scroll(function(){
    var scroll = $(this).scrollTop();
    if (scroll > 200) {
        $('#backtotop').removeClass('hidden');
    } else {
        $('#backtotop').addClass('hidden');
    }
});

    
})(jQuery);

// --- Vanilla JS ---

// Back to top

var backToTop = document.querySelector('#backtotop');

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