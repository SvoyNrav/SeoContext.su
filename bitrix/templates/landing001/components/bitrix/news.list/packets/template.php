<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
    /** @var array $arParams */
    /** @var array $arResult */
    /** @global CMain $APPLICATION */
    /** @global CUser $USER */
    /** @global CDatabase $DB */
    /** @var CBitrixComponentTemplate $this */
    /** @var string $templateName */
    /** @var string $templateFile */
    /** @var string $templateFolder */
    /** @var string $componentPath */
    /** @var CBitrixComponent $component */

    $this->setFrameMode(true);
    $section_counter == 0;
    foreach ($arResult["ITEMS"] as $key => $arItem):
    if ($section_id != $arItem['IBLOCK_SECTION_ID']): ?>
<? $section_id = $arItem['IBLOCK_SECTION_ID'] ?>
<? $section_counter++ ?>
<? if ($key != 0): ?>
</div>
</div>
<? if ($section_counter == 2): ?>
<!-- LOAD MORE FEATURES BUTTON -->

<div class="row load-more anim-fade-down">
    <button type="button" class="btn btn-lg btn-primary" data-toggle="collapse" data-target="#MorePrices">

        Цены на все услуги

    </button>
</div>

<div id="MorePrices" class="panel-collapse collapse">

    <? endif ?>
    <? endif ?>
    <!-- SECTION TITLE -->
    <h2 class="anim-fade-down">
        <!-- TITLE -->
        <?= $arResult['SECTIONS'][ $arItem['IBLOCK_SECTION_ID'] ]['NAME'] ?><br/>
        <!-- SUBTITLE -->
        <span><?= $arResult['SECTIONS'][ $arItem['IBLOCK_SECTION_ID'] ]['UF_SUBTITLE'] ?></span>
    </h2>

    <div class="container">

        <div class="row">




            <? endif ?>
            <?
                $this->AddEditAction(
                    $arItem['ID'],
                    $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID(
                        $arItem["IBLOCK_ID"],
                        "ELEMENT_EDIT"
                    )
                );
                $this->AddDeleteAction(
                    $arItem['ID'],
                    $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID(
                        $arItem["IBLOCK_ID"],
                        "ELEMENT_DELETE"
                    ),
                    ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
                );
            ?>
            <!-- OFFER 1 -->
            <? $best_choice = ($arItem['PROPERTIES']['BEST_CHOICE']['VALUE'] == 'Y') ?>
            <div class="col-md-3 col-sm-6 col-xs-12 <?= $best_choice ? ' anim-bounce' : 'anim-fade' ?>">

                <div class="offer <?= $best_choice ? 'offer-best' : '' ?>">
                    <? if ($best_choice): ?>
                        <span class="best-buy"><img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/best.png"
                                                    alt="Оптимальный выбор"></span>
                    <? endif ?>

                    <!-- OFFER NAME -->

                    <div class="offer-name"><?= $arItem['NAME'] ?></div>

                    <!-- PRICE -->
                    <div class="offer-price">
                        <span></span>
                        <span><?= $arItem['PROPERTIES']['PRICE']['VALUE'] ?></span>
                        <span>руб</span>
                    </div>

                    <!-- OFFER FEATURES -->
                    <div class="offer-features">
                        <p>
                            <?= implode(
                                '</p><p>',
                                $arItem['PROPERTIES']['OPTION']['VALUE']
                            ) ?>
                        </p>
                    </div>

                    <!-- BUY BUTTON -->
                    <div class="offer-buy">
                        <? $APPLICATION->IncludeComponent(
                            "akropol:feedback.main",
                            "order_packet_modal",
                            array(
                                "COMPONENT_TEMPLATE"         => "callback_modal",
                                "FORM_TITLE"                 => "Форма заказа пакета '{$arItem['NAME']}'",
                                "FORM_TITLE_TYPE"            => "H3",
                                "FORM_TITLE_SIZE"            => "5",
                                "USE_CAPTCHA"                => "N",
                                "OK_TEXT"                    => "Спасибо, ваше сообщение принято.",
                                "EMAIL_TO"                   => "contacts@seocontext.su",
                                "USED_FIELDS"                => array(
                                    0 => "NAME",
                                    1 => "PHONE",
                                    2=> "EMAIL"
                                ),
                                "REQUIRED_FIELDS"            => array(
                                    0 => "NAME",
                                    1 => "PHONE",
                                    2=> "EMAIL"

                                ),
                                "EVENT_MESSAGE_ID"           => array(
                                    0 => "7",
                                    1 => "8",
                                ),
                                "USE_IN_COMPONENT"           => "Y",
                                "MESSAGE_WIDTH"              => "10",
                                "BUTTON_MESSAGE"             => "Заказать",
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
                            $component
                        ); ?>
                    </div>

                </div>
            </div>


            <? endforeach; ?>
            <? if ($section_counter > 1): ?>

            <? endif ?>
        </div>
