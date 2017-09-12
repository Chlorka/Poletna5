<?php
    $arResult["PICTURE_SRC"] = CFile::GetPath($arResult["PICTURE"]);

foreach($arResult["ITEMS"] as $ids => &$arItem):
    $arItem["MINI_PHOTO"] = array();
    foreach($arItem["DISPLAY_PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $id => $photoId) {
        $arItem["MINI_PHOTO"][$id] = array_change_key_case(CFile::ResizeImageGet($photoId, array('width'=>160, 'height'=>130), BX_RESIZE_IMAGE_EXACT, true), CASE_UPPER);
    }
endforeach;
unset($arItem);