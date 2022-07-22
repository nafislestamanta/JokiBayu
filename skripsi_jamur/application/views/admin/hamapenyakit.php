    <?php $this->load->view('partials_admin/_head'); ?> 
     <!-- meta -->  
      <!-- header -->
    <?php $this->load->view('partials_admin/_header'); ?> <!-- nav -->      
      <!-- sidebar -->
    <?php $this->load->view('partials_admin/_aside'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hama Penyakit
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Hama Penyakit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-6">
<?php foreach ($hp as $p) {?>
<div  class="modal fade" id="modal-edit<?php echo $p['id_hp']?>">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                   
              <h3 style="display:block; text-align:center;">Edit Data Hama Penyakit</h3>
 <form method="post" enctype="multipart/form-data" action="<?php echo base_url(). 'admin/Hamapenyakit/edit'; ?>">
    <input id="id_hp" name="id_hp" value="<?php echo $p['id_hp'] ?>" hidden> 
    <div class="form-group">
      <input type="text" id="nama_hp" class="form-control" name="nama_hp" aria-describedby="sizing-addon2" value="<?php echo $p['nama_hp'] ?>" >
    </div>
     <div class="form-group">
                <select id="jenis" name="jenis" class="form-control select2" style="width: 100%;">
                 <option><?php echo $p['jenis'] ?></option>
                  <option>Hama</option>
                  <option>Penyakit</option>
                  </select>
    </div> 
    <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
                <h5>Keterangan</h5>
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
            <textarea  id="keterangan" name="keterangan" class="form-control" type="textarea" value="<?php echo $p['keterangan'] ?>" style="resize:none;width:410px;height:450px;"><?php echo $p['keterangan'];?></textarea>
            </div>
          </div></div></div>

    <div class="form-group">
       <input class="form-control-file" type="file" name="gambar" id="gambar">
      <input type="hidden" id="gambar_old" class="form-control" name="gambar_old" aria-describedby="sizing-addon2" value="<?php echo $p['gambar'] ?>" > 
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



<?php foreach ($hp as $p) {?>
  <div class="modal fade" id="modal-hapus<?php echo $p['id_hp']?>" aria-lavelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
      <div class="form-msg"></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h3 class="modal-title" id="exampleModalLabel"> Apakah Anda Yakin Menghapus Data ? </h3>
         <br>
        <a class="form-control btn btn-danger glyphicon glyphicon-remove-sign" href="<?= base_url() ?>admin/Hamapenyakit/hapus/<?=$p['id_hp']?>">Hapus</a>
        </div>
      </div>    </div></div>
  
      <?php }?>

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
          <th>Nama </th>
          <th>Jenis</th>
          <th>Keterangan</th>
          <th>Gambar</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
         </thead>
      <?php
      $no = 1;
      foreach ($hp as $p ) {
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $p['nama_hp'] ?></td>
        <td><?php echo $p['jenis'] ?></td>
        <td><?php echo $p['keterangan'] ?></td>
        <td class="text-center">
        <img src="<?php echo base_url('gambar/'.$p['gambar']) ?>" width="64" />
                      </td>
          <td class="text-center" style="min-width:230px;">
          <button class="btn btn-warning update glyphicon glyphicon-repeat" data-toggle="modal" data-target="#modal-edit<?php echo $p['id_hp']?>">Edit</button>
             <button class="btn btn-danger glyphicon glyphicon-remove-sign" data-toggle="modal" data-target="#modal-hapus<?php echo $p['id_hp']?>" >Hapus   </button></td>
                      
          </td>
          <?php } ?>
      </tr>
     
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
  <h3 style="display:block; text-align:center;">Tambah Data Hama Penyakit</h3>

  <form method="post" enctype="multipart/form-data" action="<?php echo base_url(). 'admin/Hamapenyakit/tambah_aksi'; ?>">
    <input id="id_hp" name="id_hp" value="<?php echo $id_hp ?>" hidden> 
    <div class="form-group">
      <input type="text" id="nama_hp" class="form-control" placeholder="Nama Hama Penyakit" name="nama_hp" aria-describedby="sizing-addon2" >
    </div>
     <div class="form-group">
                <select id="jenis" name="jenis" class="form-control select2" style="width: 100%;">
                  <option required>--Pilih Jenis--</option>
                  <option>Hama</option>
                  <option>Penyakit</option>
                  </select>
    </div> 
    <div class="row">
      <div class="col-md-12">
          <div class="box box-info">
            <h5>Pilih Gambar</h5>
          <div class="box-header">
      <input  class="form-control-file" type="file" name="gambar" id="gambar">                
    
  </div>
</div>
</div>
</div>
   
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
                <h5>Keterangan</h5>
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
            <textarea style="resize:none;width:450px;height:450px;" id="keterangan" name="keterangan" class="form-control" type="textarea"></textarea>
            </div>
          </div>
          <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>

</div>

