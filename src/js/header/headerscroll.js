// --- Header Scroll Class ---

var html = document.querySelector('html');

var header = document.querySelector('#header-wrapper');

if (header) {

    document.addEventListener('scroll', function () {
        if (html.scrollTop > 50) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    });

};