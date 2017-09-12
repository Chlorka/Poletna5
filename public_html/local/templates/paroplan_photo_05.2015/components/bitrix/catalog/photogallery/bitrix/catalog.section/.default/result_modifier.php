<?foreach ($arResult['ITEMS'] as $key => &$arItem)
{
     $arItem["DETAIL_MINI"] = array_change_key_case(CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], array('width'=>2100, 'height'=>1000), BX_RESIZE_IMAGE_PROPORTIONAL, true), CASE_UPPER);
//r($arItem["DETAIL_MINI"]);
}
unset($arItem);