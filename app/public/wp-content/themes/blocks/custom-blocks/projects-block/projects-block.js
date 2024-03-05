jQuery(function ($) {
    "use strict";

    const videoGallerySwiper = new Swiper('.swiper.video__gallery--slider', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            767: {
              spaceBetween: 50,
              slidesPerView: 2,
            },
            991: {
              spaceBetween: 80,
              slidesPerView: 2,
            },
            1200: {
              spaceBetween: 155,
              slidesPerView: 2,
            },
          },
    });

    // Get the number of slides
    let videoGallerySlides = videoGallerySwiper.slides.length;

    // Update the Swiper options if the number of slides is less than or equal to 3
    if (videoGallerySlides <= 3) {
        videoGallerySwiper.params.loop = false;

        // Update Swiper with the new settings
        videoGallerySwiper.update();
    }
});