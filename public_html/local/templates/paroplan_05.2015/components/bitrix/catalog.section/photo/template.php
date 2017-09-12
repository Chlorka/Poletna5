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
    <div id="photos">
        <?
        foreach ($arResult['ITEMS'] as $key => $arItem)
        {?>
        <a href="<?=$arItem["DETAIL_PICTURE"]["SRC"];?>" rel="photo" class="fancybox <?if($key > 5):?>hidden<?endif;?>"><img src="<?=$arItem["MINI_PHOTO"]["SRC"]?>" ></a>
        <?
        }?>
        <i></i>
    </div>
<?
}
?>