var changeFontButtons = document.getElementsByClassName('blind_mode')

for (var i = 0; i < changeFontButtons.length; i++) {
    changeFontButtons[i].addEventListener('click', changeFont);
}
var blindMode = false;

function changeFont(e) {
    e.preventDefault();
    if (blindMode) {
        downFont();
    } else {
        upFont();
    }
}


function upFont() {
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
    
    $('.person-info').css('height', '550px');
    $('body').css('font-size', '25px');
    blindMode = true;
}

function downFont() {
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

    $('.person-info').css('height', '460px');
    $('body').css('font-size', 'inherit');
    blindMode = false;
}