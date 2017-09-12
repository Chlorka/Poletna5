<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"])>0):?>
<div class="div-h6">Недавно просмотренные товары</div>
<div class="ww-catalog_slide">
		<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
		<?
		$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
		?>
		<article class="ww-catalog_item" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
			<aside class="ww-catalog_img">
				<header class="ww-catalog_name">
					<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">
						<div>
							<div>
								<?=($arElement["DISPLAY_PROPERTIES"]["SHORT_NAME"]["VALUE"] ? $arElement["DISPLAY_PROPERTIES"]["SHORT_NAME"]["VALUE"] : $arElement["NAME"]);?>
							</div>
						</div>
					</a>
					<?foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):
				//	r($arProperty);
					if($pid!='SHORT_NAME'):?>
						<span><?
							if(is_array($arProperty["DISPLAY_VALUE"]))
								echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
							else
								echo $arProperty["DISPLAY_VALUE"];?>
						</span>
					<?endif;?>	
					<?endforeach?>
				</header>
				<?if(is_array($arElement["PREVIEW_PICTURE"])):?>		
					<section><a class="ww-catalog_img-a" href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img <?if($arElement["PREVIEW_PICTURE"]["HEIGHT"]<110):?>style="margin-top: <?=(110-$arElement["PREVIEW_PICTURE"]["HEIGHT"])/2;?>px"<?endif;?>  border="0" src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arElement["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arElement["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a></section>
				<?elseif(is_array($arElement["DETAIL_PICTURE"])):?>
					<section><a  class="ww-catalog_img-a" href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img <?if($arElement["DETAIL_PICTURE"]["HEIGHT"]<110):?>style="margin-top: <?=(110-$arElement["DETAIL_PICTURE"]["HEIGHT"])/2;?>px"<?endif;?>  border="0" src="<?=$arElement["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arElement["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arElement["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a></section>
				<?else:?>
					<section><a class="ww-catalog_img-a" href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img border="0" src="<?=$this->GetFolder()?>/images/no_pic.jpg" width="75" height="75" alt="нет картинки :(" title="нет картинки :(" /></a></section>
				<?endif?>
			</aside>		
			<div class="ww-clear"></div>
		</article>
	<?endforeach;?>
</div>
<?endif;?>