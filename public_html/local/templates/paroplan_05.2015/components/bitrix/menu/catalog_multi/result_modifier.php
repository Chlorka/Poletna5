<?php

foreach($arResult as $id=>&$arItem):
//r($arItem);

  //  if($arItem["LINK"]=='/used-cars/') {
        if(CModule::IncludeModule("iblock"))
        {
            $arSelect = array("ID", "IBLOCK_ID", "DETAIL_PAGE_URL", "NAME" , "PREVIEW_PICTURE");
            $arFilter = array(
                "ACTIVE" => "Y",
                "IBLOCK_ID" => 15,
                "SECTION_ID" => $arItem["PARAMS"]["SECTION_ID"]
            );
            $rsElements = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
            $i=0;
            while($arElement = $rsElements->GetNext())
            {
              //  $arElement["PREVIEW_PICTURE"] = CFile::ResizeImageGet($arElement["PREVIEW_PICTURE"], array('width'=>160, 'height'=>84), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                //	echo'<pre>'; echo print_r($arElement); echo '</pre>';
                $i++;
                $arResult[$id]["PARAMS"]["ELEMENT_LIST"][]=$arElement;
                $arResult[$id]["PARAMS"]["ELEMENT_LIST_COUNT"][]=$i;
            }
        }
    //}*/
endforeach;
//r($arResult);
