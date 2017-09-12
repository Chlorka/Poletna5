<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
global $DB;
/** @global CUser $USER */
global $USER;
/** @global CMain $APPLICATION */
global $APPLICATION;

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["ID"] = intval($arParams["ID"]);
$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);

//$arParams["IBLOCK_ID"] = array("4","7");

$arParams["DEPTH_LEVEL"] = intval($arParams["DEPTH_LEVEL"]);
if($arParams["DEPTH_LEVEL"]<=0)
	$arParams["DEPTH_LEVEL"]=1;

$arResult["IBLOCKS"] = array();
$arResult["SECTIONS"] = array();
$arResult["ELEMENT_LINKS"] = array();

if($this->StartResultCache())
{
	if(!CModule::IncludeModule("iblock"))
	{
		$this->AbortResultCache();
	}
	else
	{
				
		$res = CIBlock::GetList(
		    Array(),
		    Array(
		        'TYPE'=>'content',
		        'ACTIVE'=>'Y'
		    ), true
		);
		while($ar_res = $res->Fetch())
		{
            if($ar_res['ID'] == 2)
			    $arResult["IBLOCKS"][$ar_res['ID']] = $ar_res;

		}
		
		foreach($arResult["IBLOCKS"] as $id=>$arr){
			$cnt_section = 0;
				$arFilter_cnt = Array('IBLOCK_ID'=>$id, 'ACTIVE'=>'Y');
				  $db_list_cnt = CIBlockSection::GetList(Array(), $arFilter_cnt, false, Array("ID"));
				  while($ar_result_cnt = $db_list_cnt->GetNext())
				  {
				    $cnt_section = $ar_result_cnt["ID"]; 
					//echo $ar_result_cnt["ID"].' -'.$id.'<br>' ;
				  }

				$arResult["SECTIONS"][] = array(
					"ID" => $id,
					"DEPTH_LEVEL" => 1,
					"~NAME" => $arr["NAME"],
					"~SECTION_PAGE_URL" => '/'.$arr["CODE"].'/',
					"SECTION_CNT" => $cnt_section,
				);
				$arResult["ELEMENT_LINKS"][$arr["ID"]] = array();
			
			
			$arFilter = array(
				"IBLOCK_ID"=>$id,
				"GLOBAL_ACTIVE"=>"Y",
				"IBLOCK_ACTIVE"=>"Y",
			//	"CNT_ACTIVE"=>"Y",
				"<="."DEPTH_LEVEL" => $arParams["DEPTH_LEVEL"],
			);
			$arOrder = array(
				"left_margin"=>"asc",
			);
	
			$rsSections = CIBlockSection::GetList($arOrder, $arFilter, true, array(
				"ID",
				"DEPTH_LEVEL",
				"NAME",
				"SECTION_PAGE_URL",
				"UF_NAME",
			));
		/*	if($arParams["IS_SEF"] !== "Y")
				$rsSections->SetUrlTemplates("", $arParams["SECTION_URL"]);
			else
				$rsSections->SetUrlTemplates("", $arParams["SEF_BASE_URL"].$arParams["SECTION_PAGE_URL"]);
			*/while($arSection = $rsSections->GetNext())
			{
				if(strlen($arSection["UF_NAME"])>1)
						$arSection["~NAME"]=$arSection["UF_NAME"];
	
				$arResult["SECTIONS"][] = array(
					"ID" => $arSection["ID"],
					"IBLOCK_ID" => $id,
					"DEPTH_LEVEL" => $arSection["DEPTH_LEVEL"]+1,
					"~NAME" => $arSection["~NAME"],
					"~SECTION_PAGE_URL" => $arSection["~SECTION_PAGE_URL"],
					"ELEMENT_CNT" => $arSection["ELEMENT_CNT"], 
				);
				$arResult["ELEMENT_LINKS"][$arSection["ID"]] = array();
			}
		}
		$this->EndResultCache();
	}
}
//r($arResult["SECTIONS"]);

//In "SEF" mode we'll try to parse URL and get ELEMENT_ID from it
if($arParams["IS_SEF"] === "Y")
{
	$engine = new CComponentEngine($this);
	if (CModule::IncludeModule('iblock'))
	{
		$engine->addGreedyPart("#SECTION_CODE_PATH#");
		$engine->setResolveCallback(array("CIBlockFindTools", "resolveComponentEngine"));
	}
	$componentPage = $engine->guessComponentPath(
		$arParams["SEF_BASE_URL"],
		array(
			"section" => $arParams["SECTION_PAGE_URL"],
			"detail" => $arParams["DETAIL_PAGE_URL"],
		),
		$arVariables
	);
	if($componentPage === "detail")
	{
		CComponentEngine::InitComponentVariables(
			$componentPage,
			array("SECTION_ID", "ELEMENT_ID"),
			array(
				"section" => array("SECTION_ID" => "SECTION_ID"),
				"detail" => array("SECTION_ID" => "SECTION_ID", "ELEMENT_ID" => "ELEMENT_ID"),
			),
			$arVariables
		);
		$arParams["ID"] = intval($arVariables["ELEMENT_ID"]);
	}
}

if(($arParams["ID"] > 0) && (intval($arVariables["SECTION_ID"]) <= 0) && CModule::IncludeModule("iblock"))
{

	$arSelect = array("ID", "IBLOCK_ID", "DETAIL_PAGE_URL", "IBLOCK_SECTION_ID");
	$arFilter = array(
		"ID" => $arParams["ID"],
		"ACTIVE" => "Y",
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	);
	$rsElements = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
	if(($arParams["IS_SEF"] === "Y") && (strlen($arParams["DETAIL_PAGE_URL"]) > 0))
		$rsElements->SetUrlTemplates($arParams["SEF_BASE_URL"].$arParams["DETAIL_PAGE_URL"]);
	while($arElement = $rsElements->GetNext())
	{
		$arResult["ELEMENT_LINKS"][$arElement["IBLOCK_SECTION_ID"]][] = $arElement["~DETAIL_PAGE_URL"];
	}
}

$aMenuLinksNew = array();
$menuIndex = 0;
$previousDepthLevel = 1;
foreach($arResult["SECTIONS"] as $arSection)
{
	//r($arSection);
	if ($menuIndex > 0)
		$aMenuLinksNew[$menuIndex - 1][3]["IS_PARENT"] = $arSection["DEPTH_LEVEL"] > $previousDepthLevel;
	$previousDepthLevel = $arSection["DEPTH_LEVEL"];

	$arResult["ELEMENT_LINKS"][$arSection["ID"]][] = urldecode($arSection["~SECTION_PAGE_URL"]);
	
	
	if($arSection["ELEMENT_CNT"]>0)
		$parent = 1;
	elseif($arSection["DEPTH_LEVEL"]==2 && $arSection["SECTION_CNT"]==0)
		$parent = false;
	elseif($arSection["SECTION_CNT"]==0)
		$parent = 1;
	else
		$parent = false;
		
		/*r($arSection["~NAME"]);
		r($parent);*/
	$aMenuLinksNew[$menuIndex++] = array(
		htmlspecialcharsbx($arSection["~NAME"]),
		$arSection["~SECTION_PAGE_URL"],
		$arResult["ELEMENT_LINKS"][$arSection["ID"]],
		array(
			"FROM_IBLOCK" => true,
			"IS_PARENT" => $parent,
			"DEPTH_LEVEL" => $arSection["DEPTH_LEVEL"],
			"SECTION_ID"=>  $arSection["ID"], 
			"ELEMENT_CNT"=> $arSection["ELEMENT_CNT"],
		),
	);
		//	r($arSection);
	if($arSection["ELEMENT_CNT"]>0) {

		$arFilter_el = Array(
		   "IBLOCK_ID"=>IntVal($arSection["IBLOCK_ID"]),
		   "SECTION_ID"=>$arSection["ID"],
		  "ACTIVE"=>"Y"
		   );
		$arSelect_el = Array("ID", "NAME", "DETAIL_PAGE_URL","PROPERTY_SHORT_NAME");
		$res_el = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter_el, false, false, $arSelect_el);

		while($ob = $res_el->GetNextElement()){ 
		 $arFields = $ob->GetFields();
		 	if($arFields["~PROPERTY_SHORT_NAME_VALUE"])
				$name = htmlspecialcharsbx($arFields["~PROPERTY_SHORT_NAME_VALUE"]);
			else
				$name = $arFields["NAME"];

		 	$aMenuLinksNew[$menuIndex++] = array(
					$name,
					$arFields["~DETAIL_PAGE_URL"],
					$arFields["~DETAIL_PAGE_URL"],
					array(
						"FROM_IBLOCK" => true,
						"IS_PARENT" => false,
						"DEPTH_LEVEL" => $arSection["DEPTH_LEVEL"]+1,
						"ELEMENT_ID"=>  $arFields["ID"], 
					),
				);
		}
		/*while($ar_fields = $res_el->GetNext())
		{
				$aMenuLinksNew[$menuIndex++] = array(
					htmlspecialcharsbx($ar_fields["~NAME"]),
					$ar_fields["~DETAIL_PAGE_URL"],
					$ar_fields["~DETAIL_PAGE_URL"],
					array(
						"FROM_IBLOCK" => true,
						"IS_PARENT" => false,
						"DEPTH_LEVEL" => $arSection["DEPTH_LEVEL"]+1,
						"ELEMENT_ID"=>  $ar_fields["ID"], 
					),
				);
		
		}*/

	}
	elseif($arSection["SECTION_CNT"]==0)
	{
		$arFilter_el = Array(
		   "IBLOCK_ID"=>IntVal($arSection["ID"]),
		  "ACTIVE"=>"Y"
		   );
		$arSelect_el = Array("ID", "NAME", "DETAIL_PAGE_URL","PROPERTY_SHORT_NAME");
		$res_el = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter_el, false, false, $arSelect_el);
		
		while($ob = $res_el->GetNextElement()){ 
		 $arFields = $ob->GetFields();
			if($arFields["~PROPERTY_SHORT_NAME_VALUE"])
				$name = htmlspecialcharsbx($arFields["~PROPERTY_SHORT_NAME_VALUE"]);
			else
				$name = $arFields["NAME"];
		 	$aMenuLinksNew[$menuIndex++] = array(
					$name,
					$arFields["~DETAIL_PAGE_URL"],
					$arFields["~DETAIL_PAGE_URL"],
					array(
						"FROM_IBLOCK" => true,
						"IS_PARENT" => false,
						"DEPTH_LEVEL" => 2,
						"ELEMENT_ID"=>  $arFields["ID"], 
					),
				);
		}
	}

}
//r($aMenuLinksNew);
return $aMenuLinksNew;
?>
