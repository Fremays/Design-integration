<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!-- workarea -->
</div>
</div>
<div class="sb_sidebar">
    <div class="sb_nav">
        <ul>
            <li class="close"><a href=""><span>Каталог</span></a></li>
            <li class="close"><a href=""><span>Кухни</span></a></li>
            <li class="close"><a href=""><span>Гарнитуры</span></a></li>
            <li class="open current">
                <span class="sb_showchild"></span>
                <a href=""><span>Спальни</span></a>
                <ul>
                    <li><a href="">Одноместрые</a></li>
                    <li><a href="">Двухместные</a></li>
                    <li><a href="">Детские</a></li>
                </ul>
            </li>
            <li class="close"><a href=""><span>Кухни</span></a></li>
            <li class="close"><a href=""><span>Гарнитуры</span></a></li>
            <li class="close">
                <span class="sb_showchild"></span>
                <a href=""><span>Спальни</span></a>
                <ul>
                    <li><a href="">Одноместрые</a></li>
                    <li><a href="">Двухместные</a></li>
                    <li><a href="">Детские</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="sb_event">
        <div class="sb_event_header"><h4>Ближайшие события</h4></div>
        <p><a href="">29 августа 2012, Москва</a></p>
        <p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
    </div>
    <div class="sb_action">
        <a href=""><img src="/bitrix/templates/.default/content/11.png" alt=""/></a>
        <h4>Акция</h4>
        <h5><a href="">Мебельная полка всего за 560 Р</a></h5>
        <a href="" class="sb_action_more">Подробнее &rarr;</a>
    </div>
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