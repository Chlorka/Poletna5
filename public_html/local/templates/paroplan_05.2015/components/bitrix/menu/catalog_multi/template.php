<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<?global $APPLICATION;
    $dir = $APPLICATION->GetCurDir();?>
<div id="catalog-menu">
    <div class="ww-area">
        <ul id="catalog-multilevel-menu">

        <?
        $previousLevel = 0;
        foreach($arResult as $arItem):?>

            <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
                <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
            <?endif?>

            <?if ($arItem["IS_PARENT"]):?>

                <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                    <li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
                        <ul>
                <?else:?>
                    <li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
                        <ul>
                <?endif?>

            <?else:?>

                <?if ($arItem["PERMISSION"] > "D"):?>

                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                        <li <?if ($arItem["SELECTED"]):?>class="li-selected"<?endif;?>><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
                            <?if(count($arItem["PARAMS"]["ELEMENT_LIST"])>0):?>
                                <div id="sec<?=$id;?>"  class="pm-menu2_area<?if(count($arItem["PARAMS"]["ELEMENT_LIST_COUNT"])==1):?> pm-right_border<?endif;?>">
                                    <?foreach($arItem["PARAMS"]["ELEMENT_LIST"] as $Element):?>
                                        <div <?if($dir == $Element["DETAIL_PAGE_URL"]):?> class="selected"<?endif;?>>
                                         <?/*?>   <a class="pm-menu2_img" href="<?=$Element["DETAIL_PAGE_URL"]?>"><img width="<?=$Element["PREVIEW_PICTURE"]["width"];?>" height="<?=$Element["PREVIEW_PICTURE"]["height"];?>" src="<?=$Element["PREVIEW_PICTURE"]["src"];?>"></a><?*/?>
                                            <a href="<?=$Element["DETAIL_PAGE_URL"]?>"><?=$Element["NAME"]?></a>
                                        </div>
                                    <?endforeach;?>
                                </div>
                            <?endif;?>
                        </li>
                    <?else:?>
                        <li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                    <?endif?>

                <?else:?>

                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                        <li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a>
                        </li>
                    <?else:?>
                        <li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                    <?endif?>

                <?endif?>

            <?endif?>

            <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

        <?endforeach?>

        <?if ($previousLevel > 1)://close last item tags?>
            <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
        <?endif?>

        </ul>
        <div class="menu-clear-left"></div>
    </div>
</div>
<?endif?>