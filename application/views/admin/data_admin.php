<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Akun
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Akun</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar akun admin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Level</th>
                                        <th>Nama Lengkap</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < count($admin); $i++) { 
                                    $no = $i+1; ?>
                                    <tr>
                                    <td> <?php echo $no; ?></td>
                                    <td> <?php echo $admin[$i]['id']?></td>
                                    <td> <?php echo $admin[$i]['username']?></td>
                                    <td> <?php echo $admin[$i]['password']?></td>
                                    <td> <?php echo $admin[$i]['level']?></td>
                                    <td> <?php echo $admin[$i]['nama_lengkap']?></td>
                                    <?php } ?>
                                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <!--Message Box Logout-->
  <?php $this->load->view('layout/v_logout');?>
  <!--/Message Box Logout-->