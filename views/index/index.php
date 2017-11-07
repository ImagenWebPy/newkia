<?php
$helper = new Helper();
$slider = $helper->sliderInicio();
?>
<script type="text/javascript">
    (function ($) {
        $(".sch_inp").keydown(function (evt) {
            if (evt.keyCode == 13)
                return false;
        });

        window.$GT = $.extend(window.$GT || {}, {
            topSearch: function (q, obj) {

            }
        });
    })(jQuery);
</script>
<div id="container">
    <div id="content" class="main_inner">
        <div class="main-cpnt page base Main_par">
            <!-- content -->
            <a href="#" class="mainPrev"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/main/btn_main_left.png" alt="prev"></a>
            <div class="parsys Main_select_par">
                <?php foreach ($slider as $item): ?>
                    <div class="parbase main-type-cpnt section">
                        <!-- content -->
                        <div class="main_wrap mainType3">
                            <div class="mainCenterWrap">
                                <div class="mainCenter">
                                    <div class="txtArea">
                                        <p class="subTxt1 " style="color:#000000"><?= utf8_encode($item['titulo']); ?></p>
                                        <h2>
                                            <img src="<?= URL; ?>public/img/vehiculos/logos/<?= $item['logo']; ?>" alt="<?= utf8_encode($item['nombre']); ?>">
                                        </h2>
                                        <p class="subTxt2 " style="color:#000000"><?= utf8_encode($item['descripcion']); ?><br /></p>
                                        <div class="linkArea">
                                            <a href="<?= URL; ?>modelo/caracteristica/<?= $item['id']; ?>/<?= utf8_encode($item['nombre']); ?>" onclick="dtmDataLayer.internal_link = 'promotion|promotion|maincenter|showroom'; _satellite.track('internal_link');"><img src="<?= URL; ?>public/img/btn_main_link1.png" alt="Modelo" title="Modelo"></a>
                                            <a href="http://org-www.kia.com/gt/shopping-tools/request-a-quote.html/carKey/new-sorento" onclick="dtmDataLayer.internal_link = 'promotion|promotion|maincenter|request a brochure'; _satellite.track('internal_link');"><img src="<?= URL; ?>public/img/btn_main_link2.png" alt="Cotizar" title="Cotizar"></a>
                                            <a href="http://org-www.kia.com/gt/shopping-tools/request-a-test-drive.html/carKey/new-sorento" onclick="dtmDataLayer.internal_link = 'promotion|promotion|maincenter|request a test drive'; _satellite.track('internal_link');"><img src="<?= URL; ?>public/img/btn_main_link3.png" alt="Solicitar un Test Drive" title="Solicitar un Test Drive"></a>
                                        </div>
                                    </div>
                                    <span class="imgArea">
                                        <picture>
                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $item['img_w']; ?>" media="(min-width: 1024px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $item['img_t']; ?>" media="(min-width: 768px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $item['img_m']; ?>" media="(min-width: 320px)">
                                            <img src="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $item['img_w']; ?>" alt="">
                                        </picture>
                                    </span>
                                </div>
                            </div>
                            <div class="carusp_Wrap">
                                <div class="carusp mainRolling">
                                    <div class="parsys parsys01_02"><div class="parbase gallery-wrap-cpnt section">
                                            <div class="listWrap">
                                                <ul>
                                                    <li style="display: block;">
                                                        <a href="<?= URL; ?>modelo/galeria/<?= $item['id']; ?>/<?= utf8_encode($item['nombre']); ?>" onclick="dtmDataLayer.internal_link = 'promotion|promotion|contentbox1|gallery'; _satellite.track('internal_link');">
                                                            <span class="txtArea">
                                                                <strong style="color:#000000">GALERÍA</strong>
                                                                <span class="subTxt" style="color:#000000"></span>
                                                            </span>
                                                            <span class="imgArea">
                                                                <picture>
                                                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                                    <source srcset="<?= URL; ?>public/img/slider/<?= $item['img_galeria']; ?>" media="(min-width: 1025px)">
                                                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $item['img_t_galeria']; ?>" media="(min-width: 768px)">
                                                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $item['img_m_galeria']; ?>" media="(min-width: 200px)">

                                                                    <!--[if IE 9]></video><![endif]-->
                                                                    <img src="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $item['img_w_galeria']; ?>" alt="GALLERY">
                                                                </picture>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sales01_Wrap">
                                <div class="sales01">
                                    <div class="parsys parsys01_03"><div class="contbox-cpnt parbase section">
                                            <div class="contBoxWrap">
                                                <a href="<?= URL; ?>public/fichas/<?= $item['ficha']; ?>">
                                                    <span class="txtArea">
                                                        <strong style="color:#FFFFFF">CATALOG</strong>
                                                        <span class="subTxt" style="color:#FFFFFF">Request Catalog<br />for the Kia of your choice. </span>
                                                    </span>
                                                    <span class="imgArea">
                                                        <picture>
                                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                            <source srcset="<?= URL; ?>public/img/img_main_sorentosales01_w1.jpg" media="(min-width: 1024px)">
                                                            <source srcset="<?= URL; ?>public/img/img_main_sorentosales01_t1.jpg" media="(min-width: 768px)">
                                                            <source srcset="<?= URL; ?>public/img/img_main_sorentosales01_m1.jpg" media="(min-width: 200px)">

                                                            <!--[if IE 9]></video><![endif]-->
                                                            <img src="<?= URL; ?>public/img/img_main_sorentosales01_w1.jpg" alt="">
                                                        </picture>
                                                    </span>
                                                </a>
                                            </div>			
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sales03_Wrap">
                                <div class="sales03">
                                    <div class="parsys01_04 parsys"><div class="contbox-cpnt parbase section">
                                            <div class="contBoxWrap">
                                                <a href="<?= URL; ?>compra_un_kia/encuentra_tu_kia">
                                                    <span class="txtArea">
                                                        <strong style="color:#FFFFFF">ENCUENTRA TU SUCURSAL</strong>
                                                    </span>
                                                    <span class="imgArea">
                                                        <picture>
                                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                            <source srcset="<?= URL; ?>public/img/img_main_sorentosales02_w1.jpg" media="(min-width: 1024px)">
                                                            <source srcset="<?= URL; ?>public/img/img_main_sorentosales02_t1.jpg" media="(min-width: 768px)">
                                                            <source srcset="<?= URL; ?>public/img/img_main_sorentosales02_m1.jpg" media="(min-width: 200px)">

                                                            <!--[if IE 9]></video><![endif]-->
                                                            <img src="<?= URL; ?>public/img/img_main_sorentosales02_w1.jpg" alt="">
                                                        </picture>
                                                    </span>
                                                </a>
                                            </div>			
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="global_Wrap">
                                <div class="global mainRolling">
                                    <div class="parsys01_05 parsys"><div class="parbase list-wrap-cpnt section">
                                            <div class="listWrap">
                                                <ul>
                                                    <li style="display: block;">
                                                        <a href="#">
                                                            <span class="txtArea">
                                                                <strong style="color:#FFFFFF"></strong>
                                                                <span class="subTxt" style="color:#FFFFFF"></span>
                                                            </span>
                                                            <span class="imgArea">
                                                                <picture>
                                                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                                    <source srcset="<?= URL; ?>public/img/slider/<?= $item['img_banner_w']; ?>" media="(min-width: 1025px)">
                                                                    <source srcset="<?= URL; ?>public/img/slider/<?= $item['img_banner_t']; ?>" media="(min-width: 768px)">
                                                                    <source srcset="<?= URL; ?>public/img/slider/<?= $item['img_banner_m']; ?>" media="(min-width: 200px)">
                                                                    <!--[if IE 9]></video><![endif]-->
                                                                    <img src="<?= URL; ?>public/img/slider/<?= $item['img_banner_w']; ?>" alt="">
                                                                </picture>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="pagingNum">
                <span>1</span>/2
            </div>
            <a href="#" class="mainNext"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/main/btn_main_right.png" alt="next"></a>
            <!-- //end main_inner -->
        </div>
    </div>
</div>