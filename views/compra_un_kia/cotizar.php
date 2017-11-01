<?php
$helper = new Helper();
$modelo = $helper->getModelos();
?>
<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Cotizar</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="<?= URL; ?>" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="#" property="name" typeof="WebPage"><span class="depth" property="name">Compra un Kia</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  2>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Cotizar</strong>
                                <meta property="position" content=  3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="request-a-quote section">
                <div class="content_detail" ng-controller="requestaquote.steps" ng-init="init()">
                    <div class="inner request_quote" ng-show="step == 1">
                        <ol class="stepType01 quoteStep">
                            <li class="stepWrap on">
                                <div class="stepbar bar01">
                                    <div class="txt" style="padding-left: 15px;">
                                        <strong>Financia tu KIA 0Km</strong> 
                                        <span class="ex">con Garden Automotores S.A.</span>
                                    </div>
                                </div>
                                <div class="stepCon">
                                    <div class="parsys car-selector">
                                        <div class="parsys person-info-new">
                                            <div class="userdata-keyin-new section">
                                                <form name="datainfo-comp-form" method="POST" action="" novalidate="novalidate" class="ng-pristine ng-valid">
                                                    <ul class="info_tbl">
                                                        <li class="info_tr">
                                                            <div class="info_th">Vehículo</div>
                                                            <div class="info_td">
                                                                <span class="form_wrp only">
                                                                    <span class="sel_box inp_sel">
                                                                        <select class="form_select" name="modelo" id="modelo" title="Modelo">
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
                                                            <div class="info_th">Version</div>
                                                            <div class="info_td" id="versionSelect">


                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="infoCotizacion" style="display: none;" id="infoCotizacion">

                                                    </div>
                                                </form>	
                                            </div>
                                            <div class="step_ctrl" style=" display: none" id="divEnviarCotizacion">
                                                <a class="btnMedium btnType1" id="btnEnviarCotizacion">
                                                    <span class="btnIcon arrow_r">Enviar Cotización</span></a>
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
        $('#modelo').on('change', function () {
            var id = this.value;
            $.ajax({
                url: "<?= URL; ?>compra_un_kia/datosVersion",
                type: "POST",
                data: {id: id},
                dataType: "json"
            }).done(function (data) {
                $("#versionSelect").html(data);
            });
        })
        $(document).on("change", "#version", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = this.value;
                $.ajax({
                    url: "<?= URL; ?>compra_un_kia/mostrarPrecioVersion",
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $("#infoCotizacion").css('display', 'block');
                    $("#divEnviarCotizacion").css('display', 'block');
                    $("#infoCotizacion").css('padding', '20px');
                    $("#infoCotizacion").html(data);
                });
            }
            e.handled = true;
        });
        $(document).on("click", "#btnEnviarCotizacion", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var nombre = $("#txtNombreCotizacion");
                var email = $("#txtEmailCotizacion");
                var terminos = false;
                var id_version = $("#version").val();
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
                if (nombre.val().trim().length == 0) {
                    nombre.css("border", "3px solid red");
                } else {
                    nombre.css("border", "1px solid #d6d6d6");
                }
                if (email.val().trim().length == 0) {
                    email.css("border", "3px solid red");
                } else {
                    email.css("border", "1px solid #d6d6d6");
                }
                if (nombre.val().trim().length > 0 && email.val().trim().length > 0 && terminos == true) {
                    if (validarEmail(email.val())) {
                        $.ajax({
                            url: "<?= URL; ?>compra_un_kia/enviarCotizacion",
                            type: "POST",
                            data: {nombre: nombre.val(), email: email.val(), id_version},
                            dataType: "json"
                        }).done(function (data) {
                            $('#infoCotizacion').html(data)
                        });
                    } else {
                        email.css("border", "3px solid red");
                    }
                }
            }
            e.handled = true;
        });
    });
</script>