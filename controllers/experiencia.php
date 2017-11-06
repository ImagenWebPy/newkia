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

}
