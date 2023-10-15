<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Css -->
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/reset.css">

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
          <li><a href="index.php" class="active">Home</a></li>
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
 </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Bem-vindo ao <span>InkMask</span> uma plataforma digital para a criação e compartilhamento de histórias em quadrinhos</h2>
          <p>
            Onde as páginas ganham vida e os heróis se revelam. Descubra um universo vibrante de histórias em quadrinhos, mergulhando em narrativas épicas e conectando-se com personagens cativantes.
          </p>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    
    <section id="gallery" class="gallery">
      <section class="container-cafe-manha">
        <div class="container-cafe-manha-titulo">
            <h3>Comics</h3>
            <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
        </div>
        <div class="container-cafe-manha-produtos">
          
            <div class="container-produto" >
                <div class="container-foto">
                    <img src="img/hqs-cover/batmanveneno01.jpg">
            </div>
                <p>Um Conto de Batman: <br> Veneno #1</p>
                <p>$12.00</p>
                <form action="about.php" method="post">
                  <button class="btnView" type="submit" name="hq_id" value="1">Vizualizar HQ</button>
                </form>
                
            </div>
            <div class="container-produto">
                <div class="container-foto">
                  <img src="img/hqs-cover/batmanveneno02.jpg">
                </div>
                <p>Um Conto de Batman: <br> Veneno #2</p>
                <p>$12.00</p>
                <form action="about.php" method="post">
                  <button class="btnView" type="submit" name="hq_id" value="2">Vizualizar HQ</button>
                </form>
            </div>
            <div class="container-produto">
                <div class="container-foto">
                    <img src="img/hqs-cover/batmanveneno03.jpg">
                </div>
                <p>Um Conto de Batman: <br> Veneno #3</p>
                <p>$12.00</p>
                <form action="about.php" method="post">
                  <button class="btnView" type="submit" name="hq_id" value="3">Vizualizar HQ</button>
                </form>
            </div>
            <div class="container-produto">
                <div class="container-foto">
                    <img src="img/hqs-cover/cavaleirodastrevas01.jpg">
                </div>
                <p>Batman: <br> O Cavaleiro das Trevas #1</p>
                <p>$25.00</p>
                <form action="about.php" method="post">
                  <button class="btnView" type="submit" name="hq_id" value="4">Vizualizar HQ</button>
                </form>
            </div>
            <div class="container-produto">
              <div class="container-foto">
                  <img src="img/hqs-cover/cavaleirodastrevas02.jpg">
              </div>
              <p>Batman: <br> Cavaleiro das Trevas #2</p>
              <p>$25.00</p>
              <form action="about.php" method="post">
                  <button class="btnView" type="submit" name="hq_id" value="5">Vizualizar HQ</button>
              </form>
          </div>
          <div class="container-produto">
            <div class="container-foto">
                <img src="img/hqs-cover/cavaleirodastrevas03.jpg">
            </div>
            <p>Batman: <br> Cavaleiro das Trevas #3</p>
            <p>$25.00</p>
            <form action="about.php" method="post">
              <button class="btnView" type="submit" name="hq_id" value="6">Vizualizar HQ</button>
            </form>
        </div>
      <div class="container-produto">
        <div class="container-foto">
            <img src="img/hqs-cover/piadamortal.jpg">
        </div>
        <p>Batman: <br> A Piada Mortal</p>
        <p>$25.00</p>
        <form action="about.php" method="post">
          <button class="btnView" type="submit" name="hq_id" value="8">Vizualizar HQ</button>
        </form>
    </div>
    <div class="container-produto">
      <div class="container-foto">
          <img src="img/hqs-cover/vdevingança.jpg">
      </div>
      <p>V de Vingança</p>
      <p>$40.00</p>
      <form action="about.php" method="post">
        <button class="btnView" type="submit" name="hq_id" value="9">Vizualizar HQ</button>
      </form>
  </div>

<div class="container-produto">
    <div class="container-foto">
        <img src="img/hqs-cover/watchmen01.jpg">
    </div>
    <p>Watchmen #1</p>
    <p>$10.00</p>
    <form action="about.php" method="post">
      <button class="btnView" type="submit" name="hq_id" value="10">Vizualizar HQ</button>
    </form>
</div>

<div class="container-produto">
  <div class="container-foto">
      <img src="img/hqs-cover/watchmen02.jpg">
  </div>
  <div class="container-desc">
    <p>Watchmen #2</p> 
    <p>$10.00</p>
    <form action="about.php" method="post">
      <button class="btnView" type="submit" name="hq_id" value="11">Vizualizar HQ</button>
    </form>
  </div>
</div>



<div class="container-produto">
  <div class="container-foto">
      <img src="img/hqs-cover/watchmen03.jpg">
  </div>
  <p>Watchmen #3</p>
  <p>$10.00</p>
  <form action="about.php" method="post">
    <button class="btnView" type="submit" name="hq_id" value="12">Vizualizar HQ</button>
  </form>
</div>
        </div>
    </section>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->
  
  
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