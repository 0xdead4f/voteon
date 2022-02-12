<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KataKembara - E voting</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/home-css/img/logo.png" rel="icon">
    <link href="<?= base_url(); ?>assets/home-css/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= base_url(); ?>assets/home-css/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= base_url(); ?>assets/home-css/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/home-css/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/home-css/lib/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/home-css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= base_url(); ?>assets/home-css/css/style.css" rel="stylesheet">


</head>

<body>

    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="#intro" class="scrollto"><img src="<?= base_url(); ?>assets/home-css/img/logo.png" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="<?= base_url(); ?>">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li class="buy-tickets"><a href="<?= base_url(); ?>pilih">E-Voting</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">The <span>VoteOn</span> <br> E Voting</h1>
            <p class="mb-4 pb-0">Pemilihan Kepala Desa Putat Nutug</p>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            <a href="#login" class="about-btn scrollto">Vote</a>
        </div>
    </section>

    <!--==========================
      About Section Bagian NGURAH
    ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2>About voteOn</h2>
                    <p>voteOn adalah portal pemilihan umum bagi warga desa Putat Nutug untuk memilih kepala desa pada tahun 2022.
                        Website ini dibangun dengan HTML , CSS dan PHP dengan menggunakan framework bootstrap. Website ini dibuat untuk memenuhi project tugas akhir mata kuliah Pemrograman Web tingkat III RPLK
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3>Syarat Memilih</h3>
                    <li>Warga Negara Indonesia </li>
                    <li>Warga yang telah genap berusia tujuh belas tahun </li>
                    <li>Terdaftar sebagai pemilih di DPT</li>
                    <li>Tidak sedang terganggu jiwa/ingatannya</li>
                    <li>Tidak sedang dicabut hak pilihnya berdasarkan keputusan pengadilan yang telah mempunyai hukum tetap,</li>
                </div>
                <div class="col-lg-5">
                    <h3>Instruction</h3>
                    <li>Masuk ke menu login</li>
                    <li>Masukan NIK dan token</li>
                    <li>Klik foto calon kepala Desa yang ingin dipilih</li>
                    <li>Klik Submit</li>

                </div>
            </div>
        </div>
    </section>

    <!--==========================
      Login Section
    ============================-->
    <section id="login">

    </section>



    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>KataKembara</strong> 2022
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">Adiva, Ngurah, Shakira</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="<?= base_url(); ?>assets/home-css/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/home-css/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?= base_url(); ?>assets/home-css/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/home-css/lib/easing/easing.min.js"></script>
    <script src="<?= base_url(); ?>assets/home-css/lib/superfish/hoverIntent.js"></script>
    <script src="<?= base_url(); ?>assets/home-css/lib/superfish/superfish.min.js"></script>
    <script src="<?= base_url(); ?>assets/home-css/lib/wow/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/home-css/lib/venobox/venobox.min.js"></script>
    <script src="<?= base_url(); ?>assets/home-css/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="<?= base_url(); ?>assets/home-css/js/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= base_url(); ?>assets/home-css/js/main.js"></script>
</body>

</html>