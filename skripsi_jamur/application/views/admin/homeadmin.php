<?php $this->load->view('partials_admin/_head'); ?>

<!-- meta -->


<!-- header -->
<?php $this->load->view('partials_admin/_header'); ?>
<!-- nav -->

<!-- sidebar -->
<?php $this->load->view('partials_admin/_aside'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo $hp ?></h3>

            <p>Hama Penyakit</p>
          </div>
          <div class="icon">
            <i class="fa fa-bug"></i>
          </div>
          <a href="<?php echo site_url('admin/Hamapenyakit') ?>" class="small-box-footer">More info </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $gejala ?><sup style="font-size: 20px"></sup></h3>

            <p>Gejala</p>
          </div>
          <div class="icon">
            <i class="fa fa-tasks"></i>
          </div>
          <a href="<?php echo site_url('admin/Gejala') ?>" class="small-box-footer">More info </i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $pengobatan ?></h3>
            <p>Pengobatan </p>
          </div>
          <div class="icon">
            <i class="fa fa-medkit"></i>
          </div>
          <a href="<?php echo site_url('admin/Pengobatan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- <div class="col-lg-3 col-xs-6"> -->
      <!-- small box -->
      <!-- <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $pencegahan ?></h3>

              <p>Pencegahan</p>
            </div>
            <div class="icon">
              <i class="fa fa-plus-square"></i>
            </div>
            <a href="<?php echo site_url('admin/Pencegahan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->


  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo $user ?></h3>

            <p>User</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?php echo site_url('admin/User') ?>" class="small-box-footer">More info </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $pengetahuan ?><sup style="font-size: 20px"></sup></h3>

            <p>Rule</p>
          </div>
          <div class="icon">
            <i class="fa fa-book"></i>
          </div>
          <a href="<?php echo site_url('admin/Pengetahuan') ?>" class="small-box-footer">More info </i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- <div class="col-lg-3 col-xs-6"> -->
      <!-- small box -->
      <!-- <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $aturan ?></h3>

            <p>Aturan</p>
          </div>
          <div class="icon">
            <i class="fa fa-edit"></i>
          </div>
          <a href="<?php echo site_url('admin/Aturan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div> -->

      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?php echo $hasil ?></h3>

            <p>Hasil Diagnosa</p>
          </div>
          <div class="icon">
            <i class="fa fa-columns"></i>
          </div>
          <a href="<?php echo site_url('admin/Hasil') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          <!-- ./col -->
  </section>


</div>


<?php $this->load->view('partials_admin/_footer'); ?>

<!-- content -->
<?php $this->load->view('partials_admin/_aside2'); ?>
<!-- headerContent -->
<!-- mainContent -->


<!-- footer -->


<!-- js -->


<?php $this->load->view('partials_admin/_script'); ?>