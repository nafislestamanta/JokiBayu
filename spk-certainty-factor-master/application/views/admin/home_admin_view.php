<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid pt-3">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3><?= $count_pakar ?></h3>

                                    <p>Total Pakar</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="<?= base_url('admin/pengguna'); ?>" class="small-box-footer">
                                    Lihat Detail <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= $count_pengetahuan ?></h3>

                                    <p>Total Pengetahuan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <a href="<?= base_url('admin/pengetahuan'); ?>" class="small-box-footer">
                                    Lihat Detail <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-pink">
                                <div class="inner">
                                    <h3><?= $count_penyakit ?></h3>

                                    <p>Total Penyakit</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-bug"></i>
                                </div>
                                <a href="<?= base_url('admin/penyakit'); ?>" class="small-box-footer">
                                    Lihat Detail <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?= $count_gejala ?></h3>

                                    <p>Total Gejala</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-eye-dropper"></i>
                                </div>
                                <a href="<?= base_url('admin/gejala'); ?>" class="small-box-footer">
                                    Lihat Detail <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>

                    <div class="col-md-112 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid" src="assets/landing/img/hero-bg.jpg" alt="Card image cap" style="height: 35rem" />
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</div>