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
                                        <?php foreach ($daftar_kendaraan as $key => $value) { ?>
                                        <form class="form-horizontal" role="form" action="<?php echo site_url('transaksi/tambah_transaksi_form/')?>" method="post" onsubmit="return confirm('Data transaksi akan dikirim. Apakah Anda yakin?');">
                                        <input name="id_kendaraan" value="<?php echo $value['id_kendaraan']; ?>" type="hidden">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Foto Kendaraan :</label>
                                            <div class="col-lg-9">
                                                <div class="testis" itemscope itemtype="http://schema.org/ImageGallery">
                                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                    <?php $arr = getimagesize(base_url('assets/img/kendaraan/'.$value['foto_kendaraan'])); ?>
                                                        <a href="<?php echo base_url('assets/img/kendaraan/'.$value['foto_kendaraan']);?>" itemprop="contentUrl" data-size="<?php echo $arr[0]."x".$arr[1]?>">
                                                            <div class="thumbnail">
                                                                <img style = "max-height:180px" src="<?php echo base_url('assets/img/kendaraan/'.$value['thumbnail_kendaraan']); ?>" itemprop="thumbnail" alt="<?php echo $value['thumbnail_kendaraan']; ?>" />
                                                            </div>
                                                        </a>
                                                        <figcaption itemprop="caption description">
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Kendaraan :</label>
                                            <div class="col-lg-9">
                                                 <input value="<?php echo $value['tipe'].' - '.$value['warna']; ?>" type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Harga :</label>
                                            <div class="col-lg-9">
                                                 <input value="<?php echo 'Rp. '.number_format($value['harga'], 2, ',', '.'); ?>" type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Harga DP :</label>
                                            <div class="col-lg-9">
                                                 <input value="<?php echo 'Rp. '.number_format($value['harga_dp'], 2, ',', '.'); ?>" type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jumlah Pembelian :</label>
                                            <div class="col-lg-9">
                                                 <input value="1" min="1" max="<?php echo $jumlah_stok; ?>" name="jumlah_pembelian" type="number" class="form-control" required>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jenis Pembelian :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="jenis_pembelian" value="Individu" type="radio" required> (I) Individu
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="jenis_pembelian" value="Kolektif" type="radio"> (C) Kolektif
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="jenis_pembelian" value="Joint Promo" type="radio"> (J) Joint Promo
                                                </label> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Pilih Alamat Penerima:<br> <a href="<?php echo site_url('daftar_alamat/tambah_alamat')?>">(<i class="fa fa-plus"></i> Tambah Alamat)</a></label>
                                            <div class="col-lg-9">
                                                <?php foreach ($daftar_alamat as $key => $value) { ?>
                                                    <label class="checkbox-inline"> 
                                                        <input name="id_alamat" value="<?php echo $value['id_alamat']; ?>" type="radio" required>  <?php echo $value['alamat']; ?> <?php echo $key == 0 ? "<strong>(Sesuai KTP)</strong>" : ""; ?>
                                                    </label> <br>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Akan digunakan untuk :</label>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="checkbox-inline"> 
                                                            <input name="kegunaan" value="Berdagang" type="radio" required> (1) Berdagang
                                                        </label> 
                                                        <label class="checkbox-inline" style="margin-left: 0px"> 
                                                            <input name="kegunaan" value="Pemakaian Jarak Dekat" type="radio"> (2) Pemakaian Jarak Dekat
                                                        </label> 
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="checkbox-inline"> 
                                                            <input name="kegunaan" value="Ke Sekolah / Kampus" type="radio"> (3) Ke Sekolah / Kampus
                                                        </label> 
                                                        <label class="checkbox-inline" style="margin-left: 0px"> 
                                                            <input name="kegunaan" value="Rekreasi / Olahraga" type="radio"> (4) Rekreasi / Olahraga
                                                        </label> 
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="checkbox-inline"> 
                                                            <input name="kegunaan" value="Kebutuhan Keluarga" type="radio"> (5) Kebutuhan Keluarga
                                                        </label> 
                                                        <label class="checkbox-inline" style="margin-left: 0px"> 
                                                            <input name="kegunaan" value="Lain - lain" type="radio"> (6) Lain - lain
                                                        </label> 
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="checkbox-inline"> 
                                                            <input name="kegunaan" value="Bekerja" type="radio"> (7) Bekerja
                                                        </label> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Akan digunakan oleh :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="pengguna" value="Saya sendiri" type="radio" required> (1) Saya sendiri
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="pengguna" value="Anak" type="radio"> (2) Anak
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="pengguna" value="Pasangan (Suami / Istri)" type="radio"> (3) Pasangan (Suami / Istri)
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="pengguna" value="Lain - lain" type="radio"> (4) Lain - lain
                                                </label> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jenis Pembayaran :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="jenis_pembayaran" value="Cash" type="radio" checked required> Cash
                                                </label> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Catatan :</label>
                                            <div class="col-lg-9">
                                                <textarea name="catatan" class="form-control" style="resize: vertical;"></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <center>
                                        <p>Dengan mengisi formulir ini, saya menyatakan bahwa: </p>
                                        <p><strong>"Data yang saya berikan dalam formulir ini adalah sesuai dengan kenyataan, lengkap dan benar."</strong></p>
                                         </center>
                                         <hr>
                                        <div class="form-group">
                                            <div class="col-lg-offset-8 col-lg-4">
                                                <button type="reset" class="btn btn-w-m btn-warning">Reset</button>
                                                <button class="btn btn-w-m btn-primary" type="submit">Beli Sekarang</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>