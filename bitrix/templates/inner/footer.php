<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!-- workarea -->
</div>
</div>
<div class="sb_sidebar">
    <?
    $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "left_multilevel1",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "COMPONENT_TEMPLATE" => "left_multilevel1",
            "DELAY" => "N",
            "MAX_LEVEL" => "2",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "left",
            "USE_EXT" => "N",
            "MENU_THEME" => "site"
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "inc1",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/logo1.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "stock",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(0=>"",1=>"",),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "7",
            "IBLOCK_TYPE" => "Promotions",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "20",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(0=>"",1=>"",),
            "SET_BROWSER_TITLE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
        )
    );?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "sect",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/logo.php"
        )
    );?>
    <div class="sb_reviewed">
        <img src="/bitrix/templates/.default/content/8.png" class="sb_rw_avatar" alt=""/>
        <span class="sb_rw_name">Сергей Антонов</span>
        <span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
        <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
        <div class="clearboth"></div>
        <div class="sb_rw_arrow"></div>
    </div>
</div>
<div class="clearboth"></div>
</div>
</div>

<?include_once($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/footer.php");?>
</div>
</body>
</html>