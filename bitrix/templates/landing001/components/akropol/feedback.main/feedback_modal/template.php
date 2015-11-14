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
                    $('#submit_ajax').on('click',function(){
                        $.post('<?=SITE_TEMPLATE_PATH?>/form.php',{'success':'<?=bitrix_sessid()?>'},function(result){
                            $('#ajax').html(result);
                        })
                    })
                }
            }
        });
    });
</script>
