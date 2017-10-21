<?php

class Tengo_un_kia_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function headerUrlCentroServicios($url) {
        $seccion = '';
        switch ($url[1]) {
            case 'postventa':
                $seccion = 'Mantenimiento';
                break;
            case 'repuestos':
                $seccion = 'Repuestos';
                break;
            case 'talleres':
                $seccion = 'Talleres';
                break;
        }
        $data = '<div class="parbase global-title section">
                    <div class="content_title">
                        <!-- 20150827 GT SEO h3 > h1 -->
                        <h1 class="con_tit"><p>SERVICIO POSTVENTA</p>
                        </h1>
                        <div class="con_navi">
                            <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                                <li property="itemListElement" typeof="ListItem" style="display:inline">
                                    <a href="' . URL . '" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                    <meta property="position" content=  1>
                                </li>
                                <li property="itemListElement" typeof="ListItem" style="display:inline">
                                    <a href="#" property="name" typeof="WebPage"><span class="depth" property="name">Tengo un Kia</span><span class="gt">&gt;</span></a>
                                    <meta property="position" content=  2>
                                </li>
                                <li property="itemListElement" typeof="ListItem" style="display:inline">
                                    <a href="#" property="name" typeof="WebPage"><span class="depth" property="name">PostVenta</span><span class="gt">&gt;</span></a>
                                    <meta property="position" content=  3>
                                </li>
                                <li property="itemListElement" typeof="ListItem" style="display:inline">
                                    <strong class="depth current"property="name">' . $seccion . '</strong>
                                    <meta property="position" content=  4>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>';
        return $data;
    }

    public function headerCentroServicios($url) {
        $tabonMantenimiento = '';
        $tabonTalleres = '';
        $tabonRespuestos = '';
        switch ($url[1]) {
            case 'postventa':
                $tabonMantenimiento = 'tab_on';
                break;
            case 'talleres':
                $tabonTalleres = 'tab_on';
                break;
            case 'repuestos':
                $tabonRespuestos = 'tab_on';
                break;
        }
        $data = '<div class="tab_type3">
                    <a href="#" class="input_box"><span>Maintenance</span></a>
                    <ul>
                        <li class="tab_li"><a href="' . URL . 'tengo_un_kia/postventa" class="tab_a ' . $tabonMantenimiento . '"><span class="tab_tspr tab_svc1">Mantenimiento</span></a></li>
                        <li class="tab_li"><a href="' . URL . 'tengo_un_kia/talleres" class="tab_a ' . $tabonTalleres . '"><span class="tab_tspr tab_map">Talleres</span></a></li>
                        <li class="tab_li"><a href="' . URL . 'tengo_un_kia/repuestos" class="tab_a ' . $tabonRespuestos . '"><span class="tab_tspr tab_svc2">Repuesto</span></a></li>
                    </ul>
                </div>';
        return $data;
    }

}
