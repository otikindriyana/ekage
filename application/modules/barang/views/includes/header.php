<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.7 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- FontAwesome 5.0.1 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/fontawesome-all.min.css" rel="stylesheet"
          type="text/css"/>
    <!--    Custom css-->
    <!--    <link href="--><?php //echo base_url(); ?><!--assets/custom/css/mystyle.css" rel="stylesheet"-->
    <!--          type="text/css"/>-->

    <!--    Admin LTE-->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/css/AdminLTE.css" rel="stylesheet"
          type="text/css"/>
    <!--    skin lte-->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/css/skins/skin-blue.min.css" rel="stylesheet"
          type="text/css"/>
    <!--    Custom button-->
    <link href="<?php echo base_url(); ?>assets/custom/css/buttons.css" rel="stylesheet"
          type="text/css"/>
    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>assets/datatables/datatables.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- jQuery 3.2.1 -->
    <script src="<?php echo base_url(); ?>assets/jquery/jQuery-3.2.1.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>

</head>

<body class="hold-transition fixed skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>E</b>KG</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>E-</b>KAGE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fas fa-bars"></i>
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!--                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
                            <i class="fas fa-user-circle fa-lg"></i>
                            <span class="hidden-xs">Admin</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
<!--                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                                <i class="fas fa-user-circle fa-5x"></i>
                                <p>
                                    Admin
                                    <small>Nov. 2017</small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo site_url('ubah_password') ?>" class="btn btn-primary btn-sm"><i class="fas fa-key"></i>Ubah Password</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo site_url('logout') ?>" class="btn btn-danger btn-sm"><i class="fas fa-sign-out-alt"></i>Keluar</a>
                                </div>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
<!--                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                    <i class="fas fa-user-circle fa-3x"></i>
                </div>
                <div class="pull-left info">
                    <p>Admin</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENU UTAMA</li>
                <li class="active">
                    <a href="<?php echo site_url('dashboard')?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>

                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('barang')?>">
                        <i class="fa fa-archive"></i> <span>Kelola Data Barang</span>

                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('histori')?>">
                        <i class="fa fa-history"></i> <span>Histori Transaksi</span>

                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('laporan')?>">
                        <i class="fa fa-sticky-note-o"></i> <span>Laporan Transaksi</span>

                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
