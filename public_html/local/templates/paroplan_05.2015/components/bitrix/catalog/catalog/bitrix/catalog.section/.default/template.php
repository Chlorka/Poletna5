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
//r($arResult);
if (!empty($arResult['ITEMS']))
{?>
    <?/*if($arResult['ID'] == '13'):*/?>
        <?if(count($arResult["arPropList"])>1):?>
            <div class="List-prop">
                <a href="javascript:void(0)" data-id="all" <?if( !isset($_GET["manufacture"]) ):?>class="select"<?endif;?> >Все</a>
                    <?foreach($arResult["arPropList"] as $key => $value):?>
                            <a href="javascript:void(0)" <?if($_GET["manufacture"] == $value['VALUE']):?>class="select"<?endif;?> data-id="<?=$value['VALUE'];?>"><img src="/images/<?=$value["VALUE_XML_ID"].'.jpg';?>"><?=$value['VALUE'];?></a>
                    <?endforeach;?>
            </div>
        <?//r($arResult["arPropList"]);?>
        <?endif;?>
    <?/*endif;*/?>
    <div id="news-list" class="section-list">

        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <article <?if(strlen($_GET["manufacture"])>0 && $_GET["manufacture"] != $arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["VALUE"]):?>style="display: none;"<?endif;?>
                    data-man="<?=$arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["VALUE"];?>"
                    class="news-item"
                    id="<?=$this->GetEditAreaId($arItem['ID']);?>"
            >
                <figure>
                    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                        <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
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
                    <header>
                        <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                            <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
                            <?else:?>
                                <?echo $arItem["NAME"]?>
                            <?endif;?>
                        <?endif;?>
                        <div class="prop">
                            <?if($arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["ID"]):?>
                                <img alt="<?=$arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["VALUE"]?>" title="<?=$arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["VALUE"]?>" src="/images/<?=$arItem["DISPLAY_PROPERTIES"]["MANUFCTURE"]["VALUE_XML_ID"].'.jpg';?>">
                            <?endif;?>
                            <?if($arItem["DISPLAY_PROPERTIES"]["TYPE"]["VALUE"]):?>
                                <span class="p-block green"><?=$arItem["DISPLAY_PROPERTIES"]["TYPE"]["VALUE"]?></span>
                            <?endif;?>
                            <?if($arItem["DISPLAY_PROPERTIES"]["LVL"]["VALUE"]):?>
                                    <span class="p-block blue"><?=$arItem["DISPLAY_PROPERTIES"]["LVL"]["VALUE"]?></span>
                            <?endif;?>
                            <?if($arItem["DISPLAY_PROPERTIES"]["MOTOR"]["VALUE"]):?>
                                        <span class="p-block purpel"><?=$arItem["DISPLAY_PROPERTIES"]["MOTOR"]["VALUE"]?></span>
                            <?endif;?>
                        </div>
                    </header>
                    <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                        <?echo $arItem["PREVIEW_TEXT"];?>
                    <?endif;?>
                    <p class="area-link"><a class="link" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><span>Подробнее</span></a></p>
                </section>
            </article>
        <?endforeach;?>
       <div class="text" style="padding: 0 10px;">
            <?=$arResult['DESCRIPTION'];?>
        </div>
    </div>
<?
}
?>