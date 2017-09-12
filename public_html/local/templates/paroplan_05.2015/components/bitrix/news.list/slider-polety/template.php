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

<p class="h1">œ¿–¿œÀ¿Õ€: ¬—≈ Œ“ » ƒŒ...</p>
<div class="slider-inc_arena">
    <ul>
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <li>
                <div class="hover">
                    <div class="hover_head"><?echo $arItem["~NAME"]?></div>
                    <div class="hover_text"><?=$arItem["PREVIEW_TEXT"]?></div>
                    <p class="area-link"><a class="link" href="<?=$arItem["DISPLAY_PROPERTIES"]["HREF1"]["VALUE"]?>"><span><?=$arItem["DISPLAY_PROPERTIES"]["HREF1"]["DESCRIPTION"];?></span></a></p>
                    <p class="area-link"><a class="link" href="<?=$arItem["DISPLAY_PROPERTIES"]["HREF2"]["VALUE"]?>"><span><?=$arItem["DISPLAY_PROPERTIES"]["HREF2"]["DESCRIPTION"];?></span></a></p>
                    <p class="area-link"><a class="link" href="<?=$arItem["DISPLAY_PROPERTIES"]["HREF3"]["VALUE"]?>"><span><?=$arItem["DISPLAY_PROPERTIES"]["HREF3"]["DESCRIPTION"];?></span></a></p>
                </div>
                <a href="<?=$arItem["DISPLAY_PROPERTIES"]["HREF1"]["VALUE"]?>">
                <img class="prev"
                     src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                     width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                     height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                    />

                <header>
                    <span><?echo $arItem["~NAME"]?></span>
                    <i></i>
                </header>
                </a>
        </li>
        <?endforeach;?>
    </ul>
</div>