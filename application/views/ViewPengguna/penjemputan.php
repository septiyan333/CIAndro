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
            <a href="halaman_pengguna.php" class="btn btn-warning" role="button"><small>Kembali</small></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- FORM -->
    <form action="proses_penjemputan.php" method="POST">
    <!-- Alamat -->
      <div style="color:#3A3A3A; background-color:#f3f3f3; height:30px; align:center">
        <h5> <center> Alamat</center></h5>
      </div>
      <div class="form" method="post">
      <table style="margin-left:60px">
        <div class="form-group"> 
          <?php echo 'Alamat, ' . $akun['alamat']; ?>
        <div class="form-group">
          <tr>
            <td width="150px"> <input type="hidden" value="<?php echo $data['id_akun']; ?>" for="id_akun" name="id_akun">ID : </input></td>
            <td> <h5><?php echo $data['id_akun']; ?></h5> </td>
          </tr>
        </div>
        
        <div class="form-group">
          <tr>
            <td> <input type="hidden" value="<?php echo $data['nama_lengkap']; ?>" for="nama_lengkap" name="nama_lengkap">Nama : </input></td>
            <td> <h5><?php echo $data['nama_lengkap']; ?></h5> </td>
          </tr>
        </div>

        </div>
        <div class="form-group">
          <tr>
            <td><input type="hidden" value="<?php echo $data['alamat']; ?>" for="alamat" name="alamat">Alamat : </input></td>
            <td> <h5> <?php echo $data['alamat']; ?> </h5> </td>
          </tr>
        </div>  

        <div class="form-group">
          <tr>
            <td><input type="hidden" value="<?php echo $data['no_telpon']; ?>" for="no_telpon" name="no_telpon">No Telpon : </input></td>
            <td> <h5> <?php echo $data['no_telpon']; ?> </h5> </td>
          </tr>
        </div>

        <div class="form-group">
          <tr>
            <td>
              <label for="detail_alamat" style="top:1px">Detail Alamat :</label>
            </td>
            <td width="300">
              <textarea class="form-control" placeholder="Tulis detail alamat anda (ex. nomor, ciri-ciri, dll)" id="detail" name="detail" rows="4" style="margin-top:10px"></textarea>
            </td>
          </tr>
        </div>        
      </table>
      </div>
      <br>
      <!-- Akhir Alamat -->

      <!-- Jenis Sampah -->
      <div style="color:#3A3A3A; background-color:#f3f3f3; height:30px; align:center">
        <h5> <center>Jenis Sampah</center></h5>
      </div>
      
      <div class="row">
        <div class="col-sm-3" Style="margin-left: 20px; margin-top: 20px;"> 
          <span Style="font-size:30px; font-family:Calibri; font-style:bold;">Pilih Jenis Sampah</span>   
        </div>
      </div>
      <br>
      
      <div class="row"> 
        <div class="col-sm" Style="text-align:center;">
          <span Style="font-size:30px; font-family:Calibri; font-style:regular;">Sampah Organik</span>
        </div>

        <div class="col-sm" Style="text-align:center;">
          <span Style="font-size:30px; font-family:Calibri; font-style:regular;">Sampah Non Organik</span>
        </div>
      </div> <br>

      <div class="row"> 
        <div class="col-sm" Style="margin-left:230px;">
          <label Style="font-size:20px;">
            <input type="checkbox" name="sayuran" value="Sayuran" height="10px" widht="10px"/> Sayuran
          </label> <br>

          <label Style="font-size:20px;">
            <input type="checkbox" name="Buah-buahan" value="Buah-buahan"/> Buah-buahan
          </label> <br>

          <label Style="font-size:20px;">
            <input type="checkbox" name="Minyak" value=" Minyak"/> Minyak
          </label> <br>

          <label Style="font-size:20px;">
            <input type="checkbox" name="Nasi" value="Nasi"/> Nasi
          </label> <br>

          <label Style="font-size:20px;">
            <input type="checkbox" name="Makanan" value="Makanan"/> Makanan
          </label>
        </div>
        
        <div class="garis_verikal" Style="border-left: 1px #f3f3f3 solid; height: 200px;"></div>

        <div class="col-sm" Style="margin-left:220px;">
          <label Style="font-size:20px;">
            <input type="checkbox" name="Plastik" value="Plastik" height="10px" widht="10px"/> Plastik
          </label> <br>

          <label Style="font-size:20px;">
            <input type="checkbox" name="Kardus" value="Kardus"/> Kardus
          </label> <br>

          <label Style="font-size:20px;">
            <input type="checkbox" name="Kertas" value=" Kertas"/> Kertas
          </label> <br>

          <label Style="font-size:20px;">
            <input type="checkbox" name="Kaleng" value=" Kaleng"/> Kaleng
          </label> <br>

          <label Style="font-size:20px;">
            <input type="checkbox" name="Kain" value="Kain"/> Kain
          </label>
        </div>
      </div> <br>
      <!-- Akhir Jenis Sampah -->
      
      <!-- Jadwal Penjemputan -->
      <div style="color:#3A3A3A; background-color:#f3f3f3; height:30px; align:center">
        <h5> <center>Jadwal Penjemputan</center></h5>
      </div>
          
      <div class="row" style="margin-top:50px;">
        <div class="col-sm-1">
          <img src="img/date_range-24px.svg" alt="IconTanggal" width="40px" height="40px" style="float:right">
        </div>
        <div class="col-sm">
          <input class="form-control input-sm" type="date" name="tanggal" Style="width:200px; text-align:center">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-1">
          <img src="img/access_time-24px.svg" alt="IconTanggal" width="40px" height="40px" style="float:right">
        </div>
        <div class="col-sm-3">
          <input type="time" name="waktu" id="waktu_mulai_masuk"  class="form-control" onkeyup="Waktumasuk();" style="width:100px; text-align:center">
        </div>
      </div><br>
      <!-- Akhir Jadwal Penjemputan -->
          <?php } ?>      
      <!-- SELESAI -->
      <div class="row">
        <div class="col-sm" style="text-align:center">
          <input type="submit" value="selesai" class="btn btn-success selesai">&nbsp &nbsp</input>
        </div>
      </div> 
    </form>
    <!-- Akhir Form -->
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>