<?php

class Contacto extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = SITE_TITLE . 'Contáctanos';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('contacto/index');
        $this->view->render('footer');
    }

}
