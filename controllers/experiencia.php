<?php

class Experiencia extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function la_empresa() {
        $this->view->title = SITE_TITLE . 'La Empresa';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->laEmpresa = $this->model->laEmpresa();
        $this->view->render('header');
        $this->view->render('experiencia/la_empresa');
        $this->view->render('footer');
    }

}
