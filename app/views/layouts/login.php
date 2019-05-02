<?php

use Core\Router;
use Core\Session;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $this->siteTitle() ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= PROOT ?>app/views/layouts/dist/css/adminlte.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?= PROOT ?>app/views/layouts/plugins/iCheck/square/blue.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"><!-- custom css -->
        <link rel="stylesheet" href="<?= PROOT ?>app/views/layouts/dist/css/haserror.min.css">
        <link rel="stylesheet" href="<?= PROOT ?>app/views/layouts/dist/css/custom.css">        
        <script src="<?= PROOT ?>app/views/layouts/dist/js/jquery-2.2.4.min.js"></script>
    </head>
    <body class="hold-transition login-page">
        <?= $this->content('body'); ?>

        <!-- jQuery -->
        <script src="<?= PROOT ?>app/views/layouts/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= PROOT ?>app/views/layouts/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- iCheck -->
        <script src="<?= PROOT ?>app/views/layouts/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                })
            })
        </script>
    </body>
</html>
