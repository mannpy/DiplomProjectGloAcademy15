$(document).ready(function(){
  

  /* Отправка форм */

  // $('form').submit(function(event) {
  //   event.preventDefault();
  //   $.ajax({
  //     type: "POST",
  //     url: "libs/mailer/smart.php",
  //     data: $(this).serialize()
  //   }).done(function() {
  //     $(this).find("input").val("");
  //     $("#overlay-form").hide();
  //     $("#overlay-thanks").show();
  //     $("form").trigger("reset");
  //     yaCounter50716078.reachGoal('sentForm');
  //   });
  //   return false;
  // });
  
  /* Слайдеры */

  $(".main-slider").slick({
    fade: true,
    dots: true,
    prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow_right"></div>',
  });

  $(".slider-section").slick({
    prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow_right"></div>',
    responsive: [
    {
      breakpoint: 576,
      settings: {
        arrows: false,
        dots: true,
      }
    },
  ]
  });




  // Кнопка поиска
  var headerMenuSearch = $(".header-menu__search"),
      headerMenuInp = $(".header-menu__inp");

  headerMenuSearch.click(function() {
    headerMenuInp.toggleClass('active').focus();
  });
  

  
  /* Menu */

  var menuBtn = $('.menu-btn'),
      headerMenu = $('.header-menu'),
      menuLink = $('.header-menu__link');

  menuBtn.click(function() {
    menuBtn.toggleClass('active');
    headerMenu.toggleClass('active');
  });

  menuLink.click(function(e) {
    menuBtn.toggleClass('active');
    headerMenu.toggleClass('active');

    // Scrolling
    var linkhref = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(linkhref).offset().top
    }, 1000);

    e.preventDefault();
  });



  /* Masked input */

  // jQuery(function($){
  //  $(".popup-form__input").mask("+7 (999) 999-99-99");
  //  $(".main-form__input").mask("+7 (999) 999-99-99");
  //  $(".offer-form__input").mask("+7 (999) 999-99-99");
  // });
  
  // new WOW().init();

    
});
