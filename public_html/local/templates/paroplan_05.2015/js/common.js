(function($) {
    $(function() {


        $(window).scroll(function () {
            if ($(this).scrollTop() > 110) {
                $('#top-menu').css({
                    "position": "fixed",
                    "z-index": "150",
                    "top": "0",
                    "width": "100%"
                });
            } else {
                $('#top-menu').css("position", "relative");
            }
        });


        $("#back-top").hide();

        $(window).scroll(function (){
            if ($(this).scrollTop() > 500){
                $("#back-top").fadeIn();
            } else{
                $("#back-top").fadeOut();
            }
        });

        $("#back-top a").click(function (){
            $("body,html").animate({
                scrollTop:0
            }, 800);
            return false;
        });


        $('.carousel').carousel({
            interval: 3000
        });


        /*------------- MAIN Page ------------*/
      $("#blue_ul").on("click", "li", function() {
            $("#blue_ul li.select").removeClass("select");
            $('.tab_area').removeClass("select");
            $(this).addClass("select");
            $('.tab_area').eq($(this).index()).addClass("select");
        });


        $('.fly-map_item').on("click", "i", function() {

            $('.iblock-img div.select').removeClass('select');
            $(this).parent().addClass('select')

            $('.place-fly_list article.show').removeClass('show');
            $('.place-fly_list article.fly'+$(this).attr("data-id")).addClass('show');

            $(this).addClass('select');
            $(this).prev().addClass('show');
        });

        $('.fly-map_item i').hover(
            function(){ $(this).parent().addClass('hover') },
            function(){ $(this).parent().removeClass('hover') }
        );

        $('#tab-list .right').height($('#tab-list .left').height()+14);
        $('#tab-list .left').on("click", "a.tab-link", function() {
            $('#tab-list .left a.select').removeClass('select');
            $('#tab-list .right div.select').removeClass('select');

            $(this).addClass('select');
            $('#tab-list .right div.tab-item').eq($(this).index()).addClass('select');
        });

        $('.face_detail').eq(0).addClass("select");
        $('.prize-area').eq(0).addClass("select");
        $('.text-area').eq(0).addClass("select");

        $('.face-block-list').on("click", "li", function() {

            $('.face-block  article.select').removeClass('select');
            $('.face-block  article').eq($(this).attr("data-id")).addClass('select');

            $('.face-block  .prize-area.select').removeClass('select');
            $('.face-block  #prize'+$(this).attr("data-id")).addClass('select');


            $('.face-block  .text-area.select').removeClass('select');
            $('.face-block  #prizeText'+$(this).attr("data-id")).addClass('select');


            $('.face-block-list li.select').removeClass('select');
            $(this).addClass('select');
        });



        $('#content_tab a').eq(0).addClass("select");
        $('.content_tab_div div').eq(0).addClass('select');

        $('#content_tab').on("click", "a", function() {
            $('#content_tab a').removeClass("select");
            $('.content_tab_div div.select').removeClass("select");
            $(this).addClass('select');
            $('.content_tab_div div').eq($(this).index()-1).addClass('select');

        });

        if($("#catalog-detail .catalog-tabs li").length == 2) {
            $('ul.tabs').addClass('li-2');
        }
        if($("#catalog-detail .catalog-tabs li").length == 1) {
            $('ul.tabs').addClass('li-1');
        }

        $(".tab_content").hide(); //Hide all content
        $("ul.tabs li:first").addClass("active").show(); //Activate first tab
        $(".tab_content:first").show(); //Show first tab content

        //On Click Event
        $("ul.tabs li").click(function() {
            $("ul.tabs li").removeClass("active"); //Remove any "active" class
            $(this).addClass("active"); //Add "active" class to selected tab
            $(".tab_content").hide(); //Hide all tab content
            var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            $(activeTab).fadeIn(); //Fade in the active content
            return false;
        });

        $(".List-prop").on("click", "a", function(e){
            e.preventDefault();
            var man = $(this).attr('data-id');
            $(".List-prop a.select").removeClass('select');
            $(this).addClass('select');

            $("#news-list article").each(function(){
                $(this).css("display", "none");
                if(man === $(this).attr('data-man')) {
                    $(this).css("display", "");
                }
                if(man === 'all') {
                    $(this).css("display", "");
                }
            });

        });

        $('#manufacture').on("click", "span", function() {
            $(this).addClass("open");
            //$('#manufacture ul').css("display", "block");
        });

        $(document).click( function(event){
            if( $(event.target).closest("#manufacture").length )
                return;
            $('#manufacture span').removeClass("open");
            event.stopPropagation();
        });


        $(".fancybox").fancybox({
            helpers: {
                overlay: {
                    locked: false
                }
            },
            autoSize	: true,
            closeClick	: false,
            openEffect	: 'none',
            closeEffect	: 'none',
            autoCenter: true
        });


        $(".various").fancybox({
                helpers: {
                    overlay: {
                        locked: false
                    }
                },
            fitToView	: false,
            autoSize	: true,
            closeClick	: false,
            openEffect	: 'none',
            closeEffect	: 'none',
            padding : '0',
            autoCenter: true
        });


        $('.jcarousel').jcarousel({
            animation: {
                duration: 800,
                easing:   'linear',
                complete: function() {
                }
            },
            wrap: 'circular'
        }); 


      //  $('.face-block-list .jcarousel').jcarouselAutoscroll('stop');


        $('.main-who-jcarousel')
            .on('jcarousel:animateend', function(event, carousel) {
                var currentFirstItem = $(this).jcarousel('first');
                $('#who-detail article').removeClass("select");
                $('#index'+currentFirstItem.attr("data-id")).addClass("select");
            });

        $('.main-who-list li').eq(0).addClass("select");
        $('#who-detail article').eq(0).addClass('select');

        $('.main-who-list').on("click", "li", function() {
            $('.main-who-list li.select').removeClass("select");
            $('#who-detail article').removeClass("select");

            $('#index'+$(this).attr("data-id")).addClass('select');
            $(this).addClass('select');
        });


        /* ----
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






        /* SERTIFICAT */


        $(".sertificat-item a.various").click(function() {
            $("#ww-phone_res p.h2").html($(this).attr("alt"));
            $(".input_name input").val($(this).attr("alt"));
        }).fancybox({
            helpers: {
                overlay: {
                    locked: false
                }
            },
            fitToView	: false,
            autoSize	: true,
            closeClick	: false,
            openEffect	: 'none',
            closeEffect	: 'none',
            padding : '0',
            autoCenter: true,
            afterClose: function() {
            }
        });



        $("#phone").on('submit', 'form', function(e){
            e.preventDefault();

            var t =$(this),
                flagError = 0;

            t.find('.error').removeClass('error');

            t.find('.form-control.req').each(function(){
                if($(this).find('input').val()=='')
                {
                    $(this).closest('.form-control').addClass('error');
                    flagError++;
                }
            });

            t.find('.form-control.email.req').each(function(){
                var pattern = /^[-0-9a-z_.]+@[-0-9a-z^.]+.[a-z]{2,6}/g;
                if (pattern.test($(this).find('input').val())) {
                    $(this).closest('.form-control').removeClass('error');
                }
                else {
                    $(this).closest('.form-control').addClass('error');
                    flagError++;
                }
            });

            if($('.prop_44.req input').val() !== $('.prop_44.req input').attr("data-number")) {
                $('.prop_44.req').addClass('error');
                flagError++;
            }

            if(flagError==0)
            {
                t.attr("data-result", t.find('input[name="form_result"]').val());
                t.attr("data-ok", t.find('input[name="form_ok"]').val());
                t.attr("data-ajax", t.find('input[name="form_ajax"]').val());

                var dataResult = t.attr("data-result");
                var dataAjax = t.attr("data-ajax");
                var dataOk = t.attr("data-ok");
                //    console.log(dataResult+'='+dataAjax);
                var data = t.serializeArray();

                data.push({'name': dataAjax, 'value': 'y'});
                data.push({'name': 'iblock_submit', 'value': 'send'});
                data.push({'name': 'submit', 'value': 'send'});

                $.post(
                    t.attr('action'),
                    data,
                    function(data) {
                        $('#'+dataResult).html(data);
                    });


                $.fancybox.close();

                $.fancybox('<div class="send-ok">' +
                '<p class="h2">Ваш заказ отправлен!</p>' +
                'Спасибо за проявленный интерес.<br>Мы свяжемся с Вами в самое ближайшее время..' +
                '<p class="h2">Летайте вместе с нами!</p>'+
                '</div>');
                $('.fancybox-wrap').addClass('ok-size');
                
                /*$(this).closest('.'+dataOk).html('<div class="send-ok">' +
                '<p class="h2">Ваш заказ отправлен!</p>' +
                    'Спасибо за проявленный интерес.<br>Мы свяжемся с Вами в самое ближайшее время..' +
                    '<p class"h2">Летайте вместе с нами!</p>'+
                '</div>');
                */
                return false;
            }
        });



    });
})(jQuery);
