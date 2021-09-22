// --- Swiper import & init ---

// Settings: https://swiperjs.com/get-started/

import Swiper, {
  Navigation,
  Pagination
} from 'swiper/core';

Swiper.use([
  Navigation,
  Pagination
]);

// --- Swiper settings ---

const swiperSettings = {

  loop: true,
  centeredSlides: true,
  spaceBetween: 15,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets'
  },
  breakpoints: {
    0: {
      slidesPerView: 1.5
    },
    576: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 3.5
    },
    992: {
      slidesPerView: 4,
      centeredSlides: false
    },
    1200: {
      slidesPerView: 5
    }
  }

};

// --- Swiper instances ---

const mountSwiper = new Swiper('.swiper-container', swiperSettings);
