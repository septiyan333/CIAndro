<!Doctype html>
<html lang="en">

<head>
  <title>HI-Trash - Riwayat</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="<?php echo base_url('assets/css/freelancer.min.css'); ?>" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #67A567;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('Pengguna/riwayat'); ?>" style="color: white;">RIWAYAT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="<?php echo base_url('Pengguna'); ?>" style="color: white;">Beranda</a>
          <!-- Navigasi Akun -->
          <div class="btn-group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
              <img src="<?= base_url('assets/img/profile/') . $akun['image'] ?>" alt="profil" class="img-profile rounded-circle" width="30px" height="30px"> &nbsp<?= $akun['nama_pengguna']; ?>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo base_url('Pengguna/profil'); ?>">Profil</a>
              <a class="dropdown-item" href="<?= base_url('Pengguna/tukar_poin'); ?>">Tukar Poin</a>
              <a class="dropdown-item" href="#">Pengaturan</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo base_url('Halaman_Awal/keluar'); ?>">Keluar</a>
            </div>
          </div>
          <!-- Akhir Navigasi Akun -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!--Tabel-->
  <div class="container ng-scope" ng-app="sortApp" ng-controller="mainController">
    <div class="alert alert-info">
    </div>
    <form class="ng-pristine ng-valid">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-search"></i></div>
          <input type="text" class="form-control" placeholder="Search" ng-model="Search">
        </div>
      </div>
    </form>
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Data Riwayat</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Barang</th>
                <th>Berat</th>
                <th>Poin</th>
                <th>Kurir</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
    <!-- Akhir Tabel -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>