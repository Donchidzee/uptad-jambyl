var upButton = document.getElementById('font_up');
var downButton = document.getElementById('font_down');

upButton.addEventListener('click', upFont);
downButton.addEventListener('click', downFont);

function upFont(e) {
    e.preventDefault();
    let fontSize = $('body').css('font-size') || '12px';
    let newSize = parseInt(fontSize) * 1.1;
    $('body').css('font-size', newSize + 'px');
}

function downFont(e) {
    e.preventDefault();
    let fontSize = $('body').css('font-size') || '12px';
    let newSize = parseInt(fontSize) / 1.1;
    $('body').css('font-size', newSize + 'px');
}