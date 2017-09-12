<?
use Bitrix\Main\Type\Collection;
use Bitrix\Currency\CurrencyTable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

$arResult["BIG_PHOTO"] = array_change_key_case(CFile::ResizeImageGet($arResult["DISPLAY_PROPERTIES"]["MORE_PHOTO"]["VALUE"][0], array('width'=>500, 'height'=>350), BX_RESIZE_IMAGE_EXACT, true), CASE_UPPER);


foreach($arResult["DISPLAY_PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $id => $photoId) {
    $arResult["MINI_PHOTO"][$id] = array_change_key_case(CFile::ResizeImageGet($photoId, array('width'=>160, 'height'=>140), BX_RESIZE_IMAGE_EXACT, true), CASE_UPPER);
}
?>