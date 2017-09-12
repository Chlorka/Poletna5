<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "О нашей команде");
$APPLICATION->SetPageProperty("keywords", "Федерация сверхлегкой авиации Ставропольского края, клуб +5, пилоты Пятигорска, кто летает на Юце");
$APPLICATION->SetPageProperty("description", "О пилотах города Пятигорск");
$APPLICATION->SetTitle("О КЛУБЕ \"+5\"");
?><div class="ww-area">
	<table class="text">
	<tbody>
	<tr>
		<td>
			<h2>Федерация сверхлегкой авиации Ставропольского края и клуб "+5"</h2>
			<p>
				 Клуб «+5» находится под эгидой Федерации сверхлегкой авиации Ставропольского края и объединяет пилотов и инструкторов-парапланеристов.
			</p>
			<p>
				Мы живем небом, это наша стихия, наше хобби, наша жизнь.
			</p>
			<p>
				Мы проводим тысячи часов в воздухе летая не только на парапланах, но и на различных других типах летательных аппаратов: парамоторах, паратрайках, дельтапланах, планерах и легкомоторных самолетах.
			</p>
		</td>
		<td>
 <img width="502" src="/images/o_nas_7.jpg" height="353" alt="Что такое летный клуб «+5»?" title="Что такое летный клуб «+5»?"><br>
		</td>
	</tr>
	</tbody>
	</table>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"face-detail", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "4",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_FIELD2" => "sort",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "N",
		"PAGE_ELEMENT_COUNT" => "20",
		"LINE_ELEMENT_COUNT" => "20",
		"PROPERTY_CODE" => array(
			0 => "NAME",
			1 => "PRO",
			2 => "REGALII",
			3 => "MORE_PHOTO",
			4 => "PRICE",
			5 => "",
		),
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
		"PRICE_CODE" => array(
		),
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
		"PRODUCT_PROPERTIES" => array(
		)
	),
	false
);?>
<div class="ww-area">
	<table class="text">
	<tbody>
	<tr>
		<td>
			<h2>Полёты в России и за рубежом</h2>
			<p>
				 Мы работаем инструкторами не только на территории России, но периодически за рубежом, набираясь опыта и совершенствуя свою квалификацию.
			</p>
			<p>
				 Мы поднимали в воздух людей из самых разных стран и слышали восторженное «Спасибо» на самых разных языках!
			</p>
			<p>
				 Время от времени наши пилоты принимают участие&nbsp;в различных проектах и съемках документальных фильмов таких каналов, как "Первый" и "Russia Today".
			</p>
		</td>
		<td>
 <img width="502" src="/images/o_nas_5.jpg" height="353" alt="Пилоты Пятигорска в России и за рубежом" title="Пилоты Пятигорска в России и за рубежом"><br>
		</td>
	</tr>
	<tr>
		<td>
 <img width="502" src="/images/o_nas_4.jpg" height="353" alt="Члены клуба «+5» участвуют в многочисленных соревнованиях" title="Члены клуба «+5» участвуют в многочисленных соревнованиях"><br>
		</td>
		<td>
			<h2>Участие в соревнованиях</h2>
			<p>
				 Мы амбициозны, что скрывать!&nbsp;Мы участвуем в российских и зарубежных соревнованиях, показывая неплохие результаты: Чемпионатах России и открытых Чемпионатах других стран, Чемпионатах Европы, Предкубках и Кубках Мира.
			</p>
			<p>
				 Мы объездили пол мира и побывали в различных лётных местах.
			</p>
			<p>
 <b>Нет ничего прекраснее, чем любоваться нашей планетой с высоты птичьего полёта! Мы хотели бы подарить эти ощущения и Вам! Летайте вместе с нами!</b>
			</p>
		</td>
	</tr>
	</tbody>
	</table>
</div>
 <br>
 <br>
<p class="h1">
	 Наши преимущества
</p>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"tabs",
	Array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "7",
		"SECTION_ID" => "7",
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
		"PRICE_CODE" => array(),
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
		"PRODUCT_PROPERTIES" => array()
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>