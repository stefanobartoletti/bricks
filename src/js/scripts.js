"use strict";

// --- Common Variables ---

var html = document.querySelector('html');


// --- Header Scroll ---

var header = document.querySelector('.header-wrap');

document.addEventListener('scroll', function() {
    var scrolled = html.scrollTop;
    if (scrolled > 50) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }
});


// --- Back to Top ---

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


// --- Bootstrap classes to Wordpress code ---

var postPager = document.querySelectorAll('.index-post-pager .page-numbers');

postPager.forEach(function(el) {
    el.classList.add('nav-link');
});


// --- Wordpress code ---

var commentBox = document.querySelector('.comment-form-comment textarea');

commentBox.removeAttribute('cols');