<?php

class Tengo_un_kia extends Controller {

    private $meta_description = '';

    function __construct() {
        parent::__construct();
        $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_descripton')['value']);
    }

    public function postventa() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        if (!empty($this->helper->getConfigSite('meta_description_postventa')['value']))
            $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_description_postventa')['value']);
        $this->view->headerUrlCentroServicios = $this->model->headerUrlCentroServicios($url);
        $this->view->headerCentroServicios = $this->model->headerCentroServicios($url);
        $this->view->title = SITE_TITLE . 'Servicio PostVenta';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
        $this->view->render('header');
        $this->view->render('tengo_un_kia/postventa');
        $this->view->render('footer');
    }

    public function talleres() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        if (!empty($this->helper->getConfigSite('meta_description_talleres')['value']))
            $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_description_talleres')['value']);
        $this->view->listadoTalleres = $this->model->listadoTalleres();
        $this->view->headerUrlCentroServicios = $this->model->headerUrlCentroServicios($url);
        $this->view->headerCentroServicios = $this->model->headerCentroServicios($url);
        $this->view->title = SITE_TITLE . 'Talleres';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
        $this->view->render('header');
        $this->view->render('tengo_un_kia/talleres');
        $this->view->render('footer');
    }

    public function repuestos() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;

        if (!empty($this->helper->getConfigSite('meta_description_repuestos')['value']))
            $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_description_repuestos')['value']);
        $this->view->repuestos = $this->model->repuestos();
        $this->view->headerUrlCentroServicios = $this->model->headerUrlCentroServicios($url);
        $this->view->headerCentroServicios = $this->model->headerCentroServicios($url);
        $this->view->title = SITE_TITLE . 'Repuestos';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
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
        if (!empty($this->helper->getConfigSite('meta_description_vida0')['value']))
            $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_description_vida0')['value']);
        $this->view->title = SITE_TITLE . 'Bienvenido a tu vida 0';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
        $this->view->vida0 = $this->model->vida0();
        $this->view->render('header');
        $this->view->render('tengo_un_kia/vida0');
        $this->view->render('footer');
    }

    public function solicita_turno() {
        if (!empty($this->helper->getConfigSite('meta_description_turno')['value']))
            $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_description_turno')['value']);

        $this->view->turno = $this->model->turno();
        $this->view->tipoServicio = $this->model->tipoServicio();
        $this->view->title = SITE_TITLE . 'Solicitá un turno';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
        $this->view->vida0 = $this->model->vida0();
        $this->view->render('header');
        $this->view->render('tengo_un_kia/solicita_turno');
        $this->view->render('footer');
    }

    public function enviarSolicitudTurno() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id_tipo_servicio' => $this->helper->cleanInput($_POST['tipoServicio']),
            'nombre' => $this->helper->cleanInput($_POST['txtNombre']),
            'ci' => $this->helper->cleanInput($_POST['txtCi']),
            'celular' => $this->helper->cleanInput($_POST['txtCelular']),
            'telefono' => $this->helper->cleanInput($_POST['txtTelefono']),
            'direccion' => $this->helper->cleanInput($_POST['txtDireccion']),
            'barrio' => $this->helper->cleanInput($_POST['txtBarrio']),
            'ciudad' => $this->helper->cleanInput($_POST['txtCiudad']),
            'modelo' => $this->helper->cleanInput($_POST['txtModelo']),
            'kilometraje' => $this->helper->cleanInput($_POST['txtKilometraje']),
        );
        $datos = $this->model->enviarSolicitudTurno($data);
        echo $datos;
    }

}
