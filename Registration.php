<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WDMS - Registration</title>
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
  

  
    
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" >
      <div class="container" >

<div class="col-lg-6" style="margin-left: 250px;border:3px; border-style:solid; box-shadow: 5px 10px;  border-color:#007bff; padding: 1em";>

            <form method="post"  enctype = "multipart/form-data" class="contact-form">
              <div class="row">
                <center><h2 style="color:#007bff">Registration</h2></center>
                <div class="col-md-6 form-group">
                 <br/> <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                 <br/> <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="state" class="form-control" id="state" placeholder="State" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
                </div>
              </div>
              </br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="area" class="form-control" id="area" placeholder="Area" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Pincode" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
              </div>
              
              
              
              
              <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="sendreg">Register</button></div>-->
              <div class="col-md-12">
                    <center><input type="submit" name ="sendreg" value="Register" class="btn btn-primary py-2 px-4"></center>
              </div>
            </form>
          </div>
        </div>
      </section>

  

  <!-- ======= Footer ======= --><!--
     <br/><br/>
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
              Surat <br><br>
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

  
  if(isset($_POST['sendreg']))
  {
  $na = $_POST['name'];
  $ph = $_POST['phone'];
  $em = $_POST['email'];
  $pa = $_POST['password'];
  $st = $_POST['state'];
  $ci = $_POST['city'];
  $ar = $_POST['area'];
  $pi = $_POST['pincode'];
  $ad = $_POST['address'];

  $query ="INSERT INTO userdetails (name,phone,email,password,state,city,area,pincode,address)
  VALUES ('$na','$ph','$em','$pa','$st','$ci','$ar','$pi','$ad')";
  $sql = mysqli_query($conn,$query);
  if ($sql){
  echo '<script>alert("✅ Registration Successful. ✅")</script>'; 
  ?>
<script type="text/javascript">
window.location = "Login.php";
</script>      
    <?php
  }
  else{
    echo '<script>alert("❌ Registration Unsuccessful. Please try again. ❌")</script>';
  }
  }

?>