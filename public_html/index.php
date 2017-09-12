<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "���������, ������ �� ����������, ������ �� ���, ������ � ������������, ������ � ����������, ������ �� �������");
$APPLICATION->SetPageProperty("description", "������ �� ����������, ���������, ���, �����. �������� ������� �� ���������. ���������� ��� ������� ������������� �������.");
$APPLICATION->SetPageProperty("title", "����� �� ���������: ��� (���������, ����������), �������� ������� �� ���������, �������� �� ���������");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("������� ��������");
?>
    <div id="big-slider">
<?$APPLICATION->IncludeComponent("bitrix:news.list", "big-slider_new", Array(
	"IBLOCK_TYPE" => "content",	// ��� ��������������� ����� (������������ ������ ��� ��������)
		"IBLOCK_ID" => "1",	// ��� ��������������� �����
		"NEWS_COUNT" => "6",	// ���������� �������� �� ��������
		"SORT_BY1" => "ACTIVE_FROM",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER1" => "DESC",	// ����������� ��� ������ ���������� ��������
		"SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������
		"FILTER_NAME" => "",	// ������
		"FIELD_CODE" => array(	// ����
			0 => "",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "undefined",
			5 => "",
		),
		"PROPERTY_CODE" => array(	// ��������
			0 => "HREF",
			1 => "undefined",
			2 => "",
		),
		"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
		"DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"CACHE_GROUPS" => "N",	// ��������� ����� �������
		"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
		"SET_TITLE" => "N",	// ������������� ��������� ��������
		"SET_STATUS_404" => "N",	// ������������� ������ 404, ���� �� ������� ������� ��� ������
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// �������� �������� � ������� ���������
		"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
		"PARENT_SECTION" => "",	// ID �������
		"PARENT_SECTION_CODE" => "",	// ��� �������
		"INCLUDE_SUBSECTIONS" => "N",	// ���������� �������� ����������� �������
		"DISPLAY_DATE" => "N",	// �������� ���� ��������
		"DISPLAY_NAME" => "Y",	// �������� �������� ��������
		"DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
		"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
		"PAGER_TEMPLATE" => ".default",	// ������ ������������ ���������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"DISPLAY_BOTTOM_PAGER" => "N",	// �������� ��� �������
		"PAGER_TITLE" => "�������",	// �������� ���������
		"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
		"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
	),
	false
);?>
    <div class="slider_inc">
        <div class="ww-area">

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider-polety", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "12",
		"NEWS_COUNT" => "4",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "HREF1",
			1 => "HREF2",
			2 => "HREF3",
			3 => "",
			4 => "",
			5 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "�������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
        </div>
    </div>
</div>
<div id="blue-block">
    <div class="ww-area">
        <div class="blue-block_area">
            <ul id="blue_ul">
                <li class="select"><span><span>������ <i>�� ����������</i></span></span></li>
                <li><span><span>��� �� <i>������� � �����</i></span></span></li>
            </ul>
            <div class="tab_area select">
                <div id="camp">
                    <?$APPLICATION->IncludeFile(
                        "/.inc/camp.php",
                        array(),
                        Array(
                            "MODE"      => "html",
                            "NAME"      => "������ �����",
                            "TEMPLATE"  => "standard_inc.php"
                    ));?>
                </div>

                <div id="camp_img">
                    <?$APPLICATION->IncludeFile("/.inc/camp_img.php",
                        Array(),
                        Array(
                            "MODE"      => "html",
                            "NAME"      => "������ img",
                            "TEMPLATE"  => "standard_inc.php"
                        ));?>
                </div>
            </div>

            <div class="tab_area">
                <div id="who">
                    <?$APPLICATION->IncludeFile(
                        "/.inc/who.php",
                        array(),
                        Array(
                            "MODE"      => "html",
                            "NAME"      => "��� �� �����",
                            "TEMPLATE"  => "standard_inc.php"
                        ));?>
                </div>

                <div id="who_face">

                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"who-face", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "undefined",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "NAME",
			1 => "PRO",
			2 => "PRICE",
			3 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "�������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
                </div>
            </div>
        </div>
    </div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"place-fly", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "undefined",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "PLACE",
			1 => "SEZON",
			2 => "Y_ray",
			3 => "X_ray",
			4 => "MORE_PHOTO",
			5 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "�������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main-polety", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "undefined",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "IMG",
			2 => "COLOR",
			3 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/polety-na-drugikh-sla/#ELEMENT_CODE#/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "�������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<div class="ww-area text">
 <?$APPLICATION->IncludeFile(
                            "/.inc/main-page_text.php",
                            array(),
                            array("MODE"=>"html")
                        );?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>