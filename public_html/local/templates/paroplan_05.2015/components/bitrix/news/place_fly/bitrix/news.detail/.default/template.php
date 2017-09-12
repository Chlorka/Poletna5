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
<div class="fly-detail">
    <h2><?=$arResult["DISPLAY_PROPERTIES"]["LONG_NAME"]["VALUE"]?></h2>
	<?/*if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h2><?=$arResult["NAME"]?></h2>
	<?endif;*/?>
    <div class="text">
        <p class="place"><?=$arResult["DISPLAY_PROPERTIES"]["PLACE"]["VALUE"];?>&nbsp;</p>
        <div class="text_detail">
            <?if(strlen($arResult["DETAIL_TEXT"])>0):?>
                <?echo $arResult["DETAIL_TEXT"];?>
            <?else:?>
                <?echo $arResult["PREVIEW_TEXT"];?>
            <?endif?>
        </div>
    </div>
    <div class="photo">
        <p class="place
            <?if($arResult["DISPLAY_PROPERTIES"]["SEZON"]["VALUE_XML_ID"] == 'summer' || $arResult["DISPLAY_PROPERTIES"]["SEZON"]["VALUE_XML_ID"] == 'summer1'):?>summer<?endif;?>
            <?if($arResult["DISPLAY_PROPERTIES"]["SEZON"]["VALUE_XML_ID"] == 'winter' || $arResult["DISPLAY_PROPERTIES"]["SEZON"]["VALUE_XML_ID"] == 'winter1'):?>winter<?endif;?>
        ">
            <?if(strlen($arResult["DISPLAY_PROPERTIES"]["SEZON"]["VALUE"])>0):?>
                <?=$arResult["DISPLAY_PROPERTIES"]["SEZON"]["NAME"];?>:&nbsp;<?=$arResult["DISPLAY_PROPERTIES"]["SEZON"]["VALUE"];?>
            <?else:?>
                &nbsp;
            <?endif;?>
        </p>
        <div class="first_img">
            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>">
        </div>
        <?if(count($arResult["MINI_PHOTO"]) > 0):?>
            <div class="more-photo">
                <?foreach($arResult["MINI_PHOTO"] as $key => $photo):?>
                    <a class="fancybox" rel="photo" href="<?=CFile::GetPath($arResult["DISPLAY_PROPERTIES"]["MORE_PHOTO"]["VALUE"][$key]);?>"><img src="<?=$photo['SRC']?>" width="<?=$photo['WIDTH']?>" height="<?=$photo['HEIGHT']?>"></a>
                <?endforeach;?>
                <i></i>
            </div>
        <?endif;?>
        <?/*foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

            <?=$arProperty["NAME"]?>:&nbsp;
            <?if(is_array($arProperty["DISPLAY_VALUE"])):?>
                <?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
            <?else:?>
                <?=$arProperty["DISPLAY_VALUE"];?>
            <?endif?>
	    <?endforeach;*/?>
    </div>
</div>