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
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="ps_head"><a class="ps_head_link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h2 class="ps_head_h"><?echo $arItem["NAME"]?></h2></a><span class="ps_date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span></div>
    <div class="ps_content">
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" align="left" alt="<?echo $arItem["NAME"]?>"/>
        <?echo $arItem["PREVIEW_TEXT"];?>
        <div style="clear:both"></div>
    </div>
    <?endforeach;?>
