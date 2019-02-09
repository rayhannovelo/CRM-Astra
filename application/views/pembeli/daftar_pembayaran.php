            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5><?php echo $title1 ?></h5>
                            </div>
                            <div class="ibox-content">
                                <form class="m-t" role="form" action="<?php echo site_url('transaksi/bayar_transaksi_form/'); ?>" method="post" enctype="multipart/form-data" onsubmit="return confirm('Data pembayaran akan dikirim. Apakah Anda yakin?');">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nomor Invoice :</label>
                                                <select name="id_transaksi" class="form-control">
                                                    <option value="Pembayaran DP">-- Pilih Nomor Invoice --</option>
                                                    <?php foreach ($daftar_transaksi as $key => $value) { ?>
                                                        <option value="<?php echo $value['id_transaksi']; ?>"><?php echo $value['no_invoice']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Perihal :</label>
                                                <select name="perihal" class="form-control">
                                                    <option value="Pembayaran Lunas (1x Bayar)">Pembayaran Lunas (1x Bayar)</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Bank Pengirim :</label>
                                                <input type="text" name="bank_pengirim" class="form-control" placeholder="misal: Bank BCA, Bank BNI" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nomor Rekening Pengirim :</label>
                                                <input type="text" name="nomor_rekening" class="form-control" placeholder="123123123123" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Pengirim :</label>
                                                <input type="text" name="nama_pengirim" class="form-control" placeholder="misal : Annisa" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Pembayaran :</label>
                                                <input type="date" name="tanggal_pembayaran" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Pembayaran :</label>
                                                <input type="text" name="jumlah_pembayaran" class="form-control" placeholder="misal : Rp. 1.000.000" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Upload Bukti Pembayaran :</label>
                                                <input type="file" name="foto_pembayaran" accept="image/*" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Catatan :</label>
                                                <textarea name="catatan" class="form-control" style="resize: vertical;"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary block full-width m-b">Bayar Sekarang</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                                            <td>Bukti Pembayaran</td>
                                            <td>Perihal</td>
                                            <td>Bank Pengirim</td>
                                            <td>Nomor Rekening</td>
                                            <td>Nama Pengirim</td>
                                            <td>Tanggal Pembayaran</td>
                                            <td>Jumlah Pembayaran</td>
                                            <td>Status Pembayaran</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($daftar_pembayaran != NULL) foreach($daftar_pembayaran as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $value['no_invoice']; ?></td>
                                            <td>
                                                <div class="testis" itemscope itemtype="http://schema.org/ImageGallery">
                                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                    <?php $arr = getimagesize(base_url('assets/img/bukti_pembayaran/'.$value['foto_pembayaran'])); ?>
                                                        <a href="<?php echo base_url('assets/img/bukti_pembayaran/'.$value['foto_pembayaran']);?>" itemprop="contentUrl" data-size="<?php echo $arr[0]."x".$arr[1]?>">
                                                            <div class="thumbnail">
                                                                <img style = "max-height:180px" src="<?php echo base_url('assets/img/bukti_pembayaran/'.$value['foto_pembayaran']); ?>" itemprop="thumbnail" alt="<?php echo $value['foto_pembayaran']; ?>" />
                                                            </div>
                                                        </a>
                                                        <figcaption itemprop="caption description">
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </td>
                                            <td><?php echo $value['perihal']; ?></td>
                                            <td><?php echo $value['bank_pengirim']; ?></td>
                                            <td><?php echo $value['nomor_rekening']; ?></td>
                                            <td><?php echo $value['nama_pengirim']; ?></td>
                                            <td><?php echo $value['tanggal_pembayaran']; ?></td>
                                            <td><?php echo $value['jumlah_pembayaran']; ?></td>
                                            <td><?php echo $value['status']; ?></td>
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