<?php
$helper = new Helper();
$modelo = $helper->getModelos();
?>
<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Prueba Tu Kia</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="http://org-www.kia.com/gt/main.html" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="http://org-www.kia.com/gt/shopping-tools.html" property="name" typeof="WebPage"><span class="depth" property="name">Compra un Kia</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  2>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Prueba tu Kia</strong>
                                <meta property="position" content=  3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="request-a-test-drive section">
                <div class="content_detail" ng-controller="" ng-init="">
                    <div class="inner request_quote" ng-show="step == 1">
                        <ol class="stepType01 quoteStep">
                            <li class="stepWrap on">
                                <div class="stepbar bar01">
                                    <div class="txt" style="padding-left: 15px;">
                                        <strong>Realizá el Test Drive</strong> 
                                        <span class="ex">de tu próximo 0KM.</span>
                                    </div>
                                </div>
                                <div class="stepCon">
                                    <div class="parsys car-selector">
                                        <div class="parsys person-info-new" id="divTestDrive">
                                            <div class="userdata-keyin-new section">
                                                <form name="datainfo-comp-form" method="POST" action="" novalidate="novalidate" id="frmTestDrive">
                                                    <ul class="info_tbl">
                                                        <li class="info_tr">
                                                            <div class="info_th">Modelo<em class="ess">*</em></div>
                                                            <div class="info_td">
                                                                <span class="form_wrp only">
                                                                    <span class="sel_box inp_sel">
                                                                        <select class="form-control" name="modelo" id="selectModelo" title="Modelo">
                                                                            <option value="">Selecciona un Modelo</option>
                                                                            <?php foreach ($modelo as $item): ?>
                                                                                <option value="<?= $item['id']; ?>"><?= utf8_encode($item['descripcion']); ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="info_tr">
                                                            <div class="info_th">Nombre Completo<em class="ess">*</em></div>
                                                            <div class="info_td">
                                                                <span class="form_wrp only">
                                                                    <input type="text" name="txtNombreCompleto" id="txtNombreCompleto" class="input_box" title="Nombre Completo" maxlength="50" placeholder="Nombre Completo">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="info_tr">
                                                            <div class="info_th">Número de C.I.<em class="ess">*</em></div>
                                                            <div class="info_td">
                                                                <span class="form_wrp only">
                                                                    <input type="text" name="txtCI" id="txtCI" class="input_box" title="Nombre Completo" maxlength="50" placeholder="Número de CI">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="info_tr">
                                                            <div class="info_th">Teléfono<em class="ess">*</em></div>
                                                            <div class="info_td">
                                                                <span class="form_wrp only">
                                                                    <input type="text" name="txtTelefono" id="txtTelefono" class="input_box" title="Número de teléfono" maxlength="50" placeholder="Número de teléfono">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="info_tr">
                                                            <div class="info_th">Email<em class="ess">*</em></div>
                                                            <div class="info_td">
                                                                <span class="form_wrp only">
                                                                    <input type="email" name="txtEmail" id="txtEmail" class="input_box" title="Correo Electrónico" maxlength="50" placeholder="Correo Electrónico">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="info_tr">
                                                            <div class="info_th">Ciudad<em class="ess">*</em></div>
                                                            <div class="info_td">
                                                                <span class="form_wrp only">
                                                                    <input type="email" name="txtCiudad" id="txtCiudad" class="input_box" title="Ciudad" maxlength="50" placeholder="Ciudad">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="info_tr">
                                                            <div class="info_th">Dirección<em class="ess">*</em></div>
                                                            <div class="info_td">
                                                                <span class="form_wrp only">
                                                                    <input type="email" name="txtDireccion" id="txtDireccion" class="input_box" title="Dirección" maxlength="50" placeholder="Dirección">
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                                <p class="comment"><em class="ess">*</em> Información Requerida.</p>
                                                <p>
                                                    <label><input type="checkbox" id="chkTerminos" name="chkTerminos">
                                                        Acepta&nbsp;términos y condiciones</label>
                                                </p>
                                            </div>
                                            <div class="step_ctrl">
                                                <a class="btnMedium btnType1 pointer" id="btnSolicitarTestDrive">
                                                    <span class="btnIcon arrow_r">Solicitar</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('#btnSolicitarTestDrive').click(function () {
            var modelo = $('#selectModelo');
            var nombre = $('#txtNombreCompleto');
            var ci = $('#txtCI');
            var telefono = $('#txtTelefono');
            var email = $('#txtEmail');
            var ciudad = $('#txtCiudad');
            var direccion = $('#txtDireccion');
            var terminos = false;
            if ($("#chkTerminos").is(':checked')) {
                terminos = true;
            }
            if (terminos == false) {
                $('#chkTerminos').css('outline-color', 'red');
                $('#chkTerminos').css('outline-style', 'solid');
                $('#chkTerminos').css('outline-width', 'thin');
            } else {
                $('#chkTerminos').css('outline-color', '#d6d6d6');
                $('#chkTerminos').css('outline-style', '#d6d6d6');
                $('#chkTerminos').css('outline-width', '#d6d6d6');
            }
            if (modelo.val().trim().length == 0) {
                modelo.css("border", "3px solid red");
            } else {
                modelo.css("border", "1px solid #d6d6d6");
            }
            if (nombre.val().trim().length == 0) {
                nombre.css("border", "3px solid red");
            } else {
                nombre.css("border", "1px solid #d6d6d6");
            }
            if (ci.val().trim().length == 0) {
                ci.css("border", "3px solid red");
            } else {
                ci.css("border", "1px solid #d6d6d6");
            }
            if (telefono.val().trim().length == 0) {
                telefono.css("border", "3px solid red");
            } else {
                telefono.css("border", "1px solid #d6d6d6");
            }
            if (email.val().trim().length == 0) {
                email.css("border", "3px solid red");
            } else {
                email.css("border", "1px solid #d6d6d6");
            }
            if (ciudad.val().trim().length == 0) {
                ciudad.css("border", "3px solid red");
            } else {
                ciudad.css("border", "1px solid #d6d6d6");
            }
            if (direccion.val().trim().length == 0) {
                direccion.css("border", "3px solid red");
            } else {
                direccion.css("border", "1px solid #d6d6d6");
            }
            if (terminos == true && modelo.val().trim().length > 0 && nombre.val().trim().length > 0 && ci.val().trim().length > 0 && ci.val().trim().length > 0 && telefono.val().trim().length > 0 && email.val().trim().length > 0 && ciudad.val().trim().length > 0 && direccion.val().trim().length > 0) {
                if (validarEmail(email.val())) {
                    $.ajax({
                        url: "<?= URL; ?>compra_un_kia/enviarSolicitudTestDrive",
                        type: "POST",
                        data: $("#frmTestDrive").serialize(),
                        dataType: "json"
                    }).done(function (data) {
                        $("#divTestDrive").html(data);
                    });
                } else {
                    email.css("border", "3px solid red");
                }
            }
        });
    });
</script>