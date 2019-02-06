<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengajuan
        <small>KKO</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pengajuan</a></li>
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
              <h3 class="box-title">Halaman Pengajuan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php  
                            header('Refresh: 60;');
                            ?>
                        <form class="form-horizontal login-form" action="<?php echo base_url().'dana/do_dana'; ?>" role="form" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Nama UPT:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="hasil5" name="upt" value="<?php echo $nama ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Kode UPT:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="hasil6" name="id" value="<?php echo $id ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Nomor Surat:</label>
                            <div class="col-sm-6">          
                                <select class="form-control" id="harga3">
                                        <option>klik untuk memilih</option>
                                            <?php for ($i=0; $i < count($dana) ; $i++) { ?>
                                                <option 
                                                    value="<?php echo $dana[$i]['id'] ?>" 
                                                    data-harga3="<?php echo $dana[$i]['nama'] ?>">
                                                    <?php echo $dana[$i]['nama'] ?>
                                                </option>
                                            <?php  } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Kode:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="hasil3" name="nama" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Perihal:</label>
                            <div class="col-sm-6">
                                <select id="kod" class="form-control" name="isi">
                                    <option>klik untuk memilih</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Jumlah:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="hasil5" name="jumlah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Keterangan:</label>
                            <div class="col-sm-6">
                                <textarea type="text" class="form-control" id="hasil4" name="keterangan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Tanggal:</label>
                            <div class="col-sm-6">
                                <input type="text" name="tanggal" class="form-password form-control" id="form-password" value="<?php 
                                        date_default_timezone_set('Asia/Jakarta');
                                        $jam=date("Y-m-d"); 
                                        echo $jam;
                                        ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Jam:</label>
                            <div class="col-sm-6">
                                <input type="text" name="jam" class="form-password form-control" id="form-password" value="<?php 
                                        date_default_timezone_set('Asia/Jakarta');
                                        $jam=date("H:i:s"); 
                                        echo $jam;
                                        ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="col-sm-9" align="right">
                                    <button type="submit" class="btn btn-primary"><b>Submit</b></button>
                                </div>
                            </div>
                            <div class="form-group">
                                
                            </div>
                        </form>
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
 <script type="<?php echo base_url('libraries/jquery-3.3.1.min.js')?>"></script>
  </div>
  <!-- /.content-wrapper -->
   <!--Message Box Logout-->
  <?php $this->load->view('layout/v_logout');?>
  <!--/Message Box Logout-->

  <script>
    
    $(function(){
        $.ajaxSetup({
            type : 'POST',
            url :'<?php echo base_url("Dashboard/getdata")?>',
            cache : false
        });

    $("#harga3").change(function(){
        var value = $(this).val();
        if (value>0){
            $.ajax({
                data:{modul:"tb_kode", id:value},
                success: function(respon){
                    $("#kod").html(respon);
                }
            });
        } 

    });

    });
    
</script>