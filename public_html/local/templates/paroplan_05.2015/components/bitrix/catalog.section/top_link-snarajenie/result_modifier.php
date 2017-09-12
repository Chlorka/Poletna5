<?
use Bitrix\Main\Type\Collection;
use Bitrix\Currency\CurrencyTable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
$arResult["arrSection"] = array();

foreach ($arResult['ITEMS'] as $key => &$arItem) {
    //r($arItem);

    $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
    if($ar_res = $res->GetNext())
        $arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["IBLOCK_SECTION_URL"] = $ar_res["SECTION_PAGE_URL"];

        $arResult["arrSection"][$arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["VALUE_ENUM_ID"]] = $arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"];
}
unset($arItem);
$arResult['ITEMS_NEW'] = array();
foreach ($arResult['ITEMS'] as $key => $arItem) {
    $arParams['MANUFACTURE'].'=='.$arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["DISPLAY_VALUE"];
    if($arParams['MANUFACTURE'] == $arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["DISPLAY_VALUE"]):
        $arResult['ITEMS_NEW'][] = $arItem;
    endif;
}
 //    r($arResult['ITEMS_NEW']);
?>