<?php

class Compra_un_kia extends Controller {

    private $meta_description = '';

    function __construct() {
        parent::__construct();
        $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_descripton')['value']);
    }

    public function arma_tu_kia() {
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('compra_un_kia/arma_tu_kia');
        $this->view->render('footer');
    }

    public function encuentra_tu_kia() {
        if (!empty($this->helper->getConfigSite('meta_description_encuentra_tu_kia')['value']))
            $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_description_encuentra_tu_kia')['value']);
        $this->view->title = SITE_TITLE . 'Encuentra tu Kia';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
        $this->view->render('header');
        $this->view->render('compra_un_kia/encuentra_tu_kia');
        $this->view->render('footer');
    }

    public function ficha_tecnica() {
        if (!empty($this->helper->getConfigSite('meta_description_ficha')['value']))
            $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_description_ficha')['value']);
        $this->view->title = SITE_TITLE . 'Ficha Técnica';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
        $this->view->render('header');
        $this->view->render('compra_un_kia/ficha_tecnica');
        $this->view->render('footer');
    }

    public function cotizar() {
        if (!empty($this->helper->getConfigSite('meta_description_cotizar')['value']))
            $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_description_cotizar')['value']);
        $this->view->title = SITE_TITLE . 'Cotizar';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
        $this->view->render('header');
        $this->view->render('compra_un_kia/cotizar');
        $this->view->render('footer');
    }

    public function test_drive() {
        if (!empty($this->helper->getConfigSite('meta_description_testdrive')['value']))
            $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_description_testdrive')['value']);
        $this->view->title = SITE_TITLE . 'Test Drive';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
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

    public function enviarSolicitudTestDrive() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'modelo' => $this->helper->cleanInput($_POST['modelo']),
            'nombre' => $this->helper->cleanInput($_POST['txtNombreCompleto']),
            'ci' => $this->helper->cleanInput($_POST['txtCI']),
            'telefono' => $this->helper->cleanInput($_POST['txtTelefono']),
            'email' => $this->helper->cleanInput($_POST['txtEmail']),
            'ciudad' => $this->helper->cleanInput($_POST['txtCiudad']),
            'direccion' => $this->helper->cleanInput($_POST['txtDireccion'])
        );
        $datos = $this->model->enviarSolicitudTestDrive($data);
        echo $datos;
    }

}
