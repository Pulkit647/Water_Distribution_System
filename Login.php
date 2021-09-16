<?php
session_start();
if (isset($_POST['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']);
  echo '<script>alert("✅ Successfully Logged out. ✅")</script>';
  ?>
<script type="text/javascript">
window.location = "index.php";
</script>      
    <?php
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WDMS - Login</title>
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
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  
<?php  if (isset($_SESSION['username'])) { ; ?>
  <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" >
    <div class="col-lg-8" style="margin-left: 250px; style=margin-left: 250px;border:3px; border-style:solid; box-shadow: 5px 10px;  border-color:#007bff; padding: 1em">
      <center><h3>Please use this button below to log out and exit the session. </h3></center><br><br>
        <form class="contact-form" method="post" enctype = "multipart/form-data">
        <div class="row form-group">
                <div class="col-md-12">
        <center><input type="submit" name ="logout" value="Logout" class="btn btn-primary py-2 px-4"></center>
        </div>
                </div>
        </form></div></section>
        <?php } else {?>

  <main id="main">
    

<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" >
      <div class="container" >

<div class="col-lg-6" style="margin-left: 250px; style=margin-left: 250px;border:3px; border-style:solid; box-shadow: 5px 10px;  border-color:#007bff; padding: 1em">
            <form method="post"  enctype = "multipart/form-data" class="contact-form">
              <div class="row">
                <center><h2 style="color:#007bff">Login</h2></center>
                
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </br>
              
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>
              </br>
              

                
              <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
              <center><input id="login" type="submit" name ="signin" value="Login" class="btn btn-primary py-2 px-4"></center>
              </form>

            
            <div class="col-lg-12">

              <br><br><p><a href="Forget.php">Forget Password?</a>


              <a href="Registration.php"style="margin-left: 40%;">Create New Account</a>  </p>

              </div>
                
            
             <!-- </div>
              </form>-->
              </div>
          </div>

      </section><?php } ?>

  </main><!-- End #main --><br><br><br><br>

  <!-- ======= Footer ======= -->
  <!--
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
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
  </footer>-->


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
<?php
  include_once('connection.php');
  
  if(isset($_POST['signin'])){
  $el=$_POST['email'];
  $pd=$_POST['password'];

  $query = "SELECT * FROM userdetails WHERE email='$el' and password='$pd'";
  $result = mysqli_query($conn,$query);
  $count = mysqli_num_rows($result);
  if ($count >= 1) {
    $_SESSION['username'] = $el;
    $getid = "SELECT user_id FROM userdetails WHERE email='$el'";
    $id = mysqli_query($conn,$getid);
    $row = mysqli_fetch_array($id);
    $_SESSION['id'] = $row['user_id'];
    echo '<script>alert("✅ Successfully Logged in. ✅")</script>';
    ?>
<script type="text/javascript">
window.location = "index.php";
</script>      
    <?php
  } else {
    echo '<script>alert("❌ Cannot Login. Invalid credentials or not registered. ❌")</script>';
  }
}

?>