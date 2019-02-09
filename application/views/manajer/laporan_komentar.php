            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5><?php echo $title ?></h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                <table id="laporan_komentar" class="table table-striped table-bordered table-hover" align="center">
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
                                                <button class="btn btn-danger dim" onclick="if (confirm('Data komentar akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('laporan_komentar/hapus_komentar/'.$value['id_komentar'])?>'" type="button"><i class="fa fa-trash"></i> Hapus</button>
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