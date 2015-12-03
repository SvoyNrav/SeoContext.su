<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();/**
 * Created by PhpStorm.
 * User: Asus-
 * Date: 14.11.2015
 * Time: 16:13
 */
    $id='order_paket_'.rand();
?><button id="<?=$id?>" type="button" class="btn btn-lg btn-info"><?=$arParams['BUTTON_MESSAGE']?>!</button>

<script>
    $(document).ready(function () {
        $("#<?=$id?>").fancybox({
            type: 'ajax',
            href: '<?=$templateFolder.'/form.php'?>',
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
