<?
foreach ($arResult['ITEMS'] as $key => &$arItem)
{
    $arItem["MINI_PHOTO"] = array_change_key_case(CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>160, 'height'=>140), BX_RESIZE_IMAGE_EXACT, true), CASE_UPPER);
}
unset($arItem);

if(CModule::IncludeModule("iblock")) {

    $arSelect = array(
        "ID",
        "NAME",
        "PROPERTY_*",
        "CATALOG_GROUP_2",
        "CATALOG_GROUP_1",
    );

    $flag = 'N';
    $arFilter_S = Array("IBLOCK_ID" => IntVal(27));
    $res_S = CIBlockElement::GetList(Array(), $arFilter_S, false, false, array("ID"));
    while ($ar_fields_S = $res_S->GetNext()) {

        $arFilter = Array("IBLOCK_ID" => IntVal(27), "ID" => $ar_fields_S["ID"]);

        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);

        if ($obElement = $res->GetNextElement()) {
            $arResult = $obElement->GetFields();
            if ($arResult["CATALOG_QUANTITY_TRACE"] == 'Y') {
                $flag = 'Y';
                echo '<pre>';
                print_r($arResult["ID"]);
                echo '</pre>';

                Cmodule::IncludeModule('catalog');
                $PRODUCT_ID = $arResult["ID"]; // id ������
                $arFields = array('QUANTITY_TRACE' => "D");// ����������������� ����������
                CCatalogProduct::Update($PRODUCT_ID, $arFields);
            }

            // r($arResult);
        }
	}/*
    if($flag == 'Y') {
        echo '<b style="color: red;">��� ������� ������� - �������� �������� !</b>';
    } else {
            echo '<b style="color: green;">������� � �������������� ������ �� �������.</b>';
	}*/
    }