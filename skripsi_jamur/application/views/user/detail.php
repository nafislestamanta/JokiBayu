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
    <?php foreach ($hp as $p ) { ?>
        <!-- Top Breadcrumb Area -->
               <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url('assets_user/img/bg-img/jst.jpg');?>">
                <h2>Detail  <?php echo $p->nama_hp ?></h2>
        </div>

         <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail <?php echo $p->nama_hp ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Breadcrumb Area End ##### -->
   
	 <section class="testimonial-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-thumb">
                                        <img src="<?php echo base_url('gambar/'.$p->gambar) ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-content">
                                        <!-- Section Heading -->
                                        <div class="section-heading">
                                            <h2><?php echo $p->nama_hp ?></h2>
                                            
                                        </div>
                                        <p><?php echo $p->keterangan ?></p>
                                        <div class="testimonial-author-info">
                                        </div>

                                    </div>
                                </div>
                                      <!-- <div class="col-12">
                        <h5>Cara Pengobatan</h5>
                        <p><?php echo $p->pengobatan ?></p>
                    </div>
                          
                                   <div class="col-12">
                        <h5>Cara Pencegahan</h5>
                        <p><?php echo $p->pencegahan ?></p>
                    </div>
                        -->
                      
                      
                 </div>   
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonial Area End ##### -->
<?php } ?>
</body>
<?php $this->load->view('partials/script'); ?>
</html>