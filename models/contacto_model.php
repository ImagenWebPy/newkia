<?php

class Contacto_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function metodoContacto($id = NULL) {
        $where = '';
        if (!empty($id))
            $where = "and id = $id";
        $sql = $this->db->select("SELECT id, descripcion FROM preferencia_contacto where estado = 1 $where;");
        return $sql;
    }

    public function seccionContacto($id = NULL) {
        $where = '';
        if (!empty($id))
            $where = "and id = $id";
        $sql = $this->db->select("SELECT id, descripcion, email FROM seccion_contacto where estado = 1 $where;");
        return $sql;
    }

    public function sendContactData($data) {
        $seccion = $this->seccionContacto($data['seccion']);
        $contacto = $this->metodoContacto($data['contacto']);
        $para = $seccion[0]['email'];
        $asunto = 'Formulario de contactos - KIA';
        $mensaje = '
                    <table width="800" border="0" cellspacing="0" cellpadding="5">
                        <tr>
                                <td colspan="2"><h2>Formulario de contactos - KIA</h2><hr /></td>
                        </tr>
                        <tr>
                                <td colspan="2" bgcolor="#CCCCCC">Mensaje enviado en fecha: ' . date('Y-m-d H:i:s') . '</td>
                        </tr>
                                <td width="155" align="right"><strong>Seccion:</strong></td>
                                <td width="625">' . $seccion[0]['descripcion'] . '</td>
                        </tr>
                        </tr>
                                <td width="155" align="right"><strong>Metodo de Contacto:</strong></td>
                                <td width="625">' . $contacto[0]['descripcion'] . '</td>
                        </tr>
                        <tr>
                                <td width="155" align="right"><strong>Nombres:</strong></td>
                                <td width="625">' . $data['nombre'] . '</td>
                        </tr>
                        <tr>
                                <td align="right"><strong>Apellido:</strong></td>
                                <td>' . $data['apellido'] . '</td>
                        </tr>
                        <tr>
                                <td align="right"><strong>E-mail:</strong></td>
                                <td>' . $data['email'] . '</td>
                        </tr>
                        <tr>
                                <td align="right"><strong>Celular:</strong></td>
                                <td>' . $data['celular'] . '</td>
                        </tr>
                        <tr>
                                <td align="right"><strong>Teléfono:</strong></td>
                                <td>' . $data['telefono'] . '</td>
                        </tr>
                        <tr>
                                <td align="right" valign="top"><strong>Mensaje</strong></td>
                                <td align="left" valign="top">' . $data['mensaje'] . '</td>
                        </tr>
                        <tr align="left" valign="top">
                                <td colspan="2" align="left" valign="top"><hr /></td>
                        </tr>
                </table>';
        $this->helper->sendMail($para, $asunto, $mensaje);
        #insertamos los datos en la BD
        $this->db->insert('solicitud_contacto', array(
            'id_seccion_contacto' => $data['seccion'],
            'id_preferencia_contacto' => $data['contacto'],
            'nombre' => utf8_decode($data['nombre']),
            'apellido' => utf8_decode($data['apellido']),
            'email' => $data['email'],
            'celular' => $data['celular'],
            'telefono' => $data['telefono'],
            'mensaje' => utf8_decode($data['mensaje']),
            'fecha' => date('Y-m-d H:i:s')
        ));
        $datos = '<span class="precioContado">Muchas gracias por contactarnos <strong>' . $data['nombre'] . '</strong>. Su mensaje fue enviado con éxito</span>';
        return json_encode($datos);
    }

}
