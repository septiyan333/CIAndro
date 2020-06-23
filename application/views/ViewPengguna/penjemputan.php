<!doctype html>
<html lang="en">

<head>
  <title>HI Trash - Penjemputan</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #67A567;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('Pengguna/penjemputan'); ?>" style="color: white;">PENJEMPUTAN</a>
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

  <!-- FORM -->
  <div class="container" style="margin-top: 80px">
    <div class="col-md-12">
      <?php echo form_open('Pengguna/simpan') ?>

      <div class="form-group">
        <label for="text">ID Akun</label>
        <input type="text" name="id_akun" class="form-control" placeholder="">
      </div>

      <div class="form-group">
        <label for="text">Nama Lengkap</label>
        <input type="date" name="nama_lengkap" class="form-control" placeholder="">

      </div>

      <div class="form-group">
        <label for="text">Tanggal</label>
        <input type="text" name="tanggal" class="form-control">
      </div>

      <div class="form-group">
        <label for="text">Waktu</label>
        <input type="text" name="Waktu" class="form-control">
      </div>

      <div class="form-group">
        <label for="text">Jenis Sampah</label>
        <input type="text" name="jenis_sampah" class="form-control">
      </div>

      <div class="form-group">
        <label for="text">Berat</label>
        <input type="text" name="berat" class="form-control" placeholder="Masukan Berat Sampah">
      </div>

      <div class="form-group">
        <label for="text">Saldo</label>
        <input type="text" name="saldo" class="form-control" placeholder="Masukan Saldo">
      </div>

      <div class="form-group">
        <label for="text">No Telpon</label>
        <input type="text" name="no_telfon" class="form-control">
      </div>

      <div class="form-group">
        <label for="text">Alamat</label>
        <input type="text" name="pengarang" class="form-control">
      </div>

      <div class="form-group">
        <label for="text">Detail</label>
        <input type="text" name="pengarang" class="form-control" placeholder="Masukan Detail Rumah Anda">
      </div>

      <button type="submit" class="btn btn-md btn-success">Simpan</button>
      <button type="reset" class="btn btn-md btn-warning">reset</button>
      <?php echo form_close() ?>
    </div>
  </div>
  <!-- Akhir Form -->
  <br>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>