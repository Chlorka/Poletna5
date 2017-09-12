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
<div class="main-polety">
    <div class="ww-area">
        <p class="h1"><?=$arResult["DESCRIPTION"];?></p>
        <div class="main-polety-list">
            <div class="jcarousel">
            <ul>
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                            <img class="prev"
                            src="<?=$arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"]["SRC"]?>"
                            width="<?=$arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"]["WIDTH"]?>"
                            height="<?=$arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"]["HEIGHT"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            />
                            <img class="detail"
                                 src="<?=$arItem["DISPLAY_PROPERTIES"]["COLOR"]["FILE_VALUE"]["SRC"]?>"
                                 width="<?=$arItem["DISPLAY_PROPERTIES"]["COLOR"]["FILE_VALUE"]["WIDTH"]?>"
                                 height="<?=$arItem["DISPLAY_PROPERTIES"]["COLOR"]["FILE_VALUE"]["HEIGHT"]?>"
                                 alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>"
                                 title="<?=$arItem["DETAIL_PICTURE"]["TITLE"]?>"
                                />
                        <header>
                            <span><?echo $arItem["NAME"]?></span>
                            <i></i>
                        </header>
                        </a>
                    </li>
                <?endforeach;?>
            </ul>
            </div>
            <a class="jcarousel-control-prev" href="#" data-jcarouselcontrol="true">‹</a>
            <a class="jcarousel-control-next" href="#" data-jcarouselcontrol="true">›</a>
        </div>
    </div>
</div>
