<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("text-photo");
?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "photo", Array(
	"IBLOCK_TYPE" => "content",	// Тип инфоблока
		"IBLOCK_ID" => "8",	// Инфоблок
		"SECTION_ID" => "3",	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
		"PAGE_ELEMENT_COUNT" => "20",	// Количество элементов на странице
		"LINE_ELEMENT_COUNT" => "20",	// Количество элементов выводимых в одной строке таблицы
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
			2 => "",
		),
		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"LABEL_PROP" => "-",	// Свойство меток товара
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"MESS_BTN_COMPARE" => "Сравнить",	// Текст кнопки "Сравнить"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRICE_CODE" => "",	// Тип цены
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"ADD_PROPERTIES_TO_BASKET" => "N",	// Добавлять в корзину свойства товаров и предложений
		"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>