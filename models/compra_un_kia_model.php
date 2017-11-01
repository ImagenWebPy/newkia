<?php

class Compra_un_kia_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function datosVersion($data) {
        $id = $data['id'];
        $sql = $this->db->select("select mv.id,
                                        mv.descripcion as version,
                                        mv.ano
                                from modelo_version mv
                                WHERE mv.id_modelo = $id
                                and mv.estado = 1");
        $datos = '<span class="form_wrp only">
                        <span class="sel_box inp_sel">
                            <select class="form_select" name="version" id="version" title="Version">
                                <option value="">Seleccione una version</option>';
        foreach ($sql as $item) {
            $datos .= '<option value="' . $item['id'] . '">' . utf8_encode($item['version']) . '</option>';
        }
        $datos .= '         </select>
                        </span>
                    </span>';
        return json_encode($datos);
    }

    public function mostrarPrecioVersion($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT
                                        mv.id,
                                        m.descripcion,
                                        mv.descripcion AS version,
                                        mv.ano,
                                        mv.precio,
                                        mv.bono,
                                        mvc.cuota,
                                        mvc.entrega_inicial,
                                        mo.simbologia
                                FROM modelo m
                                LEFT JOIN modelo_version mv ON mv.id_modelo = m.id
                                LEFT JOIN modelo_version_cuotas mvc ON mvc.id_version = mv.id
                                LEFT JOIN moneda mo ON mo.id = mvc.id_moneda
                                WHERE mv.id = $id
                                AND mv.estado = 1");
        $datos = '
                <span class="precioContado"> Precio contado: <strong>U$D ' . number_format($sql[0]['precio'], 0, ',', '.') . '</strong></span>
                <span class="precioCuotas"> Cuotas desde: <strong>' . $sql[0]['simbologia'] . ' ' . number_format($sql[0]['cuota'], 0, ',', '.') . '</strong></span>';
        if (!empty($sql[0]['bono'])) {
            $datos .= '<span class="precioBono"> Bono hasta: <strong> U$D' . number_format($sql[0]['bono'], 0, ',', '.') . '</strong></span>';
        }
        $datos .= '<span class="precioEntrega"> Entrega Inicial: <strong>' . $sql[0]['simbologia'] . ' ' . number_format($sql[0]['entrega_inicial'], 0, ',', '.') . '</strong></span>
                <p>Si deseás recibir esta cotización vía e-mail ingresá tu dirección de correo y nombre</p>
                <ul class="info_tbl">
                    <li class="info_tr">
                        <div class="info_th">Nombre<em class="ess">*</em></div>
                        <div class="info_td">
                            <div class="form_area">
                                <span class="form_wrp"><input type="text" class="input_box" name="fname" id="txtNombreCotizacion" maxlength="50" title="Nombre" aria-required="true"></span>
                            </div>
                        </div>
                    </li>
                    <li class="info_tr" id="datainfo-comp-form-email">
                        <div class="info_th">Correo Electrónico <em class="ess">*</em></div>
                        <div class="info_td">
                            <div class="form_area">
                                <span class="form_wrp only"><input type="email" name="email" id="txtEmailCotizacion" class="input_box" title="Correo Electrónico" maxlength="50" aria-required="true"></span>
                            </div>
                        </div>
                    </li>		
                </ul>
                <p style="margin-top:10px;">
                    <label>
                        <input type="checkbox" id="chkTerminos" name="conditions_yn">
                        Acepta términos y condiciones
                    </label>
                </p>
                <p class="mt15">
                    <label>
                        <input type="checkbox" id="newsletter_yn" name="newsletter_yn">
                        Quiero recibir noticias KIA
                    </label>
                </p>';
        return json_encode($datos);
    }

    public function enviarCotizacion($data) {
        $nombre = $data['nombre'];
        $email = $data['email'];
        $id_version = $data['id_version'];
        $sql = $this->db->select("SELECT
                                        mv.id,
                                        m.descripcion,
                                        mv.descripcion AS version,
                                        mv.ano,
                                        mv.precio,
                                        mv.bono,
                                        mvc.cuota,
                                        mvc.entrega_inicial,
                                        mo.simbologia,
                                        mvc.cantidad_cuotas
                                FROM modelo m
                                LEFT JOIN modelo_version mv ON mv.id_modelo = m.id
                                LEFT JOIN modelo_version_cuotas mvc ON mvc.id_version = mv.id
                                LEFT JOIN moneda mo ON mo.id = mvc.id_moneda
                                WHERE mv.id = $id_version
                                AND mv.estado = 1");
        $mensajeSolicitante = '
                                    <table width="800" border="0" cellspacing="0" cellpadding="5">
                                        <tr>
                                            <td colspan="2"><h2>Financia tu KIA 0Km. con Garden Automotores S.A.</h2></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><h2> Formulario de Cotización </h2><hr /></td>
                                        </tr>	
                                        <tr style="float:left;">
                                            <td colspan="2" bgcolor="#CCCCCC">Mensaje enviado en fecha: ' . date('d-m-Y H:i:s') . '</td>
                                        </tr>
                                        <tr style="float:left;">
                                            <td align="left" width="30px;"><strong>Modelo: </strong>' . $sql[0]['descripcion'] . '.</td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="30px;"><strong>Versión: </strong>' . $sql[0]['version'] . '.</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><strong>Precio Contado en USD: </strong> U$D' . number_format($sql[0]['precio'], 0, ',', '.') . '.-</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><strong>Entrega Inicial en USD: </strong> U$D' . number_format($sql[0]['entrega_inicial'], 0, ',', '.') . '.-</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><strong>Cuotas iguales en USD de: </strong> ' . $sql[0]['simbologia'] . ' ' . number_format($sql[0]['cuota'], 0, ',', '.') . '.-</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><strong>Nro. de Cuotas en USD: </strong>' . $sql[0]['cantidad_cuotas'] . '.</td>
                                        </tr>
                                        <tr align="left" valign="top">
                                            <td colspan="2" align="left" valign="top"><hr />
                                                <strong><u>Observaciones</u>:</strong></br> 
                                                * Oferta válida por 5 días desde de la fecha de cotización, para solicitar una Carta de Oferta en los Puntos de Ventas.</br>
                                                ** El precio puede variar sin previo aviso.
                                            </td>
                                        </tr>
                                    </table>';
        $this->helper->sendMail($email, 'Formulario de Cotización - KIA', $mensajeSolicitante);
        $mensajeVendedor = '
                                    <table width="800" border="0" cellspacing="0" cellpadding="5">
                                        <tr>
                                            <td colspan="2"><h2> Formulario de Cotización </h2><hr /></td>
                                        </tr>	
                                        <tr style="float:left;">
                                            <td colspan="2" bgcolor="#CCCCCC">Mensaje enviado en fecha: ' . date('d-m-Y H:i:s') . '</td>
                                        </tr>
                                        <tr style="float:left;">
                                            <td align="left" width="30px;"><strong>Modelo: </strong>' . $sql[0]['descripcion'] . '.</td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="30px;"><strong>Versión: </strong>' . $sql[0]['version'] . '.</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><strong>Precio Contado en USD: </strong> U$D' . number_format($sql[0]['precio'], 0, ',', '.') . '.-</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><strong>Entrega Inicial en USD: </strong> U$D' . number_format($sql[0]['entrega_inicial'], 0, ',', '.') . '.-</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><strong>Cuotas iguales en USD de: </strong> ' . $sql[0]['simbologia'] . ' ' . number_format($sql[0]['cuota'], 0, ',', '.') . '.-</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><strong>Nro. de Cuotas en USD: </strong>' . $sql[0]['cantidad_cuotas'] . '.</td>
                                        </tr>
                                        <tr>
                                            <td align="right"><strong>E-mail Solicitante:</strong></td>
                                            <td>' . $email . '</td>
                                        </tr>
                                    </table>';
        $this->helper->sendMail('ssomoza@garden.com.py,dabenitez@garden.com.py,jpena@garden.com.py', 'Formulario de Cotización - KIA', $mensajeVendedor);
        #insertamos en la BD
        $this->db->insert('solicitud_cotizador', array(
            'fecha' => date('Y-m-d H:i:s'),
            'modelo' => $sql[0]['descripcion'],
            'version' => $sql[0]['version'],
            'precio' => $sql[0]['precio'],
            'entrega' => $sql[0]['entrega_inicial'],
            'cuotas' => $sql[0]['cuota'],
            'cantidad' => $sql[0]['cantidad_cuotas'],
            'email' => $email,
            'nombre' => $nombre
        ));
        $datos = '<span class="successSendMail">Gracias ' . $nombre . '. Te hemos enviado la cotización a tu correo.</span>';
        return json_encode($datos);
    }

}
