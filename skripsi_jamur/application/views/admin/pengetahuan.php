    <?php $this->load->view('partials_admin/_head'); ?>
    <!-- meta -->
    <!-- header -->
    <?php $this->load->view('partials_admin/_header'); ?>
    <!-- nav -->
    <!-- sidebar -->
    <?php $this->load->view('partials_admin/_aside'); ?>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Content Header (Page header) -->
      <?php foreach ($pengetahuan as $p) { ?>
        <div class="modal fade" id="modal-hapus<?php echo $p['id_pengetahuan'] ?>" aria-lavelledby="exampleModalLabel" aria-hidden="true">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
                <div class="form-msg"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title" id="exampleModalLabel"> Apakah Anda Yakin Menghapus Data ? </h3>
                <br>
                <a class="form-control btn btn-danger glyphicon glyphicon-remove-sign" href="<?= base_url() ?>admin/pengetahuan/hapus/<?= $p['id_pengetahuan'] ?>">Hapus</a>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>

      <?php foreach ($pengetahuan as $p) { ?>
        <div class="modal fade" id="modal-edit<?php echo $p['id_pengetahuan'] ?>">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <form action="<?= base_url() ?>admin/pengetahuan/edit" method="post">
                    <h3 style="display:block; text-align:center;">Edit Data Rule</h3>
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'admin/pengetahuan/edit'; ?>">
                      <input id="id_pengetahuan" name="id_pengetahuan" value="<?php echo $p['id_pengetahuan'] ?>" hidden>
                      <div class="form-group">
                        <input type="text" id="nama_hp" class="form-control" name="nama_hp" aria-describedby="sizing-addon2" value="<?php echo $p['nama_hp'] ?>" disabled>
                      </div>
                      <div class="form-group">
                        <input type="text" id="gejala" class="form-control" name="gejala" aria-describedby="sizing-addon2" value="<?php echo $p['gejala'] ?>" disabled>
                      </div>

                      <div class="form-group">
                        <label for="name">Pilih Nilai CF</label>
                        <select name="cf_pakar" id="cf_pakar" class="form-control select2" style="width: 100%;">
                          <option><?php echo $p['cf_pakar']; ?></option>
                          <option value="0">0</option>
                          <option value="0.2">0.2</option>
                          <option value="0.4">0.4</option>
                          <option value="0.6">0.6</option>
                          <option value="0.8">0.8</option>
                          <option value="1">1</option>
                        </select>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-primary">Edit</button>
                      </div>
                    </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          </div>
        </div> <?php } ?>
      <!-- /.modal -->



      <section class="content-header">
        <h1>
          Rule
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">pengetahuan</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-xs-6">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
            <div class="box">
              <div class="box-header">
                <?= $this->session->flashdata('pesan') ?>
                <div class="col-md-2" style="padding: 0;">
                </div>

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">

                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Hama Penyakit</th>
                        <th>Gejala</th>
                        <th>CF Pakar </th>
                        <th style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($pengetahuan as $p) {
                    ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $p['nama_hp'] ?></td>
                        <td><?php echo $p['gejala'] ?></td>
                        <td><?php echo $p['cf_pakar'] ?></td>
                        <td style="text-align: center;"><button class="btn btn-warning update glyphicon glyphicon-repeat" data-toggle="modal" data-target="#modal-edit<?php echo $p['id_pengetahuan'] ?>">Edit</button>
                          <button class="btn btn-danger glyphicon glyphicon-remove-sign" data-toggle="modal" data-target="#modal-hapus<?php echo $p['id_pengetahuan'] ?>">Hapus </button>
                        </td>

                        </td>
                      </tr>
                    <?php } ?>

                    <tbody id="data-hp">

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Main content -->
        <!-- /.content -->
    </div>

    <?php $this->load->view('partials_admin/_footer'); ?>

    <!-- content -->
    <?php $this->load->view('partials_admin/_aside2'); ?>
    <!-- headerContent -->
    <!-- mainContent -->

    <!-- footer -->


    <!-- js -->


    <?php $this->load->view('partials_admin/_script'); ?>

    <div class="modal fade" id="modal-tambah">
      <div id="tempat-modal">
        <div class="modal fade in" id="update-kota" role="dialog" style="display: block;">
          <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
              <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
                <div class="form-msg"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 style="display:block; text-align:center;">Tambah Data Rule</h3>

                <form method="post" action="<?php echo base_url() . 'admin/pengetahuan/tambah_aksi'; ?>">
                  <input id="id_pengetahuan" name="id_pengetahuan" value="<?php echo $id_pengetahuan ?>" hidden>
                  <div class="form-group">
                    <label for="name">Pilih Hama Penyakit</label>
                    <select required id="id_hp" name="id_hp" class="form-control select2" style="width: 100%;">
                      <option required>--Pilih Hama Penyakit--</option>
                      <?php foreach ($hp as $key) {
                        echo "<option value='" . $key['id_hp'] . "'>" . $key['nama_hp'] . "</option>";
                      }
                      echo "</select>"
                      ?>

                  </div>
                  <div class="form-group">
                    <label for="name">Pilih Gejala</label>
                    <select required id="id_gejala" name="id_gejala" class="form-control select2" style="width: 100%;">
                      <option required>--Pilih Gejala--</option>
                      <?php foreach ($gejala as $key) {
                        echo "<option value='" . $key['id_gejala'] . "'>" . $key['gejala'] . "</option>";
                      }
                      echo "</select>"
                      ?>

                  </div>

                  <div class="form-group">
                    <label for="name">Pilih Nilai CF</label>
                    <select name="cf_pakar" id="cf_pakar" class="form-control select2" style="width: 100%;">
                      <option required>--Pilih Nilai CF--</option>
                      <option value="0">0</option>
                      <option value="0.4">0.4</option>
                      <option value="0.6">0.6</option>
                      <option value="0.8">0.8</option>
                      <option value="1">1</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
                    </div>
                  </div>
              </div>