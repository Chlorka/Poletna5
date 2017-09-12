<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "кемпинг на Юце, парапланерный кемпинг");
$APPLICATION->SetPageProperty("description", "Кемпинг под горой Юца");
$APPLICATION->SetTitle("КЕМПИНГ НА ЮЦЕ");
?><div class="ww-area">
	<table class="text">
	<tbody>
	<tr>
		<td>
			<h2>Кемпинг "+5"</h2>
			<p>
				 В начале 2015 года Федерация СЛА Ставропольского края&nbsp;приступила&nbsp;к возрождению дельтадрома на Юце и мы рады сообщить, что кемпинг под горой Юца уже существует и в нем есть все необходимое для комфортного времяпрепровождения и полетов: душ, туалеты, умывальники, кафе "Speed-Bar", где кормят вкусно и не дорого. В кемпинге есть Wi-Fi, место для хранения лётного оборудования, организован завоз пилотов на гору.
			</p>
			<p>
				 Все это доступно за небольшую плату.
			</p>
		</td>
		<td>
 <img width="502" alt="Парапланерный кемпинг на Юце от клуба «+5»" src="/images/Kemping_2.jpg" height="353" title="Парапланерный кемпинг на Юце от клуба «+5»"><br>
		</td>
	</tr>
	<tr>
		<td>
 <img width="502" alt="Новое кафе в парапланерном кемпинге на Юце" src="/images/Kemping_3.jpg" height="353" title="Новое кафе в парапланерном кемпинге на Юце"><br>
		</td>
		<td>
			<h2>Полеты на Юце</h2>
			<p>
				 Аэродром на Юце функционирует и принимает планеры, легкомоторные самолеты, здесь прыгают бейс, летают на парапланах и дельтапланах, проходят обучение курсанты. Мы всегда рады видеть пилотов любых СЛА&nbsp;и их друзей и родственников.
			</p>
			<p>
				 Вы можете поставить палатку в любом из отведенных под это мест.&nbsp;
			</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
 <br>
 <br>
			 Конечно, вы можете разбить тент и за пределами кемпинга и не пользоваться всем вышеперечисленным. Вас никто не прогонит. Но в таком случае Вы не захватите ту&nbsp;дружескую&nbsp;атмосферу, которая всегда присутствует среди любителей неба!&nbsp;
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
		"SECTION_ID" => "8",
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