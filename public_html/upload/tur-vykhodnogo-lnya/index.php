<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тур выходного дня");
?><div class="ww-area">
	<table class="text">
	<tbody>
	<tr>
		<td>
			<h2>Выезд на полеты в Чегем</h2>
			<p>
				 Клуб «+5» предлагает тур выходного дня в Чегем. Это однодневный выезд, объединяющий полет на параплане с инструктором в одном из красивейших мест Кавказа и осмотр достопримечательностей, знакомство с местной национальной кухней и бытом местных жителей. Погода в данной местности отличается стабильностью и большим количеством летных дней в году, поэтому вероятность того, что по приезду будет невозможно осуществить полет сводится к минимуму. Полет осуществляется с горы Зинки. Выезд в Чегем возможен с апреля по ноябрь.
			</p>
		</td>
		<td>
 <img width="502" src="/images/Chegem_6.jpg" height="353"><br>
		</td>
	</tr>
	<tr>
		<td>
 <img width="502" src="/images/Chegem_15sm.jpg" height="353"><br>
		</td>
		<td>
			<h2>Красота Чегема</h2>
			<p>
				 Чегем расположен в Кабардино-Балкарской республике на самой границе с Грузией в верховьях Чегемского ущелья, одного из самых красивых на Кавказе. Древняя история места, чистейший горный воздух, альпийские луга с уникальной флорой и скалы восхищают и завораживают. Бурная река, бегущая среди скал, грохочет и петляет среди утесов и отвесных скал ущелья, покрытых растениями и кустарником. Водопады, горы и синее небо сливаются и создают потрясающий воображение пейзаж. В рамках нашего выезда мы посетим малые и большие Чегемские водопады, дольмены в селе Эль-Тюбю и старую греческую лестницу.
			</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
 <br>
 <br>
			 Вы всегда можете взять с собой друзей или родных, даже если они не хотят летать. Эта поезда будет интересна и им. Местность расположена вдали от населенных пунктов и проезжих дорог, поэтому нахождение здесь не представляет никакой опасности, а наслаждение окружающей природой будет им в радость.<br>
			 Возможны как выезды в составе группы, так и индивидуальные.<br>
			 За более подробной информацией обращайтесь по нашему контактному номеру телефона.
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
		"SECTION_ID" => "9",
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