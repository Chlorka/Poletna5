<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Места полетов в Кавказском регионе");
$APPLICATION->SetPageProperty("keywords", "полеты в Пятигорске, полеты на Юце, полеты на Домбае, полеты в Кисловодске, полеты на Эльбрусе, полеты в Чегеме");
$APPLICATION->SetPageProperty("description", "Представлена подробная информация о местах, пригодных для полетов на параплане");
$APPLICATION->SetTitle("Места полетов");
?>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/ya_map.js" type="text/javascript"></script>

<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"place_fly", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "LONG_NAME",
			1 => "PLACE",
			2 => "SEZON",
			3 => "lan",
			4 => "ran",
			5 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LONG_NAME",
			1 => "PLACE",
			2 => "SEZON",
			3 => "lan",
			4 => "ran",
			5 => "MORE_PHOTO",
			6 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"SEF_FOLDER" => "/polety/mesta-poletov/",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_ID#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>