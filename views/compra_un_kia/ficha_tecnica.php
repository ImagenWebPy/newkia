<?php
$helper = new Helper();
?>
<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Ficha Técnica</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="<?= URL; ?>" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="#" property="name" typeof="WebPage"><span class="depth" property="name">Compra un Kia</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  2>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Ficha Técnica</strong>
                                <meta property="position" content=  3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="request-a-brochure section">
                <div class="content_detail">
                    <div class="inner request_brochure">
                        <ol class="stepType01 brochureStep">
                            <li class="stepWrap on">
                                <div class="stepbar bar01">
                                    <div class="txt" style="padding-left: 15px;">
                                        <strong>Ficha técnica</strong>
                                        <span class="ex">Por favor consulte el folleto. </span>
                                    </div>
                                </div>
                                <div class="stepCon">
                                    <div class="parsys car-selector"><div class="car-selector section">
                                            <div id="carselector.selector.comp">
                                                <div class="car_category">
                                                    <span class="title">Categoría :</span>
                                                    <div class="category">
                                                        <span class="form_chk">
                                                            <input type="radio" name="radio01">
                                                            <label for="All" class="form_spr radio_box" id="mostrarTodos"><span class="car_spr sort1">Todos</span></label>
                                                        </span>
                                                        <span class="form_chk">
                                                            <input type="radio" name="radio01">
                                                            <label for="Cars" class="form_spr radio_box" id="mostrarAutomoviles"><span class="car_spr sort2">Autómoviles</span></label>
                                                        </span>
                                                        <span class="form_chk">
                                                            <input type="radio" name="radio01">
                                                            <label for="Suv" class="form_spr radio_box" id="mostrarSuv"><span class="car_spr sort4">SUV&amp;Croosover</span></label>
                                                        </span>
                                                        <span class="form_chk">
                                                            <input type="radio" name="radio01">
                                                            <label for="Commercial" class="form_spr radio_box" id="mostrarComerciales"><span class="car_spr sort5">Comerciales</span></label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="car_wrap">
                                                    <div class="car_list" id="divAutomoviles">
                                                        <h5 class="bl_type1">Automóviles</h5>
                                                        <ul class="car_u">
                                                            <?php foreach ($helper->getModelos(1) as $modelo): ?>
                                                                <li class="car_l ng-scope" after-parse-vehicle="">
                                                                    <div class="car_box add_btn">
                                                                        <a href="#carList" id="rio-r" class="car_a" title="<?= strtoupper(utf8_encode($modelo['descripcion'])) ?>" ng-click="choice(car.code, 'carList')">
                                                                            <strong class="car_name ng-binding"><?= strtoupper(utf8_encode($modelo['descripcion'])) ?></strong>
                                                                            <span class="car_img"><img ng-src="<?= THUMB_MENU . $modelo['img_thumb']; ?>" alt="<?= strtoupper(utf8_encode($modelo['descripcion'])) ?>" src="<?= THUMB_MENU . $modelo['img_thumb']; ?>"></span>
                                                                        </a>
                                                                        <div class="car_btnBox">
                                                                            <div>
                                                                                <a href="<?= URL; ?>public/fichas/<?= utf8_encode($modelo['ficha']); ?>" target="_blank" class="btnSmall btnType7 "><span class="btnIcon arrow_r">Ficha técnica</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <div class="car_list" id="divSUV">
                                                        <h5 class="bl_type1">SUV &amp; CROOSOVER</h5>
                                                        <ul class="car_u">
                                                            <?php foreach ($helper->getModelos(1) as $modelo): ?>
                                                                <li class="car_l ng-scope" after-parse-vehicle="">
                                                                    <div class="car_box add_btn">
                                                                        <a href="#carList" id="rio-r" class="car_a" title="<?= strtoupper(utf8_encode($modelo['descripcion'])) ?>" ng-click="choice(car.code, 'carList')">
                                                                            <strong class="car_name ng-binding"><?= strtoupper(utf8_encode($modelo['descripcion'])) ?></strong>
                                                                            <span class="car_img"><img ng-src="<?= THUMB_MENU . $modelo['img_thumb']; ?>" alt="<?= strtoupper(utf8_encode($modelo['descripcion'])) ?>" src="<?= THUMB_MENU . $modelo['img_thumb']; ?>"></span>
                                                                        </a>
                                                                        <div class="car_btnBox">
                                                                            <div>
                                                                                <a href="<?= URL; ?>public/fichas/<?= utf8_encode($modelo['ficha']); ?>" target="_blank" class="btnSmall btnType7 "><span class="btnIcon arrow_r">Ficha técnica</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <div class="car_list" id="divComerciales">
                                                        <h5 class="bl_type1">Comerciales</h5>
                                                        <ul class="car_u">
                                                            <?php foreach ($helper->getModelos(1) as $modelo): ?>
                                                                <li class="car_l ng-scope" after-parse-vehicle="">
                                                                    <div class="car_box add_btn">
                                                                        <a href="#carList" id="rio-r" class="car_a" title="<?= strtoupper(utf8_encode($modelo['descripcion'])) ?>" ng-click="choice(car.code, 'carList')">
                                                                            <strong class="car_name ng-binding"><?= strtoupper(utf8_encode($modelo['descripcion'])) ?></strong>
                                                                            <span class="car_img"><img ng-src="<?= THUMB_MENU . $modelo['img_thumb']; ?>" alt="<?= strtoupper(utf8_encode($modelo['descripcion'])) ?>" src="<?= THUMB_MENU . $modelo['img_thumb']; ?>"></span>
                                                                        </a>
                                                                        <div class="car_btnBox">
                                                                            <div>
                                                                                <a href="<?= URL; ?>public/fichas/<?= utf8_encode($modelo['ficha']); ?>" target="_blank" class="btnSmall btnType7 "><span class="btnIcon arrow_r">Ficha técnica</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>	
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $("#mostrarTodos").click(function () {
            $("#divAutomoviles").css('display','block');
            $("#divSUV").css('display','block');
            $("#divComerciales").css('display','block');
        });
        $("#mostrarAutomoviles").click(function () {
            $("#divAutomoviles").css('display','block');
            $("#divSUV").css('display','none');
            $("#divComerciales").css('display','none');
        });
        $("#mostrarSuv").click(function () {
            $("#divAutomoviles").css('display','none');
            $("#divSUV").css('display','block');
            $("#divComerciales").css('display','none');
        });
        $("#mostrarComerciales").click(function () {
            $("#divAutomoviles").css('display','none');
            $("#divSUV").css('display','none');
            $("#divComerciales").css('display','block');
        });
    });
</script>