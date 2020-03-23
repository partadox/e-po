
<!-- ============================================================== -->
<!-- Modal Tambah PO-->
<!-- ============================================================== -->
<div class="modal fade" id="po-modal" tabindex="-1" role="dialog" aria-labelledby="ModalPO" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Form Tambah Data Pre-Order Baru</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?= form_open_multipart('admin/add_po');?>
      <div class="modal-body">
        <style type="text/css">
        .form-group.required .control-label:after {
            color: #d00;
            content: "*";
            position: absolute;
            margin-left: 8px;
            top:7px;
          }
        </style>
        <input type="hidden" value="<?= $user['nama']; ?>" id="upload" name="upload"></input>
        <div class="row">
          <div class="col">
            <div class="form-group required">
              <div class="form-group"> <!-- Date input -->
                <label class="control-label" for="date">Tanggal</label>
                <input class="form-control" id="date" name="date" placeholder="DD/MM/YYY" type="text"/>
                <?= form_error('date', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group required">
              <label class="control-label" for="no_po">No. PO</label>
              <input class="form-control" id="no_po" name="no_po" placeholder="Nomor PO" type="text"/>
              <?= form_error('no_po', '<small class="text-danger">', '</small>'); ?>
            </div>
          </div>
          <div class="col">
            <div class="form-group required">
              <label class="control-label" for="nama_barang">Nama Barang</label>
              <input class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang" type="text"/>
              <?= form_error('nama_barang', '<small class="text-danger">', '</small>'); ?>
            </div>
          </div>
        </div>
          <div class="form-group">
            <label class="mt-4">Catatan</label>
            <textarea type="text" class="form-control" id="catatan" name="catatan" placeholder="Catatan"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Tambah Data</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- END Modal Tambah PO -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modal Edit PO-->
<!-- ============================================================== -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="Modaledit" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Form Edit Data Pre-Order Baru</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?= form_open_multipart('admin/edit');?>
      <div class="modal-body">
        <style type="text/css">
        .form-group.required .control-label:after {
            color: #d00;
            content: "*";
            position: absolute;
            margin-left: 8px;
            top:7px;
          }
        </style>
        <input type="hidden" name="id" id="id">
        <input type="hidden" value="<?= $user['nama']; ?>" id="upload" name="upload"></input>
        <div class="row">
          <div class="col">
            <div class="form-group required">
              <div class="form-group"> <!-- Date input -->
                <label class="control-label" for="date">Tanggal</label>
                <input class="form-control" id="date" name="date" placeholder="DD/MM/YYY" type="text"/>
                <?= form_error('date', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group required">
              <label class="control-label" for="no_po">No. PO</label>
              <input class="form-control" id="no_po" name="no_po" placeholder="Nomor PO" type="text"/>
              <?= form_error('no_po', '<small class="text-danger">', '</small>'); ?>
            </div>
          </div>
          <div class="col">
            <div class="form-group required">
              <label class="control-label" for="nama_barang">Nama Barang</label>
              <input class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang" type="text"/>
              <?= form_error('nama_barang', '<small class="text-danger">', '</small>'); ?>
            </div>
          </div>
        </div>
          <div class="form-group">
            <label class="mt-4">Catatan</label>
            <input type="text" class="form-control" id="catatan" name="catatan" placeholder="Catatan"></input>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Edit Data</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- END Modal Edit PO -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modal Hapus Data PO-->
<!-- ============================================================== -->
<div class="modal fade" id="hapus-modal" tabindex="-1" role="dialog" aria-labelledby="Modalgambar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Hapus Data PO?</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/hapus');?>
        <input type="hidden" name="id" id="id">
        <div class="row">
          <div class="card">
            <div class="card-body">
                <h3>Jika anda yakin ingin menghapus file data PO ini tekan "Hapus".</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>  Hapus</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- END Modal Hapus Data PO-->
<!-- ============================================================== -->

<!-- Script file edit -->
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-modal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#date').attr("value",div.data('date'));
            modal.find('#no_po').attr("value",div.data('no_po'));
            modal.find('#nama_barang').attr("value",div.data('nama_barang'));
            modal.find('#catatan').attr("value",div.data('catatan'));
        });
    });
</script>

<!-- Script file hapus-->
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#hapus-modal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
        });
    });
</script>

<!-- Script format Datepicker input -->
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
