        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <?php foreach ($daftar_kendaraan as $key => $value) { ?>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="testis" itemscope itemtype="http://schema.org/ImageGallery">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <?php $arr = getimagesize(base_url('assets/img/kendaraan/'.$value['foto_kendaraan'])); ?>
                                    <a href="<?php echo base_url('assets/img/kendaraan/'.$value['foto_kendaraan']);?>" itemprop="contentUrl" data-size="<?php echo $arr[0]."x".$arr[1]?>">
                                        <div class="thumbnail" style="border:none">
                                            <img style = "max-height:180px" src="<?php echo base_url('assets/img/kendaraan/'.$value['thumbnail_kendaraan']); ?>" itemprop="thumbnail" alt="<?php echo $value['thumbnail_kendaraan']; ?>" />
                                        </div>
                                    </a>
                                    <figcaption itemprop="caption description">
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="product-desc" style="background-color: #f8f8f9">
                                <span class="product-price">
                                    <?php echo 'Rp. '.number_format($value['harga'], 2, ',', '.'); ?>
                                </span>
                                <a href="<?php echo site_url('kendaraan/detil/'.$value['id_kendaraan'])?>" class="product-name text-center"> <?php echo $value['tipe']; ?></a>

                                <div class="m-t-xs">
                                    Kategori : <?php echo $value['kategori']; ?><br>
                                    Warna : <?php echo $value['warna']; ?><br>
                                    Stok : <?php echo $value['jumlah_stok']; ?>
                                </div>
                                <div class="m-t text-right">

                                    <a href="<?php echo site_url('kendaraan/detil/'.$value['id_kendaraan'])?>" class="btn btn-xs btn-outline btn-primary">Detil <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>