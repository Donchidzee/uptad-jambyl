$(document).ready(function(){
    $('.go-to-top-button').on('click', scrollToTop);
});

window.onscroll = function() {
    var position = window.pageYOffset;
    if (position > 300) {
        $('.go-to-top-button').addClass('go-to-top-button_visible');
    } else {
        $('.go-to-top-button').removeClass('go-to-top-button_visible');
    }
}

function scrollToTop() {
    var position = window.pageYOffset;
    var timerId = setInterval(function() {
        position -= 10;
        if (position < 0) {
            window.scrollTo(0, 0);
            clearInterval(timerId);
        }
        window.scrollTo(0, position);
    }, 2);
}