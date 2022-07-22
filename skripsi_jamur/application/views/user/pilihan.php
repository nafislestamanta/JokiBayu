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
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url('assets_user/img/bg-img/onion-bg1.jpg'); ?>">
            <h2>Pilihan Gejala </h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pilihan Gejala</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <section class="alazea-portfolio-area portfolio-page section-padding-0-100">
        <!-- Section Heading -->
        <!-- <form action="hasil" method="post" > -->
        <div class="section-heading text-center">
            <h2>Pilihan Gejala</h2>
            <p>Pilihan Gejala Anda</p>
            <div class="form-group">
                <div class="container">

                    <div class="row">
                        <div class="col-12">
                            <div class="product_details_tab clearfix">
                                <!-- Tabs -->
                                <!-- Tab Content -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="description">
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode</th>
                                                    <th>Gejala Terpilih</th>
                                                    <th>Nilai Gejala</th>
                                                </tr>
                                            </thead>
                                            <?php

                                            $no = 1;
                                            $null = 0;
                                            if (isset($_POST['simpan'])) {
                                                foreach ($_POST['gejala'] as $value) {
                                                    $gejala = $this->db->where('id_gejala', $value)->get('gejala')->row(); ?>
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><input name="gejala" value="<?php echo $value ?>" hidden><?php echo $value ?></td>
                                                        <td><input name="nama_gejala" value="<?php echo $gejala->gejala ?>" hidden><?php echo $gejala->gejala ?></td>
                                                        <td>
                                                            <form action="<?= base_url('user/Diagnosa/hasil') ?>" method="post">
                                                                <select class="form-control" name="kondisi[]" required>
                                                                    <option value="">Pilih</option>
                                                                    <option value="<?= $value . '_' . 1; ?>">Sangat Yakin</option>
                                                                    <option value="<?= $value . '_' . 2; ?>">Yakin</option>
                                                                    <option value="<?= $value . '_' . 3; ?>">Cukup Yakin</option>
                                                                    <option value="<?= $value . '_' . 4; ?>">Sedikit Yakin</option>
                                                                    <option value="<?= $value . '_' . 5; ?>">Tidak Tahu</option>
                                                                </select>
                                                        </td>
                                                    </tr>
                                            <?php }
                                            } ?>
                                        </table>
                                        <div class="col-12">
                                            <button type="submit" class="btn alazea-btn mt-15">Diagnosa</button>
                                        </div>
                                        </form>
                                    </div>
</body>
<?php $this->load->view('partials/script'); ?>

</html>