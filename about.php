<?php
$conn = new mysqli("localhost", "root", "", "database_inkmask");

if($conn->connect_error){
    die("Conexão falhou: ". $conn->connect_error);
}

$hq_id = $_POST['hq_id'];

$sql = "SELECT * FROM hq_table WHERE id = $hq_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $name = $row['name'];
  $url = $row['download_url'];
  $des = $row['descricao'];
  $preco = $row['preco'];
  $serie = $row['serie'];
} else {
  echo "HQ não encontrada.";
}

$img;


switch($hq_id){

  case 1:
    $img = "./img/hqs-cover/batmanveneno01.jpg";
    break;
  case 2:
    $img = "./img/hqs-cover/batmanveneno02.jpg";
    break;
  case 3:
    $img = "./img/hqs-cover/batmanveneno03.jpg";
    break;
  case 4:
    $img = "./img/hqs-cover/cavaleirodastrevas01.jpg";
    break;
  case 5:
    $img = "./img/hqs-cover/cavaleirodastrevas02.jpg";
    break;
  case 6:
    $img = "./img/hqs-cover/cavaleirodastrevas03.jpg";
    break;
  case 7:
    $img = "./img/hqs-cover/piadamortal.jpg";
    break;
  case 8:
    $img = "./img/hqs-cover/piadamortal.jpg";
    break;
  case 9:
    $img = "./img/hqs-cover/vdevingaça.jpg";
    break;
  case 10:
    $img = "./img/hqs-cover/watchmen01.jpg";
    break;
  case 11:
    $img = "./img/hqs-cover/watchmen02.jpg";
    break;
  case 12:
    $img = "./img/hqs-cover/watchmen03.jpg";
   break;
};

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="./img/LogoST.png" class="bi bi-camera"></i>
        <h1>InkMask</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="cadastrar-usuario.php">Cadastro</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <!-- End Header -->
  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2><?= $serie ?></h2>
            <a class="cta-btn" target="_blank" href="<?= $url ?>">Baixar HQ</a>



          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="<?= $img ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2><?= $name ?></h2>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nome:</strong> <span><?= $name ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Preço:</strong> <span><?= $preco ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Descrição:</strong></li>
                </ul> 
              </div>
            </div>
            <p class="py-3"><?= $des ?></p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

</main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IFSP</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="">2° Info</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>