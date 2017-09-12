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
<div class="main-who">
        <div class="main-who-list">
            <div class="jcarousel main-who-jcarousel">
            <ul>
                <?foreach($arResult["ITEMS"] as $index => $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <li data-id="<?=$index;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <figure>
                            <img
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                            height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            />
                        </figure>
                        <header>
                            <a href="javascript:void(0)"><?=$arItem["DISPLAY_PROPERTIES"]["NAME"]["VALUE"];?></a>
                            <p class="pro"><?=$arItem["DISPLAY_PROPERTIES"]["PRO"]["VALUE"];?></p>
                        </header>
                    </li>
                <?endforeach;?>
            </ul>
            </div>
            <a class="jcarousel-control-prev" href="#" data-jcarouselcontrol="true">‹</a>
            <a class="jcarousel-control-next" href="#" data-jcarouselcontrol="true">›</a>
        </div>
    <div id="who-detail">
        <?foreach($arResult["ITEMS"] as $id => $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <article id="index<?=$id;?>">
               <?/*?> <figure>
                    <?if($arItem["PREVIEW_PICTURE"]["ID"] > 0 ):?>
                    <img
                        src="<?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["FILE_VALUE"]["SRC"];?>"
                        width="<?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["FILE_VALUE"]["WIDTH"]?>"
                        height="<?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["FILE_VALUE"]["HEIGHT"]?>"
                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        />
                   <p><?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["FILE_VALUE"]["DESCRIPTION"];?></p>
                    <?endif;?>
                </figure>
<?*/?>
                <header>
                    <p class="name"><?=$arItem["NAME"]?></p>
                    <p class="text"><?=$arItem["PREVIEW_TEXT"];?></p>
                </header>
            </article>
        <?endforeach;?>
    </div>
</div>
