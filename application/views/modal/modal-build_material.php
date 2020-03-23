
<!-- ============================================================== -->
<!-- Modal Upload Build Material-->
<!-- ============================================================== -->
<div class="modal fade" id="build_material-modal" tabindex="-1" role="dialog" aria-labelledby="Modalbuildmaterial" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Upload File Build Material PO</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/upload_build_material');?>
        <input type="hidden" name="id" id="id">
        <div class="row">
          <label for="build_material">Nama File Build Material PO Sekarang</label>
          <input class="form-control" id="build_material" name="build_material" readonly/>
        </div>
        <div class="row">
            <div class="custom-file mt-4">
              <input type="file" class="custom-file-input" id="build_material" name="build_material">
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
<!-- END Modal Build Material-->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modal Download Build Material-->
<!-- ============================================================== -->
<div class="modal fade" id="build_materiald-modal" tabindex="-1" role="dialog" aria-labelledby="Modalbuildmaterial" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Download File Build Material PO</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/download_build_material');?>
        <input type="hidden" name="id" id="id">
        <div class="row">
              <label for="doc1">Nama File Build Material PO</label>
              <input class="form-control" id="build_material" name="build_material" readonly/>
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
<!-- END Modal download Build Material-->
<!-- ============================================================== -->


<!-- Script file upload Build Material -->
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#build_material-modal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#build_material').attr("value",div.data('build_material'));
        });
    });
</script>

<!-- Script file download build_material-->
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#build_materiald-modal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#build_material').attr("value",div.data('build_material'));
        });
    });
</script>
<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop(); $(this).next('.custom-file-label').addClass("selected").html(fileName);});
</script>
