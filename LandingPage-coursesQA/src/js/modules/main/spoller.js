$(document).ready(function () {
   $('.tabs__questions-subtitle').click(function (event) {
      if ($('.tabs__questions-block').hasClass('one')) {
         $('.tabs__questions-subtitle').not($(this)).removeClass('active');
         $('.tabs__questions-text').not($(this).next()).slideUp(300);
      }
      $(this).toggleClass('active').next().slideToggle(300);
   });
});