<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>ACERCA DE KIA</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="<?= URL; ?>" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="#" property="item" typeof="WebPage"><span class="depth" property="name">Experiencia</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  2>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Sostenibilidad</strong>
                                <meta property="position" content=  4>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="sustainability section">
                <div class="content_detail">
                    <!-- Experience KIA -->
                    <div class="ex_kiaWrap">
                        <?= $this->headerBar; ?>        
                        <div class="ex_visual sustainability">
                            <div class="text0 parbase conversation_cpnt">
                                <strong>INFORME DE SOSTENIBILIDAD</strong>
                            </div>
                            <span>
                                MOVE es el nombre de nuestro informe de sostenibilidad. <br />Un nombre que tiene su significado en un solo movimiento capaz de hacer una diferencia positiva en el mundo a través de los autos.
                            </span>
                        </div>
                        <div class="exkia_inner">
                            <div class="excon_tit d-onScreen">
                                <!-- GT SEO 20150828 h4 > h2-->
                                <h2>
                                    Informe de sostenibilidad
                                </h2>
                            </div>
                            <div class="sustain_list">
                                <div class="major_cont d-onScreen">
                                    <p class="img"><img src="<?= URL; ?>public/img/F200006043_01.jpg" alt="Informe de Sustentabilidad 2016 thumnail"></p>
                                    <!-- GT SEO 20150828 strong > h3-->
                                    <h3>Informe de Sustentabilidad 2016</h3>
                                    <p class="txt">MOVE’, el nombre de este informe anual de sustentabilidad, representa el movimiento de Kia Motors hacia la incorporación de cambios positivos en el mundo. Desde 2003, Kia Motors ha publicado un informe de sustentabilidad anual para informar a las partes interesadas sobre el progreso de la compañía en el crecimiento sustentable y para demostrar nuestro compromiso continuo con la práctica y la mejora de la gestión de sustentabilidad.</p>
                                    <a href="<?= URL; ?>public/archivos/<?= $this->informesSostenibilidad[0]['archivo']; ?>" download="<?= $this->informesSostenibilidad[0]['archivo']; ?>" type="button" class="btn_download" title="descargar pdf">
                                        Informe de Sustentabilidad 2016 Descargar
                                    </a>
                                </div>
                                <div class="d-onScreen" style="padding: 0 10px 0 10px;">
                                    <ul class="ex_bbsList type02">
                                        <li class="titArea">
                                            <span class="num">Nro.</span>
                                            <span class="tit">Título</span>
                                            <span class="date">Fecha</span>
                                            <span class="file">Archivo</span>
                                        </li>
                                        <?php foreach ($this->informesSostenibilidad as $item): ?>
                                            <li>
                                                <span class="num"><em class="hidden">Número</em><?= $item['id']; ?></span>
                                                <span class="tit"><span><em class="hidden">Título</em><?= utf8_encode($item['titulo']); ?></span></span>
                                                <span class="date"><em class="hidden">Fecha</em><?= date('d-m-Y', strtotime($item['fecha'])); ?></span>
                                                <span class="file"><a href="<?= URL; ?>public/archivos/<?= $item['archivo']; ?>" download="<?= $item['archivo']; ?>" class="btn_download" title="descargar pdf">Descargar</a></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="pg_num_area">
                                        <a href="/co/experience/about-kia/sustainability.html?page=1" title="current page" class="pg_num pg_num_on">1</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Experience KIA -->
                </div>
            </div>
        </div>
    </div> 
</div>
