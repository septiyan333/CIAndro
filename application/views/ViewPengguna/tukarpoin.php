<!doctype html>
<html lang="en">

<head>
  <title>HI Trash - Tukar Poin</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #67A567;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('Pengguna/tukar_poin'); ?>" style="color: white;">TUKAR POIN</a>
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
  </head>

  <body>
    <!-- partial:index.partial.html -->

    <div class="container">
      <!-- TOP TABS -->
      <div class="btn-group">

        <a href="tukarpoin.php?p=pakdat" class="btn btn-primary" role="button">Paket Data</a>
      </div>

      <tr>

        <td>
          <h4>POINT SAYA</h4>
        </td>
        <td style="width:250px;"></td>
        <?php
        include 'koneksi.php';
        $result = mysqli_query($koneksi, "SELECT * FROM tb_point ORDER BY id_point");
        if (mysqli_num_rows($result) > 0) {
          while ($data = mysqli_fetch_array($result)) {
        ?>
            <td><?php echo $data['point'] ?></td> <br>
            <!-- <td name="TGL">Tanggal</td> -->
            <td><label for="TGL" name="TGL"><?php echo date("Y-m-d"); ?></label></td>
        <?php    }
        } ?><br>
        <!-- <td class="point"><input type="text" value="<?= $po[0]['point']; ?>"></td> -->
        <label name="ID" id="ID"><?= $po[0]['id_akun']; ?></label>
      </tr>
      <tr>

      </tr>
      <div class="container">
        <h2 align="center">Tukar Point</h2>
        <div class="row" id="load_data">

          <?php
          include 'koneksi.php';
          $query = mysqli_query($koneksi, "SELECT * FROM tb_paket_data ORDER BY id_paket_data ASC");
          if (mysqli_num_rows($query) > 0) {
            while ($data = mysqli_fetch_array($query)) {
          ?>
              <!-- // $query1 = $conn->prepare($query);
        // $query1->execute();
        // $res1 = $query1->get_result();
        // while ($row = $res1->fetch_assoc()) {
        //   $id = $row["id_paket_data"];
        //   $jenis_data = $row["jenis_paket_data"];
        //   $kuota = $row["kuota"];
        //   $harga = $row["jumlah_tukar"];
        //   if (strlen($kuota) > 60) {
        //     $kuota = substr($kuota, 0, 60) . '...';
        //   } -->
              <div class="col-sm-3 mb-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $data['jenis_paket_data']; ?></h5>
                    <h5 class="card-title"><?php echo $data['kuota']; ?>GB</h5>
                  </div>
                  <div class="card-footer">
                    <input type="hidden" name="TGL" value="<?php echo date("Y-m-d"); ?>">
                    <input type="hidden" name="ID" value="<?= $po[0]['id_akun']; ?>">
                    <a href="proses_tukar.php?id_akun=<?php echo $data['id_akun'] ?>" type="submit"><input type="submit" name="harga" class="btn btn-info" value="<?php echo $data['jumlah_tukar']; ?>"></a>

                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>

        </div>

      </div>
      <a href="Point.php" class="btn btn-warning" role="button">Kembali</a>

    </div> <!-- end container-fluid -->
    </div> <!-- end tab-content -->
    </div><!--  end container -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>
    <!-- <script src="javascript.js"></script> -->
  </body>

</html>