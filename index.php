<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WDMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>WDMS</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="team.php">Order Now</a></li>
         <li><a href="contact.php">Contact Us</a></li>
         <li><?php  if (isset($_SESSION['username'])) { ; ?>
        <p> 
                <li><a href="">Welcome</a></li>
                <strong> 
                    <li><a href=""><?php echo $_SESSION['username']; ?></a></li>
                </strong>
        </p>
        <?php } else {?>
        <a href="">Guest</a>
        <?php } ?>
        </li>
          <li class="dropdown"><a href="#"><span>My Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profile.php">My Profile </a></li>
               <li><a href="add_to_cart.php">My Cart</a></li>
                  <li><a href="team.php">My Order </a></li>
                  <li><a href="Forget.php">Change Password</a></li>
                  <li><?php  if (isset($_SESSION['username'])) { ; ?><a href="Login.php">Logout</a>
                  <?php } else {?>
                    <a href="Login.php">Login</a><?php } ?>
                  </li>
              </li>
            </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to the <span>Water Distribution Management System Web Platform</span></h2>
          <p class="animate__animated animate__fadeInUp">A water distribution system is a part of water supply network with components that carry potable water from a centralized treatment plant or wells to water consumers in order to adequately deliver water to satisfy residential, commercial, industrial and fire fighting requirements.</p>
          
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Simplicity</h2>
          <p class="animate__animated animate__fadeInUp">Ease of use, simple and intiutive design is our primary goal with this web platform.</p>
         
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Availability to every corner of the country</h2>
          <p class="animate__animated animate__fadeInUp">We push the boundaries to make service available to each and every part of this country as Water is the basic necessity for every living being on this planet.</p>
          
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <img src="assets/img/comunity.webp" class="img-fluid" alt="village">
             <!--  <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
              <h4 class="title"> <br/>Community and Villages</h4>
              <p class="description">Small Villages where no other water sources are available or feasible, can be met with sufficient quality and quantity.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              
              <img src="assets/img/school.webp" class="img-fluid" alt="school">
              <h4 class="title"><br/>Schools</h4>
              <p class="description">Schools use large quantities of water daily,so it is necessary to provide clean drinking water because Water is essential in education. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              
              <img src="assets/img/hospital.webp" class="img-fluid" alt="hospital">
              <h4 class="title"><br/>Hospital</h4>
              <p class="description">All Hospital requires assured water quality. A healthcare facility must be able to respond to and recover from a water supply interruption to ensure patient safety.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              
              <img src="assets/img/travelling.webp" class="img-fluid" alt="travel">
              <h4 class="title"></br>Travelling</h4>
              <p class="description">We Provide Water to different Stations so that travellers can get better qaulity and quantity of water.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/Bottle.jpg" style="height:350px; margin-top: 10px;" class="img-fluid" alt="">
            
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
             <!--  <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
              <!-- <h4 class="title"><a href="">Lorem Ipsum</a></h4> -->
              <h1><center><p class="description"><font size="5">Our Mission is to deliver clean water at the tap of a button.</p></h1></center>
            </div>

            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
             <!--  <h4 class="title"><a href="">Nemo Enim</a></h4> -->
              <h1><center><p class="description"><font size="3">Portable water being one of the most critical needs of mankind next to oxygen triggered our journey
              to deliver clean & hygenic drinking water at the doorstep of every resident at an affordable price, quality & timely service.</p></h1></center></font>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>Water has been an integral necessity for any living being in this planet. So the requirement and availability of clean water 
          has been a major challenge today. So our aim is to provide a platform for people to order clean water from multiple distribution channels</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <br/>
            <img src="assets/img/tempo.png" class="img-fluid" alt="transparent_png" style="height:225px">
          </div>
          <div class="col-md-7 pt-4">
            <h3><br/><br/>All  Citizens can utilize it to make orders of clean water for their needs.</h3>
           
            <ul>
              <li><i class="bi bi-check"></i> Easily availabe at the doorstep.</li>
              <li><i class="bi bi-check"></i> 24x7 Availabe .</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/bisleri.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Different sizes of bottle available,</h3>
            <p class="fst-italic">
              We provide all types of bottles of water to fulfill the requirement of the user,
            </p>
            <p class="fst-italic"> 
              User can order any types of bottle as per their requirement and can also easily cancel the order.
            </p>
          </div>
        </div>

              </div>
    </section><!-- End Features Section -->

 <section class="pricing section-bg" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>We connect directly with our distributors to provide products at an economic price.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box col-auto">
            <h3>10 Ltr Bottle</h3>
            <h4>₹40</h4>
            <img src="assets/img/10ltr.jpg" class="img-fluid" alt="">
            <div class="col-lg-12 ol-auto">
            <button class="btn btn-lg btn-success text-center" style="background-color:#9ac0fc;height:50px;"  type="submit"><a href="team.php">Buy Now</a></button>
            </div>
          </div>

          <div class="col-lg-4 box featured col-auto">
            <h3>20 Ltr Bottle</h3>
            <h4>₹70</h4>
            <img src="assets/img/20ltr.jpg" class="img-fluid" alt="">
            <div class="col-lg-12 ol-auto">
            <button class="btn btn-lg btn-success text-center" style="background-color:#9ac0fc;height:50px;"  type="submit"><a href="team.php">Buy Now</a></button>
            </div>
          </div>

          <div class="col-lg-4 box col-auto">
            <h3>5 Ltr Bottle</h3>
            <h4>₹30</h4>
            <img src="assets/img/5ltrbailey.jpg" class="img-fluid" alt=""><br/><br/>
            <div class="col-lg-12 ol-auto">
            <button class="btn btn-lg btn-success text-center" style="background-color:#9ac0fc;height:50px;"  type="submit"><a href="team.php">Buy Now</a></button>
            </div>
          </div>

        </div>

      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              Athwa Lines, Dumas Rd<br>
              Surat<br><br>
              <strong>Phone:</strong> 1800 757 1644<br>
              <strong>Email:</strong> support@wdsmcorp.com<br>
            </p>

          </div>

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>About WDMS</h3>
            <p>A webplatform set to provide clean and hygenic drinking water to every part of the country.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>WDMS</span></strong>. All Rights Reserved
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>