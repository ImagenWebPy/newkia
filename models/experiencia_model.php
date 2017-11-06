<?php

class Experiencia_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function laEmpresa() {
        $sql = $this->db->select("SELECT img, contenido FROM `la_empresa` where id = 1;");
        return $sql[0];
    }

    public function headerBar($url) {
        $tabonFilosofia = '';
        $tabonHistoria = '';
        $tabonSostenibelidad = '';
        $tabonMedioAmbiente = '';
        $tabonDiseno = '';
        $tabonCorporativa = '';
        switch ($url[1]) {
            case 'filosofia':
                $tabonFilosofia = 'tab_on';
                $texto = 'FILOSOGIA';
                break;
            case 'historia':
                $tabonHistoria = 'tab_on';
                $texto = 'HISTORIA';
                break;
            case 'historia2':
                $tabonHistoria = 'tab_on';
                $texto = 'HISTORIA';
                break;
            case 'historia3':
                $tabonHistoria = 'tab_on';
                $texto = 'HISTORIA';
                break;
            case 'historia4':
                $tabonHistoria = 'tab_on';
                $texto = 'HISTORIA';
                break;
            case 'sostenibilidad':
                $tabonSostenibelidad = 'tab_on';
                $texto = 'SOTENIBILIDAD';
                break;
            case 'medio_ambiente':
                $tabonMedioAmbiente = 'tab_on';
                $texto = 'MEDIO AMBIENTE';
                break;
            case 'diseno_kia':
                $tabonDiseno = 'tab_on';
                $texto = 'DISEÑO kIA';
                break;
            case 'filosofia_corporativa':
                $tabonCorporativa = 'tab_on';
                $texto = 'FILOSOFÍA CORPORATIVA';
                break;
        }
        $data = '<div class="exTab_type tabSelectBox">
                    <a href="#" class="input_box"><span>' . $texto . '</span></a>
                        <ul class="col6">
                            <li class="' . $tabonFilosofia . '"><a href="' . URL . 'experiencia/filosofia">FILOSOFÍA</a></li>
                            <li class="' . $tabonHistoria . '"><a href="' . URL . 'experiencia/historia">Historia</a></li>
                            <li class="' . $tabonSostenibelidad . '"><a href="' . URL . 'experiencia/sostenibilidad">SOSTENIBILIDAD</a></li>
                            <li class="' . $tabonMedioAmbiente . '"><a href="' . URL . 'experiencia/medio_ambiente">Medio Ambiente</a></li>
                            <li class="' . $tabonDiseno . '"><a href="' . URL . 'experiencia/diseno_kia">Diseño Kia</a></li>
                            <li class="' . $tabonCorporativa . '"><a href="' . URL . 'experiencia/filosofia_corporativa">FILOSOFÍA CORPORATIVA</a></li>
                        </ul>
                </div>';
        return $data;
    }

    public function headerBarHistory($url) {
        $tabonHistory = '';
        $tabonHistory2 = '';
        $tabonHistory3 = '';
        $tabonHistory4 = '';
        switch ($url[1]) {
            case 'historia':
                $tabonHistory = 'tab_on';
                break;
            case 'historia2':
                $tabonHistory2 = 'tab_on';
                break;
            case 'historia3':
                $tabonHistory3 = 'tab_on';
                break;
            case 'historia4':
                $tabonHistory4 = 'tab_on';
                break;
        }
        $data = '<ul class="history_list">
                    <li class="' . $tabonHistory . '"><a href="' . URL . 'experiencia/historia">2017~2011 <span class="hidden">año</span></a></li>
                    <li class="' . $tabonHistory2 . '"><a href="' . URL . 'experiencia/historia2">2010~2001 <span class="hidden">año</span></a></li>
                    <li class="' . $tabonHistory3 . '"><a href="' . URL . 'experiencia/historia3">2000~1991 <span class="hidden">año</span></a></li>
                    <li class="' . $tabonHistory4 . '"><a href="' . URL . 'experiencia/historia4">1990~1944 <span class="hidden">año</span></a></li>
                </ul>';
        return $data;
    }

    public function informesSostenibilidad() {
        $sql = $this->db->select("SELECT * FROM `sostenibilidad` where estado = 1 ORDER BY id DESC;");
        return $sql;
    }

    public function headerBarMarca($url) {
        $tabonMarca = '';
        $tabonCampana = '';
        $tabonMarcaMultiSensorial = '';
        switch ($url[1]) {
            case 'marca':
                $tabonMarca = 'tab_on';
                break;
            case 'unidad_sorprendente':
            case 'gear_up':
            case 'road_trip':
            case 'design_manifest':
                $tabonCampana = 'tab_on';
                break;
            case 'sabor':
            case 'sonido':
            case 'olor':
                $tabonMarcaMultiSensorial = 'tab_on';
                break;
        }
        $data = '<ul class="col3">
                    <li class="dep2Has tab2Line ' . $tabonMarca . '"><a href="' . URL . 'experiencia/marca/">Identidad DE MARCA</a></li>
                    <li class="dep2Has tab2Line ' . $tabonCampana . '"><a href="#">CAMPAÑA GLOBAL DE MARCA</a>
                        <ul class="tab_dep2">
                            <li><a href="' . URL . 'experiencia/unidad_sorprendente/">Unidad Sorprendente</a></li>
                            <li><a href="' . URL . 'experiencia/design_manifest/">RE:Design Manifesto</a></li>
                        </ul>
                    </li>
                </ul>';
        return $data;
    }

}
