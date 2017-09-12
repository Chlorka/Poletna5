<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Обучение полетам на параплане на выездах");
$APPLICATION->SetPageProperty("keywords", "выезды на полеты в Непал, в Индию, в Турцию, в Олудениз, в Гагры, обучение полетам на выездах, парапланерные туры");
$APPLICATION->SetPageProperty("description", "Обучение полетам на парапланерных выездах в различные летные места");
$APPLICATION->SetTitle("Обучение полетам на параплане на выездах");
?><div class="ww-area">
	<table class="text">
	<tbody>
<tr>
		<td colspan="2">
 <br>
			<br>
			Обучение на выездах - это продвинутый курс обучения маршрутным полетам в наиболее популярных среди парапланеристов местах за пределами России: Непал, Индия и СИВ-курс в Гаграх или Турции (Олудениз). Выезды объединяют полеты, путешествия и знакомство с культурой разных интересных стран. Следите за новостями, где мы будем объявлять набор в группы.
		</td>
	</tr>
	<tr>
		<td>
			<h2>Полеты в Непале</h2>
			<p>
				 Непал, Покхара  славится своими относительно мягкими условиями для полетов, захватывающими видами на Гималайские горы и идеально подходит для обучения маршрутным полетам. Высота старта 650 м, перед стартом практически всегда есть дежурные потоки, штатные посадки располагаются около озера. Колорит этой страны не оставит Вас равнодушным, а полеты запомнятся надолго. Это одно из самых бюджетных мест для выезда на полеты на парапланах.
			</p>
		</td>
		<td>
 <img width="502" src="/images/siv.jpg" height="353" alt="Выезды на полеты в Непал" title="Выезды на полеты в Непал"><br>
		</td>
	</tr>
	<tr>
		<td>
 <img width="502" src="/images/vz_1.jpg" height="353" alt="Обучение полетам на выездах: Индия" title="Обучение полетам на выездах: Индия"><br>
		</td>
		<td>
			<h2>Полеты в Индии</h2>
			<p>
Индия, Бир – полюбившееся многим место для полетов в предгорьях Гималаев. Отличается более сложными условиями, чем в Непале, ограниченными стартом и посадками. Подходит для более опытных пилотов. Здесь можно с легкостью совершить полет в 100 км вдоль гор: до резиденции Далай-Ламы и обратно. Место популярно как среди начинающих пилотов, так и спортсменов. Здесь неоднократно проводились Предкубки мира по парапланерному спорту.
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<h2>СИВ-курс в Олуденизе</h2>
			<p>
				Олудениз – это практически рай на земле, культовое и очень популярное лётное место среди пилотов всего мира. Условия данного места являются уникальными: гора Бабадаг с перепадом почти 2000 м расположена у самого Средиземного моря. Таким образом, у вылетающих над водой пилотов есть огромный запас высоты для различных элементов SIV-курса или акро-фигур. Полеты в потоках возможны по погоде. Старты выложены брусчаткой, посадка происходит на пляж и не представляет сложностей.
			</p>
		</td>
		<td>
 <img width="502" src="/images/vz_2.jpg" height="353" alt="Парапланерные туры в Олудениз" title="Парапланерные туры в Олудениз"><br>
		</td>
	</tr>
	<tr>
		<td>
 <img width="502" src="/images/siv_2.jpg" height="353" alt="СИВ-курс обучения полетам на параплане в Гаграх" title="СИВ-курс обучения полетам на параплане в Гаграх"><br>
		</td>
		<td>
			<h2>СИВ-курс в Гаграх</h2>
			<p>
				Гагры – это отличная возможность объединить полеты с пляжным отдыхом. Как и в Олуденизе, старт, ориентированный на юго-запад, расположен в непосредственной близости от моря. Здесь отличные огромные посадки и возможность летать маршруты в потоках или проходить отработку опасных режимов над водой. Дорога наверх занимает около 40 минут, на воде всегда дежурит лодка.
			</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
 <br>
			<br>
			 Более подробная информация о сроках, программе выезда, описании места, требовании к квалификации пилотов будет размещаться в новостном разделе нашего сайта.
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
		"SECTION_ID" => "11",
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