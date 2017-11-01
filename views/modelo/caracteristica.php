<?php
$modelo = $this->datosModelo;
$datos = $this->datosModeloCaracteristica;
$vehiculo = $this->datosVehiculo;
?>
<div id="container">
    <?= $this->headerBarModelos; ?>
    <!-- /apps/kia-global/components/page/showroom/feature/body -->
    <div id="content" class="parsys pipContents"><div class="keyVisualWrap section">
            <div class="keyVisualInner">
                <!-- 이미지 키비쥬얼 영역 -->
                <div class="keyVisual01">
                    <!--                    <div class="keyBtnLeft">
                                            <a href="#">Vista 360&deg;</a>
                                        </div>-->
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

                    <!--                    <div class="keyBtnRight">
                                            <a href="#">Vista 360&deg;</a>
                                        </div>-->

                </div>
                <!-- //이미지 키비쥬얼 영역 -->

                <!-- 360 키비쥬얼 영역 -->
                <!--                <div class="keyVisual02">
                                    <div class="keyBtnLeft">
                                        <a href="#">principal</a>
                                    </div>
                                    <div class="bgArea"></div>
                                    <div class="textArea">
                                        <h3>360<span>&deg;</span> VR</h3>
                                        <ul class="view_inout">
                                            <li class="on"><a href="#">Exterior</a></li>
                                        </ul>
                                         외장 
                                        <div class="choice_color_wr">
                                            <div class="choice_color">
                                                <a href="#" class="color_chip on"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/ico_cerato_yd_UD_L.gif" alt="CLEAR WHITE"></a>
                                                <a href="#" class="color_chip"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/ico_cerato_yd_SWP_L.gif" alt="SNOW WHITE PEARL"></a>
                                                <a href="#" class="color_chip"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/ico_cerato_yd_4SS_L.gif" alt="SILKY SILVER"></a>
                                                <a href="#" class="color_chip"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/ico_cerato_yd_MST_L.gif" alt="METAL STREAM"></a>
                                                <a href="#" class="color_chip"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/ico_cerato_yd_D7U_L.gif" alt="PLANET BLUE"></a>
                                                <a href="#" class="color_chip"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/ico_cerato_yd_K3U_L.gif" alt="GRAVITY BLUE"></a>
                                                <a href="#" class="color_chip"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/ico_cerato_yd_ABP_L.gif" alt="AURORA BLACK"></a>
                                                <a href="#" class="color_chip"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/ico_cerato_yd_K3N_L.gif" alt="RICH ESPRESSO"></a>
                                                <a href="#" class="color_chip"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/ico_cerato_yd_K3R_L.gif" alt="TEMPTATION RED"></a>
                                            </div>
                                            <p class="color_info">CLEAR WHITE</p>                    
                                            <div class="car_view">
                                                <div class="exVrArea">
                                                    <img id="ex360vr_img" src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0000.png" alt="" title=""/>
                                                </div>
                                            </div>
                                            <div class="car_refresh">
                                                <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|360 vr view'; _satellite.track('internal_link');">   
                                                    <img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/img_pip_360Refresh.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        // 외장 
                                    </div>
                                    <div class="keyBtnRight">
                                        <a href="#">principal</a>
                                    </div>
                                </div>-->
                <!-- //360 키비쥬얼 영역 -->
                <!-- 페이징 -->
                <!--                <div class="paging">
                                    <ul>
                                        <li class="on"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                    </ul>
                                </div>-->
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
            <script type="text/javascript">
                var slides = [["http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0000.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0001.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0002.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0003.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0004.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0005.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0006.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0007.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0008.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0009.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0010.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0011.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0012.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0013.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0014.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0015.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0016.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0017.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0018.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0019.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0020.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0021.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0022.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0023.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0024.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0025.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0026.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0027.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0028.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0029.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0030.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0031.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0032.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0033.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0034.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0035.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0036.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0037.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0038.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0039.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0040.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0041.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0042.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0043.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0044.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0045.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0046.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0047.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0048.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0049.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0050.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0051.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0052.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0053.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0054.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0055.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0056.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0057.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0058.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0059.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0060.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0061.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0062.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0063.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0064.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0065.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0066.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0067.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0068.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0069.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0070.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Clear White/UD_L_0071.png"], ["http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0000.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0001.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0002.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0003.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0004.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0005.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0006.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0007.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0008.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0009.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0010.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0011.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0012.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0013.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0014.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0015.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0016.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0017.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0018.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0019.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0020.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0021.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0022.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0023.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0024.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0025.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0026.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0027.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0028.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0029.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0030.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0031.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0032.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0033.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0034.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0035.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0036.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0037.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0038.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0039.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0040.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0041.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0042.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0043.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0044.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0045.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0046.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0047.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0048.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0049.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0050.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0051.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0052.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0053.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0054.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0055.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0056.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0057.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0058.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0059.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0060.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0061.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0062.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0063.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0064.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0065.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0066.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0067.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0068.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0069.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0070.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Snow White Pearl/SWP_L_0071.png"], ["http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0000.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0001.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0002.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0003.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0004.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0005.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0006.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0007.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0008.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0009.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0010.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0011.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0012.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0013.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0014.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0015.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0016.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0017.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0018.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0019.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0020.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0021.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0022.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0023.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0024.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0025.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0026.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0027.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0028.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0029.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0030.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0031.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0032.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0033.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0034.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0035.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0036.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0037.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0038.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0039.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0040.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0041.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0042.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0043.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0044.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0045.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0046.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0047.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0048.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0049.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0050.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0051.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0052.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0053.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0054.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0055.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0056.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0057.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0058.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0059.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0060.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0062.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0061.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0063.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0064.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0065.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0066.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0067.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0068.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0069.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0070.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Silky Silver/4SS_L_0071.png"], ["http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0000.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0001.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0002.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0003.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0004.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0005.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0006.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0007.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0008.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0009.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0010.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0011.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0012.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0013.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0014.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0015.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0016.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0017.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0018.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0019.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0020.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0021.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0022.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0023.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0024.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0025.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0026.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0027.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0028.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0029.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0030.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0031.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0032.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0033.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0034.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0035.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0036.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0037.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0038.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0039.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0040.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0041.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0042.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0043.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0044.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0045.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0046.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0047.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0048.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0049.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0050.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0051.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0052.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0053.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0054.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0055.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0056.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0057.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0058.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0059.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0060.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0061.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0062.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0063.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0064.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0065.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0066.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0067.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0068.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0069.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0070.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Metal Stream/MST_L_0071.png"], ["http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0000.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0001.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0002.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0003.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0004.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0005.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0006.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0007.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0008.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0009.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0010.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0011.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0012.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0013.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0014.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0015.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0016.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0017.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0018.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0019.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0020.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0021.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0022.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0023.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0024.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0025.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0026.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0027.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0028.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0029.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0030.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0031.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0032.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0033.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0034.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0035.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0036.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0037.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0038.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0039.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0040.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0041.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0042.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0043.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0044.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0045.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0046.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0047.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0048.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0049.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0050.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0051.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0052.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0053.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0054.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0055.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0056.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0057.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0058.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0059.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0060.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0061.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0062.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0063.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0064.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0065.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0066.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0067.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0068.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0069.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0070.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Planet Blue/D7U_L_0071.png"], ["http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0000.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0001.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0002.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0003.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0004.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0005.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0006.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0007.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0008.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0009.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0010.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0011.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0012.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0013.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0014.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0015.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0016.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0017.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0018.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0019.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0020.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0021.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0022.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0023.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0024.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0025.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0026.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0027.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0028.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0029.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0030.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0031.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0032.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0033.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0034.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0035.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0036.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0037.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0038.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0039.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0040.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0041.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0042.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0043.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0044.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0045.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0046.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0047.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0048.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0049.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0050.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0051.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0052.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0053.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0054.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0055.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0056.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0057.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0058.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0059.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0060.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0061.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0062.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0063.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0064.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0065.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0066.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0067.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0068.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0069.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0070.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Gravity Blue/K3U_L_0071.png"], ["http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0000.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0001.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0002.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0003.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0004.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0005.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0006.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0007.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0008.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0009.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0010.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0011.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0012.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0013.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0014.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0015.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0016.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0017.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0018.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0019.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0020.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0021.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0022.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0023.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0024.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0025.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0026.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0027.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0028.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0029.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0030.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0031.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0032.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0033.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0034.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0035.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0036.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0037.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0038.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0039.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0040.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0041.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0042.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0043.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0044.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0045.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0046.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0047.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0048.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0049.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0050.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0051.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0052.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0053.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0054.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0055.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0056.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0057.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0058.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0059.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0060.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0061.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0062.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0063.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0064.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0065.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0066.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0067.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0068.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0069.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0070.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Aurora Black/ABP_L_0071.png"], ["http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0000.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0001.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0002.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0003.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0004.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0005.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0006.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0007.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0008.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0009.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0010.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0011.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0012.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0013.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0014.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0015.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0016.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0017.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0018.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0019.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0020.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0021.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0022.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0023.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0024.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0025.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0026.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0027.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0028.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0029.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0030.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0031.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0032.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0033.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0034.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0035.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0036.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0037.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0038.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0039.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0040.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0041.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0042.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0043.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0044.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0045.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0046.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0047.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0048.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0049.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0050.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0051.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0052.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0053.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0054.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0055.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0056.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0057.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0058.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0059.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0060.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0061.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0062.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0063.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0064.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0065.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0066.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0067.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0068.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0069.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0070.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Rich Espresso/K3N_L_0071.png"], ["http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0000.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0001.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0002.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0003.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0004.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0005.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0006.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0007.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0008.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0009.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0010.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0011.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0012.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0013.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0014.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0015.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0016.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0017.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0018.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0019.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0020.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0021.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0022.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0023.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0024.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0025.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0026.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0027.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0028.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0029.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0030.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0031.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0032.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0033.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0034.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0035.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0036.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0037.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0038.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0039.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0040.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0041.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0042.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0043.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0044.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0045.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0046.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0047.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0048.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0049.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0050.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0051.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0052.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0053.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0054.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0055.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0056.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0057.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0058.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0059.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0060.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0061.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0062.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0063.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0064.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0065.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0066.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0067.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0068.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0069.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0070.png", "http://org-www.kia.com/content/dam/kwcms/gt/en/images/showroom/CeratoForte_YD/Features/360vr/360_ex_Temptation Red/K3R_L_0071.png"]];
                var intslides = [];
            </script></div>
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
                            <a href="#" onclick="changeColorEXTERIOR('<?= $i; ?>')"><img alt="<?= $ico; ?>" src="<?= URL; ?>public/img/vehiculos/imagenes/ico/<?= $ico; ?>">
                                <span class="hidden"><?= utf8_encode($datos['exterior'][$f]['titulo']); ?></span>
                            </a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
            <script>
<?php for ($i = 1; $i <= count($datos['exterior']); $i++): ?>
                    var textcolor<?= $i; ?>_EXTERIOR = '000000';
                    var color_sel<?= $i; ?>EXTERIOR = 'shadowWhite';
<?php endfor; ?>
                function changeColorEXTERIOR(code) {
<?php for ($i = 1; $i <= count($datos['exterior']); $i++): ?>
                    if (code == '<?= $i; ?>') {
                    $("div[name='titleClassEXTERIOR']").find("h2").attr("class", color_sel<?= $i; ?>EXTERIOR);
                    $("div[name='titleClassEXTERIOR']").find("h2").attr("style", "color:#" + textcolor<?= $i; ?>_EXTERIOR);
                    }
<?php endfor; ?>
                }
            </script></div>
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
                                <a href="#" onclick="dtmDataLayer.internal_link = 'conversion|showroom|photo view'; _satellite.track('internal_link');">
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
            </div></div>
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
            </div></div>
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
            </div></div>
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
            </div></div>
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
        <div style="min-height:100px;" class="pipLayout section temp06">
            <div class="subInner">
                <ul class="imgList type6">
                    <?php
                    unset($datos['desempeno'][0]);
                    unset($datos['desempeno'][1]);
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
            </div></div>
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
            </div></div>
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
            </div></div>
        <div style="min-height:100px;" class="pipLayout section temp06">
            <div class="subInner">
                <ul class="imgList type6">
                    <?php
                    unset($datos['seguridad'][0]);
                    unset($datos['seguridad'][1]);
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
            </div></div>
        <div class="section pip_build">
            <!-- 차량에 따라 차량명 변동 -->
            <h3 class="build_tit indicTitle">CONOCE TU CERATO</h3>
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
                    <li class="link_li link1"><a href="<?= URL; ?>public/fichas/<?= $modelo['ficha']; ?>" class="bl_typeW_a">Ficha Técnica</a></li>
                    <li class="link_li link2"><a href="http://org-www.kia.com/gt/shopping-tools/request-a-test-drive.html/carKey/cerato-forte" class="bl_typeW_a">Test Drive</a></li>
                    <li class="link_li link3"><a href="http://org-www.kia.com/gt/shopping-tools/find-a-dealer.html/carKey/cerato-forte" class="bl_typeW_a">Encuentra tu Kia</a></li>
                    <li class="link_li link4"><a href="http://org-www.kia.com/gt/shopping-tools/request-a-quote.html/carKey/cerato-forte" class="bl_typeW_a">Cotizar</a></li>
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
                    <li class="on"><!-- 클릭시 class가 on 추가 -->
                        <a href="#" onclick="dtmDataLayer.scrolled_section = 'OVERVIEW'; _satellite.track('scrolled_section');">
                            <span class="indicatorNum">1</span>
                            <span class="indicatorTxt">VISIÓN GENERAL</span>
                        </a>
                    </li>
                    <li><!-- 클릭시 class가 on 추가 -->
                        <a href="#" onclick="dtmDataLayer.scrolled_section = 'EXTERIOR'; _satellite.track('scrolled_section');">
                            <span class="indicatorNum">2</span>
                            <span class="indicatorTxt">EXTERIOR</span>
                        </a>
                    </li>
                    <li><!-- 클릭시 class가 on 추가 -->
                        <a href="#" onclick="dtmDataLayer.scrolled_section = 'INTERIOR';
                            _satellite.track('scrolled_section');">
                            <span class="indicatorNum">3</span>
                            <span class="indicatorTxt">INTERIOR</span>
                        </a>
                    </li>

                    <li><!-- 클릭시 class가 on 추가 -->
                        <a href="#" onclick="dtmDataLayer.scrolled_section = 'HIGHLIGHTS';
                            _satellite.track('scrolled_section');">
                            <span class="indicatorNum">4</span>
                            <span class="indicatorTxt">DESTACADOS</span>
                        </a>
                    </li>

                    <li><!-- 클릭시 class가 on 추가 -->
                        <a href="#" onclick="dtmDataLayer.scrolled_section = 'PERFORMANCE'; _satellite.track('scrolled_section');">
                            <span class="indicatorNum">5</span>
                            <span class="indicatorTxt">DESEMPEÑO</span>
                        </a>
                    </li>

                    <li><!-- 클릭시 class가 on 추가 -->
                        <a href="#" onclick="dtmDataLayer.scrolled_section = 'SAFETY'; _satellite.track('scrolled_section');">
                            <span class="indicatorNum">6</span>
                            <span class="indicatorTxt">SEGURIDAD</span>
                        </a>
                    </li>

                    <li><!-- 클릭시 class가 on 추가 -->
                        <a href="#" onclick="dtmDataLayer.scrolled_section = 'SHOPPING TOOLS'; _satellite.track('scrolled_section');">
                            <span class="indicatorNum">7</span>
                            <span class="indicatorTxt">COMPRA UN KIA</span>
                        </a>
                    </li>

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
