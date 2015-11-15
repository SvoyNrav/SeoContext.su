<section id="header" class="parallax" style="background:url(/include/background.png) fixed;">

    <!-- FOR COLOR OVERLAY, CHANGE CLASS TO color-overlay -->
    <div class="overlay">
        <div class="container">
            <div class="row">

                <!-- HEADER CONTENT LEFT -->
                <div class="header-cont col-xs-12 col-sm-12 col-md-8">

                    <!-- MARGIN FROM TOP -->
                    <div class="header-margin"></div>

                    <!-- HEADER TEXT -->
                    <header class="anim-bounce-up">

                        <!-- HEADER TITLE -->
                        <h1>

                            <!-- SMALL TITLE -->
                            Реализация проекта <br/>
                            «под ключ»:<br/>
                            <span class="header-txt-small">- Разработка сайта</span><br/>
                            <span class="header-txt-small">- Продвижение</span><br/>
                            <span class="header-txt-small">- Контекстная реклама</span><br/>

                            <!-- REGULAR TITLE -->
                            <span class="header-txt-small">от </span><span class="header-txt-color">25 000</span><span
                                class="header-txt-small"> руб.</span>

                        </h1>

                        <!-- SUBTITLE -->

                    </header>

                    <!-- HEADER BUTTONS -->
                    <div class="buttons-cont">

                        <!-- DOWNLOAD BUTTON -->
                        <div class="btn btn-lg btn-success anim-bounce-left">
                            <? $APPLICATION->IncludeComponent(
                                "akropol:feedback.main",
                                "feedback_modal",
                                [
                                    "COMPONENT_TEMPLATE"         => ".default",
                                    "FORM_TITLE"                 => "Оставьте заявку на создание сайта",
                                    // Заголовок формы
                                    "FORM_TITLE_TYPE"            => "H3",
                                    // Тип заголовка
                                    "FORM_TITLE_SIZE"            => "5",
                                    // Величина заголовка
                                    "USE_CAPTCHA"                => "N",
                                    // Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
                                    "OK_TEXT"                    => "Спасибо, ваше сообщение принято.",
                                    // Сообщение, выводимое пользователю после отправки
                                    "EMAIL_TO"                   => "contacts@seocontext.su",
                                    // E-mail, на который будет отправлено письмо
                                    "USED_FIELDS"                => [    // Выводить поля
                                                                         0 => "NAME",
                                                                         1 => "PHONE",
                                                                         2 => "EMAIL",
                                                                         3 => "MESSAGE",
                                    ],
                                    "REQUIRED_FIELDS"            => [    // Обязательные поля для заполнения
                                                                         0 => "NAME",
                                                                         1 => "EMAIL",
                                                                         2 => "MESSAGE",
                                    ],
                                    "EVENT_MESSAGE_ID"           => [    // Почтовые шаблоны для отправки письма
                                                                         0 => "8",
                                    ],
                                    "USE_IN_COMPONENT"           => "N",
                                    // Используется внутри другого компонента (или включаемой области)
                                    "MESSAGE_HIDTH"              => "10",
                                    // Высота поля "Сообщение" (число строк)
                                    "BUTTON_MESSAGE"             => "Отправить",
                                    // Текст кнопки отправки
                                    "PROPERTY_CODE_BUTTON_COLOR" => "btn-primary",
                                    // Цвет кнопоки
                                    "NAME_HINT_TITLE"            => "Ваше имя",
                                    // Заголовок для поля ИМЯ
                                    "NAME_HINT_TEXT"             => "Ваше имя",
                                    // Подсказка в поле ИМЯ
                                    "EMAIL_HINT_TITLE"           => "Ваш e-mail",
                                    // Заголовок в поле email
                                    "EMAIL_HINT_TEXT"            => "email",
                                    // Подсказка в поле email
                                    "PHONE_HINT_TITLE"           => "Ваш телефон",
                                    // Заголовок в поле телефон
                                    "PHONE_HINT_TEXT"            => "+7(926)123-45-67",
                                    // Подсказка в поле телефон
                                    "MESSAGE_HINT_TITLE"         => "Сообщение",
                                    // Заголовок в поле Сообщение
                                ],
                                false
                            ); ?>
                        </div>
                        <!-- LEARN MORE BUTTON -->
                        <div class="btn btn-lg btn-info anim-bounce-right">
                            <a href="#features">

                                <!-- ICON -->
                                <span class="elegant arrow_carrot-2down"></span>

                                <!-- BUTTON TEXT -->
                                Подробнее

                            </a>
                        </div>

                    </div>

                </div>

                <!-- HEADER CONTENT RIGHT -->
                <div class="header-cont col-md-4 hidden-sm hidden-xs">

                    <!-- MARGIN FROM TOP -->
                    <div class="header-margin"></div>

                    <!-- PRODUCT IMAGE -->
                    <div class="header-image-right">
                        <img class="anim-from-right" src="<?= SITE_TEMPLATE_PATH ?>/img/header/startap.png" alt="Разработка сайтов SeoContext" title="Разработка сайтов SeoContext">
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>