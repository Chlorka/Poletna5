<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="ww-area">
<ul id="horizontal-multilevel-menu">
    <li class="inc_main"><a href="/" alt="�������" title="�������">�������</a></li>
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
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
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

    <?$APPLICATION->IncludeComponent("bitrix:menu", "left", Array(
	"ROOT_MENU_TYPE" => "left",	// ��� ���� ��� ������� ������
		"MENU_CACHE_TYPE" => "N",	// ��� �����������
		"MENU_CACHE_TIME" => "3600",	// ����� ����������� (���.)
		"MENU_CACHE_USE_GROUPS" => "N",	// ��������� ����� �������
		"MENU_CACHE_GET_VARS" => "",	// �������� ���������� �������
		"MAX_LEVEL" => "1",	// ������� ����������� ����
		"CHILD_MENU_TYPE" => "left",	// ��� ���� ��� ��������� �������
		"USE_EXT" => "N",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
		"DELAY" => "N",	// ����������� ���������� ������� ����
		"ALLOW_MULTI_SELECT" => "Y",	// ��������� ��������� �������� ������� ������������
		"MENU_THEME" => "site"
	),
	false
);?>
<?endif?>