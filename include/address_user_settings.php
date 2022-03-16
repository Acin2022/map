<?php
$tdataaddress_user = array();
$tdataaddress_user[".searchableFields"] = array();
$tdataaddress_user[".ShortName"] = "address_user";
$tdataaddress_user[".OwnerID"] = "";
$tdataaddress_user[".OriginalTable"] = "address_user";


$tdataaddress_user[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaddress_user[".originalPagesByType"] = $tdataaddress_user[".pagesByType"];
$tdataaddress_user[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaddress_user[".originalPages"] = $tdataaddress_user[".pages"];
$tdataaddress_user[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaddress_user[".originalDefaultPages"] = $tdataaddress_user[".defaultPages"];

//	field labels
$fieldLabelsaddress_user = array();
$fieldToolTipsaddress_user = array();
$pageTitlesaddress_user = array();
$placeHoldersaddress_user = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaddress_user["English"] = array();
	$fieldToolTipsaddress_user["English"] = array();
	$placeHoldersaddress_user["English"] = array();
	$pageTitlesaddress_user["English"] = array();
	$fieldLabelsaddress_user["English"]["idaddress_user"] = "Id.";
	$fieldToolTipsaddress_user["English"]["idaddress_user"] = "";
	$placeHoldersaddress_user["English"]["idaddress_user"] = "";
	$fieldLabelsaddress_user["English"]["Name"] = "Name";
	$fieldToolTipsaddress_user["English"]["Name"] = "";
	$placeHoldersaddress_user["English"]["Name"] = "";
	$fieldLabelsaddress_user["English"]["Latitude"] = "Latitude";
	$fieldToolTipsaddress_user["English"]["Latitude"] = "";
	$placeHoldersaddress_user["English"]["Latitude"] = "";
	$fieldLabelsaddress_user["English"]["Longitude"] = "Longitude";
	$fieldToolTipsaddress_user["English"]["Longitude"] = "";
	$placeHoldersaddress_user["English"]["Longitude"] = "";
	$fieldLabelsaddress_user["English"]["map"] = "Map";
	$fieldToolTipsaddress_user["English"]["map"] = "";
	$placeHoldersaddress_user["English"]["map"] = "";
	if (count($fieldToolTipsaddress_user["English"]))
		$tdataaddress_user[".isUseToolTips"] = true;
}


	$tdataaddress_user[".NCSearch"] = true;



$tdataaddress_user[".shortTableName"] = "address_user";
$tdataaddress_user[".nSecOptions"] = 0;

$tdataaddress_user[".mainTableOwnerID"] = "";
$tdataaddress_user[".entityType"] = 0;
$tdataaddress_user[".connId"] = "pruebas_at_localhost";


$tdataaddress_user[".strOriginalTableName"] = "address_user";

	



$tdataaddress_user[".showAddInPopup"] = false;

$tdataaddress_user[".showEditInPopup"] = false;

$tdataaddress_user[".showViewInPopup"] = false;

$tdataaddress_user[".listAjax"] = false;
//	temporary
//$tdataaddress_user[".listAjax"] = false;

	$tdataaddress_user[".audit"] = false;

	$tdataaddress_user[".locking"] = false;


$pages = $tdataaddress_user[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaddress_user[".edit"] = true;
	$tdataaddress_user[".afterEditAction"] = 0;
	$tdataaddress_user[".closePopupAfterEdit"] = 1;
	$tdataaddress_user[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataaddress_user[".add"] = true;
$tdataaddress_user[".afterAddAction"] = 0;
$tdataaddress_user[".closePopupAfterAdd"] = 1;
$tdataaddress_user[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataaddress_user[".list"] = true;
}



$tdataaddress_user[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaddress_user[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaddress_user[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaddress_user[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaddress_user[".printFriendly"] = true;
}



$tdataaddress_user[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaddress_user[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaddress_user[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaddress_user[".isUseAjaxSuggest"] = true;

$tdataaddress_user[".rowHighlite"] = true;





$tdataaddress_user[".ajaxCodeSnippetAdded"] = false;

$tdataaddress_user[".buttonsAdded"] = false;

$tdataaddress_user[".addPageEvents"] = true;

// use timepicker for search panel
$tdataaddress_user[".isUseTimeForSearch"] = false;


$tdataaddress_user[".badgeColor"] = "6DA5C8";


$tdataaddress_user[".allSearchFields"] = array();
$tdataaddress_user[".filterFields"] = array();
$tdataaddress_user[".requiredSearchFields"] = array();

$tdataaddress_user[".googleLikeFields"] = array();
$tdataaddress_user[".googleLikeFields"][] = "idaddress_user";
$tdataaddress_user[".googleLikeFields"][] = "Name";
$tdataaddress_user[".googleLikeFields"][] = "map";
$tdataaddress_user[".googleLikeFields"][] = "Latitude";
$tdataaddress_user[".googleLikeFields"][] = "Longitude";



$tdataaddress_user[".tableType"] = "list";

$tdataaddress_user[".printerPageOrientation"] = 0;
$tdataaddress_user[".nPrinterPageScale"] = 100;

$tdataaddress_user[".nPrinterSplitRecords"] = 40;

$tdataaddress_user[".geocodingEnabled"] = false;










$tdataaddress_user[".pageSize"] = 20;

$tdataaddress_user[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaddress_user[".strOrderBy"] = $tstrOrderBy;

$tdataaddress_user[".orderindexes"] = array();


$tdataaddress_user[".sqlHead"] = "SELECT idaddress_user,  Name,  '' AS `map`,  Latitude,  Longitude";
$tdataaddress_user[".sqlFrom"] = "FROM address_user";
$tdataaddress_user[".sqlWhereExpr"] = "";
$tdataaddress_user[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaddress_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaddress_user[".arrGroupsPerPage"] = $arrGPP;

$tdataaddress_user[".highlightSearchResults"] = true;

$tableKeysaddress_user = array();
$tableKeysaddress_user[] = "idaddress_user";
$tdataaddress_user[".Keys"] = $tableKeysaddress_user;


$tdataaddress_user[".hideMobileList"] = array();




//	idaddress_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idaddress_user";
	$fdata["GoodName"] = "idaddress_user";
	$fdata["ownerTable"] = "address_user";
	$fdata["Label"] = GetFieldLabel("address_user","idaddress_user");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idaddress_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idaddress_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataaddress_user["idaddress_user"] = $fdata;
		$tdataaddress_user[".searchableFields"][] = "idaddress_user";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "address_user";
	$fdata["Label"] = GetFieldLabel("address_user","Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataaddress_user["Name"] = $fdata;
		$tdataaddress_user[".searchableFields"][] = "Name";
//	map
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "map";
	$fdata["GoodName"] = "map";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("address_user","map");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "map";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataaddress_user["map"] = $fdata;
		$tdataaddress_user[".searchableFields"][] = "map";
//	Latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Latitude";
	$fdata["GoodName"] = "Latitude";
	$fdata["ownerTable"] = "address_user";
	$fdata["Label"] = GetFieldLabel("address_user","Latitude");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Latitude";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Latitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataaddress_user["Latitude"] = $fdata;
		$tdataaddress_user[".searchableFields"][] = "Latitude";
//	Longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Longitude";
	$fdata["GoodName"] = "Longitude";
	$fdata["ownerTable"] = "address_user";
	$fdata["Label"] = GetFieldLabel("address_user","Longitude");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Longitude";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Longitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataaddress_user["Longitude"] = $fdata;
		$tdataaddress_user[".searchableFields"][] = "Longitude";


$tables_data["address_user"]=&$tdataaddress_user;
$field_labels["address_user"] = &$fieldLabelsaddress_user;
$fieldToolTips["address_user"] = &$fieldToolTipsaddress_user;
$placeHolders["address_user"] = &$placeHoldersaddress_user;
$page_titles["address_user"] = &$pageTitlesaddress_user;


changeTextControlsToDate( "address_user" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["address_user"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["address_user"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_address_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idaddress_user,  Name,  '' AS `map`,  Latitude,  Longitude";
$proto0["m_strFrom"] = "FROM address_user";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "idaddress_user",
	"m_strTable" => "address_user",
	"m_srcTableName" => "address_user"
));

$proto6["m_sql"] = "idaddress_user";
$proto6["m_srcTableName"] = "address_user";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "address_user",
	"m_srcTableName" => "address_user"
));

$proto8["m_sql"] = "Name";
$proto8["m_srcTableName"] = "address_user";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto10["m_sql"] = "''";
$proto10["m_srcTableName"] = "address_user";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "map";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitude",
	"m_strTable" => "address_user",
	"m_srcTableName" => "address_user"
));

$proto12["m_sql"] = "Latitude";
$proto12["m_srcTableName"] = "address_user";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitude",
	"m_strTable" => "address_user",
	"m_srcTableName" => "address_user"
));

$proto14["m_sql"] = "Longitude";
$proto14["m_srcTableName"] = "address_user";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "address_user";
$proto17["m_srcTableName"] = "address_user";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idaddress_user";
$proto17["m_columns"][] = "Name";
$proto17["m_columns"][] = "Latitude";
$proto17["m_columns"][] = "Longitude";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "address_user";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "address_user";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="address_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_address_user = createSqlQuery_address_user();


	
		;

					

$tdataaddress_user[".sqlquery"] = $queryData_address_user;



include_once(getabspath("include/address_user_events.php"));
$tdataaddress_user[".hasEvents"] = true;

?>