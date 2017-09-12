<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

if(CModule::IncludeModule("iblock"))
   {
		if (!empty($arResult['ITEMS']))
		{
			foreach($arResult["ITEMS"] as $cell=>&$arElement):
				$properties = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$arElement["IBLOCK_ID"]));
				while ($prop_fields = $properties->GetNext())
				{
					if($prop_fields["SORT"]<=100) {
						$VALUES = array();
					    $res = CIBlockElement::GetProperty($arElement["IBLOCK_ID"], $arElement["ID"], "sort", "asc", array("CODE" => $prop_fields["CODE"]));
					    while ($ob = $res->GetNext())
					    {
					    	$ob["DISPLAY_VALUE"] = $ob["VALUE"];
					      	$arElement["DISPLAY_PROPERTIES"][$prop_fields["CODE"]] = $ob;
							//r($ob);
					    	//$arElement["DISPLAY_PROPERTIES"][$prop_fields["CODE"]]["VALUE"] = $ob['VALUE'];
						}
					}
				}
			endforeach;
			unset($arElement);
		}
   }
?>