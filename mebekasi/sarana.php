<?php
require_once "../core/init.php";
if( !isset($_SESSION['username'])){
  header('Location: ../login.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ShareMeBekasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="../css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="../css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="../css/magnific-popup.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- Modernizr JS -->
  <script src="../js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

</head>
<body>

  <div class="colorlib-loader"></div>

  <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div id="colorlib-logo"><a href="masyarakat.php">ShareMeBekasi</a></div>
            </div>
            <div class="col-md-10 text-right menu-1">
              <ul>
                <li class="active"><a href="masyarakat.php">Beranda</a></li>
                <li class="has-dropdown">
                  <a href="masyarakat.php">Laporkan</a>
                  <ul class="dropdown">
                    <li><a href="sarana.php">Sarana dan Prasana</a></li>
                    <li><a href="instansi.php">Pelayanan Instansi Pemerintah Bekasi</a></li>
                  </ul>
                </li>
                <li class="has-dropdown">
                  <a href="masyarakat.php">Data Laporan</a>
                  <ul class="dropdown">
                    <li><a href="laporan.php">Data Laporan SarPras</a></li>
                    <li><a href="laporan1.php">Data Laporan Instansi Pemerintah</a></li>
                  </ul>
                </li>
                <li><a href="../logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>


    <section id="home" class="video-hero" style="height: 700px;">
      <div class="overlay"></div>
      <div class="display-t text-center">
        <div class="display-tc">
          <div class="container">
            <div class="col-md-12 col-md-offset-0">
              <div class="animate-box">
                <h2>Halaman Laporan Untuk Sarana dan Prasarana</h2>
                <p>Sampaikan Keluh Kesan Kalian Kepada Kami</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="colorlib-services colorlib-bg-white">
      <div class="container">
        <form action="sarana.php" method="post">
          <label><h3>Pilih Sarana</h3></label> <br><br>
          <select class="inputrounded" name="target">
            <option disabled selected>Pilih Salah Satu</option>
            <option value="trotoar">Trotoar</option>
            <option value="jembatan">Jembatan Penyebrangan</option>
            <option value="zebracross">Zebra Cross</option>
            <option value="halte">Halte Bus</option>
            <option value="terminal">Terminal</option>
            <option value="stasiun">Stasiun</option>
            <option value="lainnya">Lainnya...</option>
          </select> <br><br>
          <label><h3>Nomor Telfon</h3></label> <br>
          <p>Digunakan untuk melakukan verifikasi</p><br>
          <input type="number" name="telfon" class="inputrounded" placeholder="Nomor Telephone"><br><br>
          <label> <h3>Apa Keluhan Anda?</h3> </label> <br><br>
          <textarea name="saran" placeholder="Apa Keluhan Anda?" class="inputrounded"></textarea> <br>
          <input type="hidden" name="status" value="Tidak Aktif"><br><br>
          <input type="submit" name="submit" value="LAPORKAN" class="ghost-button-rounded-corners"> <br><br>
          <?php
          if(isset($_POST['submit'])){
          $username=$_SESSION['username'];
          $query = "SELECT * FROM user WHERE username = '$username'";
          $result = mysqli_query($link, $query);
          while($saran = mysqli_fetch_array($result)){
              $querysaran = "INSERT INTO saran (username, nama, telfon, saran, target, status) VALUES ('$username', '$saran[nama]', '$_POST[telfon]', '$_POST[saran]', '$_POST[target]',
               '$_POST[status]')";
              $resultsaran = mysqli_query($link, $querysaran);
            echo "<h3>Berhasil! Terima Kasih Telah Melapor</h3>";

           ?>
        </form>
        <?php
            }
          }
         ?>
      </div>
    </div>

    <div class="colorlib-blog">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">

          </div>
        </div>
      </div>
    </div>

    <footer id="colorlib-footer">
      <div class="container">
        <div class="row row-pb-md">
          <div class="col-md-4 colorlib-widget">
            <h4>Tentang ShareMeBekasi</h4>
            <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
            <p>
              <ul class="colorlib-social-icons">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                <li><a href="#"><i class="icon-dribbble"></i></a></li>
              </ul>
            </p>
          </div>
          <div class="col-md-4 colorlib-widget">
            <h4>Information</h4>
            <p>
              <ul class="colorlib-footer-links">
                <li><a href="#"><i class="icon-check"></i> Home</a></li>
                <li><a href="#"><i class="icon-check"></i> Gallery</a></li>
                <li><a href="#"><i class="icon-check"></i> About</a></li>
                <li><a href="#"><i class="icon-check"></i> Blog</a></li>
                <li><a href="#"><i class="icon-check"></i> Contact</a></li>
                <li><a href="#"><i class="icon-check"></i> Privacy</a></li>
              </ul>
            </p>
          </div>

          <div class="col-md-4 colorlib-widget">
            <h4>Contact Info</h4>
            <ul class="colorlib-footer-links">
              <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
              <li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
              <li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
              <li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copy">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br>
                Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
  </div>

  <!-- jQuery -->
  <script src="../js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="../js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="../js/jquery.waypoints.min.js"></script>
  <!-- Stellar Parallax -->
  <script src="../js/jquery.stellar.min.js"></script>
  <!-- YTPlayer -->
  <script src="../js/jquery.mb.YTPlayer.min.js"></script>
  <!-- Owl carousel -->
  <script src="../js/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/magnific-popup-options.js"></script>
  <!-- Counters -->
  <script src="../js/jquery.countTo.js"></script>
  <!-- Main -->
  <script src="../js/main.js"></script>

</body>
</html>
