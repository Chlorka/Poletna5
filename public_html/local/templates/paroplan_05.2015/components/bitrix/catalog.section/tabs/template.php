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

<div id="tab-list" style="background-image: url(<?=$arResult['PICTURE']['SRC']?>);">
    <div class="ww-area">
    <section class="tab-block left">
        <?foreach($arResult["ITEMS"] as $index => $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <a href="javascript:void(0)" class="tab-link <?if($index == 0):?>select<?endif;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <p>
                <?echo $arItem["~NAME"]?>
                </p>
                <?if($arItem["PREVIEW_TEXT"]):?>
                    <?=$arItem["PREVIEW_TEXT"];?>
                <?endif;?>
            </a>
        <?endforeach;?>
    </section>
    <section class="tab-block right">
        <?foreach($arResult["ITEMS"] as $index => $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="tab-item <?if($index == 0):?>select<?endif;?> text">
                <?=$arItem["DETAIL_TEXT"];?>
            </div>
        <?endforeach;?>
    </section>
    </div>
</div>
<?}?>