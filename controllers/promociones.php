<?php

class Promociones extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = 'Promociones';
        $this->view->render('header');
        $this->view->render('promociones/index');
        $this->view->render('footer');
    }

}
