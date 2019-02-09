            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-lg-3" style="margin: 0px 10px; text-transform: none;">
                        <button class="btn btn-primary btn-rounded btn-block dim" style="text-transform: none;" type="button" onclick="location.href='<?php echo site_url('komentar/tambah_komentar')?>'"><i class="fa fa-plus"></i> Tambah komentar</button>
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
                                            <td>Komentar</td>
                                            <td>Tanggal komentar</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($daftar_komentar != NULL) foreach($daftar_komentar as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $value['komentar']; ?></td>
                                            <td><?php echo $value['tanggal_komentar']; ?></td>
                                            <td>
                                                <button class="btn btn-danger dim" onclick="if (confirm('Data komentar akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('komentar/hapus_komentar/'.$value['id_komentar'])?>'" type="button"><i class="fa fa-trash"></i> Hapus</button>
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