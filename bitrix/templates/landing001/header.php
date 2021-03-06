<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
    IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>-<?= strtoupper(LANGUAGE_ID); ?>">

<head>

    <? $APPLICATION->ShowHead(); ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- =========================
          FAV & TOUCH ICONS
    ============================== -->
    <!-- FAVICON FOR DESKTOPS -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/favicon.gif">

    <!-- SET OF FAVICONS FOR APPLE PRODUCTS -->
    <link rel="apple-touch-icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/apple-touch-icon-114x114.png">
    <!-- JQUERY -->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery_1.11.1.min.js") ?>
    <!-- Add fancyBox -->
    <? $APPLICATION->SetAdditionalCSS("/js/fancybox/source/jquery.fancybox.css?v=2.1.5"); ?>
    <? $APPLICATION->AddHeadScript("/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5") ?>


    <!-- =========================
     FONTS
============================== -->
    <!-- RALEWAY FONT FROM GOOGLE FONTS -->
    <? $APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900'); ?>


    <!-- ELEGANT ICON PACK FOR YOUR PAGE -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/icons/elegant.css'); ?>

    <!-- =========================
         Font Awesome
    ============================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <!-- =========================
         MAIN STYLESHEETS
    ============================== -->
    <!-- BOOTSTRAP -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/bootstrap/bootstrap.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/bootstrap/bootstrap.css.map'); ?>

    <!-- ALIVE! THEME -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/style-default.css'); ?>

    <!-- COLORBOX THEME -->
    <!-- CAROUSEL THEME -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/plugins/plugins.css'); ?>


    <!-- =========================
         ANIMATIONS
    ============================== -->
    <!-- ALIVE THEME ANIMATIONS -->
    <!-- ANIMATIONS BASED ON ANIMATE.CSS -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/animations/animations.css'); ?>


    <!-- =========================
         INTERNET EXPLORER FIXES
    ============================== -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <title><? $APPLICATION->ShowTitle() ?></title>
</head>


<body id="body" class="page-loading">

<!-- =========================
     PRELOADER
============================== -->
<div id="preloader">
    <div id="loading"></div>
</div>


<!-- =========================
     BITRIX PANEL
============================== -->
<? $APPLICATION->ShowPanel(); ?>


<!-- =========================
     MAIN MENU
============================== -->
<nav id="mainmenu" class="navbar navbar-fixed-top main-menu head-menu auto-height" role="navigation">
    <div class="container">

        <!-- LOGO CONTAINER -->
        <div class="logo-cont">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH"           => SITE_TEMPLATE_PATH . "/include/logo.php",
                    "EDIT_TEMPLATE"  => ""
                ),
                false
            ); ?>

        </div>
        <div class="phone-cont">
            <a href="tel:<? $APPLICATION->ShowProperty("telephone"); ?>" class="phone-primary"
               title="Номер телефона студии SeoContext"><? $APPLICATION->ShowProperty("telephone"); ?></a>
            <? $APPLICATION->IncludeComponent(
                "akropol:feedback.main",
                "callback_modal",
                array(
                    "COMPONENT_TEMPLATE"         => "callback_modal",
                    "FORM_TITLE"                 => "Оставьте номер телефона и мы перезвоним",
                    "FORM_TITLE_TYPE"            => "H3",
                    "FORM_TITLE_SIZE"            => "5",
                    "USE_CAPTCHA"                => "N",
                    "OK_TEXT"                    => "Спасибо, ваше сообщение принято.",
                    "EMAIL_TO"                   => "contacts@seocontext.su",
                    "USED_FIELDS"                => array(
                        0 => "NAME",
                        1 => "PHONE",
                    ),
                    "REQUIRED_FIELDS"            => array(
                        0 => "NAME",
                        1 => "PHONE",
                    ),
                    "EVENT_MESSAGE_ID"           => array(
                        0 => "7",
                        1 => "8",
                    ),
                    "USE_IN_COMPONENT"           => "N",
                    "MESSAGE_WIDTH"              => "10",
                    "BUTTON_MESSAGE"             => "Обратный звонок",
                    "PROPERTY_CODE_BUTTON_COLOR" => "btn-primary",
                    "NAME_HINT_TITLE"            => "Ваше имя",
                    "NAME_HINT_TEXT"             => "Ваше имя",
                    "EMAIL_HINT_TITLE"           => "Ваш e-mail",
                    "EMAIL_HINT_TEXT"            => "email",
                    "PHONE_HINT_TITLE"           => "Ваш телефон",
                    "PHONE_HINT_TEXT"            => "+7(926)123-45-67",
                    "MESSAGE_HINT_TITLE"         => "Сообщение",
                    "MESSAGE_HIDTH"              => "10"
                ),
                false
            ); ?>
        </div>

        <!-- "BURGER MENU" FOR RESPONSIVE VIEW -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- MAIN MENU CONTAINER -->
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top_menu",
            array(
                "ROOT_MENU_TYPE"        => "top",
                "MENU_CACHE_TYPE"       => "N",
                "MENU_CACHE_TIME"       => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS"   => "",
                "MAX_LEVEL"             => "1",
                "CHILD_MENU_TYPE"       => "left",
                "USE_EXT"               => "N",
                "DELAY"                 => "N",
                "ALLOW_MULTI_SELECT"    => "N"
            )
        ); ?>

    </div>
</nav>