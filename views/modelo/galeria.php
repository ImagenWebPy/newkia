<?php
$modelo = $this->datosModelo;
$datos = $this->datosModeloGaleria;

$imgPrincipalInt = '';
$imgPrincipalExt = '';
$delExt = '';
$delInt = '';
foreach ($datos['interior'] as $key => $val) {
    if ($val['principal'] == 1) {
        $delInt = $key;
        $imgPrincipalInt = $val['img_principal'];
    }
}
foreach ($datos['exterior'] as $key => $val) {
    if ($val['principal'] == 1) {
        $delExt = $key;
        $imgPrincipalExt = $val['img_principal'];
    }
}
unset($datos['interior'][$delInt]);
unset($datos['exterior'][$delExt]);
array_splice($datos['interior'], 0, 0);
array_splice($datos['exterior'], 0, 0);
$cantInterior = count($datos['interior']);
$paginInt = ceil($cantInterior / 6);
$cantExterior = count($datos['exterior']);
$paginExt = ceil($cantExterior / 6);
?>
<div id="container">
    <?= $this->headerBarModelos; ?>
    <div id="content" class="parsys pipContents"><div class="pip_gallery section">
            <div class="pip_inner">
                <div class="width_wrap">
                    <!-- 갤러리 선택 -->
                    <div class="gallery_select">
                        <div class="gallery_ext">
                            <img title="Exterior" alt="<?= $modelo['descripcion']; ?> EXTERIOR" src="<?= URL; ?>public/img/vehiculos/imagenes/galeria/<?= $imgPrincipalExt; ?>">
                            <a href="#" class="exterior">
                                <!-- GT SEO 20150827 span > h2 -->
                                <h2>Exterior</h2>(<?= $cantExterior; ?>)
                            </a>
                        </div>
                        <div class="gallery_int">
                            <img title="Interior" alt="<?= $modelo['descripcion']; ?> INTERIOR" src="<?= URL; ?>public/img/vehiculos/imagenes/galeria/<?= $imgPrincipalInt; ?>">
                            <a href="#" class="interior">
                                <!-- GT SEO 20150827 span > h2 -->
                                <h2>Interior</h2>(<?= $cantInterior; ?>)
                            </a>
                        </div>
                    </div>
                    <!-- //end 갤러리 선택 -->

                    <!-- exterior 영역-->

                    <div class="gallery_exterior">
                        <div class="hidden">Exterior fotos</div>
                        <div class="gallery_wrap">
                            <div class="wide_gallery" style="display:none;"> <!-- wide_gallery 영역이 웹, 테블릿에서는 레이어팝업, 모바일에서는 리스트 -->
                                <div class="wide_wrap">
                                    <div class="wideBtnLeft"> <!-- 스크립트에서 img height값 조절 -->
                                        <a href="#" class="wide_prev">Prev</a>
                                    </div>
                                    <div class="img_wrap">
                                        <h3>exterior fotos</h3>
                                        <?php
                                        foreach ($datos['exterior'] as $key => $val):
                                            if ($key == 0)
                                                $displayExt = 'style="display:block;"';
                                            else
                                                $displayExt = 'style="display:none;"';
                                            ?>
                                            <div <?= $displayExt; ?>>
                                                <!--<img title=" " alt=" " src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Gallery/kia-cerato-forte-yd-wide-b-exterior-10-w.jpg" >-->
                                                <picture>
                                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/galeria/w/<?= $val['img_w']; ?>" media="(min-width: 1025px)" alt="<?= URL; ?>public/img/vehiculos/imagenes/galeria/w/<?= $val['img_w']; ?>">
                                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/galeria/t/<?= $val['img_t']; ?>" media="(min-width: 768px)" alt="<?= URL; ?>public/img/vehiculos/imagenes/galeria/t/<?= $val['img_t']; ?>">
                                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/galeria/m/<?= $val['img_m']; ?>" alt="<?= URL; ?>public/img/vehiculos/imagenes/galeria/m/<?= $val['img_m']; ?>">
                                                    <!--[if IE 9]></video><![endif]-->
                                                    <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/galeria/w/<?= $val['img_w']; ?>" alt="<?= URL; ?>public/img/vehiculos/imagenes/galeria/w/<?= $val['img_w']; ?>">
                                                </picture>
                                                <span class="galleryTxt">
                                                </span>
                                            </div>
                                        <?php endforeach; ?>
                                        <a href="#" class="wide_close">Cerrar</a>
                                    </div>
                                    <div class="wideBtnRight" >  <!-- 스크립트에서 img height값 조절 -->
                                        <a href="#" class="wide_next">Next</a>
                                    </div>
                                    <div class="gallery_paging">
                                        <ul>
                                            <?php
                                            foreach ($datos['exterior'] as $key => $val):
                                                if ($key == 0)
                                                    $classExt = 'class="on"';
                                                else
                                                    $classExt = '';
                                                ?>
                                                <li <?= $classExt; ?>><a href="#"></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="screen_wrap">
                                <div class="screen_nav">
                                    <span class="bg_ext">
                                        <span class="title">
                                            <a href="#">
                                                <strong>Exterior</strong>
                                                fotos
                                            </a>
                                        </span>
                                        <span class="paging_dot">
                                            <?php
                                            for ($i = 1; $i <= $paginExt; $i++):
                                                $classPagingExt = '';
                                                if ($i == 1)
                                                    $classPagingExt = 'class="on"';
                                                ?>
                                                <a href="#" <?= $classPagingExt; ?>><?= $i; ?></a>
                                            <?php endfor; ?>
                                        </span>
                                    </span>
                                    <span class="bg_int">
                                        <span class="title">
                                            <a href="#">
                                                <strong>Interior</strong>
                                                fotos
                                            </a>
                                        </span>
                                    </span>
                                </div>
                                <ul class="screen">
                                    <?php for ($i = 0; $i <= 5; $i++): ?>
                                        <?php if (!empty($datos['exterior'][$i])): ?>
                                            <li>
                                                <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');"><img title="<?= $datos['exterior'][$i]['img_w']; ?>" alt="<?= $datos['exterior'][$i]['img_w']; ?>" src="<?= URL; ?>public/img/vehiculos/imagenes/galeria/thumb/<?= $datos['exterior'][$i]['img_thumb']; ?>"></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </ul>
                                <?php
                                if ($paginExt > 1):
                                    #quitamos las imagenes que ya se mostraron
                                    for ($i = 0; $i <= 5; $i++) {
                                        unset($datos['exterior'][$i]);
                                    }
                                    array_splice($datos['exterior'], 0, 0);
                                    $cantThumbExt = count($datos['exterior']);
                                    ?>
                                    <ul class="screen off" style="display:none;">
                                        <?php for ($i = 0; $i <= ($cantThumbExt - 1); $i++): ?>
                                            <?php if (!empty($datos['exterior'][$i])): ?>
                                                <li>
                                                    <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');"><img title="<?= $datos['exterior'][$i]['img_w']; ?>" alt="<?= $datos['exterior'][$i]['img_w']; ?>" src="<?= URL; ?>public/img/vehiculos/imagenes/galeria/thumb/<?= $datos['exterior'][$i]['img_thumb']; ?>"></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>

                        </div> <!-- //gallery_wrap -->
                    </div>
                    <!-- //end exterior 영역-->

                    <!-- interior 영역-->

                    <div class="gallery_interior">
                        <div class="hidden">Interior fotos</div>
                        <div class="gallery_wrap">
                            <div class="wide_gallery" style="display:none"> <!-- wide_gallery 영역이 웹, 테블릿에서는 레이어팝업, 모바일에서는 리스트 -->
                                <div class="wide_wrap">
                                    <div class="wideBtnLeft" style="position:absolute;left:0;top:35px;height:263px"> <!-- 스크립트에서 img height값 조절 -->
                                        <a href="#" class="wide_prev">Prev</a>
                                    </div>
                                    <div class="img_wrap">
                                        <h3>Interior photos</h3>
                                        <!-- interiors.indexOf(node) : 0, interiors.size() : 12 , interiorsM.size() : 12 -->
                                        <?php
                                        foreach ($datos['interior'] as $key => $val):
                                            if ($key == 0)
                                                $displayInt = 'style="display:block;"';
                                            else
                                                $displayInt = 'style="display:none;"';
                                            ?>
                                            <div style="<?= $displayInt; ?>">
                                                <!--<img title="kia-cerato-forte-yd-wide-b-interior-01-w" alt="kia-cerato-forte-yd-wide-b-interior-01-w" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Gallery/kia-cerato-forte-yd-wide-b-interior-01-w.jpg" >-->
                                                <picture>
                                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/galeria/w/<?= $val['img_w']; ?>" media="(min-width: 1025px)" alt="<?= URL; ?>public/img/vehiculos/imagenes/galeria/w/<?= $val['img_w']; ?>">
                                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/galeria/t/<?= $val['img_t']; ?>" media="(min-width: 768px)" alt="<?= URL; ?>public/img/vehiculos/imagenes/galeria/t/<?= $val['img_t']; ?>">
                                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/galeria/m/<?= $val['img_m']; ?>" alt="<?= URL; ?>public/img/vehiculos/imagenes/galeria/m/<?= $val['img_m']; ?>">
                                                    <!--[if IE 9]></video><![endif]-->
                                                    <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/galeria/w/<?= $val['img_w']; ?>" alt="<?= URL; ?>public/img/vehiculos/imagenes/galeria/w/<?= $val['img_w']; ?>">
                                                </picture>
                                                <span class="galleryTxt">
                                                </span>
                                            </div>
                                        <?php endforeach; ?>
                                        <a href="#" class="wide_close">Cerrar</a>
                                    </div>
                                    <div class="wideBtnRight" style="position:absolute;right:0;top:35px;height:263px">  <!-- 스크립트에서 img height값 조절 -->
                                        <a href="#" class="wide_next">Next</a>
                                    </div>
                                    <div class="gallery_paging">
                                        <ul>
                                            <?php
                                            foreach ($datos['interior'] as $key => $val):
                                                if ($key == 0)
                                                    $classInt = 'class="on"';
                                                else
                                                    $classInt = '';
                                                ?>
                                                <li <?= $classInt; ?>><a href="#"></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="screen_wrap">
                                <div class="screen_nav">
                                    <span class="bg_ext">
                                        <span class="title">
                                            <a href="#">
                                                <strong>Exterior</strong>
                                                fotos
                                            </a>
                                        </span>
                                    </span>
                                    <span class="bg_int">
                                        <span class="title">
                                            <a href="#">
                                                <strong>Interior</strong>
                                                fotos
                                            </a>
                                        </span>
                                        <span class="paging_dot">
                                            <?php
                                            for ($i = 1; $i <= $paginInt; $i++):
                                                $classPagingInt = '';
                                                if ($i == 1)
                                                    $classPagingInt = 'class="on"';
                                                ?>
                                                <a href="#" <?= $classPagingInt; ?>><?= $i; ?></a>
                                            <?php endfor; ?>
                                        </span>
                                    </span>
                                </div>
                                <ul class="screen">
                                    <?php for ($i = 0; $i <= 5; $i++): ?>
                                        <?php if (!empty($datos['interior'][$i])): ?>
                                            <li>
                                                <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');"><img title="<?= $datos['interior'][$i]['img_w']; ?>" alt="<?= $datos['interior'][$i]['img_w']; ?>" src="<?= URL; ?>public/img/vehiculos/imagenes/galeria/thumb/<?= $datos['interior'][$i]['img_thumb']; ?>"></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </ul>
                                <?php
                                if ($paginInt > 1):
                                    #quitamos las imagenes que ya se mostraron
                                    for ($i = 0; $i <= 5; $i++) {
                                        unset($datos['interior'][$i]);
                                    }
                                    array_splice($datos['interior'], 0, 0);
                                    $cantThumbExt = count($datos['interior']);
                                    ?>
                                    <ul class="screen off" style="display:none;">
                                        <?php for ($i = 0; $i <= ($cantThumbExt - 1); $i++): ?>
                                            <?php if (!empty($datos['interior'][$i])): ?>
                                                <li>
                                                    <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');"><img title="<?= $datos['interior'][$i]['img_w']; ?>" alt="<?= $datos['interior'][$i]['img_w']; ?>" src="<?= URL; ?>public/img/vehiculos/imagenes/galeria/thumb/<?= $datos['interior'][$i]['img_thumb']; ?>"></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div> <!-- //gallery_wrap -->
                    </div>
                    <!-- //end interior 영역-->
                </div> <!-- //width_wrap -->
            </div> <!-- //pip_inner -->
            <script type="text/javascript">
                var AllTagTxt = $(".galleryTxt > p").add($(".galleryTxt > strong"));
                var blackTxt = [];
                var whiteTxt = [];
                $(document).ready(function () {
                    if ($(window).width() < 767) {
                        AllTagTxt.removeClass("shadowWhite").removeClass("shadowBlack");
                    }
                    AllTagTxt.each(function (i) {
                        if (AllTagTxt.eq(i).hasClass("shadowWhite"))
                            whiteTxt.push(AllTagTxt.eq(i));
                        else if (AllTagTxt.eq(i).hasClass("shadowBlack"))
                            blackTxt.push(AllTagTxt.eq(i));
                    });
                });
                $(window).resize(function () {
                    if ($(window).width() < 767) {
                        AllTagTxt.removeClass("shadowWhite").removeClass("shadowBlack");
                    } else {
                        $(whiteTxt).each(function (i) {
                            whiteTxt[i].addClass("shadowWhite");
                        });
                        $(blackTxt).each(function (i) {
                            blackTxt[i].addClass("shadowBlack");
                        });
                    }
                });
            </script>
        </div>
    </div>
    <!--cq:includeClientLib categories="apps.kia.default.script"/-->
</div>