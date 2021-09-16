<?php
include_once('connection.php');
session_start();
if(isset($_POST['reset']))
  {

 if(isset($_SESSION['user_mail']))
 {
    $email = $_SESSION['user_mail'];
    $newpass=$_POST['confirmpassword'];
     $query="update userdetails set Password='$newpass' where Email='$email'";
      $sql = mysqli_query($conn,$query);
      if ($sql) 
      {
          echo '<script>alert("✅ Password Updated Successfully. ✅")</script>';
           ?>
          <script type="text/javascript">
          window.location = "Login.php";
          </script>      
      <?php
      }
      else
      {
        echo '<script>alert("❌ Please Enter the password properly. ❌")</script>';
        }


}
else{

  }
}
 
//   if(isset($_POST['reset']))
//   {
//     if(isset($_POST['verify_email'])) 
//     {
//     if(isset($_SESSION[$verify_email]))
//     {
//       print_r($email = $_SESSION[$verify_email]['email']);
//       $newpass=$_POST['confirmpassword'];
//      $query = "UPDATE FROM userdetails SET Password='$newpass' WHERE email='$email'";
//      $result = mysqli_query($conn,$query);
//      $count = mysqli_num_rows($result);
//   if ($count >= 1) {
//     echo '<script>alert("✅ Password Updated Successfully. ✅")</script>';
//     ?>
 <script type="text/javascript">
// window.location = "Login.php";
// </script>      
     <?php
//   } 
//     }
//     session_destroy();
//     }
    

//   }
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Team - Moderna Bootstrap Template</title>
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

  <!-- =======================================================
  * Template Name: Moderna - v4.1.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style type="text/css">
    .error{
      color: red;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  


  <main id="main">
    

<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" >
      <div class="container" >

<div class="col-lg-6" style="margin-left: 250px;">
            <form action=""  method="post" role="form" class="php-email-form" id="reset_form">
              <div class="row">
                <center><h2 style="color:#9ac0fc">Reset Password</h2></center>
                
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="New Password" required>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Re-Enter  Password" required>
              </div>
            </br>
                
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="reset">Reset</button></div></br>
              
              </form>

          </div>
        </div>
      </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>

<script>
$("#reset_form").validate({
              rules: {
                password: "required",
                confirmpassword: {
                    equalTo: "#password"
                }
            },
            messages: {
                password: " Enter Password",
                confirmpassword: "Enter Confirm Password Same as Password"
            }
});

        /*if (validator.form()) {
            alert('Sucess');
        }*/
</script>

</body>

</html>