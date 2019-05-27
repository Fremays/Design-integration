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
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
<?endif;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="ps_head"><a class="ps_head_link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h2 class="ps_head_h"><?echo $arItem["NAME"]?></h2></a><span class="ps_date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span></div>
    <div class="ps_content">
        <img src="<?=$arItem["DETAIL_PICTURE"]["src"]?>" align="left" alt="<?echo $arItem["NAME"]?>"/>
        <?echo $arItem["PREVIEW_TEXT"];?>
        <div style="clear:both"></div>
    </div>
    </div>
    <?foreach ($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty)?>
            <small>
    <?=$arProperty["NAME"]?>:&nbsp;
    <?if(is_array($arProperty["DISPLAY_VALUE"])):?>
    <?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
    <?else:?>
    <?=$arProperty["DISPLAY_VALUE"];?>
    <?endif;?>
        <?=$arItem["~PROPERTY_LINK_CAT_PREVIEW_TEXT"]?>
        <?=$arItem["~PROPERTY_LINK_CAT_PROPERTY_MATERIAL_VALUE"]?>
        </small>
        <small>
            <?
if(isset($arResult["CAT_ELEM"][$arItem["PROPERTIES"]["LINK_CAT"]["VALUE"]]))
        {
            ?><a href="<?=$arResult["CAT_ELEM"][$arItem["PROPERTIES"]["LINK_CAT"]["VALUE"]["DETAIL_PAGE_URL"]]?>"> <?=$arResult["CAT_ELEM"][$arItem["PROPERTIES"]["LINK_CAT"]["VALUE"]]["NAME"]?></a><?
            ?><br><?=$arResult["CAT_ELEM"][$arItem["PROPERTIES"]["LINK_CAT"]["VALUE"]]["PROPERTY_PRICE_VALUE"]?><?
            ?><br><?=$arResult["CAT_ELEM"][$arItem["PROPERTIES"]["LINK_CAT"]["VALUE"]]["PROPERTY_SIZE_VALUE"]?><?
        }
?>
        </small>
    <?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
<!--    --><?//dump($arResult);?>
