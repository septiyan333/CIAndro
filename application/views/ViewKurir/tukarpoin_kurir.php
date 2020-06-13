<!doctype html>
<html lang="en">

<head>
    <title>Kurir - Tukar Poin</title>

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
            <a class="navbar-brand" href="<?php echo base_url('Kurir/tukar_poin'); ?>" style="color: white;">TUKAR POIN</a>
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
    </head>

    <body>
        <!-- partial:index.partial.html -->

  <div class="container">
    <!-- TOP TABS -->
    <div class="btn-group">
          <a href="#" class="btn btn-primary" role="button">Pulsa</a>
          <a href="#" class="btn btn-info" role="button">Paket Data</a>
    </div>
        <!-- FIRST TAB -->
        <div class="tab-pane active" id="tab1">
          <div class="container-fluid">
            <hr>

             <table class="table" border="px">

          <tbody>
            <tr class="btn-warning">
            </tr>
            <tr>
              <td class="td-padding"><center>Pulsa OMG!<P><center>
        <h2>15</h2> <h4>Rb</h4><p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="15.000 TP"></input>
          </div></td>
              <td class="td-padding"><center>Pulsa OMG!<P><center>
        <h2>20</h2> <h4>Rb</h4> <p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="20.000 TP"></input>
          </div> </td>
            </tr>
            <tr>
              <td class="td-padding"><center>Pulsa OMG!<P><center>
        <h2>50</h2> <h4>Rb</h4><p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="50.000 TP"></input>
          </div></td>
        <td class="td-padding"><center>Pulsa OMG!<P><center>
        <h2>150</h2> <h4>Rb</h4><p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="150.000 TP"></input>
          </div></td>
            </tr>
        <tr>
        <td class="td-padding"><center>Pulsa OMG!<P><center>
        <h2>100</h2> <h4>Rb</h4><p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="100.000 TP"></input>
          </div></td>
        <td class="td-padding"><center>Pulsa OMG! WOW! Special<P><center>
        <h2>200</h2> <h4>Rb</h4><p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="200.000 TP"></input>
          </div></td>
        </tr>
        <tr>
        <body>
        </table>
        <hr>
      <!-- end Tab1 content -->

      <div class="tab-content">
          <!-- FIRST TAB -->
          <div class="tab-pane active" id="tab1">
            <div class="container-fluid">
              <hr>

               <table class="table" border="px">

            <tbody>
              <tr class="btn-warning">
              </tr>
              <tr>
                <td class="td-padding"><center>Internet OMG!<P><center>
          5 gb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="35.000 TP"></input>
            </div></td>
                <td class="td-padding"><center>Internet OMG!<P><center>
           2.5 gb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="20.000 TP"></input>
            </div> </td>
              </tr>
              <tr>
                <td class="td-padding"><center>Paket Internet<P><center>
          500 Mb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="4000 TP"></input>
            </div></td>
          <td class="td-padding"><center>Paket Internet<P><center>
          2.5 gb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="21.000 TP"></input>
            </div></td>
              </tr>
          <tr>
          <td class="td-padding"><center>Internet Combo<P><center>
          10 gb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="67.000 TP"></input>
            </div></td>
          <td class="td-padding"><center>Paket Special<P><center>
          3 gb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="5000 TP"></input>
            </div></td>
          </tr>
          <tr>
          <body>
          </table>
          <hr>
        <!-- end Tab1 content -->';


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