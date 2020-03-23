
<!-- ============================================================== -->
<!-- Modal Upload dok1-->
<!-- ============================================================== -->
<div class="modal fade" id="dok1-modal" tabindex="-1" role="dialog" aria-labelledby="Modaldok1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Upload File Dokumen 1 PO</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/upload_doc1');?>
        <input type="hidden" name="id" id="id">
        <div class="row">
          <label for="doc1">Nama File Dokumen 1 PO Sekarang</label>
          <input class="form-control" id="doc1" name="doc1" readonly/>
        </div>
        <div class="row">
            <div class="custom-file mt-4">
              <input type="file" class="custom-file-input" id="dok1" name="dok1">
              <label class="custom-file-label" for="customFile">Pilih File...</label>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="ni ni-cloud-upload-96"></i>  Upload</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- END Modal dok1-->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modal Download dok1-->
<!-- ============================================================== -->
<div class="modal fade" id="dok1d-modal" tabindex="-1" role="dialog" aria-labelledby="Modaldok1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Download File Dokumen 1 PO</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/download_doc1');?>
        <input type="hidden" name="id" id="id">
        <div class="row">
              <label for="doc1">Nama File Dokumen 1 PO</label>
              <input class="form-control" id="doc1" name="doc1" readonly/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success"><i class="ni ni-cloud-download-95"></i>  Download</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- END Modal download dok1-->
<!-- ============================================================== -->

<!-- Script file upload dok1 -->
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#dok1-modal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#doc1').attr("value",div.data('doc1'));
        });
    });
</script>

<!-- Script file download dok1-->
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#dok1d-modal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#doc1').attr("value",div.data('doc1'));
        });
    });
</script>
<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop(); $(this).next('.custom-file-label').addClass("selected").html(fileName);});
</script>
