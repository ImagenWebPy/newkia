<?php

class Compra_un_kia extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function arma_tu_kia() {
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('compra_un_kia/arma_tu_kia');
        $this->view->render('footer');
    }
    
    public function encuentra_tu_kia() {
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('compra_un_kia/encuentra_tu_kia');
        $this->view->render('footer');
    }
    
    public function ficha_tecnica() {
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('compra_un_kia/ficha_tecnica');
        $this->view->render('footer');
    }
    
    public function cotizar() {
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('compra_un_kia/cotizar');
        $this->view->render('footer');
    }
    
    public function test_drive() {
        $this->view->title = 'Caracteristicas';
        $this->view->render('header');
        $this->view->render('compra_un_kia/test_drive');
        $this->view->render('footer');
    }

}
