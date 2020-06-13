  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #67A567;">
      <div class="container">
          <a class="navbar-brand txtputih" href="<?php echo base_url('Kurir/profil'); ?>">PROFIL</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link txtputih" href="<?php echo base_url('Kurir'); ?>">Beranda</a>
                  <!-- Navigasi Akun -->
                  <div class="btn-group">
                      <button type="button" class="btn dropdown-toggle txtputih" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

  <!-- Message Berhasil -->
  <div class="container">
      <div class="row" style="margin-top: 20px;">
          <div class=" col-3"></div>
          <div class="col-5">
              <?= $this->session->flashdata('message'); ?>
          </div>
      </div>
  </div>
  <!-- Akhir Message Berhasil -->

  <!-- Identitas -->
  <div class="container">
      <div class="row">

          <!-- Foto Profil -->
          <div class="col-sm-3 profil">
              <img src="<?= base_url('assets/img/profile/') . $akun['image'] ?>" alt="profil" class="img-profile rounded-circle" width="250px" height="250px">
          </div>
          <!-- Akhir Foto Profil -->
          <div class="col-lg">
              <span class="hinama">
                  Hi,
                  <?= $akun['nama_pengguna']; ?>!
              </span>

              <div class="row align-items-center" style="padding: 20px;">
                  <div class="col-4">
                      <div>
                          <img src="<?php echo base_url('assets/img/icons/name.png'); ?>" alt="nama" width="24px;">&nbsp Nama Lengkap
                      </div>
                  </div>
                  <div class="col">
                      <div><?php echo $akun['nama_lengkap']; ?></div>
                  </div>
              </div>

              <div class="row align-items-center" style="padding: 20px;">
                  <div class="col-4">
                      <img src="<?php echo base_url('assets/img/icons/location.png'); ?>" alt="alamat" width="24px;">&nbsp Alamat
                  </div>
                  <div class="col">
                      <div><?php echo $akun['alamat']; ?></div>
                  </div>
              </div>

              <div class="row align-items-center" style="padding: 20px;">
                  <div class="col-4">
                      <img src="<?php echo base_url('assets/img/icons/email.png'); ?>" alt="email" width="24px">&nbsp Email
                  </div>
                  <div class="col">
                      <div><?php echo $akun['email']; ?></div>
                  </div>
              </div>

              <div class="row align-items-center" style="padding: 20px;">
                  <div class="col-4">
                      <img src=" <?php echo base_url('assets/img/icons/call-24px.svg'); ?>" alt="telpon">&nbsp No. Telpon
                  </div>
                  <div class="col">
                      <div><?php echo $akun['no_telpon']; ?></div>
                  </div>
              </div>

          </div>
      </div>
      <!-- Akhir identitas -->
      <br><br><br><br><br>