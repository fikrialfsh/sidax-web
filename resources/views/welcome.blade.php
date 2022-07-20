<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIDAX-Sistem Deteksi Hoax</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Lato:400,400i,700,700i" rel="stylesheet">

  <!-- Any Chart -->
  <script src="https://cdn.anychart.com/samples/tag-cloud/the-old-man-and-the-sea/ignore-items.js"></script>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-tag-cloud.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/vendor/modal-video/css/modal-video.min.css') }}" rel="stylesheet}" type="text/css">
  <link href="{{ asset ('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/vendor/aos/aos.css') }}" rel="stylesheet" type="text/css">
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   <!-- Font Awesome icons (free version)-->
   <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
   <!-- Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
   <!-- <link href="{{asset ('css/styles.css')}}" rel="stylesheet" /> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('DataTables/datatables.min.css')}}">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <!-- <link rel="icon" href="{{ asset ('assets/img/favicon.ico') }}" type="image/x-icon"/> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet" type="text/css">

  <!-- Chart JS -->


  <!-- =======================================================
  * Template Name: eStartup - v2.2.1
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="/"><span>SI</span>DAX</a></h1>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#main">Beranda</a></li>
          <li><a href="#contact">Periksa Berita</a></li>
          <!-- <li><a href="#get-started">Tentang</a></li> -->
          <li><a href="#team">Statistik</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-out">
      <h1></h1>
      <h1>Sistem Deteksi Hoax</h1>
      <!-- <h3>Sistem Deteksi Hoaks</h3> -->
      <!-- <img src="{{ asset ('assets/img/landing-page.jpg') }}" style="width: 350px" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100"> -->
      <a href="#contact" class="btn-get-started scrollto">Periksa Berita</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
 <!-- End Get Started Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section">

      <div class="container" data-aos="fade-up">
          <div class="col-lg-12 col-md-6">
            <div class="section-title text-center">
              <h2>Coba Periksa</h2>
              <p>Kamu bisa memasukkan teks berita yang akan dicari kebenarannya</p>
            </div>
            <div class="form">
              <form action="/" method="post" role="form" class="php-email-form">
                @csrf
                <!-- <div class="form-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email" data-rule="minlen:8" data-msg="Masukkan paling sedikit 8 karakter" />
                  <div class="validate"></div>
                </div> -->
                <div class="form-group">
                  <textarea class="form-control" name="text" rows="5" data-rule="required" data-msg="Tuliskan masukkan anda di sini..." placeholder="masukkan teks berita"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message"></div>
                  <a class='resetbutton btn btn-primary' style='display: none' href='/'>Refresh / Deteksi Ulang</a>
                </div>
                <div class="text-center"><button type="submit">Periksa</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>

    <div class="copyrights">
      <div class="container">
        <p> <b> Copyright &copy; <script>document.write(new Date().getFullYear())</script>SiDaX. All rights reserved.</b></p>
      </div>
    </div>

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset ('assets/vendor/modal-video/js/modal-video.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/hoverIntent/hoverIntent.js') }}"></script>
  <script src="{{ asset ('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{   asset ('assets/js/main.js')  }}"></script>
  <!-- DataTables -->
  <script src="{{asset('DataTables/datatables.min.js')}}"></script>
 
</body>

</html>
