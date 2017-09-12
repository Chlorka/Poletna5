(function($) {
    $(function() {

        $("a.hidden").click(function(e){
            e.preventDefault();
            if($(this).hasClass("no_show")) {
                $('.fotorama__nav-wrap').css("display", "block");
                $(this).removeClass("no_show");
                $(this).html('Скрыть<br>миниатюры');
            }
            else {
                $('.fotorama__nav-wrap').css("display", "none");
                $(this).addClass("no_show");
                $(this).html('Показать<br>миниатюры');
            }
        });

       // 1. Initialize fotorama manually.
        var $fotoramaDiv = $('#fotorama').fotorama({
            width: '100%',
            minwidth: 1024,
            maxwidth: '100%',
            nav: 'thumbs',
            thumbheight: 98,
            fit: 'cover'
        });
        // 2. Get the API object.
        var fotorama = $fotoramaDiv.data('fotorama');
        // 3. Inspect it in console.
/*        console.log(fotorama);
*/
        var heightWin = $(window).height()/*-160*/-48;
        var widthWin = $(window).width();
        fotorama.resize({
            width: widthWin,
            height: heightWin
        });

/*
        $(".various").fancybox({
            fitToView	: false,
            autoSize	: true,
            closeClick	: false,
            openEffect	: 'none',
            closeEffect	: 'none',
            autoCenter: true
        });
*/

        $('.jcarousel').jcarousel({
            animation: {
                duration: 800,
                easing:   'linear',
                complete: function() {
                }
            },
            wrap: 'circular'
        }).jcarouselAutoscroll({
            interval: 3500
        });

        $('.big-slider_carusel').jcarousel({
            animation: {
                duration: 900,
                easing:   'linear',
                complete: function() {
                }
            },
            wrap: 'circular'
        }).jcarouselAutoscroll({
            interval: 30500
        });

        $('.face-block-list .jcarousel').jcarouselAutoscroll('stop');


        $('.main-who-jcarousel')
            .on('jcarousel:animateend', function(event, carousel) {
                var currentFirstItem = $(this).jcarousel('first');
                $('#who-detail article').removeClass("select");
                $('#index'+currentFirstItem.attr("data-id")).addClass("select");
            });


        /*
        $('.main-who-jcarousel').on('jcarousel:scrollend', 'li', function(event, carousel) {
            $(this).addClass('active2');
            console.log('зашел' + $(this).index());
        });
*/
        $('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .jcarouselPagination();
    });
})(jQuery);
