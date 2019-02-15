var upButton = document.getElementById('font_up');
var downButton = document.getElementById('font_down');

upButton.addEventListener('click', upFont);
downButton.addEventListener('click', downFont);


function upFont(e) {
    e.preventDefault();
    $('.logo__text').css('font-size', '19px').css('font-weight', '500');
    $('.top-nav__link').css('font-size', '20px');
    $('.links-block__text').css('font-size', '19px');
    $('.links-block__collapse-text').css('font-size', '19px');
    $('.card-title').css('font-size', '30px');
    $('.person-info__text-muted').css('font-size', '19px');
    $('.footer__heading').css('font-size', '30px');
    $('.footer__text').css('font-size', '23px');
    $('.footer__link').css('font-size', '23px');
    $('.footer__copyright-text').css('font-size', '25px');
    $('.contact-bar__lang-button').css('font-weight', '500');
    $('.odometer-block__text').css('font-size', '25px');
    $('.article__title').css('font-size', '50px');
    
    $('body').css('font-size', '25px');
}

function downFont(e) {
    e.preventDefault();
    $('.logo__text').css('font-size', '17px').css('font-weight', '300');
    $('.contact-bar__lang-button').css('font-weight', '300');
    $('.top-nav__link').css('font-size', '1rem');
    $('.links-block__text').css('font-size', '15px');
    $('.links-block__collapse-text').css('font-size', '15px');
    $('.card-title').css('font-size', '1.25rem');
    $('.person-info__text-muted').css('font-size', '1rem');
    $('.footer__heading').css('font-size', '25px');
    $('.footer__text').css('font-size', '15px');
    $('.footer__link').css('font-size', '15px');
    $('.footer__copyright-text').css('font-size', '1rem');
    $('.odometer-block__text').css('font-size', '1rem');
    $('.article__title').css('font-size', '35px');

    $('body').css('font-size', 'inherit');
}