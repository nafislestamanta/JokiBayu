<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('partials/head'); ?>
    <style>
        @media print {
            .noprint {
                display: none;
            }
        }
    </style>

</head>

<body>
    <?php $this->load->view('partials/header'); ?>
    <!-- ##### Breadcrumb Area Start ##### -->
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url('assets_user/img/bg-img/onion-bg1.jpg'); ?>">
            <h2><?= $title; ?> </h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <section class="alazea-portfolio-area portfolio-page section-padding-0-100">
        <!-- Section Heading -->
        <form action="hasil" method="post">
            <div class="section-heading text-center">
                <h2><?= $title; ?></h2>
                <p></p>
                <div class="form-group">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <table border="0">
                                    <tr>
                                        <td width="100" class="text-left">Nama</td>
                                        <td width="30">:</td>
                                        <td width="300" class="text-left"><?= $this->session->userdata('nama') ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" class="text-left">Tanggal</td>
                                        <td width="30">:</td>
                                        <td width="300" name="tanggal" value="<?= date('d-m-Y') ?>" class="text-left"><?= date('d-m-Y') ?></td>
                                    </tr>
                                </table>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <table class="table table-bordere mb-" border="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Kode</th>
                                            <th class="text-center">Gejala Terpilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $ig = 0;
                                        foreach ($gejala as $key) {
                                            $query = $this->db->where('id_gejala', $key)->get('gejala')->row();
                                        ?>
                                            <tr>
                                                <td><?= $key ?></td>
                                                <td><?= $query->gejala; ?></td>
                                            </tr>
                                        <?php $ig++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordere">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Kondisi Terpilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($kondisi as $key => $value) {
                                            $query = $this->db->query("SELECT * FROM kondisi where id_kondisi = $value");
                                            $row = $query->result_array();
                                            foreach ($row as $k => $v) {
                                                echo ' <tr>
                                                        <td>' . $v['nama_kondisi'] . '</td>
                                                    </tr>';
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="bg-success text-white col-md-8" style="border-radius: 15px;">
                                    <!-- <h3 class="text-info"> -->
                                    <?php

                                    $query = $this->db->where('id_hp', $penyakit_terpilih)->get('hp');
                                    foreach ($query->result() as $p) { ?>
                                        <br><br>
                                        <h4 class="judul" style="color: aliceblue;"> <strong>Penyakit / Hama :</strong><br> <?= $p->nama_hp; ?></h4>

                                        <br>
                                        <h4><span class="step" style="color: aliceblue;"><strong>Nilai CF :</strong> <?= $hasil ?><br> ( <?= $persentasi ?>% )</span></h4>

                                        <br>
                                        </h3>
                                </div>
                                <div class="col-md-4">
                                    <!-- <div class="card"> -->
                                    <img src="<?= base_url('gambar/' . $p->gambar) ?>" width="250" class="rounded" alt="..." />
                                    <!-- </div> -->
                                </div>

                                <div class="container" style="padding-top: 20px;">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#keterangan<?= $p->id_hp ?>">
                                                Keterangan
                                            </button>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#pencegahan<?= $p->id_hp ?>">
                                                Pencegahan
                                            </button>
                                            <button type="button" class="btn btn-warning   " data-toggle="modal" data-target="#pengobatan<?= $p->id_hp ?>">
                                                Pengobatan
                                            </button>
                                        </div>
                                        <div class="col-sm-4">

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordere mt-5">
                                            <thead>
                                                <tr>
                                                    <th width="130" class="text-center">Kode</th>
                                                    <th class="text-center">Kemungkinan Lain</th>
                                                    <th class="text-center">Nilai CF</th>
                                                    <th class="text-center">Persentase</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // print_r($strategi_lain);
                                                $num = 1;
                                                foreach ($penyakit_lain as $key => $value) :
                                                    $kemungkinan = $this->db->where('id_hp', $key)->get('hp')->row();
                                                    if ($num == 1) {
                                                    } else {
                                                ?>

                                                        <tr>
                                                            <td><?= $kemungkinan->id_hp; ?></td>
                                                            <td class="text-left"><?= $kemungkinan->nama_hp; ?></td>
                                                            <td class="text-center"><?= $value; ?></td>
                                                            <td class="text-center"><?= round($value * 100); ?>%</td>
                                                        </tr>

                                                <?php }
                                                    $num++;
                                                endforeach; ?>

                                            </tbody>
                                        </table>
                                        <a href="<?php echo site_url('user/Diagnosa') ?>" type="button" class="btn btn-danger">
                                            Diagnosa Lagi
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>

            <?php foreach ($query->result() as $row) {
                $pencegahan = $this->db->where('id_hp', $row->id_hp)->get('pencegahan')->row();
            ?>
                <!-- Modal -->
                <div class="modal fade" id="keterangan<?= $row->id_hp ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="detail">Keterangan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><?= $row->keterangan; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="pencegahan<?= $row->id_hp ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="detail">Pencegahan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <p><?= $pencegahan->pencegahan; ?></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php foreach ($query->result() as $row) {
                $pengobatan = $this->db->where('id_hp', $row->id_hp)->get('pengobatan')->row();
            ?>
                <!-- Modal -->
                <div class="modal fade" id="pengobatan<?= $row->id_hp ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="detail">Pengobatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <p><?= $pengobatan->pengobatan; ?></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


</body>
<?php $this->load->view('partials/script'); ?>

</html>