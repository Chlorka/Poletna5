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
$this->setFrameMode(true);?>

<div class="face-block">
    <div class="ww-area">
        <p class="h5">Ќаша команда</p>

            <div class="left">
                <?foreach($arResult["ITEMS"] as $id => $arItem):?>
                    <article id="index<?=$id;?>" class="face_detail">
                        <figure>
                            <img
                                src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"
                                width="<?=$arItem["DETAIL_PICTURE"]["WIDTH"]?>"
                                height="<?=$arItem["DETAIL_PICTURE"]["HEIGHT"]?>"
                                alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>"
                                title="<?=$arItem["DETAIL_PICTURE"]["TITLE"]?>"
                                />
                        </figure>
                        <?if(count($arItem["MINI_PHOTO"])>1):?>
                            <div class="photo">
                                <?foreach($arItem["MINI_PHOTO"] as $id => $photoId):?>
                                    <a href="<?=$arItem["DISPLAY_PROPERTIES"]["MORE_PHOTO"]["FILE_VALUE"][$id]["SRC"];?>" rel="photo<?=$arItem["ID"]?>" class="fancybox"><img src="<?=$photoId["SRC"]?>" ></a>
                                <?endforeach;?>
                            </div>
                        <?endif;?>
                    </article>
                <?endforeach;?>
            </div>

            <div class="right">
                <div class="face-block-list">
                    <div class="jcarousel jcarousel-face face-block-jcarousel">
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
					<??>
                    <a class="jcarousel-control-prev" href="#" data-jcarouselcontrol="true">Л</a>
                    <a class="jcarousel-control-next" href="#" data-jcarouselcontrol="true">Ы</a>
<??>
                </div>


                <?foreach($arResult["ITEMS"] as $id => $arItem):?>
                    <div class="prize-area" id="prize<?=$id;?>">
                        <img
                            src="<?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["FILE_VALUE"]["SRC"];?>"
                            width="<?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["FILE_VALUE"]["WIDTH"]?>"
                            height="<?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["FILE_VALUE"]["HEIGHT"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            />
                        <p><?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["FILE_VALUE"]["DESCRIPTION"];?></p>
                       <?/*?> <div><?=$arItem["DISPLAY_PROPERTIES"]["REGALII"]["~VALUE"]["TEXT"];?></div><?*/?>
                    </div>
                    <div class="text-area" id="prizeText<?=$id;?>">
                        <p class="name"><span><span><?=$arItem["NAME"]?></span></span></p>
                        <p class="pro"><?=$arItem["DISPLAY_PROPERTIES"]["PRO"]["VALUE"];?></p>
                        <p class="text"><?=$arItem["DETAIL_TEXT"];?></p>
                    </div>
                <?endforeach;?>
            </div>

        </div>
    </div>
</div>
