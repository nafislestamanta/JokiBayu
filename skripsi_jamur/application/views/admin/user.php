    <?php $this->load->view('partials_admin/_head'); ?>
    <!-- meta -->
    <!-- header -->
    <?php $this->load->view('partials_admin/_header'); ?>
    <!-- nav -->
    <!-- sidebar -->
    <?php $this->load->view('partials_admin/_aside'); ?>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Content Header (Page header) -->
      <!-- /.modal -->



      <section class="content-header">
        <h1>
          User
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">user</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-xs-6">
            <div class="box">
              <div class="box-header">

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Role</th>
                      </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($user as $p) {
                    ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $p['nama'] ?></td>
                        <td><?php echo $p['alamat'] ?></td>
                        <td><?php echo $p['level'] ?></td>
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
    <?php $this->load->view('partials_admin/_aside2'); ?>
    <!-- headerContent -->
    <!-- mainContent -->

    <!-- footer -->


    <!-- js -->


    <?php $this->load->view('partials_admin/_script'); ?>