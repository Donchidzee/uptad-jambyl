var newsList = [];

var News = {
    getAllNews : function() {
        $.getJSON('/database/news.json', function(data) {
            for (var key in data.news) {
                newsList[key] = data.news[key];
            }
        });
    },

    showSlider : function() {
        $.each($('.news-slider__img'), function(key, value) {
            
        });
    },

    getDescription : function(text) {
        return text.slice(0, 51);
    }

}
    
News.getAllNews();
