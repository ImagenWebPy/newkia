<?php

class Experiencia_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function laEmpresa() {
        $sql = $this->db->select("SELECT img, contenido FROM `la_empresa` where id = 1;");
        return $sql[0];
    }

}
