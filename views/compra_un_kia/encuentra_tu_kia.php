<?php
$helper = new Helper();
$sucursales = $helper->getSucursales();
?>
<div id="container">    
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
                                            <?php
                                            foreach ($sucursales as $key => $item):
                                                $classCenterOn = '';
                                                if ($key == 0)
                                                    $classCenterOn = 'center_on';
                                                ?>
                                                <li class="ng-scope">
                                                    <a class="dealer_a <?= $classCenterOn; ?>" onclick="showMarker(<?= $key; ?>);return!1;">
                                                        <div class="where"><span class="map_spr map_pin"></span></div>
                                                        <dl class="info">
                                                            <dt class="ng-binding"><?= utf8_encode($item['sucursal']); ?></dt>
                                                            <dd ng-hide="!item.addr" class="ng-binding"><?= utf8_encode($item['direccion']); ?></dd>
                                                            <dd ng-hide="!item.phone" class="ng-binding">Teléfono: <?= utf8_encode($item['telefono']); ?></dd>
                                                            <dd ng-hide="!item.fax" class="ng-binding">Horario Atención: <?= utf8_encode($item['horario_atencion']); ?></dd>
                                                        </dl>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeViyTjOCPoQoWSYSUQ22tQfLp9ocUlI&callback=initMap"
type="text/javascript"></script>
<script type="text/javascript">
                                                            markers = [
<?php foreach ($sucursales as $item): ?>
                                                                    {"nombre": "<strong><?= utf8_encode($item['sucursal']); ?></strong><br><?= utf8_encode($item['direccion']); ?>", "lat": <?= $item['latitud'] ?>, "lng": <?= $item['longitud'] ?>},
<?php endforeach; ?>
                                                            ];


                                                            marker_list = [];

                                                            function initMap() {
                                                                var myLatlng = new google.maps.LatLng(markers[0].lat, markers[0].lng);
                                                                var mapOptions = {
                                                                    zoom: 17,
                                                                    center: myLatlng,
                                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                                }
                                                                map = new google.maps.Map(document.getElementById('mapArea'), mapOptions);


                                                                // Display multiple markers on a map
                                                                var infoWindow = new google.maps.InfoWindow(), marker, i;

                                                                for (var i in markers) {
                                                                    var pos = new google.maps.LatLng(markers[i].lat, markers[i].lng);
                                                                    marker = new google.maps.Marker({
                                                                        position: pos,
                                                                        map: map,
                                                                        draggable: true,
                                                                        icon: '../../public/img/kia-marker.png'
                                                                    });
                                                                    marker_list.push(marker);
                                                                }
                                                            }

                                                            function showMarker(n) {
                                                                if (typeof infowindow != 'undefined') {
                                                                    infowindow.close();
                                                                }
                                                                var pos = new google.maps.LatLng(markers[n].lat, markers[n].lng);
                                                                infowindow = new google.maps.InfoWindow({position: pos, content: markers[n].nombre});
                                                                infowindow.open(map, marker_list[n]);
                                                                map.setCenter(pos);
                                                            }


</script>