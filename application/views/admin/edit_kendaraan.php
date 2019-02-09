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
                                        <?php foreach ($kendaraan as $key => $value) { ?>
                                        <form class="form-horizontal" role="form" action="<?php echo site_url('daftar_kendaraan/edit_kendaraan_form/'.$value['id_kendaraan'])?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Kategori :</label>
                                            <div class="col-lg-9">
                                                <select name="kategori" class="form-control">
                                                    <option>-- Pilih Kategori --</option>
                                                    <option value="Cub" <?php echo $value['kategori'] == 'Cub' ? 'selected' : ''; ?>>Cub</option>
                                                    <option value="Matic" <?php echo $value['kategori'] == 'Matic' ? 'selected' : ''; ?>>Matic</option>
                                                    <option value="Sport" <?php echo $value['kategori'] == 'Sport' ? 'selected' : ''; ?>>Sport</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Tipe :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="tipe" placeholder="Tipe kendaraan" class="form-control" value="<?php echo $value['tipe']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Warna :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="warna" placeholder="Warna kendaraan" class="form-control" value="<?php echo $value['warna']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Harga :</label>
                                            <div class="col-lg-9">
                                                <input type="number" name="harga" placeholder="ditulis tanpa titik" class="form-control" value="<?php echo $value['harga']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Harga DP :</label>
                                            <div class="col-lg-9">
                                                <input type="number" name="harga_dp" placeholder="ditulis tanpa titik" class="form-control" value="<?php echo $value['harga_dp']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Deskripsi :</label>
                                            <div class="col-lg-9">
                                                <textarea id="summernote" name="deskripsi" placeholder="Deskripsi Motor" class="form-control"><?php echo $value['deskripsi']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Foto :</label>
                                            <div class="col-lg-9">
                                                <div class="fileinput fileinput-new col-sm-9" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                      <img src="<?php echo base_url('assets/img/kendaraan/'.$value['thumbnail_kendaraan'])?>" alt="Image 1">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                    </div>
                                                    <div>
                                                      <span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Foto</span>
                                                        <span class="fileinput-exists">Ganti</span>
                                                        <input type="hidden" value="<?php echo $value['foto_kendaraan'] ?>" name="foto_kendaraan">
                                                        <input type="hidden" value="<?php echo $value['thumbnail_kendaraan'] ?>" name="thumbnail_kendaraan">
                                                        <input type="file" name="foto_kendaraan_baru" accept="image/*">
                                                      </span>
                                                      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
                                                    </div>
                                                  </div>
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