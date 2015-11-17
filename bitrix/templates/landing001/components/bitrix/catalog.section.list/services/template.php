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

    function nl2p($str, $from)
    {
        $str = '<p class="anim-from-' . $from . '">' . preg_replace(
                '/\r\n|\n|\r/',
                '</p>$0<p class="anim-from-' . $from . '">',
                $str
            ) . '</p>';
        $str = preg_replace(
            '/<p><\/p>/',
            '',
            $str
        );

        return $str;
    }

    $this->setFrameMode(true); ?>
<!-- SECTION TITLE -->
<h2 class="anim-fade-up">

    <!-- MAIN TITLE -->
    Наши услуги<br/>

    <!-- SUBTITLE -->
    <span>Студия "SeoContext"</span>

</h2>
<?
    foreach ($arResult['SECTIONS'] as $key => &$arSection)
    {
    $text_from = $key % 2 == 0 ? 'left' : 'right';
    $img_from = $key % 2 == 0 ? 'right' : 'left';
    $this->AddEditAction(
        $arSection['ID'],
        $arSection['EDIT_LINK'],
        $strSectionEdit
    );
    $this->AddDeleteAction(
        $arSection['ID'],
        $arSection['DELETE_LINK'],
        $strSectionDelete,
        $arSectionDeleteParams
    );

    if (false === $arSection['PICTURE'])
        $arSection['PICTURE'] = [
            'SRC'   => $arCurView['EMPTY_IMG'],
            'ALT'   => (
            '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                : $arSection["NAME"]
            ),
            'TITLE' => (
            '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                : $arSection["NAME"]
            )
        ];
?>
    <!-- ABOUT CONTAINER - TEXT ALIGN TO RIGHT -->
    <div class="about-cont <? if ($key % 2 == 0): ?> bg-grey about-to-right<? endif ?> ">
        <div class="container" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
            <div class="row">
                <? if ($key % 2 == 0): ?>
                    <!-- ABOUT TEXT SECTION -->
                    <div class="col-md-6">

                        <!-- ABOUT TITLE -->
                        <h3 class="anim-from-<?= $text_from ?>"><? echo $arSection['NAME']; ?></h3>

                        <!-- ABOUT DESCRIPTION -->
                        <?= nl2p(
                            $arSection['DESCRIPTION'],
                            $text_from
                        ); ?>

                    </div>

                    <!-- ABOUT IMAGE -->
                    <div class="col-md-6 about-img">

                        <!-- PLACE YOUR ABOUT IMAGE BELOW -->
                        <img src="<? echo $arSection['PICTURE']['SRC']; ?>" class="anim-from-<?= $img_from ?>" alt>

                    </div>
                    <?
                else:?>
                    <!-- ABOUT IMAGE -->
                    <div class="col-md-6 about-img">

                        <!-- PLACE YOUR ABOUT IMAGE BELOW -->
                        <img src="<? echo $arSection['PICTURE']['SRC']; ?>" class="anim-from-<?= $img_from ?>" alt>

                    </div>
                    <!-- ABOUT TEXT SECTION -->
                    <div class="col-md-6">

                        <!-- ABOUT TITLE -->
                        <h3 class="anim-from-<?= $text_from ?>"><? echo $arSection['NAME']; ?></h3>

                        <!-- ABOUT DESCRIPTION -->
                        <?= nl2p(
                            $arSection['DESCRIPTION'],
                            $text_from
                        ); ?>

                    </div>


                <? endif ?>
            </div>
        </div>
    </div>

<? if ($key == 2 && count($arResult['SECTIONS']) > 3): ?>
    <div class="row load-more anim-fade-down">
        <button type="button" class="btn btn-lg btn-primary" data-toggle="collapse" data-target="#MoreAbout">

            Остальные услуги

        </button>
    </div>
<div class="row">
    <div id="MoreAbout" class="panel-collapse collapse">

        <? endif;
            } ?>
        <? if ($key > 2): ?>
    </div>
</div>
<? endif ?>

