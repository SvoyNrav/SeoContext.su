<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); ?>
    <!-- CONTACT FORM -->
<? $APPLICATION->IncludeComponent(
    "akropol:feedback.main",
    "feedback",
    [
        "COMPONENT_TEMPLATE"         => ".default",
        "FORM_TITLE"                 => "",
        // ��������� �����
        "FORM_TITLE_TYPE"            => "H2",
        // ��� ���������
        "FORM_TITLE_SIZE"            => "5",
        // �������� ���������
        "USE_CAPTCHA"                => "N",
        // ������������ ������ �� �������������� ��������� (CAPTCHA) ��� ���������������� �������������
        "OK_TEXT"                    => "�������, ���� ��������� �������.",
        // ���������, ��������� ������������ ����� ��������
        "EMAIL_TO"                   => "contacts@seocontext.su",
        // E-mail, �� ������� ����� ���������� ������
        "USED_FIELDS"                => [    // �������� ����
                                             0 => "NAME",
                                             1 => "PHONE",
                                             2 => "EMAIL",
                                             3 => "MESSAGE",
        ],
        "REQUIRED_FIELDS"            => [    // ������������ ���� ��� ����������
                                             0 => "NAME",
                                             1 => "EMAIL",
                                             2 => "MESSAGE",
        ],
        "EVENT_MESSAGE_ID"           => [    // �������� ������� ��� �������� ������
                                             0 => "8",
        ],
        "USE_IN_COMPONENT"           => "Y",
        // ������������ ������ ������� ���������� (��� ���������� �������)
        "MESSAGE_HIDTH"              => "10",
        // ������ ���� "���������" (����� �����)
        "BUTTON_MESSAGE"             => "��������",
        // ����� ������ ��������
        "PROPERTY_CODE_BUTTON_COLOR" => "btn-primary",
        // ���� �������
        "NAME_HINT_TITLE"            => "���� ���",
        // ��������� ��� ���� ���
        "NAME_HINT_TEXT"             => "���� ���",
        // ��������� � ���� ���
        "EMAIL_HINT_TITLE"           => "��� e-mail",
        // ��������� � ���� email
        "EMAIL_HINT_TEXT"            => "email",
        // ��������� � ���� email
        "PHONE_HINT_TITLE"           => "��� �������",
        // ��������� � ���� �������
        "PHONE_HINT_TEXT"            => "+7(926)123-45-67",
        // ��������� � ���� �������
        "MESSAGE_HINT_TITLE"         => "���������",
        // ��������� � ���� ���������
    ],
    false
); ?>