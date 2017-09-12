<?
foreach ($arResult['ITEMS'] as $key => &$arItem)
{
    foreach($arItem["DISPLAY_PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $id => $photoId) {
        $arItem["MINI_PHOTO"][$id] = array_change_key_case(CFile::ResizeImageGet($photoId, array('width'=>110, 'height'=>80), BX_RESIZE_IMAGE_EXACT, true), CASE_UPPER);
    }
}
unset($arItem);