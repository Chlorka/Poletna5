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
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <article class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
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
                    <p class="area-link"><a class="link" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><span>Подробнее</span></a></p>
                </section>
            </article>
        <?endforeach;?>
    </div>

<?
$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?><div class="<? echo $arCurView['CONT']; ?>"><?/*
if ('Y' == $arParams['SHOW_PARENT_NAME'] && 0 < $arResult['SECTION']['ID'])
{
	$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

	?><h1
		class="<? echo $arCurView['TITLE']; ?>"
		id="<? echo $this->GetEditAreaId($arResult['SECTION']['ID']); ?>"
	><a href="<? echo $arResult['SECTION']['SECTION_PAGE_URL']; ?>"><?
		echo (
			isset($arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]) && $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"] != ""
			? $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]
			: $arResult['SECTION']['NAME']
		);
	?></a></h1><?
    }*/?>
    <?if($arResult["SECTIONS_COUNT"] > 0):?>
        <div class="text">
            <?$APPLICATION->IncludeFile(
                "/.inc/catalog-main_top.php",
                array(),
                array("MODE"=>"html",
                    "NAME"      => "текст",
                    "TEMPLATE"  => "standard_inc.php"
                )
            );?>
        </div>
    <?endif;?>
<?//r($arResult);?>
<?if (0 < $arResult["SECTIONS_COUNT"])
{
?>
    <?//r($arResult['SECTIONS']);?>
<div class="catalog-main_list">
        <ul>
            <?switch ($arParams['VIEW_MODE'])
                {
                case 'TILE':
                    foreach ($arResult['SECTIONS'] as &$arSection)
                    {
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                    if (false === $arSection['PICTURE'])
                        $arSection['PICTURE'] = array(
                            'SRC' => $arCurView['EMPTY_IMG'],
                            'ALT' => (
                            '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                                ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                                : $arSection["NAME"]
                            ),
                            'TITLE' => (
                            '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                                ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                                : $arSection["NAME"]
                            )
                        );?>
                <?if ($arSection['PICTURE']['ID'] > 0):?>
                <li>

                <?if(strlen($arSection['UF_ALT_NAME'])>0):?>
                <div class="hover">
                    <div class="hover_head"><? echo $arSection['UF_ALT_NAME']; ?></div>
                    <div class="hover_text"><?/*=$arSection["DESCRIPTION"]*/?></div>
                    <?if(strlen($arSection["UF_HREF1"]) > 1){?>
                        <p class="area-link"><a class="link" href="<?=$arSection["UF_HREF1"]?>"><span><?=$arSection["UF_HREF_NAME_1"];?></span></a></p>
                    <?}?>
                    <?if(strlen($arSection["UF_HREF2"]) > 1){?>
                        <p class="area-link"><a class="link" href="<?=$arSection["UF_HREF2"]?>"><span><?=$arSection["UF_HREF_NAME_2"];?></span></a></p>
                    <?}?>
                    <?if(strlen($arSection["UF_HREF3"]) > 1){?>
                        <p class="area-link"><a class="link" href="<?=$arSection["UF_HREF3"]?>"><span><?=$arSection["UF_HREF_NAME_3"];?></span></a></p>
                    <?}?>
                </div>
                <?endif;?>
                <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>">
                    <img class="prev"
                         src="<? echo $arSection['PICTURE']['SRC']; ?>"
                         width="<? echo $arSection['PICTURE']["WIDTH"]?>"
                         height="<? echo $arSection['PICTURE']["HEIGHT"]?>"
                         alt="<? echo $arSection['NAME']?>"
                         title="<? echo $arSection['NAME']?>"
                        />
                    <img class="detail"
                         src="<?=CFile::GetPath($arSection['DETAIL_PICTURE']); ?>"
                         width="<? echo $arSection['PICTURE']["WIDTH"]?>"
                         height="<? echo $arSection['PICTURE']["HEIGHT"]?>"
                         alt="<? echo $arSection['NAME']?>"
                         title="<? echo $arSection['NAME']?>"
                        />

                    <header>
                        <span>
                        <?if(strlen($arSection['UF_ALT_NAME'])>0):?>
                            <? echo $arSection['UF_ALT_NAME']; ?>
                        <?else:?>
                            <? echo $arSection['NAME']; ?>
                        <?endif;?>
                        </span>
                        <i></i>
                    </header>
                </a>


<?/*?>
                    <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>">
                        <img class="prev"
                             src="<? echo $arSection['PICTURE']['SRC']; ?>"
                             width="<? echo $arSection['PICTURE']["WIDTH"]?>"
                             height="<? echo $arSection['PICTURE']["HEIGHT"]?>"
                             alt="<? echo $arSection['NAME']?>"
                             title="<? echo $arSection['NAME']?>"
                            />
                        <img class="detail"
                             src="<?=CFile::GetPath($arSection['DETAIL_PICTURE']); ?>"
                             width="<? echo $arSection['PICTURE']["WIDTH"]?>"
                             height="<? echo $arSection['PICTURE']["HEIGHT"]?>"
                             alt="<? echo $arSection['NAME']?>"
                             title="<? echo $arSection['NAME']?>"
                            />

                        <header>
                            <span><? echo $arSection['NAME']; ?></span>
                            <i></i>
                        </header>
                    </a>
    <?*/?>       </li>
            <?endif;?>
            <?
            }
            unset($arSection);
            break;
            }?>
        </ul>
    </div>
    <div class="text">
    <?$APPLICATION->IncludeFile(
        "/.inc/catalog-main_bottom.php",
        array(),
        array("MODE"=>"html")
    );?>
    </div>
<?}?>
</div>