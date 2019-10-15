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