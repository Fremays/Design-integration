<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);
?>

<div class="sb_reviewed">
    <img src="/bitrix/templates/.default/content/8.png" class="sb_rw_avatar" alt=""/>
    <span class="sb_rw_name"><?echo $arResult["ITEMS"]['0']["NAME"]?></span>
    <span class="sb_rw_job"><?=$arResult["ITEMS"]["0"]["PROPERTIES"]['position']["VALUE"]?> <?=$arResult["ITEMS"]["0"]['PROPERTIES']['company']['VALUE'];?></span>
    <p><?=$arResult['ITEMS']['0']["PREVIEW_TEXT"]?></p>
    <div class="clearboth"></div>
    <div class="sb_rw_arrow"></div>
</div>
