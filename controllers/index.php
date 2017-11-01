<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->view->title = SITE_TITLE;
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }
   
}