<div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cetak Laporan Pengajuan</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-9">
                    <form action="<?php echo base_url(). 'dana/laporan1'; ?>" method="post">
                <button class="btn btn-danger"><i class="fa fa-fw fa-file-pdf-o"></i>Format PDF</button>
              </form>
                  </div>
                  <div class="col-sm-3">
                    <form action="<?php echo base_url().'dana/laporan_excel1'; ?>" method="post">
                <button class="btn btn-success"><i class="fa fa-fw fa-file-excel-o"></i>Format Excel</button>
              </form>
                  </div>
                </div>
                
              
              </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
