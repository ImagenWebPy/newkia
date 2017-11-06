<?php

class Promociones extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->promociones = $this->model->promociones();
        $this->view->title = SITE_TITLE . 'Promociones';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('promociones/index');
        $this->view->render('footer');
    }

}
