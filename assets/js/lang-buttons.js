var kzButton = document.getElementById('kz-button');
var ruButton = document.getElementById('ru-button');

kzButton.addEventListener('click', setLangKz);
ruButton.addEventListener('click', setLangRu);

// Проверяем cookie выбранного языка и проставляем классы для оформления кнопки
if (getCookie('lang') === 'kz') {
  ruButton.classList.remove('contact-bar__lang-button_active');
  kzButton.classList.add('contact-bar__lang-button_active');
} else {
  kzButton.classList.remove('contact-bar__lang-button_active');
  ruButton.classList.add('contact-bar__lang-button_active');
}


function setLangKz(e) {
  if (getCookie('lang') !== 'kz') {
    setCookie('lang', 'kz');
    location.reload();
    console.log(getCookie('lang'));
  }

}

function setLangRu(e) {
  if (getCookie('lang') !== 'ru') {
    setCookie('lang', 'ru');
    location.reload();
    console.log(getCookie('lang'));
  }

}

// возвращает cookie с именем name, если есть, если нет, то undefined
function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options) {
    options = options || {};
  
    var expires = options.expires;
  
    if (typeof expires == "number" && expires) {
      var d = new Date();
      d.setTime(d.getTime() + expires * 1000);
      expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
      options.expires = expires.toUTCString();
    }
  
    value = encodeURIComponent(value);
  
    var updatedCookie = name + "=" + value;
  
    for (var propName in options) {
      updatedCookie += "; " + propName;
      var propValue = options[propName];
      if (propValue !== true) {
        updatedCookie += "=" + propValue;
      }
    }
  
    document.cookie = updatedCookie;
}

function deleteCookie(name) {
    setCookie(name, "", {
      expires: -1
    })
}