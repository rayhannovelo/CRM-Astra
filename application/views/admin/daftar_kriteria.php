            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo $this->session->flashdata('hasil'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Daftar Kriteria</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                <div class="col-lg-12">
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example" align="center">
                                    <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td>Nama Kriteria</td>
                                            <td>Bobot</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $total_bobot = 0;
                                            if($kriteria != NULL) foreach($kriteria as $k) { 
                                        ?>
                                        <tr>
                                            <td><?php echo $k['id_kriteria']; ?></td>
                                            <td><?php echo $k['nama_kriteria']; ?></td>
                                            <td><?php echo $k['bobot']; ?></td>
                                            <td>
                                                <button class="btn btn-info dim" onclick="location.href='<?php echo site_url('daftar_kriteria/edit_kriteria/'.$k['id_kriteria'])?>'" type="button"><i class="fa fa-edit"></i> Edit</button>
                                            </td>
                                        </tr>
                                        <?php 
                                                $total_bobot += $k['bobot']; 
                                            }

                                            if($total_bobot > 100) {
                                                echo '<div class="alert alert-warning text-center"><i class="fa fa-warning"></i> Jumlah Bobot Lebih Dari 100!</div>';
                                            } 
                                        ?>
                                    </tbody>
                                </table>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>