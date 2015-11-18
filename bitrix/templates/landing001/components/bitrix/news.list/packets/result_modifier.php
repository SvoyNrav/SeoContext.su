<?php
    /**
     * Created by PhpStorm.
     * User: Asus-
     * Date: 18.11.2015
     * Time: 1:02
     */

    $dbSections = CIBlockSection::GetList(
        ['SORT'],
        ['IBLOCK_ID' => $arParams['IBLOCK_ID']],
        false,
        [
            'ID',
            "NAME",
            "IBLOCK_ID",
            "UF_SUBTITLE"
        ]
    );
    while ($section = $dbSections->GetNext())
    {
        $arResult['SECTIONS'][ $section['ID'] ] = [
            'NAME'        => $section['NAME'],
            'UF_SUBTITLE' => $section['UF_SUBTITLE']
        ];
    }
