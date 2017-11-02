<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Encuentra tu Kia</p></h1>
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
                                <strong class="depth current"property="name">Encuentra tu Kia</strong>
                                <meta property="position" content=  3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="section find-a-dealer">
                <div class="content_detail">
                    <div class="inner find_dealer">
                        <div class="con_box location_result" ng-controller="findadealer.map" ng-show="currentTab == 'map'">
                            <div class="location_mapview" ng-show="total > 0">
                                <h6 class="hidden">MAP VIEW</h6>
                                <div class="mapInner">							
                                    <div class="mapArea" id="mapArea">
                                        <div class="parsys mapParsys">
                                            <div class="parbase google-map-list section">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="center_list">
                                    <div class="listInner">
                                        <ul>
                                            <li class="ng-scope">
                                                <a href="javascript:;" class="dealer_a center_on">
                                                    <div class="where"><span class="map_spr map_pin"></span></div>
                                                    <dl class="info">
                                                        <dt class="ng-binding">Asunción: Casa Central:</dt>
                                                        <dd ng-hide="!item.addr" class="ng-binding">Rca. Argentina esq. Isaac Kostianovsky.</dd>
                                                        <dd ng-hide="!item.phone" class="ng-binding">Teléfono: (021) 237 – 7090</dd>
                                                        <dd ng-hide="!item.fax" class="ng-binding">Horario Atención: Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00</dd>
                                                    </dl>
                                                </a>
                                            </li>
                                            <li class="ng-scope">
                                                <a href="javascript:;" class="dealer_a">
                                                    <div class="where"><span class="map_spr map_pin"></span></div>
                                                    <dl class="info">
                                                        <dt class="ng-binding">Asunción: Choferes del Chaco:</dt>
                                                        <dd ng-hide="!item.addr" class="ng-binding">Avda. Choferes del Chaco esq. Capitan Pedro Carpinelli</dd>
                                                        <dd ng-hide="!item.phone" class="ng-binding">Teléfono: (021) 238 9300</dd>
                                                        <dd ng-hide="!item.fax" class="ng-binding">Horario Atención: Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00</dd>
                                                    </dl>
                                                </a>
                                            </li>
                                            <li class="ng-scope">
                                                <a href="javascript:;" class="dealer_a">
                                                    <div class="where"><span class="map_spr map_pin"></span></div>
                                                    <dl class="info">
                                                        <dt class="ng-binding">Centro de Servicios y Repuestos KIA:</dt>
                                                        <dd ng-hide="!item.addr" class="ng-binding">Fernando de la Mora esq. De la Victoria. </dd>
                                                        <dd ng-hide="!item.phone" class="ng-binding">Teléfono: (021) 237 – 7095</dd>
                                                        <dd ng-hide="!item.fax" class="ng-binding">Horario Atención: Lunes a Viernes 07:30 a 18:00, Sábados 07:30 a 12:00</dd>
                                                    </dl>
                                                </a>
                                            </li>
                                            <li class="ng-scope">
                                                <a href="javascript:;" class="dealer_a">
                                                    <div class="where"><span class="map_spr map_pin"></span></div>
                                                    <dl class="info">
                                                        <dt class="ng-binding">División Multimarcas:</dt>
                                                        <dd ng-hide="!item.addr" class="ng-binding">Avda. Fernando de la Mora esq. Ybapuru.</dd>
                                                        <dd ng-hide="!item.phone" class="ng-binding">Teléfono: (021) 237 – 7110</dd>
                                                        <dd ng-hide="!item.fax" class="ng-binding">Horario Atención: Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00</dd>
                                                    </dl>
                                                </a>
                                            </li>
                                            <li class="ng-scope">
                                                <a href="javascript:;" class="dealer_a">
                                                    <div class="where"><span class="map_spr map_pin"></span></div>
                                                    <dl class="info">
                                                        <dt class="ng-binding">Ciudad del Este:</dt>
                                                        <dd ng-hide="!item.addr" class="ng-binding">Ruta Internacional Nro. 7, km 6,5.</dd>
                                                        <dd ng-hide="!item.phone" class="ng-binding">Teléfono: (021) 237 6910</dd>
                                                        <dd ng-hide="!item.fax" class="ng-binding">Horario Atención: Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00</dd>
                                                    </dl>
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
        </div>
    </div>
</div>