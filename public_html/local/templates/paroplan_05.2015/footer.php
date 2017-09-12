<section id="contact-inc">
    <div class="ww-area">
        <?$APPLICATION->IncludeFile(
            "/.inc/bottom-contact-inc.php",
            array(),
            array("MODE"=>"html")
        );?>
        <div class="social">
            <?$APPLICATION->IncludeFile(
                "/.inc/bottom-social-inc.php",
                array(),
                array("MODE"=>"html")
            );?>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="ww-area">
        <div id="footer-menu">
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom-menu", 
	array(
		"ROOT_MENU_TYPE" => "bottom",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "Y",
		"MENU_THEME" => "site"
	),
	false
);?>
            <div class="footer-menu-inc">
                <?$APPLICATION->IncludeFile(
                    "/.inc/footer-menu-inc.php",
                    array(),
                    array("MODE"=>"html")
                );?>
            </div>
        </div>
        <div class="contact-arena">
            <a href="/" class="logo"></a>
            <div class="contact">
                <?$APPLICATION->IncludeFile(
                    "/.inc/footer-contact.php",
                    array(),
                    array("MODE"=>"html")
                );?>
            </div>
            <div class="phone">
                <?$APPLICATION->IncludeFile(
                    "/.inc/footer-phone.php",
                    array(),
                    array("MODE"=>"html")
                );?>
            </div>
            <div class="gold">
                <?$APPLICATION->IncludeFile(
                    "/.inc/footer-gold.php",
                    array(),
                    array("MODE"=>"html")
                );?>
            </div>
        </div>
    </div>
</footer>
<p id="back-top"><a href="#top"></a></p>
</section>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>

<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.jcarousel.min.js"></script>

<!-- Add fancyBox -->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/fancybox2/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/fancybox2/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/fancybox2/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/common.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter31473693 = new Ya.Metrika({
                    id:31473693,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31473693" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82272543-1', 'auto');
  ga('send', 'pageview');

</script>
<?r($_SESSION["ELEM_POLE"]);?>
</body>
</html>