<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index() {
        $this->view->title = 'Dashboard';
        $this->view->render('admin/header');
        $this->view->render('admin/index/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function listado_modelos() {
        $this->view->public_css = array("admin/plugins/datatables/dataTables.bootstrap.css", "admin/plugins/html5fileupload/html5fileupload.css", "admin/plugins/datepicker/datepicker3.css", "admin/plugins/jquery.tagsinput/jquery.tagsinput.css");
        $this->view->publicHeader_js = array("admin/plugins/pdfobject-master/pdfobject.min.js");
        $this->view->public_js = array("admin/plugins/datatables/jquery.dataTables.min.js", "admin/plugins/datatables/dataTables.bootstrap.min.js", "admin/plugins/html5fileupload/html5fileupload.min.js", "admin/plugins/datepicker/bootstrap-datepicker.js", "admin/plugins/jquery.tagsinput/jquery.tagsinput.js", "admin/plugins/ckeditor/ckeditor.js");
        $this->view->title = 'Listado de modelos';

        $this->view->render('admin/header');
        $this->view->render('admin/modelos/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    /**
     * Funcion para cargar el DataTable de modelos
     */
    public function cargarDTModelos() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTModelos();
        echo $data;
    }

    public function modalEditarModelo() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarModelo($data);
        echo $datos;
    }

    public function modalEditarExterior() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarExterior($data);
        echo $datos;
    }

    public function modalEditarVersion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarVersion($data);
        echo $datos;
    }
    
    public function modalEditarCuotas() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarCuotas($data);
        echo $datos;
    }

    public function frmEditarModelo() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['modelo']['id']),
            'descripcion' => (!empty($_POST['modelo']['descripcion'])) ? $this->helper->cleanInput($_POST['modelo']['descripcion']) : NULL,
            'garantia' => (!empty($_POST['modelo']['garantia'])) ? $this->helper->cleanInput($_POST['modelo']['garantia']) : NULL,
            'estado' => (!empty($_POST['modelo']['estado'])) ? $this->helper->cleanInput($_POST['modelo']['estado']) : 0,
            'id_tipo_vehiculo' => $this->helper->cleanInput($_POST['modelo']['id_tipo_vehiculo']),
            'orden' => (!empty($_POST['modelo']['orden'])) ? $this->helper->cleanInput($_POST['modelo']['orden']) : NULL,
            'meta_descripcion' => (!empty($_POST['modelo']['meta_descripcion'])) ? $this->helper->cleanInput($_POST['modelo']['meta_descripcion']) : NULL
        );
        $datos = $this->model->frmEditarModelo($data);
        echo $datos;
    }

    public function frmEditarImagenModelo() {
        $data = array(
            'id' => $this->helper->cleanInput($_POST['imagen']['id']),
            'titulo' => (!empty($_POST['imagen']['titulo'])) ? $this->helper->cleanInput($_POST['imagen']['titulo']) : NULL,
            'orden' => (!empty($_POST['imagen']['orden'])) ? $this->helper->cleanInput($_POST['imagen']['orden']) : NULL,
            'descripcion' => (!empty($_POST['imagen']['descripcion'])) ? $this->helper->cleanInput($_POST['imagen']['descripcion']) : NULL
        );
        $this->model->frmEditarImagenModelo($data);
    }

    public function cambiarEstadoModelo() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->cambiarEstadoModelo($datos);
        echo $data;
    }

    public function cambiarEstadoModeloVersion() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->cambiarEstadoModeloVersion($datos);
        echo $data;
    }

    public function editVersionDatos() {
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'campo' => $this->helper->cleanInput($_POST['campo'])
        );
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->editVersionDatos($datos);
        echo $data;
    }
    
    public function editInputDescripcion() {
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'value' => $this->helper->cleanInput($_POST['value'])
        );
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->editInputDescripcion($datos);
        echo $data;
    }
    
    public function editInputPrecio() {
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'value' => $this->helper->cleanInput($_POST['value'])
        );
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->editInputPrecio($datos);
        echo $data;
    }
    
    public function editInputBono() {
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'value' => $this->helper->cleanInput($_POST['value'])
        );
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->editInputBono($datos);
        echo $data;
    }
    
    public function editInputAno() {
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'value' => $this->helper->cleanInput($_POST['value'])
        );
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->editInputAno($datos);
        echo $data;
    }
    
    public function inputEditarDatosCuotas() {
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'campo' => $this->helper->cleanInput($_POST['campo'])
        );
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->inputEditarDatosCuotas($datos);
        echo $data;
    }

    public function uploadFichaTecnica() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualFichaTecnica($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/fichas/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            $data = array(
                'id' => $idPost,
                'ficha' => $filename
            );
            $response = $this->model->uploadFichaTecnica($data);
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        }
    }

    public function uploadImgMenu() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualImgMenu($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/vehiculos/imagenes/thumb-menu/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            $data = array(
                'id' => $idPost,
                'img' => $filename
            );
            $response = $this->model->uploadImgMenu($data);
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        }
    }

    public function uploadImgLogoModelo() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualImgLogoModelo($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/vehiculos/logos/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            $data = array(
                'id' => $idPost,
                'img' => $filename
            );
            $response = $this->model->uploadImgLogoModelo($data);
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        }
    }

    public function uploadImgCompraUnKia() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualImgCompraUnKia($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir_w = 'public/img/vehiculos/imagenes/w/';
            $dir_m = 'public/img/vehiculos/imagenes/m/';
            $dir_t = 'public/img/vehiculos/imagenes/t/';
            $serverdir_w = $dir_w;
            $serverdir_m = $dir_m;
            $serverdir_t = $dir_t;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename_w = $filename . '-w.' . $extension;
            $filename_m = $filename . '-m.' . $extension;
            $filename_t = $filename . '-t.' . $extension;
            #W
            $handle = fopen($serverdir_w . $filename_w, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #M
            $handle = fopen($serverdir_m . $filename_m, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #T
            $handle = fopen($serverdir_t . $filename_t, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            $data = array(
                'id' => $idPost,
                'img_w' => $filename_w,
                'img_m' => $filename_m,
                'img_t' => $filename_t,
            );
            $response = $this->model->uploadImgCompraUnKia($data);
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        }
    }

    public function uploadImagenVehiculo() {
        if (!empty($_POST)) {
            $data = array();
            $data['id'] = $this->helper->cleanInput($_POST['data']['id']);
            $data['tipo'] = $this->helper->cleanInput($_POST['data']['tipo']);
            $data['lugar'] = $this->helper->cleanInput($_POST['data']['lugar']);
            $data['dispositivo'] = $this->helper->cleanInput($_POST['data']['dispositivo']);
            $color = NULL;
            switch ($data['dispositivo']) {
                case 'escritorio':
                    $dispositivo = 'w';
                    $ancho = 1920;
                    $alto = 1200;
                    break;
                case 'tablet':
                    $dispositivo = 't';
                    $ancho = 873;
                    $alto = 546;
                    break;
                case 'movil':
                    $dispositivo = 'm';
                    $ancho = 1280;
                    $alto = 800;
                    break;
                case 'miniatura_color':
                    $dispositivo = 'ico';
                    $color = 'on';
                    break;
                case 'miniatura_bn':
                    $dispositivo = 'ico';
                    $color = 'off';
                    break;
            }
            #eliminamos la imagen anterior
            if ($color != 'off')
                $this->model->unlinkActualImagenVehiculo($data['id'], $dispositivo, $color);
            $dir = 'public/img/vehiculos/imagenes/' . $dispositivo . '/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($data['id'] . '_' . $name);
            if ($dispositivo != 'ico') {
                $filename = $filename . '_' . $dispositivo . '.' . $extension;
            } else {
                if ($data['dispositivo'] == 'miniatura_color') {
                    $filename = $filename . '_on' . '.' . $extension;
                } else {
                    $filename = $filename . '_off' . '.' . $extension;
                }
            }
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            #redimensionamos la imagen original
            if (($data['dispositivo'] != 'miniatura_color') && ($data['dispositivo'] != 'miniatura_bn')) {
                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            }
            if ($dispositivo != 'ico') {
                $campo = 'img_' . $dispositivo;
            } else {
                $campo = 'img_thumb';
            }
            $data = array(
                'id' => $data['id'],
                'img' => $campo,
                'imagen' => $filename
            );
            $response = $this->model->uploadImagenVehiculo($data);
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($response);
        }
    }

}
