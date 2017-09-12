<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Курс маршрутных полетов на параплане");
$APPLICATION->SetPageProperty("keywords", "обучение маршрутным полетам на параплане, обучение полетам кросс-кантри, курсы маршрутных полетов");
$APPLICATION->SetPageProperty("description", "Курс кросс-кантри полетов на параплане, пройдя который вы сможете летать маршруты самостоятельно");
$APPLICATION->SetTitle("Курс маршрутных полетов на параплане");
?><div class="ww-area">
	<table class="text">
	<tbody>
	<tr>
		<td>
			<h2>Обучение полетам кросс-кантри</h2>
			<p>
				 Курс маршрутных полетов подразумевает собой занятия для пилотов, прошедших начальную подготовку полетов на параплане в лётной школе и имеющих устойчивые навыки старта, парения, приземления и общие теоретические знания.
			</p>
			<p>
 <br>
				 Он необходим тем, кто собирается начать летать маршруты в потоках, кто хочет усовершенствовать свои навыки в этой области, стать самостоятельным пилотом или начать летать на соревнованиях.
			</p>
		</td>
		<td>
 <img width="502" src="/images/kmp.jpg" height="353" alt="Обучение маршрутным полетам на параплане" title="Обучение маршрутным полетам на параплане"><br>
		</td>
	</tr>
	<tr>
		<td>
 <img width="502" src="/images/kmp_2.jpg" height="353" alt="Курсы маршрутных полетов в клубе «+5»" title="Курсы маршрутных полетов в клубе «+5»"><br>
		</td>
		<td>
			<h2>Как начать летать маршруты - теоретическая часть</h2>
			<p>
				 Курс маршрутных полетов включает в себя теоретическую часть, где даются углубленные знания по метеорологии и тактике и стратегии маршрутных полетов. Преподается информация о том, как формируются восходящие потоки воздуха, где и как их можно найти и технике набора высоты.<br>
				 Уделяется внимание информации, которая поможет летать маршруты безопасно, т.к. именно в этом типе полетов пилота предостерегают множественные опасности. Мы научим Вас пользоваться летными приборами и расскажем, по каким принципам проходят соревнования по парапланерному спорту и что нужно, чтобы принимать в них участие.
			</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<h2>Практическая часть обучения полетам</h2>
			<p>
				 Практическая часть основывается на принципе от простого к сложному и базируется на знаниях, которые уже есть у студента. Так же, как и при начальной подготовке у нас индивидуальный подход к каждому пилоту.
			</p>
			<p>
 <br>
				 В зависимости от навыков пилоту будут ставиться различные задачи, исполнение которых будет под контролем инструктора. Для начала мы изучаем парение в потоках в районе старта, затем переходим к коротким маршрутам и маршрутам через несколько поворотных точек. Контроль осуществляется с земли по радиостанции.<br>
				 Перед самостоятельными вылетами в термичную погоду возможно парение в потоках в тандеме с инструктором. Это наиболее подходящий способ объяснить динамику потока и способ его обрабатывания прямо в воздухе.
			</p>
			<p>
 <br>
				 Если предполагается далекий и интересный или сложный маршрут, то полет осуществляется параллельно с инструктором. В таком случае вы получите наиболее ценный опыт, позволяющий понять все принципы полета по маршруту и научитесь принимать правильные решения.
			</p>
		</td>
	</tr>
	</tbody>
	</table>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"photo",
	Array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "8",
		"SECTION_ID" => "10",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "N",
		"PAGE_ELEMENT_COUNT" => "20",
		"LINE_ELEMENT_COUNT" => "20",
		"PROPERTY_CODE" => array(0=>"",1=>"",2=>"",),
		"OFFERS_LIMIT" => "5",
		"TEMPLATE_THEME" => "blue",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"SET_STATUS_404" => "N",
		"CACHE_FILTER" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRICE_CODE" => "",
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"DISPLAY_COMPARE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"BROWSER_TITLE" => "-",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>