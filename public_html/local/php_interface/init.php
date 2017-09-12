<?

function r($arr)
{
	if ($GLOBALS["USER"]->GetLogin() == 'weewaa') {
		echo '<pre>' . print_r($arr, true) . '</pre>';
	}
}

function rr($arr)
{
	echo '<pre>' . print_r($arr, true) . '</pre>';
}


AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("PmAddClass", "OnAfterIBlockElementAddHandler"));

class PmAddClass
{
    function OnAfterIBlockElementAddHandler(&$arFields)
    {
        if($arFields["ID"]>0 && $arFields["IBLOCK_ID"] == '17')
        {
            $_SESSION["ELEM_POLE"]=array();

            if(CModule::IncludeModule("iblock"))
            {
                $arFilter = Array(
                    "IBLOCK_ID" => $arFields["IBLOCK_ID"],
                    "ID" => $arFields["ID"]
                );
                $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter,
                    Array(
                        "ID",
                        "NAME",
                        "PREVIEW_TEXT",
                        "PROPERTY_FIO",
                        "PROPERTY_PHONE",
                        "PROPERTY_MAIL",
                        "PROPERTY_ADRESS",
                        "PROPERTY_PAY",
                        "PROPERTY_DELIVER",
                        "PROPERTY_VIDEO"
                    ));
                while($ar_res = $res->GetNext()) {

                    $_SESSION["ELEM_POLE_NEW"]=$ar_res;

                    $element_name = $ar_res['NAME'];
                    $element_p_text = $ar_res['PREVIEW_TEXT'];

                    $res_iblock = CIBlock::GetByID($arFields["IBLOCK_ID"]);
                    if ($ar_iblock = $res_iblock->GetNext()) {
                        $ib_name = $ar_iblock['NAME'];
                    }

                    if($arFields["IBLOCK_ID"] == 17) {
                        $evt = "ORDER_ADD";
                        $_SESSION["ELEM_POLE"]=$arFields;
                    }

                    $arEventFields = array(
                        "ID" => $arFields["ID"],
                        "NAME" => $element_name,
                        "IBLOCK_NAME" => $ib_name,

                        "FIO" => $ar_res["PROPERTY_FIO_VALUE"],
                        "ADRESS" => $ar_res["PROPERTY_ADRESS_VALUE"],

                        "MAIL" => $ar_res["PROPERTY_MAIL_VALUE"],
                        "PHONE" => $ar_res["PROPERTY_PHONE_VALUE"],

                        "PAY" => $ar_res["PROPERTY_PAY_VALUE"],
                        "DELIVER" => $ar_res["PROPERTY_DELIVER_VALUE"],

                        "VIDEO" => $ar_res["PROPERTY_VIDEO_VALUE"],

                        "PREVIEW_TEXT" => $element_p_text,

                    );
                    CEvent::Send($evt, 's1', $arEventFields);
                }
            }
        }
    }
}