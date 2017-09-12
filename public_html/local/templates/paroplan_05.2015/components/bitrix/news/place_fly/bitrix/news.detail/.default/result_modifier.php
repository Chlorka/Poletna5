<?php
foreach($arResult["DISPLAY_PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $id => $photoId) {
    $arResult["MINI_PHOTO"][$id] = array_change_key_case(CFile::ResizeImageGet($photoId, array('width'=>160, 'height'=>140), BX_RESIZE_IMAGE_EXACT, true), CASE_UPPER);
}