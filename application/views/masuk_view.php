<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">

          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-size: 120%; background-position-x: 0px; background-position-y: 0px;"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center" style="padding-top:20px">
                  <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo">
                </div>

                <!-- flash data Pendaftaran berhasil -->
                <?php echo $this->session->flashdata('message'); ?>

                <form class="user" method="post" action="<?php echo base_url('Halaman_Awal'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Nama Pengguna" value="<?php echo set_value('nama_pengguna') ?>">
                    <?php echo form_error('nama_pengguna', '<br><small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control" id="kata_sandi" name="kata_sandi" placeholder="Kata Sandi">
                    <?php echo form_error('kata_sandi', '<br><small class="text-danger">', '</small>'); ?>
                  </div>
                  <Button type="submit" class="btn btn-primary btn-block tombol">
                    Masuk
                  </Button>
                </form>
                <div class="text-center">
                  <a class="small">Lupa Kata Sandi?
                    <a class="small" href="Lupa Kata Sandi">Dapatkan Bantuan</a>
                  </a>
                </div>
              </div>
              <div class="text-center" style="margin-top: 65px">
                <a class="small">Tidak Punya Akun?
                  <a class="small" href="<?php echo base_url('Halaman_Awal/daftar') ?>"> Daftar</a>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>