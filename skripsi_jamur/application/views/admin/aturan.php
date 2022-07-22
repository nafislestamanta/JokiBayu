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
        Aturan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Aturan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-6">

<div class="box">
  <div class="box-header">
    <div class="col-md-2" style="padding: 0;">      
    </div>

      <div class="box-body">
    <table id="example1" class="table table-bordered table-hover">

      <thead>
        <tr>
          <th>No</th>
          <th>Aturan</th>
        </tr>
         </thead>
         
      <?php
      
      $no = 1;
      $query_penyakit = $this->db->get('hp')->result();
      foreach ($query_penyakit as $p ) {
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td>
           <?php
             $query_aturan = $this->db
                          ->join('gejala', 'gejala.id_gejala=pengetahuan.id_gejala')
                          ->where('id_hp', $p->id_hp)
                          ->order_by('pengetahuan.id_gejala', 'ASC')
                          ->get('pengetahuan')
                          ->result();
              $i= 1;
             foreach ($query_aturan as $row) {
               if($i == 1){
                 
                echo " <b>IF</b> ".$row->gejala; 
                echo "<br>";
                
              }else{
                
                echo " <b>AND</b> ".$row->gejala;
                echo "<br>";
                
               } $i++; 
             } ?>
           <b>THEN <span class="text-info"><?php echo strtoupper($p->nama_hp) # strtoupper->biar tulisan nya huruf kapital ?></span></b>
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
    


