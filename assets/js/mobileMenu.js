$('.header__menu-open-button').on('click', openMobileMenu);
$('.top-nav__menu-close-button').on('click', closeMobileMenu);

function openMobileMenu(e) {
    e.preventDefault();
    $('.top-nav').addClass('top-nav_active');
}

function closeMobileMenu(e) {
    e.preventDefault();
    $('.top-nav').removeClass('top-nav_active');
}