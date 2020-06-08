<?php include 'session.php'; ?>
<?php
require 'functions.php';
 if($akses==" "){
      header('location:login.php');
    }
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['status']!="pengguna"){
      header('location:login.php');
    }
  ?>

<!-- <?php


$id = $_SESSION['nama_pengguna'];
$tukar = query("SELECT * FROM tb_paket_data")[0];

$po = query("SELECT tb_akun.id_akun , tb_akun.nama_pengguna , tb_point.id_akun , tb_point.id_akun, tb_point.point FROM tb_akun , tb_point WHERE tb_akun.id_akun = tb_point.id_akun AND nama_pengguna  = '$id'");

if (isset($_POST["harga"])) {
    $sql = mysqli_query($koneksi,"UPDATE tb_point set point = point - NEW.jumlah_tukar where id_akun=NEW.id_akun");
    //buat sendiri lagi dengan insert
  if (tukarpoin($_POST)) {
    echo "<script>
                          alert('Data Berhasil Ditambahkan');
                          </script>";
  } else{
          echo "<script>alert('Gagal Menambahkan Data')</script>";
  }
}

?> -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style_riwayat.css">
    <title>HI Trash - Profil</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Tukar Poin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a><a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link" href="#"></a>
            <a class="nav-item nav-link active" href="#">Beranda<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Edukasi</a>
            <a class="nav-item nav-link" href="#">Tentang</a>
             <a class="nav-item btn btn-primary " href="Profil.php">Akun Saya</a></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->

  <div class="container">
    <!-- TOP TABS -->
    <div class="btn-group">

          <a href="tukarpoin.php?p=pakdat" class="btn btn-primary" role="button">Paket Data</a>
    </div>

    <tr>

                  <td><h4>POINT SAYA</h4></td>
                  <td style="width:250px;"></td>
                  <?php
                  include 'koneksi.php';
                  $result = mysqli_query($koneksi,"SELECT * FROM tb_point ORDER BY id_point");
                  if (mysqli_num_rows($result)>0) {
                    while($data = mysqli_fetch_array($result)){
                      ?>
                      <td><?php echo $data['point'] ?></td> <br>
                      <!-- <td name="TGL">Tanggal</td> -->
                      <td><label for="TGL" name="TGL"><?php echo date("Y-m-d") ;?></label></td>
                  <?php    }
                } ?><br>
                  <!-- <td class="point"><input type="text" value="<?= $po[0]['point'];?>"></td> -->
                <label name="ID" id="ID"><?= $po[0]['id_akun'];?></label>
                </tr>
                <tr>

  </tr>
        <div class="container">
    <h2 align="center">Tukar Point</h2>
    <div class="row" id="load_data">

      <?php
        include 'koneksi.php';
        $query = mysqli_query($koneksi,"SELECT * FROM tb_paket_data ORDER BY id_paket_data ASC");
        if (mysqli_num_rows($query)>0) {
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
            <input  type="hidden" name="TGL" value="<?php echo date("Y-m-d") ;?>">
            <input  type="hidden" name="ID" value="<?= $po[0]['id_akun'];?>">
                <a href="proses_tukar.php?id_akun=<?php echo $data['id_akun']?>" type="submit"><input type="submit" name="harga" class ="btn btn-info" value="<?php echo $data['jumlah_tukar'];?>"></a>

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

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</div> <!-- end container-fluid -->
      </div> <!-- end tab-content -->
    </div><!--  end container -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>
    <!-- <script src="javascript.js"></script> -->
  </body>
</html>
