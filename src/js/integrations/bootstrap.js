// --- Bootstrap classes to Wordpress ---

var pagerNav = document.querySelectorAll('.nav-links');

if (pagerNav.length) {

    pagerNav.forEach(function (el) {
        el.classList.add('nav');
    });

};


var pagerNavLink = document.querySelectorAll('.nav-links .page-numbers');

if (pagerNavLink.length) {

    pagerNavLink.forEach(function (el) {
        el.classList.add('nav-link');
    });

};


// --- Wordpress customizations ---

var commentBox = document.querySelector('.comment-form-comment textarea');

if (commentBox) {

    commentBox.removeAttribute('cols');

};