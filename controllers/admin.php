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
        $this->view->public_css = array("admin/plugins/datatables/dataTables.bootstrap.css", "admin/plugins/html5fileupload/html5fileupload.css", "admin/plugins/datepicker/datepicker3.css", "admin/plugins/jquery.tagsinput/jquery.tagsinput.css");
        $this->view->public_js = array("admin/plugins/datatables/jquery.dataTables.min.js", "admin/plugins/datatables/dataTables.bootstrap.min.js", "admin/plugins/html5fileupload/html5fileupload.min.js", "admin/plugins/datepicker/bootstrap-datepicker.js", "admin/plugins/jquery.tagsinput/jquery.tagsinput.js", "admin/plugins/ckeditor/ckeditor.js");
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

    public function modalEditarModelo() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarModelo($data);
        echo $datos;
    }

}
