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

if (!empty($arResult['ITEMS'])) {
    ?>
    <div class="back-main">
    <a href="javascript:history.go(-1)" class="back">����� �� �������<br>
        �� ����������<br>
        �������� �����</a>
    <h1>����</h1>
    <div id="fotorama" class="fotorama"
      <?/*?>   data-autoplay="true"
         data-transition="crossfade"
         data-nav="thumbs"
         data-navposition="bottom"
         data-fit="cover"
<?*/?>
        >
        <?
        foreach ($arResult['ITEMS'] as $key => $arItem) {
            ?>
            <a href="<?= $arItem["DETAIL_MINI"]["SRC"] ?>"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                                                   width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                                                                   height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"></a>
        <?
        }?>
    </div>
            <a href="javascript:void(0)" class="hidden">��������<br>���������</a>
</div>
<?
}?>