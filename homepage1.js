$(document).ready(function () {
  $(".slider").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    var currentImage = slick.$slides[nextSlide].querySelector("img").getAttribute("src");
    $(".item-image img").attr("src", currentImage);
  });

  $(".slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 500,
    infinite: true,
    centerMode: true,
    centerPadding: "0",

  });

  $(".slider").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    // Clear all item descriptions
    $('.description-container').empty();

    // Find the center slide (nextSlide) after the change
    var title = $('.item[data-slick-index="' + nextSlide + '"]').find('.item-title').text();

    // Get the description of the center slide
    var description = $('.item[data-slick-index="' + nextSlide + '"]').find('.item-description').text();

    // Update the item description in the description-container with animation
    $('.description-container')
      .text(description)
      .css({
        'font-weight': 'bold',
        'font-size': 'large',
        'animation': 'slideUp 0.7585s ease'
      })
      .one('animationend', function () {
        // Remove animation properties after it completes
        $(this).css('animation', '');
      });

    $('.item-head')
      .text(title)
      .css({
        'font-weight': 'bold',
        'font-size': '34px',
        'animation': 'slideUp 0.7585s ease'
      })
      .one('animationend', function () {
        // Remove animation properties after it completes
        $(this).css('animation', '');
      });
  });


  window.addEventListener("scroll", function () {
    var scrollPosition = document.documentElement.scrollTop;
    var slideWrapper = document.querySelector(".slide-wrapper");

    if (scrollPosition > 500) {
      slideWrapper.classList.add("show");
    } else {
      slideWrapper.classList.remove("show");
    }
  });


  ScrollReveal().reveal('.section', {
    delay: 200,
    duration: 800,
    distance: '50px',
    origin: 'bottom',
    interval: 200
  });
  

  var a = 1;
  eye();

  function eye() {
    $('.eye').click(function() {
      if (a == 1) {
        $('#password').attr('type', 'text');
        a = 0;
      } else {
        $('#password').attr('type', 'password');
        a = 1;
      }
      $('.fa-eye-slash').toggleClass('close');
      $('.fa-eye').toggle();
    });
  }
});

var swiper =
  new Swiper('.swiper-container', {
    slidesPerView: '1',
    spaceBetween: 0,
    autoplay: false,
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
    loop: true,
  }
  );
  /*login */


  function registerForm() {
    $("#formTitle").text("Registration");
    $('.Login_form').hide();
    $('.Registration_form').toggle();
    $('.forgotpassword_form').hide();
  }

  function forgotPassword() {
    $("#formTitle").text("ForgotPassword");
    $('.Login_form').toggle();
    $('.forgotpassword_form').toggle();

  }

  function loginForm() {
    $("#formTitle").text("Login");
    $('.Login_form').toggle();
    $('.forgotpassword_form').hide();
    $('.Registration_form').hide();
  }

  function error(errorMessage, errorCode) {
    $("#error" + errorCode).text(errorMessage);
  }


  function success() {
    swal({
      title: "tràu quâu",
      text: "thành công rầu",
      icon: "success",
      button: null,
    });
  }