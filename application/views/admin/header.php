<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?></title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/datapicker/datepicker3.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/summernote/summernote.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/summernote/summernote-bs3.css')?>" rel="stylesheet">
    <link rel='stylesheet prefetch' href='<?php echo base_url(); ?>assets/js/plugins/photoswipe/photoswipe.css'>
    <link rel='stylesheet prefetch' href='<?php echo base_url(); ?>assets/js/plugins/photoswipe/default-skin/default-skin.css'>
    <link href="<?php echo base_url('assets/css/plugins/jasny/jasny-bootstrap.min.css')?>" rel="stylesheet">

    <style type="text/css">
        .note-editor{
            border: 1px solid #e5e6e7;
            min-height: 200px;
        }
    </style>
</head>

<body class="fixed-sidebar">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" width="48" height="48" src="<?php echo base_url('assets/img/avatar.png')?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('username') ?></strong></span></span></a>
                    </div>
                    <div class="logo-element">
                        TK
                    </div>
                </li>
                <li>
                    <a href="#"><center><strong><span class="nav-label">Daftar Menu</span></strong></center></a>
                </li>
                <li <?php echo $active == 'daftar_transaksi' ? 'class="active"' : ''; ?>>
                    <a href="<?php echo site_url('daftar_transaksi')?>"><i class="fa fa-book"></i> <span class="nav-label">Kelola Transaksi</span></a>
                </li>
                <li <?php echo $active == 'daftar_pembayaran' ? 'class="active"' : ''; ?>>
                    <a href="<?php echo site_url('daftar_pembayaran')?>"><i class="fa fa-book"></i> <span class="nav-label">Kelola Pembayaran</span></a>
                </li>
                <li <?php echo $active == 'daftar_pembeli' ? 'class="active"' : ''; ?>>
                    <a href="<?php echo site_url('daftar_pembeli')?>"><i class="fa fa-users"></i> <span class="nav-label">Kelola Pembeli</span></a>
                </li>
                <li <?php echo $active == 'daftar_kendaraan' ? 'class="active"' : ''; ?>>
                    <a href="<?php echo site_url('daftar_kendaraan')?>"><i class="fa fa-h-square"></i> <span class="nav-label">Kelola Kendaraan</span></a>
                </li>
                <!-- <li <?php echo $active == 'daftar_komentar' ? 'class="active"' : ''; ?>>
                    <a href="<?php echo site_url('komentar')?>"><i class="fa fa-comment"></i> <span class="nav-label">Daftar Komentar</span></a>
                </li> -->
                <li>
                    <a href="<?php echo site_url('login/logout')?>"><i class="fa fa-sign-out"></i> <span class="nav-label">Log out</span></a>
                </li>
            </ul>

        </div>
    </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Selamat Datang, <?php echo $this->session->userdata('username') ?></span>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/logout')?>">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>