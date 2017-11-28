<?php
$modelo = $this->datosModelo;
$datos = $this->datosModeloCaracteristica;
$vehiculo = $this->datosVehiculo;
?>
<div id="container">
    <?= $this->headerBarModelos; ?>
    <!-- /apps/kia-global/components/page/showroom/feature/body -->
    <div id="content" class="parsys pipContents">
        <div class="keyVisualWrap section">
            <div class="keyVisualInner">
                <!-- 이미지 키비쥬얼 영역 -->
                <div class="keyVisual01">
                    <div class="keyBtnLeft">
                        <a href="#">Vista 360&deg;</a>
                    </div>
                    <div class="bgArea">
                        <div class="bgInner">
                            <picture>
                                <!--[if IE 9]><video style="display: none;"><![endif]-->
                                <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['general']['img_w']; ?>" media="(min-width: 1025px)">
                                <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $datos['general']['img_t']; ?>" media="(min-width: 768px)">
                                <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $datos['general']['img_m']; ?>" media="(min-width: 320px)">
                                <!--[if IE 9]></video><![endif]-->
                                <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['general']['img_w']; ?>" alt="<?= utf8_encode($datos['general']['titulo']); ?>">
                            </picture>
                        </div>
                    </div>
                    <div class="textArea">
                        <!-- GT SEO 20150826 h3 > h1 -->

                        <h1 class="indicTitle shadowWhite" style="color:#000000;"><?= utf8_encode($datos['general']['titulo']); ?><br /></h1>

                        <!-- GT SEO 20150826 h3 > h1 -->
                        <p class="shadowWhite" style="color:#000000;"><?= utf8_encode($datos['general']['descripcion']); ?></p>
                        <div class="keybtnSmall">

                        </div>
                    </div>
                    <div class="awardArea">
                        <ul></ul>
                    </div>

                    <div class="keyBtnRight">
                        <a href="#">Vista 360&deg;</a>
                    </div>

                </div>
                <!-- //이미지 키비쥬얼 영역 -->
                <!-- 360 키비쥬얼 영역 -->
                <div class="keyVisual02">
                    <div class="keyBtnLeft">
                        <a href="#">principal</a>
                    </div>
                    <div class="bgArea"></div>
                    <div class="textArea">
                        <h3>360<span>&deg;</span> VR</h3>
                        <ul class="view_inout">
                            <li class="on"><a href="#">Exterior</a></li>
                        </ul>
                        <div class="choice_color_wr">
                            <div class="choice_color">
                                <a href="#" class="color_chip on"></a>
                            </div>
                            <p class="color_info"></p>                    
                            <div class="car_view">
                                <div class="exVrArea">
                                    <img id="ex360vr_img" src="<?= URL; ?>public/img/vehiculos/360/<?= $this->view360[0]['img']; ?>" alt="" title=""/>
                                </div>
                            </div>
                            <div class="car_refresh">
                                <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|360 vr view'; _satellite.track('internal_link');">   
                                    <img src="<?= URL; ?>public/img/img_pip_360Refresh.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="keyBtnRight">
                        <a href="#">principal</a>
                    </div>
                </div>
                <!-- //360 키비쥬얼 영역 -->
                <!-- 페이징 -->
                <div class="paging">
                    <ul>
                        <li class="on"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                    </ul>
                </div>
                <!-- //페이징 -->                  
            </div>
            <div class="carInfor">
                <div class="carInforInner">
                    <!-- Information  5개 -->
                    <ul class="inforType4">
                        <li class="infor1 on">
                            <div>
                                <img src="<?= URL; ?>public/img/icon_kv_spec_1.png" alt="">
                                <span class="inforTit">Desde</span>
                                <span class="inforTxt"><?= number_format($vehiculo['precio'], 0, ',', '.'); ?></span>
                            </div>
                        </li>
                        <li class="infor2">
                            <div>
                                <img src="<?= URL; ?>public/img/icon_kv_spec_2.png" alt="">
                                <span class="inforTit">Cilindraje</span>
                                <span class="inforTxt"><?= $vehiculo['cilindraje']; ?></span>
                            </div>
                        </li>
                        <li class="infor3">
                            <div>
                                <img src="<?= URL; ?>public/img/icon_kv_spec_3.png" alt="">
                                <span class="inforTit">Potencia (hp/rpm)</span>
                                <span class="inforTxt"><?= $vehiculo['potencia_max']; ?><br /></span>
                            </div>
                        </li>
                        <li class="infor4">
                            <div>
                                <img src="<?= URL; ?>public/img/icon_kv_spec_5.png" alt="">
                                <span class="inforTit">Garantía</span>
                                <span class="inforTxt"><?= utf8_encode($vehiculo['garantia']); ?></span>
                            </div>
                        </li>
                    </ul>
                    <div class="dots">
                        <ul>
                            <li class="on"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            $imagenes = array();
            foreach ($this->view360 as $item) {
                array_push($imagenes, '"' . URL . 'public/img/vehiculos/360/' . $item['img'] . '"');
            }
            ?>
            <script type="text/javascript">
                var slides = [[<?= implode(',', $imagenes); ?>]];
                var intslides = [];
            </script>
        </div>
        <?php if ($datos['secciones']['EXTERIOR']['estado'] == TRUE): ?>
            <div class="temp01 pipLayout section">
                <div class="mainInner">
                    <div class="textArea" name="titleClassEXTERIOR">
                        <!-- GT SEO 20150826 h3 > h2 -->
                        <h2 class="indicTitle shadowWhite" style="color:#000000;">EXTERIOR</h2>
                    </div>
                    <div class="pipBtnLeft">
                        <a href="#" class="pip_prev">Ant</a>
                    </div>
                    <?php
                    for ($i = 1; $i <= count($datos['exterior']); $i++):
                        $f = $i - 1;
                        if ($i != 1) {
                            $class = '';
                        } else {
                            $class = 'on';
                        }
                        ?>
                        <div class="screenBox screenBox<?= $i . ' ' . $class; ?>">

                            <div class="bgArea">
                                <!--<div class="bgInner"><img title="Add a dose of extraordinary to your life" alt="Add a dose of extraordinary to your life" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-cerato-forte-yd-exterior-05-w.jpg" ></div>-->
                                <div class="bgInner">
                                    <picture>
                                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                                        <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['exterior'][$f]['img_w']; ?>" media="(min-width: 1025px)">
                                        <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $datos['exterior'][$f]['img_t']; ?>" media="(min-width: 768px)">
                                        <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $datos['exterior'][$f]['img_m']; ?>" media="(min-width: 200px)">
                                        <!--[if IE 9]></video><![endif]-->
                                        <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['exterior'][$f]['img_w']; ?>" alt="<?= utf8_encode($datos['exterior'][$f]['titulo']); ?>">
                                    </picture>
                                </div>
                            </div>
                            <div class="textArea">
                                <!-- GT SEO 20150826 h4 > h3-->
                                <h3 class="shadowWhite" style="color:#000000;"><?= utf8_encode($datos['exterior'][$f]['titulo']); ?></h3>
                                <div class="subTxt shadowWhite" style="color:#000000;"><?= utf8_encode($datos['exterior'][$f]['descripcion']); ?></div>
                            </div>
                        </div>
                    <?php endfor; ?>
                    <div class="pipBtnRight">
                        <a href="#" class="pip_next">Sig</a>
                    </div>
                </div>
                <div class="screenPaging">
                    <ul>
                        <?php
                        for ($i = 1; $i <= count($datos['exterior']); $i++):
                            $f = $i - 1;
                            if ($i != 1) {
                                $ico = str_replace('_on', '_off', $datos['exterior'][$f]['ico']);
                                $class = '';
                            } else {
                                $ico = $datos['exterior'][$f]['ico'];
                                $class = 'on';
                            }
                            ?>
                            <li class="<?= $class; ?>">
                                <a class="pointer" onclick="changeColorEXTERIOR('<?= $i; ?>')"><img alt="<?= $ico; ?>" src="<?= URL; ?>public/img/vehiculos/imagenes/ico/<?= $ico; ?>">
                                    <span class="hidden"><?= utf8_encode($datos['exterior'][$f]['titulo']); ?></span>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <script>
    <?php
    for ($i = 1; $i <= count($datos['exterior']); $i++):
        ?>
                        var textcolor<?= $i; ?>_EXTERIOR = '000000';
                        var color_sel<?= $i; ?>EXTERIOR = 'shadowWhite';
    <?php endfor; ?>
                    function changeColorEXTERIOR(code) {
    <?php
    for ($i = 1; $i <= count($datos['exterior']); $i++):
        ?>
                            if (code == '<?= $i; ?>') {
                                $("div[name='titleClassEXTERIOR']").find("h2").attr("class", color_sel<?= $i; ?>EXTERIOR);
                                $("div[name='titleClassEXTERIOR']").find("h2").attr("style", "color:#" + textcolor<?= $i; ?>_EXTERIOR);
                            }
    <?php endfor; ?>
                    }
                </script>
            </div>
            <div style="min-height:100px;" class="pipLayout temp04 section">

                <div class="subInner">
                    <div class="mInner">
                        <div class="pipBtnLeft">
                            <a href="#" class="pip_prev">Ant</a>
                        </div>
                        <?php
                        $cantExt = count($datos['exterior_pie']);
                        if ($cantExt % 2 == 0)
                            $typeExt = 4;
                        else
                            $typeExt = 3;
                        ?>
                        <ul class="imgList type<?= $typeExt; ?>">
                            <?php
                            for ($i = 1; $i <= $cantExt; $i++):
                                $f = $i - 1;
                                if ($i != 1) {
                                    $class = '';
                                } else {
                                    $class = 'on';
                                }
                                ?>
                                <li class="<?= $class; ?>">
                                    <a class="pointer">
                                        <h4 class="imgListTit " style="color:#FFFFFF;"><?= utf8_encode($datos['exterior_pie'][$f]['titulo']); ?></h4>
                                        <div class="description" style="color:#FFFFFF;"><?= utf8_encode($datos['exterior_pie'][$f]['descripcion']); ?></div>
                                        <picture>
                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['exterior_pie'][$f]['img_w']; ?>" media="(min-width: 1025px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $datos['exterior_pie'][$f]['img_t']; ?>" media="(min-width: 768px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $datos['exterior_pie'][$f]['img_m']; ?>" media="(min-width: 200px)">
                                            <!--[if IE 9]></video><![endif]-->
                                            <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['exterior_pie'][$f]['img_w']; ?>" alt="LED rear combination lamps">
                                        </picture>
                                    </a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                        <div class="pipBtnRight">
                            <a href="#" class="pip_next">Sig</a>
                        </div>
                    </div>
                    <div class="imgListPaging">
                        <ul>
                            <?php
                            for ($i = 1; $i <= $cantExt; $i++):
                                $f = $i - 1;
                                if ($i != 1) {
                                    $class = '';
                                } else {
                                    $class = 'on';
                                }
                                ?>
                                <li class="<?= $class; ?>"><a href="#"><?= utf8_encode($datos['exterior_pie'][$f]['titulo']); ?></a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($datos['secciones']['INTERIOR']['estado'] == TRUE): ?>
            <div style="min-height:100px;" class="temp09 pipLayout section">
                <div class="mainInner"> 
                    <div class="textArea">
                        <!-- GT SEO 20150826 h3 > h2 -->
                        <h2 style="color:#000000;" class="indicTitle shadowWhite" >INTERIOR</h2>
                    </div>
                    <div class="screenBox screenBox1 on">
                        <div class="bgArea">
                            <!--<div class="bgInner"><img title="Comfortable surroundings &mdash;
    365 days a year" alt="Comfortable surroundings &mdash;365 days a year" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-cerato-forte-yd-interior-01-w.jpg" ></div>-->
                            <div class="bgInner">
                                <picture>
                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['interior']['img_w']; ?>" media="(min-width: 1025px)">
                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $datos['interior']['img_t']; ?>" media="(min-width: 768px)">
                                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $datos['interior']['img_m']; ?>" media="(min-width: 200px)">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['interior']['img_w']; ?>" alt="<?= utf8_encode($datos['interior']['titulo']); ?>">
                                </picture>
                            </div>
                            <div class="car_play">  
                                <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">
                                    <div class="videoText">
                                        <div class="videoTit shadowWhite"><?= utf8_encode($datos['interior']['titulo']); ?></div>
                                        <div class="videoTxt shadowWhite"><?= utf8_encode($datos['interior']['descripcion']); ?></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="textArea">
                            <!-- GT SEO 20150826 h4 > h3 -->
                            <h3 class="shadowWhite" style="color:#000000;"><?= utf8_encode($datos['interior']['titulo']); ?></h3>
                            <div class="subTxt shadowWhite" style="color:#000000;"><?= utf8_encode($datos['interior']['descripcion']); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="min-height:100px;" class="temp03 pipLayout section">

                <div class="subInner">
                    <div class="mInner">
                        <div class="pipBtnLeft">
                            <a href="#" class="pip_prev">Ant</a>
                        </div>
                        <?php
                        $cantIntPie = count($datos['interior_pie']);
                        if ($cantIntPie % 2 == 0)
                            $typeInt = 4;
                        else
                            $typeInt = 3;
                        ?>
                        <ul class="imgList type<?= $typeInt; ?>">
                            <?php
                            for ($i = 1; $i <= $cantIntPie; $i++):
                                $f = $i - 1;
                                if ($i != 1) {
                                    $class = '';
                                } else {
                                    $class = 'on';
                                }
                                ?>
                                <li class="<?= $class; ?>">
                                    <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">
                                        <!-- GT SEO 20150826 div > h4 -->
                                        <h4 class="imgListTit shadowBlack" style="color:#FFFFFF;"><?= utf8_encode($datos['interior_pie'][$f]['titulo']); ?><br /></h4>
                                        <!-- GT SEO 20150826 div > h4 -->
                                        <div class="description" style="color:#FFFFFF;"><?= utf8_encode($datos['interior_pie'][$f]['descripcion']); ?></div>
                                        <!--<img title="Supervision cluster
        " alt="Supervision cluster" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-pop-cerato-forte-yd-interior-01-w.jpg" >-->
                                        <picture>
                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['interior_pie'][$f]['img_w']; ?>" media="(min-width: 1025px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $datos['interior_pie'][$f]['img_t']; ?>" media="(min-width: 768px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $datos['interior_pie'][$f]['img_m']; ?>" media="(min-width: 200px)">
                                            <!--[if IE 9]></video><![endif]-->
                                            <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['interior_pie'][$f]['img_w']; ?>" alt="<?= utf8_encode($datos['interior_pie'][$f]['titulo']); ?>">
                                        </picture>
                                    </a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                        <div class="pipBtnRight">
                            <a href="#" class="pip_next">Sig</a>
                        </div>
                    </div>
                    <div class="imgListPaging">
                        <ul>
                            <?php
                            for ($i = 1; $i <= $cantIntPie; $i++):
                                $f = $i - 1;
                                if ($i != 1) {
                                    $class = '';
                                } else {
                                    $class = 'on';
                                }
                                ?>
                                <li class="<?= $class; ?>"><a href="#"><?= utf8_encode($datos['interior_pie'][$f]['titulo']); ?><br /></a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($datos['secciones']['HIGHLIGHTS']['estado'] == TRUE): ?>
            <div style="min-height:100px;" class="temp09 pipLayout section">
                <div class="mainInner"> 
                    <div class="textArea">
                        <!-- GT SEO 20150826 h3 > h2 -->
                        <h2 style="color:#FFFFFF;" class="indicTitle shadowBlack">DESTACADOS</h2>
                    </div>
                    <?php
                    foreach ($datos['destacados'] as $item):
                        if ($item['portada'] == 1):
                            ?>
                            <div class="screenBox screenBox1 on">
                                <div class="bgArea">
                                    <!--<div class="bgInner"><img title="Blind spot detection
            " alt="Blind spot detection" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-cerato-forte-yd-highlights-01-w.jpg" ></div>-->
                                    <div class="bgInner">
                                        <picture>
                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $item['img_w']; ?>" media="(min-width: 1025px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $item['img_t']; ?>" media="(min-width: 768px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $item['img_m']; ?>" media="(min-width: 200px)">
                                            <!--[if IE 9]></video><![endif]-->
                                            <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $item['img_w']; ?>" alt="<?= utf8_encode($item['titulo']); ?>">
                                        </picture>
                                    </div>
                                    <div class="car_play">  
                                        <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">

                                            <div class="videoText">
                                                <div class="videoTit shadowBlack"><?= utf8_encode($item['titulo']); ?><br /></div>
                                                <div class="videoTxt shadowBlack"><?= utf8_encode($item['descripcion']); ?></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="textArea">
                                    <!-- GT SEO 20150826 h4 > h3 -->
                                    <h3 class="shadowBlack" style="color:#FFFFFF;"><?= utf8_encode($item['titulo']); ?><br /></h3>
                                    <div class="subTxt shadowBlack" style="color:#FFFFFF;"><?= utf8_encode($item['descripcion']); ?></div>
                                </div>
                            </div>
                            <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
            <div style="min-height:100px;" class="temp03 pipLayout section">
                <div class="subInner">
                    <div class="mInner">
                        <div class="pipBtnLeft">
                            <a href="#" class="pip_prev">Ant</a>
                        </div>
                        <?php
                        $del = '';
                        foreach ($datos['destacados'] as $key => $val) {
                            if ($val['portada'] == 1)
                                $del = $key;
                        }
                        unset($datos['destacados'][$del]);
                        #reindexamos el array
                        array_splice($datos['destacados'], 0, 0);
                        $canDestacados = count($datos['destacados']);
                        if ($canDestacados % 2 == 0)
                            $typeDest = 4;
                        else
                            $typeDest = 3;
                        ?>
                        <ul class="imgList type<?= $typeDest; ?>">
                            <?php
                            for ($i = 1; $i <= $canDestacados; $i++):
                                $f = $i - 1;
                                if ($i != 1) {
                                    $class = '';
                                } else {
                                    $class = 'on';
                                }
                                ?>
                                <li class="<?= $class; ?>">
                                    <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">
                                        <!-- GT SEO 20150826 div > h4 -->
                                        <h4 class="imgListTit shadowBlack" style="color:#FFFFFF;"><?= utf8_encode($datos['destacados'][$f]['titulo']); ?><br /></h4>
                                        <!-- GT SEO 20150826 div > h4 -->
                                        <div class="description" style="color:#FFFFFF;"><?= utf8_encode($datos['destacados'][$f]['descripcion']); ?></div>
                                        <!--<img title="Front and rear parking assist system
        " alt="Front and rear parking assist system" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-pop-cerato-forte-yd-highlights-01-w.jpg" >-->
                                        <picture>
                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['destacados'][$f]['img_w']; ?>" media="(min-width: 1025px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $datos['destacados'][$f]['img_t']; ?>" media="(min-width: 768px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $datos['destacados'][$f]['img_m']; ?>" media="(min-width: 200px)">
                                            <!--[if IE 9]></video><![endif]-->
                                            <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['destacados'][$f]['img_w']; ?>" alt="Front and rear parking assist system">
                                        </picture>
                                    </a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                        <div class="pipBtnRight">
                            <a href="#" class="pip_next">Sig</a>
                        </div>
                    </div>
                    <div class="imgListPaging">
                        <ul>
                            <?php
                            for ($i = 1; $i <= $canDestacados; $i++):
                                $f = $i - 1;
                                if ($i != 1) {
                                    $class = '';
                                } else {
                                    $class = 'on';
                                }
                                ?>
                                <li class="<?= $class; ?>"><a href="#"><?= utf8_encode($datos['destacados'][$f]['titulo']); ?><br /></a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($datos['secciones']['PERFORMANCE']['estado'] == TRUE): ?>
            <div style="min-height:100px;" class="temp09 pipLayout section">
                <div class="mainInner"> 
                    <div class="textArea">
                        <!-- GT SEO 20150826 h3 > h2 -->
                        <h2 style="color:#000000;" class="indicTitle shadowWhite">DESEMPEÑO</h2>
                    </div>
                    <?php
                    foreach ($datos['desempeno'] as $item):
                        if ($item['portada'] == 1):
                            ?>
                            <div class="screenBox screenBox1 on">
                                <div class="bgArea">
                                    <!--<div class="bgInner"><img title="Engineered for you and the environment" alt="Engineered for you and the environment" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-cerato-forte-yd-performance-01-w.jpg" ></div>-->
                                    <div class="bgInner">
                                        <picture>
                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $item['img_w']; ?>" media="(min-width: 1025px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $item['img_t']; ?>" media="(min-width: 768px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $item['img_m']; ?>" media="(min-width: 200px)">
                                            <!--[if IE 9]></video><![endif]-->
                                            <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $item['img_w']; ?>" alt="Engineered for you and the environment">
                                        </picture>
                                    </div>
                                    <div class="car_play">  
                                        <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">

                                            <div class="videoText">
                                                <div class="videoTit shadowWhite"><?= utf8_encode($item['titulo']); ?></div>
                                                <div class="videoTxt shadowWhite"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="textArea">
                                    <!-- GT SEO 20150826 h4 > h3 -->
                                    <h3 class="shadowWhite" style="color:#000000;"><?= utf8_encode($item['titulo']); ?></h3>
                                    <div class="subTxt shadowWhite" style="color:#000000;"></div>
                                </div>
                            </div>
                            <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
            <?php
            $del = '';
            foreach ($datos['desempeno'] as $key => $val) {
                if ($val['portada'] == 1)
                    $del = $key;
            }
            unset($datos['desempeno'][$del]);
#reindexamos el array
            array_splice($datos['desempeno'], 0, 0);
            $canDesempeno = count($datos['desempeno']);
            ?>
            <div style="min-height:100px;" class="pipLayout section temp06">
                <div class="subInner">
                    <ul class="imgList type6">
                        <?php
                        for ($i = 1; $i <= 2; $i++):
                            $f = $i - 1;
                            if ($i != 1) {
                                $class = 'rightArea';
                            } else {
                                $class = 'leftArea on';
                            }
                            ?>
                            <li class="<?= $class; ?>">
                                <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">
                                    <dl>
                                        <dt>
                                            <!--<img title="7-speed DCT (Double Clutch Transmission)" alt="7-speed DCT (Double Clutch Transmission)" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-pop-cerato-forte-yd-performance-01-w.jpg" >-->
                                        <picture>
                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['desempeno'][$f]['img_w']; ?>" media="(min-width: 1025px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $datos['desempeno'][$f]['img_t']; ?>" media="(min-width: 768px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $datos['desempeno'][$f]['img_m']; ?>" media="(min-width: 200px)">
                                            <!--[if IE 9]></video><![endif]-->
                                            <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['desempeno'][$f]['img_w']; ?>" alt="<?= utf8_encode($datos['desempeno'][$f]['titulo']); ?>">
                                        </picture>
                                        </dt>
                                        <dd>
                                            <!-- GT SEO 20150828 div > h4 -->
                                            <h4 class="btmTextTit " style="color:#000000;"><?= utf8_encode($datos['desempeno'][$f]['titulo']); ?></h4>
                                            <div class="btmTextTxt " style="color:#000000;"><?= utf8_encode($datos['desempeno'][$f]['descripcion']); ?></div>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
            <?php
            unset($datos['desempeno'][0]);
            unset($datos['desempeno'][1]);
            if (!empty($datos['desempeno'])):
                ?>
                <div style="min-height:100px;" class="pipLayout section temp06">
                    <div class="subInner">
                        <ul class="imgList type6">
                            <?php
#reindexamos el array
                            array_splice($datos['desempeno'], 0, 0);
                            for ($i = 1; $i <= 2; $i++):
                                $f = $i - 1;
                                if ($i != 1) {
                                    $class = 'rightArea';
                                } else {
                                    $class = 'leftArea on';
                                }
                                ?>
                                <li class="<?= $class; ?>">
                                    <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">
                                        <dl>
                                            <dt>
                                                <!--<img title="7-speed DCT (Double Clutch Transmission)" alt="7-speed DCT (Double Clutch Transmission)" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-pop-cerato-forte-yd-performance-01-w.jpg" >-->
                                            <picture>
                                                <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['desempeno'][$f]['img_w']; ?>" media="(min-width: 1025px)">
                                                <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $datos['desempeno'][$f]['img_t']; ?>" media="(min-width: 768px)">
                                                <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $datos['desempeno'][$f]['img_m']; ?>" media="(min-width: 200px)">
                                                <!--[if IE 9]></video><![endif]-->
                                                <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['desempeno'][$f]['img_w']; ?>" alt="<?= utf8_encode($datos['desempeno'][$f]['titulo']); ?>">
                                            </picture>
                                            </dt>
                                            <dd>
                                                <!-- GT SEO 20150828 div > h4 -->
                                                <h4 class="btmTextTit " style="color:#000000;"><?= utf8_encode($datos['desempeno'][$f]['titulo']); ?></h4>
                                                <div class="btmTextTxt " style="color:#000000;"><?= utf8_encode($datos['desempeno'][$f]['descripcion']); ?></div>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ($datos['secciones']['SAFETY']['estado'] == TRUE): ?>
            <div style="min-height:100px;" class="temp09 pipLayout section">
                <div class="mainInner"> 
                    <div class="textArea">
                        <!-- GT SEO 20150826 h3 > h2 -->
                        <h2 style="color:#FFFFFF;" class="indicTitle shadowBlack">SEGURIDAD</h2>
                    </div>
                    <?php
                    foreach ($datos['seguridad'] as $item):
                        if ($item['portada'] == 1):
                            ?>
                            <div class="screenBox screenBox1 on">
                                <div class="bgArea">
                                    <!--<div class="bgInner"><img title="Body shell
            " alt="Body shell" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-cerato-forte-yd-safety-01-w.jpg" ></div>-->
                                    <div class="bgInner">
                                        <picture>
                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $item['img_w']; ?>" media="(min-width: 1025px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $item['img_t']; ?>" media="(min-width: 768px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $item['img_m']; ?>" media="(min-width: 200px)">
                                            <!--[if IE 9]></video><![endif]-->
                                            <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $item['img_w']; ?>" alt="<?= utf8_encode($item['titulo']); ?>">
                                        </picture>
                                    </div>
                                    <div class="car_play">  
                                        <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">
                                            <div class="videoText">
                                                <div class="videoTit shadowBlack"><?= utf8_encode($item['titulo']); ?><br /></div>
                                                <div class="videoTxt shadowBlack"><?= utf8_encode($item['descripcion']); ?></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="textArea">
                                    <!-- GT SEO 20150826 h4 > h3 -->
                                    <h3 class="shadowBlack" style="color:#FFFFFF;"><?= utf8_encode($item['titulo']); ?><br /></h3>
                                    <div class="subTxt shadowBlack" style="color:#FFFFFF;"><?= utf8_encode($item['descripcion']); ?></div>
                                </div>
                            </div>
                            <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
            <div style="min-height:100px;" class="pipLayout section temp06">
                <div class="subInner">
                    <?php
                    $del = '';
                    foreach ($datos['seguridad'] as $key => $val) {
                        if ($val['portada'] == 1)
                            $del = $key;
                    }
                    unset($datos['seguridad'][$del]);
#reindexamos el array
                    array_splice($datos['seguridad'], 0, 0);
                    $canDesempeno = count($datos['seguridad']);
                    ?>
                    <ul class="imgList type6">
                        <?php
#reindexamos el array
                        array_splice($datos['seguridad'], 0, 0);
                        for ($i = 1; $i <= 2; $i++):
                            $f = $i - 1;
                            if ($i != 1) {
                                $class = 'rightArea';
                            } else {
                                $class = 'leftArea on';
                            }
                            ?>
                            <li class="<?= $class; ?>">
                                <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">
                                    <dl>
                                        <dt>
                                            <!--<img title="Suspension " alt="Suspension " src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-pop-cerato-forte-yd-safety-01-w.jpg" >-->
                                        <picture>
                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['seguridad'][$f]['img_w']; ?>" media="(min-width: 1025px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $datos['seguridad'][$f]['img_t']; ?>" media="(min-width: 768px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $datos['seguridad'][$f]['img_m']; ?>" media="(min-width: 200px)">
                                            <!--[if IE 9]></video><![endif]-->
                                            <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['seguridad'][$f]['img_w']; ?>" alt="<?= utf8_encode($datos['seguridad'][$f]['titulo']); ?>">
                                        </picture>
                                        </dt>
                                        <dd>
                                            <!-- GT SEO 20150828 div > h4 -->
                                            <h4 class="btmTextTit " style="color:#000000;"><?= utf8_encode($datos['seguridad'][$f]['titulo']); ?></h4>
                                            <div class="btmTextTxt " style="color:#000000;"><?= utf8_encode($datos['seguridad'][$f]['descripcion']); ?></div>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <?php
        unset($datos['seguridad'][0]);
        unset($datos['seguridad'][1]);
        if (!empty($datos['seguridad'])):
            ?>
            <div style="min-height:100px;" class="pipLayout section temp06">
                <div class="subInner">
                    <ul class="imgList type6">
                        <?php
#reindexamos el array
                        array_splice($datos['seguridad'], 0, 0);
                        for ($i = 1; $i <= 2; $i++):
                            $f = $i - 1;
                            if ($i != 1) {
                                $class = 'rightArea';
                            } else {
                                $class = 'leftArea on';
                            }
                            ?>
                            <li class="<?= $class; ?>">
                                <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">
                                    <dl>
                                        <dt>
                                            <!--<img title="Flex Steer " alt="Flex Steer " src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/kia-pop-cerato-forte-yd-safety-03-w.jpg" >-->
                                        <picture>
                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['seguridad'][$f]['img_w']; ?>" media="(min-width: 1025px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $datos['seguridad'][$f]['img_t']; ?>" media="(min-width: 768px)">
                                            <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $datos['seguridad'][$f]['img_m']; ?>" media="(min-width: 200px)">
                                            <!--[if IE 9]></video><![endif]-->
                                            <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $datos['seguridad'][$f]['img_w']; ?>" alt="<?= utf8_encode($datos['seguridad'][$f]['titulo']); ?>">
                                        </picture>
                                        </dt>
                                        <dd>
                                            <!-- GT SEO 20150828 div > h4 -->
                                            <h4 class="btmTextTit" style="color:#000000;"><?= utf8_encode($datos['seguridad'][$f]['titulo']); ?></h4>
                                            <div class="btmTextTxt" style="color:#000000;"><?= utf8_encode($datos['seguridad'][$f]['descripcion']); ?></div>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <div class="section pip_build">
            <!-- 차량에 따라 차량명 변동 -->
            <h3 class="build_tit indicTitle">CONOCE TU <?= strtoupper(utf8_encode($datos['general']['titulo'])); ?></h3>
            <p class="build_txt"></p>
            <!--<div class="build_btn"><a href="http://org-www.kia.com/gt/shopping-tools/build-your-own.trim.cerato-forte.html" class="btnMedium btnType1"><span class="cmm_tspr spr_build">Aquí</span></a></div>-->
            <div class="build_car">
                <picture>
                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $modelo['img_w']; ?> " media="(min-width: 1025px)">
                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/t/<?= $modelo['img_t']; ?>" media="(min-width: 768px)">
                    <source srcset="<?= URL; ?>public/img/vehiculos/imagenes/m/<?= $modelo['img_m']; ?>" media="(min-width: 200px)">
                    <!--[if IE 9]></video><![endif]-->
                    <img srcset="<?= URL; ?>public/img/vehiculos/imagenes/w/<?= $modelo['img_w']; ?>" alt="Cerato">
                </picture>
            </div>
            <div class="build_link">
                <ul class="link_lst">
                    <li class="link_li link1"><a href="<?= URL; ?>public/fichas/<?= $modelo['ficha']; ?>" class="bl_typeW_a" target="_blank">Ficha Técnica</a></li>
                    <li class="link_li link2"><a href="<?= URL; ?>compra_un_kia/test_drive" class="bl_typeW_a">Test Drive</a></li>
                    <li class="link_li link3"><a href="<?= URL; ?>compra_un_kia/encuentra_tu_kia" class="bl_typeW_a">Encuentra tu Kia</a></li>
                    <li class="link_li link4"><a href="<?= URL; ?>compra_un_kia/cotizar" class="bl_typeW_a">Cotizar</a></li>
                </ul>
            </div></div>
        <div class="parbase disclaimer section">
            <div class="phrase">
                <ul class="parbase_inner">
                    <li>Cada galería publicada en esta página web, es tomada del catálogo de producto desarrollado por la Corporación Kia Motors Internacional el cual debe ser tomado sólo como referencia.</li>
                    <li>El vehículo presentado hace referencia a la versión full existente en diferentes mercados, el cual podrá tener variaciones locales en opciones y colores, de acuerdo a las estandarizaciones y necesidades de cada país.</li>
                    <li>Se recomienda preguntar por la ficha técnica en el concesionario más cercano y verificar las especificaciones del producto que desea adquirir.</li>
                </ul>
            </div></div>
        <!-- indicator -->
        <div class="indicator">
            <div class="indicator_inner">
                <a href="#" class="indicator_prev masked"><span class="hidden">ant</span></a> <!-- Overview 에서는 보이지 않음 Exterior 에서 부터 보임 기본 class="masked" -->
                <ul>
                    <?php
                    $cantMenu = 0;
                    foreach ($datos['secciones'] as $key => $val):
                        if ($val['estado'] == TRUE):
                            $cantMenu ++;
                            $classOn = "";
                            if ($cantMenu == 1)
                                $classOn = 'on';
                            ?>
                            <li class="<?= $classOn; ?>">
                                <a href="#" onclick="dtmDataLayer.scrolled_section = '<?= $key; ?>'; _satellite.track('scrolled_section');">
                                    <span class="indicatorNum"><?= $cantMenu; ?></span>
                                    <span class="indicatorTxt"><?= $val['titulo']; ?></span>
                                </a>
                            </li>
                            <?php
                        endif;
                    endforeach;
                    ?>
                </ul> 
                <a href="#" class="indicator_next"><span class="hidden">sig</span></a>
                <div class="topBtn"><a href="#"><span class="hidden">Arriba</span></a></div>
            </div>
        </div>
        <!-- //indicator -->
        <!-- 팝업 -->
        <div class="popup_wrap popup">                
            <div class="pop_con">
                <img src="" alt=""/>
                <dl class="img_more">
                    <dt></dt>
                    <dd></dd>
                </dl>
            </div>
            <a href="#" class="closeBtn btnType1"><span class="cmm_spr spr_close2">Close</span></a>
        </div>
        <!-- //팝업 -->
        <!-- 비디오 팝업 -->
        <div class="popup_wrap02 popup">
            <div class="pop_con">
                <div class="youtube">
                    <iframe id="youtubeIframe" width="100%" height="100%" src="" frameborder="0" allowfullscreen title="youtube area"></iframe>
                </div>
                <dl class="img_more">
                    <dt></dt>
                    <dd></dd>
                </dl>
            </div>
            <a href="#" class="closeBtn btnType1"><span class="cmm_spr spr_close2">Close</span></a>
        </div>
        <div class="dimmed"></div>
        <!-- //비디오 팝업 -->
    </div>

    <!-- /apps/kia-global/components/page/showroom/feature/body end -->
</div>
