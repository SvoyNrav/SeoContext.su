<?
    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
    /**
     * Bitrix vars
     *
     * @var array $arParams
     * @var array $arResult
     * @var CBitrixComponentTemplate $this
     * @global CMain $APPLICATION
     * @global CUser $USER
     */

//    var_dump($arResult);
?>
<? if (!empty($arResult["ERROR_MESSAGE"]))
{
    ?>
    <!-- FAILURE - MESSAGE NOT SEND -->
    <div  id="FormFailure" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <p class="formModal">

                        <!-- ICON -->
                        <span class="elegant error icon_error-circle"></span><br/>

                        <!-- MODAL CONTENT BIG -->
                        <span class="desc">Упс!!</span><br/>

                        <!-- MODAL CONTENT SMALL -->
                        Пожалуйста проверьте поля и попробуйте еще раз.

                    </p>
                </div>

                <!-- CLOSE THE MODAL BUTTON -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-ok modal-close" data-dismiss="modal">Хорошо</button>
                </div>

            </div>
        </div>
    </div>
    <?
}
    if (strlen($arResult["OK_MESSAGE"]) > 0)
    {
        ?>
        <!-- SUCCES - MESSAGE SEND -->
        <div id="FormSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body">
                        <p class="formModal">

                            <!-- ICON -->
                            <span class="elegant icon_check_alt2"></span><br/>

                            <!-- MODAL CONTENT BIG -->
                            <span class="desc">Спасибо вам!</span><br/>

                            <!-- MODAL CONTENT SMALL -->
                            Сообщение отправлено

                        </p>
                    </div>

                    <!-- CLOSE THE MODAL BUTTON -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-ok modal-close" data-dismiss="modal">Отлично!</button>
                    </div>

                </div>
            </div>
        </div>

        <?
        die;
    }
?>

<? if (!empty($arParams["FORM_TITLE"])): ?>
    <div style="text-align: center;"><<?= $arParams['FORM_TITLE_TYPE']; ?>
        style="font-size: <?= $arParams['FORM_TITLE_SIZE']; ?>
        em;"><?= $arParams['FORM_TITLE'] ?></<?= $arParams['FORM_TITLE_TYPE']; ?>>
</div>
<? endif ?>

<form class="form-horizontal" id="contact-form_ajax" role="form" data-toggle="validator_ajax" action="/" method="POST">
    <?= bitrix_sessid_post() ?>

    <? if (in_array(
            "NAME",
            $arParams["USED_FIELDS"]
        ) or in_array(
            "EMAIL",
            $arParams["USED_FIELDS"]
        ) or in_array(
            "PHONE",
            $arParams["USED_FIELDS"]
        )
    ): ?>
        <? if (in_array(
            "NAME",
            $arParams["USED_FIELDS"]
        )): ?>
            <!-- NAME INPUT -->
            <div class="form-group col-sm-12 col-xs-12 inline-input ">
                <div class="input-group col-sm-12 col-xs-12">
                    <!-- ICON -->
                    <div class="input-group-addon">
                        <span class="elegant icon_profile"></span>
                    </div>
                    <!-- INPUT --> <input type="text" name="user_name" class="form-control" id="name_ajax"
                                          placeholder="<?= $arParams['NAME_HINT_TEXT'] ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array(
                                                  "NAME",
                                                  $arParams["REQUIRED_FIELDS"]
                                              )
                                          ): ?>*<? endif ?>" data-minlength="5" required=""
                                          value="<?= $arResult["AUTHOR_NAME"] ?>">
                </div>
                <!-- ERROR MESSAGE BOX -->
                <div class="help-block with-errors">
                </div>
            </div>
        <? endif ?>
        <? if (in_array(
            "EMAIL",
            $arParams["USED_FIELDS"]
        )): ?>
            <!-- E-MAIL INPUT -->
            <div class="form-group col-sm-12 col-xs-12 inline-input ">
                <div class="input-group col-sm-12 col-xs-12">
                    <!-- ICON -->
                    <div class="input-group-addon">
                        <span class="elegant icon_mail_alt"></span>
                    </div>
                    <!-- INPUT --> <input type="email" class="form-control" id="email_ajax"
                                          placeholder="<?= $arParams['EMAIL_HINT_TEXT'] ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array(
                                                  "EMAIL",
                                                  $arParams["REQUIRED_FIELDS"]
                                              )
                                          ): ?>*<? endif ?>" required="" name="user_email"
                                          value="<?= $arResult["AUTHOR_EMAIL"] ?>">
                </div>
                <!-- ERROR MESSAGE BOX -->
                <div class="help-block with-errors">
                </div>
            </div>
        <? endif ?>
        <? if (in_array(
            "PHONE",
            $arParams["USED_FIELDS"]
        )): ?>
            <!-- PHONE NUMBER INPUT -->
            <div class="form-group col-sm-12 col-xs-12 inline-input ">
                <div class="input-group col-sm-12 col-xs-12">
                    <!-- ICON -->
                    <div class="input-group-addon">
                        <span class="elegant icon_mobile"></span>
                    </div>
                    <!-- PHONE NUMBER INPUT --> <input type="tel" class="form-control" id="phone"
                                                       placeholder="<?= $arParams['PHONE_HINT_TEXT'] ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array(
                                                               "PHONE",
                                                               $arParams["REQUIRED_FIELDS"]
                                                           )
                                                       ): ?>*<? endif ?>" name="user_phone" value="">
                </div>
                <!-- ERROR MESSAGE BOX -->
                <div class="help-block with-errors">
                </div>
            </div>
        <? endif ?>
    <? endif ?>

    <? if (in_array(
        "MESSAGE",
        $arParams["USED_FIELDS"]
    )): ?>
        <!-- TEXTAREA -->
        <div class="form-group col-sm-12 col-xs-12 ">
            <div class="input-group col-sm-12 col-xs-12 form-textarea">
                <!-- ICON -->
                <div class="input-group-addon">
                    <span class="elegant icon_pencil-edit"></span>
                </div>
                <!-- TEXTAREA --> <textarea class="form-control" id="messagez_ajax" name="MESSAGE"
                                            rows="<?= $arParams['MESSAGE_HIDTH'] ?>"
                                            placeholder="<?= $arParams['MESSAGE_HINT_TITLE'] ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array(
                                                    "MESSAGE",
                                                    $arParams["REQUIRED_FIELDS"]
                                                )
                                            ): ?>*<? endif ?>" required=""></textarea>
            </div>
            <!-- ERROR MESSAGE BOX -->
            <div class="help-block with-errors">
            </div>
        </div>
    <? endif ?>

    <br/>


    <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <p style="text-align: center;"><?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-req">*</span></p>

                <div class="col-lg-6">
                    <p style="text-align: center;"><input type="hidden" name="captcha_sid"
                                                          value="<?= $arResult["capCode"] ?>">
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="158"
                             height="35" alt="CAPTCHA"></p>
                </div>
                <div class="col-lg-6">
                    <input class="required form-control" type="text" name="captcha_word" size="30" maxlength="50"
                           value="">
                </div>
            </div>
            <div class="col-lg-6">
                <br/>

                <p style="text-align:  center;">
                    <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                    <input class="btn <?= $arParams['PROPERTY_CODE_BUTTON_COLOR'] ?> btn-lg" type="submit" name="submit"
                           value="<?= $arParams['BUTTON_MESSAGE'] ?>" style="padding-left: 50px; padding-right: 50px;">
                </p>
            </div>
        </div>
    <? else: ?>

        <!-- SUBMIT BUTTON -->
        <div class="form-group col-xs-12">
            <button id="submit_ajax" type="submit" name="submit" form="contact-form" value="submit"
                    class="btn btn-success col-sm-12 col-xs-12 disabled" style="pointer-events: all; cursor: pointer;">

                <!-- ICON -->
                <span class="icon_check"></span>

                <!-- BUTTON TEXT -->
                <?= $arParams['BUTTON_MESSAGE'] ?>

            </button>
        </div>
        <!-- ERROR MESSAGE BOX -->
        <div class="help-block with-errors">
        </div>
    <? endif; ?>

</form>
