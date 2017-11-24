<?php
$helper = new Helper();
$contacto = $helper->getCantidadRegistrosSinLeer('solicitud_contacto');
$cotizador = $helper->getCantidadRegistrosSinLeer('solicitud_cotizador');
$testDrive = $helper->getCantidadRegistrosSinLeer('solicitud_testdrive');
$turnos = $helper->getCantidadRegistrosSinLeer('solicitud_turno');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Administrador</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL; ?>admin/"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            <?= $contacto; ?>
                            <sup style="font-size: 14px">(sin leer)</sup>
                        </h3>
                        <p>Solicitudes de Contacto</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?= URL; ?>admin/vehiculo/" class="small-box-footer">Ir a Contactos <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= $cotizador; ?><sup style="font-size: 14px">(sin leer)</sup></h3>
                        <p>Solicitudes del Cotizador</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= URL; ?>admin/vehiculo/" class="small-box-footer">Ir al Cotizador <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= $testDrive; ?><sup style="font-size: 14px">(sin leer)</sup></h3>
                        <p>Solicitudes de Test Drive</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= URL; ?>admin/vehiculo/" class="small-box-footer">Ir a TestDrive <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= $turnos; ?><sup style="font-size: 14px">(sin leer)</sup></h3>
                        <p>Solicitudes de Turnos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= URL; ?>admin/vehiculo/" class="small-box-footer">Ir a Turnos <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->