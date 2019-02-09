            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5><?php echo $title; ?></h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php foreach ($transaksi as $key => $value) { ?>
                                        <form class="form-horizontal" role="form" action="<?php echo site_url('daftar_transaksi/kirim_kendaraan/'.$value['id_transaksi'])?>" method="post" onsubmit="return confirm('Kendaraan akan dikirim. Apakah Anda yakin?');">
                                        <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nomor Invoice :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo $value['no_invoice']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Tanggal Transaksi :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo $value['tanggal_transaksi']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Kendaraan :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo $value['tipe']. ' - '.$value['warna']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Harga Per Unit :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo 'Rp. '.number_format(($value['harga']), 2, ',', '.'); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jumlah Pembelian :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo $value['jumlah_beli']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Total Harga :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo 'Rp. '.number_format(($value['harga'] * $value['jumlah_beli']), 2, ',', '.'); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Alamat Penerima:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo $value['alamat']; ?>" readonly>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nama Pengirim :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="nama_pengirim" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-lg-offset-8 col-lg-4">
                                                <button type="reset" class="btn btn-w-m btn-warning">Reset</button>
                                                <button class="btn btn-w-m btn-primary" type="submit">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>