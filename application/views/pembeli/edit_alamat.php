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
                                        <?php foreach ($alamat as $key => $value) { ?>
                                        <form class="m-t" role="form" action="<?php echo site_url('daftar_alamat/edit_alamat_form/'.$value['id_alamat'])?>" method="post">
                                        <div class="form-group">
                                            <label>Alamat :</label>
                                            <textarea name="alamat" placeholder="Alamat" type="text" class="form-control" style="resize: vertical;"><?php echo $value['alamat']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>RT : </label>
                                                        <input type="text" name="rt" class="form-control" placeholder="RT" value="<?php echo $value['rt']; ?>" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>RW : </label>
                                                        <input type="text" name="rw" value="<?php echo $value['rw']; ?>" class="form-control" placeholder="RW" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <label>Kelurahan : </label>
                                                        <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" value="<?php echo $value['kelurahan']; ?>" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Kode Pos :</label>
                                                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" value="<?php echo $value['kode_pos']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Kecamatan : </label>
                                                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?php echo $value['kecamatan']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kota : </label>
                                                <input type="text" name="kota" class="form-control" placeholder="Kota" value="<?php echo $value['kota']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Provinsi : </label>
                                                <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" value="<?php echo $value['provinsi']; ?>" required>
                                            </div>
                                         <hr>
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