$(document).ready(function () {
var examplesSlider = new Swiper('.examples-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});
});

$(document).ready(function () {
var detailsSlider = new Swiper('.details-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.details-button--next',
    prevEl: '.details-button--prev',
  },

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});
});

// Mobile menu
    function closeMobileMenu() {
        $('.mobile-menu').removeClass('mobile-menu--active');
        $('.mobile-menu__submenu-list').slideUp(500);
        $('.mobile-menu__link').removeClass('mobile-menu__link--active');
        $('.mobile-menu-open-btn').removeClass('mobile-menu-open-btn--hidden');
        closeMobileSubmenu();
    };
    function closeMobileSubmenu() {
        $('.mobile-menu__subsubmenu-list').slideUp(500);
        $('.mobile-menu__submenu-link--dropdown').removeClass('mobile-menu__submenu-link--active');
    };

    $('.mobile-menu-open-btn').click(function () {
        $('.mobile-menu').addClass('mobile-menu--active');
        $('.mobile-menu-open-btn').addClass('mobile-menu-open-btn--hidden');
    });

    $('.mobile-menu__close-btn').click(function () {
        closeMobileMenu();
    });

    $('.mobile-menu__overlay').click(function() {
        closeMobileMenu();
    });

    $('.mobile-menu__link--dropdown').click(function(e) {
        e.preventDefault();
        $('.mobile-menu__link').not($(this)).removeClass('mobile-menu__link--active');
        $('.mobile-menu__submenu-list').not($(this).next()).slideUp(500);
        $(this).toggleClass('mobile-menu__link--active');
        $(this).next().slideToggle(500);
        closeMobileSubmenu();
    });

    $('.mobile-menu__submenu-link--dropdown').click(function(e) {
        e.preventDefault();
        $('.mobile-menu__subsubmenu-list').not($(this).next()).slideUp(500);
        $('.mobile-menu__submenu-link--dropdown').not($(this)).removeClass('mobile-menu__submenu-link--active');
        $(this).next().slideToggle(500);
        $(this).toggleClass('mobile-menu__submenu-link--active');
    });

//modal-menu
var modalBtn = $('.modal-open-btn');
var modalOverlay = $('.modal-overlay');
var modal = $('.sign-up-modal');
var modalCloseBtn = $('.sign-up-modal__close-btn');


function closeModal() {
    modalOverlay.removeClass('modal-overlay--active');
    modal.removeClass('sign-up-modal--active');
    $('.sign-up-modal__form').trigger('reset');
};


$(document).ready(function () {

    // Modal open/close
    modalBtn.on('click', function () {
        modalOverlay.addClass('modal-overlay--active');
        modal.addClass('sign-up-modal--active');
        closeMobileMenu();
    });

    modalCloseBtn.on('click', function() {
        closeModal();
    });

    modalOverlay.on('click', function() {
        closeModal();
    });

    $(document).keyup(function (e) { 
        if (e.which === 27) {
            closeModal();
        }
    });
});

//Обработка форм
  $('.valid-form').each(function () {
    $(this).validate({
      errorClass: "invalid",
    messages: {
      name: {
        required: "Введите Ваше имя",
        minlength: "Слишком короткое имя"
      },
      email: {
        required: "Введите Ваш email",
        email: "Не верный формат, 'name@domain.com'"
      },
      phone: {
        required: "Введите Ваш номер телефона",
        minlength: "Не верно указанный номер"
      },
      },
  });
  });
$('.valid-mail-form').each(function () {
    $(this).validate({
    errorClass: "invalid-mail",
    messages: {
    email: {
        required: "Введите Ваш email",
        email: "Не верный формат, 'name@domain.com'"
      },
      message: {
        required: "Введите Ваше сообщение!",
      },
    },
    });
});
$('.valid-mess-form').each(function () {
    $(this).validate({
    errorClass: "invalid-mess",
    messages: {
      message: {
        required: "Введите Ваше сообщение!",
      },
    },
    });
});
//Настройка маски
  $(document).ready(function () {
    $('.phone-with-ddd').mask('+7(999)999-99-99');
  });
  AOS.init({
  disable: function() {
    var maxWidth = 992;
    return window.innerWidth < maxWidth;
  }
});
  lazyframe('.lazyframe');

$(document).ready(function(){
 
$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.to-top').fadeIn();
} else {
$('.to-top').fadeOut();
}
});
 
$('.to-top').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});
 
});