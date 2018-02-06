<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= ADMIN_TITLE . $this->title ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= URL; ?>public/admin/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= URL; ?>public/admin/plugins/font-awesome/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= URL; ?>public/admin/dist/css/AdminLTE.min.css">
        <!-- LTE Skin BLUE-->
        <link rel="stylesheet" href="<?= URL; ?>public/admin/dist/css/skins/skin-blue.min.css">
        <!--Custom-->
        <link rel="stylesheet" href="<?= URL; ?>public/admin/dist/css/custom.css">
        <?php
        #cargamos los css de las vistas
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/' . $css . '" type="text/css">';
            }
        }
        if (isset($this->public_css)) {
            foreach ($this->public_css as $public_css) {
                echo '<link rel="stylesheet" href="' . URL . 'public/' . $public_css . '" type="text/css">';
            }
        }
        ?>
        <!-- jQuery 2.2.3 -->
        <script src="<?= URL; ?>public/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <?php
        if (isset($this->publicHeader_js)) {
            foreach ($this->publicHeader_js as $public_js) {
                echo '<script type="text/javascript" src="' . URL . 'public/' . $public_js . '"></script>';
            }
        }
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Admin</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>istrador</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <?php
                        if (!empty($_SESSION['usuario']['imagen'])) {
                            $img = $_SESSION['usuario']['imagen'];
                        } else {
                            $img = 'profile-icon.png';
                        }
                        ?>
                        <ul class="nav navbar-nav">
                            <!-- Tasks: style can be found in dropdown.less -->
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= URL; ?>public/admin/img/<?= $img; ?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?= $_SESSION['usuario']['nombre']; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= URL; ?>public/admin/img/<?= $img; ?>" class="img-circle" alt="User Image">
                                        <p>
                                            <?= $_SESSION['usuario']['nombre']; ?>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?= URL; ?>login/salir/" class="btn btn-danger btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header">MENU PRINCIPAL</li>
                        <li class="active"><a href="<?= URL; ?>admin/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                        <li><a href="<?= URL; ?>admin/slider"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Slider</span></a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-car"></i><span>Modelos</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu" style="display: none;">
                                <li><a href="<?= URL; ?>admin/listado_modelos"><i class="fa fa-circle-o"></i> Listado</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-list"></i><span>Compra un Kia</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu" style="display: none;">
                                <li><a href="<?= URL; ?>admin/encuentra_tu_kia"><i class="fa fa-circle-o"></i> Encuentra tu Kia</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-list"></i><span>Tengo un Kia</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu" style="display: none;">
                                <li><a href="<?= URL; ?>admin/mantenimiento"><i class="fa fa-circle-o"></i> Mantenimiento</a></li>
                                <li><a href="<?= URL; ?>admin/talleres"><i class="fa fa-circle-o"></i> Talleres</a></li>
                                <li><a href="<?= URL; ?>admin/repuestos"><i class="fa fa-circle-o"></i> Repuestos</a></li>
                                <li><a href="<?= URL; ?>admin/vida0"><i class="fa fa-circle-o"></i> Vida 0</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-list"></i><span>Experiencia</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu" style="display: none;">
                                <li><a href="<?= URL; ?>admin/la_empresa"><i class="fa fa-circle-o"></i> La Empresa</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-list"></i><span>Secciones</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu" style="display: none;">
                                <li><a href="<?= URL; ?>admin/noticias"><i class="fa fa-circle-o"></i> Noticias</a></li>
                                <li><a href="<?= URL; ?>admin/promociones"><i class="fa fa-circle-o"></i> Promociones</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-pencil-square-o"></i><span>Formularios</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu" style="display: none;">
                                <li><a href="<?= URL; ?>formulario/contacto"><i class="fa fa-circle-o"></i> Contacto</a></li>
                                <li><a href="<?= URL; ?>formulario/cotizador"><i class="fa fa-circle-o"></i> Cotizador</a></li>
                                <li><a href="<?= URL; ?>formulario/testdrive"><i class="fa fa-circle-o"></i> Test Drive</a></li>
                                <li><a href="<?= URL; ?>formulario/turnos"><i class="fa fa-circle-o"></i> Turnos</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>