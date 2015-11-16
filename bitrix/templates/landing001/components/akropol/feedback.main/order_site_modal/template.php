<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die()/**
 * Created by PhpStorm.
 * User: Asus-
 * Date: 14.11.2015
 * Time: 16:13
 */
; ?>
<a class="fancybox" href="<?= $templateFolder ?>/form.php">

    <!-- ICON -->
    <span class="elegant icon_cloud-download_alt"></span>

    <!-- BUTTON TEXT -->
    Заказать

</a>

<script>
    $(document).ready(function () {
        $(".fancybox").fancybox({
            type: 'ajax',
            ajax: {
                data: <?=json_encode($arParams)?>,
                complete: function () {
                    validator(jQuery,"validator_ajax");
                    var params = $('#contact-form_ajax').serializeArray();
                    params.push({"name": "submit", "value": "y"});
                    var arParams = <?=CUtil::PhpToJSObject($arParams)?>;
                    for (var property in arParams) {
                        params.push({
                            'name': property,
                            'value': arParams[property]
                        });
                    }
                    $('#submit_ajax').fancybox({
                        type: 'ajax',
                        href: '<?=$templateFolder?>/form.php',
                        ajax:  {
                            data: params,
                            complete: function(){
                                $('.modal-close').on('click',function(){
                                    $.fancybox.close();
                                })
                            }
                        }
                    });
                    $("#phone_ajax").inputmask("+7(999)999-99-99");//маска

                }
            }
        });
    });
</script>
