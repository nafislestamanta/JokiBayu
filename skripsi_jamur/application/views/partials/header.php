<div class="preloader d-flex align-items-center justify-content-center">
    <div class="preloader-circle"></div>
    <div class="preloader-img">
        <img src="<?php echo base_url('assets_user/img/core-img/onion.png') ?>">
    </div>
</div>

<header class="header-area">

    <!-- ***** Navbar Area ***** -->
    <div class="breakpoint-off">

        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="<?php echo site_url('Home') ?>" class="nav-brand"><img src="<?php echo base_url('assets_user/img/core-img/onion3.png') ?>" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <?php if ($this->session->userdata('level') == "") { ?>
                                        <li><a href="<?php echo site_url('user/Login') ?>" class="btn alazea-btn mr">Login</a></li>
                                    <?php } else {
                                    } ?>
                                    <li><a href="<?php echo site_url('Home') ?>">Home</a></li>

                                    <?php if ($this->session->userdata('level') == "admin") { ?>
                                        <li><a href="<?php echo site_url('admin/Homeadmin') ?>">Halaman Admin</a></li>
                                    <?php } else {
                                    } ?>

                                    <li><a href="<?php echo site_url('user/Diagnosa') ?>">Diagnosa</a></li>
                                    <li><a>Info</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo site_url('user/Hama') ?>">Hama</a></li>
                                            <li><a href="<?php echo site_url('user/Penyakit') ?>">Penyakit</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo site_url('user/Tentang') ?>">Tentang</a></li>
                                    <!-- <li><a href="<?php echo site_url('user/Contact') ?>">Contact</a></li> -->
                                    <?php if ($this->session->userdata('nama') == "") {
                                    } else { ?>
                                        <li><a class="fa fa-user"> <?= $this->session->userdata('username') ?></a>
                                            <ul class="dropdown">
                                                <center>
                                                    <li><a class="fa fa-sign-out" href="<?php echo site_url('Auth/logout') ?>">Keluar</a></li>
                                            </ul>
                                            </center>
                                        </li>
                                    <?php } ?>
                                </ul>


                            </div>
                    </nav>


</header>
<!-- ##### Header Area End ##### -->