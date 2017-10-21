<?php

class Noticias extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = 'Noticias';
        $this->view->render('header');
        $this->view->render('noticias/index');
        $this->view->render('footer');
    }

}
