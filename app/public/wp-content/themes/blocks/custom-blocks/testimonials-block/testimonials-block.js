jQuery(function ($) {
    "use strict";
    
    const testimonialsSwiper = new Swiper('.swiper.testimonials__slider', {
      // Optional parameters
      loop: true,
      spaceBetween: 50,
      centeredSlides: true,
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      breakpoints: {
          
          767: {
            spaceBetween: 10,
            slidesPerView: 2,
            centerMode:true,
          },
          991: {
            spaceBetween: 30,
            slidesPerView: 2,
          },
          1400: {
            spaceBetween: 50,
            slidesPerView: 4,
          },
        },
  });
});