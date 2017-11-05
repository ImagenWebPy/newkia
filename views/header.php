<?php
$helper = new Helper();
$pagina = $helper->getPage();
$classWrap = "";
if (!empty($pagina[1])) {
    switch ($pagina[1]) {
        case 'caracteristica':
        case 'galeria':
            $classWrap = "pip_wrap";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title><?= $this->title; ?></title>
        <meta name="keywords" content="">
        <meta name="title" content="<?= $this->title; ?>" />
        <meta name="description" content="Explore Kia’s wide range of cars from sedans to hatchback, hybrid to SUVs etc. Request a test drive, locate a dealer, download brochures & do more.">
        <link rel="shortcut icon" href="<?= URL; ?>public/img/favicon.ico" type="image/x-icon"> 
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
        <meta name="robots" content="NOODP, NOYDIR">
        <meta name="kia_metrics_pagename" content="main">
        <link rel="canonical" href="<?= URL; ?>">
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="<?= $this->meta_sitename; ?>" />
        <meta name="twitter:title" content="<?= $this->title; ?>" />
        <meta name="twitter:description" content="Explore Kia’s wide range of cars from sedans to hatchback, hybrid to SUVs etc. Request a test drive, locate a dealer, download brochures & do more." />
        <meta name="twitter:image" content="" />
        <meta property="og:site_name" content="<?= $this->meta_sitename; ?>" />
        <meta property="og:title" content="<?= $this->title; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="Explore Kia’s wide range of cars from sedans to hatchback, hybrid to SUVs etc. Request a test drive, locate a dealer, download brochures & do more." />
        <meta property="og:image" content="" />
        <meta itemprop="name" content="<?= $this->title; ?>">
        <meta itemprop="description" content="Explore Kia’s wide range of cars from sedans to hatchback, hybrid to SUVs etc. Request a test drive, locate a dealer, download brochures & do more.">
        <meta itemprop="image" content="">
        <script type="text/javascript" src="<?= URL; ?>public/js/lib.js"></script>
        <script type="text/javascript" src="<?= URL; ?>public/js/angular.js"></script> 
        <script type="text/javascript" src="<?= URL; ?>public/js/angular-common-global.js"></script> 
        <script type="text/javascript" src="<?= URL; ?>public/js/angular-sanitize-1.0.0.js"></script>
        <link rel="stylesheet" href="<?= URL; ?>public/css/clientlib.min.css" type="text/css">
        <link rel="stylesheet" href="<?= URL; ?>public/css/custom.css" type="text/css">
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
    <div class="accessbility">
        <a href="#content">Go to content</a>
    </div>
    <div id="wrap" ng-app="kwcmsAppModuleApp" ng-cloak class="<?= $classWrap; ?>">
        <link rel="shortcut icon" type="image/x-icon" href="http://org-www.kia.com/content/dam/kwcms/mx/es/images/main-mx/favicon.ico">
        <div id="header">
            <div class="header_in">
                <!-- GT SEO 20150827 h1 > div -->
                <div class="logo_h1"><a href="<?= URL; ?>" class="lg_a"><img src="<?= URL; ?>public/img/lg_kia.png" class="lg_img" alt="KIA"></a></div>
                <a href="#" class="open_gnb"><span class="cmm_spr spr_menu">open menu</span></a>
                <!-- //GNB -->
                <!-- GNB gnb_area open -->
                <div class="gnb_area">
                    <ul class="gnb_nav">
                        <!-- dth1_l dth_on -->
                        <li class="dth1_l">
                            <a class="dth1_a pointer">Modelos</a>
                            <div class="dth2_u dth_pip">
                                <div class="car_tab">
                                    <a href="#" class="sort_a sort_on"><span class="cmm_tspr spr_sort">Todos los vehículos</span></a>
                                    <?php foreach ($helper->getCategoriasVehiculos() as $item): ?>
                                        <a href="#" class="sort_a"><span class="cmm_tspr spr_sort"><?= utf8_encode($item['descripcion']); ?></span></a>
                                    <?php endforeach; ?>
                                </div>
                                <div class="car_grid on">
                                    <strong class="hidden">Todos los Vehìculos</strong>
                                    <ul class="grid_u">
                                        <?php foreach ($helper->getModelos() as $item): ?>
                                            <li class="grid_l">
                                                <a href="<?= URL; ?>modelo/caracteristica/<?= $item['id'] ?>/<?= $helper->cleanUrl(utf8_encode($item['descripcion'])) ?>" class="grid_box">
                                                    <span class="g_img"><img src="<?= THUMB_MENU . $item['img_thumb']; ?>" alt="<?= utf8_encode($item['descripcion']); ?>"></span>
                                                    <strong class="g_name"><?= strtoupper(utf8_encode($item['descripcion'])) ?></strong>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php foreach ($helper->getCategoriasVehiculos() as $item): ?>
                                    <div class="car_grid on">
                                        <strong class="hidden"><?= utf8_encode($item['descripcion']); ?></strong>
                                        <ul class="grid_u">
                                            <?php foreach ($helper->getModelos($item['id']) as $modelo): ?>
                                                <li class="grid_l">
                                                    <a href="<?= URL; ?>modelos/caracteristica/<?= $modelo['id'] ?>/<?= $helper->cleanUrl(utf8_encode($modelo['descripcion'])) ?>" class="grid_box">
                                                        <span class="g_img"><img src="<?= THUMB_MENU . $modelo['img_thumb']; ?>" alt="<?= utf8_encode($modelo['descripcion']); ?>"></span>
                                                        <strong class="g_name"><?= strtoupper(utf8_encode($modelo['descripcion'])) ?></strong>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endforeach; ?>
                            </div>             
                        </li>
                        <li class="dth1_l">
                            <a class="dth1_a pointer">Compra un Kia</a>
                            <ul class="dth2_u">
                                <!--<li class="dth2_l"><a href="<?= URL; ?>compra_un_kia/arma_tu_kia/" class="dth2_a">Arma tu Kia</a></li>-->
                                <li class="dth2_l"><a href="<?= URL; ?>compra_un_kia/encuentra_tu_kia/" class="dth2_a">Encuentra tu Kia</a></li>
                                <li class="dth2_l"><a href="<?= URL; ?>compra_un_kia/ficha_tecnica/" class="dth2_a">Ficha Técnica</a></li>
                                <li class="dth2_l"><a href="<?= URL; ?>compra_un_kia/cotizar/" class="dth2_a">Cotizar</a></li>
                                <li class="dth2_l"><a href="<?= URL; ?>compra_un_kia/test_drive/" class="dth2_a">Test Drive</a></li>
                            </ul>
                        </li>
                        <li class="dth1_l">
                            <a class="dth1_a pointer">Tengo un Kia</a>
                            <ul class="dth2_u">
                                <li class="dth2_l"><a href="<?= URL; ?>tengo_un_kia/postventa/" class="dth2_a">Servicio PostVenta</a></li>
                                <!--<li class="dth2_l"><a href="http://org-www.kia.com/gt/service/warranty.html" class="dth2_a">Garantía</a></li>-->
                                <li class="dth2_l"><a href="<?= URL; ?>tengo_un_kia/solicita_turno/" class="dth2_a">Solicitá un turno</a></li>
                                <li class="dth2_l"><a href="<?= URL; ?>tengo_un_kia/bienvenido_vida_0/" class="dth2_a">Bienvenido a tu vida "0"</a></li>
                            </ul>
                        </li>
                        <li class="dth1_l">
                            <a class="dth1_a pointer">Experiencia</a>
                            <ul class="dth2_u">
                                <li class="dth2_l"><a href="<?= URL; ?>experiencia/la_empresa/" class="dth2_a">La Empresa</a></li>
                                <li class="dth2_l"><a href="<?= URL; ?>experiencia/filosofia/" class="dth2_a">Acerca de Kia</a></li>
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
                            <li class="util_l"><a href="<?= URL; ?>noticias/listado" class="util_a">Noticias</a></li>
                            <li class="util_l"><a href="<?= URL; ?>promociones/" class="util_a">Promociones</a></li>
                            <li class="util_l"><a href="<?= URL; ?>compra_un_kia/encuentra_tu_kia/" class="util_a">Encuentra tu Kia</a></li>
                            <li class="util_l"><a href="<?= URL; ?>contacto/" class="util_a">Contàctanos</a></li>
                        </ul>
                        <div class="util_search">
                            <div class="u_sch_box">
                                <form action="<?= URL; ?>" method="get">
                                    <input type="text" name="q" id="txtTopSearch" class="sch_inp" title="Search Keyword" placeholder="Buscar">
                                    <button type="submit" class="sch_btn" title="Buscar"><span class="cmm_spr spr_search">Buscar</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="go_build">
                        <a href="<?= URL; ?>compra_un_kia/cotizar/" class="btnMedium btnType1"><span class="cmm_tspr spr_build"><em class="desc">Cotizar tu Kia</em></span></a>
                    </div>
                    <!-- GT SEO 20150827 h2 > div -->
                    <div class="hidden">msg_util_menu</div>
                </div>
                <!-- //GNB -->
            </div>
        </div>