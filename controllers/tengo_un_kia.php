<?php

class Tengo_un_kia extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function postventa() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $this->view->headerUrlCentroServicios = $this->model->headerUrlCentroServicios($url);
        $this->view->headerCentroServicios = $this->model->headerCentroServicios($url);
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('tengo_un_kia/postventa');
        $this->view->render('footer');
    }

    public function talleres() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $this->view->headerUrlCentroServicios = $this->model->headerUrlCentroServicios($url);
        $this->view->headerCentroServicios = $this->model->headerCentroServicios($url);
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('tengo_un_kia/talleres');
        $this->view->render('footer');
    }

    public function repuestos() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $this->view->headerUrlCentroServicios = $this->model->headerUrlCentroServicios($url);
        $this->view->headerCentroServicios = $this->model->headerCentroServicios($url);
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('tengo_un_kia/repuestos');
        $this->view->render('footer');
    }

    public function garantia() {
        $this->view->title = 'Garantía';
        $this->view->render('header');
        $this->view->render('tengo_un_kia/garantia');
        $this->view->render('footer');
    }
    
    public function bienvenido_vida_0() {
        $this->view->title = 'Garantía';
        $this->view->render('header');
        $this->view->render('tengo_un_kia/vida0');
        $this->view->render('footer');
    }

}
