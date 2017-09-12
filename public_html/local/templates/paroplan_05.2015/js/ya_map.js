
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
            // ���������� ����� getShape, �������
            // ����� ���������� ������� ������ �����.
            // ��� ���������� ��� ����, ����� ���� �������������
            // ������� ������� ��� ������ �� ������� �����.
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
            results: 1 // ���� ����� ������ ���� ���������, �������� ������ �������������
        }).then(function (res) {
            // �������� ������ ��������� ��������������.
            var firstGeoObject = res.geoObjects.get(0),
            // ���������� ����������.
                coords = firstGeoObject.geometry.getCoordinates();
*/
            //console.log('���������: ', coords);
            //console.log('��� ������ ����������: ', firstGeoObject.properties.getAll());

            /**
             * ���� ����� �������� �� ��������� ���������� ����������� ����� �� ������ ������� � ��������� ������, ������� ����� ����� �� ����������� ��������� � ��������� �� �� ����� ������ ���������.
             */

            var myPlacemark = new ymaps.Placemark([lan, ran], {
                hintContent: itemAdrName[a],
                hitIndex: indexNum,
                object: itemAdrName[a]
            }, {

                // �����.
                // ���������� ������� ������ ��� ������.
                iconLayout: 'default#image',
                // ��� ����������� ������ �����.
                iconImageHref: '/images/fly_dott.png',
                // ������� �����.
                iconImageSize: [35, 49],
                // �������� ������ �������� ���� ������ ������������
                // � "�����" (����� ��������).
                iconImageOffset: [-17, -49],
                hintLayout: HintLayout

            });

        console.log(myPlacemark.properties.getAll());

        indexNum++;
/*
            myPlacemark.events.add('mouseenter', function () {
                myPlacemark.properties.set({iconImageHref: '/images/fly_dottr.png'});
            });
            console.log('��� ������ ����������: ', myPlacemark.properties.getAll());
*/

            if($("#place-fly-list a[data-index='"+myPlacemark.properties.get('hitIndex')+"']").attr("class") == 'select') {
                myPlacemark.options.set('iconImageHref', '/local/templates/paroplan_05.2015/images/fly_dott_h.png');

                myMap.hint.open([lan, ran], itemAdrName[a], {
                    // �����: �� ���������� ������ ��������.
                    closeButton: false
                });

            }


            myPlacemark.events
                .add('mouseenter', function (e) {
                    // ������ �� ������, ��������� �������,
                    // ����� �������� �� ���� 'target'.
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
     ymaps.geoQuery(ymaps.geocode('������, ��������� ��������, �.3'))
     .add(ymaps.geocode('�������, ����������� �������� �.143'))
     .add(ymaps.geocode('������, ������ ��������� ��������, �.5, ���.4'))
     .addToMap(myMap);
     */
    /*
     var placemark = new ymaps.Placemark([55.833436, 37.715175], {
     balloonContent: '<strong>�����������������sdsdsdsd</strong> ����',
     iconContent: "�����������"
     }, {
     preset: "twirl#yellowStretchyIcon",
     // ��������� ������ �������� ������.
     balloonCloseButton: false,
     // ����� ����� ��������� � ��������� ������ �� ������ �����.
     hideIconOnBalloonOpen: false
     });

     myMap.geoObjects.add(placemark);
     */

}
