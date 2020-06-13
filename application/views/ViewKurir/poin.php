<!doctype html>
<html lang="en">

<head>
  <title>Kurir - Poin</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/poin_view.css'); ?>">

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #67A567;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('Kurir/poin'); ?>" style="color: white;">POIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="<?php echo base_url('Kurir'); ?>" style="color: white;">Beranda</a>
          <!-- Navigasi Akun -->
          <div class="btn-group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
              <img src="<?= base_url('assets/img/profile/') . $akun['image'] ?>" alt="profil" class="img-profile rounded-circle" width="30px" height="30px"> &nbsp<?= $akun['nama_pengguna']; ?>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo base_url('Kurir/profil'); ?>">Profil</a>
              <a class="dropdown-item" href="<?= base_url('Kurir/tukar_poin'); ?>">Tukar Poin</a>
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

  <!-- Panel Poin -->
  <div class="container panelpoin">
    <div class="row">
      <div class="col">

        <div class="card posisicard">
          <div class="card-body">
            <span class="card-title">Poin Saya</span>
            <span class="text-warning float-right">
              <!-- Poin -->
              0 TP
              <!-- <php
              include 'koneksi.php';
              $sql = mysqli_query($koneksi, "SELECT * FROM tb_akun where id_akun=$id_akun");
              $data = mysqli_fetch_array($sql) ?>

              <php echo $data['saldo'] ?> TP -->
            </span>
            <hr>
            <a href="<?= base_url('Kurir/tukar_poin'); ?>" class="card-link"> <img src="<?php echo base_url('assets/img/icons/ic_money.png'); ?>" alt="icon-tukar-poin"> Tukar Poin</a>
            <a href="<?php echo base_url('Kurir/riwayat'); ?>" class="float-right">Lihat Riwayat Poin</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Akhir Panel Poin -->


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>