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

<div id="news-list" class="ww-area">
    <div class="text">
        <?$APPLICATION->IncludeFile(
            "/.inc/top-sertificat-text.php",
            array(),
            array(  "MODE"=>"html",
                "NAME" => "верхний текст",
                "TEMPLATE" => "standard_inc.php"
            )
        );?>
    </div>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<article class="news-item sertificat-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<figure>
        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" rel="img"  class="fancybox"><img
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/></a>
			<?else:?>
				<img
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					/>
			<?endif;?>
		<?endif?>
        </figure>
        <section>
            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                <span class="news-date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
            <?endif?>
            <header>
                <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                    <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
                    <?else:?>
                        <?echo $arItem["NAME"]?>
                    <?endif;?>
                <?endif;?>
            </header>
            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                <?echo $arItem["PREVIEW_TEXT"];?>
            <?endif;?>
            <div>
                <?if($arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]):?>
                <p class="price-area">
                    Стоимость: <?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"];?>
                </p>
                <?endif;?> 
                <p class="area-link"><a class="link various" alt="<?=$arItem['NAME']?>" href="#phone"><span>Заказать</span></a></p>
            </div>
		</section>
	</article>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
    <div class="text">
    <?$APPLICATION->IncludeFile(
        "/.inc/bottom-sertificat-text.php",
        array(),
        array(  "MODE"=>"html",
                "NAME" => "нижний текст",
                "TEMPLATE" => "standard_inc.php"
            )
    );?>
    </div>
</div>
