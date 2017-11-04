<?php

class Noticias_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function listado($pagina = NULL) {
        if (!empty($pagina)) {
            $page = $pagina;
        } else {
            $page = 1;
        }
        $setLimit = CANT_REG;
        $pageLimit = ($setLimit * $page) - $setLimit;
        $sql = $this->db->select("SELECT n.id,
                                        n.`img_thumb`,
                                        n.titulo,
                                        n.fecha 
                                FROM `noticia` n
                                where n.estado = 1
                                ORDER BY n.fecha DESC
                                LIMIT $pageLimit, $setLimit");
        $data = array(
            'listado' => $sql,
            'paginador' => $this->helper->mostrarPaginador($setLimit, $page, 'noticia', 'noticias/listado')
        );
        return $data;
    }

    public function detalle($id) {
        $sql = $this->db->select("select * from noticia where id = $id");
        return $sql[0];
    }

}
