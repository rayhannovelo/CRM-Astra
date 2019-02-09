            <?php // print_r($subnilai); ?>
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
                                        <?php if($daftar_konsumen != NULL) foreach ($daftar_konsumen as $k) { ?>
                                        <form class="form-horizontal" role="form" action="<?php echo site_url('daftar_konsumen/edit_konsumen_form/'.$id_konsumen)?>" method="post">
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
                                                    <option value="<?php echo $value['id_motor'] ?>" <?php echo $k['id_motor'] == $value['id_motor'] ? 'selected' : ''; ?>><?php echo $value['merk'].' - '.$value['tipe']. ' - '.$value['warna']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nama Konsumen :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="nama_konsumen" placeholder="Nama Konsumen" class="form-control" value="<?php echo $k['nama_konsumen'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Alamat :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?php echo $k['alamat'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jenis Kelamin :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="jenis_kelamin" value="Laki-laki" type="radio" <?php echo $k['jenis_kelamin'] == 'Laki-laki' ? 'checked' : ''; ?>> Laki-laki 
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="jenis_kelamin" value="Perempuan"  type="radio" <?php echo $k['jenis_kelamin'] == 'Perempuan' ? 'checked' : ''; ?>> Perempuan 
                                                </label> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Tanggal Lahir :</label>
                                            <div class="col-lg-9">
                                                <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" value="<?php echo $k['tanggal_lahir'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Agama :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="agama" value="Islam" type="radio" <?php echo $k['agama'] == 'Islam' ? 'checked' : ''; ?>> Islam 
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="agama"  value="Kristen Protestan" type="radio" <?php echo $k['agama'] == 'Kristen Protestan' ? 'checked' : ''; ?>> Kristen Protestan 
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="agama"  value="Katolik" type="radio" <?php echo $k['agama'] == 'Katolik' ? 'checked' : ''; ?>> Katolik 
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="agama" value="Hindu" type="radio" <?php echo $k['agama'] == 'Hindu' ? 'checked' : ''; ?>> Hindu
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="agama"  value="Buddha" type="radio" <?php echo $k['agama'] == 'Buddha' ? 'checked' : ''; ?>> Buddha 
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="agama"  value="Kong Hu Cu" type="radio" <?php echo $k['agama'] == 'Kong Hu Cu' ? 'checked' : ''; ?>> Kong Hu Cu 
                                                </label>  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Pekerjaan :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control" value="<?php echo $k['pekerjaan'] ?>" required>
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
                                                    <input type="hidden" name="id_subnilai" value="<?php echo $subnilai[0]['id_subnilai'] ?>"> 
                                                    <input type="hidden" name="id_evaluasi" value="<?php echo $subnilai[0]['id_evaluasi'] ?>"> 
                                                    <input name="subnilai_kriteria[0]" value="10" type="radio" <?php echo $subnilai[0]['subnilai'] == '10' ? 'checked' : ''; ?>> Baik
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[0]"  value="5" type="radio" <?php echo $subnilai[0]['subnilai'] == '5' ? 'checked' : ''; ?>> Tidak Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">*Penyampaian Konsumen :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[1]"  value="10" type="radio" <?php echo $subnilai[1]['subnilai'] == '10' ? 'checked' : ''; ?>> Baik
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[1]"  value="5" type="radio" <?php echo $subnilai[1]['subnilai'] == '5' ? 'checked' : ''; ?>> Tidak Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">*Hasil Verifikasi Lingkungan :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[2]"  value="10" type="radio" <?php echo $subnilai[2]['subnilai'] == '10' ? 'checked' : ''; ?>> Baik
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="subnilai_kriteria[2]"  value="5" type="radio" <?php echo $subnilai[2]['subnilai'] == '5' ? 'checked' : ''; ?>> Tidak Baik
                                                </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Kemampuan :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[1]"  value="1" type="radio" <?php echo $nilai[0]['kemampuan'] == '1' ? 'checked' : ''; ?>> < Rp200.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[1]"  value="2" type="radio" <?php echo $nilai[0]['kemampuan'] == '2' ? 'checked' : ''; ?>> Rp250.000 sd/ Rp500.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[1]"  value="3" type="radio" <?php echo $nilai[0]['kemampuan'] == '3' ? 'checked' : ''; ?>> Rp500.000 sd/ Rp1.000.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[1]"  value="4" type="radio" <?php echo $nilai[0]['kemampuan'] == '4' ? 'checked' : ''; ?>> Rp1.000.000 sd/ Rp4.000.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[1]"  value="5" type="radio" <?php echo $nilai[0]['kemampuan'] == '5' ? 'checked' : ''; ?>> > Rp4.000.000
                                                </label> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Penghasilan Per Bulan :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[2]"  value="1" type="radio" <?php echo $nilai[0]['penghasilan'] == '1' ? 'checked' : ''; ?>> Rp.900.000 sd/ Rp.1.800.000
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[2]"  value="2" type="radio" <?php echo $nilai[0]['penghasilan'] == '2' ? 'checked' : ''; ?>> Rp.1.800.000 sd/ Rp.4.500.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[2]"  value="3" type="radio" <?php echo $nilai[0]['penghasilan'] == '3' ? 'checked' : ''; ?>> Rp.4.500.000 sd/ Rp.7.500.000
                                                </label> 
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[2]"  value="4" type="radio" <?php echo $nilai[0]['penghasilan'] == '4' ? 'checked' : ''; ?>> Rp.7.500.000 sd/ Rp.10.000.000
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[2]"  value="5" type="radio" <?php echo $nilai[0]['penghasilan'] == '5' ? 'checked' : ''; ?>> Rp.10.000.000 sd/ Rp.20.000.000
                                                </label> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jaminan :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[3]"  value="2" type="radio" <?php echo $nilai[0]['jaminan'] == '2' ? 'checked' : ''; ?>> BPKB Motor
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[3]"  value="3" type="radio" <?php echo $nilai[0]['jaminan'] == '3' ? 'checked' : ''; ?>> BPKB Mobil
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[3]"  value="4" type="radio" <?php echo $nilai[0]['jaminan'] == '4' ? 'checked' : ''; ?>> Surat Tanah
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[3]"  value="5" type="radio" <?php echo $nilai[0]['jaminan'] == '5' ? 'checked' : ''; ?>> Surat Rumah
                                                </label> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Kondisi :</label>
                                            <div class="col-lg-9">
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[4]"  value="1" type="radio" <?php echo $nilai[0]['kondisi'] == '1' ? 'checked' : ''; ?>> Sangat Kurang
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[4]"  value="2" type="radio" <?php echo $nilai[0]['kondisi'] == '2' ? 'checked' : ''; ?>> Kurang
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[4]"  value="3" type="radio" <?php echo $nilai[0]['kondisi'] == '3' ? 'checked' : ''; ?>> Cukup
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[4]"  value="4" type="radio" <?php echo $nilai[0]['kondisi'] == '4' ? 'checked' : ''; ?>> Baik
                                                </label>
                                                <label class="checkbox-inline"> 
                                                    <input name="nilai_kriteria[4]"  value="5" type="radio" <?php echo $nilai[0]['kondisi'] == '5' ? 'checked' : ''; ?>> Sangat Baik
                                                </label> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-8 col-lg-4">
                                                <button type="reset" class="btn btn-w-m btn-warning">Reset</button>
                                                <button class="btn btn-w-m btn-primary" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>