  <!Doctype html>
  <html lang="en">

  <head>
    <title>HI-Trash - Beranda</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url('assets/css/freelancer.min.css'); ?>" rel="stylesheet">

    <!-- My CSS -->
    <link href="<?php echo base_url('assets/css/beranda_view.css'); ?>" rel="stylesheet">
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#"><?php echo 'Selamat datang, ' . $akun['nama_lengkap']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link js-scroll-trigger borderbawah" href="#portfolio">Edukasi</a>
            <a class="nav-item nav-link js-scroll-trigger borderbawah" href="#about">Tentang</a>
            <!-- Navigasi Akun -->
            <div class="btn-group">
              <button type="button" class="btn dropdown-toggle btn-akun" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?= base_url('assets/img/profile/default.png') ?>" alt="profil" class="img-circle" width="30px">
                <?= $akun['nama_pengguna']; ?>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url('Pengguna/profil'); ?>">Profil</a>
                <a class="dropdown-item" href="<?php echo base_url('Pengguna/poin'); ?>">Tukar Poin</a>
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

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <img class="logo" src="<?php echo base_url('assets/img/logo.png') ?>" alt="logo">
        <h1 class="display-4">Buanglah <span>Sampah</span> Pada Tempatnya <br> Keep <span>Go Green</span></h1>
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Container -->
    <div class="container">
      <!-- Panel -->
      <div class="row justify-content-center">
        <div class="col-8 info-panel">
          <div class="row isi">
            <div class="col-lg">
              <img src="<?php echo base_url('assets/img/icons/garbage, truck, transportation, transport, vehicle_120px.png') ?>" alt="penjemputan">
              <a class="nav-item btn btn-primary" href="<?php echo base_url('Pengguna/penjemputan'); ?>"><span>Penjemputan</span></a>
            </div>

            <div class="col-lg">
              <img src="<?php echo base_url('assets/img/icons/bank, finance, dollar, location, pointer_120px.png') ?>" alt="Poin">
              <a class="nav-item btn btn-primary" href="<?php echo base_url('Pengguna/poin'); ?>"><span>Poin</span></a>
            </div>

            <div class="col-lg">
              <img src="<?php echo base_url('assets/img/icons/bookmark, schedule, date, appointment_120px.png') ?>" alt="Jadwal">
              <a class="nav-item btn btn-primary" href="<?php echo base_url('Pengguna/jadwal'); ?>"><span>Jadwal</span></a>
            </div>

            <div class="col-lg">
              <img src="<?php echo base_url('assets/img/icons/employee, account, business, time, clock_120px.png') ?>" alt="riwayat">
              <a class="nav-item btn btn-primary" href="<?php echo base_url('Pengguna/riwayat');?>"><span>Riwayat</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Panel -->
    </div>
    <!-- Akhir container -->

    <!-- Educasi Section -->
    <section class="page-section portfolio" id="portfolio">
      <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edukasi</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row">
          <!-- Portfolio Item 1 -->
          <div class="col-md-6 col-lg-4">
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/kardus.jpg') ?>" alt="kardus">
            </div>
          </div>

          <!-- Portfolio Item 2 -->
          <div class="col-md-6 col-lg-4">
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/kaleng.jpg') ?>" alt="kaleng">
            </div>
          </div>

          <!-- Portfolio Item 3 -->
          <div class="col-md-6 col-lg-4">
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/plastik.jpg') ?>" alt="plastik">
            </div>
          </div>

          <!-- Portfolio Item 4 -->
          <div class="col-md-6 col-lg-4">
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/kain.jpg') ?>" alt="kain">
            </div>
          </div>

          <!-- Portfolio Item 5 -->
          <div class="col-md-6 col-lg-4">
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/minyak.jpg') ?>" alt="minyak">
            </div>
          </div>

          <!-- Portfolio Item 6 -->
          <div class="col-md-6 col-lg-4">
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/kertas.jpg') ?>" alt="kertas">
            </div>
          </div>
        </div>
        <!-- Akhir Portfolio Grid Items -->
      </div>
    </section>
    <!-- Akhir Edukasi Section -->

    <!-- About Section -->
    <section class="page-section bg-primary text-white mb-0" id="about">
      <div class="container">

        <!-- About Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-white">Tentang</h2>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
        </div>

        <!-- About Section Content -->
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">HI TRASH adalah solusi untuk menyelesaikan masalah sosial tentang kebersihan lingkungan.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Anda dapat mengumpulkan dan mebuang sampah tanpa harus menuju bang sampah dengan layanan penjemputan sampah. Poin yang anda kumpulkan dapat diturkarkan dengan pulsa atau paket data.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About Section -->

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">

          <!-- Footer Location -->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Jember
              <br>Jawa Timur</p>
          </div>

          <!-- Footer About Text -->
          <div class="col-lg-8">
            <h4 class="text-uppercase mb-4">Perlu Bantuan?</h4>
            <p class="lead mb-0">Silahkan hubungi admin di nomer ini 089543063604</p>
          </div>

        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <!-- Copyright Section -->
    <section class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; HI-Trash Website 2020</small>
      </div>
    </section>
    <!-- Akhir Copyright Section -->

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fas fa-times"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Portfolio Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Limbah Kardus</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Portfolio Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets/img/portfolio/kardus2.png') ?>" alt="kardus2">
                  <!-- Portfolio Modal - Text -->
                  <p class="mb-3 text-justify">Kardus yang terbuat dari pulp atau bubur kertas merupakan bahan yang ramah lingkungan karena mudah didaur ulang dan juga lebih mudah terurai. Ukurannya yang besar sering kali kardus dimanfaatkan sebagai pembungkus atau kemasan suatu produk oleh perusahaan. Tujuan utama pengemasan adalah melindungi isi kemasan dan kemudahan dalam proses penyimpanan hingga distribusinya.<BR>
                    Namun tidak semua kardus dapat didaur ulang begitu saja. Ada dua jenis kardus yang perlu kamu ketahui.<BR></p>
                  <ol class="mb-3 text-justify">
                    <li>Kardus Bergelombang, kardus ini biasanya dibentuk menjadi boks cokelat yang umumnya digunakan untuk mengemas barang. Kardus bergelombang terdiri dari tiga lapis kardus, sehingga lebih kuat dan tidak mudah rusak.</li>
                    <li>Kardus yang terbuat dari katon atau paperboard, kardus Kardus seperti ini biasanya hanya terdiri dari satu lapis dan digunakan untuk boks sepatu atau makanan.</li>
                  </ol>
                  <p class="mb-3 text-justify">Kardus yang didaur ulang dapat berguna untuk kemudian dijadikan bubur kertas lagi dan dibuat menjadi kardus baru, sehingga selain mengurangi sampah, kardus daur ulang juga dapat mengurangi pohon yang harus ditebang untuk membuat bubur kertas lagi.<BR>
                    Ada juga beberapa jenis kardus yang tidak bisa didaur ulang. Misalnya kotak bekas pizza atau makanan lainnya yang terkena minyak. Kardus seperti ini biasanya sudah tidak bisa lagi didaur ulang dan tidak berguna lagi. Begitu juga kardus bekas wadah jus atau susu yang sudah basah yang tidak bisa didaur ulang lagi.<BR>
                    Jika kamu kreatif, kardus bekas bisa kamu manfaatkan sebagai bahan kerajinan yang bisa dijual kembali sehingga memiliki nilai jual yang tinggi, misalkan membuat vas bunga, miniatur, tempat pensil, bingkai foto dan lain-lain. <BR>
                    Tidak susah untuk mendapatkan kardus bekas, biasanya kardus bekas banyak terdapat di toko. Kamu bisa memintanya atau membelinya dengan harga yang sangat murah. Dengan imajinasimu, kardus yang tak bernilai bisa menjadi barang baru yang bernilai cukup tinggi.<BR><BR>
                    Bagaimana menarik bukan? Yuk coba memulainya! Dengan begitu kamu dapat menjaga kelestarian lingkungan dengan mengurangi jumlah sampah :)</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fas fa-times fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fas fa-times"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Portfolio Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Limbah Kaleng</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Portfolio Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets/img/portfolio/kaleng2.jpg') ?>" alt="kaleng2">
                  <!-- Portfolio Modal - Text -->
                  <p class="mb-3 text-justify">Kaleng adalah lembaran baja yang disalut timah. Bagi orang awam, kaleng sering diartikan sebagai tempat penyimpanan atau wadah yang terbuat dari logam dan digunakan untuk mengemas makanan, minuman, atau produk lain. Dalam pengertian ini, kaleng juga termasuk wadah yang terbuat dari aluminium. Kaleng merupakan jenis bahan anorganik, sehingga kaleng tidak mudah terurai secara alami<BR>
                    Kaleng merupakan jenis bahan anorganik, sehingga kaleng tidak mudah terurai secara alami. Meskipun begitu, banyak produsen yang menggunakan kaleng sebagai kemasan produknya. Kaleng dipilih karena sifatnya yang kedap udara sehingga dianggap lebih steril dibanding dengan kemasan lain.<BR>
                    Kaleng yang tak terpakai akan menumpuk dan mengakibatkan limbah pada lingkungan. Kaleng yang dikubur di dalam tanah akan sulit terurai, sehingga memicu korosif dan karat. Kaleng yang korosif ini akan mengandung beberapa logam berat yang nantinya akan terbawa dalam air tanah. Tetapi dengan ketrampilan dan kerajinan tangan, kaleng bekas ini dapat berubah menjadi barang-barang yang bermanfaat yang indah dan memiliki nilai jual yang mahal.<BR>
                    Berbagai jenis kerajinan dari kaleng bekas bisa kamu buat, yang paling mudah adalah menjadikannya pot tanaman di kebun. Dengan sedikit polesan, kaleng bekasmu akan terlihat lebih menarik dan semakin memperindah kebun rumahmu. Selain dijadikan pot tanaman, kaleng bekas juga bisa dikreasikan menjadi kerajinan yang lain yang tak kalah lebih menarik,
                    seperti keranjang atau celengan. Dengan kreasi dan imajinasimu, kamu bisa membuat keranjang dan celengan yang unik dan menarik sehingga memiliki nilai jual yang tinggi.<BR><BR>
                    Bagaimana menarik bukan? Yuk coba memulainya! Dengan begitu kamu dapat menjaga kelestarian lingkungan dengan mengurangi jumlah sampah :)</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fas fa-times fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fas fa-times"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Portfolio Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Limbah Plastik</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Portfolio Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets/img/portfolio/plastik2.jpg') ?>" alt="plastik2">
                  <!-- Portfolio Modal - Text -->
                  <p class="mb-3 text-justify"><I>"Dulu Selamatkan Bumi, Sekarang Penyumbang Sampah Terbesar di Bumi"</I>, kalimat itu ditujukan kepada plastik. Pada awal penciptaannya oleh Sten Gustaf Thulin pada tahun 1959, plastik dibuat dengan tujuan untuk membantu lingkungan. Alasan Thulin menciptakan kantong plastik adalah untuk mengganti kantong kertas. Dalam sejarahnya, saat Perang Dunia II berkecamuk, industri plastik sintesis berjaya. Hal ini karena adanya tuntutan untuk melestarikan sumber daya alam yang langka.<BR>
                    Setelah perang, terjadi pergerseran persepsi, dimana yang awalnya plastik sangat dipuja karna dianggap sebagai penyelamat bumi justru berbanding terbalik. Sampah plastik tersebar di lautan yang pertama kali teramati pada tahun 1960-an. Kesadaran tentang isu lingkungan pun menyebar dan membuat plastik dipandang negatif. Sejak 1970-an hingga kini, plastik menjadi limbah yang diwaspadai.<BR>
                    Saat ini manusia tidak dapat lepas dari penggunaan plastik. Plastik selalu digunakan dalam berbagai keperluan sehari-hari, misalnya untuk tempat minuman, membungkus makanan, tampat belanjaan dan masih banyak lagi. Plastik dipakai karena ringan, tidak mudah pecah, harganya murah, dan mendapatkannya pun sangat mudah. Tetapi banyak dari masyarakat tidak menyadari bahaya yang akan ditimbulkan akibat penggunaan plastik terhadap kesehatan mereka sendiri dan terhadap lingkungan sekitar.<BR>
                    Limbah plastik adalah momok yang mengerikan bagi bumi, apabila tidak segera teratasi, plastik dapat mencekik planet kita ini. Sifatnya yang anorganik membuat plastik sulit diurai lingkungan secara alami.Bila menumpuk maka akan mengotori lingkungan kita bahkan sudah sering kita lihat gambaran satwa-satwa di sekitar laut yang mati akibat memakan plastik. Tidak hanya satwa, plastik pun masuk ke dalam tubuh manusia dalam bentuk mikroplastik lewat makanan, minuman, bahkan udara yang kita hirup.<BR>
                    Kita bisa bantu membebaskan bumi dari jeratan plastik. Mulai dari perubahan gaya hidup yang hatus dimulai dari sekarang juga. Caranya;</p>
                  <ol class="mb-3 text-justify">
                    <li>Kurangi penggunaan plastik.</li>
                    <li>Sampah plastik harus dipisahkan dengan sampah organik, sehingga dapat didaur ulang.</li>
                    <li>Jangan membuang sampah plastik sembarangan.</li>
                    <li>Sampah plastik jangan dibakar</li>
                  </ol>
                  <p class="mb-3 text-justify">Kamu bisa menggunakan kreatiftas dan imajinasimu untuk mengubah sampah plastik menjadi berbagai kerajinan yang memiliki nilai jual yang tinggi. Seperti tas dari bekas bungkus plastik makanan, sabun, atau minuman sachet. Selain itu kamu juga bisa membuat vas bunga dari botol bekas, dengan sedikit polesan dan hiasan kamu bisa mengubah bentuk botol bekas minuman yang tak ternilai menjadi barang baru yang bernilai jual tinggi. Dan masih banyak lagi kerajinan yang kamu dapat buat dari limbah plastik.<BR><BR>
                    Bagaimana menarik bukan? Yuk coba memulainya! Dengan begitu kamu dapat menjaga kelestarian lingkungan dengan mengurangi jumlah sampah :)</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fas fa-times fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fas fa-times"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Portfolio Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Limbah Kain</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Portfolio Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets/img/portfolio/kain2.jpg') ?>" alt="kain2">
                  <!-- Portfolio Modal - Text -->
                  <p class="mb-3 text-justify">Limbah kain atau biasanya disebut dengan kain perca merupakan sisa kain yang sudah tidak terpakai dari proses penjahitan. Kain perca biasanya kurang dimanfaatkan dan dibiarkan menumpuk kemudian dibuang, namun sebenarnya kain perca dapat dimanfaatkan kembali. Limbah tekstil ini apabila dibiarkan tidak ditangani dengan baik dapat memberikan dampak yang buruk bagi lingkungan alam sekitar. Hal ini karena limbah tekstil memiliki karakteristik seperti berikut;</p>
                  <ol class="mb-3 text-justify">
                    <li>Sulit menyatu dengan lingkungan alam, sisa potongan kain akan sulit hancur meskipun sudah bertahun-tahun lamanya tertimbun di dalam tanah, terlebih lagi jika kain itu terbuat dari bahan serat sintesis dan bukan serat alami.</li>
                    <li>Dapat merusak biota yang berada di dalam tanah dalam jangka waktu tertentu, akibat dari tidak dapat terurainya sisa potongan kain seiring berjalannya waktu maka hal ini dapat membawa dampak berupa rusaknya biota tanah dimana sisa potongan kain ini dibuang.</li>
                    <li>Apabila dibakar asapnya dapat mencemari udara, asap dan bau yang ditimbulkan bisa mengganggu pernafasan dan iritasi mata.</li>
                    <li>Dapat menjadi media berkembangha bibit penyakit, potongan kain yang bercampur dengan sampah yang lain akan menjadi media yang baik bagi berkembangnya bibit-bibit penyakit.</li>
                    <li>Menyumbat saluran-saluran air, potongan kain ini lama-kelamaan akan membuentk gumpalan yang kemudia akan menyumbat aliran air sehingga mengakibatkan banjir. Selain itu, limbah kain yang dibuang disungai juga akan mengotori sungai tersebut yang nantinya juga akan berdampak pada sekitarnya seperti banjir.</li>
                  </ol>
                  <p class="mb-3 text-justify">Lalu bagaimana solusi untuk mengatasi limbah kain perca tersebut?<BR>
                    Solusinya yaitu menafaatkan kembali sisa potongan kain itu dengan mengolahnya menjadi barang baru yang lebih bernilai, seperti keset, dompet, boneka, gantungan kunci, bunga hias, sarung bantal, dan masih banyak lagi lainnya.<BR>
                    Bahan yang mudah dicari dan harga produksi yang murah dapat kamu manfaatkan sebagai peluang bisnis dengan mengambil keuntungan dari kain perca ini. Kamu dapat membuat berbagai kerajinan dari kain perca ini, cukup bermodalkan imajinasi dan kreatifitasmu, kamu dapat dapat melakukannya.<BR><BR>
                    Bagaimana menarik bukan? Yuk coba memulainya! Dengan begitu kamu dapat menjaga kelestarian lingkungan dengan mengurangi jumlah sampah :)</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fas fa-times fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fas fa-times"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Portfolio Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Limbah Minyak</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Portfolio Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets/img/portfolio/minyak2.jpg') ?>" alt="minyak2">
                  <!-- Portfolio Modal - Text -->
                  <p class="mb-3 text-justify">Limbah minyak yang sering kita jumpai adalah minyak jelantah atau minyak sisa menggoreng makanan dalam proses memasak. Dengan kata lain, minyak jelantah adalah minyak goreng bekas pakai yang sebenarnya adalah limbah yang mengandung senyawa-senyawa bersifat karsinogenik yang dapat memicu terjadinya kanker. Senyawa karsinogenik ini timbul ketika minyak dipakai atau dipanaskan saat menggoreng.<BR>
                    Usaha untuk mengolah kembali minyak jelantah menjadi minyak goreng tidak dimungkinkan sekalipun telah melalui tahapan penyaringan, penjernihan dan distilasi. Karena, minyak bekas pakai adalah jenis limbah yang berbahaya bagi kesehatan manusia, dan jika dibuang secara sembarangan berpotensi menjadi limbah B3 (berbahaya dan beracun). Apabila tidak dikelola dengan baik, kandungan senyawa dengan karakteristik sebagai limbah B3 membuat minyak jelantah berpotensi meracuni ekosistem, mengganggu keseimbangan BOD <I>(biological oxide demand)</I> dan COD <I>(chemical oxide demand)</I> pada badan-badan yang sangat berperan menopang kehidupan biota.<BR>
                    Minyak jelantah sering kali tidak diperhatikan, sehingga menjadi persoalan yang kompleks yang mengancam kelestarian lingkungan. Sebagian besar sektor rumah tangga dan perusahaan pengolah makanan, termasuk warung makan, restoran dan lainnya masih membuang sisa minyak jelantah ke saluran air sekalipun dalam jumlah kecil, tetapi hal ini akan berakibat pada ekosistem yang terdapat di dalam air karena minyak akan mengendap di dasar air. Selain itu ada juga restoran yang mencampur minyak jelantah dengan bahan kimia agar beku hingga mudah dibuang, namun saat berada di tempat pembuangan akhir, jika minyak jelantah ini terpapar sinar matahari maka minyak jelantah akan mencair, tentunya hal ini juga mengganggu kesuburan tanah yang berada di tempat pembuangan tersebut. Dilain sisi ada juga restoran yang tidak membuang limbah minyak jelantahnya tersebut, justru memanfaatkan minyak jelantah ini untuk dijual kembali ke warung-warung kecil. Hal ini sangatlah berbahaya, karena minyak jelantah seharusnya tidak bisa dipakai lagi karena telah mengandung senyawa karsinogenik yang dapat memicu kanker.<BR>
                    Tahukah kamu, jika minyak jelantah yang berwarna coklat kehitaman ini dapat diubah menjadi sabun? Pasti kamu terkejut.</p>
                  <ol class="mb-3 text-justify">
                    <li>Secara ringkas, bahan yang digunakan adalah Natrium Hidroksida (NaOH) atau lebih dikenal dengan soda api dicampur air kemudian tunggu agar panasnya menguap. Ini adalah bahan alkali, material utama membuat sabun.</li>
                    <li>Di wadah lain, minyak jelantah yang sudah disaring. Ini adalah asam lemaknya. Bisa juga menggunakan lemak nabati lain seperti minyak kelapa atau zaitun.</li>
                    <li>Bahan alkali dan asam lemak dicampur, diaduk perlahan sampai mengental. Bisa menggunakan pengaduk manual atau mesin asal kecepatannya rendah. Makin rata makin baik, sehingga tak menggumpal.</li>
                  </ol>
                  <p class="mb-3 text-justify">Ini disebut proses saponifikasi, suatu proses di mana asam lemak direaksikan dengan natrium atau kalium hidroksida untuk menghasilkan garam asam lemak atau sabun.<BR>
                    Ketika menggunakan NaOH maka akan menghasilkan sabun padat. Jika menggunakan kalium hidroksida (KOH) maka akan menghasilkan sabun lembut, dilarutkan ke dalam air menjadi sabun cair.<BR>
                    Soda api terkenal sebagai bahan kimia kuat untuk membersihkan karat atau kerak di pipa. Karena itu kerap diresepkan untuk menanggulangi mampet. Namun, efek alkali ini akan hilang jika sudah mengalami saponifikasi dan didiamkan minimal 2 minggu.<BR>
                    Nilai jual sabun yang terbuat dari minyak jelantah ini cukup mahal. Tak perlu khawatir jika kamu tidak bisa membuatnya, kamu bisa membawa minyak jelantahmu ke tempat pengolahannya.<BR><BR>
                    Bagaimana menarik bukan? Yuk coba memulainya! Dengan begitu kamu dapat menjaga kelestarian lingkungan dengan mengurangi jumlah sampah :)</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fas fa-times fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fas fa-times"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Portfolio Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Limbah Kertas</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Portfolio Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets/img/portfolio/kertas2.jpg') ?>" alt="kertas2">
                  <!-- Portfolio Modal - Text -->
                  <p class="mb-3 text-justify">Kertas merupakan salah satu kebutuhan manusia yang sering digunakan dalam kehidupan sehari-hari. Kertas dikenal sebagai media utama untuk menulis, mencetak serta melukis dan banyak kegunaan lain yang dapat dilakukan dengan kertas. Banyak kertas yang hanya digunakan sekali di satu sisi dan kemudia dibuang begitu saja.Sampah kertas termasuk dalam golongan sampah <I>“Non-biodegradable”</I> dengan sifat <I>“Recyclable”</I>, yaitu sampah yang tidak bisa diurai oleh proses bilogi namun dapat diolah dan digunakan kembali karena memiliki nilai secara ekonomi.<BR>
                    Fakta-fakta penggunaaan kertas :</p>
                  <ol class="mb-3 text-justify">
                    <li>Satu rim HVS menghabiskan sebatang pohon berusia minimal 5 tahun.</li>
                    <li>Untuk mendapatkan lembaran kertas berkualitas baik diperlukan campuran sebatang pohon berkayu keras dengan sebatang pohon berkayu lunak.</li>
                  </ol>
                  <p class="mb-3 text-justify">Kita sering kali melihat kertas-kertas yang dibuang secara sia-sia oleh orang yang tidak memilki kesadaran atas fungsi dari kertas tersebut. Jika sampah kertas ini dibiarkan menumpuk maka akan menimbulkan dampak negatif bagi lingkungan. Lingkungan akan terlihat kotor, sehingga cara yang sering dilakukan oleh kebanyakan orang yaitu dengan membakar sampah kertas tersebut. Padahal jika dilakukan pembakaran kertas ditempat terbuka dapat menimbulkan efek rumah kaca, menipisnya lapisan ozon, menimbulkan bau yang tidak sedap, dan lain-lain.<BR>
                    Ada beberapa cara untuk menanggulangi dan mencegah menumpuknya limbah kertas yaitu dengan cara <B>5R</B> <I>Recycle</I> (daur ulang), <I>Reduce</I> (mengurangi), <I>Reuse</I> (gunakan kembali), <I>Replace</I> (mengganti), dan <I>Recovery</I> (memungut). ). Cara ini dapat dilakukan oleh siapa saja dan dimana saja serta tidak memungut biaya yang besar. Dengan cara <B>5R</B> ini dapat memberikan dampak yang besar bagi penanganan sampah yang sering menjadi permasalahan di sekitar kita.<BR>
                    Kamu bisa mendaur ulang kertas lamamu menjadi kertas baru, caranya mudah, siapkan bahan dan peralatan berikut;</p>
                  <ul class="mb-3 text-justify">
                    <li>Kertas bekas</li>
                    <li>Blender</li>
                    <li>Ember</li>
                    <li>Triplek atau papan</li>
                    <li>Kain</li>
                    <li>Screen sablon atau bingkai kayu dengan kain kasa seukuran kertas yang diinginkan</li>
                    <li>Lem Kayu</li>
                    <li>Pewarna alami, dipilihnya bahan ini karna tidak mengandung logam berat seperti yang terkandung dalam bahan pewarna sintesis, sehingga tidak merusak tanah bila air proses daur ulang dibuang ke tanah. Cobalah beberapa bahan berikut untuk memilih warna yang kamu suka<BR>
                      kunyit menghasilkan warna kuning,<BR>
                      daun jati menghasilkan warna merah,<BR>
                      daun pandan menghasilkan warna hijau,<BR>
                      arang menghasilkan warna hitam,<BR>
                      bunga telang menghasilkan warna biru</li>
                  </ul>
                  <p class="mb-3 text-justify">Cara Membuatnya : </p>
                  <ol class="mb-3 text-justify">
                    <li>Rendam kertas selama sehari semalam.</li>
                    <li>Blender kertas yang sudah direndam dengan perbandingan air : kertas = 3 : 1 hingga menjadi bubur kertas (pulp).</li>
                    <li>Masukkan <I>pulp</I> ke dalam ember yang telah diisi air seperempatnya.</li>
                    <li>Campurkan dengan pewarna alami secukupnya.</li>
                    <li>Larutkan sedikit lem kayu sebanyak satu sampai dua sendok makan dengan air dan campurkan dengan <I>pulp</I>, aduk hingga rata.</li>
                    <li>Siapkan papan atau triplek yang sebelumnya telah dilapisi dengan kain. Kemudian basahi papan dengan air.</li>
                    <li>Masukkan screen ke dalam ember, saring pulp hingga air agak hilang dan ratakan. Saat menyaring jangan terlalu tebal.</li>
                    <li>Letakkan screen secara terbalik di atas papan, gogok screen atau kain kasanya dengan perlahan sehingga pulp akan terlepas dari screen dan menempel pada papan.</li>
                    <li>Tutup <I>pulp</I> di atas papan dengan kain yang sebelumnya telah dibasahi air.</li>
                    <li>Ulangi langkah nomor tujuh sampai sembilan hingga beberapa kali untuk mendapatkan kertas daur ulang beberapa lapis sekaligus.</li>
                    <li>Tutup dengan papan atau triplek dan berikan pemberat di atasnya untuk mengepres.</li>
                    <li>Biarkan selama kurang lebih satu jam hingga kandungan air berkurang, kemudian jemur dibawah sinar matahari.</li>
                    <li>Setelah kering kainnya dapat dibuka dengan hati-hati. Atau jika ingin hasilnya lebih rapi, sebelumnya dapat disetrika terlebih dahulu.</li>
                    <li>Selesai. Kertas hasil daur ulang telah jadi dan dapat dimanfaatkan untuk membuat aneka kerajinan tangan.</li>
                  </ol>
                  <p class="mb-3 text-justify">Ada banyak kerajinan yang terbuat dari kertas bekas yang bisa kamu buat. Contohnya tempat pensil di meja belajarmu, origami, dan masih banyak lagi lainnya. Tentunya untuk membuat kerajinan dari kertas bekas kamu membutuhkan kreatifitas dan imajinasimu. Dari kertas bekas yang tak ternilai, kamu bisa mengubahnya menjadi barang bernilai cukup tinggi. <BR><BR>
                    Bagaimana menarik bukan? Yuk coba memulainya! Dengan begitu kamu dapat menjaga kelestarian lingkungan dengan mengurangi jumlah sampah :)</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fas fa-times fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('assets/js/jqBootstrapValidation.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/contact_me.js'); ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets/js/freelancer.min.js'); ?>"></script>
  </body>

  </html>