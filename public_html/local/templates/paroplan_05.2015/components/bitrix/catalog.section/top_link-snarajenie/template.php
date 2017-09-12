<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if (!empty($arResult['ITEMS']))
{?>
<div id="sec">
    <div class="pm-menu2_area">
        <div id="manufacture">
            <span><?=$arParams['MANUFACTURE'];?></span>
            <ul>
            <?foreach($arResult["arrSection"] as $key => $value){?>
               <li class="<?=$key?>"><a href="<?=$value["IBLOCK_SECTION_URL"];?>?manufacture=<?=$value["DISPLAY_VALUE"];?>"><?=$value["DISPLAY_VALUE"];?></a></li>
            <?}?>
            </ul>
        </div>
    <?foreach ($arResult['ITEMS_NEW'] as $key => $arItem) {
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
        $strMainID = $this->GetEditAreaId($arItem['ID']);?>
              <div>
                  <a <?if($arParams["ID"] == $arItem["ID"]):?>class="selected"<?endif;?> href="<?=$arItem['DETAIL_PAGE_URL'];?>"><?=$arItem['NAME'];?></a>
              </div>
    <?}?>
    </div>
</div>
<?
  //  r($arResult["arrSection"]);
//    [DISPLAY_PROPERTIES][MANUFCTURE][DISPLAY_VALUE]

}
?>