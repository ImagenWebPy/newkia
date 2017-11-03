<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys">
            <?= $this->headerUrlCentroServicios; ?>
            <div class="brochure_down content_detail section">
                <div class="content_detail">
                    <div class="inner service_location">
                        <?= $this->headerCentroServicios; ?>
                        <h4 class="hidden">Location</h4>
                        <div class="con_box location_result" ng-controller="servicecare.location.list" ng-show="currentTab == 'list'">
                            <div class="location_listview">
                                <h6 class="hidden">LISTADO</h6>
                                <table class="table_type3 location_table">
                                    <colgroup>
                                        <col style="width:17%">
                                        <col style="width:auto">
                                        <col style="width:19%">
                                        <col style="width:222px;text-align:center">
                                        <col style="width:19%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th scope="col">Ciudad</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Dirección</th>
                                            <th scope="col">Teléfono</th>
                                            <th scope="col">Correo Electrónico</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($this->listadoTalleres as $item): ?>
                                            <tr>
                                                <td><?= utf8_encode($item['ciudad']); ?></td>
                                                <td><?= utf8_encode($item['taller']); ?></td>
                                                <td><?= utf8_encode($item['direccion']); ?></td>
                                                <td><?= utf8_encode($item['telefono']); ?></td>
                                                <td><?= utf8_encode($item['email']); ?></td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>	
                        </div>			
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>