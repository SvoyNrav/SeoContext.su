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
                            <a class="fancybox" href="<?= SITE_TEMPLATE_PATH ?>/ajax/form.php"></a>

                            <!-- ICON -->
                            <span class="elegant icon_cloud-download_alt"></span>

                            <!-- BUTTON TEXT -->
                            Заказать

                            </a>

                        </div>
                        <script>
                            $(".fancybox").fancybox({type: 'ajax'});
                        </script>
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
                        <img class="anim-from-right" src="<?= SITE_TEMPLATE_PATH ?>/img/header/startap.png" alt>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>