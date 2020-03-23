
<!-- ============================================================== -->
<!-- Modal Upload Gambar-->
<!-- ============================================================== -->
<div class="modal fade" id="gambar-modal" tabindex="-1" role="dialog" aria-labelledby="Modalgambar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Upload File Gambar PO</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/upload_gambar');?>
        <input type="hidden" name="id" id="id">
        <div class="row">
          <label for="gambar">Nama File Gambar PO Sekarang</label>
          <input class="form-control" id="gambar" name="gambar" readonly/>
        </div>
        <div class="row">
            <div class="custom-file mt-4">
              <input type="file" class="custom-file-input" id="gambar" name="gambar">
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
<!-- END Modal Upload Gambar-->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modal Download Gambar-->
<!-- ============================================================== -->
<div class="modal fade" id="gambard-modal" tabindex="-1" role="dialog" aria-labelledby="Modalgambar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="h2 font-weight-bold mb-0">Download File Gambar PO</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/download_gambar');?>
        <input type="hidden" name="id" id="id">
        <div class="row">
              <label for="doc1">Nama File Gambar PO</label>
              <input class="form-control" id="gambar" name="gambar" readonly/>
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
<!-- END Modal download Gambar-->
<!-- ============================================================== -->


<!-- Script file upload Gambar -->
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#gambar-modal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#gambar').attr("value",div.data('gambar'));
        });
    });
</script>

<!-- Script file download Gambar-->
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#gambard-modal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#gambar').attr("value",div.data('gambar'));
        });
    });
</script>

<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop(); $(this).next('.custom-file-label').addClass("selected").html(fileName);});
</script>
