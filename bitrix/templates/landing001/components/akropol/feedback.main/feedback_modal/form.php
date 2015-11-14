<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); ?>
    <!-- CONTACT FORM -->
    <!-- SECTION TITLE -->
    <h2>
        <!-- TITLE -->
        Форма обратной связи<br/>
        <!-- SUBTITLE -->
        <span>напишите нам</span>
    </h2>

<? $APPLICATION->IncludeComponent(
    "akropol:feedback.main",
    "feedback_ajax",
    [
        "COMPONENT_TEMPLATE"         => $_REQUEST["COMPONENT_TEMPLATE"],
        "FORM_TITLE"                 => $_REQUEST["FORM_TITLE"],
        // Заголовок формы
        "FORM_TITLE_TYPE"            => $_REQUEST["FORM_TITLE_TYPE"],
        // Тип заголовка
        "FORM_TITLE_SIZE"            => $_REQUEST["FORM_TITLE_SIZE"],
        // Величина заголовка
        "USE_CAPTCHA"                => $_REQUEST["USE_CAPTCHA"],
        // Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
        "OK_TEXT"                    => $_REQUEST["OK_TEXT"],
        // Сообщение, выводимое пользователю после отправки
        "EMAIL_TO"                   => "EMAIL_TO",
        // E-mail, на который будет отправлено письмо
        "USED_FIELDS"                => $_REQUEST["USED_FIELDS"],
        "REQUIRED_FIELDS"            => $_REQUEST["REQUIRED_FIELDS"],
        "EVENT_MESSAGE_ID"           => $_REQUEST["EVENT_MESSAGE_ID"],
        "USE_IN_COMPONENT"           => $_REQUEST["N"],
        // Используется внутри другого компонента (или включаемой области)
        "MESSAGE_HIDTH"              => $_REQUEST["MESSAGE_HIDTH"],
        // Высота поля "Сообщение" (число строк)
        "BUTTON_MESSAGE"             => $_REQUEST["BUTTON_MESSAGE"],
        // Текст кнопки отправки
        "PROPERTY_CODE_BUTTON_COLOR" => $_REQUEST["PROPERTY_CODE_BUTTON_COLOR"],
        // Цвет кнопоки
        "NAME_HINT_TITLE"            => $_REQUEST["NAME_HINT_TITLE"],
        // Заголовок для поля ИМЯ
        "NAME_HINT_TEXT"             => $_REQUEST["NAME_HINT_TEXT"],
        // Подсказка в поле ИМЯ
        "EMAIL_HINT_TITLE"           => $_REQUEST["EMAIL_HINT_TITLE"],
        // Заголовок в поле email
        "EMAIL_HINT_TEXT"            => $_REQUEST["EMAIL_HINT_TEXT"],
        // Подсказка в поле email
        "PHONE_HINT_TITLE"           => $_REQUEST["PHONE_HINT_TITLE"],
        // Заголовок в поле телефон
        "PHONE_HINT_TEXT"            => $_REQUEST["PHONE_HINT_TEXT"],
        // Подсказка в поле телефон
        "MESSAGE_HINT_TITLE"         => $_REQUEST["MESSAGE_HINT_TITLE"],
        // Заголовок в поле Сообщение
    ],
    $component
); ?>