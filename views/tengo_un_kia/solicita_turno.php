<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Solicitá un Turno</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href='<?= URL; ?>' property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="#" property="name" typeof="WebPage"><span class="depth" property="name">Tengo un Kia</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=2>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Solicitá un Turno</strong>
                                <meta property="position" content=3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="recall section">
                <div class="content_detail" ng-controller="recall.list" ng-init="init()" >
                    <!-- Recall -->
                    <div class="inner recall" ng-show="pageType == 'recallSearch'" >
                        <div class="con_box">
                            <img src="<?= URL; ?>public/img/<?= $this->turno['img']; ?>" alt="<?= $this->vida0['img']; ?>" class="img-responsive" style=" width: 100%;">
                        </div>
                        <div class="con_box">
                            <div class="userdata-keyin-new section">
                                <form name="datainfo-comp-form" method="POST" action="" novalidate="novalidate" id="frmTestDrive">
                                    <ul class="info_tbl">
                                        <li class="info_tr">
                                            <div class="info_th">Tipo de Servicio<em class="ess">*</em></div>
                                            <div class="info_td">
                                                <span class="form_wrp only">
                                                    <span class="sel_box inp_sel">
                                                        <select class="form-control" name="tipoServicio" id="tipoServicio" title="Tipo de Servicio">
                                                            <option value="">Selecciona un Servicio</option>
                                                            <?php foreach ($this->tipoServicio as $item): ?>
                                                                <option value="<?= $item['id']; ?>"><?= utf8_encode($item['descripcion']); ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="info_tr">
                                            <div class="info_th">Número de C.I.<em class="ess">*</em></div>
                                            <div class="info_td">
                                                <span class="form_wrp only">
                                                    <input type="text" name="txtCi" id="txtCi" class="input_box" title="Número de CI" maxlength="50" placeholder="Número de CI">
                                                </span>
                                            </div>
                                        </li>
                                        <li class="info_tr">
                                            <div class="info_th">Celular<em class="ess">*</em></div>
                                            <div class="info_td">
                                                <span class="form_wrp only">
                                                    <input type="text" name="txtCelular" id="txtCelular" class="input_box" title="Número de Celular" maxlength="50" placeholder="Número de Celular">
                                                </span>
                                            </div>
                                        </li>
                                        <li class="info_tr">
                                            <div class="info_th">Teléfono</div>
                                            <div class="info_td">
                                                <span class="form_wrp only">
                                                    <input type="text" name="txtTelefono" id="txtTelefono" class="input_box" title="Número de Teléfono" maxlength="50" placeholder="Número de Teléfono">
                                                </span>
                                            </div>
                                        </li>
                                        <li class="info_tr">
                                            <div class="info_th">Dirección<em class="ess">*</em></div>
                                            <div class="info_td">
                                                <span class="form_wrp only">
                                                    <input type="text" name="txtDireccion" id="txtDireccion" class="input_box" title="Dirección" maxlength="50" placeholder="Dirección">
                                                </span>
                                            </div>
                                        </li>
                                        <li class="info_tr">
                                            <div class="info_th">Ciudad<em class="ess">*</em></div>
                                            <div class="info_td">
                                                <span class="form_wrp only">
                                                    <input type="text" name="txtCiudad" id="txtCiudad" class="input_box" title="Ciudad" maxlength="50" placeholder="Ciudad">
                                                </span>
                                            </div>
                                        </li>
                                        <li class="info_tr">
                                            <div class="info_th">Barrio<em class="ess">*</em></div>
                                            <div class="info_td">
                                                <span class="form_wrp only">
                                                    <input type="text" name="txtBarrio" id="txtBarrio" class="input_box" title="Barrio" maxlength="50" placeholder="Barrio">
                                                </span>
                                            </div>
                                        </li>
                                        <li class="info_tr">
                                            <div class="info_th">Modelo del vehículo<em class="ess">*</em></div>
                                            <div class="info_td">
                                                <span class="form_wrp only">
                                                    <input type="text" name="txtModelo" id="txtModelo" class="input_box" title="Modelo del vehículo" maxlength="50" placeholder="Modelo del vehículo">
                                                </span>
                                            </div>
                                        </li>
                                        <li class="info_tr">
                                            <div class="info_th">Kilometraje (Solo Números)<em class="ess">*</em></div>
                                            <div class="info_td">
                                                <span class="form_wrp only">
                                                    <input type="text" name="txtKilometraje" id="txtKilometraje" class="input_box" title="Kilometraje" maxlength="50" placeholder="Kilometraje">
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                                <p class="comment"><em class="ess">*</em> Información Requerida.</p>
                            </div>
                            <div class="step_ctrl">
                                <a class="btnMedium btnType1 pointer" id="btnSolicitarTestDrive">
                                    <span class="btnIcon arrow_r">Solicitar</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- //Recall -->
                </div>
            </div>
        </div>
    </div>
</div>