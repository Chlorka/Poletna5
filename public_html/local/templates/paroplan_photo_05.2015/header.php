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

    <link  href="<?=SITE_TEMPLATE_PATH?>/js/fotorama.css" rel="stylesheet"> <!-- 3 KB -->

</head>
<body>
	<?$APPLICATION->ShowPanel();?>	
	<section id="ww-body">
<?/*?>
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
    <?*/?>        <nav id="top-menu">
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
