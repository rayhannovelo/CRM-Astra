<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Astra Motor | Registrasi Pembeli</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/datapicker/datepicker3.css')?>" rel="stylesheet">

    <style type="text/css">
        body { 
            background: url(<?php echo base_url('assets/img/bg.jpg') ?>) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>

<body class="gray-bg">

    <div class="middle-box loginscreen animated fadeInDown" style="padding-top: 100px;max-width: 1000px; width: 985px;">
        <p style="font-size: 35px;color: white" class="text-center">Registrasi Akun</p>
        <div class="ibox-content">
            <?php
                /* if($this->session->flashdata('sukses')) {
                  echo $this->session->flashdata('sukses');
                } */
            ?>
            <a href="<?php echo site_url('login'); ?>" class="pull-left"><h4><i class="fa fa-arrow-circle-o-left text-info"></i> Log In</h4></a><br>
            <form class="m-t" role="form" action="<?php echo site_url('login/registrasi_form'); ?>" method="post" enctype="multipart/form-data" onsubmit="return confirm('Data registrasi akan dikirim. Apakah Anda yakin?');">
                <h3 class="text-center">Data Akun</h3>
                <hr>
                <div class="form-group">
                    <label>Username Akun :</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Password Akun :</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <hr>
                <h3 class="text-center">Data Pribadi</h3>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-9">
                        <label>No. KTP : (wajib diisi)</label>
                            <input type="text" name="no_ktp" class="form-control" placeholder="No. KTP" required>
                        </div>
                        <div class="col-md-3">
                            <label>Foto KTP : (Wajib Diupload)</label>
                            <input type="file" name="foto_ktp" accept="image/*" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-9">
                            <label>Nama Pemilik (Sesuai KTP) : (wajib diisi)</label>
                            <input type="text" name="nama_pembeli" class="form-control" placeholder="Nama (Sesuai KTP)" required>
                        </div>
                        <div class="col-md-3">
                            <label>Tanggal Lahir :</label>
                            <div class="input-group date">
                                <input id="date_added" name="tanggal_lahir" placeholder="YYYY-MM-DD" type="text" class="form-control"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Agama (Sesuai KTP) : (wajib diisi)</label><br>
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Islam" type="radio" required> (1) Islam 
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Kristen" type="radio"> (2) Kristen
                    </label>
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Katolik" type="radio"> (3) Katolik 
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Hindu" type="radio"> (4) Hindu
                    </label>
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Buddha" type="radio"> (5) Buddha 
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Perempuan" type="radio"> (6) Lain-lain
                    </label>  
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin : (wajib diisi)</label><br>
                    <label class="checkbox-inline"> 
                        <input name="jenis_kelamin" value="Laki-laki" type="radio" required> (1) Laki-laki 
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="jenis_kelamin" value="Perempuan" type="radio"> (2) Perempuan 
                    </label> 
                </div>
                <hr>
                <div class="form-group">
                    <label>Alamat berdasarkan KTP : (wajib diisi)</label>
                    <textarea name="alamat" placeholder="Alamat Berdasarkan KTP" type="text" class="form-control" style="resize: vertical;"></textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label>RT : (wajib diisi)</label>
                            <input type="text" name="rt" class="form-control" placeholder="RT (Sesuai KTP)" required>
                        </div>
                        <div class="col-md-6">
                            <label>RW : (wajib diisi)</label>
                            <input type="text" name="rw" class="form-control" placeholder="RW (Sesuai KTP)" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-9">
                            <label>Kelurahan berdasarkan KTP : (wajib diisi)</label>
                            <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan berdasarkan KTP" required>
                        </div>
                        <div class="col-md-3">
                            <label>Kode Pos :</label>
                            <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Kecamatan berdasarkan KTP : (wajib diisi)</label>
                    <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan berdasarkan KTP" required>
                </div>
                <div class="form-group">
                    <label>Kota berdasarkan KTP : (wajib diisi)</label>
                    <input type="text" name="kota" class="form-control" placeholder="Kota berdasarkan KTP" required>
                </div>
                <div class="form-group">
                    <label>Provinsi berdasarkan KTP : (wajib diisi)</label>
                    <input type="text" name="provinsi" class="form-control" placeholder="Provinsi berdasarkan KTP" required>
                </div>
                <hr>
                <h3 class="text-center">Informasi Tambahan</h3>
                <hr>
                <div class="form-group">
                    <label>Status Rumah : (tempat tinggal saat ini)</label><br>
                    <label class="checkbox-inline"> 
                        <input name="status_rumah" value="Rumah Sendiri" type="radio" required> (1) Rumah Sendiri
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="status_rumah" value="Rumah Orang Tua / Keluarga" type="radio"> (2) Rumah Orang Tua / Keluarga
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="status_rumah" value="Rumah Sewa" type="radio"> (3) Rumah Sewa
                    </label> 
                </div>
                <div class="form-group">
                    <label>Pekerjaan : (wajib diisi)</label><br>
                    <div class="row">
                        <div class="col-md-3">
                            <span class="radio" style="padding-left: 40px;">  
                                <input name="pekerjaan" value="Pegawai Negeri" type="radio" required>(1) Pegawai Negeri
                            </span> 
                            <span class="radio" style="padding-left: 40px;">   
                                <input name="pekerjaan" value="Pegawai Swasta" type="radio">(2) Pegawai Swasta
                            </span>
                            <span class="radio" style="padding-left: 40px;">   
                                <input name="pekerjaan" value="Ojek" type="radio">(3) Ojek
                            </span>
                        </div>
                        <div class="col-md-3">
                            <span class="radio"> 
                                <input name="pekerjaan" value="Wiraswasta / Pedagang" type="radio"> (4) Wiraswasta / Pedagang
                            </span>
                            <span class="radio"> 
                                <input name="pekerjaan" value="Mahasiswa / Pelajar" type="radio"> (5) Mahasiswa / Pelajar
                            </span>
                            <span class="radio"> 
                                <input name="pekerjaan" value="Guru / Dosen" type="radio"> (6) Guru / Dosen
                            </span>
                        </div>
                        <div class="col-md-2">
                            <span class="radio"> 
                                <input name="pekerjaan" value="TNI / Polri" type="radio"> (7) TNI / Polri
                            </span>
                            <span class="radio"> 
                                <input name="pekerjaan" value="Ibu Rumah Tangga" type="radio"> (8) Ibu Rumah Tangga
                            </span>
                            <span class="radio"> 
                                <input name="pekerjaan" value="Petani / Pelayan" type="radio"> (9) Petani / Pelayan
                            </span>
                        </div>
                        <div class="col-md-2">
                            <span class="radio"> 
                                <input name="pekerjaan" value="Dokter" type="radio"> (10) Dokter
                            </span>
                            <span class="radio"> 
                                <input name="pekerjaan" value="Pengacara" type="radio"> (11) Pengacara
                            </span>
                            <span class="radio"> 
                                <input name="pekerjaan" value="Wartawan" type="radio"> (12) Wartawan
                            </span>
                        </div>
                        <div class="col-md-2">
                            <span class="radio"> 
                                <input name="pekerjaan" value="Lain-lain" type="radio"> (13) Lain-lain
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Pengeluaran dalam 1 (satu) bulan (termasuk pengeluaran Keluarga) : (wajib diisi)</label><br>
                    <div class="row">
                        <div class="col-md-4">
                            <span class="radio" style="padding-left: 40px;">  
                                <input name="pengeluaran" value="< Rp 900.000,-" type="radio" required>(1) < Rp 900.000,-
                            </span> 
                            <span class="radio" style="padding-left: 40px;">   
                                <input name="pengeluaran" value="Rp 900.001,- s/d Rp 1.250.000,-" type="radio">(2) Rp 900.001,- s/d Rp 1.250.000,-
                            </span>
                            <span class="radio" style="padding-left: 40px;">   
                                <input name="pengeluaran" value="Rp 1.250.001,- s/d Rp 1.750.000,-" type="radio">(3) Rp 1.250.001,- s/d Rp 1.750.000,-
                            </span>
                        </div>
                        <div class="col-md-4">
                            <span class="radio"> 
                                <input name="pengeluaran" value="Rp 1.750.001,- s/d Rp 2.500.000,-" type="radio"> (4) Rp 1.750.001,- s/d Rp 2.500.000,-
                            </span>
                            <span class="radio"> 
                                <input name="pengeluaran" value="Rp 2.500.001,- s/d Rp 4.000.000,-" type="radio"> (5) Rp 2.500.001,- s/d Rp 4.000.000,-
                            </span>
                            <span class="radio"> 
                                <input name="pengeluaran" value="Rp 4.000.001,- s/d Rp 6.000.000,-" type="radio"> (6) Rp 4.000.001,- s/d Rp 6.000.000,-
                            </span>
                        </div>
                        <div class="col-md-4">
                            <span class="radio"> 
                                <input name="pengeluaran" value="> Rp 6.000.001,-" type="radio"> (7) > Rp 6.000.001,-
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir : (wajib diisi)</label><br>
                    <div class="row">
                        <div class="col-md-3">
                            <span class="radio" style="padding-left: 40px;">  
                                <input name="pendidikan_terakhir" value="Tidak Tamat SD" type="radio" required>(1) Tidak Tamat SD
                            </span> 
                            <span class="radio" style="padding-left: 40px;">   
                                <input name="pendidikan_terakhir" value="SD" type="radio">(2) SD
                            </span>
                        </div>
                        <div class="col-md-3">
                            <span class="radio">   
                                <input name="pendidikan_terakhir" value="SLTP / SMP" type="radio">(3) SLTP / SMP
                            </span>
                            <span class="radio"> 
                                <input name="pendidikan_terakhir" value="SLTA / SMU" type="radio"> (4) SLTA / SMU
                            </span>
                        </div>
                        <div class="col-md-3">
                            <span class="radio"> 
                                <input name="pendidikan_terakhir" value="Akademi / Diploma" type="radio"> (5) Akademi / Diploma
                            </span>
                            <span class="radio"> 
                                <input name="pendidikan_terakhir" value="Universitas" type="radio"> (6) Universitas
                            </span>
                        </div>
                        <div class="col-md-3">
                            <span class="radio"> 
                                <input name="pendidikan_terakhir" value="Pasca Sarjana" type="radio"> (7) Pasca Sarjana
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Apa merk motor yang Anda miliki sebelumnya ? (wajib diisi)</label><br>
                    <label class="checkbox-inline"> 
                        <input name="merk_motor" value="Honda" type="radio" required> (1) Honda
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="merk_motor" value="Yamaha" type="radio"> (2) Yamaha
                    </label>
                    <label class="checkbox-inline"> 
                        <input name="merk_motor" value="Suzuki" type="radio"> (3) Suzuki
                    </label>
                    <label class="checkbox-inline"> 
                        <input name="merk_motor" value="awasaki" type="radio"> (4) Kawasaki
                    </label>
                    <label class="checkbox-inline"> 
                        <input name="merk_motor" value="Motor Lainnya" type="radio"> (5) Motor Lainnya
                    </label>
                    <label class="checkbox-inline"> 
                        <input name="merk_motor" value="Belum Pernah Memiliki" type="radio"> (6) Belum Pernah Memiliki
                    </label>
                </div>
                <div class="form-group">
                    <label>Jenis motor yang Anda miliki sebelumnya : (wajib diisi)</label><br>
                    <label class="checkbox-inline"> 
                        <input name="jenis_motor" value="Sport" type="radio" required> (1) Sport
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="jenis_motor" value="Cub (Bebek)" type="radio"> (2) Cub (Bebek)
                    </label>
                    <label class="checkbox-inline"> 
                        <input name="jenis_motor" value="Skuter (Matik)" type="radio"> (3) Skuter (Matik)
                    </label>
                    <label class="checkbox-inline"> 
                        <input name="jenis_motor" value="Belum Pernah Memiliki" type="radio"> (4) Belum Pernah Memiliki
                    </label>
                </div>
                <div class="form-group">
                    <label>Hobi :</label>
                        <input type="text" name="hobi" class="form-control" placeholder="Hobi" required>
                </div>
                <hr>
                <h3 class="text-center">Data Kontak</h3>
                <hr>
                <div class="form-group">
                    <label>No. HP (GSM / CDMA) :</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="No. HP (GSM / CDMA)" required>
                </div>
                <div class="form-group">
                    <label>No. Telepon Rumah :</label>
                        <input type="text" name="no_telepon" class="form-control" placeholder="No. Telepon Rumah" required>
                </div>
                <div class="form-group">
                    <label>Status Kepemilikian No. HP : (wajib diisi jika No. HP diisi)</label><br>
                    <label class="checkbox-inline"> 
                        <input name="status_hp" value="Pra Bayar (Isi Ulang)" type="radio" required> (1) Pra Bayar (Isi Ulang)
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="status_hp" value="Pasca Bayar / Billing / Tagihan" type="radio"> (2) Pasca Bayar / Billing / Tagihan
                    </label>
                </div>
                <div class="form-group">
                    <label>Alamat E-mail :</label>
                    <input type="email" name="email" class="form-control" placeholder="Alamat E-mail">
                </div>
                <div class="form-group">
                    <label>Facebook :</label>
                    <input type="text" name="facebook" class="form-control" placeholder="Facebook">
                </div>
                <div class="form-group">
                    <label>Twitter :</label>
                    <input type="text" name="twitter" class="form-control" placeholder="Twitter">
                </div>
                <div class="form-group">
                    <label>Instagram :</label>
                    <input type="text" name="instagram" class="form-control" placeholder="Instagram">
                </div>
                <div class="form-group">
                    <label>Youtube (...@gmail.com) :</label>
                    <input type="text" name="youtube" class="form-control" placeholder="Youtube">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-7">
                            <label>Apakah Anda bersedia dikirimkan Informasi terbaru program Honda ? (wajib diisi)</label>
                        </div>
                        <div class="col-md-5">
                            <label class="checkbox-inline"> 
                                <input name="status_informasi" value="Ya" type="radio" required> (1) Ya
                            </label> 
                            <label class="checkbox-inline"> 
                                <input name="status_informasi" value="Tidak" type="radio"> (2) Tidak
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <center>
                <p>Dengan mengisi formulir ini, saya menyatakan bahwa: </p>
                <p><strong>"Data yang saya berikan dalam formulir ini adalah sesuai dengan kenyataan, lengkap dan benar."</strong></p>
                 </center>
                <hr>
                <button type="submit" class="btn btn-primary block full-width m-b">Daftar</button>
            </form>
            <hr>
            <center><strong>Copyright</strong> Astra Motor <small>© 2018</small></center>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('#date_added').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
        });
    </script>

</body>

</html>
