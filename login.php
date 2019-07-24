<?php
require_once "core/init.php";
if($_SESSION){
  if($_SESSION['username']){
    header('Location: mebekasi/masyarakat.php');
  }
}

error_reporting(E_ALL & ~E_NOTICE);
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
                <h2>Halaman Login</h2>
                <div class="row">
                  <form action="login.php" method="post">
                    <input type="text" name="username" placeholder="&emsp;&emsp;&emsp;&ensp;Username" class="inputrounded"> <br><br>
                    <input type="password" name="password" placeholder="&emsp;&emsp;&emsp;&ensp;Password" class="inputrounded"> <br><br>
                    <input type="submit" name="submit" value="&emsp;LOGIN&emsp;" class="ghost-button-rounded-corners"> <br> <br>

                  </form>

                  <?php
                  if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $query = "SELECT * FROM user WHERE username='$username' ";
                    $result = mysqli_query($link, $query);

                    if(mysqli_num_rows($result) == 0){
                      echo "<h3 class='alert alert-warning' role='alert'>Gagal Login Username Atau Password Tidak Sesuai</h3>";
                    } else{
                      $row = mysqli_fetch_assoc($result);
                      $_SESSION['username']=$row['username'];
                      $_SESSION['level']=$row['level'];
                      $querrypas = "SELECT password FROM user WHERE username = '$username'";
                      $resultpas = mysqli_query($link, $querrypas);
                      $hash = mysqli_fetch_assoc($resultpas)['password'];
                      if($_SESSION['level'] == "warga"){
                        header('Location: mebekasi/masyarakat.php');
                      }
                      else if($_SESSION['level'] == "admin"){
                        header('Location: admin/admin.php');
                      }
                      else{
                        echo "<h3 class='alert alert-warning' role='alert'>Gagal Login Username Atau Password Tidak Sesuai</h3>";
                      }
                    }
                  }
                  ?>
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
