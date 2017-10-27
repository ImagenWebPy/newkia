<?php
$modelo = $this->datosModelo;
$datos = $this->datosModeloEspecificaciones;
?>
<div id="container">
    <?= $this->headerBarModelos; ?>
    <div class="parsys pipContents"><div class="pip_spec section">
            <div class="dimensions">
                <div class="spec_visual">
                    <div class="spec_data">
                        <!-- GT SEO 20150827 h3 > h1 -->
                        <h1>Dimensiones</h1>
                        <ul class="m_none"> <!-- tab 형식으로 활성화 탭시 li에 on class 추가 -->
                            <li><a href="#" class="btn_slide on">slide</a></li> 
                            <li><a href="#" class="btn_allview">allview</a></li>
                        </ul>
                    </div>
                    <!-- spec_slide_area -->
                    <div class="spec_slide_area">
                        <div class="spec_img">
                            <a href="#" class="spec_next">Sig</a>
                            <ul>
                                <?php foreach ($datos['dimension_img'] as $item): ?>
                                    <li>
                                        <div class="imgArea">
                                            <img title="<?= $item['img_w']; ?>" alt="Kia <?= utf8_encode($modelo['descripcion']); ?> Dimensiones" class="webImg" src="<?= URL; ?>public/img/vehiculos/dimensiones/w/<?= $item['img_w']; ?>">
                                            <img title="<?= $item['img_t']; ?>" alt="Kia <?= utf8_encode($modelo['descripcion']); ?> Dimensiones" class="tabletImg" src="<?= URL; ?>public/img/vehiculos/dimensiones/t/<?= $item['img_t']; ?>">
                                            <img title="<?= $item['img_m']; ?>" alt="Kia <?= utf8_encode($modelo['descripcion']); ?> Dimensiones" class="mobileImg" src="<?= URL; ?>public/img/vehiculos/dimensiones/m/<?= $item['img_m']; ?>">
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="#" class="spec_prev">Ant</a>
                        </div>

                        <div class="control">
                            <ul class="num">
                                <?php
                                $cantDimensionImg = count($datos['dimension_img']);
                                $classDimension = '';
                                for ($i = 1; $i <= $cantDimensionImg; $i++):
                                    if ($i == 1)
                                        $classDimension = 'class="on"';
                                    ?>
                                    <li <?= $classDimension; ?>><a href="#"><?= $i; ?></a></li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- // end spec_slide_area -->

                    <!-- spec_allview_area -->
                    <div class="spec_allview_area" style="display:none">
                        <div class="spec_img">
                            <ul>
                                <li><img title="kia-<?= utf8_encode(strtolower($modelo['descripcion'])); ?>-yd-dimensions-all-view" alt="Kia <?= utf8_encode($modelo['descripcion']); ?> Dimensiones" src="<?= URL; ?>public/img/vehiculos/dimensiones/all/<?= $datos['dimension'][0]['img_all']; ?>"></li>

                            </ul>
                        </div>
                    </div>
                    <!-- //spec_allview_area -->

                </div> <!-- //spec_visual -->
            </div> <!-- //dimensions -->
            <div class="spec_list parsys"><div class="tableWrap section">
                    <div class="tableTit"><strong>DIMENSIONES(mm)</strong></div>
                    <div class="tableFix">
                        <a href="#tableScrollDIMENSIONS(mm)" class="hidden">skip_entry</a>
                        <table class="fixArea">
                            <caption>table fix area</caption>
                            <tbody>
                                <tr><th class="tableTh">CAR</th></tr>
                                <tr><th class="tableTh3">Largo</th></tr>
                                <tr><th class="tableTh3">Ancho</th></tr>
                                <tr><th class="tableTh3">Altura</th></tr>
                                <?php if (!empty($datos['dimension'][0]['distancia_ejes'])): ?>
                                    <tr><th class="tableTh3">Distancia entre ejes</th></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- 웹접근성 때문에 중복을 피하기 위해 tableScroll 수정-->
                    <div class="tableScroll" id="tableScrollDIMENSIONS">
                        <table class="scrollArea" width="319" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="319" height="14"><p>Cerato</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="319" height="14"><p><?= number_format($datos['dimension'][0]['largo'], 3, ',', '.'); ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="319" height="14"><p><?= number_format($datos['dimension'][0]['ancho'], 3, ',', '.'); ?></p>
                                    </td>
                                </tr>
                                <tr><td width="319" height="14"><p><?= number_format($datos['dimension'][0]['altura'], 3, ',', '.'); ?></p>
                                    </td>
                                </tr>
                                <?php if (!empty($datos['dimension'][0]['distancia_ejes'])): ?>
                                    <tr>
                                        <td width="319" height="14"><p><?= number_format($datos['dimension'][0]['distancia_ejes'], 3, ',', '.'); ?></p></td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="pip_engine section">
            <div class="engine">
                <div class="engine_visual">
                    <div class="engine_data">
                        <!-- GT SEO 20150826 h3 >  h2 -->
                        <h2>Motor</h2>
                        <p></p>

                        <ul class="m_none"> <!-- tab 형식으로 활성화 탭시 li에 on class 추가 -->
                            <li><a href="#" class="btn_slide on">slide</a></li> 
                            <li><a href="#" class="btn_allview">allview</a></li>
                        </ul>

                    </div>

                    <div class="engine_slide_area">
                        <a href="#" class="spec_next">Sig</a>
                        <div class="img_wrap">
                            <ul>
                                <?php foreach ($datos['motor'] as $item): ?>
                                    <li>
                                        <div class="engine_contents">
                                            <!-- 20150827 GT SEO div > h3 -->
                                            <h3 class="title"><?= utf8_encode($item['version']) . ' ' . utf8_encode($item['combustible']); ?></h3>
                                            <div class="type"><span>Motor</span><strong><?= utf8_encode($item['tipo_motor']); ?></strong></div>
                                            <ul>
                                                <li class="data1">
                                                    <div class="dataImg">
                                                        <img src="<?= URL; ?>public/img/icon_engine01.png" alt="">
                                                    </div>
                                                    <div class="dataCon">
                                                        <span>Cilandraje (cc)</span>
                                                        <strong><?= utf8_encode($item['cilindraje']); ?></strong>
                                                    </div>
                                                </li>
                                                <li class="data2">
                                                    <div class="dataImg">
                                                        <img src="<?= URL; ?>public/img/icon_engine02.png" alt="">
                                                    </div>
                                                    <div class="dataCon">
                                                        <span>Potencia Max. (hp/rpm)</span>
                                                        <strong><?= utf8_encode($item['potencia_max']); ?></strong>
                                                    </div>
                                                </li>
                                                <li class="data3">
                                                    <div class="dataImg">
                                                        <img src="<?= URL; ?>public/img/icon_engine03.png" alt="">
                                                    </div>
                                                    <div class="dataCon">
                                                        <span>Torque Max.(kg•m/rpm)</span>
                                                        <strong><?= utf8_encode($item['torque_max']); ?></strong>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="img"><img title="<?= utf8_encode($item['version']) . ' ' . utf8_encode($item['combustible']); ?>" alt="Nu 2.0 MPi" src="<?= URL; ?>public/img/vehiculos/motor/<?= $item['img']; ?>"></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <a href="#" class="spec_prev">Ant</a>
                        <div class="control">
                            <ul class="num">
                                <?php
                                $cantMotor = count($datos['motor']);
                                $classMotor = '';
                                for ($i = 1; $i <= $cantMotor; $i++):
                                    if ($i == 1)
                                        $classMotor = 'class="on"';
                                    ?>
                                    <li <?= $classMotor; ?>><a href="#"><?= $i; ?></a></li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    </div> <!-- //engine_slide_area -->
                    <div class="engine_allview_area engineType03" style="display:none">
                        <div class="spec_img engine_spec_img">
                            <a href="#" class="spec_next">Sig</a>
                            <ul class="cover_ul">
                                <?php
                                for ($i = 1; $i <= $cantMotor; $i++):
                                    $f = $i - 1;
                                    ?>
                                    <li class="img0<?= $i; ?>">
                                        <img title="<?= utf8_encode($datos['motor'][$f]['version']) . ' ' . utf8_encode($datos['motor'][$f]['combustible']); ?>" alt="Nu 2.0 MPi" src="<?= URL; ?>public/img/vehiculos/motor/<?= $datos['motor'][$f]['img']; ?>">
                                        <ul>
                                            <li><strong class="l_b"><?= utf8_encode($datos['motor'][$f]['version']) . ' ' . utf8_encode($datos['motor'][$f]['combustible']); ?></strong></li>
                                            <li><?= utf8_encode($datos['motor'][$f]['cilindraje']); ?> (cc)</li>
                                            <li><?= utf8_encode($datos['motor'][$f]['potencia_max']); ?> (hp/rpm)</li>
                                            <li><?= utf8_encode($datos['motor'][$f]['torque_max']); ?> (kg•m/rpm)</li>
                                        </ul>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- //engine_allview_area -->
                    <!-- // 엔진이 1개일경우 -->
                </div> <!-- //spec_visual -->

            </div> <!-- //engine -->
            <div class="spec_list parsys"><div class="tableWrap section">
                    <div class="tableTit"><strong>Motor</strong></div>
                    <div class="tableFix">
                        <a href="#tableScrollENGINE" class="hidden">skip_entry</a>
                        <table class="fixArea">
                            <caption>table fix area</caption>
                            <tbody>
                                <tr><th class="tableTh"></th></tr>
                                <tr><th class="tableTh3">Cilindraje (cc)</th></tr>
                                <tr><th class="tableTh3">Potencia Max. (hp/rpm)</th></tr>
                                <tr><th class="tableTh3">Torque Max. (kg•m/rpm)</th></tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- 웹접근성 때문에 중복을 피하기 위해 tableScroll 수정-->
                    <div class="tableScroll" id="tableScrollENGINE">
                        <table class="scrollArea" width="429" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <?php for ($i = 0; $i <= count($datos['motor']) - 1; $i++): ?>
                                        <td><p><b><?= utf8_encode($datos['motor'][$i]['version']) . ' ' . utf8_encode($datos['motor'][$i]['combustible']); ?></b></p></td>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <?php for ($i = 0; $i <= count($datos['motor']) - 1; $i++): ?>
                                        <td><?= utf8_encode($datos['motor'][$i]['cilindraje']); ?></td>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <?php for ($i = 0; $i <= count($datos['motor']) - 1; $i++): ?>
                                        <td><?= utf8_encode($datos['motor'][$i]['potencia_max']); ?></td>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <?php for ($i = 0; $i <= count($datos['motor']) - 1; $i++): ?>
                                        <td><?= utf8_encode($datos['motor'][$i]['torque_max']); ?></td>
                                    <?php endfor; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="pip_wheel section">
            <div class="wheel">
                <div class="wheel_visual">
                    <div class="wheel_data">
                        <!-- GT SEO 20150827 h3 >  h2 -->
                        <h2>Neumáticos</h2>
                        <p></p>
                        <ul class="m_none"> <!-- tab 형식으로 활성화 탭시 li에 on class 추가 -->
                            <li><a href="#" class="btn_slide on">slide</a></li> 
                            <li><a href="#" class="btn_allview">allview</a></li>
                        </ul>
                    </div>
                    <div class="wheel_slide_area">
                        <a href="#" class="spec_next">Sig</a>
                        <div class="img_wrap">
                            <ul>
                                <?php foreach ($datos['llanta'] as $item): ?>
                                    <li>
                                        <div class="wheel_contents">
                                            <!-- 20150827 GT SEO div > h3 -->
                                            <h5 class="title" style="font-size: 20px;"><?= utf8_encode($item['version']) . ' ' . utf8_encode($item['combustible']); ?></h5>
                                            <h3 class="title"><?= utf8_encode($item['llanta']); ?></h3>
                                        </div>
                                        <div class="img"><img title="15&rdquo; steel wheel " alt="15&rdquo; steel wheel " src="<?= URL; ?>public/img/vehiculos/neumaticos/<?= utf8_encode($item['img']); ?>"></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <a href="#" class="spec_prev">Ant</a>
                        <div class="control">
                            <ul class="num">
                                <?php
                                $cantLlanta = count($datos['llanta']);
                                for ($i = 1; $i <= $cantLlanta; $i++):
                                    $classLlanta = '';
                                    if ($i == 1)
                                        $classLlanta = 'class="on"';
                                    ?>
                                    <li <?= $classLlanta; ?>><a href="#"><?= $i; ?></a></li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    </div> <!-- //wheel_slide_area -->
                    <!--<div class="wheel_allview_area wheelType0" style="display:none">-->			
                    <div class="wheel_allview_area wheelType04" style="display:none">		
                        <div class="spec_img wheel_spec_img">
                            <a href="#" class="spec_next">Sig</a>
                            <ul>	
                                <?php
                                for ($i = 1; $i <= $cantLlanta; $i++):
                                    $f = $i - 1;
                                    ?>
                                    <li class="img0<?= $i; ?>">
                                        <h4><?= utf8_encode($datos['llanta'][$f]['version']) . ' ' . utf8_encode($datos['llanta'][$f]['combustible']); ?></h4>
                                        <img title="<?= utf8_encode($datos['llanta'][$f]['llanta']); ?>" alt="<?= utf8_encode($datos['llanta'][$f]['llanta']); ?>" src="<?= URL; ?>public/img/vehiculos/neumaticos/<?= $datos['llanta'][$f]['img']; ?>">
                                        <p><strong><?= utf8_encode($datos['llanta'][$f]['llanta']); ?></strong> <?= utf8_encode($datos['llanta'][$f]['tipo']) ?></p>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </div>	
                    </div>
                    <!-- //wheel_allview_area -->
                </div>
            </div> <!-- wheel -->
            <div class="spec_list parsys">
            </div>
        </div>
        <div class="parbase disclaimer section">
            <div class="phrase">
                <ul class="parbase_inner">
                    <li>
                        Toda la información e ilustraciones se basan en los datos disponibles en el momento y están sujetos a cambios sin previo aviso.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--cq:includeClientLib categories="apps.kia.default.script"/-->
</div>