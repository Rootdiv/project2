'use strict';

//Плавная прокрутка страницы вверх
$(window).scroll(function() {
  const scrollHeight = parseInt($(window).scrollTop());
  if (scrollHeight < 300) {
    $('.go-top').css('opacity', '0');
  } else {
    $('.go-top').css('opacity', '1');
  }
});
$('body').on('click', '.go-top', function() {
  $('body,html').animate({
    scrollTop: 0,
  }, 800);
});

//Карта
if (document.getElementById('map')) {
  var ymaps;
  ymaps.ready(function() {
    var myMap = new ymaps.Map(
        'map', {
          center: [55.776142, 37.648167],
          zoom: 17,
        }, {
          searchControlProvider: 'yandex#search',
        },
      ),
      // Создаем геообъект с типом геометрии "Точка".
      myGeoObject = new ymaps.GeoObject({
        // Описание геометрии.
        geometry: {
          type: 'Point',
          coordinates: [55.776142, 37.648167],
        },
      });
    myMap.geoObjects.add(myGeoObject);
  });
}
