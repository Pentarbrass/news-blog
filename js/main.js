var hotelSlider = new Swiper('.examples-slider', {
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



