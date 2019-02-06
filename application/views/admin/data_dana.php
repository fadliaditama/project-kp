<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Pengajuan
        <small>Hari ini</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laporan Pengajuan</a></li>
        <li class="active">Hari ini</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Laporan Hari Ini</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>UPT</th>
                        <th>NOMOR SURAT</th>
                        <th>TANGGAL</th>
                        <th>PERIHAL</th>
                        <th>KETERANGAN</th>
                        <th>JUMLAH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=0; $i < count($dana); $i++) { 
                    $no = $i+1; ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td> <?php echo $dana[$i]['upt']?></td>
                        <td> <?php echo $dana[$i]['nama']?></td>
                        <td> <?php echo date_format(date_create($dana[$i]['tanggal'])," d F Y") ?></td>
                        <td> <?php echo $dana[$i]['isi']?></td>
                        <td> <?php echo $dana[$i]['keterangan']?></td>
                        <td> <?php echo $dana[$i]['jumlah']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="6">TOTAL</th>
                        <th style="text-align: center;"><?php echo $sum; ?></th>
                        </tr>
                </tfoot>
              </table>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-warning"><i class="fa fa-fw fa-print"></i>
                Cetak Laporan
              </button>
              <?php $this->load->view('layout/v_cetak.php');?>
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