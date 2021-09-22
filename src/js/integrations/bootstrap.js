// --- Bootstrap classes to Wordpress ---

const pagerNav = document.querySelectorAll('.nav-links');

if (pagerNav.length) {
  pagerNav.forEach(function (el) {
    el.classList.add('nav');
  });
};

const pagerNavLink = document.querySelectorAll('.nav-links .page-numbers');

if (pagerNavLink.length) {
  pagerNavLink.forEach(function (el) {
    el.classList.add('nav-link');
  });
};

// --- Wordpress customizations ---

const commentBox = document.querySelector('.comment-form-comment textarea');

if (commentBox) {
  commentBox.removeAttribute('cols');
};
