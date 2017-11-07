<?php

class Tengo_un_kia_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function headerUrlCentroServicios($url) {
        $seccion = '';
        switch ($url[1]) {
            case 'postventa':
                $seccion = 'Mantenimiento';
                break;
            case 'repuestos':
                $seccion = 'Repuestos';
                break;
            case 'talleres':
                $seccion = 'Talleres';
                break;
        }
        $data = '<div class="parbase global-title section">
                    <div class="content_title">
                        <!-- 20150827 GT SEO h3 > h1 -->
                        <h1 class="con_tit"><p>SERVICIO POSTVENTA</p>
                        </h1>
                        <div class="con_navi">
                            <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                                <li property="itemListElement" typeof="ListItem" style="display:inline">
                                    <a href="' . URL . '" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                    <meta property="position" content=  1>
                                </li>
                                <li property="itemListElement" typeof="ListItem" style="display:inline">
                                    <a href="#" property="name" typeof="WebPage"><span class="depth" property="name">Tengo un Kia</span><span class="gt">&gt;</span></a>
                                    <meta property="position" content=  2>
                                </li>
                                <li property="itemListElement" typeof="ListItem" style="display:inline">
                                    <a href="#" property="name" typeof="WebPage"><span class="depth" property="name">PostVenta</span><span class="gt">&gt;</span></a>
                                    <meta property="position" content=  3>
                                </li>
                                <li property="itemListElement" typeof="ListItem" style="display:inline">
                                    <strong class="depth current"property="name">' . $seccion . '</strong>
                                    <meta property="position" content=  4>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>';
        return $data;
    }

    public function headerCentroServicios($url) {
        $tabonMantenimiento = '';
        $tabonTalleres = '';
        $tabonRespuestos = '';
        switch ($url[1]) {
            case 'postventa':
                $tabonMantenimiento = 'tab_on';
                break;
            case 'talleres':
                $tabonTalleres = 'tab_on';
                break;
            case 'repuestos':
                $tabonRespuestos = 'tab_on';
                break;
        }
        $data = '<div class="tab_type3">
                    <a href="#" class="input_box"><span>Maintenance</span></a>
                    <ul>
                        <li class="tab_li"><a href="' . URL . 'tengo_un_kia/postventa" class="tab_a ' . $tabonMantenimiento . '"><span class="tab_tspr tab_svc1">Mantenimiento</span></a></li>
                        <li class="tab_li"><a href="' . URL . 'tengo_un_kia/talleres" class="tab_a ' . $tabonTalleres . '"><span class="tab_tspr tab_map">Talleres</span></a></li>
                        <li class="tab_li"><a href="' . URL . 'tengo_un_kia/repuestos" class="tab_a ' . $tabonRespuestos . '"><span class="tab_tspr tab_svc2">Repuesto</span></a></li>
                    </ul>
                </div>';
        return $data;
    }

    public function listadoTalleres() {
        $sql = $this->db->select("select t.taller,
                                        t.direccion,
                                        t.ciudad,
                                        t.telefono,
                                        t.email
                                from talleres t
                                where t.estado = 1 
                                ORDER BY t.ciudad ASC");
        return $sql;
    }

    public function repuestos() {
        $sql = $this->db->select("select ra.titulo, ra.contenido
                                from respuestos_accesorios ra
                                where ra.estado = 1");
        return $sql;
    }

    public function vida0() {
        $sql = $this->db->select("select img, contenido from vida_0");
        return $sql[0];
    }

    public function turno() {
        $sql = $this->db->select("select img from turno");
        return $sql[0];
    }

    public function tipoServicio() {
        $sql = $this->db->select("select id, descripcion from tipo_servicio where estado = 1");
        return $sql;
    }

    public function enviarSolicitudTurno($data) {
        $id_tipo_servicio = $data['id_tipo_servicio'];
        $sqlServicio = $this->db->select("select descripcion from tipo_servicio where id = $id_tipo_servicio");
        $sqlMail = $this->db->select("SELECT cm.`value` FROM `config_mail` cm where cm.`data` = 'turnos';");
        $tipoServicio = utf8_encode($sqlServicio[0]['descripcion']);
        //FALTA CODIFICAR ENVIO DE EMAIL
        $para = $sqlMail[0]['value'];
        $asunto = 'Solicitud de turno - ' . $tipoServicio;
        $mensaje = '<table width="800" border="0" cellspacing="0" cellpadding="5">
                        <tr>
                            <td colspan="2"><h2>' . $asunto . '</h2><hr /></td>
                        </tr>
                        <tr>
                            <td colspan="2" bgcolor="#CCCCCC">Mensaje enviado en fecha: ' . date('d-m-Y H:i:s') . '</td>
                        </tr>
                        <tr>
                            <td colspan="2" bgcolor="#CCCCCC">Datos Personales del titular:</td>
                        </tr>
                        <tr>
                            <td align="right"><strong>Titular:</strong></td>
                            <td>' . $data['nombre'] . '</td>
                        </tr>
                        <tr>
                            <td align="right"><strong>Documento Nro.:</strong></td>
                            <td>' . $data['ci'] . '</td>
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
                            <td align="right"><strong>Domicilio:</strong></td>
                            <td>' . $data['direccion'] . '</td>
                        </tr>
                        <tr>
                            <td align="right"><strong>Barrio:</strong></td>
                            <td>' . $data['barrio'] . '</td>
                        </tr>
                        <tr>
                            <td align="right"><strong>Ciudad:</strong></td>
                            <td>' . $data['ciudad'] . '</td>
                        </tr>
                        <tr>
                            <td colspan="2" bgcolor="#CCCCCC">Datos del Vehículo:</td>
                        </tr>
                        <tr>
                            <td align="right"><strong>Modelo:</strong></td>
                            <td>' . $data['modelo'] . '</td>
                        </tr>			
                        <tr>
                            <td align="right"><strong>Kilometraje:</strong></td>
                            <td>' . $data['kilometraje'] . '</td>
                        </tr>
                        <tr>
                            <td width="155" align="right"><strong>Tipo de Servicio:</strong></td>
                            <td width="625">' . $tipoServicio . '</td>
                        </tr>

                    </table>';
        $this->helper->sendMail($para, $asunto, $mensaje);
        #insertamos en la BD
        $this->db->insert('solicitud_turno', array(
            'id_tipo_servicio' => $data['id_tipo_servicio'],
            'nombre_completo' => utf8_decode($data['nombre']),
            'ci' => $data['ci'],
            'celular' => $data['celular'],
            'telefono' => $data['telefono'],
            'direccion' => utf8_decode($data['direccion']),
            'ciudad' => utf8_decode($data['ciudad']),
            'barrio' => utf8_decode($data['barrio']),
            'modelo' => utf8_decode($data['modelo']),
            'kilometraje' => $data['kilometraje'],
            'fecha' => date('Y-m-d H:i:s'),
        ));
        $datos = '<span class="successSendMail">Gracias ' . $data['nombre'] . ' por solicitar el agendamiento de ' . $tipoServicio . '. Un asesor se estará contactando contigo.</span>';
        return json_encode($datos);
    }

}
