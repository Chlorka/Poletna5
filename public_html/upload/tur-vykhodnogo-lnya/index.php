<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��� ��������� ���");
?><div class="ww-area">
	<table class="text">
	<tbody>
	<tr>
		<td>
			<h2>����� �� ������ � �����</h2>
			<p>
				 ���� �+5� ���������� ��� ��������� ��� � �����. ��� ����������� �����, ������������ ����� �� ��������� � ������������ � ����� �� ����������� ���� ������� � ������ ����������������������, ���������� � ������� ������������ ������ � ����� ������� �������. ������ � ������ ��������� ���������� ������������� � ������� ����������� ������ ���� � ����, ������� ����������� ����, ��� �� ������� ����� ���������� ����������� ����� �������� � ��������. ����� �������������� � ���� �����. ����� � ����� �������� � ������ �� ������.
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
			<h2>������� ������</h2>
			<p>
				 ����� ���������� � ���������-���������� ���������� �� ����� ������� � ������� � ��������� ���������� ������, ������ �� ����� �������� �� �������. ������� ������� �����, ��������� ������ ������, ���������� ���� � ���������� ������ � ����� ��������� � ������������. ������ ����, ������� ����� ����, �������� � ������� ����� ������ � �������� ���� ������, �������� ���������� � �����������. ��������, ���� � ����� ���� ��������� � ������� ����������� ����������� ������. � ������ ������ ������ �� ������� ����� � ������� ��������� ��������, �������� � ���� ���-���� � ������ ��������� ��������.
			</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
 <br>
 <br>
			 �� ������ ������ ����� � ����� ������ ��� ������, ���� ���� ��� �� ����� ������. ��� ������ ����� ��������� � ��. ��������� ����������� ����� �� ���������� ������� � �������� �����, ������� ���������� ����� �� ������������ ������� ���������, � ����������� ���������� �������� ����� �� � �������.<br>
			 �������� ��� ������ � ������� ������, ��� � ��������������.<br>
			 �� ����� ��������� ����������� ����������� �� ������ ����������� ������ ��������.
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
		"MESS_BTN_BUY" => "������",
		"MESS_BTN_ADD_TO_BASKET" => "� �������",
		"MESS_BTN_SUBSCRIBE" => "�����������",
		"MESS_BTN_COMPARE" => "��������",
		"MESS_BTN_DETAIL" => "���������",
		"MESS_NOT_AVAILABLE" => "��� � �������",
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
		"PAGER_TITLE" => "������",
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