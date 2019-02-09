            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5><?php echo $title; ?></h5>
                                <div class="text-right">
                                    <button class="btn btn-w-m btn-warning" onclick="if (confirm('Data pembeli akan dinyatakan tidak valid, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_pembeli/tolak_pembeli/'.$id_pembeli)?>'"><i class="fa fa-times"></i> Tidak Valid</button>
                                    <button class="btn btn-w-m btn-primary" onclick="if (confirm('Data pembeli akan dinyatakan valid, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_pembeli/terima_pembeli/'.$id_pembeli)?>'"><i class="fa fa-check"></i> Valid</button>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php foreach ($pembeli as $key => $value) { ?>
                                        <form class="m-t" role="form" action="<?php echo site_url('login/registrasi_form'); ?>" method="post" enctype="multipart/form-data" onsubmit="return confirm('Data registrasi akan dikirim. Apakah Anda yakin?');">
                                        <h3 class="text-center">Data Akun</h3>
                                        <hr>
                                        <div class="form-group">
                                            <label>Username Akun :</label>
                                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $value['username']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Password Akun :</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $value['password']; ?>" readonly>
                                        </div>
                                        <hr>
                                        <h3 class="text-center">Data Pribadi</h3>
                                        <hr>
                                        <div class="form-group">
                                            <label>No. KTP : (wajib diisi)</label>
                                            <input type="text" name="no_ktp" class="form-control" placeholder="No. KTP" value="<?php echo $value['no_ktp']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto KTP : (Wajib Diupload)</label>
                                            <div class="testis" itemscope itemtype="http://schema.org/ImageGallery">
                                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <?php $arr = getimagesize(base_url('assets/img/ktp/'.$value['foto_ktp'])); ?>
                                                    <a href="<?php echo base_url('assets/img/ktp/'.$value['foto_ktp']);?>" itemprop="contentUrl" data-size="<?php echo $arr[0]."x".$arr[1]?>">
                                                        <div class="thumbnail">
                                                            <img style = "max-height:180px" src="<?php echo base_url('assets/img/ktp/'.$value['foto_ktp']); ?>" itemprop="thumbnail" alt="<?php echo $value['foto_ktp']; ?>" />
                                                        </div>
                                                    </a>
                                                    <figcaption itemprop="caption description">
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <label>Nama Pemilik (Sesuai KTP) : (wajib diisi)</label>
                                                    <input type="text" name="nama_pembeli" class="form-control" placeholder="Nama (Sesuai KTP)" value="<?php echo $value['nama_pembeli']; ?>" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Tanggal Lahir :</label>
                                                    <div class="input-group date">
                                                        <input id="date_added" name="tanggal_lahir" placeholder="YYYY-MM-DD" type="text" class="form-control" value="<?php echo $value['tanggal_lahir']; ?>" readonly><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama (Sesuai KTP) : (wajib diisi)</label><br>
                                            <input type="text" name="agama" class="form-control"  value="<?php echo $value['agama']; ?>" readonly> 
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin : (wajib diisi)</label><br>
                                            <input type="text" name="jenis_kelamin" class="form-control"  value="<?php echo $value['jenis_kelamin']; ?>" readonly> 
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label>Alamat berdasarkan KTP : (wajib diisi)</label>
                                            <textarea name="alamat" placeholder="Alamat Berdasarkan KTP" type="text" class="form-control" style="resize: vertical;" readonly><?php echo $value['alamat']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>RT : (wajib diisi)</label>
                                                    <input type="text" name="rt" class="form-control" placeholder="RT (Sesuai KTP)" value="<?php echo $value['rt']; ?>" readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>RW : (wajib diisi)</label>
                                                    <input type="text" name="rw" class="form-control" placeholder="RW (Sesuai KTP)" value="<?php echo $value['rw']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <label>Kelurahan berdasarkan KTP : (wajib diisi)</label>
                                                    <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan berdasarkan KTP" value="<?php echo $value['kelurahan']; ?>" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Kode Pos :</label>
                                                    <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" value="<?php echo $value['kode_pos']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamatan berdasarkan KTP : (wajib diisi)</label>
                                            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan berdasarkan KTP" value="<?php echo $value['kecamatan']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Kota berdasarkan KTP : (wajib diisi)</label>
                                            <input type="text" name="kota" class="form-control" placeholder="Kota berdasarkan KTP" value="<?php echo $value['kota']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi berdasarkan KTP : (wajib diisi)</label>
                                            <input type="text" name="provinsi" class="form-control" placeholder="Provinsi berdasarkan KTP" value="<?php echo $value['provinsi']; ?>" readonly>
                                        </div>
                                        <hr>
                                        <h3 class="text-center">Informasi Tambahan</h3>
                                        <hr>
                                        <div class="form-group">
                                            <label>Status Rumah : (tempat tinggal saat ini)</label><br>
                                            <input type="text" name="status_rumah" class="form-control" placeholder="Status" value="<?php echo $value['status_rumah']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan : (wajib diisi)</label><br>
                                            <input type="text" name="status_rumah" class="form-control" placeholder="Status" value="<?php echo $value['pekerjaan']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Pengeluaran dalam 1 (satu) bulan (termasuk pengeluaran Keluarga) : (wajib diisi)</label><br>
                                            <input type="text" name="status_rumah" class="form-control" placeholder="Status" value="<?php echo $value['pengeluaran']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan Terakhir : (wajib diisi)</label><br>
                                            <input type="text" name="status_rumah" class="form-control" placeholder="Status" value="<?php echo $value['pendidikan_terakhir']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Apa merk motor yang Anda miliki sebelumnya ? (wajib diisi)</label><br>
                                            <input type="text" name="status_rumah" class="form-control" placeholder="Status" value="<?php echo $value['merk_motor']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis motor yang Anda miliki sebelumnya : (wajib diisi)</label><br>
                                            <input type="text" name="status_rumah" class="form-control" placeholder="Status" value="<?php echo $value['jenis_motor']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Hobi :</label>
                                            <input type="text" name="hobi" class="form-control" placeholder="Hobi" value="<?php echo $value['hobi']; ?>" readonly>
                                        </div>
                                        <hr>
                                        <h3 class="text-center">Data Kontak</h3>
                                        <hr>
                                        <div class="form-group">
                                            <label>No. HP (GSM / CDMA) :</label>
                                            <input type="text" name="no_hp" class="form-control" placeholder="No. HP (GSM / CDMA)" value="<?php echo $value['no_hp']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telepon Rumah :</label>
                                            <input type="text" name="no_telepon" class="form-control" placeholder="No. Telepon Rumah" value="<?php echo $value['no_telepon']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Kepemilikian No. HP : (wajib diisi jika No. HP diisi)</label><br>
                                            <input type="text" name="no_telepon" class="form-control" placeholder="No. Telepon Rumah" value="<?php echo $value['status_hp']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat E-mail :</label>
                                            <input type="email" name="email" class="form-control" placeholder="Alamat E-mail" value="<?php echo $value['email']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Facebook :</label>
                                            <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="<?php echo $value['facebook']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter :</label>
                                            <input type="text" name="twitter" class="form-control" placeholder="Twitter" value="<?php echo $value['twitter']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram :</label>
                                            <input type="text" name="instagram" class="form-control" placeholder="Instagram" value="<?php echo $value['instagram']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Youtube (...@gmail.com) :</label>
                                            <input type="text" name="youtube" class="form-control" placeholder="Youtube" value="<?php echo $value['youtube']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <label>Apakah Anda bersedia dikirimkan Informasi terbaru program Honda ? (wajib diisi)</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <?php echo $value['status_informasi']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        </form>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>