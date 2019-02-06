<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit
        <small>User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Akun</a></li>
        <li class="active">User</li>a
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">         
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Halaman Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
                        <?php
                        foreach($edit_user->result() as $user){
                    ?>
                        <form action="<?=base_url('data_user/edit_datauser') ?>" method="post" class="form-horizontal login-form" role="form">
                        <div class="form-group">
                            <label for="idk" class="control-label col-sm-3">ID:</label>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="id" name="id" 
                            value="<?php echo $user->id; ?>" readonly>
                            </div>
                        </div>
  
                    <div class="form-group">
                            <label for="nml" class="control-label col-sm-3">Username:</label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control" id="username" name="username" 
                            value="<?php echo $user->username;?>" required>
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="password" class="control-label col-sm-3">Password:</label>
                            <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" name="password" 
                            value="<?php echo $user->password;?>" required>
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="level" class="control-label col-sm-3">Level:</label>
                            <div class="col-sm-6">
                            <select name="level" class="form-control" value="<?php echo $user->level;?>" required>
                                <option value="user">user</option>
                            </select>
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="blokir" class="control-label col-sm-3">Blokir:</label>
                            <div class="col-sm-6">
                            <select name="blokir" class="form-control" value="<?php echo $user->blokir;?>" required>
                                <option value="N">Tidak</option>
                                <option value="Y">Ya</option>
                            </select>
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="ktp" class="control-label col-sm-3">Nama Lengkap:</label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" 
                            value="<?php echo $user->nama_lengkap;?>" required>
                            </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-9" align="right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                    <div class="form-group">
                      
                    </div>

                  </form>
                <?php } ?>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <!--Message Box Logout-->
  <?php $this->load->view('layout/v_logout');?>
  <!--/Message Box Logout-->