<?php

class Compra_un_kia extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function arma_tu_kia() {
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('compra_un_kia/arma_tu_kia');
        $this->view->render('footer');
    }

    public function encuentra_tu_kia() {
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('compra_un_kia/encuentra_tu_kia');
        $this->view->render('footer');
    }

    public function ficha_tecnica() {
        $this->view->title = SITE_TITLE . 'Ficha Técnica';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('compra_un_kia/ficha_tecnica');
        $this->view->render('footer');
    }

    public function cotizar() {
        $this->view->title = SITE_TITLE . 'Cotizar';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('compra_un_kia/cotizar');
        $this->view->render('footer');
    }

    public function test_drive() {
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('compra_un_kia/test_drive');
        $this->view->render('footer');
    }

    public function datosVersion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        if (!empty($data['id'])) {
            $data = $this->model->datosVersion($data);
            echo $data;
        }
    }

    public function mostrarPrecioVersion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        if (!empty($data['id'])) {
            $data = $this->model->mostrarPrecioVersion($data);
            echo $data;
        }
    }

    public function enviarCotizacion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'nombre' => $this->helper->cleanInput($_POST['nombre']),
            'email' => $this->helper->cleanInput($_POST['email']),
            'id_version' => $this->helper->cleanInput($_POST['id_version'])
        );
        $datos = $this->model->enviarCotizacion($data);
        echo $datos;
    }

}
