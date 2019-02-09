        <div class="wrapper wrapper-content animated fadeInRight">
            <?php foreach ($kendaraan as $key => $value) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox product-detail">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="testis" itemscope itemtype="http://schema.org/ImageGallery">
                                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <?php $arr = getimagesize(base_url('assets/img/kendaraan/'.$value['foto_kendaraan'])); ?>
                                            <a href="<?php echo base_url('assets/img/kendaraan/'.$value['foto_kendaraan']);?>" itemprop="contentUrl" data-size="<?php echo $arr[0]."x".$arr[1]?>">
                                                <div class="thumbnail" style="border:none">
                                                    <img style = "max-height:438px" src="<?php echo base_url('assets/img/kendaraan/'.$value['foto_kendaraan']); ?>" itemprop="thumbnail" alt="<?php echo $value['foto_kendaraan']; ?>" />
                                                </div>
                                            </a>
                                            <figcaption itemprop="caption description">
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h2 class="font-bold m-b-xs">
                                        <?php echo $value['tipe'].' - '.$value['warna']; ?>
                                    </h2>
                                    <hr>
                                    <div>
                                        <button class="btn btn-primary pull-right" onclick="location.href='<?php echo site_url('transaksi/tambah_transaksi/'.$value['id_kendaraan'])?>'" <?php echo $value['jumlah_stok'] == 0 ? 'disabled' : ''; ?>><i class="fa fa-shopping-cart"></i> Beli Sekarang</button>
                                        <h1 class="product-main-price"><?php echo 'Rp. '.number_format($value['harga'], 2, ',', '.'); ?> <small class="text-muted">(Termasuk Pajak)</small> </h1>
                                    </div>
                                    <hr>
                                    <h4>Deskripsi Kendaraan</h4>
                                    <div class="small text-muted">
                                        <?php echo $value['deskripsi']; ?>
                                    </div>
                                    <dl class="dl-horizontal m-t-md small">
                                        <dt>Kategori :</dt>
                                        <dd><?php echo $value['kategori']; ?></dd>
                                        <dt>Tipe :</dt>
                                        <dd><?php echo $value['tipe']; ?></dd>
                                        <dt>Warna :</dt>
                                        <dd><?php echo $value['warna']; ?></dd>
                                        <dt>Harga DP :</dt>
                                        <dd><?php echo 'Rp. '.number_format($value['harga_dp'], 2, ',', '.'); ?></dd>
                                        <dt>Jumlah Stok :</dt>
                                        <dd><?php echo $value['jumlah_stok'] == 0 ? 'Kosong' : $value['jumlah_stok']; ?></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-footer">
                            <span class="pull-right">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>