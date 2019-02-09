                <div class="wrapper wrapper-content animated fadeInRight">
                    <?php foreach ($transaksi as $key => $value) { ?>
                    <div class="row">
                        <div class="col-lg-3 pull-right" style="margin: 0px 10px; text-transform: none;">
                            <?php if($this->session->userdata('level') == 3){ ?>
                            <button class="btn btn-default btn-rounded btn-block dim" style="text-transform: none;" type="button" onclick="location.href='<?php echo site_url('transaksi/cetak_invoice/'.$value['id_transaksi']); ?>'"><i class="fa fa-print"></i> Cetak Invoice</button>
                            <?php } elseif ($this->session->userdata('level') == 2) { ?>
                                <button class="btn btn-default btn-rounded btn-block dim" style="text-transform: none;" type="button" onclick="location.href='<?php echo site_url('laporan_transaksi/cetak_invoice/'.$value['id_transaksi']); ?>'"><i class="fa fa-print"></i> Cetak Invoice</button>
                            <?php }else { ?>
                                <button class="btn btn-default btn-rounded btn-block dim" style="text-transform: none;" type="button" onclick="location.href='<?php echo site_url('daftar_transaksi/cetak_invoice/'.$value['id_transaksi']); ?>'"><i class="fa fa-print"></i> Cetak Invoice</button>
                            <?php } ?>
                        </div>
                    </div>
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
                            <?php if($this->session->userdata('level') == 3) { ?>
                            <div class="text-right">
                                <button onclick="location.href='<?php echo site_url('transaksi/bayar_transaksi/'.$value['id_transaksi'])?>'" class="btn btn-primary"><i class="fa fa-credit-card"></i> Bayar Sekarang</button>
                            </div>
                            <?php } ?>

                            <div class="well m-t"><strong>Catatan</strong>
                                <?php echo $value['catatan']; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>