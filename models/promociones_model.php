<?php

class Promociones_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function promociones() {
        $sql = $this->db->select("select * from promociones where estado = 1 order by fecha DESC");
        return $sql;
    }

}
