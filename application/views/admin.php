<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Master e-PO BJWI
  </title>
  <!-- Favicon -->
  <link href="<?= base_url('assets'); ?>/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?= base_url('assets'); ?>/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?= base_url('assets'); ?>/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

  <!-- CSS Files -->
  <link href="<?= base_url('assets'); ?>/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="<?= base_url('assets'); ?>/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>


      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="<?= base_url('assets'); ?>/img/brand/blue.png">
              </a>

            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->

        <!-- Navigation -->
        <hr class="my-3">
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="./index.html">
              <i class="ni ni-tv-2 text-primary"></i> Data Master
            </a>
          </li>

        </ul>
        <!-- Divider -->
        <hr class="my-3">


        <ul class="navbar-nav">
          <li class="nav-item active active-pro">
            <a class="nav-link">
              <i class="ni ni-planet text-dark"></i>IT BJWI 2020
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container" >
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Data Master</a>

        <!-- User -->
        <ul class="navbar-nav" style="margin-left:170% !important;">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?= base_url('assets'); ?>/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?= $user['nama']; ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <!-- <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a> -->

              <div class="dropdown-divider"></div>
              <a href="<?= base_url('Login/logout'); ?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <!-- <div class="row">
            <div class="col">
              <div class="card card-stats mb-4 mb-xl-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Pesan</h5>
                      <span class="h2 font-weight-bold mb-0">-</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-blue text-white rounded-circle shadow">
                        <i class="fas fa-comment-dots"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">Coming Soon Features</span>
                  </p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <div class="container-fluid mt--7">
      <div class="card shadow mb-4">
        <div class="col-lg-12">
            <button class="btn btn-success mt-3" type="button" id="add_button" data-target="#po-modal" data-toggle="modal"><i class="far fas fa-plus"></i> Tambah Data PO Baru</button>
        </div>
        <?php if ($pesan = $this->session->flashdata('berhasil_tambah')): ?>
          <div class="form-group mt-3">
            <div class="col-lg-12">
              <div class="alert alert-dismissible alert-primary">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $pesan; ?>
              </div>
            </div>
          </div>
        <?php endif ?>
            <div class="card-body">
              <div class="table-responsive">
                <style type="text/css">
                  .tg  {border-collapse:collapse;border-spacing:0;}
                  .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                  .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                  .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
                </style>
                <table class="table table-hover tg" id="dataTable" cellspacing="0">
                  <thead>
                    <tr class="headContainer">
                      <th class="tg-9wq8"  rowspan="2">#</th>
                      <th class="tg-9wq8"  rowspan="2">No. PO</th>
                      <th class="tg-9wq8"  rowspan="2">Nama Barang</th>
                      <th class="tg-9wq8"  colspan="2">Upload</th>
                      <th class="tg-9wq8"  rowspan="2">Status</th>
                      <th class="tg-9wq8"  colspan="2">Dok. PO</th>
                      <th class="tg-9wq8"  rowspan="2">Gambar</th>
                      <th class="tg-9wq8"  rowspan="2">Build Material</th>
                      <th class="tg-9wq8"  rowspan="2">Packing</th>
                      <th class="tg-9wq8" rowspan="2">Catatan</th>
                      <th class="tg-9wq8" rowspan="2">Aksi</th>
                    </tr>
                    <tr>
                       <td class="tg-9wq8">Nama</td>
                       <td class="tg-9wq8">Tanggal</td>
                       <td class="tg-9wq8">1</td>
                       <td class="tg-9wq8">2</td>
                     </tr>
                  </thead>
                  <tbody id="tableContent">
                    <?php $i = 1; ?>
                    <?php foreach ($allpo as $log) : ?>
                      <tr class="tableRow">
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $log['no_po']; ?> </td>
                        <td><?= $log['nama_barang']; ?> </td>
                        <td><?= $log['upload']; ?> </td>
                        <td><?= $log['tgl_upload']; ?> </td>
                        <td><?php if ($log['status'] == "Proses") {
    echo "<h2 class='badge badge-pill badge-danger'>Proses</h2>";
} else {
    echo "<h2 class='badge badge-pill badge-success'>Selesai</h2>";
}; ?> </td>
                        <td><a href="javascript:;"
                            data-id="<?= $log['id'] ?>"
                            data-doc1="<?= $log['doc1'] ?>"
                            data-target="#dok1-modal"
                            data-toggle="modal"
                            class="btn btn-primary btn-sm">Upload <i class="ni ni-cloud-upload-96"></i></a><br>
                            <a href="javascript:;"
                                data-id="<?= $log['id'] ?>"
                                data-doc1="<?= $log['doc1'] ?>"
                                data-target="#dok1d-modal"
                                data-toggle="modal"
                                class="btn btn-success btn-sm mt-2">Download <i class="ni ni-cloud-download-95"></i></a></td>
                                <td><a href="javascript:;"
                                    data-id="<?= $log['id'] ?>"
                                    data-doc2="<?= $log['doc2'] ?>"
                                    data-target="#dok2-modal"
                                    data-toggle="modal"
                                    class="btn btn-primary btn-sm">Upload <i class="ni ni-cloud-upload-96"></i></a><br>
                                    <a href="javascript:;"
                                        data-id="<?= $log['id'] ?>"
                                        data-doc2="<?= $log['doc2'] ?>"
                                        data-target="#dok2d-modal"
                                        data-toggle="modal"
                                        class="btn btn-success btn-sm mt-2">Download <i class="ni ni-cloud-download-95"></i></a></td>
                                        <td><a href="javascript:;"
                                            data-id="<?= $log['id'] ?>"
                                            data-gambar="<?= $log['gambar'] ?>"
                                            data-target="#gambar-modal"
                                            data-toggle="modal"
                                            class="btn btn-primary btn-sm">Upload <i class="ni ni-cloud-upload-96"></i></a><br>
                                            <a href="javascript:;"
                                                data-id="<?= $log['id'] ?>"
                                                data-gambar="<?= $log['gambar'] ?>"
                                                data-target="#gambard-modal"
                                                data-toggle="modal"
                                                class="btn btn-success btn-sm mt-2">Download <i class="ni ni-cloud-download-95"></i></a></td>
                                                <td><a href="javascript:;"
                                                    data-id="<?= $log['id'] ?>"
                                                    data-build_material="<?= $log['build_material'] ?>"
                                                    data-target="#build_material-modal"
                                                    data-toggle="modal"
                                                    class="btn btn-primary btn-sm">Upload <i class="ni ni-cloud-upload-96"></i></a><br>
                                                    <a href="javascript:;"
                                                        data-id="<?= $log['id'] ?>"
                                                        data-build_material="<?= $log['build_material'] ?>"
                                                        data-target="#build_materiald-modal"
                                                        data-toggle="modal"
                                                        class="btn btn-success btn-sm mt-2">Download <i class="ni ni-cloud-download-95"></i></a></td>
                                                        <td><a href="javascript:;"
                                                            data-id="<?= $log['id'] ?>"
                                                            data-packing="<?= $log['packing'] ?>"
                                                            data-target="#packing-modal"
                                                            data-toggle="modal"
                                                            class="btn btn-primary btn-sm">Upload <i class="ni ni-cloud-upload-96"></i></a><br>
                                                            <a href="javascript:;"
                                                                data-id="<?= $log['id'] ?>"
                                                                data-packing="<?= $log['packing'] ?>"
                                                                data-target="#packingd-modal"
                                                                data-toggle="modal"
                                                                class="btn btn-success btn-sm mt-2">Download <i class="ni ni-cloud-download-95"></i></a></td>
                        <td><?= $log['catatan']; ?> </td>
                        <td><a href="javascript:;"
                            data-id="<?= $log['id'] ?>"
                            data-date="<?= $log['tgl_upload'] ?>"
                            data-no_po="<?= $log['no_po'] ?>"
                            data-nama_barang="<?= $log['nama_barang'] ?>"
                            data-catatan="<?= $log['catatan'] ?>"
                            data-target="#edit-modal"
                            data-toggle="modal"
                            class="btn btn-warning btn-sm">Edit <i class="fas fa-edit"></i></a><br>
                            <a href="javascript:;"
                                data-id="<?= $log['id'] ?>"
                                data-target="#hapus-modal"
                                data-toggle="modal"
                                class="btn btn-danger btn-sm mt-2">Hapus <i class="fas fa-trash-alt"></i></a></td>
                      </tr>
                      <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
      </div>
    </div>


  </div>

  <!--   Core   -->
  <script src="<?= base_url('assets'); ?>/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!--   Optional JS   -->
  <script src="<?= base_url('assets'); ?>/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url('assets'); ?>/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="<?= base_url('assets'); ?>/js/argon-dashboard.min.js?v=1.1.2"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>



  <!-- Bootstrap Date-Picker Plugin -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</body>


<!-- Script file upload -->
<script>
$('#filecount').filestyle({
 input : false,
 buttonName : 'btn-danger',
 iconName : 'glyphicon glyphicon-folder-close'
});

</script>

</html>
