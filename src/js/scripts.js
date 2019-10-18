"use strict";

// --- Common Variables ---

var html = document.querySelector('html');


// --- Header Scroll ---

var header = document.querySelector('#header-wrap');

if (header) {

    document.addEventListener('scroll', function () {
        var scrolled = html.scrollTop;
        if (scrolled > 50) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    });

};


// --- Back to Top ---

var backToTop = document.querySelector('#backtotop');

if (backToTop) {

    document.addEventListener('scroll', function () {
        var scrolled = html.scrollTop;
        if (scrolled > 200) {
            backToTop.classList.remove('hidden');
        } else {
            backToTop.classList.add('hidden');
        }
    });

    backToTop.addEventListener('click', function () {
        window.scrollTo(0, 0);
    });

};


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


// --- Portfolio filters ---

// TODO add functionality to "All" Button

var filterButtons = document.querySelectorAll('#portfolio-filter button');

var portfolioItems = document.querySelectorAll('.portfolio-item');

if (filterButtons.length) {

    filterButtons.forEach(function (el) {
        
        var portfolioCat = el.id;

        el.addEventListener('click', function () {

            portfolioItems.forEach(function (item) {

                if (item.classList.contains(portfolioCat)) {

                    item.classList.remove('portfolio-hidden');
                
                } else {

                    item.classList.add('portfolio-hidden');

                }

            });

        });

    });

};


// --- Wordpress code ---

var commentBox = document.querySelector('.comment-form-comment textarea');

if (commentBox) {

    commentBox.removeAttribute('cols');

};