$(document).ready(function(){
  ymaps.ready(init);
  var myMap,
      myPlacemark;

  function init(){
      myMap = new ymaps.Map("map", {
          center: [55.683036, 37.622076],
          zoom: 16,
          controls: []
      },
      {suppressMapOpenBlock: true});

      myPlacemark = new ymaps.Placemark([55.684503, 37.621947], {
          hintContent: 'Варшавское шоссе, 26',
          balloonContent: 'Варшавское шоссе, 26'
      }, {
        // Опции.
        // Необходимо указать данный тип макета.
        iconLayout: 'default#image',
        // Своё изображение иконки метки.
        iconImageHref: 'img/map-ic.png',
        // Размеры метки.
        iconImageSize: [46, 46],
        // Смещение левого верхнего угла иконки относительно
        // её "ножки" (точки привязки).
        iconImageOffset: [-5, -38]
    }
      );
      myMap.behaviors.disable('scrollZoom');
      myMap.geoObjects.add(myPlacemark);
  }
  $('.map_overlay__close').on("click", function (e) {
    e.preventDefault();
    $(this).parent().hide();
  });
});
