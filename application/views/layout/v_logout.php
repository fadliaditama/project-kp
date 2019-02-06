<div class="modal modal-warning fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Keluar</h4>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin ingin keluar ?</p>
              </div>
              <div class="modal-footer">
                <form action="<?=base_url()?>dashboard/logout" method="post">
                <input type="submit" class="btn btn-default" data-dismiss="modal" value="Tidak" />
                  <button class="btn btn-default btn-danger mb-control-close">Keluar</button>
            </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>