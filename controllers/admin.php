<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index() {
        $this->view->title = 'Dashboard';
        $this->view->render('admin/header');
        $this->view->render('admin/index/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function listado_modelos() {
        $this->view->public_css = array("admin/plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("admin/plugins/datatables/jquery.dataTables.min.js", "admin/plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Listado de modelos';
        $this->view->render('admin/header');
        $this->view->render('admin/modelos/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    /**
     * Funcion para cargar el DataTable de modelos
     */
    public function cargarDTModelos() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTModelos();
        echo $data;
    }

}
