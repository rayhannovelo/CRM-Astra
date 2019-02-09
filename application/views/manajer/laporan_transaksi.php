            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5><?php echo $title ?></h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                <table id="laporan_transaksi" class="table table-striped table-bordered table-hover" align="center">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nomor Invoice</td>
                                            <td>Nama Pembeli</td>
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
                                            <td><a onclick="location.href='<?php echo site_url('laporan_transaksi/profil/'.$value['id_pembeli'])?>'"><?php echo $value['nama_pembeli']; ?></a></td>
                                            <td><?php echo $value['tipe']. ' - '.$value['warna']; ?></td>
                                            <td><?php echo $value['tanggal_transaksi']; ?></td>
                                            <td><?php echo $value['nama_pengirim'] == '' ? '-' : $value['nama_pengirim']; ?></td>
                                            <td><?php echo $value['status_pembayaran']; ?></td>
                                            <td><?php echo $value['status_transaksi']; ?></td>
                                            <td>
                                                <?php if($value['status_transaksi'] != "Sedang dikonfirmasi") { ?>
                                                <button class="btn btn-default dim" onclick="location.href='<?php echo site_url('laporan_transaksi/invoice/'.$value['id_transaksi'])?>'" type="button"><i class="fa fa-print"></i> Invoice</button>
                                                <?php } ?>
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