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

    <style type="text/css">
        .note-editor{
            border: 1px solid #e5e6e7;
            min-height: 200px;
        }
    </style>
</head>
<body class="white-bg">
    
                <div class="wrapper wrapper-content animated fadeInRight">
                    <?php foreach ($transaksi as $key => $value) { ?>
                    <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Dari:</h5>
                                    <address>
                                        <strong><?php echo $value['nama_pembeli']; ?></strong><br>
                                        <?php echo $value['alamat']; ?><br>
                                        <?php echo $value['kelurahan'].', '.$value['kode_pos']; ?><br>
                                        <abbr title="Phone">HP / Telepon:</abbr> <?php echo $value['no_hp'].', '.$value['no_telepon']; ?>
                                    </address>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <h4>Nomor Invoice</h4>
                                    <h4 class="text-navy"><?php echo $value['no_invoice']; ?></h4>
                                    <span>Kepada:</span>
                                    <address>
                                        <strong>PT Astra International Tbk. – Honda Sales Operation<br>
                                        (Astra Motor)</strong><br>
                                        Jln. Trans Sumatera Hwy No.20<br> Indralaya Mulia, Indralaya<br>Sumatera Selatan 30862<br>
                                        <abbr title="Phone">P:</abbr> (120) 9000-4321
                                    </address>
                                    <p>
                                        <span><strong>Tanggal Invoice:</strong> <?php echo $value['tanggal_transaksi']; ?></span><br/>
                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Unit Pembelian</th>
                                        <th>Kuantitas</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <strong><?php echo $value['tipe'].' - '.$value['warna']; ?></strong>
                                            </div>
                                            <small><?php echo $value['deskripsi']; ?></small>
                                        </td>
                                        <td><?php echo $value['jumlah_beli']; ?></td>
                                        <td><?php echo 'Rp. '.number_format($value['harga'], 2, ',', '.'); ?></td>
                                        <td><?php echo 'Rp. '.number_format(($value['harga'] * $value['jumlah_beli']), 2, ',', '.'); ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                            <div class="well m-t"><strong>Catatan</strong>
                                <?php echo $value['catatan']; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/datatables.min.js')?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/js/inspinia.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jsKnob/jquery.knob.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>

    <!-- Core Photo Swipe JS file -->
    <script src='<?php echo base_url(); ?>assets/js/plugins/photoswipe/photoswipe.min.js'></script>
    <script src='<?php echo base_url(); ?>assets/js/plugins/photoswipe/photoswipe-ui-default.min.js'></script> 
    <script src="<?php echo base_url(); ?>assets/js/plugins/photoswipe/index.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url('assets/js/plugins/flot/jquery.flot.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/flot/jquery.flot.tooltip.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/flot/jquery.flot.resize.js')?>"></script>

    <!-- SUMMERNOTE -->
    <script src="<?php echo base_url('assets/js/plugins/summernote/summernote.min.js')?>"></script>

    <!-- Page-Level Scripts -->
    <script>
        window.print();
    </script>

</body>

</html>