// Ініціалізуємо Swiper
new Swiper('.reviews__clients', {
   navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
   },
   grabCursor: true, 
   spaceBetween: 65,
   slidesPerView: 3,
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      820: {
         slidesPerView: 2,
      },
      1100: {
         slidesPerView: 3,
      }
   },
   
});

// Ініціалізуємо Swiper
new Swiper('.reviews__video', {
   navigation: {
      nextEl: '.arrow-left',
      prevEl: '.arrow-right',
   },
   spaceBetween: 50,
   slidesPerView: 1,
});