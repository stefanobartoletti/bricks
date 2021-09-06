// --- Back to Top ---

const html = document.querySelector('html');

const backToTop = document.querySelector('#backtotop');

if (backToTop) {
  document.addEventListener('scroll', function () {
    if (html.scrollTop > 200) {
      backToTop.classList.remove('hidden');
    } else {
      backToTop.classList.add('hidden');
    }
  });

  backToTop.addEventListener('click', function () {
    window.scrollTo(0, 0);
  });
};
