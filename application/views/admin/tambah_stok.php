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
                                        <form class="form-horizontal" role="form" action="<?php echo site_url('daftar_kendaraan/tambah_stok_form/'.$value['id_kendaraan'])?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Kategori :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="tipe" placeholder="Tipe kendaraan" class="form-control" value="<?php echo $value['kategori']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Tipe :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="tipe" placeholder="Tipe kendaraan" class="form-control" value="<?php echo $value['tipe']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Warna :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="warna" placeholder="Warna kendaraan" class="form-control" value="<?php echo $value['warna']; ?>" readonly>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Jumlah Stok Sekarang:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="harga" placeholder="ditulis tanpa titik" class="form-control" value="<?php echo $value['jumlah_stok']; ?>" readonly>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Tambah Stok :</label>
                                            <div class="col-lg-9">
                                                <input type="number" name="jumlah_stok" placeholder="" class="form-control" required>
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
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>