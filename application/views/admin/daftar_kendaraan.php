            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-lg-3" style="margin: 0px 10px; text-transform: none;">
                        <button class="btn btn-primary btn-rounded btn-block dim" style="text-transform: none;" type="button" onclick="location.href='<?php echo site_url('daftar_kendaraan/tambah_kendaraan')?>'"><i class="fa fa-plus"></i> Tambah kendaraan</button>
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
                                            <td>Foto Kendaraan</td>
                                            <td>Kategori</td>
                                            <td>Tipe</td>
                                            <td>Warna</td>
                                            <td>Harga</td>
                                            <td>Harga DP</td>
                                            <td>Jumlah Stok</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($daftar_kendaraan != NULL) foreach($daftar_kendaraan as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td>
                                                <div class="testis" itemscope itemtype="http://schema.org/ImageGallery">
                                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                    <?php $arr = getimagesize(base_url('assets/img/kendaraan/'.$value['foto_kendaraan'])); ?>
                                                        <a href="<?php echo base_url('assets/img/kendaraan/'.$value['foto_kendaraan']);?>" itemprop="contentUrl" data-size="<?php echo $arr[0]."x".$arr[1]?>">
                                                            <div class="thumbnail">
                                                                <img style = "max-height:180px" src="<?php echo base_url('assets/img/kendaraan/'.$value['thumbnail_kendaraan']); ?>" itemprop="thumbnail" alt="<?php echo $value['thumbnail_kendaraan']; ?>" />
                                                            </div>
                                                        </a>
                                                        <figcaption itemprop="caption description">
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </td>
                                            <td><?php echo $value['kategori']; ?></td>
                                            <td><?php echo $value['tipe']; ?></td>
                                            <td><?php echo $value['warna']; ?></td>
                                            <td><?php echo 'Rp. '.number_format($value['harga'], 2, ',', '.'); ?></td>
                                            <td><?php echo 'Rp. '.number_format($value['harga_dp'], 2, ',', '.'); ?></td>
                                            <td><?php echo $value['jumlah_stok']; ?> Unit</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dim" onclick="location.href='<?php echo site_url('daftar_kendaraan/tambah_stok/'.$value['id_kendaraan'])?>'" type="button"><i class="fa fa-plus"></i> Tambah Stok</button>
                                                    <button class="btn btn-info dim" onclick="location.href='<?php echo site_url('daftar_kendaraan/edit_kendaraan/'.$value['id_kendaraan'])?>'" type="button"><i class="fa fa-edit"></i> Edit</button>
                                                    <button class="btn btn-danger dim" onclick="if (confirm('Data kendaraan akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_kendaraan/hapus_kendaraan/'.$value['id_kendaraan'].'/'.$value['foto_kendaraan'].'/'.$value['thumbnail_kendaraan'])?>'" type="button"><i class="fa fa-trash"></i> Hapus</button>
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