            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5><?php echo $title; ?></h5>
                                <div class="text-right">
                                    <button class="btn btn-w-m btn-warning" onclick="if (confirm('Data Transaksi akan DITOLAK, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_transaksi/tolak_transaksi/'.$id_transaksi)?>'"><i class="fa fa-times"></i> Tolak Transaksi</button>
                                    <button class="btn btn-w-m btn-primary" onclick="if (confirm('Data Transaksi akan DITERIMA, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_transaksi/terima_transaksi/'.$id_transaksi)?>'"><i class="fa fa-check"></i> Terima Transaksi</button>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php foreach ($transaksi as $key => $value) { ?>
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
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jenis Pembelian :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo $value['jenis_pembelian']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Alamat Penerima:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo $value['alamat']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Akan digunakan untuk :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo $value['kegunaan']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Akan digunakan oleh :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo $value['pengguna']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jenis Pembayaran :</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="<?php echo $value['jenis_pembayaran']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Catatan :</label>
                                            <div class="col-lg-9">
                                                <textarea name="catatan" class="form-control" style="resize: vertical;" readonly><?php echo $value['catatan']; ?></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>