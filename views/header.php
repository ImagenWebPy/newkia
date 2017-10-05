<?php
$helper = new Helper();
$pagina = $helper->getPage();
$classWrap = "";
if (!empty($pagina[1])) {
    switch ($pagina[1]) {
        case 'modelo':
            $classWrap = "pip_wrap";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Kia Motors Global | Sedans, Hatchbacks, SUVs & MPVs</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="keywords" content="">
        <meta name="title" content="Kia Motors Global | Sedans, Hatchbacks, SUVs & MPVs" />
        <meta name="description" content="Explore Kia’s wide range of cars from sedans to hatchback, hybrid to SUVs etc. Request a test drive, locate a dealer, download brochures & do more.">
        <link rel="shortcut icon" href="http://org-www.kia.com/etc/designs/kia/favicon.ico" type="image/x-icon"> 
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
        <meta name="robots" content="NOODP, NOYDIR">
        <meta name="kia_metrics_pagename" content="main">
        <link rel="canonical" href="<?= URL; ?>">
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="Kia_Motors" />
        <meta name="twitter:title" content="Kia Motors Global | Sedans, Hatchbacks, SUVs & MPVs" />
        <meta name="twitter:description" content="Explore Kia’s wide range of cars from sedans to hatchback, hybrid to SUVs etc. Request a test drive, locate a dealer, download brochures & do more." />
        <meta name="twitter:image" content="" />
        <meta property="og:site_name" content="KIA" />
        <meta property="og:title" content="Kia Motors Global | Sedans, Hatchbacks, SUVs & MPVs" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="Explore Kia’s wide range of cars from sedans to hatchback, hybrid to SUVs etc. Request a test drive, locate a dealer, download brochures & do more." />
        <meta property="og:image" content="" />
        <meta itemprop="name" content="Kia Motors Global | Sedans, Hatchbacks, SUVs & MPVs">
        <meta itemprop="description" content="Explore Kia’s wide range of cars from sedans to hatchback, hybrid to SUVs etc. Request a test drive, locate a dealer, download brochures & do more.">
        <meta itemprop="image" content="">
        <script type="text/javascript" src="http://org-www.kia.com/etc/designs/kia-global/clientlib/js/lib.js"></script>
        <script type="text/javascript" src="<?= URL; ?>public/js/angular.js"></script> 
        <script type="text/javascript" src="<?= URL; ?>public/js/angular-common-global.js"></script> 
        <script type="text/javascript" src="<?= URL; ?>public/js/angular-sanitize-1.0.0.js"></script>
        <link rel="stylesheet" href="<?= URL; ?>public/css/clientlib.min.css" type="text/css">
        <script type="text/javascript" src="<?= URL; ?>public/js/clientlib.min.js"></script>
        <?php
        #cargamos los css de las vistas
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/' . $css . '" type="text/css">';
            }
        }
        if (isset($this->externalHeader_js)) {
            foreach ($this->externalHeader_js as $external) {
                echo '<script async defer src="' . $external . '"></script>';
            }
        }
        if (isset($this->public_css)) {
            foreach ($this->public_css as $public_css) {
                echo '<link rel="stylesheet" href="' . URL . 'public/' . $public_css . '" type="text/css">';
            }
        }
        if (isset($this->publicHeader_js)) {
            foreach ($this->publicHeader_js as $public_js) {
                echo '<script type="text/javascript" src="' . URL . 'public/' . $public_js . '"></script>';
            }
        }
        ?>
        <script type="text/javascript">
        </script>
        <!--https change--> 
        <script type="text/javascript">
            $(document).ready(function () {
                if ($('.form_select').length > 0) {
                    $('.form_select').sSelect();
                }
            });

            var dtmDataLayer = {};
        </script>
        <!--WCA code ADD 2015.03.24 Start-->
        <script>(function () {
                var _fbq = window._fbq || (window._fbq = []);
                if (!_fbq.loaded) {
                    var fbds = document.createElement('script');
                    fbds.async = true;
                    fbds.src = 'http://connect.facebook.net/en_US/fbds.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(fbds, s);
                    _fbq.loaded = true;
                }
                _fbq.push(['addPixelId', '357795334408363']);
            })();
            window._fbq = window._fbq || [];
            window._fbq.push(['track', 'PixelInitialized', {}]);
        </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=357795334408363&amp;ev=PixelInitialized"/></noscript>
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '865420870164135']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);

        var dtmDataLayer = {};
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=865420870164135&ev=PixelInitialized"/></noscript>
    <!--    WCA code ADD 2015.03.24 End 
        /apps/kia-global/components/main-page/head CSS,JS end -->
    <script src="http://assets.adobedtm.com/24e76ab8fc605d575172ed593e3da587e23b5b9c/satelliteLib-de336c5e353b8b7baba4ef6760554ba93543e53e.js"></script>
</head>
<body>
    <!-- content -->
    <div class="accessbility"><a href="#content">Go to content</a></div>
    <div id="wrap" ng-app="kwcmsAppModuleApp" ng-cloak class="<?= $classWrap; ?>">
        <link rel="shortcut icon" type="image/x-icon" href="http://org-www.kia.com/content/dam/kwcms/mx/es/images/main-mx/favicon.ico">
        <div id="header">
            <div class="header_in">
                <!-- GT SEO 20150827 h1 > div -->
                <div class="logo_h1"><a href="http://org-www.kia.com/gt/main.html" class="lg_a"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/common/lg_kia.png" class="lg_img" alt="KIA"></a></div>
                <a href="#" class="open_gnb"><span class="cmm_spr spr_menu">open menu</span></a>
                <!-- //GNB -->
                <!-- GNB gnb_area open -->
                <div class="gnb_area">
                    <ul class="gnb_nav">
                        <!-- dth1_l dth_on -->
                        <li class="dth1_l"><a href="#" class="dth1_a">Modelos</a>
                            <div class="dth2_u dth_pip">
                                <div class="car_tab">
                                    <a href="#" class="sort_a sort_on"><span class="cmm_tspr spr_sort">Todos los vehículos</span></a>
                                    <a href="#" class="sort_a"><span class="cmm_tspr spr_sort">Automòviles</span></a>
                                    <a href="#" class="sort_a"><span class="cmm_tspr spr_sort">SUV</span></a>
                                    <a href="#" class="sort_a"><span class="cmm_tspr spr_sort">Familiares</span></a>
                                    <a href="#" class="sort_a"><span class="cmm_tspr spr_sort">Commerciales</span></a>
                                </div>
                                <div class="car_grid on">
                                    <strong class="hidden">Todos los Vehìculos</strong>
                                    <ul class="grid_u">
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/picanto.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-picanto.png" alt="Picanto"></span>
                                                <strong class="g_name">PICANTO</strong>
                                                <strong class="g_name">TA_15MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/rio-4-door.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-rio-4-door.png" alt="msg_vehicle_rio-4-door"></span>
                                                <strong class="g_name">RIO 4-DOOR</strong>
                                                <strong class="g_name">UB_4DR_16MY</strong>
                                            </a>
                                        </li>

                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/rio-5-door.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-rio-5-door.png" alt="msg_vehicle_rio-5-door"></span>
                                                <strong class="g_name">RIO 5-DOOR</strong>
                                                <strong class="g_name">UB_5DR_16MY</strong>
                                            </a>
                                        </li>

                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/cerato-forte.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-cerato-forte.png" alt="msg_vehicle_cerato-forte"></span>
                                                <strong class="g_name">CERATO/FORTE</strong>
                                                <strong class="g_name">YD 4DR_15MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/optima.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-optima.png" alt="Optima"></span>
                                                <strong class="g_name">OPTIMA</strong>
                                                <strong class="g_name">TF_15MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/cadenza.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-cadenza.png" alt="Cadenza"></span>
                                                <strong class="g_name">CADENZA</strong>
                                                <strong class="g_name">VG_14MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/kia-quoris.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-quoris.png" alt="msg_vehicle_kia-quoris"></span>
                                                <strong class="g_name">KIA QUORIS</strong>
                                                <strong class="g_name">KH_15MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/soul.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-soul.png" alt="Soul"></span>
                                                <strong class="g_name">SOUL</strong>
                                                <strong class="g_name">PS_16MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/sportage.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-sportage.png" alt="Sportage"></span>
                                                <strong class="g_name">SPORTAGE</strong>
                                                <strong class="g_name">SL_15MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/sorento.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-sorento.png" alt="Sorento"></span>
                                                <strong class="g_name">SORENTO</strong>
                                                <strong class="g_name">XM_14MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/carens-rondo.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-carens-rondo.png" alt="msg_vehicle_carens-rondo"></span>
                                                <strong class="g_name">CARENS/RONDO</strong>
                                                <strong class="g_name">RP_16MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/grand-carnival-yp-rhd.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-carnival-yp.png" alt="msg_vehicle_grand-carnival-yp-rhd"></span>
                                                <strong class="g_name">CARNIVAL_RHD</strong>
                                                <strong class="g_name">YP_16MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/k2700.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-k2700.png" alt="K2700"></span>
                                                <strong class="g_name">K2700</strong>
                                                <strong class="g_name">PU_16MY</strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="car_grid">
                                    <strong class="hidden">Automóviles</strong>
                                    <ul class="grid_u">
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/picanto.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-picanto.png" alt="Picanto"></span>
                                                <strong class="g_name">PICANTO</strong>
                                                <strong class="g_name">TA_15MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/rio-4-door.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-rio-4-door.png" alt="msg_vehicle_rio-4-door"></span>
                                                <strong class="g_name">RIO 4-DOOR</strong>
                                                <strong class="g_name">UB_4DR_16MY</strong>
                                            </a>
                                        </li>

                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/rio-5-door.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-rio-5-door.png" alt="msg_vehicle_rio-5-door"></span>
                                                <strong class="g_name">RIO 5-DOOR</strong>
                                                <strong class="g_name">UB_5DR_16MY</strong>
                                            </a>
                                        </li>

                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/cerato-forte.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-cerato-forte.png" alt="msg_vehicle_cerato-forte"></span>
                                                <strong class="g_name">CERATO/FORTE</strong>
                                                <strong class="g_name">YD 4DR_15MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/optima.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-optima.png" alt="Optima"></span>
                                                <strong class="g_name">OPTIMA</strong>
                                                <strong class="g_name">TF_15MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/cadenza.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-cadenza.png" alt="Cadenza"></span>
                                                <strong class="g_name">CADENZA</strong>
                                                <strong class="g_name">VG_14MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/kia-quoris.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-quoris.png" alt="msg_vehicle_kia-quoris"></span>
                                                <strong class="g_name">KIA QUORIS</strong>
                                                <strong class="g_name">KH_15MY</strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="car_grid">
                                    <strong class="hidden">SUV</strong>		
                                    <ul class="grid_u">
                                        <ul class="grid_u">
                                            <li class="grid_l">
                                                <a href="http://org-www.kia.com/gt/showroom/soul.html" class="grid_box">
                                                    <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-soul.png" alt="Soul"></span>
                                                    <strong class="g_name">SOUL</strong>
                                                    <strong class="g_name">PS_16MY</strong>
                                                </a>
                                            </li>
                                            <li class="grid_l">
                                                <a href="http://org-www.kia.com/gt/showroom/sportage.html" class="grid_box">
                                                    <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-sportage.png" alt="Sportage"></span>
                                                    <strong class="g_name">SPORTAGE</strong>
                                                    <strong class="g_name">SL_15MY</strong>
                                                </a>
                                            </li>
                                            <li class="grid_l">
                                                <a href="http://org-www.kia.com/gt/showroom/sorento.html" class="grid_box">
                                                    <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-sorento.png" alt="Sorento"></span>
                                                    <strong class="g_name">SORENTO</strong>
                                                    <strong class="g_name">XM_14MY</strong>
                                                </a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="car_grid">
                                    <strong class="hidden">Familiares</strong>
                                    <ul class="grid_u">
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/carens-rondo.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-carens-rondo.png" alt="msg_vehicle_carens-rondo"></span>
                                                <strong class="g_name">CARENS/RONDO</strong>
                                                <strong class="g_name">RP_16MY</strong>
                                            </a>
                                        </li>
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/grand-carnival-yp-rhd.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-carnival-yp.png" alt="msg_vehicle_grand-carnival-yp-rhd"></span>
                                                <strong class="g_name">CARNIVAL_RHD</strong>
                                                <strong class="g_name">YP_16MY</strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="car_grid">
                                    <strong class="hidden">Comerciales</strong>
                                    <ul class="grid_u">
                                        <li class="grid_l">
                                            <a href="http://org-www.kia.com/gt/showroom/k2700.html" class="grid_box">
                                                <span class="g_img"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/vehicles/gnb/kia-k2700.png" alt="K2700"></span>
                                                <strong class="g_name">K2700</strong>
                                                <strong class="g_name">PU_16MY</strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>             
                        </li>
                        <li class="dth1_l"><a href="#" class="dth1_a">Compra un Kia</a>
                            <ul class="dth2_u">
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/shopping-tools/build-your-own.html" class="dth2_a">Arma tu Kia</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/shopping-tools/compare-car.html" class="dth2_a">Compara</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/shopping-tools/find-a-dealer.html" class="dth2_a">Encuentra tu Kia</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/shopping-tools/download-a-brochure.html" class="dth2_a">Ficha Técnica</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/shopping-tools/request-a-quote.html" class="dth2_a">Cotizar</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/shopping-tools/request-a-test-drive.html" class="dth2_a">Test Drive</a></li>
                            </ul>
                        </li>
                        <li class="dth1_l"><a href="#" class="dth1_a">Tengo un Kia</a>
                            <ul class="dth2_u">
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/service/service-care.html" class="dth2_a">Servicio PosVenta</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/service/warranty.html" class="dth2_a">Garantía</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/service/book-a-service.html" class="dth2_a">Citas al Taller</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/service/roadside-assistance.html" class="dth2_a">Bienvenido a tu vida "0"</a></li>
                            </ul>
                        </li>
                        <li class="dth1_l"><a href="#" class="dth1_a">Experiencia</a>
                            <ul class="dth2_u">
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/experience/about-kia.html" class="dth2_a">La Empresa</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/experience/about-kia.html" class="dth2_a">Acerca de Kia</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/experience/brand.html" class="dth2_a">Marca</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/experience/kia-social-media.html" class="dth2_a">Redes Sociales</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/experience/sponsorship.html" class="dth2_a">Patrocinador Deportivo</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/experience/career.html" class="dth2_a">Trabaja en Kia</a></li>
                                <li class="dth2_l"><a href="http://org-www.kia.com/gt/experience/awards.html" class="dth2_a">Premios</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="util_area">
                        <ul class="util_menu">
                            <li class="util_l"><a href="http://org-www.kia.com/gt/util/news.html" class="util_a">Noticias</a></li>
                            <li class="util_l"><a href="http://org-www.kia.com/gt/util/promotion.html" class="util_a">Promociones</a></li>
                            <li class="util_l"><a href="http://org-www.kia.com/gt/shopping-tools/find-a-dealer.html" class="util_a">Encuentra tu Kia</a></li>
                            <li class="util_l"><a href="http://org-www.kia.com/gt/util/customer-center/contact-us.html" class="util_a">Contàctanos</a></li>
                        </ul>
                        <div class="util_search">
                            <div class="u_sch_box">
                                <form action="http://org-www.kia.com/gt/util/search.html" method="get">
                                    <input type="text" name="q" id="txtTopSearch" class="sch_inp" title="Search Keyword" placeholder="Buscar">
                                    <button type="submit" class="sch_btn" title="Buscar"><span class="cmm_spr spr_search">Buscar</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="go_build">
                        <a href="http://org-www.kia.com/gt/shopping-tools/build-your-own.html" class="btnMedium btnType1"><span class="cmm_tspr spr_build"><em class="desc">Cotizar tu Kia</em></span></a>
                    </div>
                    <!-- GT SEO 20150827 h2 > div -->
                    <div class="hidden">msg_util_menu</div>
                </div>
                <!-- //GNB -->
            </div>
        </div>