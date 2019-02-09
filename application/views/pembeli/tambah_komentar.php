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
                                        <form class="form-horizontal" role="form" action="<?php echo site_url('komentar/tambah_komentar_form/')?>" method="post">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Komentar :</label>
                                            <div class="col-lg-9">
                                                <textarea id="summernote" name="komentar" placeholder="Tulis komentar tentang pelayanan Astra Motor" class="form-control"></textarea>
                                            </div>
                                        </div>
                                         <hr>
                                        <div class="form-group">
                                            <div class="col-lg-offset-8 col-lg-4">
                                                <button type="reset" class="btn btn-w-m btn-warning">Reset</button>
                                                <button class="btn btn-w-m btn-primary" type="submit">Kirim</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>