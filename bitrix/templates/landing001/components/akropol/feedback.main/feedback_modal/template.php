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
                    validator(jQuery);
                    $('#submit_ajax').on('click', function () {
                        var params = $('#contact-form_ajax').serializeArray();
                        params.push({"name": "submit", "value": "y"});
                        var arParams = <?=CUtil::PhpToJSObject($arParams)?>;
                        for (var property in arParams) {
                            params.push({
                                'name': property,
                                'value': arParams[property]
                            });
                        }
                        $.post('<?=$templateFolder?>/form.php', params, function (result) {
                            $('.fancybox-inner').html(result);
                        });
                    })
                }
            }
        });
    });
</script>
