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
?>
<div class="place-fly-list" id="place-fly-list">
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<article class="item" data-name="<?=$arItem["NAME"];?>"  data-lan="<?=$arItem["DISPLAY_PROPERTIES"]["lan"]["VALUE"];?>" data-ran="<?=$arItem["DISPLAY_PROPERTIES"]["ran"]["VALUE"];?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<a class="<?if($arParams["ELEMENT_ID"] == $arItem["ID"]):?>select<?endif;?>" data-index="<?=$key;?>" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						src="<?=$arItem["MINI_PHOTO"]["SRC"]?>"
						width="<?=$arItem["MINI_PHOTO"]["WIDTH"]?>"
						height="<?=$arItem["MINI_PHOTO"]["HEIGHT"]?>"
						alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>"
						title="<?=$arItem["DETAIL_PICTURE"]["TITLE"]?>"
						/>
                    <span>
                        <?if(strlen($arItem["DISPLAY_PROPERTIES"]["LONG_NAME"]["VALUE"]) > 0):?>
                            <?=$arItem["DISPLAY_PROPERTIES"]["LONG_NAME"]["VALUE"];?>
                        <?else:?>
                            <?=$arItem["NAME"]?>
                        <?endif;?>
                    </span>
                </a>
    </article>
<?endforeach;?>
</div>