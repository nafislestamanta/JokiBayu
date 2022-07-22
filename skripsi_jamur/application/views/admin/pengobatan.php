    <?php $this->load->view('partials_admin/_head'); ?> 
     <!-- meta -->  
      <!-- header -->
    <?php $this->load->view('partials_admin/_header'); ?> <!-- nav -->      
      <!-- sidebar -->
    <?php $this->load->view('partials_admin/_aside'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <!-- Content Header (Page header) -->
 <?php foreach ($pengobatan as $p) {?>
  <div class="modal fade" id="modal-hapus<?php echo $p['id_pengobatan']?>" aria-lavelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
      <div class="form-msg"></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h3 class="modal-title" id="exampleModalLabel"> Apakah Anda Yakin Menghapus Data ? </h3>
         <br>
        <a class="form-control btn btn-danger glyphicon glyphicon-remove-sign" href="<?= base_url() ?>admin/pengobatan/hapus/<?=$p['id_pengobatan']?>">Hapus</a>
        </div>
      </div>    </div></div>
  
      <?php }?>

      <?php foreach ($pengobatan as $p) {?>
<div class="modal fade" id="modal-edit<?php echo $p['id_pengobatan']?>">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                   <form action="<?= base_url() ?>admin/pengobatan/edit" method="post">
              <h3 style="display:block; text-align:center;">Edit Data Pengobatan</h3>
 <form method="post" enctype="multipart/form-data" action="<?php echo base_url(). 'admin/pengobatan/edit'; ?>">
              <input id="id_pengobatan" name="id_pengobatan" value="<?php echo $p['id_pengobatan'] ?>" hidden> 
    <div class="form-group">
      <input type="text" id="nama_hp" class="form-control" name="nama_hp" aria-describedby="sizing-addon2" value="<?php echo $p['nama_hp'] ?>" disabled>
    </div>
   <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
                <h5>Pengobatan</h5>
                           <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            <textarea  id="pengobatan" name="pengobatan" class="form-control" type="textarea" value="<?php echo $p['pengobatan'] ?>" style="resize:none;width:410px;height:450px;"><?php echo $p['pengobatan'];?></textarea>
            </div>
          </div></div></div>

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
        Pengobatan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengobatan</li>
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
          <th>Nama Hama Penyakit</th>
          <th>Pengobatan</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
        </thead>
      <?php
      $no = 1;
      foreach ($pengobatan as $p ) {
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $p['nama_hp'] ?></td>
        <td><?php echo $p['pengobatan'] ?></td>
          <td style="text-align: center;"><button class="btn btn-warning update glyphicon glyphicon-repeat" data-toggle="modal" data-target="#modal-edit<?php echo $p['id_pengobatan']?>">Edit</button>
             <button class="btn btn-danger glyphicon glyphicon-remove-sign" data-toggle="modal" data-target="#modal-hapus<?php echo $p['id_pengobatan']?>" >Hapus   </button></td>
                      
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
         <div id="tempat-modal"><div class="modal fade in" id="update-kota" role="dialog" style="display: block;">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                  <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data pengobatan</h3>

  <form method="post" action="<?php echo base_url(). 'admin/pengobatan/tambah_aksi'; ?>">
    <input id="id_pengobatan" name="id_pengobatan" value="<?php echo $id_pengobatan ?>" hidden> 
     <div class="form-group">
      <label for="name">Pilih Hama Penyakit</label>
                <select required id="id_hp" name="id_hp" class="form-control select2" style="width: 100%;">
                  <option required>--Pilih Hama Penyakit--</option>
                 <?php foreach ($hp as $key) { 
                   echo"<option value='".$key['id_hp']."'>".$key['nama_hp']."</option>";
                  }
                   echo "</select>"
                  ?>
                 
    </div> 

        <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
                <h5>Pengobatan</h5>
                           <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            <textarea style="resize:none;width:450px;height:450px;" id="pengobatan" name="pengobatan" class="form-control" type="textarea"></textarea>
            </div>
          </div>

       
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>
</div>

