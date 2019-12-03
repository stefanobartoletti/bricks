var html = document.querySelector('html');

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