<?
use Bitrix\Main\Type\Collection;
use Bitrix\Currency\CurrencyTable;
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
	$arResult["arPropList"] = array();
	foreach ($arResult['ITEMS'] as $key => $arItem)
	{
        $arResult["arPropList"][$arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["VALUE_XML_ID"]] = $arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"];
	}
?>