<?php

class Noticias extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function listado() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $pagina = (!empty($url[2])) ? $url[2] : NULL;
        $this->view->listado = $this->model->listado($pagina);
        $this->view->title = SITE_TITLE . 'Noticias';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('noticias/index');
        $this->view->render('footer');
    }

    public function detalle() {
        $url = $this->helper->getUrl();
        $id = $url[2];

        $datosNoticia = $this->model->detalle($id);
        $this->view->detalle = $datosNoticia;
        $this->view->title = SITE_TITLE . utf8_encode($datosNoticia['titulo']);
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('noticias/detalle');
        $this->view->render('footer');
    }

}
