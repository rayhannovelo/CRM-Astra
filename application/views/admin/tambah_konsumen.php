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
                                        <form class="form-horizontal" role="form" action="<?php echo site_url('daftar_konsumen/tambah_konsumen_form/')?>" method="post">
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                                <h2 class="text-center"><strong>Data Konsumen</strong></h2>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Pembelian :</label>
                                            <div class="col-lg-9">
                                                <select name="id_motor" class="form-control">
                                                    <option>-- Pilih Kendaraan --</option>
                                                    <?php foreach ($motor as $value) { ?>
                                                    <option value="<?php echo $value['id_motor'] ?>"><?php echo $value['merk'].' - '.$value['tipe']. ' - '.$value['warna']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nama Konsumen :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="nama_konsumen" placeholder="Nama Konsumen" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Alamat :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="alamat" placeholder="Alamat" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jenis Kelamin :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="jenis_kelamin" value="Laki-laki" type="radio"> Laki-laki 
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="jenis_kelamin" value="Perempuan"  type="radio"> Perempuan 
                                                </label> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Tanggal Lahir :</label>
                                            <div class="col-lg-9">
                                                <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Agama :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="agama"  value="Islam" type="radio"> Islam 
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="agama"  value="Kristen Protestan" type="radio"> Kristen Protestan 
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="agama"  value="Katolik" type="radio"> Katolik 
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="agama"  value="Hindu" type="radio"> Hindu
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="agama"  value="Buddha" type="radio"> Buddha 
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="agama"  value="Kong Hu Cu" type="radio"> Kong Hu Cu 
                                                </label>  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Pekerjaan :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                                <h2 class="text-center"><strong>Data Penilaian</strong></h2>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">KEPRIBADIAN :</label>
                                            <div class="col-lg-9">
                                                <input name="nilai_kriteria[0]" value="0" type="hidden">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">*Sifat Ketika Diinterview :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[0]"  value="10" type="radio"> Baik
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[0]"  value="5" type="radio"> Tidak Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">*Penyampaian Konsumen :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[1]"  value="10" type="radio"> Baik
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[1]"  value="5" type="radio"> Tidak Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">*Hasil Verifikasi Lingkungan :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[2]"  value="10" type="radio"> Baik
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[2]"  value="5" type="radio"> Tidak Baik
                                                </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Kemampuan :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[1]"  value="1" type="radio"> < Rp200.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[1]"  value="2" type="radio"> Rp250.000 sd/ Rp500.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[1]"  value="3" type="radio"> Rp500.000 sd/ Rp1.000.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[1]"  value="4" type="radio"> Rp1.000.000 sd/ Rp4.000.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[1]"  value="5" type="radio"> > Rp4.000.000
                                                </label> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Penghasilan Per Bulan :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[2]"  value="1" type="radio"> Rp.900.000 sd/ Rp.1.800.000
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[2]"  value="2" type="radio"> Rp.1.800.000 sd/ Rp.4.500.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[2]"  value="3" type="radio"> Rp.4.500.000 sd/ Rp.7.500.000
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[2]"  value="4" type="radio"> Rp.7.500.000 sd/ Rp.10.000.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[2]"  value="5" type="radio"> Rp.10.000.000 sd/ Rp.20.000.000
                                                </label> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jaminan :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[3]"  value="2" type="radio"> BPKB Motor
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[3]"  value="3" type="radio"> BPKB Mobil
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[3]"  value="4" type="radio"> Surat Tanah
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[3]"  value="5" type="radio"> Surat Rumah
                                                </label> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Kondisi :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[4]"  value="1" type="radio"> Sangat Kurang
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[4]"  value="2" type="radio"> Kurang
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[4]"  value="3" type="radio"> Cukup
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[4]"  value="4" type="radio"> Baik
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[4]"  value="5" type="radio"> Sangat Baik
                                                </label> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-lg-offset-8 col-lg-4">
                                                <button type="reset" class="btn btn-w-m btn-warning">Reset</button>
                                                <button class="btn btn-w-m btn-primary" type="submit">Simpan</button>
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