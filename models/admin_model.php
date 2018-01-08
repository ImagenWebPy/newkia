<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function cargarDTModelos() {
        $datos = array();
        $sql = $this->db->select("select m.id, m.descripcion, m.estado, m.orden, m.img_thumb, m.estado from modelo m ORDER BY orden ASC");
        foreach ($sql as $item) {
            $id = $item['id'];
            $modelo = '<a class="pointer btnEditar" data-seccion="modelo" data-id="' . $id . '">' . utf8_encode($item['descripcion']) . '</a>';
            $exterior = '<a class="pointer btnEditar" data-seccion="exterior" data-id="' . $id . '">Editar Exterior</a>';
            $interior = '<a class="pointer btnEditar" data-seccion="interior" data-id="' . $id . '">Editar Interior</a>';
            $destacado = '<a class="pointer btnEditar" data-seccion="destacado" data-id="' . $id . '">Editar Destacado</a>';
            $desmpeno = '<a class="pointer btnEditar" data-seccion="desempeno" data-id="' . $id . '">Editar Desempeno</a>';
            $seguridad = '<a class="pointer btnEditar" data-seccion="seguridad" data-id="' . $id . '">Editar Seguridad</a>';
            $version = '<a class="pointer btnEditar" data-seccion="version" data-id="' . $id . '">Editar Version</a>';
            $dimension = '<a class="pointer btnEditar" data-seccion="dimension" data-id="' . $id . '">Editar Dimensiones</a>';
            $llanta = '<a class="pointer btnEditar" data-seccion="llanta" data-id="' . $id . '">Editar Llanta</a>';
            $motor = '<a class="pointer btnEditar" data-seccion="motor" data-id="' . $id . '">Editar Motor</a>';
            $vista360 = '<a class="pointer btnEditar" data-seccion="360" data-id="' . $id . '">Editar 360</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'modelo_' . $id,
                'modelo' => $modelo,
                'exterior' => $exterior,
                'interior' => $interior,
                'destacados' => $destacado,
                'desempeno' => $desmpeno,
                'seguridad' => $seguridad,
                'version' => $version,
                'dimension' => $dimension,
                'llanta' => $llanta,
                'motor' => $motor,
                '360' => $vista360,
                'estado' => $estado
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function modalEditarModelo($data) {
        $id = $data['id'];
        $sql = $this->db->select("select * from modelo where id = $id");
        $nombreModelo = utf8_encode($sql[0]['descripcion']);
        $form = '
                <div class="box box-primary">
                    <div class="row">
                        <form role="form" id="frmEditarModelo" method="POST">
                        </form>
                    </div>
                </div>
                ';
        $datos = array(
            'titulo' => 'Modificar datos del Modelo - ' . $nombreModelo,
            'contenido' => $form
        );
        return json_encode($datos);
    }

}
