<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<?if ($arResult["isFormErrors"] == "Y"):?><?//=$arResult["FORM_ERRORS_TEXT"];?>
	<p style="color:red; font-size: 11px; text-align: center; margin: 7px 0 0 0;">Не заполнены обязательные поля</p>
<?endif;?>
<div style="display: <?if($_GET["formresult"]=='addok'):?>block<?else:?>none<?endif?>;" class="pm-show_block"> 
<div class="pm-phone_order">
<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
<?=$arResult["FORM_HEADER"]?>
<?
if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y")
{
?>
	<?
	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
	{
		if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
		{
			echo $arQuestion["HTML_CODE"];
		}
		else
		{
	?>
				<?/*if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
				<span class="error-fld" title="<?=$arResult["FORM_ERRORS"][$FIELD_SID]?>"></span>
				<?endif;?>
				<?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?>
				<?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""*/?>
	<p>
		<?if($FIELD_SID=='NAME'):?>
			<input type="text" size="0" value="" name="form_text_1" placeholder="Имя" class="inputtext">
		<?elseif($FIELD_SID=='PHONE_1'):?>
			<input type="text" size="0" value="" name="form_text_2" class="inputtext" placeholder="Телефон">
		<?else:?>
			<?=$arQuestion["HTML_CODE"]?>
		<?endif;?>
	</p>
	
	<?
		}
	} //endwhile
	?>
	<?
	if($arResult["isUseCaptcha"] == "Y")
	{
	?>
			
				<b><?=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?></b>
			<input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" /><img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="180" height="40" />
			<?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?><?=$arResult["REQUIRED_SIGN"];?>
			<input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" />
	<?
	} // isUseCaptcha
	?>
			<p>	<input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?>
                    type="submit" name="web_form_submit"
                    value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
				<?if ($arResult["F_RIGHT"] >= 15):?>
				&nbsp;<input type="hidden" name="web_form_apply" value="Y" />
				<?endif;?>
			</p>
<?=$arResult["FORM_FOOTER"]?>
<?
} //endif (isFormNote)
}
?>
</div></div>
