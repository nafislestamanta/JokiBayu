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
            <h2>Daftar</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
  
 <section class="alazea-portfolio-area portfolio-page section-padding-0-100">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                    <!-- Section Heading -->
                <form action="<?= base_url('Auth/register') ?>" method="post" >
                    <div class="section-heading text">
                      <center>
                        <h2>Daftar</h2>
                        <p>Masukkan Data Diri Anda</p></center>
                        <br>
                         <input type="hidden" class="form-control" name="id_user" placeholder=" id_user" value="<?php echo sprintf( $id_user) ?>">
                         <div class="form-group">
                           <input type="text"
                             class="form-control" name="nama" id="" value="<?= set_value('nama') ?>" placeholder="Nama Lengkap">
                           <?= form_error('nama', '<span class="form-bar text-danger">',' !</span>') ?>
                         </div>
                         <div class="form-group">
                           <input type="text"
                             class="form-control" name="username" id="" value="<?= set_value('username') ?>" placeholder="Username">
                           <?= form_error('username', '<span class="form-bar text-danger">',' !</span>') ?>
                         </div>
                         <div class="form-group">
                           <input type="password" class="form-control"  name="password1" id="" placeholder="Password">
                           <?= form_error('password1', '<span class="form-bar text-danger">',' !</span>') ?>
                         </div>
                         <div class="form-group">
                           <input type="password" class="form-control" name="password2" id="" placeholder="Ulangi Password">
                           <?= form_error('password2', '<span class="form-bar text-danger">',' !</span>') ?>
                         </div>
                         <div class="form-group">
                           <input type="number" class="form-control" name="no_hp" id="" placeholder="Nomer Hp">
                           <?= form_error('no_hp', '<span class="form-bar text-danger">',' !</span>') ?>
                         </div>
                         <div class="form-group">
                           <textarea class="form-control" name="alamat" placeholder="Alamat..." rows="3"><?= set_value('alamat') ?></textarea>
                           <?= form_error('alamat', '<span class="form-bar text-danger">',' !</span>') ?>
                         </div>
                    </div>
                      <center><button type="submit" class="btn alazea-btn w-10">Daftar</button></center>
                    </div>  
                </form>             
 </section>
    
</body>
<?php $this->load->view('partials/script'); ?>
</html>