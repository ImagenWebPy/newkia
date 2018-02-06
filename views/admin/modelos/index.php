<?php
$helper = new Helper();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Modelos
            <small>Listado</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="#">Modelos</a></li>
            <li class="active">Listado</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="tblModelos" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Modelo</th>
                                    <th>Exterior</th>
                                    <th>Interior</th>
                                    <th>Destacados</th>
                                    <th>Desempeño</th>
                                    <th>Seguridad</th>
                                    <th>Versiones</th>
                                    <th>Dimensiones</th>
                                    <th>Llantas</th>
                                    <th>Motor</th>
                                    <th>360</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Modelo</th>
                                    <th>Exterior</th>
                                    <th>Interior</th>
                                    <th>Destacados</th>
                                    <th>Desempeño</th>
                                    <th>Seguridad</th>
                                    <th>Versiones</th>
                                    <th>Dimensiones</th>
                                    <th>Llantas</th>
                                    <th>Motor</th>
                                    <th>360</th>
                                    <th>Estado</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script>
    $(function () {
        $("#tblModelos").DataTable({
            "scrollX": true,
            //"aaSorting": [[0, "asc"]],
            "paging": true,
            "orderCellsTop": true,
            //"scrollX": true,
            //"scrollCollapse": true,
            "fixedColumns": true,
            //"iDisplayLength": 50,
            "ajax": {
                "url": "<?= URL ?>admin/cargarDTModelos/",
                "type": "post"
            },
            "columns": [
                {"data": "modelo"},
                {"data": "exterior"},
                {"data": "interior"},
                {"data": "destacados"},
                {"data": "desempeno"},
                {"data": "seguridad"},
                {"data": "version"},
                {"data": "dimension"},
                {"data": "llanta"},
                {"data": "motor"},
                {"data": "360"},
                {"data": "estado"},
            ],
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }
        });
        $(document).on("click", ".btnEditar", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                var seccion = $(this).attr("data-seccion");
                var enlace;
                switch (seccion) {
                    case 'modelo':
                        enlace = "<?= URL; ?>admin/modalEditarModelo";
                        break;
                    case 'exterior':
                        enlace = "<?= URL; ?>admin/modalEditarExterior";
                        break;
                    case 'exterior_seccion':
                        enlace = "<?= URL; ?>admin/modalEditarExteriorSeccion";
                        break;
                    case 'interior':
                        enlace = "<?= URL; ?>admin/modalEditarInterior";
                        break;
                    case 'interior_seccion':
                        enlace = "<?= URL; ?>admin/modalEditarInteriorSeccion";
                        break;
                    case 'destacado':
                        enlace = "<?= URL; ?>admin/modalEditarDestacado";
                        break;
                    case 'desempeno':
                        enlace = "<?= URL; ?>admin/modalEditarDesempeno";
                        break;
                    case 'seguridad':
                        enlace = "<?= URL; ?>admin/modalEditarSeguridad";
                        break;
                    case 'version':
                        enlace = "<?= URL; ?>admin/modalEditarVersion";
                        break;
                    case 'cuotas':
                        enlace = "<?= URL; ?>admin/modalEditarCuotas";
                        break;
                    case 'dimension':
                        enlace = "<?= URL; ?>admin/modalEditarDimension";
                        break;
                    case 'llanta':
                        enlace = "<?= URL; ?>admin/modalEditarLlanta";
                        break;
                    case 'motor':
                        enlace = "<?= URL; ?>admin/modalEditarMotor";
                        break;
                    case '360':
                        enlace = "<?= URL; ?>admin/modalEditar360";
                        break;
                }
                $.ajax({
                    url: enlace,
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data.titulo);
                    $(".genericModal .modal-body").html(data.contenido);
                    $(".genericModal").modal("toggle");
                });

            }
            e.handled = true;
        });

        $(document).on("submit", "#frmEditarModelo", function (e) {
            var url = "<?= URL ?>admin/frmEditarModelo"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarModelo").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $("#modelo_" + data.id).html(data.content);
                    $(".genericModal").modal("toggle");
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
        $(document).on("submit", "#frmEditarImagenModelo", function (e) {
            var url = "<?= URL ?>admin/frmEditarImagenModelo"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarImagenModelo").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $(".genericModal").modal("toggle");
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
        $(document).on("click", ".btnCambiarEstado", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                var estadoActual = $(this).attr("data-estado");
                $.ajax({
                    url: "<?= URL; ?>admin/cambiarEstadoModelo",
                    type: "post",
                    dataType: "json",
                    data: {
                        id: id,
                        estado: estadoActual
                    },
                    success: function (data) {
                        $('#modelo_' + data.id).html(data.content);
                    }
                }); //END AJAX
            }
            e.handled = true;
        });
        $(document).on("click", ".btnCambiarEstadoVersion", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                var estadoActual = $(this).attr("data-estado");
                $.ajax({
                    url: "<?= URL; ?>admin/cambiarEstadoModeloVersion",
                    type: "post",
                    dataType: "json",
                    data: {
                        id: id,
                        estado: estadoActual
                    },
                    success: function (data) {
                        $('#versionModelo' + data.id).html(data.content);
                    }
                }); //END AJAX
            }
            e.handled = true;
        });
        $(document).on("click", ".editVersionDatos", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                var campo = $(this).attr("data-campo");
                $.ajax({
                    url: "<?= URL; ?>admin/editVersionDatos",
                    type: "post",
                    dataType: "json",
                    data: {
                        id: id,
                        campo: campo
                    },
                    success: function (data) {
                        $(data.campo).css('display', 'none');
                        $(data.campoMostrar).css('display', 'block');
                        $(data.campoMostrar).html(data.input);
                    }
                }); //END AJAX
            }
            e.handled = true;
        });
        $(document).on("keydown", ".inputModeloDescripcionVersion", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                if (e.which == 13) {
                    var id = $(this).attr("data-id");
                    var val = $(this).val();
                    $.ajax({
                        url: "<?= URL; ?>admin/editInputDescripcion",
                        type: "post",
                        dataType: "json",
                        data: {
                            id: id,
                            value: val
                        },
                        success: function (data) {
                            $(data.campo).css('display', 'block');
                            $(data.campoMostrar).css('display', 'none');
                            $(data.campo).html(data.input);
                        }
                    }); //END AJAX
                }
            }
            e.handled = true;
        });
        $(document).on("keydown", ".inputModeloPrecioVersion", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                if (e.which == 13) {
                    var id = $(this).attr("data-id");
                    var val = $(this).val();
                    $.ajax({
                        url: "<?= URL; ?>admin/editInputPrecio",
                        type: "post",
                        dataType: "json",
                        data: {
                            id: id,
                            value: val
                        },
                        success: function (data) {
                            $(data.campo).css('display', 'block');
                            $(data.campoMostrar).css('display', 'none');
                            $(data.campo).html(data.input);
                        }
                    }); //END AJAX
                }
            }
            e.handled = true;
        });
        $(document).on("keydown", ".inputModeloBonoVersion", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                if (e.which == 13) {
                    var id = $(this).attr("data-id");
                    var val = $(this).val();
                    $.ajax({
                        url: "<?= URL; ?>admin/editInputBono",
                        type: "post",
                        dataType: "json",
                        data: {
                            id: id,
                            value: val
                        },
                        success: function (data) {
                            $(data.campo).css('display', 'block');
                            $(data.campoMostrar).css('display', 'none');
                            $(data.campo).html(data.input);
                        }
                    }); //END AJAX
                }
            }
            e.handled = true;
        });
        $(document).on("keydown", ".inputModeloAnoVersion", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                if (e.which == 13) {
                    var id = $(this).attr("data-id");
                    var val = $(this).val();
                    $.ajax({
                        url: "<?= URL; ?>admin/editInputAno",
                        type: "post",
                        dataType: "json",
                        data: {
                            id: id,
                            value: val
                        },
                        success: function (data) {
                            $(data.campo).css('display', 'block');
                            $(data.campoMostrar).css('display', 'none');
                            $(data.campo).html(data.input);
                        }
                    }); //END AJAX
                }
            }
            e.handled = true;
        });
        $(document).on("click", ".editVersionCuota", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                var campo = $(this).attr("data-campo");
                var enlace = "<?= URL; ?>admin/inputEditarDatosCuotas";
                $.ajax({
                    url: enlace,
                    type: "POST",
                    data: {id: id, campo: campo},
                    dataType: "json"
                }).done(function (data) {
                    $(data.campo).css('display', 'none');
                    $(data.campoMostrar).css('display', 'block');
                    $(data.campoMostrar).html(data.input);
                });
            }
            e.handled = true;
        });
    });
</script>