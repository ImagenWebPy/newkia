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
        $sqlModelo = $this->db->select("select descripcion, logo, ficha from modelo where id = $idModelo");
        $data = '<div class="snb_pip snb_wrap">
                    <div class="inner">
                        <div class="snb_tit">
                            <a href="' . URL . 'modelo/caracteristica/' . $idModelo . '/' . $this->helper->cleanUrl(utf8_encode($sqlModelo[0]['descripcion'])) . '" class="">
                                <img title="' . utf8_encode($sqlModelo[0]['descripcion']) . '" alt="' . utf8_encode($sqlModelo[0]['descripcion']) . '" class="lg_img" src="' . VEHICLE_LOGO . $sqlModelo[0]['logo'] . '">
                            </a>
                        </div>
                        <!-- SNB -->
                        <div class="snb_area">
                            <!-- open_snb open -->
                            <a class="open_snb pointer"><span class="cmm_tspr spr_snb">gallery</span></a>
                            <!-- snb_nav open -->
                            <ul class="snb_nav">
                                <li class="sdth1_l ' . $caracteristica . '"><a href="' . URL . 'modelo/caracteristica/' . $idModelo . '/' . utf8_encode($sqlModelo[0]['descripcion']) . '" class="sdth1_a">Características</a></li>
                                <li class="sdth1_l ' . $galeria . '"><a href="' . URL . 'modelo/galeria/' . $idModelo . '/' . utf8_encode($sqlModelo[0]['descripcion']) . '" class="sdth1_a">Galería</a></li>
                                <li class="sdth1_l ' . $especificacion . '"><a href="' . URL . 'modelo/especificacion/' . $idModelo . '/' . utf8_encode($sqlModelo[0]['descripcion']) . '" class="sdth1_a">Especificaciones</a></li>
                            </ul>
                            <!-- sales_kit open -->
                            <div class="sales_kit">
                                <a class="kit pointer"><span class="kit_spr spr_basket">Sales Kit</span></a>
                                <ul class="kit_menu">
                                    <li class="kit_l"><a href="' . URL . 'compra_un_kia/test_drive" class="kit_a"><span class="kit_tspr spr_kit1">Testdrive</span></a></li>
                                    <li class="kit_l"><a href="' . URL . 'compra_un_kia/cotizar" class="kit_a"><span class="kit_tspr spr_kit2">Cotizar</span></a></li>
                                    <li class="kit_l"><a href="' . URL . 'public/fichas/' . $sqlModelo[0]['ficha'] . '" class="kit_a"><span class="kit_tspr spr_kit3">Ficha Técnica</span></a></li>
                                    <li class="kit_l"><a href="' . URL . 'compra_un_kia/encuentra_tu_kia" class="kit_a"><span class="kit_tspr spr_kit4">Encuentra tu Kia</span></a></li>
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
                                        and id_modelo = $idModelo");
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
        $sqlSeguridad = $this->db->select("SELECT md.titulo,
                                                    md.descripcion,
                                                    md.img_m,
                                                    md.img_t,
                                                    md.img_w,
                                                    md.portada
                                            FROM modelo_seguridad md
                                            where md.id_modelo = $idModelo
                                            and md.estado = 1;");
        $data['general'] = $sqlGeneral[0];
        $data['exterior'] = $sqlExterior;
        $data['exterior_pie'] = $sqlExteriorPie;
        $data['interior'] = $sqlInterior[0];
        $data['interior_pie'] = $sqlInteriorPie;
        $data['destacados'] = $sqlDestacados;
        $data['desempeno'] = $sqlDesempeno;
        $data['seguridad'] = $sqlSeguridad;
        return $data;
    }

    public function getDatosModelos($idModelo) {
        $sqlModelo = $this->db->select("select * from modelo where id = $idModelo");
        return $sqlModelo[0];
    }

    public function datosModeloGaleria($idModelo) {
        $data = array(
            'interior' => '',
            'exterior' => ''
        );
        $sqlInterior = $this->db->select("SELECT mi.img_principal,
                                                mi.img_thumb,
                                                mi.img_w,
                                                mi.img_t,
                                                mi.img_m,
                                                mi.principal
                                        FROM modelo_imagenes mi
                                        where mi.galeria = 1
                                        and mi.estado = 1
                                        and mi.id_modelo = $idModelo
                                        and mi.tipo = 'INT'");
        $sqlExterior = $this->db->select("SELECT mi.img_principal,
                                                mi.img_thumb,
                                                mi.img_w,
                                                mi.img_t,
                                                mi.img_m,
                                                mi.principal
                                        FROM modelo_imagenes mi
                                        where mi.galeria = 1
                                        and mi.estado = 1
                                        and mi.id_modelo = $idModelo
                                        and mi.tipo = 'EXT'");
        $data['interior'] = $sqlInterior;
        $data['exterior'] = $sqlExterior;
        return $data;
    }

    public function datosModeloEspecificaciones($idModelo) {
        $sqlDimensiones = $this->db->select("SELECT md.largo,
                                                    md.ancho,
                                                    md.altura,
                                                    md.distancia_ejes,
                                                    md.img_all
                                                FROM modelo_dimension md 
                                                where md.estado = 1
                                                and md.id_modelo = $idModelo;");
        $sqlDimensionesImg = $this->db->select("SELECT tipo, img_w, img_t, img_m FROM modelo_dimension_img where id_modelo =  $idModelo;");
        $sqlMotor = $this->db->select("SELECT c.descripcion as combustible,
                                                    mm.tipo_motor,
                                                    mm.cilindraje,
                                                    mm.potencia_max,
                                                    mm.torque_max,
                                                    mm.cilindraje,
                                                    mm.valvula,
                                                    mm.img,
                                                    mv.descripcion as version
                                            FROM modelo_motor mm
                                            LEFT JOIN combustible c on c.id = mm.id_combustible
                                            LEFT JOIN modelo_version mv on mv.id = mm.id_version
                                            where mm.estado = 1
                                            and mv.id_modelo = $idModelo");
        $sqlLlanta = $this->db->select("SELECT mv.descripcion as version,
                                                ml.descripcion as llanta,
                                                ml.img,
                                                ml.tipo,
                                                c.descripcion as combustible
                                            FROM modelo_llantas ml
                                            LEFT JOIN modelo_version mv on mv.id = ml.id_version
                                            LEFT JOIN modelo_motor mm on mm.id_version = mv.id
                                            LEFT JOIN combustible c on c.id = mm.id_combustible
                                            where ml.estado = 1
                                            AND mv.id_modelo = $idModelo");
        $data = array(
            'dimension' => $sqlDimensiones,
            'dimension_img' => $sqlDimensionesImg,
            'motor' => $sqlMotor,
            'llanta' => $sqlLlanta
        );
        return $data;
    }

    public function datosVehiculo($idModelo) {
        $sqlDatos = $this->db->select("select min(mv.precio) as precio,
                                                mm.cilindraje,
                                                mm.potencia_max,
                                                m.garantia
                                        from modelo_version mv
                                        LEFT JOIN modelo m on m.id = mv.id_modelo
                                        LEFT JOIN modelo_motor mm on mm.id_version = mv.id
                                        where m.id = $idModelo
                                        GROUP BY mm.cilindraje, mm.potencia_max, m.garantia");
        return $sqlDatos[0];
    }

}
