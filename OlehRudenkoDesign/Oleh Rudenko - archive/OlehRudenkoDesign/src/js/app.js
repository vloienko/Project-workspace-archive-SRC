// import * as flsFunctions from './modules/functions.js';

// flsFunctions.isWebp();

// import Swiper, { Navigation, Pagination } from 'swiper';

// const swiper = new Swiper();

// --------------------------------------------------------------

import './modules/menuAndScroll.js';
import './modules/popup.js';
import './scripts/swiper.js';
import './modules/formAndValidationReviews.js';
import './modules/formAndValidationRequest.js';
import './modules/animationScroll.js';

// import './modules/jquery.fancybox.js';

// --------------------------------------------------------------

const lang = document.querySelector('.lang')
if (lang) {
   const langBnt = lang.querySelector('.lang__current')
   langBnt.addEventListener('click', function (e) {
      langBnt.classList.toggle('active')
      lang.querySelector('.lang__dropdown').classList.toggle('active')
   })
}

const tabs = document.querySelector('.portfolio');
if (tabs) {
   const tabsBtn = document.querySelectorAll('.filter__btn');

   tabsBtn.forEach(function (item) {
      item.addEventListener('click', function () {
         let currentBtn = item
         if (!currentBtn.classList.contains('active')) {
            tabsBtn.forEach(function (item) {
               item.classList.remove('active')
            });
            currentBtn.classList.add('active')
         }
      });
   });
   
   document.querySelector('.filter__btn').click();
}
