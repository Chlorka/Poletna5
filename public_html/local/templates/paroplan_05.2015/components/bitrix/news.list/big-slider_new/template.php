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

    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="ww-area">
            <div class="carousel-indicators-wrapper height100per">
                <div class="container height100per position-relative">
                    <ol class="carousel-indicators">
                        <?foreach($arResult["ITEMS"] as $key => $arItem):?>
                            <li class="<?if($key == 0):?>active<?endif;?>"" data-slide-to="<?=$key?>" data-target="#carousel"></li>
                        <?endforeach;?>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Картинки в карусельке -->
        <div class="carousel-inner">
            <?foreach($arResult["ITEMS"] as $key => $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="item <?if($key == 0):?>active<?endif;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="carousel-wrapper clearfix" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) center top no-repeat;">
                    <div class="container">
                        <p class="area-link">
<a class="link" href="<?=$arItem["DISPLAY_PROPERTIES"]["HREF"]["VALUE"];?>"><span>Узнать больше</span></a>
                        </p>
                    </div>
                </div>
            </div>

            <?endforeach;?>
        </div>
    </div>