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
            <h2>Hama</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hama</li>
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
                <form action="#" method="post" >
                    <div class="section-heading text-center">
                        <h2>Hama</h2>
                        <br>
                         <div class="col-md 2">
                             <div class="row">
   <?php foreach ($hp as $p ) { ?>
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                           <img src="<?php echo base_url('gambar/'.$p['gambar']) ?>"width="200">

                            <!-- Product Tag -->
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="<?php echo base_url('user/Detail/details/'.$p['id_hp']) ?>">
                                <p><?php echo $p['nama_hp'] ?></p>
                            </a>
                        </div>
                    </div>
                </div>

           <?php } ?>
                                  	
 </section>
	
</body>
<?php $this->load->view('partials/script'); ?>
</html>