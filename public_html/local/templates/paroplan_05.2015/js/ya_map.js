
(function($) {
    $(function() {

    });
})(jQuery);
ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
        center: [43.78796189, 42.86721994],
        zoom: 8,
        controls: []
    }),
        HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
        "<b>{{ properties.object }}</b><br />" +
        "{{ properties.address }}" +
        "</div>", {
            // Определяем метод getShape, который
            // будет возвращать размеры макета хинта.
            // Это необходимо для того, чтобы хинт автоматически
            // сдвигал позицию при выходе за пределы карты.
            getShape: function () {
                var el = this.getElement(),
                    result = null;
                if (el) {
                    var firstChild = el.firstChild;
                    result = new ymaps.shape.Rectangle(
                        new ymaps.geometry.pixel.Rectangle([
                            [0, 0],
                            [firstChild.offsetWidth, firstChild.offsetHeight]
                        ])
                    );
                }
                return result;
            }
        }
    );


    var div = document.getElementById('place-fly-list')
    var elems = div.getElementsByClassName('item')

    var itemAdrLan = Array();
    var itemAdrRan = Array();
    var itemAdrName = Array();

    for(var i=0; i<elems.length; i++) {
        if((elems[i].getAttribute('data-name')).length > 2) {
            itemAdrLan.push(elems[i].getAttribute('data-lan'));
            itemAdrRan.push(elems[i].getAttribute('data-ran'));
            itemAdrName.push(elems[i].getAttribute('data-name'));
        }
    }
    var lan = "";
    var ran = "";
    var indexNum = 0;

    for (var a = 0; a < itemAdrName.length; a++) {
        console.log(a);
        console.log(itemAdrName[a]);
        console.log(itemAdrLan[a]);
        console.log(itemAdrRan[a]);

       // var name = itemAdr[a];
        lan = itemAdrLan[a];
        ran = itemAdrRan[a];
 /*       ymaps.geocode(itemAdr[a], {
            results: 1 // Если нужен только один результат, экономим трафик пользователей
        }).then(function (res) {
            // Выбираем первый результат геокодирования.
            var firstGeoObject = res.geoObjects.get(0),
            // Координаты геообъекта.
                coords = firstGeoObject.geometry.getCoordinates();
*/
            //console.log('Кординаты: ', coords);
            //console.log('Все данные геообъекта: ', firstGeoObject.properties.getAll());

            /**
             * Если нужно добавить по найденным геокодером координатам метку со своими стилями и контентом балуна, создаем новую метку по координатам найденной и добавляем ее на карту вместо найденной.
             */

            var myPlacemark = new ymaps.Placemark([lan, ran], {
                hintContent: itemAdrName[a],
                hitIndex: indexNum,
                object: itemAdrName[a]
            }, {

                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                iconImageHref: '/images/fly_dott.png',
                // Размеры метки.
                iconImageSize: [35, 49],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-17, -49],
                hintLayout: HintLayout

            });

        console.log(myPlacemark.properties.getAll());

        indexNum++;
/*
            myPlacemark.events.add('mouseenter', function () {
                myPlacemark.properties.set({iconImageHref: '/images/fly_dottr.png'});
            });
            console.log('Все данные геообъекта: ', myPlacemark.properties.getAll());
*/

            if($("#place-fly-list a[data-index='"+myPlacemark.properties.get('hitIndex')+"']").attr("class") == 'select') {
                myPlacemark.options.set('iconImageHref', '/local/templates/paroplan_05.2015/images/fly_dott_h.png');

                myMap.hint.open([lan, ran], itemAdrName[a], {
                    // Опция: не показываем кнопку закрытия.
                    closeButton: false
                });

            }


            myPlacemark.events
                .add('mouseenter', function (e) {
                    // Ссылку на объект, вызвавший событие,
                    // можно получить из поля 'target'.
                    e.get('target').options.set('iconImageHref', '/local/templates/paroplan_05.2015/images/fly_dott_h.png');
                })
                .add('mouseleave', function (e) {

                    var targetHref = e.get('target');

                    if($("#place-fly-list a[data-index='"+targetHref.properties.get('hitIndex')+"']").attr("class") == 'select') {
                        e.get('target').options.set('iconImageHref', '/local/templates/paroplan_05.2015/images/fly_dott_h.png');
                    }
                    else {
                        e.get('target').options.set('iconImageHref', '/images/fly_dott.png');
                    }

                    $('.my-hint').css("display", "none");


                });


            myMap.geoObjects.add(myPlacemark);


    /*    });*/


    }
    myMap.geoObjects.events.add('click', function (e) {
        var target = e.get('target');

        window.location.href = $("#place-fly-list a[data-index='"+target.properties.get('hitIndex')+"']").attr("href");
    });






    /*
     ymaps.geoQuery(ymaps.geocode('Москва, Слесарный переулок, д.3'))
     .add(ymaps.geocode('Люберцы, Октябрьский проспект д.143'))
     .add(ymaps.geocode('Москва, Нижний Сусальный переулок, д.5, стр.4'))
     .addToMap(myMap);
     */
    /*
     var placemark = new ymaps.Placemark([55.833436, 37.715175], {
     balloonContent: '<strong>серобуромалиновыйsdsdsdsd</strong> цвет',
     iconContent: "Азербайджан"
     }, {
     preset: "twirl#yellowStretchyIcon",
     // Отключаем кнопку закрытия балуна.
     balloonCloseButton: false,
     // Балун будем открывать и закрывать кликом по иконке метки.
     hideIconOnBalloonOpen: false
     });

     myMap.geoObjects.add(placemark);
     */

}
