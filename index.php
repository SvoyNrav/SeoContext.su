<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Продвижение сайтов, веб-разработка, контекстная реклама, веб-студия, SEO");
$APPLICATION->SetPageProperty("description", "Разработка и продвижение веб-проектов «под ключ» от настоящих профессионалов. Индивидуальный подход и гибкая система оплаты для каждого проекта.");
$APPLICATION->SetTitle("SeoContext - доверь продвижение профессионалам");
$APPLICATION->SetPageProperty("telephonetech", "#TECH_PHONE#");
$APPLICATION->SetPageProperty("telephone", "+7(989)8998393");
$APPLICATION->SetPageProperty("Headerlogo", "SeoContext - Разработка и продвижение сайтов");
$APPLICATION->SetPageProperty("Imglogo", "/include/logo.png");
?>

<!-- =========================
     HEADER
============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_1",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>

	<!-- =========================
             OUR  WORKS
        ============================== -->
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_1_1",
		"AREA_FILE_RECURSIVE" => "Y"
	)
);?>

	<!-- =========================
         CLIENTS LOGOS
    ============================== -->
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_5",
		"AREA_FILE_RECURSIVE" => "Y"
	)
);?>
    
<!-- =========================
     FEATURES
============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_2",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>

	<!-- =========================
         ABOUT
    ============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_3",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>

<!-- =========================
     PRICING
============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_6",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>
    
<!-- =========================
     TEAM
============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_7",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>
    
<!-- =========================
     TABS
============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_8",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>
    
<!-- =========================
     GALLERY
============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_9",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>

<!-- =========================
         TESTIMONIALS
    ============================== -->
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_4",
		"AREA_FILE_RECURSIVE" => "Y"
	)
);?>

<!-- =========================
     FUN FACTS
============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_10",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>
    
<!-- =========================
     CONTACT
============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_11",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>
      
<!-- =========================
     LOCALISATION & OTHER CONTACT DATA
============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_12",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>

<!-- =========================
     FORM MODALS
============================== -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "area_13",
		"AREA_FILE_RECURSIVE" => "Y"
		)
	);?>
   	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>