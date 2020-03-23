
<!-- ============================================================== -->
<!-- Modal Upload Packing-->
<!-- ============================================================== -->
<div class="modal fade" id="packing-modal" tabindex="-1" role="dialog" aria-labelledby="Modalpacking" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Upload File Packing PO</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/upload_packing');?>
        <input type="hidden" name="id" id="id">
        <div class="row">
          <label for="packing">Nama File Packing PO Sekarang</label>
          <input class="form-control" id="packing" name="packing" readonly/>
        </div>
        <div class="row">
            <div class="custom-file mt-4">
              <input type="file" class="custom-file-input" id="packing" name="packing">
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
<!-- END Modal Upload Packing-->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modal Download Packing-->
<!-- ============================================================== -->
<div class="modal fade" id="packingd-modal" tabindex="-1" role="dialog" aria-labelledby="Modalpacking" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Download File Packing PO</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/download_packing');?>
        <input type="hidden" name="id" id="id">
        <div class="row">
              <label for="doc1">Nama File Packing PO</label>
              <input class="form-control" id="packing" name="packing" readonly/>
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
<!-- END Modal download Packing-->
<!-- ============================================================== -->


<!-- Script file upload Packing -->
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#packing-modal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#packing').attr("value",div.data('packing'));
        });
    });
</script>

<!-- Script file download Packing-->
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#packingd-modal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#packing').attr("value",div.data('packing'));
        });
    });
</script>
<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop(); $(this).next('.custom-file-label').addClass("selected").html(fileName);});
</script>
