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
            $exterior = '<a class="pointer btnEditar" data-seccion="exterior" data-id="' . $id . '">Exterior</a> | <a class="pointer btnEditar" data-seccion="exterior_seccion" data-id="' . $id . '">Ext. Sección</a>';
            $interior = '<a class="pointer btnEditar" data-seccion="interior" data-id="' . $id . '">Interior</a> | <a class="pointer btnEditar" data-seccion="interior_seccion" data-id="' . $id . '">Int. Sección</a>';
            $destacado = '<a class="pointer btnEditar" data-seccion="destacado" data-id="' . $id . '">Editar Destacado</a>';
            $desmpeno = '<a class="pointer btnEditar" data-seccion="desempeno" data-id="' . $id . '">Editar Desempeno</a>';
            $seguridad = '<a class="pointer btnEditar" data-seccion="seguridad" data-id="' . $id . '">Editar Seguridad</a>';
            $version = '<a class="pointer btnEditar" data-seccion="version" data-id="' . $id . '">Version</a> | <a class="pointer btnEditar" data-seccion="cuotas" data-id="' . $id . '">Cuotas</a>';
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

    public function modalEditarExterior($data) {
        $id = $data['id'];
        $nombreModelo = $this->db->select("select descripcion as nombre from modelo where id = $id");
        $exteriorPrincipal = $this->db->select("select * from modelo_imagenes mi 
                                                where mi.id_modelo = $id
                                                and mi.tipo = 'EXT'
                                                and mi.caracteristica = 1");
        $form = '<h4>Imagenes Destacadas</h4>
                <hr>';
        $i = 1;
        foreach ($exteriorPrincipal as $item) {
            $idModeloImagen = $item['id'];
            $form .= '
                <div class="col-md-6">
                    <div class="box box-primary collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Destacado ' . $i . '</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        </div>
                        <div class="box-body" style="display: none;">
                            <img class="img-responsive" src="' . URL . 'public/img/vehiculos/imagenes/w/' . $item['img_w'] . '" alt="Photo">
                            <form role="form" id="frmEditarImagenModelo" method="POST" style="margin-top: 10px;">
                                <input type="hidden" name="imagen[id]" value="' . utf8_encode($item['id']) . '">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" class="form-control" name="imagen[titulo]" placeholder="Título" value="' . utf8_encode($item['titulo']) . '">
                                </div>
                                <div class="form-group">
                                    <label>Orden</label>
                                    <input type="text" class="form-control" name="imagen[orden]" placeholder="Orden" value="' . utf8_encode($item['orden']) . '">
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea class="form-control" rows="3" name="imagen[descripcion]" placeholder="Ingrese la descripcion">' . utf8_encode($item['descripcion']) . '</textarea>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Guardar cambios</button>
                            </form>
                            <div class="form-group subirImagenes">
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-info"></i> IMPORTANTE!!!</h4>
                                    Para cada imagen destacada, hay que subir 3 dimensiones (Para versiones de escritorio, para tablets y para moviles). Si no se suben las tres imagenes,
                                    en uno de los dispositivos no aparecerá la imagen.
                                </div>
                                <label>Imagen Escritorio</label>
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-info"></i> Imagen p/versiones de Escritorio</h4>
                                    Formato Archivo: jpg, gif.<br>
                                    Dimension: 1920 x 1200px.<br>
                                    Tamaño Max: 6MB.
                                </div>
                                <div class="html5fileupload fileImgExteriorDestEscritorio' . $idModeloImagen . '" data-max-filesize="6144000" data-url="' . URL . 'admin/uploadImagenVehiculo" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,gif,PNG,bmp,BMP" style="width: 100%;">
                                    <input type="file" name="file_imgVehiculo" />
                                </div>
                                <script>
                                $(".html5fileupload.fileImgExteriorDestEscritorio' . $idModeloImagen . '").html5fileupload({
                                    data:{id:' . $idModeloImagen . ', tipo: "EXT", lugar: "caracteristica", dispositivo: "escritorio"},
                                    onAfterStartSuccess: function(response) {
                                        
                                    }
                                });
                                </script>
                            </div>
                            <div class="form-group subirImagenes">
                                <label>Imagen Móvil</label>
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-info"></i> Imagen p/versiones de Moviles</h4>
                                    Formato Archivo: jpg, gif.<br>
                                    Dimension: 873 x 546px.<br>
                                    Tamaño Max: 6MB.
                                </div>
                                <div class="html5fileupload fileImgExteriorDestMovil' . $idModeloImagen . '" data-max-filesize="6144000" data-url="' . URL . 'admin/uploadImagenVehiculo" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,gif,PNG,bmp,BMP" style="width: 100%;">
                                    <input type="file" name="file_imgVehiculo" />
                                </div>
                                <script>
                                $(".html5fileupload.fileImgExteriorDestMovil' . $idModeloImagen . '").html5fileupload({
                                    data:{id:' . $idModeloImagen . ', tipo: "EXT", lugar: "caracteristica", dispositivo: "movil"},
                                    onAfterStartSuccess: function(response) {
                                        
                                    }
                                });
                                </script>
                            </div>
                            <div class="form-group subirImagenes">
                                <label>Imagen Tablet</label>
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-info"></i> Imagen p/versiones de Tablets</h4>
                                    Formato Archivo: jpg, gif.<br>
                                    Dimension: 1280 x 800px.<br>
                                    Tamaño Max: 6MB.
                                </div>
                                <div class="html5fileupload fileImgExteriorDestTablet' . $idModeloImagen . '" data-max-filesize="6144000" data-url="' . URL . 'admin/uploadImagenVehiculo" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,gif,PNG,bmp,BMP" style="width: 100%;">
                                    <input type="file" name="file_imgVehiculo" />
                                </div>
                                <script>
                                $(".html5fileupload.fileImgExteriorDestTablet' . $idModeloImagen . '").html5fileupload({
                                    data:{id:' . $idModeloImagen . ', tipo: "EXT", lugar: "caracteristica", dispositivo: "tablet"},
                                    onAfterStartSuccess: function(response) {
                                        
                                    }
                                });
                                </script>
                            </div>
                            <div class="form-group subirImagenes">
                                <label>Imagen Miniatura Color</label>
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-info"></i> Imagen para la miniatura</h4>
                                    Formato Archivo: png<br>
                                    Dimension: 80 x 80px.<br>
                                    Tamaño Max: 6MB.
                                </div>
                                <div class="html5fileupload fileMiniaturaExteriorColor' . $idModeloImagen . '" data-max-filesize="6144000" data-url="' . URL . 'admin/uploadImagenVehiculo" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,gif,PNG,bmp,BMP" style="width: 100%;">
                                    <input type="file" name="file_imgVehiculo" />
                                </div>
                                <script>
                                $(".html5fileupload.fileMiniaturaExteriorColor' . $idModeloImagen . '").html5fileupload({
                                    data:{id:' . $idModeloImagen . ', tipo: "EXT", lugar: "caracteristica", dispositivo: "miniatura_color"},
                                    onAfterStartSuccess: function(response) {
                                        
                                    }
                                });
                                </script>
                            </div>
                            <div class="form-group subirImagenes">
                                <label>Imagen Miniatura Blanco y  Negro</label>
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-info"></i> Imagen para la miniatura</h4>
                                    Formato Archivo: png<br>
                                    Dimension: 80 x 80px.<br>
                                    Tamaño Max: 6MB.<br>
                                    <strong>Obs.: El nombre de la imagen en miniatura tiene que ser subida con el mismo nombre de la miniatura color</strong>
                                </div>
                                <div class="html5fileupload fileMiniaturaExteriorBN' . $idModeloImagen . '" data-max-filesize="6144000" data-url="' . URL . 'admin/uploadImagenVehiculo" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,gif,PNG,bmp,BMP" style="width: 100%;">
                                    <input type="file" name="file_imgVehiculo" />
                                </div>
                                <script>
                                $(".html5fileupload.fileMiniaturaExteriorBN' . $idModeloImagen . '").html5fileupload({
                                    data:{id:' . $idModeloImagen . ', tipo: "EXT", lugar: "caracteristica", dispositivo: "miniatura_bn"},
                                    onAfterStartSuccess: function(response) {
                                        $("#imgMenuModelo" + response.id).html(response.content);
                                    }
                                });
                                </script>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>';
            $i++;
        }
        $form .= '<div class="clearfix"></div>
                <h4>Imagenes Pie</h4>
                <hr>';
        $datos = array(
            'titulo' => 'Modificar datos del Exterior - ' . utf8_encode($nombreModelo[0]['nombre']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEditarModelo($data) {
        $id = $data['id'];
        $sql = $this->db->select("select * from modelo where id = $id");
        $sqlTipoVehiculo = $this->db->select("select id, descripcion from tipo_vehiculo where estado = 1");
        $nombreModelo = utf8_encode($sql[0]['descripcion']);
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '
                <div class="box box-primary">
                    <form role="form" id="frmEditarModelo" method="POST">
                        <input type="hidden" name="modelo[id]" value="' . utf8_encode($sql[0]['id']) . '">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre Modelo</label>
                                <input type="text" class="form-control" name="modelo[descripcion]" placeholder="Nombre Modelo" value="' . utf8_encode($sql[0]['descripcion']) . '">
                            </div>
                            <div class="form-group">
                                <label>Garantía</label>
                                <input type="text" class="form-control" name="modelo[garantia]" placeholder="Nombre Modelo" value="' . utf8_encode($sql[0]['garantia']) . '">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="modelo[estado]" value="1" ' . $checked . '>
                                        Mostrar
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control" name="modelo[id_tipo_vehiculo]">
                                    <option value="">Seleccione una Categoría</option>';
        foreach ($sqlTipoVehiculo as $item) {
            $selected = ($item['id'] === $sql[0]['id_tipo_vehiculo']) ? 'selected' : '';
            $form .= '              <option value="' . $item['id'] . '" ' . $selected . '>' . utf8_encode($item['descripcion']) . '</option>';
        }
        $form .= '              </select>
                            </div>
                            <div class="form-group">
                                <label>Orden</label>
                                <input type="number" class="form-control" name="modelo[orden]" placeholder="Número" value="' . utf8_encode($sql[0]['orden']) . '">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>MetaTag Descipcion</label>
                                <textarea class="form-control" rows="3" name="modelo[meta_descripcion]" placeholder="Ingrese la descripcion">' . utf8_encode($sql[0]['meta_descripcion']) . '</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-block btn-primary btn-lg">Guardar cambios</button>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="form-group">
                        <label>Logo del Modelo</label>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Datos de la Imagen!</h4>
                            Subir archivos PNG sin fondo (con transparencia).<br>
                            Dimension: 276 x 74px.<br>
                            Tamaño Max: 6MB.
                         </div>
                        <div class="html5fileupload fileImgLogoModelo" data-max-filesize="6144000" data-url="' . URL . 'admin/uploadImgLogoModelo" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,gif,PNG,bmp,BMP" style="width: 100%;">
                            <input type="file" name="file_imgMenu" />
                        </div>
                        <script>
                            $(".html5fileupload.fileImgLogoModelo").html5fileupload({
                                data:{id:' . $id . '},
                                onAfterStartSuccess: function(response) {
                                    $("#imgLogoModelo" + response.id).html(response.content);
                                }
                            });
                        </script>
                    </div>
                    <div class col-md-12 id="imgLogoModelo' . $id . '">';
        if (!empty($sql[0]['logo'])) {
            $form .= '  <img class="img-responsive" src="' . URL . 'public/img/vehiculos/logos/' . $sql[0]['logo'] . '">';
        }
        $form .= '  </div>
                    <hr class="separador">
                    <div class="form-group">
                        <label>Imagen del Menú</label>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Datos de la Imagen!</h4>
                            Subir archivos PNG sin fondo (con transparencia).<br>
                            Dimension: 246 x 130px.<br>
                            Tamaño Max: 6MB.
                         </div>
                        <div class="html5fileupload fileImgMenu" data-max-filesize="6144000" data-url="' . URL . 'admin/uploadImgMenu" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,gif,PNG,bmp,BMP" style="width: 100%;">
                            <input type="file" name="file_imgMenu" />
                        </div>
                        <script>
                            $(".html5fileupload.fileImgMenu").html5fileupload({
                                data:{id:' . $id . '},
                                onAfterStartSuccess: function(response) {
                                    $("#imgMenuModelo" + response.id).html(response.content);
                                }
                            });
                        </script>
                    </div>
                    <div class col-md-12 id="imgMenuModelo' . $id . '">';
        if (!empty($sql[0]['img_thumb'])) {
            $form .= '  <img class="img-responsive" src="' . URL . 'public/img/vehiculos/imagenes/thumb-menu/' . $sql[0]['img_thumb'] . '">';
        }
        $form .= '  </div>
                    <hr class="separador">
                    <div class="form-group">
                        <label>Imagen del Modelo - Seccion: Compra un Kia</label>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Datos de la Imagen!</h4>
                            Subir archivos PNG sin fondo (con transparencia).<br>
                            Dimension: 1000 x 350px.<br>
                            Tamaño Max: 6MB.
                         </div>
                        <div class="html5fileupload fileImgCompraUnKia" data-max-filesize="6144000" data-url="' . URL . 'admin/uploadImgCompraUnKia" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,gif,PNG,bmp,BMP" style="width: 100%;">
                            <input type="file" name="file_imgCompraUnKia" />
                        </div>
                        <script>
                            $(".html5fileupload.fileImgCompraUnKia").html5fileupload({
                                data:{id:' . $id . '},
                                onAfterStartSuccess: function(response) {
                                    $("#imgCompraUnKia" + response.id).html(response.content);
                                }
                            });
                        </script>
                    </div>
                    <div class col-md-12 id="imgCompraUnKia' . $id . '">';
        if (!empty($sql[0]['img_w'])) {
            $form .= '  <img class="img-responsive" src="' . URL . 'public/img/vehiculos/imagenes/w/' . $sql[0]['img_w'] . '">';
        }
        $form .= '  </div>
                    <hr class="separador">
                    <div class="form-group">
                        <label>Ficha Técnica</label>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Datos del archivo!</h4>
                            Tipo de Archivo: PDF<br>
                            Tamaño Máximo: 3MB
                         </div>
                        <div class="html5fileupload fileFichaTecnica" data-max-filesize="3072000" data-url="' . URL . 'admin/uploadFichaTecnica" data-valid-extensions="pdf,PDF" style="width: 100%;">
                            <input type="file" name="file_fichaTecnica" />
                        </div>
                        <script>
                            $(".html5fileupload.fileFichaTecnica").html5fileupload({
                                data:{id:' . $id . '},
                                onAfterStartSuccess: function(response) {
                                    if (response.result == true)
                                        PDFObject.embed("' . URL . 'public/fichas/" + response.content, "#viewFichaTecnica" + response.id);
                                }
                            });
                        </script>
                    </div>
                    <div class="fichaTecnica" id="viewFichaTecnica' . $id . '"></div>
                </div>';
        if (!empty($sql[0]['ficha'])) {
            $form .= '<script>PDFObject.embed("' . URL . 'public/fichas/' . $sql[0]['ficha'] . '", "#viewFichaTecnica' . $id . '");</script>';
        }
        $datos = array(
            'titulo' => 'Modificar datos del Modelo - ' . $nombreModelo,
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEditarVersion($data) {
        $id = $data['id'];
        $sql = $this->db->select("select mv.*,
                                    m.descripcion as modelo
                                from modelo_version mv
                                LEFT JOIN modelo m on m.id = mv.id_modelo
                                where mv.id_modelo = $id");
        $form = '
                <div class="box box-primary">
                    <table class="table table-bordered">
                        <tbody id="version' . $id . '">
                            <tr>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Bono</th>
                                <th>Año</th>
                                <th>Estado</th>
                            </tr>';
        foreach ($sql as $item) {
            $idVersion = $item['id'];
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstadoVersion" data-id="' . $idVersion . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstadoVersion" data-id="' . $idVersion . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            $form .= '      <tr id="versionModelo' . $idVersion . '">
                                <td><span id="descripcion' . $idVersion . '" class="pointer editVersionDatos" data-campo="descripcion" data-id="' . $idVersion . '">' . utf8_encode($item['descripcion']) . '</span><span id="showInputModeloVersion' . $idVersion . '"></span></td>
                                <td><span id="precio' . $idVersion . '" class="pointer editVersionDatos" data-campo="precio" data-id="' . $idVersion . '">' . number_format($item['precio'], 0, ',', '.') . '</span><span id="showInputModeloPrecio' . $idVersion . '"></span></td>
                                <td><span id="bono' . $idVersion . '" class="pointer editVersionDatos" data-campo="bono" data-id="' . $idVersion . '">' . number_format($item['bono'], 0, ',', '.') . '</span><span id="showInputModeloBono' . $idVersion . '"></span></td>
                                <td><span id="ano' . $idVersion . '" class="pointer editVersionDatos" data-campo="ano" data-id="' . $idVersion . '">' . number_format($item['ano'], 0, ',', '.') . '</span><span id="showInputModeloAno' . $idVersion . '"></span></td>
                                <td>' . $estado . '</td>
                            </tr>';
        }
        $form .= '      </tbody>
                    </table>
                </div>';
        $datos = array(
            'titulo' => 'Modificar datos de las versiones - ' . utf8_encode($sql[0]['modelo']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEditarCuotas($data) {
        $id = $data['id'];
        $sql = $this->db->select("select mvc.id,
                                        mvc.id_version,
                                        mv.descripcion as version,
                                        mvc.id_moneda,
                                        mo.descripcion as moneda,
                                        mvc.cuota,
                                        mvc.entrega_inicial,
                                        mvc.cantidad_cuotas,
                                        m.descripcion as modelo
                                from modelo_version_cuotas mvc
                                LEFT JOIN modelo_version mv on mv.id = mvc.id_version
                                LEFT JOIN modelo m on m.id = mv.id_modelo
                                LEFT JOIN moneda mo on mo.id = mvc.id_moneda
                                where mv.id_modelo = $id");
        $form = '
                <div class="box box-primary">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Versión</th>
                                <th>Moneda</th>
                                <th>Monto Cuota</th>
                                <th>Entrega Inicial</th>
                                <th>Cantidad Cuotas</th>
                            </tr>
                        </thead>
                        <tbody id="version_cuotas' . $id . '">';
        foreach ($sql as $item) {
            $idCuota = $item['id'];
            $form .= '      <tr id="versionModeloCuota' . $idCuota . '">
                                <td><span id="version' . $idCuota . '" class="pointer editVersionCuota" data-campo="version" data-id="' . $idCuota . '">' . utf8_encode($item['version']) . '</span><span id="showInputModeloVersionCuota' . $idCuota . '"></span></td>
                                <td><span id="moneda' . $idCuota . '" class="pointer editVersionCuota" data-campo="moneda" data-id="' . $idCuota . '">' . utf8_encode($item['moneda']) . '</span><span id="showInputModeloMoneda' . $idCuota . '"></span></td>
                                <td><span id="montoCuota' . $idCuota . '" class="pointer editVersionCuota" data-campo="monto_cuota" data-id="' . $idCuota . '">' . number_format($item['cuota'], 0, ',', '.') . '</span><span id="showInputModeloMontoCuota' . $idCuota . '"></span></td>
                                <td><span id="entregaInicial' . $idCuota . '" class="pointer editVersionCuota" data-campo="entrega_inicial" data-id="' . $idCuota . '">' . number_format($item['entrega_inicial'], 0, ',', '.') . '</span><span id="showInputModeloEntregaIncial' . $idCuota . '"></span></td>
                                <td><span id="cantidadCuotas' . $idCuota . '" class="pointer editVersionCuota" data-campo="cantidad_cuotas" data-id="' . $idCuota . '">' . number_format($item['cantidad_cuotas'], 0, ',', '.') . '</span><span id="showInputModeloCantidadCuotas' . $idCuota . '"></span></td>
                            </tr>';
        }
        $form .= '      </tbody>
                    </table>
                </div>';
        $datos = array(
            'titulo' => 'Modificar datos de las cuotas del modelo - ' . utf8_encode($sql[0]['modelo']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function frmEditarModelo($data) {
        $id = $data['id'];
        $update = array(
            'id_tipo_vehiculo' => $data['id_tipo_vehiculo'],
            'descripcion' => utf8_decode($data['descripcion']),
            'garantia' => utf8_decode($data['garantia']),
            'meta_descripcion' => utf8_decode($data['meta_descripcion']),
            'orden' => $data['orden'],
            'estado' => $data['estado']
        );
        $this->db->update('modelo', $update, "id = $id");
#retornamos la fila
        $sql = $this->db->select("select m.id, m.descripcion, m.estado, m.orden, m.img_thumb, m.estado from modelo m WHERE m.id = $id");
        foreach ($sql as $item) {
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
            $fila = '<td>' . $modelo . '</td>'
                    . '<td>' . $exterior . '</td>'
                    . '<td>' . $interior . '</td>'
                    . '<td>' . $destacado . '</td>'
                    . '<td>' . $desmpeno . '</td>'
                    . '<td>' . $seguridad . '</td>'
                    . '<td>' . $version . '</td>'
                    . '<td>' . $dimension . '</td>'
                    . '<td>' . $llanta . '</td>'
                    . '<td>' . $motor . '</td>'
                    . '<td>' . $vista360 . '</td>'
                    . '<td>' . $estado . '</td>';
            $contenido = array(
                'id' => $id,
                'content' => $fila
            );
        }
        return json_encode($contenido);
    }

    public function frmEditarImagenModelo($data) {
        $id = $data['id'];
        $update = array(
            'titulo' => utf8_decode($data['titulo']),
            'descripcion' => utf8_decode($data['descripcion'])
        );
        $this->db->update('modelo_imagenes', $update, "id = $id");
    }

    public function cambiarEstadoModeloVersion($datos) {
        $id = $datos['id'];
        $estado = $datos['estado'];
        #Actualizamos el estado de acuerdo al valor actual
        if ($estado == 1)
            $newEstado = 0;
        else
            $newEstado = 1;
        $update = array(
            'estado' => $newEstado
        );
        $this->db->update('modelo_version', $update, "id = $id");
        #retornamos la fila
        $sql = $this->db->select("select * from modelo_version where id = $id");
        $fila = '';
        foreach ($sql as $item) {
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstadoVersion" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstadoVersion" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            $fila = '  <td><span id="descripcion' . $id . '" class="pointer editVersionDatos" data-campo="descripcion" data-id="' . $id . '">' . utf8_encode($item['descripcion']) . '</span><span id="showInputModeloVersion7"></span></td>
                        <td><span id="precio' . $id . '" class="pointer editVersionDatos" data-campo="precio" data-id="' . $id . '">' . number_format($item['precio'], 0, ',', '.') . '</span><span id="showInputModeloPrecio' . $id . '"></td>
                        <td><span id="bono' . $id . '" class="pointer editVersionDatos" data-campo="bono" data-id="' . $id . '">' . number_format($item['bono'], 0, ',', '.') . '</span><span id="showInputModeloBono' . $id . '"></span></td>
                        <td><span id="ano' . $id . '" class="pointer editVersionDatos" data-campo="ano" data-id="' . $id . '">' . number_format($item['ano'], 0, ',', '.') . '</span><span id="showInputModeloAno' . $id . '"></span></td>
                        <td>' . $estado . '</td>';
        }
        $contenido = array(
            'id' => $id,
            'content' => $fila
        );
        return json_encode($contenido);
    }

    public function cambiarEstadoModelo($datos) {
        $id = $datos['id'];
        $estado = $datos['estado'];
#Actualizamos el estado de acuerdo al valor actual
        if ($estado == 1)
            $newEstado = 0;
        else
            $newEstado = 1;
        $update = array(
            'estado' => $newEstado
        );
        $this->db->update('modelo', $update, "id = $id");
#retornamos la fila
        $sql = $this->db->select("select m.id, m.descripcion, m.estado, m.orden, m.img_thumb, m.estado from modelo m WHERE m.id = $id");
        foreach ($sql as $item) {
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
            $fila = '<td>' . $modelo . '</td>'
                    . '<td>' . $exterior . '</td>'
                    . '<td>' . $interior . '</td>'
                    . '<td>' . $destacado . '</td>'
                    . '<td>' . $desmpeno . '</td>'
                    . '<td>' . $seguridad . '</td>'
                    . '<td>' . $version . '</td>'
                    . '<td>' . $dimension . '</td>'
                    . '<td>' . $llanta . '</td>'
                    . '<td>' . $motor . '</td>'
                    . '<td>' . $vista360 . '</td>'
                    . '<td>' . $estado . '</td>';
            $contenido = array(
                'id' => $id,
                'content' => $fila
            );
        }
        return json_encode($contenido);
    }

    public function unlinkActualFichaTecnica($idPost) {
        $dir = 'public/fichas';
        $sql = $this->db->select("select ficha from modelo where id = $idPost");
        if (file_exists($dir . $sql[0]['ficha']))
            unlink($dir . $sql[0]['ficha']);
    }

    public function unlinkActualImgMenu($idPost) {
        $dir = 'public/img/vehiculos/imagenes/thumb-menu/';
        $sql = $this->db->select("select img_thumb from modelo where id = $idPost");
        if (file_exists($dir . $sql[0]['img_thumb']))
            unlink($dir . $sql[0]['img_thumb']);
    }

    public function unlinkActualImgLogoModelo($idPost) {
        $dir = 'public/img/vehiculos/logos/';
        $sql = $this->db->select("select logo from modelo where id = $idPost");
        if (file_exists($dir . $sql[0]['logo']))
            unlink($dir . $sql[0]['logo']);
    }

    public function unlinkActualImgCompraUnKia($idPost) {
        $dir_w = 'public/img/vehiculos/imagenes/w/';
        $dir_m = 'public/img/vehiculos/imagenes/m/';
        $dir_t = 'public/img/vehiculos/imagenes/t/';
        $sql = $this->db->select("select img_w, img_m, img_t from modelo where id = $idPost");
        if (file_exists($dir_w . $sql[0]['img_w']))
            unlink($dir_w . $sql[0]['img_w']);
        if (file_exists($dir_m . $sql[0]['img_m']))
            unlink($dir_m . $sql[0]['img_m']);
        if (file_exists($dir_t . $sql[0]['img_t']))
            unlink($dir_t . $sql[0]['img_t']);
    }

    public function unlinkActualImagenVehiculo($id, $dispositivo) {
        $dir = 'public/img/vehiculos/imagenes/' . $dispositivo . '/';
        if ($dispositivo != 'ico') {
            $campo = "img_$dispositivo";
        } else {
            $campo = "img_thumb";
        }
        $sql = $this->db->select("select $campo from modelo_imagenes where id = $id");
        if (file_exists($dir . $sql[0][$campo]))
            unlink($dir . $sql[0][$campo]);
    }

    public function uploadFichaTecnica($data) {
        $id = $data['id'];
        $update = array(
            'ficha' => $data['ficha'],
        );
        $this->db->update('modelo', $update, "id = $id");
        $contenido = $data['ficha'];
        $datos = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function uploadImgMenu($data) {
        $id = $data['id'];
        $update = array(
            'img_thumb' => $data['img'],
        );
        $this->db->update('modelo', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/img/vehiculos/imagenes/thumb-menu/' . $data['img'] . '">';
        $datos = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function uploadImagenVehiculo($data) {
        $id = $data['id'];
        $update = array(
            $data['img'] => $data['imagen'],
        );
        $this->db->update('modelo_imagenes', $update, "id = $id");
        if ($data['img'] == 'img_w') {
            $contenido = '<img class="img-responsive" src="' . URL . 'public/img/vehiculos/imagenes/' . $data['imagen'] . '">';
            $datos = array(
                "result" => true,
                'id' => $id,
                'content' => $contenido
            );
        } else {
            $datos = array(
                "result" => true
            );
        }
        return $datos;
    }

    public function uploadImgLogoModelo($data) {
        $id = $data['id'];
        $update = array(
            'logo' => $data['img'],
        );
        $this->db->update('modelo', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/img/vehiculos/logos/' . $data['img'] . '">';
        $datos = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function uploadImgCompraUnKia($data) {
        $id = $data['id'];
        $update = array(
            'img_w' => $data['img_w'],
            'img_m' => $data['img_m'],
            'img_t' => $data['img_t']
        );
        $this->db->update('modelo', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/img/vehiculos/imagenes/w/' . $data['img_w'] . '">';
        $datos = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function editVersionDatos($data) {
        $id = $data['id'];
        $campo = '#' . $data['campo'] . $id;
        $campoMostrar = '';
        $sql = $this->db->select("select * from modelo_version where id = $id");
        $input = '';
        switch ($data['campo']) {
            case 'descripcion':
                //$campo = 'showInputModeloVersion' . $id;
                $campoMostrar = '#showInputModeloVersion' . $id;
                $input = '<input type="text" class="inputModeloDescripcionVersion" data-id="' . $id . '" value="' . utf8_encode($sql[0]['descripcion']) . '">';
                break;
            case 'precio':
                $campoMostrar = '#showInputModeloPrecio' . $id;
                $input = '<input type="text" class="inputModeloPrecioVersion" data-id="' . $id . '" value="' . round($sql[0]['precio']) . '">';
                break;
            case 'bono':
                $campoMostrar = '#showInputModeloBono' . $id;
                $input = '<input type="text" class="inputModeloBonoVersion" data-id="' . $id . '" value="' . round($sql[0]['bono']) . '">';
                break;
            case 'ano':
                $campoMostrar = '#showInputModeloAno' . $id;
                $input = '<input type="text" class="inputModeloAnoVersion" data-id="' . $id . '" value="' . number_format($sql[0]['ano'], 0, ',', '.') . '">';
                break;
        }
        $datos = array(
            'id' => $id,
            'campo' => $campo,
            'campoMostrar' => $campoMostrar,
            'input' => $input
        );
        return json_encode($datos);
    }

    public function inputEditarDatosCuotas($data) {
        $id = $data['id'];
        $campo = '#' . $data['campo'] . $id;
        $campoMostrar = '';
        $sql = $this->db->select("select * from modelo_version_cuotas where id = $id");
        $input = '';
        switch ($data['campo']) {
            case 'moneda':
                $sqlMoneda = $this->db->select("select * from moneda where estado = 1");
                $campoMostrar = '#showInputModeloMoneda' . $id;
                $input = '<select type="text" class="form-control inputDataSelectModeloCuotas" data-campo="moneda" data-id="' . $id . '">';
                $input .= '  <option value="">Seleccione una Moneda</option>';
                foreach ($sqlMoneda as $item) {
                    $selected = ($item['id'] == $sql[0]['id_moneda']) ? 'selected' : '';
                    $input .= '<option value="' . $item['id'] . '" ' . $selected . '>' . utf8_encode($item['descripcion']) . ' - ' . utf8_encode($item['simbologia']) . '</option>';
                }
                $input .= '</select>';
                break;
        }
        $datos = array(
            'id' => $id,
            'campo' => $campo,
            'campoMostrar' => $campoMostrar,
            'input' => $input
        );
        return json_encode($datos);
    }

    public function editInputDescripcion($data) {
        $id = $data['id'];
        $val = $data['value'];
        #actulizamos el campo
        $update = array(
            'descripcion' => utf8_decode($val)
        );
        $this->db->update('modelo_version', $update, "id = $id");
        $campo = '#descripcion' . $id;
        $campoMostrar = '';
        $sql = $this->db->select("select * from modelo_version where id = $id");
        $campoMostrar = '#showInputModeloVersion' . $id;
        $input = utf8_encode($sql[0]['descripcion']);
        $datos = array(
            'id' => $id,
            'campo' => $campo,
            'campoMostrar' => $campoMostrar,
            'input' => $input
        );
        return json_encode($datos);
    }

    public function editInputPrecio($data) {
        $id = $data['id'];
        $val = $data['value'];
        #actulizamos el campo
        $update = array(
            'precio' => utf8_decode($val)
        );
        $this->db->update('modelo_version', $update, "id = $id");
        $campo = '#precio' . $id;
        $campoMostrar = '';
        $sql = $this->db->select("select * from modelo_version where id = $id");
        $campoMostrar = '#showInputModeloPrecio' . $id;
        $input = number_format($sql[0]['precio'], 0, ',', '.');
        $datos = array(
            'id' => $id,
            'campo' => $campo,
            'campoMostrar' => $campoMostrar,
            'input' => $input
        );
        return json_encode($datos);
    }

    public function editInputBono($data) {
        $id = $data['id'];
        $val = $data['value'];
        #actulizamos el campo
        $update = array(
            'bono' => utf8_decode($val)
        );
        $this->db->update('modelo_version', $update, "id = $id");
        $campo = '#bono' . $id;
        $campoMostrar = '';
        $sql = $this->db->select("select * from modelo_version where id = $id");
        $campoMostrar = '#showInputModeloBono' . $id;
        $input = number_format($sql[0]['bono'], 0, ',', '.');
        $datos = array(
            'id' => $id,
            'campo' => $campo,
            'campoMostrar' => $campoMostrar,
            'input' => $input
        );
        return json_encode($datos);
    }

    public function editInputAno($data) {
        $id = $data['id'];
        $val = $data['value'];
        #actulizamos el campo
        $update = array(
            'ano' => (int) $val
        );
        $this->db->update('modelo_version', $update, "id = $id");
        $campo = '#ano' . $id;
        $campoMostrar = '';
        $sql = $this->db->select("select * from modelo_version where id = $id");
        $campoMostrar = '#showInputModeloAno' . $id;
        $input = number_format($sql[0]['ano'], 0, ',', '.');
        $datos = array(
            'id' => $id,
            'campo' => $campo,
            'campoMostrar' => $campoMostrar,
            'input' => $input
        );
        return json_encode($datos);
    }

}
