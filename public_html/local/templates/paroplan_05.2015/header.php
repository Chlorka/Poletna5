<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!doctype html>
<head>
	<meta charset="<?=SITE_CHARSET?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?=SITE_TEMPLATE_PATH?>/js/libs/jquery-latest.min.js"><\/script>')</script>
	<title><?$APPLICATION->ShowTitle()?> - Клуб «+5»</title>
    <?$APPLICATION->ShowHead()?>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <?/*?>  <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/ya_map.js" type="text/javascript"></script>
    <?*/?>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/fancybox2/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/fancybox2/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />

</head>
<body>
	<?$APPLICATION->ShowPanel();?>
    <? preg_match_all('/([A-Za-z0-9_]+)/', $APPLICATION->GetCurDir(), $catalog);?>
	<section id="ww-body">
			<header id="ww-header">
                <section class="ww-area">
					<a class="logo" href="/" title="">
                        <?$APPLICATION->IncludeFile(
                            "/.inc/logo.php",
                            array(),
                            array("MODE"=>"html")
                        );?>
                    </a>
					<div class="inc-text">
					<?$APPLICATION->IncludeFile(
				        "/.inc/adress.php",
				        array(),
				        array("MODE"=>"html")
				    );?>
				    </div>
                    <div class="inc-phone">
                        <?$APPLICATION->IncludeFile(
                            "/.inc/phone.php",
                            array(),
                            array("MODE"=>"html")
                        );?>
                    </div>
                    <div class="inc-buttom">
					<?$APPLICATION->IncludeFile(
				        "/.inc/buttom.php",
				        array(),
				        array("MODE"=>"html")
				    );?>
				    </div>
                </section>
			</header>
            <nav id="top-menu">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "top-miltilevel", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
		"MENU_THEME" => "site"
	),
	false
);?>
            </nav>
<?if($catalog[0][0] == 'snaryazhenie'):?>
    <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_multi", Array(
	"ROOT_MENU_TYPE" => "catalog",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "catalog",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
		"MENU_THEME" => "site"
	),
	false
);?>
<?endif;?>
                <?if($APPLICATION->GetCurPage() != "/" ):?>
    <div class="ww-area">
    <?$APPLICATION->ShowProperty("COMPONENT.MANUFACTURE");?>
    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
	"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
	),
	false
);?>
                        <h1><?=$APPLICATION->ShowTitle(false)?></h1>
</div>                
<?endif;?>