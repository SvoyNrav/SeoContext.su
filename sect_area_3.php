<section id="about">
<?    $APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "services",
    [
    "ADD_SECTIONS_CHAIN"  => "N",
    // Включать раздел в цепочку навигации
    "CACHE_GROUPS"        => "N",
    // Учитывать права доступа
    "CACHE_TIME"          => "36000000",
    // Время кеширования (сек.)
    "CACHE_TYPE"          => "A",
    // Тип кеширования
    "COMPONENT_TEMPLATE"  => ".default",
    "COUNT_ELEMENTS"      => "Y",
    // Показывать количество элементов в разделе
    "IBLOCK_ID"           => "2",
    // Инфоблок
    "IBLOCK_TYPE"         => "Services",
    // Тип инфоблока
    "SECTION_CODE"        => "",
    // Код раздела
    "SECTION_FIELDS"      => "",
    // Поля разделов
    "SECTION_ID"          => "",
    // ID раздела
    "SECTION_URL"         => "",
    // URL, ведущий на страницу с содержимым раздела
    "SECTION_USER_FIELDS" => "",
    // Свойства разделов
    "SHOW_PARENT_NAME"    => "Y",
    // Показывать название раздела
    "TOP_DEPTH"           => "1",
    // Максимальная отображаемая глубина разделов
    "VIEW_MODE"           => "TILE",
    // Вид списка подразделов
    ],
    false
    );
?>
</section>