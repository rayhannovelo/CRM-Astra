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
                                        <form class="form-horizontal" role="form" action="<?php echo site_url('daftar_kendaraan/tambah_kendaraan_form/')?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Kategori :</label>
                                            <div class="col-lg-9">
                                                <select name="kategori" class="form-control">
                                                    <option>-- Pilih Kategori --</option>
                                                    <option value="Cub">Cub</option>
                                                    <option value="Matic">Matic</option>
                                                    <option value="Sport">Sport</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Tipe :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="tipe" placeholder="Tipe kendaraan" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Warna :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="warna" placeholder="Warna kendaraan" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Harga :</label>
                                            <div class="col-lg-9">
                                                <input type="number" name="harga" placeholder="ditulis tanpa titik" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Harga DP :</label>
                                            <div class="col-lg-9">
                                                <input type="number" name="harga_dp" placeholder="ditulis tanpa titik" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Deskripsi :</label>
                                            <div class="col-lg-9">
                                                <textarea id="summernote" name="deskripsi" placeholder="Deskripsi Motor" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Foto :</label>
                                            <div class="col-lg-9">
                                                <div class="fileinput fileinput-new col-sm-9" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                      <img src="<?php echo base_url('assets/img/default.png')?>" alt="Image 1">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                    </div>
                                                    <div>
                                                      <span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Foto</span>
                                                        <span class="fileinput-exists">Ganti</span>
                                                        <input type="file" name="foto_kendaraan" accept="image/*" required>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>