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
{
?>

<div id="video-list" class="ww-area">
    <h3>Видео наших полетов</h3>
<?foreach($arResult["ITEMS"] as $index => $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="video-item <?if($index == 0):?>first<?endif;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <figure>
            <a href="#tube<?=$arItem["ID"]?>" class="various">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="326" height="312">
            </a>
            <div id="tube<?=$arItem["ID"]?>" style="display: none;">
            <?$APPLICATION->IncludeComponent(
	"bitrix:player", 
	".default", 
	array(
		"PATH" => $arItem["DISPLAY_PROPERTIES"]["VIDEO"]["FILE_VALUE"]["SRC"],
		"PROVIDER" => "",
		"WIDTH" => "800",
		"HEIGHT" => "600",
		"AUTOSTART" => "Y",
		"REPEAT" => "none",
		"VOLUME" => "90",
		"ADVANCED_MODE_SETTINGS" => "Y",
		"PLAYER_TYPE" => "auto",
		"USE_PLAYLIST" => "N",
		"STREAMER" => "",
		"PREVIEW" => $arItem["PREVIEW_PICTURE"]["SRC"],
		"FILE_TITLE" => $arItem["NAME"],
		"FILE_DURATION" => "",
		"FILE_AUTHOR" => "",
		"FILE_DATE" => "",
		"FILE_DESCRIPTION" => "",
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins",
		"SKIN" => "bluemetal.zip",
		"CONTROLBAR" => "bottom",
		"WMODE" => "transparent",
		"LOGO" => "",
		"LOGO_LINK" => "",
		"LOGO_POSITION" => "none",
		"WMODE_WMV" => "window",
		"SHOW_CONTROLS" => "N",
		"SHOW_DIGITS" => "Y",
		"CONTROLS_BGCOLOR" => "FFFFFF",
		"CONTROLS_COLOR" => "000000",
		"CONTROLS_OVER_COLOR" => "000000",
		"SCREEN_COLOR" => "000000",
		"MUTE" => "N",
		"PLUGINS" => array(
			0 => "",
			1 => "",
		),
		"ADDITIONAL_FLASHVARS" => "",
		"PLAYER_ID" => "",
		"BUFFER_LENGTH" => "10",
		"DOWNLOAD_LINK" => "",
		"DOWNLOAD_LINK_TARGET" => "_self",
		"ADDITIONAL_WMVVARS" => "",
		"ALLOW_SWF" => "N"
	),
	false
);?>
                </div>
        </figure>
        <section>
            <header>
                <?echo $arItem["NAME"]?>

            </header>
        </section>
    </div>
<?endforeach;?>
</div>
<?}?>