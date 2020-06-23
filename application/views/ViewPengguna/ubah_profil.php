  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #67A567;">
    <div class="container">
      <a class="navbar-brand txtputih" href="<?php echo base_url('Pengguna/UbahProfil'); ?>">UBAH PROFIL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link txtputih" href="<?php echo base_url('Pengguna'); ?>">Beranda</a>
          <!-- Navigasi Akun -->
          <div class="btn-group">
            <button type="button" class="btn dropdown-toggle txtputih" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="<?= base_url('assets/img/profile/') . $akun['image'] ?>" alt="profil" class="img-profile rounded-circle" width="30px" height="30px">&nbsp <?= $akun['nama_pengguna']; ?>
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
            <a href="#" class="card-link"> <img src="<?php echo base_url('assets/img/icons/ic_money.png'); ?>" alt="icon-tukar-poin"> Tukar Poin</a>
            <a href="<?php echo base_url('Pengguna/poin'); ?>" class="float-right">Lihat Riwayat Poin</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Akhir Panel Poin -->

  <!-- Message Eror -->
  <div class="container">
    <div class="row" style="margin-top: 20px;">
      <div class="col-3"></div>
      <div class="col">
        <?= $this->session->flashdata('message'); ?>
      </div>
    </div>
  </div>
  <!-- Message Eror -->

  <!-- Identitas -->
  <?php echo form_open_multipart('Pengguna/simpan_profil'); ?>
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


        <div class="row align-items-center form-group" style="padding-left: 20px; margin-top: 20px;">
          <div class="col-3 idt">
            <div>
              <img src="<?php echo base_url('assets/img/icons/google.png'); ?>" alt="nama" width="24px;">&nbsp&nbspNama Pengguna
            </div>
          </div>
          <div class="col">
            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?php echo $akun['nama_pengguna'] ?>" readonly>
          </div>
        </div>

        <div class="row align-items-center form-group" style="padding-left: 20px; margin-top: 20px;">
          <div class="col-3 idt">
            <div>
              <img src="<?php echo base_url('assets/img/icons/name.png'); ?>" alt="nama" width="24px;">&nbsp&nbspNama Lengkap
            </div>
          </div>
          <div class="col">
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $akun['nama_lengkap'] ?>">
            <?php echo form_error('nama_lengkap', '<small class="text-danger pl-1">', '</small>'); ?>
          </div>
        </div>

        <div class="row align-items-center form-group" style="padding-left: 20px; margin-top: 20px;">
          <div class="col-3 idt">
            <img src="<?php echo base_url('assets/img/icons/location.png'); ?>" alt="alamat" width="24px;">&nbsp&nbspAlamat
          </div>
          <div class="col">
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $akun['alamat'] ?>">
          </div>
        </div>

        <div class="row align-items-center form-group" style="padding-left: 20px; margin-top: 20px;">
          <div class="col-3 idt">
            <img src="<?php echo base_url('assets/img/icons/email.png'); ?>" alt="email" width="24px">&nbsp&nbspEmail
          </div>
          <div class="col">
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $akun['email'] ?>">
          </div>
        </div>

        <div class="row align-items-center form-group" style="padding-left: 20px; margin-top: 20px;">
          <div class="col-3 idt">
            <img src="<?php echo base_url('assets/img/icons/call-24px.svg'); ?>" alt="telpon">&nbsp&nbspNo. Telpon
          </div>
          <div class="col">
            <input type="text" class="form-control" id="no_telpon" name="no_telpon" placeholder="No. Telpon Anda" value="<?php echo $akun['no_telpon'] ?>" <?php echo form_error('no_telpon', '<small class="text-danger pl-1">', '</small>'); ?>>
          </div>
        </div>

        <div class="row align-items-center form-group" style="padding-left: 20px; margin-top: 20px;">
          <div class="col-3 idt">
            <img src="<?php echo base_url('assets/img/icons/account_circle-24px.svg'); ?>" alt="Foto Profil" width="25px">&nbsp&nbspFoto Profil
          </div>
          <div class="col-5" style="background-color: yellow; left: 15px;">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="customFile">Pilih Foto</label>
          </div>
        </div>

        <div class="row align-items-center form-group" style="padding-left: 20px; margin-top: 20px;">
          <div class="col-3"></div>
          <div class="col">
            <button type="submit" value="upload" class="btn btn-success">Simpan</button>
          </div>
        </div>

      </div>
    </div>
    <!-- Akhir identitas -->
    <br>