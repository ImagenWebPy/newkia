<?php

class Pagina extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function privacidad() {

        $this->view->privacidad = $this->model->paginas('privacidad');
        $this->view->title = SITE_TITLE . 'Privacidad';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('pagina/privacidad');
        $this->view->render('footer');
    }

    public function terminos_y_condiciones() {
        $this->view->terminos = $this->model->paginas('terminos');
        $this->view->title = SITE_TITLE . 'Terminos y Condiciones';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('pagina/terminos_y_condiciones');
        $this->view->render('footer');
    }

}
