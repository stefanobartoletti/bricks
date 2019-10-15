"use strict";

// --- Common Variables ---

var html = document.querySelector('html');


// --- Header ---

import "./header/headerscroll"


// --- Elements ---

import "./elements/backtotop"


// --- Bootstrap classes to Wordpress code ---

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


// --- Wordpress code ---

var commentBox = document.querySelector('.comment-form-comment textarea');

if (commentBox) {

    commentBox.removeAttribute('cols');

};