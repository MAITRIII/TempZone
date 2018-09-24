<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*********************************Parameters****************************************/
define("APP"					, "IMAPP");
define("APPLICATIONID"			, "64");

/*********************************Constants****************************************/
define("DATABASENAME"				, "mydev_mf3");
define("ISDELETED_YES"					, "1");
define("ISDELETED_NO"					, "0");
define("MENUID"							, "30");
define("GLOBALSETTINGSID"				, "36");
define("MENU"							, "menu");
define("GLOBALSETTINGS"					, "gs");
define("INSERT_MODE"					, "0");
define("UPDATE_MODE"					, "1");
define("COUNTRYID"						, "61");
define("APPID"							, "75");
define("MODULEID"						, "76");
define("EPICID"							, "77");
define("FEATUREID"						, "78");
define("PROCESSOBJECTYPEID"				, "27");
define("HIERLEVELCONFIGAPPID"			, "3");
define("HIERLEVELCONFIGMODULEID"		, "4");
define("HIERLTYPEID"					, "51");
define("OASA"					, "41");
define("EXCTYPID"				, "13");
define("PROCESSID"				, "15");
define("SSA"				, "3");
define("DWELLINGTYPE"					, "123")	;
define("LOCZONETYPE"					, "125")	;
define("LOCTYPEID"					, "59")	;
define("CENSUS"					, "126")	;
	

/******************************************** Function For Validation of Columns ******************************************************/

	if ( ! function_exists('validateColVisibility'))
	{
		function validateColVisibility($colNm,$visibleArrayList) 
		{
			
			 foreach ($visibleArrayList as $element) 
			 {
				if(($element->OBJ_ATTRBT_NM == $colNm) )
				 {
					return true;
				 }
			 }
		}
	}

?>