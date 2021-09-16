
<?php
  include_once('connection.php');
  session_start();    
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  if(isset($_POST['generateotp']))
  {
    $email = $_POST['email'];
    $query = "SELECT * FROM userdetails WHERE email='$email'";
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);
    if ($count >= 1) 
    {

        $otp = rand(100000,999999);
        
        require 'src/Exception.php';
        require 'src/PHPMailer.php';
        require 'src/SMTP.php';
        
        $mail = new PHPMailer();
        $mail->isSMTP(); 
        $mail->Host = "smtp.gmail.com"; 
        $mail->Port = 587  ; // typically 587 
        $mail->SMTPSecure = 'tls'; // ssl is depracated
        $mail->SMTPAuth = true;
        $mail->Username = "";
        $mail->Password = "";
        $mail->setFrom("", "WDMS Support");
        $mail->addAddress($email);
        $mail->Subject = 'WDMS Password Reset OTP';
      //  $mail->msgHTML("test body"); // remove if you do not want to send HTML email
        //$mail->AltBody = "pulkit's first mail";
        $mail->Body = $otp;

        $mail->send();
        
              try 
              {
                $mail->send();
                //echo "Message has been sent successfully"; 
                $arr['email'] = $email;
                $arr['otp'] = $otp;
                $_SESSION[$email] = $arr;
                header('location:Verifyotp.php');
            } 
            catch (Exception $e)
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }



    }
    else{
      echo '<script>alert("❌ EMAIL NOT MATCH ❌")</script>';
    }


  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WDMS - Forget</title>
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
            <form  action=""  method="post" role="form" class="php-email-form" id="myform">
              <div class="row">
                <center><h2 style="color:#9ac0fc">Forget Password</h2></center>
                
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </br>
                
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="generateotp">Generate OTP</button></div></br>
              
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
$("#myform").validate({
  rules: {
    field: {
      required: true,
      email: true,
       //regex: /^\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
    }
  }
});
</script>

</body>

</html>