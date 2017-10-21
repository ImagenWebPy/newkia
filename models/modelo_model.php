<?php

class Modelo_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function headerBarModelos($url) {
        $caracteristica = '';
        $galeria = '';
        $especificacion = '';
        switch ($url[1]) {
            case 'caracteristica':
                $caracteristica = 'sdth_on';
                break;
            case 'galeria':
                $galeria = 'sdth_on';
                break;
            case 'especificacion':
                $especificacion = 'sdth_on';
                break;
        }
        $idModelo = $url[2];
        $sqlModelo = $this->db->select("select descripcion, logo from modelo where id = $idModelo");
        $data = '<div class="snb_pip snb_wrap">
                    <div class="inner">
                        <div class="snb_tit">
                            <a href="http://org-www.kia.com/gt/showroom/cerato-forte-yd/features.html" class="">
                                <img title="' . utf8_encode($sqlModelo[0]['descripcion']) . '" alt="' . utf8_encode($sqlModelo[0]['descripcion']) . '" class="lg_img" src="' . VEHICLE_LOGO . $sqlModelo[0]['logo'] . '">
                            </a>
                        </div>
                        <!-- SNB -->
                        <div class="snb_area">
                            <!-- open_snb open -->
                            <a href="#" class="open_snb"><span class="cmm_tspr spr_snb">gallery</span></a>
                            <!-- snb_nav open -->
                            <ul class="snb_nav">
                                <li class="sdth1_l ' . $caracteristica . '"><a href="' . URL . 'modelo/caracteristica/' . $idModelo . '/' . utf8_encode($sqlModelo[0]['descripcion']) . '" class="sdth1_a">Características</a></li>
                                <li class="sdth1_l ' . $galeria . '"><a href="' . URL . 'modelo/galeria/' . $idModelo . '/' . utf8_encode($sqlModelo[0]['descripcion']) . '" class="sdth1_a">Galería</a></li>
                                <li class="sdth1_l ' . $especificacion . '"><a href="' . URL . 'modelo/especificacion/' . $idModelo . '/' . utf8_encode($sqlModelo[0]['descripcion']) . '" class="sdth1_a">Especificaciones</a></li>
                            </ul>
                            <!-- sales_kit open -->
                            <div class="sales_kit">
                                <a href="#" class="kit"><span class="kit_spr spr_basket">Sales Kit</span></a>
                                <ul class="kit_menu">
                                    <li class="kit_l"><a href="#" class="kit_a"><span class="kit_tspr spr_kit1">Testdrive</span></a></li>
                                    <li class="kit_l"><a href="#" class="kit_a"><span class="kit_tspr spr_kit2">Cotizar</span></a></li>
                                    <li class="kit_l"><a href="#" class="kit_a"><span class="kit_tspr spr_kit3">Ficha Técnica</span></a></li>
                                    <li class="kit_l"><a href="#" class="kit_a"><span class="kit_tspr spr_kit4">Encuentra tu Kia</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- //SNB -->
                    </div>
                </div>';
        return $data;
    }

    public function datosModeloCaracteristica($idModelo) {
        $data = array(
            'general' => '',
            'exterior' => '',
            'exterior_pie' => '',
            'interior' => '',
            'interior_pie' => '',
            'destacados' => '',
            'desempeno' => '',
            'seguridad' => '',
            'compra' => ''
        );
        $sqlGeneral = $this->db->select("SELECT img_m,
                                                img_t,
                                                img_w,
                                                titulo,
                                                descripcion
                                        FROM modelo_general 
                                        where estado = 1 
                                        and id_modelo = 1; $idModelo");
        $sqlExterior = $this->db->select("SELECT  mi.titulo,
                                                mi.descripcion,
                                                mi.img_w,
                                                mi.img_t,
                                                mi.img_m,
                                                (select img from modelo_imagenes_thumb mit where mit.id_modelo_imagenes = mi.id LIMIT 1) as ico
                                        FROM modelo_imagenes mi
                                        where mi.estado = 1
                                        and mi.tipo = 'EXT'
                                        and mi.caracteristica = 1
                                        and mi.id_modelo = $idModelo
                                        ORDER BY mi.orden ASC");
        $sqlExteriorPie = $this->db->select("SELECT  mi.titulo,
                                                mi.descripcion,
                                                mi.img_w,
                                                mi.img_t,
                                                mi.img_m
                                        FROM modelo_imagenes mi
                                        where mi.estado = 1
                                        and mi.tipo = 'EXT'
                                        and mi.caracteristica_pie = 1
                                        and mi.id_modelo = $idModelo
                                        ORDER BY mi.orden ASC");
        $sqlInterior = $this->db->select("SELECT  mi.titulo,
                                                mi.descripcion,
                                                mi.img_w,
                                                mi.img_t,
                                                mi.img_m
                                        FROM modelo_imagenes mi
                                        where mi.estado = 1
                                        and mi.tipo = 'INT'
                                        and mi.caracteristicain = 1
                                        and mi.id_modelo = $idModelo");
        $sqlInteriorPie = $this->db->select("SELECT  mi.titulo,
                                                mi.descripcion,
                                                mi.img_w,
                                                mi.img_t,
                                                mi.img_m
                                        FROM modelo_imagenes mi
                                        where mi.estado = 1
                                        and mi.tipo = 'INT'
                                        and mi.caracteristicain_pie = 1
                                        and mi.id_modelo = $idModelo");
        $sqlDestacados = $this->db->select("SELECT md.titulo,
                                                    md.descripcion,
                                                    md.img_m,
                                                    md.img_t,
                                                    md.img_w,
                                                    md.portada
                                            FROM modelo_destacado md
                                            where md.id_modelo = $idModelo
                                            and md.estado = 1;");
        $sqlDesempeno = $this->db->select("SELECT md.titulo,
                                                    md.descripcion,
                                                    md.img_m,
                                                    md.img_t,
                                                    md.img_w,
                                                    md.portada
                                            FROM modelo_desempeno md
                                            where md.id_modelo = $idModelo
                                            and md.estado = 1;");
        $data['general'] = $sqlGeneral[0];
        $data['exterior'] = $sqlExterior;
        $data['exterior_pie'] = $sqlExteriorPie;
        $data['interior'] = $sqlInterior[0];
        $data['interior_pie'] = $sqlInteriorPie;
        $data['destacados'] = $sqlDestacados;
        $data['desempeno'] = $sqlDesempeno;
        return $data;
    }

    public function getDatosModelos($idModelo) {
        $sqlModelo = $this->db->select("select * from modelo where id = $idModelo");
        return $sqlModelo[0];
    }

}
