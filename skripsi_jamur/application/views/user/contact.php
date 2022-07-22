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
            <h2>Contact</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
 <!-- ##### Contact Area Info Start ##### -->
    <div class="contact-area-info section-padding-0-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Contact Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="contact--thumbnail">
                        <img src="<?php echo base_url('assets_user/img/bg-img/jasentra.png')?>" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Hubungi Kami</h2>
                        <p>PT. JASENTRA JEMBER</p>
                    </div>
                    <!-- Contact Information -->
                    <div class="contact-information">
                        <p><span>Alamat:</span> Jl. Airlangga, Gudang Rejo, Rambipuji, Jember, Jawa Timur</p>
                        <p><span>Telepon:</span> 0813 3170 7027 (Pak Riezky)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Area Info End ##### -->	
</body>
<?php $this->load->view('partials/script'); ?>
</html>