<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?$APPLICATION->IncludeComponent(
	"jsoft_mobileapp:jsoft.mobileapp",
	"reacrm",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"SEF_FOLDER" => "/mobile_app/",
		"SEF_MODE" => "Y",
		//"DISCOUNT" => "Y"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>