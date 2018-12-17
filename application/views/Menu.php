<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STARK</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="../../assets/css/style.css">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/assets/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">STARK</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link js-scroll-trigger" href="#contact">login</a> -->
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Auth/index1') ?>"> Login </a> 
            </li>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="profil.html">Profil</a>
    <a class="dropdown-item" href="semuabencana.html">Donasi</a>
    <a class="dropdown-item" href="riwayat.html">Riwayat</a>
    <a class="dropdown-item" href="login.html">Sign out</a>

  </div>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>STARK</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <c class="lead">Sistem Relawan Berkompetensi</c><br>
            <p class="lead">Muda dan Berkompetensi</p>
            <!-- <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a> -->
            <a class="btn btn-primary btn-xl js-scroll-trigger"href="<?php echo site_url('Auth/register') ?>" role="button"> Daftarkan Dirimu Sekarang!</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="berita">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center " style="color:white;">Berita Terkini</h2>
            <hr>
          </div>
        </div>
        <div class="row">

        <div class="col-sm-4 card" style="width: 18rem;">
          <a href="<?php echo site_url("Beritacontroller/viewberita1") ?> "><img class="card-img-top " src="<?php echo base_url(); ?>assets3/img/longsor1.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Longsor di Purwakarta</h5>
            <p class="card-text">Rumah di Purwakarta Tertimbun Longsor, 4 Warga Tewas & 5 Luka Berat</p>
            <p class="text-right"><a href="<?php echo site_url("Beritacontroller/viewberita1") ?>" class="btn btn-warning">Baca Selengkapnya...</a></p>
          </div>
        </div>

          <div class="col-sm-4 card" style="width: 18rem;">
          <a href="Beritacontroller/viewberita2"><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/gunungagung.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Gunung Agung Meletus</h5>
            <p class="card-text">Gunung Agung Meletus, Pengungsi Mencapai 43.358 jiwa.</p>
           <p class="text-right"><a href="<?php echo site_url("Beritacontroller/viewberita2") ?>"class="btn btn-warning">Baca Selengkapnya...</a></p>
        </div>
      </div>

          <div class="col-sm-4 card" style="width: 18rem;">
          <a href="Beritacontroller/viewberita3"><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/kebakaran1.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Kampus Undar Jombang Terbakar</h5>
            <p class="card-text">Kebakaran hebat menimpa Gedung Rektorat Kampus Undar Jombang, Jatim.</p>
           <p class="text-right"><a href="<?php echo site_url("Beritacontroller/viewberita3") ?>"class="btn btn-warning">Baca Selengkapnya...</a></p>
        </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 card" style="width: 18rem;">
          <a href="Relawan_controller/viewberita4"><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/tsunami.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Gempa dan Tsunami Sulteng</h5>
            <p class="card-text">Korban Gempa dan Tsumani yang melanda di Sulawesi Tengah terus bertambah. Jumlah korban meninggal 
              dunia hingga pukul 13.00 WIB mencapai 1.948 orang.</p>
            <p class="text-right"><a href="<?php echo site_url("Beritacontroller/viewberita4") ?>" class="btn btn-warning">Baca Selengkapnya...</a></p>
          </div>
        </div>

        <div class="col-sm-4 card" style="width: 18rem;">
          <a href="Beritacontroller/viewberita5"><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/banjir1.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Banjir Bandang di Aceh</h5>
            <p class="card-text">Banjir Bandang Terjang 4 Kecamatan dan 5 desa yang dihuni 130KK dan 444 jiwa di Kabupaten Aceh Tenggara, 84 rumah rusak setelah hujan deras mengguyur.</p>
           <p class="text-right"><a href="<?php echo site_url("Beritacontroller/viewberita5") ?>" class="btn btn-warning">Baca Selengkapnya...</a></p>
          </div>
        </div>

        <div class="col-sm-4 card" style="width: 18rem;">
          <a href="Beritacontroller/viewberita6"><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/longsorbrebes.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Tanah Longsor di Brebes</h5>
            <p class="card-text">Longsor menerjang sejumlah petani yang sedang bekerja, penyelamatan terhambat oleh kondisi tanah longsoran yang masih bergerak.</p>
           <p class="text-right"><a href="<?php echo site_url("Beritacontroller/viewberita6") ?>" class="btn btn-warning">Baca Selengkapnya...</a></p>
        </div>
        </div>
        </div>

          </div>  
    </section>
    <body class="center">
        <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Our Beautiful Team!</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class=" text-primary mb-3 sr-img-1"></i><img border-radius: 150px width=200px src="<?php echo base_url(); ?>assets3/img/raisha.jpg" alt="Card image cap">
              <h4 class="mb-3">Raisha Amini D.S.</h4>
              <p class="text-muted mb-0">Web Developer</p>
              <p class="text-muted mb-0">17523148</p>
              <p class="text-muted mb-0">Informatics</p>
               <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="text-primary mb-3 sr-icon-2"></i><img border-radius: 150px width=200px src="<?php echo base_url(); ?>assets3/img/tika.jpg" alt="Card image cap">
              <h4 class="mb-3">Aldhiyatika Amwin</h4>
              <p class="text-muted mb-0">Web Developer</p>
              <p class="text-muted mb-0">17523176</p>
              <p class="text-muted mb-0">Informatics</p>
               <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="text-primary mb-3 sr-icon-3"></i><img border-radius: 150px width=200px src="<?php echo base_url(); ?>assets3/img/dewi.JPG" alt="Card image cap">
              <h4 class="mb-3">Dewi Nadhiroh</h4>
              <p class="text-muted mb-0">Web Developer</p>
              <p class="text-muted mb-0">17523235</p>
              <p class="text-muted mb-0">Informatics</p>
               <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </body>


    <section id="galeri">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Kegiatan Relawan Pasca Bencana</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="text-primary mb-3 sr-icon-2"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/relawan1.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="text-primary mb-3 sr-icon-2"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/relawan2.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="text-primary mb-3 sr-icon-2"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/relawan3.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <i class="text-primary mb-3 sr-icon-2"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/relawan4.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <i class="text-primary mb-3 sr-icon-2"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/relawan5.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <i class="text-primary mb-3 sr-icon-2"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/relawan6.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <i class="text-primary mb-3 sr-icon-2"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/relawan7.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <i class="text-primary mb-3 sr-icon-2"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/relawan8.jpg" alt="Card image cap">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="info">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

 <!-- About -->
    <section id="about">
      <section class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About STARK</h2>
            <h3 class="section-subheading text-muted">Sistem Relawan Berkompetensi</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2018.Semester 2 RPL</h4>
                    <h4 class="subheading">Awal Mula Tugas dengan Tema Bencana</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted " font-family:"Impact">Mahasiswa Informatika angkatan 2017 diberikan tugas project untuk akhir semester pada mata kuliah Rekayasa Perangkat Lunak. Diberikan 10 kasus untuk setiap dan setiap kelompok memilih salah satu kasus dari 10 kasus tersebut.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2018</h4>
                    <h4 class="subheading">Zennial.Inc is born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Sebuah kelompok bernama Zennial.Inc mendapatkan sebuah kasus tentang pendataan relawan berkompetensi. Mereka membuat sebuah purwarupa yang bernama STARK. Dimana Masyarakat dapat mendaftarkan diri sebagai relawan, dan dapat mengikuti kegiatan relawan yang diselenggarakan oleh BNPB.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2018. Akhir semester 2</h4>
                    <h4 class="subheading">Expo</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Pada akhir semester 2, kelompok Zennial.Inc memamerkan purwarupa yang telah mereka buat kepada pengunjung yang hadir.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2018. Semester 3</h4>
                    <h4 class="subheading">De-mim is born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Pada mata kuliah Pengembangan Aplikasi Berbasis Web dan Sistem Jaringan Komputer memberikan sebuah project dengan tema yang sama seperti semester 2. Dimana project yang telah dibuat oleh Zennial.Inc dilanjutkan oleh De-mim yang diaplikasikan ke dalam web-based dan terhubung pada server dan router.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Our Contact</h2>
            <hr class="my-4">
            <p class="mb-5">Butuh bantuan? Silahkan Hubungi Kami di Bawah ini.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>085-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">de-mim@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>/assets/js/creative.min.js"></script>

  </body>

</html>
