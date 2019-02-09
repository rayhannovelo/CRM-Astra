            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5><?php echo $title ?></h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                <table id="mytable" class="table table-striped table-bordered table-hover" align="center">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Username</td>
                                            <td>Tanggal Daftar</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($daftar_registrasi != NULL) foreach($daftar_registrasi as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $value['username']; ?></td>
                                            <td><?php echo $value['tanggal_daftar']; ?></td>
                                            </td>
                                            <td>
                                                <button class="btn btn-info dim" onclick="location.href='<?php echo site_url('daftar_pembeli/verifikasi/'.$value['id_pembeli'])?>'" type="button"><i class="fa fa-edit"></i> Verifikasi</button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5><?php echo $title1 ?></h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                <table id="mytable" class="table table-striped table-bordered table-hover" align="center">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nama Pembeli</td>
                                            <td>Alamat</td>
                                            <td>Tanggal Daftar</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($daftar_pembeli != NULL) foreach($daftar_pembeli as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $value['nama_pembeli']; ?></td>
                                            <td><?php echo $value['alamat']; ?></td>
                                            <td><?php echo $value['tanggal_daftar']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-success dim" onclick="location.href='<?php echo site_url('daftar_pembeli/profil/'.$value['id_pembeli'])?>'" type="button"><i class="fa fa-edit"></i> Profil</button>
                                                    <button class="btn btn-danger dim" onclick="if (confirm('Data Konsumen akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_pembeli/hapus_pembeli/'.$value['id_pengguna'])?>'" type="button"><i class="fa fa-trash"></i> Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5><?php echo $title2 ?></h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                <table id="mytable" class="table table-striped table-bordered table-hover" align="center">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nama Pembeli</td>
                                            <td>Alamat</td>
                                            <td>Tanggal Daftar</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($daftar_tidak_valid != NULL) foreach($daftar_tidak_valid as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $value['nama_pembeli']; ?></td>
                                            <td><?php echo $value['alamat']; ?></td>
                                            <td><?php echo $value['tanggal_daftar']; ?></td>
                                            <td>
                                                <button class="btn btn-danger dim" onclick="if (confirm('Data Konsumen akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_pembeli/hapus_pembeli/'.$value['id_pengguna'])?>'" type="button"><i class="fa fa-trash"></i> Hapus</button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>