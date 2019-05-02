<?php

use Core\Router;

//use Core\Session;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $this->siteTitle(); ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include_once 'include/css.php'; ?>
        <script src="<?= PROOT ?>app/views/layouts/dist/js/jquery-2.2.4.min.js"></script>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper text-monospace">
            <!-- Navbar -->
            <?php include_once 'include/navbar.php'; ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php include_once 'include/aside.php'; ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper content-margin">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark"></h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <!-- <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard v2</li>
                                </ol> -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <?= $this->content('body'); ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2014-<?= date('Y') ?> <a href="https://dopa.go.th" target="_blank">กรมการปกครอง</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0
                </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <?php include_once 'include/js.php'; ?>
    </body>
</html>
