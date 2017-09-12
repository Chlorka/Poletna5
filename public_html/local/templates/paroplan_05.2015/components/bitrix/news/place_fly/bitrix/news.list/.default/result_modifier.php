<?php
foreach ($arResult['ITEMS'] as $key => &$arItem)
{
    $arItem["MINI_PHOTO"] = array_change_key_case(CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], array('width'=>160, 'height'=>140), BX_RESIZE_IMAGE_EXACT, true), CASE_UPPER);
}
unset($arItem);