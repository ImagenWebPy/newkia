<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function cargarDTModelos() {
        $datos = array();
        $sql = $this->db->select("select m.id, 
                                        m.descripcion,
                                        m.estado
                                from modelo m");
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnEditarProducto btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'modelo_' . $id,
                'marca' => utf8_encode($item['marca']),
                'categoria' => utf8_encode($item['categoria']),
                'producto' => utf8_encode($item['nombre']),
                'estado' => $estado
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

}
