<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Портфолио. Магазин аквариумов juwel-aquarium.ru");
$APPLICATION->SetPageProperty("keywords", "Портфолио, аквариумы, аквариумы Juwel");
$APPLICATION->SetPageProperty("description", "Портфолио. Аквариумы и вся аквариумистика в магазине аквариумов juwel-aquarium.ru. Выставочный зал, интернет-магазин. Аквариумное оборудование, декорации, рыбки, растения");


$iblock = iblock_getIblockInfo('portfolio');
?>

<?$APPLICATION->IncludeComponent("bitrix:news", "portfolio", array(
	"IBLOCK_TYPE" => $iblock["IBLOCK_TYPE_ID"],
	"IBLOCK_ID" => $iblock["ID"],
	"NEWS_COUNT" => "100",
	"USE_SEARCH" => "N",
	"USE_RSS" => "N",
	"USE_RATING" => "N",
	"USE_CATEGORIES" => "N",
	"USE_REVIEW" => "N",
	"USE_FILTER" => "N",
	"SORT_BY1" => "SORT",
	"SORT_ORDER1" => "ASC",
	"SORT_BY2" => "NAME",
	"SORT_ORDER2" => "ASC",
	"CHECK_DATES" => "Y",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/portfolio/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "84600",
	"CACHE_FILTER" => "Y",
	"CACHE_GROUPS" => "Y",
	"SET_STATUS_404" => "Y",
	"SET_TITLE" => "Y",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"ADD_ELEMENT_CHAIN" => "N",
	"USE_PERMISSIONS" => "N",
	"PREVIEW_TRUNCATE_LEN" => "",
	"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
	"LIST_FIELD_CODE" => array(
		0 => "DETAIL_PICTURE",
		1 => "SORT",
	),
	"LIST_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"DISPLAY_NAME" => "Y",
	"META_KEYWORDS" => "-",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
	"DETAIL_FIELD_CODE" => array(
		0 => "SORT",
		1 => "",
	),
	"DETAIL_PROPERTY_CODE" => array(
		0 => "PRICE",
		1 => "DESIGN_DESC",
	),
	"DETAIL_DISPLAY_TOP_PAGER" => "N",
	"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
	"DETAIL_PAGER_TITLE" => "Страница",
	"DETAIL_PAGER_TEMPLATE" => "",
	"DETAIL_PAGER_SHOW_ALL" => "N",
	"PAGER_TEMPLATE" => "",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Магазины",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"SEF_URL_TEMPLATES" => array(
		"news" => "",
		"section" => "#SECTION_CODE#/",
		"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
	)
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>