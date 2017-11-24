<?php

class Index extends Controller {

    private $meta_description = '';

    function __construct() {
        parent::__construct();
        $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_descripton')['value']);
    }

    public function index() {
        $this->view->title = SITE_TITLE;
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

}
