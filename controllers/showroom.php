<?php

class Showroom extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function caracteristica() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idModelo = (!empty($url[2])) ? $url[2] : NULL;
        
        $this->view->public_css = array("css/showroom/default_style.min.css");
        $this->view->js = array("showroom/inc/js/default_script.js", "showroom/inc/js/feature_script.min.js");
        $this->view->title = 'Modelos';
        $this->view->render('header');
        $this->view->render('showroom/caracteristica');
        $this->view->render('footer');
    }

}
