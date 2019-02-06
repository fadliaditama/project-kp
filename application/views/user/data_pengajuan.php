<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Pengajuan
        <small><?php echo $nama ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Pengajuan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Laporan pengajuan <?php echo $nama ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    
                </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>UPT</th>
                                    <th>NOMOR SURAT</th>
                                    <th>TANGGAL</th>
                                    <th>PERIHAL</th>
                                    <th>JUMLAH</th>
                                    <th>KETERANGAN</th>
                                    <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < count($upt); $i++) { 
                                    $no = $i+1; ?>
                                    <tr>
                                    <td><?php echo $no; ?></td>
                                    <td> <?php echo $upt[$i]['upt']?></td>
                                    <td> <?php echo $upt[$i]['nama']?></td>
                                    <td> <?php echo $upt[$i]['tanggal']?></td>
                                    <td> <?php echo $upt[$i]['isi']?></td>
                                    <td> <?php echo $upt[$i]['jumlah']?></td>
                                    <td> <?php echo $upt[$i]['keterangan']?></td>
                                    <td>
                                      <a href=""><button class="btn btn-primary btn-sm"> Cetak</button></a>
                                      |
                                      <span>Diterima</span>
                                    </td>
                                    </tr>
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