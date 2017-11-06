<?php

class Experiencia extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function la_empresa() {
        $this->view->title = SITE_TITLE . 'La Empresa';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->laEmpresa = $this->model->laEmpresa();
        $this->view->render('header');
        $this->view->render('experiencia/la_empresa');
        $this->view->render('footer');
    }

    public function filosofia() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->headerBar = $this->model->headerBar($url);
        $this->view->title = SITE_TITLE . 'Acerca de kia - Filosofía';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('experiencia/acerca');
        $this->view->render('footer');
    }

    public function historia() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->headerBar = $this->model->headerBar($url);
        $this->view->headerBarHistory = $this->model->headerBarHistory($url);
        $this->view->title = SITE_TITLE . 'Acerca de kia - Historia';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('experiencia/historia');
        $this->view->render('footer');
    }

    public function historia2() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->headerBar = $this->model->headerBar($url);
        $this->view->headerBarHistory = $this->model->headerBarHistory($url);
        $this->view->title = SITE_TITLE . 'Acerca de kia - Historia 2';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('experiencia/historia2');
        $this->view->render('footer');
    }

    public function historia3() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->headerBar = $this->model->headerBar($url);
        $this->view->headerBarHistory = $this->model->headerBarHistory($url);
        $this->view->title = SITE_TITLE . 'Acerca de kia - Historia 3';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('experiencia/historia3');
        $this->view->render('footer');
    }

    public function historia4() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->headerBar = $this->model->headerBar($url);
        $this->view->headerBarHistory = $this->model->headerBarHistory($url);
        $this->view->title = SITE_TITLE . 'Acerca de kia - Historia 4';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('experiencia/historia4');
        $this->view->render('footer');
    }

    public function sostenibilidad() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->headerBar = $this->model->headerBar($url);
        $this->view->informesSostenibilidad = $this->model->informesSostenibilidad();
        $this->view->title = SITE_TITLE . 'Sostenibiliad';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->render('header');
        $this->view->render('experiencia/sostenibilidad');
        $this->view->render('footer');
    }

    public function medio_ambiente() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->title = SITE_TITLE . 'Medio Ambiente';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->headerBar = $this->model->headerBar($url);
        $this->view->render('header');
        $this->view->render('experiencia/medio_ambiente');
        $this->view->render('footer');
    }

    public function diseno_kia() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->title = SITE_TITLE . 'Diseño Kia';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->headerBar = $this->model->headerBar($url);
        $this->view->render('header');
        $this->view->render('experiencia/diseno_kia');
        $this->view->render('footer');
    }

    public function filosofia_corporativa() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->title = SITE_TITLE . 'Filosofía Corporativa';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->headerBar = $this->model->headerBar($url);
        $this->view->render('header');
        $this->view->render('experiencia/filosofia_corporativa');
        $this->view->render('footer');
    }

    public function marca() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->title = SITE_TITLE . 'Marca';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->headerBarMarca = $this->model->headerBarMarca($url);
        $this->view->render('header');
        $this->view->render('experiencia/marca');
        $this->view->render('footer');
    }

    public function unidad_sorprendente() {
        $url = $_GET['url'];
        $url = explode('/', $url);

        $this->view->title = SITE_TITLE . 'Unidad Sorprendente';
        $this->view->meta_sitename = META_SITENAME;
        $this->view->headerBarMarca = $this->model->headerBarMarca($url);
        $this->view->render('header');
        $this->view->render('experiencia/unidad_sorprendente');
        $this->view->render('footer');
    }

}
