<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Pengajuan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laporan Pengajuan</a></li>
        <li class="active">Hasil Pencarian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hasil Pencarian Laporan Pengajuan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                    <div class="col-md-12" align="right">
                                <form action="<?php echo base_url().'dana/cari_data'; ?>" method="post">
                                    <label>Cari : </label>
                                    <input type="text" name="cari" id="from-datepicker"/>
                                    <button type="submit" class="btn-primary">Cari</button>
                                </form>
                            </div>
                </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">UPT</th>
                        <th style="text-align: center;">NOMOR SURAT</th>
                        <th style="text-align: center;">TANGGAL</th>
                        <th style="text-align: center;">PERIHAL</th>
                        <th style="text-align: center;">KETERANGAN</th>
                        <th style="text-align: center;">JUMLAH</th>
                    </tr>
                </thead>
               <tbody>
                                    <?php for ($i=0; $i < count($hasil_cari); $i++) { 
                                    $no = $i+1; ?>
                                    <tr>
                                    <td><?php echo $no; ?></td>
                                    <td> <?php echo $hasil_cari[$i]['upt']?></td>
                                    <td> <?php echo $hasil_cari[$i]['nama']?></td>
                                    <td> <?php echo date_format(date_create($hasil_cari[$i]['tanggal'])," d F Y") ?></td>
                                    <td> <?php echo $hasil_cari[$i]['isi']?></td>
                                    <td> <?php echo $hasil_cari[$i]['keterangan']?></td>
                                    <td> <?php echo $hasil_cari[$i]['jumlah']?></td>
                                    <td></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">Total</th>
                                        <th style="text-align: center;"><?php echo $sum; ?></th>
                                    </tr>
                                </tfoot>
              </table>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-success"><i class="fa fa-fw fa-print"></i>
                Cetak Laporan
              </button>
              <?php $this->load->view('layout/v_allcetak');?>
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
  <!--/Message Box Logout--><!-- Content Wrapper. Contains page content -->
  