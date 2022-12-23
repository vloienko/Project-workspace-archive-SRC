const slider = document.querySelector('.filter__list');

let mySwiper;

function mobileSlider() {
   if (window.innerWidth <= 768 && slider.dataset.mobile == 'false') {
      if (slider.classList.contains('swiper-initialized')) {
         mySwiper.destroy();
      }
      mySwiper = new Swiper(slider, {
         pagination: {
            el: '.swiper-pagination',
            clickable: true,
         },
         direction: 'vertical',
         slidesPerView: 3,
         speed: 800,
         grabCursor: true,
         watchOverflow: true,
         observer: true,
         observeParents: true,
         observeSlideChildren: true,
         320: {
            spaceBetween: 0,
         },
         768: {
            spaceBetween: 10,
         }
      });

      slider.dataset.mobile = 'true';
   } 

   if (window.innerWidth > 768) {
      slider.dataset.mobile = 'false';

      if (slider.classList.contains('swiper-initialized')) {
         mySwiper.destroy();
      }
      mySwiper = new Swiper(slider, {
         pagination: {
            el: '.swiper-pagination',
            clickable: true,
         },
         direction: 'horizontal',
         slidesPerView: 3,
         speed: 800,
         grabCursor: true,
         watchOverflow: true,
         observer: true,
         observeParents: true,
         observeSlideChildren: true,
         spaceBetween: 10,
         breakpoints: {
            1024: {
               spaceBetween: 37,
            }
         },
      });
   }
}

mobileSlider();

window.addEventListener('resize', () => {
   mobileSlider();
});


// Ініціалізуємо Swiper
new Swiper('.clients-reviews', {
   pagination: {
      el: '.swiper-pagination',
      clickable: true,
   },
   grabCursor: true,
   speed: 800,
   observer: true,
   observeParents: true,
   observeSlideChildren: true,
});