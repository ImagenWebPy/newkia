<?php

class Pagina_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function paginas($seccion) {
        $sql = $this->db->select("select $seccion from paginas LIMIT 1");
        return $sql[0][$seccion];
    }

}
