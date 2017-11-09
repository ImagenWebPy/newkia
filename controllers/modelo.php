<?php

class Modelo extends Controller {

    private $meta_description = '';

    function __construct() {
        parent::__construct();
        $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_descripton')['value']);
    }

    public function caracteristica() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $datosModelos = $this->model->getDatosModelos($idModelo);
        $meta_description = $this->meta_description;
        if (!empty($datosModelos['meta_descripcion'])) {
            $meta_description = $datosModelos['meta_descripcion'];
        }
        $this->view->datosModelo = $datosModelos;
        $this->view->datosModeloCaracteristica = $this->model->datosModeloCaracteristica($idModelo);
        $this->view->datosVehiculo = $this->model->datosVehiculo($idModelo);
        $this->view->view360 = $this->model->view360($idModelo);
        $this->view->headerBarModelos = $this->model->headerBarModelos($url);
        $this->view->public_css = array("css/showroom/default_style.min.css");
        $this->view->js = array("modelo/inc/js/default_script.js", "modelo/inc/js/feature_script.min.js");
        $this->view->title = SITE_TITLE . 'Características ' . utf8_encode($datosModelos['descripcion']);
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $meta_description;
        $this->view->render('header');
        $this->view->render('modelo/caracteristica');
        $this->view->render('footer');
    }

    public function galeria() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $datosModelos = $this->model->getDatosModelos($idModelo);
        $meta_description = $this->meta_description;
        if (!empty($datosModelos['meta_descripcion'])) {
            $meta_description = $datosModelos['meta_descripcion'];
        }
        $this->view->datosModelo = $datosModelos;
        $this->view->datosModeloGaleria = $this->model->datosModeloGaleria($idModelo);
        $this->view->headerBarModelos = $this->model->headerBarModelos($url);
        $this->view->public_css = array("css/showroom/default_style.min.css");
        $this->view->js = array("modelo/inc/js/default_script.js", "modelo/inc/js/feature_script.min.js");
        $this->view->title = SITE_TITLE . 'Galería ' . utf8_encode($datosModelos['descripcion']);
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $meta_description;
        $this->view->render('header');
        $this->view->render('modelo/galeria');
        $this->view->render('footer');
    }

    public function especificacion() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $datosModelos = $this->model->getDatosModelos($idModelo);
        $meta_description = $this->meta_description;
        if (!empty($datosModelos['meta_descripcion'])) {
            $meta_description = $datosModelos['meta_descripcion'];
        }
        $this->view->datosModelo = $datosModelos;
        $this->view->datosModeloEspecificaciones = $this->model->datosModeloEspecificaciones($idModelo);
        $this->view->headerBarModelos = $this->model->headerBarModelos($url);
        $this->view->public_css = array("css/showroom/default_style.min.css");
        $this->view->js = array("modelo/inc/js/default_script.js");
        $this->view->title = SITE_TITLE . 'Especificaciones ' . utf8_encode($datosModelos['descripcion']);
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $meta_description;
        $this->view->render('header');
        $this->view->render('modelo/especificacion');
        $this->view->render('footer');
    }

}
