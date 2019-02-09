            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-lg-3" style="margin: 0px 10px; text-transform: none;">
                        <button class="btn btn-primary btn-rounded btn-block dim" style="text-transform: none;" type="button" onclick="location.href='<?php echo site_url('daftar_alamat/tambah_alamat')?>'"><i class="fa fa-plus"></i> Tambah Alamat</button>
                    </div>
                    <div class="col-lg-8">
                        <?php echo $this->session->flashdata('hasil'); ?>
                    </div>
                </div>
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
                                            <td>Alamat Lengkap</td>
                                            <td>RT</td>
                                            <td>RW</td>
                                            <td>Kelurahan</td>
                                            <td>Kecamatan</td>
                                            <td>Kota</td>
                                            <td>Provinsi</td>
                                            <td>Kode Pos</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($daftar_alamat != NULL) foreach($daftar_alamat as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $value['alamat']; ?></td>
                                            <td><?php echo $value['rt']; ?></td>
                                            <td><?php echo $value['rw']; ?></td>
                                            <td><?php echo $value['kelurahan']; ?></td>
                                            <td><?php echo $value['kecamatan']; ?></td>
                                            <td><?php echo $value['kota']; ?></td>
                                            <td><?php echo $value['provinsi']; ?></td>
                                            <td><?php echo $value['kode_pos']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-info dim" onclick="location.href='<?php echo site_url('daftar_alamat/edit_alamat/'.$value['id_alamat'])?>'" type="button" <?php echo $key == 0 ? 'disabled' : ''; ?>><i class="fa fa-edit"></i> Edit</button>
                                                    <button class="btn btn-danger dim" onclick="if (confirm('Data alamat akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_alamat/hapus_alamat/'.$value['id_alamat'])?>'" type="button" <?php echo $key == 0 ? 'disabled' : ''; ?>><i class="fa fa-trash"></i> Hapus</button>
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
            </div>