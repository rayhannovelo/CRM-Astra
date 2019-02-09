<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Astra Motor | Login</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

    <style type="text/css">
        body { 
            background: url(<?php echo base_url('assets/img/bg.jpg') ?>) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown" style="padding-top: 100px;">
        <!-- <a href="<?php echo site_url('beranda'); ?>"><img height="80px" width="280px" src="<?php echo base_url('assets/img/logo.png') ?>" style="margin-bottom: 10px"></a> -->
        <div class="ibox-content">
            <h3>Halaman Log In</h3>
            <hr>
            <?php
                if($this->session->flashdata('sukses')) {
                  echo $this->session->flashdata('sukses');
                }
            ?>
            <form class="m-t" role="form" action="<?php echo site_url('login')?>" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Log In</button>
            </form>
                <a type="button" href="<?php echo site_url('login/registrasi'); ?>" class="btn btn-success block full-width m-b">Registrasi Akun</a>
            <hr/>
            <a href="<?php echo site_url('beranda'); ?>"><strong>Copyright</strong> Astra Motor <small>© 2018</small></a>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

</body>

</html>
