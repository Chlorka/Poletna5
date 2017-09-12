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
<div id="big-slider">
    <div class="jcarousel-wrapper">
    <div class="jcarousel big-slider_carusel">
        <ul>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<li id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) center top no-repeat;">
        <div class="ww-area">
		    <p class="name"><?echo $arItem["~NAME"]?></p>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<p class="text"><?echo $arItem["PREVIEW_TEXT"];?></p>
		<?endif;?>
            <div class="text_det">
                <?echo $arItem["DETAIL_TEXT"];?>
                <p class="area-link">
                    <a class="link" href="<?=$arItem["DISPLAY_PROPERTIES"]["HREF"]["VALUE"];?>"><span>Узнать больше</span></a>
                </p>
            </div>
        </div>
	</li>
<?endforeach;?>
    </ul>
</div>
        <div class="ww-area">
            <p class="jcarousel-pagination">
            </p>
        </div>
</div>
<div class="slider_inc">
    <div class="ww-area">
        <?$APPLICATION->IncludeFile("/.inc/slider_inc.php",
            Array(),
            Array(
                "MODE"      => "html",
                "NAME"      => "Полеты ОТ и ДО",
                "TEMPLATE"  => "standard_inc.php"
            ));?>
    </div>
</div>
</div>
