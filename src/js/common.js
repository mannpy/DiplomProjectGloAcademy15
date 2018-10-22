$(document).ready(function(){

  /* Кнопки */

  // Быстрая заявка

  $(".main-slider__btn, .slider-section__btn").on("click", function() {
    $(".overlay").show();
    $("#quickOrder").show();
    yaCounter50835371.reachGoal('quickOrderBtn');
  });
  
  // Заказать звонок

  $(".header__btn").on("click", function() {
    $(".overlay").show();
    $("#callOrder").show();
    yaCounter50835371.reachGoal('CallOrderBtn');
  });

  // Закрыть Popup

  $(".popup__close").on("click", function() {
    $(".overlay, #quickOrder, #callOrder, #thanks").hide();
  });


  /* Отправка форм */

  // Быстрая заявка

  $('#quickOrder form').submit(function(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "libs/mailer/smart.php",
      data: $(this).serialize() + "&form=quickOrder",
    }).done(function() {
      $(this).find("input").val("");
      $(".popup__message").text(" оставленную заявку.");
      $(".popup__text.post").text("Скоро с вами свяжутся наши сотрудники.");
      $("#quickOrder").hide();
      $("#thanks").show();
      $("form").trigger("reset");
      yaCounter50835371.reachGoal('QuickOrderFormGoal');
    });
    return false;
  });

  // Заявка на обратный звонок


  $('#callOrder form').submit(function(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "libs/mailer/smart.php",
      data: $(this).serialize() + "&form=callOrder",
    }).done(function() {
      $(this).find("input").val("");
      $(".popup__message").text(" оставленную заявку.");
      $(".popup__text.post").text("Скоро с вами свяжутся наши сотрудники.");
      $("#callOrder").hide();
      $("#thanks").show();
      $("form").trigger("reset");
      yaCounter50835371.reachGoal('CallOrderFormGoal');
    });
    return false;
  });


  // Заявка на расчет услуг

  $('.request-block form').submit(function(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "libs/mailer/smart.php",
      data: $(this).serialize() + "&form=requestBlock",
    }).done(function() {
      $(this).find("input").val("");
      $(".popup__message").text(" оставленную заявку.");
      $(".popup__text.post").text("Скоро с вами свяжутся наши сотрудники.");
      $(".overlay").show();
      $("#thanks").show();
      $("form").trigger("reset");
      yaCounter50835371.reachGoal('requestBlockFormGoal');
    });
    return false;
  });

  // Отправка отзыва

  
  $('.leave-feedback form').submit(function(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "libs/mailer/smart.php",
      data: $(this).serialize() + "&form=feedbackForm",
    }).done(function() {
      $(this).find("input").val("");
      $(".popup__message").text(" оставленный отзыв.");
      $(".popup__text.post").text("Ваше отзыв появится после проверки");
      $('.leave-feedback').hide();
      $(".overlay").show();
      $("#thanks").show();
      $("form").trigger("reset");
      yaCounter50835371.reachGoal('FeedbackFormGoal');
    });
    return false;
  });

  
  /* Слайдеры */

  $(".main-slider").slick({
    fade: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 6000,
    prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow_right"></div>',
  });

  $(".slider-section").slick({
    prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow_right"></div>',
    autoplay: true,
    autoplaySpeed: 6000,
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

  $(".partners-slider").slick({
    slidesToShow: 5,
    arrows: false,
    responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        dots: true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 6000,
        dots: true,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
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

  jQuery(function($){
   $(".request-form__inp_tel").mask("+7 (999) 999-99-99");
   // $(".leave-feedback__inp").mask("+7 (999) 999-99-99");
   // $(".offer-form__input").mask("+7 (999) 999-99-99");
  });
  
  // new WOW().init();

    
});
