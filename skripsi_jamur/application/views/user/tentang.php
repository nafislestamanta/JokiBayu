<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('partials/head'); ?>

</head>

<body>
    <?php $this->load->view('partials/header'); ?>
    <!-- ##### Breadcrumb Area Start ##### -->
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(../assets_user/img/bg-img/jst.jpg);">
            <h2>Tentang</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tentang</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    <!-- ##### About Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>APA ITU SISTEM PAKAR ?</h2>
                    </div>
                    <p style="text-align:justify;">Sistem pakar (expert system) adalah sistem yang berusaha mengadopsi pengetahuan manusia ke komputer, agar komputer dapat menyelesaikan masalah seperti yang biasa dilakukan oleh para ahli, dan sistem pakar yang baik dirancang agar dapat menyelesaikan suatu permasalahan tertentu dengan meniru kerja dari para ahli (Kusumadewi, 2003:109).</p><br>
                    <div class="section-heading">
                        <h2>APA TUJUAN SISTEM PAKAR INI ?</h2>
                    </div>
                    <p style="text-align:justify;">Sistem Pakar ini dibuat dengan tujuan untuk membantu khususnya para petani jamur tiram untuk mendiagnosa hama atau penyakit yang sedang menyerang dari gejala-gejala yang muncul atau terlihat pada jamur tiram yang sedang terserang disertai dengan cara pengobatan dan cara pencegahannya yang terhubung langsung dengan PT.JASENTRA Jember. </p>
                    <div class="alazea-progress-bar mb-50">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?php echo base_url('assets_user/img/core-img/p1.png') ?>" alt="">
                                    <h5>Diagnosa Cepat</h5>
                                    <p>Sistem pakar ini cepat dan efisien dalam menentukan hama atau penyakit yang sedang menyerang jamur tiram.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?php echo base_url('assets_user/img/core-img/p2.png') ?>" alt="">
                                    <h5>Digunakan Dimanapun</h5>
                                    <p>Sistem Pakar ini dapat digunakan dimanapun dengan perangkat laptop ataupun handphone.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?php echo base_url('assets_user/img/core-img/p3.png') ?>" alt="">
                                    <h5>Detail Hama Penyakit</h5>
                                    <p>Sistem ini memiliki 9 data hama penyakit serta gejalanya sampai dengan cara pengobatan dan pencegahan.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?php echo base_url('assets_user/img/core-img/p4.png') ?>" alt="">
                                    <h5>Terhubung Langsung Pakar</h5>
                                    <p>Sistem ini terhubung langsung dengan PT.JASENTRA Jember yaitu perusahaan di bidang budidaya jamur tiram.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->


</body>
<?php $this->load->view('partials/script'); ?>

</html>