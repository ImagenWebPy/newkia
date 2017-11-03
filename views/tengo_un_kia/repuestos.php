<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys">
            <?= $this->headerUrlCentroServicios; ?>
            <div class="brochure_down content_detail section">
                <div class="content_detail">
                    <!-- service and care -->
                    <div class="inner service_location">
                        <!-- 20141219 hyj 아이콘 클래스명 변경 -->
                        <?= $this->headerCentroServicios; ?>
                        <!-- //20141219 hyj 아이콘 클래스명 변경 -->

                        <!-- Parts -->
                        <div class="con_box">
                            <?php foreach ($this->repuestos as $item): ?>
                                <div class="parbase semantic-markup txt_parts">
                                    <h5 class="bl_type1"><?= utf8_encode($item['titulo']); ?></h5> 
                                    <div class="txt_desc4">
                                        <?= utf8_encode($item['contenido']); ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- //Location -->
                    </div>
                    <!-- //service and care -->
                </div>
            </div>
        </div>
    </div>
</div>