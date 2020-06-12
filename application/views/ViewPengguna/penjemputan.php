<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/riwayat_view.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>HI Trash - Penjemputan</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="Penjemputan.php">PENJEMPUTAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="halaman_pengguna.php">Beranda<span class="sr-only">(current)</span></a> 
            <a class="nav-item btn btn-primary" href="profil.php">Akun Saya</a>
            <a class="nav-item nav-link" href="#"></a>
            <a href="<?php echo base_url('Pengguna'); ?>" class="btn btn-warning" role="button"><small>Kembali</small></a>
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
                <input type="text" name="tanggal" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Waktu</label>
                <input type="text" name="Waktu" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Jenis Sampah</label>
                <input type="text" name="jenis_sampah" class="form-control" >
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
                <input type="text" name="no_telfon" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Alamat</label>
                <input type="text" name="pengarang" class="form-control" >
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>