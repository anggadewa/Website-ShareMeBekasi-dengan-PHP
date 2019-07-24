<?php
require_once "core/init.php";
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
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
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
              <div id="colorlib-logo"><a href="index.php">ShareMeBekasi</a></div>
            </div>
            <div class="col-md-10 text-right menu-1">
              <ul>
                <li class="active"><a href="index.php">Beranda</a></li>
                <li class="has-dropdown">
                  <a href="#">Masyarakat</a>
                  <ul class="dropdown">
                    <li><a href="registrasi.php">Registrasi</a></li>
                    <li><a href="login.php">Login</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <section id="home" class="video-hero" style="height: 700px;" data-section="home">
      <div class="overlay"></div>
      <div class="display-t text-center">
        <div class="display-tc">
          <div class="container">
            <div class="col-md-12 col-md-offset-0">
              <div class="animate-box">
                <br><br><br>
                <h2>Halaman Registrasi</h2>
                <div class="row">
                  <form action="registrasi.php" method="post">
                    <div class="col-md-6">
                      <label><h3>N.I.K</h3></label> <br>
                      <input type="text" name="nik" placeholder="Masukan N.I.K Anda" class="inputrounded"> <br><br>
                      <label><h3>Nama</h3></label> <br>
                      <input type="text" name="nama" placeholder="Masukan Nama Anda" class="inputrounded"> <br><br>
                      <label><h3>Username</h3></label> <br>
                      <input type="text" name="username" placeholder="Masukan Username Anda" class="inputrounded"> <br><br>
                    </div>

                    <div class="col-md-6">
                      <label><h3>Password</h3></label> <br>
                      <input type="password" name="password" placeholder="Masukan Password Anda" class="inputrounded"> <br><br>
                      <label><h3>Email</h3></label> <br>
                      <input type="email" name="email" placeholder="Masukan Email Anda" class="inputrounded"> <br><br>
                      <input type="submit" name="submit" value="REGISTRASI" class="ghost-button-rounded-corners"> <br><br>
                    </div>

                    <?php
                    if(isset($_POST['submit'])){
                      $nik = $_POST['nik'];
                      $nama = $_POST['nama'];
                      $username = $_POST['username'];
                      $password = md5($_POST['password']);
                      $email = $_POST['email'];

                      if ( !empty(trim($nik)) && !empty(trim($nama)) && !empty(trim($username)) && !empty(trim($password)) && !empty(trim($email)) ) {
                        if( uji($nik) ){
                          if ( regis($nik, $nama, $username, $password, $email) ){
                            ?>
                            <h3 class="alert alert-success" role="alert">Berhasil Terdaftar</h3> <br><br>
                            <?php
                          }
                        } else{
                          ?>
                          <h3 class="alert alert-danger" role="alert">Gagal Mendaftar NIK/No. KTP Sudah Terdaftar</h3><br><br>
                          <?php
                        }
                      }else{
                        ?>
                        <h3 class="alert alert-warning" role="alert">Data Tidak Boleh Kosong</h3><br><br>
                        <?php
                      }
                    }
                    ?>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
  </div>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Stellar Parallax -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- YTPlayer -->
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <!-- Owl carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Counters -->
  <script src="js/jquery.countTo.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>

</body>
</html>
