<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Полеты на параплане с инструктором - Клуб «+5»");
$APPLICATION->SetPageProperty("keywords", "Полеты на парапланах с инструктором, полеты в тандеме на Юце, полеты вдвоем");
$APPLICATION->SetPageProperty("description", "Полная информация о полетах на параплане с инструктором, включая короткий инструктаж, полезную информацию, фото и видео. Полеты на параплане с инструктором – это самый доступный и безопасный способ приобщиться к авиации.");
$APPLICATION->SetTitle("Полеты на параплане с инструктором");
?><div class="ww-area">
	<table class="text">
	<tbody>
	<tr>
		<td>
			<h2>Подготовка к полету на параплане</h2>
			<p>
				 Полеты на параплане с инструктором – это самый доступный и безопасный способ приобщиться к авиации, оторваться от земли и ощутить чувство полета, минуя длительный процесс обучения. Вся теоретическая подготовка к полету сводится к 10-минутному инструктажу непосредственно перед взлетом. От Вас потребуется минимум усилий и знаний. Мы летаем с пассажирами практически любой физической подготовки и возраста: от 5 лет и до… У нас всегда есть помощники, если старт своими усилиями не представляется возможным.
			</p>
		</td>
		<td>
 <img width="502" src="/images/p_i_2.jpg" height="353" alt="Полет на параплане с инструктором" title="Полет на параплане с инструктором"><br>
		</td>
	</tr>
	<tr>
		<td>
 <img width="502" src="/images/p_i_4.jpg" height="353"  alt="Полет на параплане с инструктором: вид сверху" title="Полет на параплане с инструктором: вид сверху"><br>
		</td>
		<td>
			<h2>Полет на параплане</h2>
			<p>
				 Самым ответственным моментом является взлет и особенно здесь необходимо строго следовать указаниям инструктора. В процессе самого полета на параплане с инструктором от пассажира не требуется практически ничего. Вы сможете спокойно (или с восторгом!) наслаждаться открывающимися видами и понять, что чувствуют птицы, ведь они летают по тем же принципам, что и парапланы. Посадка всегда происходит мягко, гораздо комфортнее, чем приземление на парашюте. Более подробно о том, как подготовиться к полету и найти ответы на часто задаваемые вопросы Вы сможете в разделе «<a href="http://poletna5.ru/polety/poleznaya-informatsiya/">Полезная информация</a>».
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
		"SECTION_ID" => "3",
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
);?>
<p class="h1">
	 ПОЛЕЗНАЯ ИНФОРМАЦИЯ
</p>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"tabs",
	Array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "7",
		"SECTION_ID" => "2",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "N",
		"PAGE_ELEMENT_COUNT" => "5",
		"LINE_ELEMENT_COUNT" => "5",
		"PROPERTY_CODE" => array(0=>"",1=>"VIDEO",2=>"",),
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
);?>
<div class="ww-area">
	<table class="text">
	<tbody>
	<tr>
		<td>
			<h2>Лучше гор могут быть только горы</h2>
			<p>
				 Мы не летаем с равнин, используя лебедочные комплексы для затягивания крыла в воздух. Мы летаем как птицы, исключительно с гор.
			</p>
			<p>
				 Самым доступным местом для полетов на параплане с инструктором является гора Юца под Пятигорском. Здесь базируется наш клуб «+5» и здесь же расположен наш одноименный <a href="http://poletna5.ru/kemping-/">кемпинг</a>.
			</p>
		</td>
		<td>
 <img width="502" src="/images/p_i_3.jpg" height="353"><br>
		</td>
	</tr>
	<tr>
		<td>
 <img width="502" src="/images/p_i_1.jpg" height="353"><br>
		</td>
		<td>
			<h2>Полеты в красивейших местах Кавказа</h2>
			<p>
				 Мы летаем в разных красивых местах: в России и за ее пределами. И мы хотели бы, чтобы Вы смогли не только подняться в воздух, но и увидеть красоту природы и Кавказских гор с высоты птичьего полета.
			</p>
			<p>
				 Поэтому география наших полетов весьма обширна и она различна в разное время года.
			</p>
			<p>
				 Более подробно об этом читайте в разделе «<a href="http://poletna5.ru/polety/mesta-poletov/">Места полетов</a>».
			</p>
		</td>
	</tr>
	</tbody>
	</table>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"video",
	Array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "6",
		"SECTION_ID" => "1",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "N",
		"PAGE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(0=>"",1=>"VIDEO",2=>"",),
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