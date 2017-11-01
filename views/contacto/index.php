<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys">
            <div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Contáctanos</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="<?= URL; ?>" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Contáctanos</strong>
                                <meta property="position" content=  4>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="contact-us section">
                <div class="content_detail" ng-controller="contactus.steps" ng-init="init()">
                    <div class="inner contact_us">
                        <div class="cuIntro">
                            <p class="introTxt1">¿Tiene comentarios o preguntas sobre nuestros modelos, servicios o promociones de Kia?</p>
                            <!--<p class="introTxt2 icopadding">Please CONTACT US at the below Telephone No. or email us.<br> We will try our best to resolve the issue.</p>-->
                        </div>
                        <div class="con_box">
                            <div class="localInfor"><div class="parsys contact-us-guide">
                                </div>
                            </div>
                            <h4 class="bl_type1">Ingrese sus datos</h4>
                            <div class="parsys person-info">
                                <div class="userdata-keyin section">
                                    <form name="datainfo-comp-form" method="POST" action="">
                                        <ul class="info_tbl">
                                            <li class="info_tr">
                                                <div class="info_th">Sección a contactar<em class="ess">*</em></div>
                                                <div class="info_td">
                                                    <span class="form_wrp only">
                                                        <span class="sel_box inp_sel">
                                                            <select class="form-control" name="selectSeccionContactar" id="selectSeccionContactar" title="Title">
                                                                <option value="">Seleccione una Sección</option>
                                                                <option value="ventas">Ventas</option>
                                                                <option value="taller">Taller</option>
                                                                <option value="rrhh">Recursos humanos</option>
                                                                <option value="presidencia">Presidencia</option>
                                                                <option value="marketing">Marketing</option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="info_tr">
                                                <div class="info_th">Nombre Completo<em class="ess">*</em></div>
                                                <div class="info_td">
                                                    <div class="form_area">
                                                        <span class="form_wrp"><input type="text" class="input_box" name="txtNombre" id="txtNombre" placeholder="Nombre" maxlength="50" title="Nombre"></span>
                                                        <span class="space"></span>
                                                        <span class="form_wrp"><input type="text" class="input_box" name="txtApellido" id="txtApellido" placeholder="Apellido" maxlength="50" title="Apellido"></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="info_tr">
                                                <div class="info_th">Preferencia de Contacto<em class="ess">*</em></div>
                                                <div class="info_td">
                                                    <span class="form_wrp only">
                                                        <span class="sel_box inp_sel">
                                                            <select class="form-control" name="selectPreferencia" id="selectPreferencia" title="Preferencia de contacto">
                                                                <option value="">Seleccione una Preferencia</option>
                                                                <option value="email">Correo</option>
                                                                <option value="celular">Celular</option>
                                                                <option value="casa">Casa</option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="info_tr" id="datainfo-comp-form-email">
                                                <div class="info_th">Correo Electrónico <em class="ess">*</em></div>
                                                <div class="info_td">
                                                    <span class="form_wrp only">
                                                        <input type="email" name="txtEmail" id="txtEmail" class="input_box" placeholder="ejemplo@ejemplo.com" title="E-mail" maxlength="50">
                                                    </span>
                                                </div>
                                            </li>		
                                            <li class="info_tr">
                                                <div class="info_th">Celular<em class="ess">*</em></div>
                                                <div class="info_td">
                                                    <span class="form_wrp only">
                                                        <input type="text" name="txtCelular" id="txtCelular" class="input_box" title="Celular" maxlength="50">
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="info_tr">
                                                <div class="info_th">Teléfono Casa</div>
                                                <div class="info_td">
                                                    <span class="form_wrp only"><input type="text" name="txtTelefono" id="txtTelefono" class="input_box" title="Teléfono Casa" maxlength="50"></span>
                                                </div>
                                            </li>
                                            <li class="info_tr">
                                                <div class="info_th">Mensaje <em class="ess">*</em><p class="info_txt">(<em class="pointcolor2" id="datainfo-comp-form-message-count">0</em>/1,000 caracteres.)</p></div>
                                                <div class="info_td">
                                                    <div class="form_wrp">
                                                        <textarea rows="5" class="input_box" name="txtMensaje" id="txtMensaje" placeholder="Puede ingresar 1,000 caracteres." title="Mensaje"></textarea>
                                                    </div>
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
                            </div>
                            <div class="cuBtn">
                                <a href="#submit" class="btnMedium btnType1" id="btnEnviarContacto"><span class="btnIcon arrow_r">Envíar</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $("#btnEnviarContacto").click(function () {
            var seccion = $('#selectSeccionContactar');
            var nombre = $('#txtNombre');
            var apellido = $('#txtApellido');
            var preferencia = $('#selectPreferencia');
            var email = $('#txtEmail');
            var celular = $('#txtCelular');
            var mensaje = $('#txtMensaje');
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
            if (seccion.val().trim().length == 0) {
                seccion.css('border', '3px solid red');
            } else {
                seccion.css('border', '1px solid #d2d6de');
            }
            if (nombre.val().trim().length == 0) {
                nombre.css('border', '3px solid red');
            } else {
                nombre.css('border', '1px solid #d2d6de');
            }
            if (apellido.val().trim().length == 0) {
                apellido.css('border', '3px solid red');
            } else {
                apellido.css('border', '1px solid #d2d6de');
            }
            if (preferencia.val().trim().length == 0) {
                preferencia.css('border', '3px solid red');
            } else {
                preferencia.css('border', '1px solid #d2d6de');
            }
            if (email.val().trim().length == 0) {
                email.css('border', '3px solid red');
            } else {
                email.css('border', '1px solid #d2d6de');
            }
            if (celular.val().trim().length == 0) {
                celular.css('border', '3px solid red');
            } else {
                celular.css('border', '1px solid #d2d6de');
            }
            if (mensaje.val().trim().length == 0) {
                mensaje.css('border', '3px solid red');
            } else {
                mensaje.css('border', '1px solid #d2d6de');
            }
            if (terminos == true && seccion.val().trim().length > 1 && nombre.val().trim().length > 1 && apellido.val().trim().length > 1 && preferencia.val().trim().length > 1 && email.val().trim().length > 1 && celular.val().trim().length > 1 && mensaje.val().trim().length > 1) {

            }
        });
    });
</script>