<div id="footer-section">
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "section_menu", Array(
	"IBLOCK_TYPE" => "content",	// ��� ���������
		"IBLOCK_ID" => "10",	// ��������
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID �������
		"SECTION_CODE" => "",	// ��� �������
		"COUNT_ELEMENTS" => "Y",	// ���������� ���������� ��������� � �������
		"TOP_DEPTH" => "1",	// ������������ ������������ ������� ��������
		"SECTION_FIELDS" => array(	// ���� ��������
			0 => "",
			1 => "undefined",
			2 => "",
		),
		"SECTION_USER_FIELDS" => array(	// �������� ��������
			0 => "",
			1 => "undefined",
			2 => "",
		),
		"VIEW_MODE" => "TEXT",	// ��� ������ �����������
		"SHOW_PARENT_NAME" => "Y",	// ���������� �������� �������
		"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
	),
	false
);?>
</div>
</section>
<script src="<?=SITE_TEMPLATE_PATH?>/js/fotorama.js"></script> <!-- 16 KB -->

<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.jcarousel.min.js"></script>

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
</body>
</html>