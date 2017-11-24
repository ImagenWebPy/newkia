<?php

class Noticias extends Controller {

    private $meta_description = '';

    function __construct() {
        parent::__construct();
        $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_descripton')['value']);
    }

    public function listado() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $pagina = (!empty($url[2])) ? $url[2] : NULL;

        if (!empty($this->helper->getConfigSite('meta_description_noticias')['value']))
            $this->meta_description = utf8_encode($this->helper->getConfigSite('meta_description_noticias')['value']);
        $this->view->listado = $this->model->listado($pagina);
        $this->view->title = SITE_TITLE . 'Noticias';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
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
        if (!empty($datosNoticia['contenido'])) {
            $this->meta_description = substr(strip_tags(utf8_encode($datosNoticia['contenido'])), 0, 180);
        }
        $this->view->meta_sitename = META_SITENAME;
        $this->view->meta_description = $this->meta_description;
        $this->view->render('header');
        $this->view->render('noticias/detalle');
        $this->view->render('footer');
    }

}
