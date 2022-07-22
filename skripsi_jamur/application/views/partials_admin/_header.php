<body class="skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>W</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b> SI-Wang</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <ul class="dropdown-menu">
                <li>
                  <!-- inner menu: contains the actual data -->
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <ul class="dropdown-menu">
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <!-- end task item -->
            </li>
            <!-- end task item -->
            <li>
              <!-- Task item -->
              <a href="#">
                <div class="progress xs">
                </div>
              </a>
            </li>
            <!-- end task item -->
            <li>
              <!-- Task item -->
              <a href="#">
                <h3>
                  Make beautiful transitions
                  <small class="pull-right">80%</small>
                </h3>
                <div class="progress xs">
                  <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">80% Complete</span>
                  </div>
                </div>
              </a>
            </li>
            <!-- end task item -->
          </ul>
          </li>
          <li class="footer">
            <a href="#">View all tasks</a>
          </li>
          </ul>
          </li>


          <!-- Menuju Halaman Diagnosa -->
          <li class="dropdown user user-menu">
            <a href="<?= base_url('user/Diagnosa') ?>">
              <i class="fa fa-spinner"></i>
              <span class="hidden-xs">Halaman Diagnosa</span>
            </a>
          </li>


          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets_user/img/core-img/onion.png') ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->session->userdata('username') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets_user/img/core-img/onion.png') ?>" class="img-circle" alt="User Image">

                <p>
                  <?= $this->session->userdata('nama') ?>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div style="text-align: center;">
                  <a href="<?= base_url('Auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>