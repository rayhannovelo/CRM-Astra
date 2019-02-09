            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5><?php echo $title ?></h5>
                            </div>
                            <div class="ibox-content">
                                <?php foreach ($bayar as $value) { ?>
                                <form class="m-t" role="form" action="<?php echo site_url('transaksi/bayar_transaksi_form/'); ?>" method="post" enctype="multipart/form-data" onsubmit="return confirm('Data pembayaran akan dikirim. Apakah Anda yakin?');">
                                    <input type="hidden" name="id_transaksi" value="<?php echo $value['id_transaksi'] ?>" readonly>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nomor Invoice :</label>
                                                <input type="text" class="form-control" placeholder="No Invoice" value="<?php echo $value['no_invoice'] ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Perihal :</label>
                                                <select name="perihal" class="form-control">
                                                    <option value="Pembayaran Lunas (1x Bayar)">Pembayaran Lunas (1x Bayar)</option>
                                                    <!--
                                                    <option value="Pembayaran DP">Pembayaran DP</option>
                                                    <option value="Pembayaran Kredit">Pembayaran Kredit</option>
                                                -->
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
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>