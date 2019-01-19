$(document).ready(function(){
    $('.go-to-top-button').on('click', scrollToTop);
});

window.onscroll = function() {
    var position = window.pageYOffset;
    console.log(position);
    if (position > 300) {
        $('.go-to-top-button').addClass('go-to-top-button_visible');
    } else {
        $('.go-to-top-button').removeClass('go-to-top-button_visible');
    }
}

function scrollToTop() {
    var position = window.pageYOffset;
    var timerId = setInterval(function() {
        position -= 5;
        window.scrollTo(0, position);
        if (position < 200) {
            clearInterval(timerId);
        }
    }, 2);
}