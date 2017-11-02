<?php

class Contacto extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->metodoContacto = $this->model->metodoContacto();
        $this->view->seccionContacto = $this->model->seccionContacto();
        
        $this->view->title = SITE_TITLE . 'Contáctanos';
        $this->view->meta_sitename = META_SITENAME;
        
        $this->view->render('header');
        $this->view->render('contacto/index');
        $this->view->render('footer');
    }

    public function sendContactData() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'seccion' => $this->helper->cleanInput($_POST['selectSeccionContactar']),
            'nombre' => $this->helper->cleanInput($_POST['txtNombre']),
            'apellido' => $this->helper->cleanInput($_POST['txtApellido']),
            'contacto' => $this->helper->cleanInput($_POST['selectPreferencia']),
            'email' => $this->helper->cleanInput($_POST['txtEmail']),
            'celular' => $this->helper->cleanInput($_POST['txtCelular']),
            'telefono' => $this->helper->cleanInput($_POST['txtTelefono']),
            'mensaje' => $this->helper->cleanInput($_POST['txtMensaje'])
        );
        $datos = $this->model->sendContactData($data);
        echo $datos;
    }

}
