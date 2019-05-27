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
<div class="sb_action">
    <a href="<?=$_REQUEST["DOCUMENT_ROOT"]."/".$arResult["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"]["0"]["PREVIEW_PICTURE"]["SRC"]?>" alt=""/></a>
    <h4><?echo $arResult["ITEMS"]["0"]["NAME"]?></h4>
    <h5><a href="<?=$arResult['ITEMS']['0']["DETAIL_PAGE_URL"]?>"><?echo $arResult["ITEMS"]["0"]["PREVIEW_TEXT"];?></a></h5>
    <a href="<?=$arResult['ITEMS']['0']["DETAIL_PAGE_URL"]?>" class="sb_action_more">Подробнее &rarr;</a>
</div>


