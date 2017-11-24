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
                {"data": "seguridad"},
            ],
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }
        });
    });
</script>