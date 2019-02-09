            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-lg-3" style="margin: 0px 10px; text-transform: none;">
                        <button class="btn btn-primary btn-rounded btn-block dim" style="text-transform: none;" type="button" onclick="location.href='<?php echo site_url('kendaraan')?>'"><i class="fa fa-plus"></i> Tambah Transaksi</button>
                    </div>
                    <div class="col-lg-8">
                        <?php echo $this->session->flashdata('hasil'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5><?php echo $title ?></h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                <table id="mytable" class="table table-striped table-bordered table-hover" align="center">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nomor Invoice</td>
                                            <td>Kendaraan</td>
                                            <td>Tanggal Transaksi</td>
                                            <td>Nama Pengirim</td>
                                            <td>Status Pembayaran</td>
                                            <td>Status Transaksi</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($daftar_transaksi != NULL) foreach($daftar_transaksi as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $value['no_invoice']; ?></td>
                                            <td><?php echo $value['tipe']. ' - '.$value['warna']; ?></td>
                                            <td><?php echo $value['tanggal_transaksi']; ?></td>
                                            <td><?php echo $value['nama_pengirim'] == '' ? '-' : $value['nama_pengirim']; ?></td>
                                            <td><?php echo $value['status_pembayaran']; ?></td>
                                            <td><?php echo $value['status_transaksi']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <?php if($value['status_transaksi'] != "Sedang dikonfirmasi") { ?>
                                                    <button class="btn btn-default dim" onclick="location.href='<?php echo site_url('transaksi/invoice/'.$value['id_transaksi'])?>'" type="button"><i class="fa fa-print"></i> Invoice</button>
                                                    <?php } ?>

                                                    <?php if($value['status_transaksi'] == "Sedang dikonfirmasi" || $value['status_transaksi'] == "Transaksi Ditolak") { ?>
                                                    <button class="btn btn-danger dim" onclick="if (confirm('Data Transaksi akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('transaksi/hapus_transaksi/'.$value['id_transaksi'].'/'.$value['id_kendaraan'].'/'.$value['jumlah_beli'])?>'" type="button"><i class="fa fa-trash"></i> Hapus</button>
                                                    <?php } ?>

                                                    <?php if($value['status_transaksi'] == "Transaksi Diterima" && $value['status_pembayaran'] == "Belum dibayar") { ?>
                                                    <button class="btn btn-primary dim" onclick="location.href='<?php echo site_url('transaksi/bayar_transaksi/'.$value['id_transaksi'])?>'" type="button"><i class="fa fa-credit-card"></i> Bayar</button>
                                                    <?php } ?>
                                                    <?php if($value['status_transaksi'] == 'Dikirim') { ?>
                                                    <button class="btn btn-primary dim" onclick="if (confirm('Pembeli sudah menerima kendaraan. transaksi akan dianggap selesai, apakah Anda yakin?')) location.href='<?php echo site_url('transaksi/selesai/'.$value['id_transaksi'])?>'" type="button"><i class="fa fa-check"></i> Selesai</button>
                                                    <?php } ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>