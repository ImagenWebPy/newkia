<?php

class Modelo extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function caracteristica() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $datosModelos = $this->model->getDatosModelos($idModelo);
        $this->view->datosModeloCaracteristica = $this->model->datosModeloCaracteristica($idModelo);
        $this->view->headerBarModelos = $this->model->headerBarModelos($url);
        $this->view->public_css = array("css/showroom/default_style.min.css");
        $this->view->js = array("modelo/inc/js/default_script.js", "modelo/inc/js/feature_script.min.js");
        $this->view->title = SITE_TITLE . 'Características ' . utf8_encode($datosModelos['descripcion']);
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('modelo/caracteristica');
        $this->view->render('footer');
    }

    public function galeria() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $datosModelos = $this->model->getDatosModelos($idModelo);
        $this->view->headerBarModelos = $this->model->headerBarModelos($url);
        $this->view->public_css = array("css/showroom/default_style.min.css");
        $this->view->js = array("modelo/inc/js/default_script.js", "modelo/inc/js/feature_script.min.js");
        $this->view->title = SITE_TITLE . 'Galería ' . utf8_encode($datosModelos['descripcion']);
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('modelo/galeria');
        $this->view->render('footer');
    }

    public function especificacion() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $datosModelos = $this->model->getDatosModelos($idModelo);
        $this->view->public_css = array("css/showroom/default_style.min.css");
        $this->view->js = array("modelo/inc/js/default_script.js");
        $this->view->headerBarModelos = $this->model->headerBarModelos($url);
        $this->view->title = SITE_TITLE . 'Especificaciones ' . utf8_encode($datosModelos['descripcion']);
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('modelo/especificacion');
        $this->view->render('footer');
    }

}
