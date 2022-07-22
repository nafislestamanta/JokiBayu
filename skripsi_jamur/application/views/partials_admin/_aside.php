  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets_user/img/core-img/jasentra.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->userdata('nama') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="">
          <a href="<?php echo site_url('admin/Homeadmin') ?>" class="nav-link">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class=" ">
          <a href="<?php echo site_url('admin/Hamapenyakit') ?>" class="nav-link">
            <i class="fa fa-bug"></i> <span>Hama Penyakit</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class=" ">
          <a href="<?php echo site_url('admin/Gejala') ?>" class="nav-link">
            <i class="fa fa-tasks"></i> <span>Gejala</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class=" ">
          <a href="<?php echo site_url('admin/Pengobatan') ?>" class="nav-link">
            <i class="fa fa-medkit"></i> <span>Pengobatan</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <!-- <li class=" ">
          <a href="<?php echo site_url('admin/Pencegahan') ?>" class="nav-link" >
            <i class="fa fa-plus-square"></i> <span>Pencegahan</span>
           <span class="pull-right-container">
            </span> 
           </a>
         </li> -->

        <li class=" ">
          <a href="<?php echo site_url('admin/User') ?>" class="nav-link">
            <i class="ion ion-person-add"></i> <span>User</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class=" ">
          <a href="<?php echo site_url('admin/Pengetahuan') ?>" class="nav-link">
            <i class="fa fa-book"></i> <span>Rule</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <!-- <li class=" ">
          <a href="<?php echo site_url('admin/Aturan') ?>" class="nav-link">
            <i class="fa fa-edit"></i> <span>Aturan</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li> -->

        <li class=" ">
          <a href="<?php echo site_url('admin/Hasil') ?>" class="nav-link">
            <i class="fa fa-columns"></i> <span>Hasil Diagnosa</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->