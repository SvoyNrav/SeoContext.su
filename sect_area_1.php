<section id="header" class="parallax" style="background:url(/include/background.png) fixed;">
    <!-- FOR COLOR OVERLAY, CHANGE CLASS TO color-overlay -->
    <div class="overlay">
        <div class="container">
            <div class="row">
                <!-- HEADER CONTENT LEFT -->
                <div class="header-cont col-xs-12 col-sm-12 col-md-8">
                    <!-- MARGIN FROM TOP -->
                    <div class="header-margin">
                    </div>
                    <!-- HEADER TEXT -->
                    <div class="anim-bounce-up">
                        <!-- HEADER TITLE -->
                        <h1>
                            <!-- SMALL TITLE --> Реализация проекта <br>
                            «под ключ»:<br>
                            <span class="header-txt-small">- Разработка сайта</span><br>
                            <span class="header-txt-small">- Продвижение</span><br>
                            <span class="header-txt-small">- Контекстная реклама</span><br>
                            <!-- REGULAR TITLE --> <span class="header-txt-small">от </span><span
                                class="header-txt-color">25 000</span><span class="header-txt-small"> руб.</span></h1>
                        <!-- SUBTITLE -->
                    </div>
                    <!-- HEADER BUTTONS -->
                    <div class="buttons-cont">
                        <!-- DOWNLOAD BUTTON -->
                        <div class="btn btn-lg btn-success anim-bounce-left">
                            <? $APPLICATION->IncludeComponent(
                                "akropol:feedback.main",
                                "order_site_modal",
                                Array(
                                    "BUTTON_MESSAGE"             => "Отправить",
                                    "COMPONENT_TEMPLATE"         => "order_site_modal",
                                    "EMAIL_HINT_TEXT"            => "email",
                                    "EMAIL_HINT_TITLE"           => "Ваш e-mail",
                                    "EMAIL_TO"                   => "contacts@seocontext.su",
                                    "EVENT_MESSAGE_ID"           => array(
                                        "7",
                                        "8"
                                    ),
                                    "FORM_TITLE"                 => "Оставьте заявку на создание сайта",
                                    "FORM_TITLE_SIZE"            => "5",
                                    "FORM_TITLE_TYPE"            => "H3",
                                    "MESSAGE_HIDTH"              => "10",
                                    "MESSAGE_HINT_TITLE"         => "Сообщение",
                                    "NAME_HINT_TEXT"             => "Ваше имя",
                                    "NAME_HINT_TITLE"            => "Ваше имя",
                                    "OK_TEXT"                    => "Спасибо, ваше сообщение принято.",
                                    "PHONE_HINT_TEXT"            => "+7(926)123-45-67",
                                    "PHONE_HINT_TITLE"           => "Ваш телефон",
                                    "PROPERTY_CODE_BUTTON_COLOR" => "btn-primary",
                                    "REQUIRED_FIELDS"            => array(
                                        "NAME",
                                        "EMAIL",
                                        "MESSAGE"
                                    ),
                                    "USED_FIELDS"                => array(
                                        "NAME",
                                        "PHONE",
                                        "EMAIL",
                                        "MESSAGE"
                                    ),
                                    "USE_CAPTCHA"                => "N",
                                    "USE_IN_COMPONENT"           => "N"
                                )
                            ); ?>
                        </div>
                        <!-- LEARN MORE BUTTON -->
                        <div class="btn btn-lg btn-info anim-bounce-right">
                            <a href="#features">
                                <!-- ICON --> <span class="elegant arrow_carrot-2down"></span>
                                <!-- BUTTON TEXT --> Подробнее </a>
                        </div>
                    </div>
                </div>
                <!-- HEADER CONTENT RIGHT -->
                <div class="header-cont col-md-4 hidden-sm hidden-xs">
                    <!-- MARGIN FROM TOP -->
                    <div class="header-margin">
                    </div>
                    <!-- PRODUCT IMAGE -->
                    <div class="header-image-right">
                        <img alt="Разработка сайтов SeoContext"
                             src="/bitrix/templates/landing001/img/header/startap.png" class="anim-from-right"
                             title="Разработка сайтов SeoContext">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>