<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">

          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-size: 150%; background-position-x: -35px; background-position-y: 0px;"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center" style="padding-top:20px">
                  <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo">
                </div>

                <form class="user" method="post" action="<?php echo base_url('Halaman_Awal/daftar'); ?>">

                  <div class="form-group">
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap Anda" value="<?php echo set_value('nama_lengkap') ?>">
                    <?php echo form_error('nama_lengkap', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Anda" value="<?php echo set_value('alamat') ?>">
                    <?php echo form_error('alamat', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email Anda" value="<?php echo set_value('email') ?>">
                    <?php echo form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" id="no_telpon" name="no_telpon" placeholder="Nomor Telepon Anda" value="<?php echo set_value('no_telpon') ?>">
                    <?php echo form_error('no_telpon', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Nama Pengguna" <?php echo set_value('nama_pengguna') ?>>
                    <?php echo form_error('nama_pengguna', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control" id="kata_sandi" name="kata_sandi" placeholder="Kata Sandi">
                    <?php echo form_error('kata_sandi', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>

                  <div class="form-group" style="padding-left: 5px">
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki Laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    <?php echo form_error('jenis_kelamin', '<br><small class="text-danger">', '</small>'); ?>
                  </div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Pengguna
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item">Pengguna</a>
                    </div>
                  </div> <br><br>

                  <Button type="submit" class="btn btn-primary btn-block tombol">
                    Daftar
                  </Button>

                </form>
              </div>
              <div class="text-center" style="margin-top: -20px">
                <a class="small">Sudah Punya Akun ?
                  <a class="small" href="<?php echo base_url('Halaman_awal'); ?>"> Masuk</a>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>