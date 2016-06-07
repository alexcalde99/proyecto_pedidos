<!DOCTYPE html>
<html>
<head>

    <?php
    $usuario = $this->session->userdata('usuario');
    if(!isset($usuario)){
        header("Location: http://localhost/pedidosaunclick/admin");
        exit();
    }

    if (!isset($css_files)) {
        $css_files = array();
    }
    if (!isset($js_files)) {
        $js_files = array();
    }


    foreach ($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>"/>
    <?php endforeach; ?>
    <?php foreach ($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración pedidosaunclick.com</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/style-admin.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">
                    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li>
                <a href="<?php echo site_url('admin/logout')?>"><i class="fa fa-sign-out"></i>Logout</a>
                </li>
                <li>
                    <a href="<?php echo site_url('principal/') ?>"><i class="fa fa-globe"></i>Ver WEB</a>
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar toph -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <?php
                                if (isset($user)) {
                                    echo " <div>$user</div>"." ";
                                }
                                ?>

                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="<?php echo site_url('admin/restaurantes')?>"><i class="fa fa-home"></i> Restaurantes</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/productos')?>"><i class="fa fa-cutlery"></i> Productos</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/categorias')?>"><i class="fa fa-folder"></i> Categorias</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/usuarios')?>"><i class="fa fa-users"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/promociones')?>"><i class="fa fa-exclamation"></i> Promociones</a>
                    </li>




                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hola! </b>Bienvenido<b>
                            <?php
                            if (isset($user)) {
                                echo " "."<span style='color: orangered'>$user</span>";
                            }
                            ?></b>

                    </div>
                </div>
                <!--end  Welcome -->
            </div>
            <div class="col-lg-12">
                <?php echo $output; ?>
            </div>

        </div>
        <!-- end page-wrapper -->



    </div>
    <!-- end wrapper -->

    <script src="<?php echo base_url(); ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/siminta.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/dashboard-demo.js"></script>

    <!-- Core Scripts - Include with every page -->
    <!--
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <!--
    <script src="<?php echo base_url(); ?>assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/dashboard-demo.js"></script>
    -->
</body>

</html>
