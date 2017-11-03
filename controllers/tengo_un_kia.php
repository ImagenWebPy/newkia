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
        $this->view->title = SITE_TITLE . 'Servicio PostVenta';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('tengo_un_kia/postventa');
        $this->view->render('footer');
    }

    public function talleres() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $this->view->listadoTalleres = $this->model->listadoTalleres();
        $this->view->headerUrlCentroServicios = $this->model->headerUrlCentroServicios($url);
        $this->view->headerCentroServicios = $this->model->headerCentroServicios($url);
        $this->view->title = SITE_TITLE . 'Talleres';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('tengo_un_kia/talleres');
        $this->view->render('footer');
    }

    public function repuestos() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        $this->view->repuestos = $this->model->repuestos();
        $this->view->headerUrlCentroServicios = $this->model->headerUrlCentroServicios($url);
        $this->view->headerCentroServicios = $this->model->headerCentroServicios($url);
        $this->view->title = SITE_TITLE . 'Repuestos';
        $this->view->meta_sitename = META_SITENAME;
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
        $this->view->title = SITE_TITLE . 'Bienvenido a tu vida 0';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->vida0 = $this->model->vida0();
        $this->view->render('header');
        $this->view->render('tengo_un_kia/vida0');
        $this->view->render('footer');
    }

    public function solicita_turno() {
        $this->view->turno = $this->model->turno();
        $this->view->tipoServicio = $this->model->tipoServicio();
        $this->view->title = SITE_TITLE . 'Solicitá un turno';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->vida0 = $this->model->vida0();
        $this->view->render('header');
        $this->view->render('tengo_un_kia/solicita_turno');
        $this->view->render('footer');
    }

}
