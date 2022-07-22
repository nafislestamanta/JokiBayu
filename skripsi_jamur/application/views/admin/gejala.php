    <?php $this->load->view('partials_admin/_head'); ?> 
     <!-- meta -->  
      <!-- header -->
    <?php $this->load->view('partials_admin/_header'); ?> <!-- nav -->      
      <!-- sidebar -->
    <?php $this->load->view('partials_admin/_aside'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <!-- Content Header (Page header) -->
 <?php foreach ($gejala as $p) {?>
  <div class="modal fade" id="modal-hapus<?php echo $p['id_gejala']?>" aria-lavelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
      <div class="form-msg"></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h3 class="modal-title" id="exampleModalLabel"> Apakah Anda Yakin Menghapus Data ? </h3>
         <br>
        <a class="form-control btn btn-danger glyphicon glyphicon-remove-sign" href="<?= base_url() ?>admin/Gejala/hapus/<?=$p['id_gejala']?>">Hapus</a>
        </div>
      </div>    </div></div>
  
      <?php }?>

      <?php foreach ($gejala as $p) {?>
<div class="modal fade" id="modal-edit<?php echo $p['id_gejala']?>">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                   <form action="<?= base_url() ?>admin/Gejala/edit" method="post">
              <h3 style="display:block; text-align:center;">Edit Data Hama Penyakit</h3>
 <form method="post" enctype="multipart/form-data" action="<?php echo base_url(). 'admin/Gejala/edit'; ?>">
              <input id="id_gejala" name="id_gejala" value="<?php echo $p['id_gejala'] ?>" hidden> 
    <div class="form-group">
      <input type="text" id="gejala" class="form-control" name="gejala" aria-describedby="sizing-addon2" value="<?php echo $p['gejala'] ?>" >
    </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                
                <button type="submit" class="btn btn-primary" >Edit</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div></div></div>    <?php }?>
        <!-- /.modal -->



    <section class="content-header">
      <h1>
        Gejala
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gejala</li>
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
    <div class="col-md-2" style="padding: 0;">      
    </div>

      <div class="box-body">
    <table id="example1" class="table table-bordered table-hover">

      <thead>
        <tr>
          <th>No</th>
          <th>Gejala </th>
          <th style="text-align: center;">Aksi</th>
        </tr>
         </thead>
      <?php
      $no = 1;
      foreach ($gejala as $p ) {
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $p['gejala'] ?></td>
          <td style="text-align: center;"><button class="btn btn-warning update glyphicon glyphicon-repeat" data-toggle="modal" data-target="#modal-edit<?php echo $p['id_gejala']?>">Edit</button>
             <button class="btn btn-danger glyphicon glyphicon-remove-sign" data-toggle="modal" data-target="#modal-hapus<?php echo $p['id_gejala']?>" >Hapus   </button></td>
                      
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
    <?php $this->load->view('partials_admin/_aside2'); ?> <!-- headerContent --><!-- mainContent -->
    
      <!-- footer -->
      
     
    <!-- js -->
       

     <?php $this->load->view('partials_admin/_script'); ?>

<div class="modal fade" id="modal-tambah">
<div class="modal fade in"  role="dialog" style="display: block;">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                  <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Gejala</h3>

  <form method="post" action="<?php echo base_url(). 'admin/Gejala/tambah_aksi'; ?>">
    <input id="id_gejala" name="id_gejala" value="<?php echo $id_gejala ?>" hidden> 
    <div class="form-group">
      <input type="text" id="gejala" class="form-control" placeholder="Nama Gejala" name="gejala" aria-describedby="sizing-addon2" >
    </div>
   
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>

