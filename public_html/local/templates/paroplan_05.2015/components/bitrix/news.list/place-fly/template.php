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
<div class="place-fly">
    <div class="ww-area">
        <p class="h1"><?=$arResult["NAME"];?></p>
        <aside class="iblock-img">
            <?foreach($arResult["ITEMS"] as $index => $arItem):?>
                <div class="fly-map_item map_item_<?=$index?> <?if($index == 0):?>select<?endif;?>" style="top: <?=$arItem["DISPLAY_PROPERTIES"]["Y_ray"]["VALUE"]?>px; left: <?=$arItem["DISPLAY_PROPERTIES"]["X_ray"]["VALUE"]?>px;">
                    <i data-id="<?=$arItem['ID']?>"></i>
                <img
                    src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                    width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                    height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                    alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                    title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                    />
                    <span>

                        <span><?=$arItem['NAME'];?></span>
                    </span>
                </div>
            <?endforeach;?>
            <img src="<?=$arResult["PICTURE_SRC"];?>" alt="<?=$arResult["NAME"];?>" title="<?=$arResult["NAME"];?>" >
        </aside>
        <section class="place-fly_list">
    <?foreach($arResult["ITEMS"] as $index => $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <article class="<?if($index == 0):?>show<?endif;?> fly<?=$arItem['ID']?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

            <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <p class="name"><span><span><?echo $arItem["NAME"]?></span></span></p>
                <?else:?>
                    <?echo $arItem["NAME"]?>
                <?endif;?>
            <?endif;?>


            <?if(strlen($arItem["DISPLAY_PROPERTIES"]["PLACE"]["VALUE"]) > 3):?>
                <p class="fly-prop"><?=$arItem["DISPLAY_PROPERTIES"]["PLACE"]["VALUE"];?></p>
            <?endif;?>

                <p class="fly-prop 
			<?if($arItem["DISPLAY_PROPERTIES"]["SEZON"]["VALUE_XML_ID"] == 'summer' || $arItem["DISPLAY_PROPERTIES"]["SEZON"]["VALUE_XML_ID"] == 'summer1'):?>summer<?endif;?>
            <?if($arItem["DISPLAY_PROPERTIES"]["SEZON"]["VALUE_XML_ID"] == 'winter' || $arItem["DISPLAY_PROPERTIES"]["SEZON"]["VALUE_XML_ID"] == 'winter1'):?>winter<?endif;?>

"><?=$arItem["DISPLAY_PROPERTIES"]["SEZON"]["VALUE"];?></p>
            
            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                <p class="pre-text"><?echo $arItem["PREVIEW_TEXT"];?></p>
            <?endif;?>

            <div class="fly-photos">
                <?if(count($arItem["MINI_PHOTO"])>1):?>
                    <a class="more"></a>
                    <?foreach($arItem["MINI_PHOTO"] as $id => $photoId):?>
                        <a href="<?=$arItem["DISPLAY_PROPERTIES"]["MORE_PHOTO"]["FILE_VALUE"][$id]["SRC"];?>" rel="photo<?=$arItem["ID"]?>" class="fancybox"><img src="<?=$photoId["SRC"]?>" ></a>
                    <?endforeach;?>
                <?endif;?>
            </div>
            <p class="area-link"><a href="<?echo $arItem["DETAIL_PAGE_URL"];?>" class="link"><span>Подробнее</span></a></p>
        </article>
    <?endforeach;?>
        </section>
    </div>
</div>
