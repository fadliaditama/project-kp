<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Akun
        <small>admin</small>
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
                <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Form Tambah admin</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <form action="<?=base_url('data_admin/tambah_admin') ?>" method="POST">
                    <div class="form-group">
                            <label for="username">ID:</label>
                            <input type="text" class="form-control" id="id" name="id" required>
                    </div>
                    <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                    </div>

                    <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                            <label for="level">Level:</label>
                            <input type="text" class="form-control" id="level" name="level" value="admin" readonly>
                    </div>

                    <div class="form-group">
                            <label for="blokir">Blokir:</label>
                            <select name="blokir" class="form-control" required>
                                <option value="N">Tidak</option>
                                <option value="Y">Ya</option>
                            </select>
                    </div>

                    <div class="form-group">
                            <label for="nml">Nama Lengkap:</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Level</th>
                                        <th>Nama Lengkap</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < count($admin); $i++) { 
                                    $no = $i+1; ?>
                                    <tr>
                                    <td><?php echo $no; ?></td>
                                    <td> <?php echo $admin[$i]['id']?></td>
                                    <td> <?php echo $admin[$i]['username']?></td>
                                    <td> <?php echo $admin[$i]['password']?></td>
                                    <td> <?php echo $admin[$i]['level']?></td>
                                    <td> <?php echo $admin[$i]['nama_lengkap']?></td>
                                    <td>
                                     <!-- Akan melakukan update atau delete sesuai dengan id yang diberikan ke controller -->
                                    <a href="<?= base_url() ?>Data_admin/edit_admin/<?= $admin[$i]['id']?>">
                                    <button class="btn btn-danger btn-xs" type="submit" data-toggle="modal" data-target="#editModal">Edit</button></a>
                                    |
                                    <a href="<?= base_url() ?>Data_admin/hapus_admin/<?= $admin[$i]['id']?>"><button class="btn btn-danger btn-xs" type="submit">Hapus</button></a>
                                     </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
              </table>
              <!--button-->
              <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Tambah Admin</button>
                        </div>
                        </div>
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