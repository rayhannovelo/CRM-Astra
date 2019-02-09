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
                                            <td>Nomor Invoice</td>
                                            <td>Bukti Pembayaran</td>
                                            <td>Perihal</td>
                                            <td>Bank Pengirim</td>
                                            <td>Nomor Rekening</td>
                                            <td>Nama Pengirim</td>
                                            <td>Tanggal Pembayaran</td>
                                            <td>Jumlah Pembayaran</td>
                                            <td width="250px">Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($daftar_pembayaran != NULL) foreach($daftar_pembayaran as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $value['no_invoice']; ?></td>
                                            <td>
                                                <div class="testis" itemscope itemtype="http://schema.org/ImageGallery">
                                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                    <?php $arr = getimagesize(base_url('assets/img/bukti_pembayaran/'.$value['foto_pembayaran'])); ?>
                                                        <a href="<?php echo base_url('assets/img/bukti_pembayaran/'.$value['foto_pembayaran']);?>" itemprop="contentUrl" data-size="<?php echo $arr[0]."x".$arr[1]?>">
                                                            <div class="thumbnail">
                                                                <img style = "max-height:180px" src="<?php echo base_url('assets/img/bukti_pembayaran/'.$value['foto_pembayaran']); ?>" itemprop="thumbnail" alt="<?php echo $value['foto_pembayaran']; ?>" />
                                                            </div>
                                                        </a>
                                                        <figcaption itemprop="caption description">
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </td>
                                            <td><?php echo $value['perihal']; ?></td>
                                            <td><?php echo $value['bank_pengirim']; ?></td>
                                            <td><?php echo $value['nomor_rekening']; ?></td>
                                            <td><?php echo $value['nama_pengirim']; ?></td>
                                            <td><?php echo $value['tanggal_pembayaran']; ?></td>
                                            <td><?php echo $value['jumlah_pembayaran']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                <button class="btn btn-primary dim" onclick="if (confirm('Data pembeli akan dinyatakan valid, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_pembayaran/valid/'.$value['id_pembayaran'].'/'.$value['id_transaksi'].'/'.urlencode($value['perihal']));?>'"><i class="fa fa-check"></i> Valid</button>
                                                <button class="btn btn-warning dim" onclick="if (confirm('Data pembeli akan dinyatakan tidak valid, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_pembayaran/tidak_valid/'.$value['id_pembayaran']);?>'"><i class="fa fa-times"></i> Tidak Valid</button>
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
                                <h5><?php echo $title1 ?></h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                <table id="mytable" class="table table-striped table-bordered table-hover" align="center">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nomor Invoice</td>
                                            <td>Bukti Pembayaran</td>
                                            <td>Perihal</td>
                                            <td>Bank Pengirim</td>
                                            <td>Nomor Rekening</td>
                                            <td>Nama Pengirim</td>
                                            <td>Tanggal Pembayaran</td>
                                            <td>Jumlah Pembayaran</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($history_pembayaran != NULL) foreach($history_pembayaran as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $value['no_invoice']; ?></td>
                                            <td>
                                                <div class="testis" itemscope itemtype="http://schema.org/ImageGallery">
                                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                    <?php $arr = getimagesize(base_url('assets/img/bukti_pembayaran/'.$value['foto_pembayaran'])); ?>
                                                        <a href="<?php echo base_url('assets/img/bukti_pembayaran/'.$value['foto_pembayaran']);?>" itemprop="contentUrl" data-size="<?php echo $arr[0]."x".$arr[1]?>">
                                                            <div class="thumbnail">
                                                                <img style = "max-height:180px" src="<?php echo base_url('assets/img/bukti_pembayaran/'.$value['foto_pembayaran']); ?>" itemprop="thumbnail" alt="<?php echo $value['foto_pembayaran']; ?>" />
                                                            </div>
                                                        </a>
                                                        <figcaption itemprop="caption description">
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </td>
                                            <td><?php echo $value['perihal']; ?></td>
                                            <td><?php echo $value['bank_pengirim']; ?></td>
                                            <td><?php echo $value['nomor_rekening']; ?></td>
                                            <td><?php echo $value['nama_pengirim']; ?></td>
                                            <td><?php echo $value['tanggal_pembayaran']; ?></td>
                                            <td><?php echo $value['jumlah_pembayaran']; ?></td>
                                            <td><?php echo $value['status']; ?></td>
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