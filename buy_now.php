<?php
session_start();
include_once "connection.php";
$bottle_id = [];
$quantity = [];
if(isset($_SESSION['username']))
{
      $email=$_SESSION['username']; 
      if(isset($_POST['bottle_id']) && isset($_POST['quantity']))
      {
        $GLOBALS['bottle_id']=$_POST['bottle_id'];
      
       $GLOBALS['quantity']=$_POST['quantity'];
        $total=0; 

        foreach (array_combine($bottle_id, $quantity)  as $bid=>$quan )
        {
          
            $qry="select Price from bottles_details where bid='$bid'";
            $sql=mysqli_query($conn,$qry);
            while($row=mysqli_fetch_array($sql))
            {
               
              $total=$total + $quan * $row['Price'];
               
            }

              
          
        }

      }
       

        ?>

            <center><h2 style="margin-top:7%;">Total Price Payable - : <?php   echo $total?> </h2></center>
            <?php
    
      
    
  }
    else
    {
      header('location:Login.php');
    }

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
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>



</div>



    </div>
  </form>
  </main><!-- End #main -->


<div>
<?php include_once "header.php";

?>
<form target="_blank" action="invoice.php" method="post">
  <?php
      
//foreach (array_combine($bottle_id, $quantity) as $value=>$value2 ) 
  $count = count($_POST['quantity']);
  for($i=0; $i<$count; $i++)
{
  ?>
  <input type="hidden" name="txt_bid[]" value=" <?php echo $_POST['bottle_id'][$i]; ?>;"/>
  <input type="hidden" name="txt_quantity[]" value=" <?php echo $_POST['quantity'][$i] ?>;"/>

  <?php
    
}

  ?>

  
<?php
include_once"connection.php";
        $qry="select Name,Phone,State,City,Area,Address,Pincode from userdetails where Email='$email'";
        $sql = mysqli_query($conn,$qry);
        while ($row=mysqli_fetch_array($sql)) 
        { 

          ?>
            <div class="card card-body" style="margin-top: 5%;">
            
            <br><center><h5 class="card-title">Name -  <?php  echo $row['Name'] ?> </h5></center>
            <center><h5 class="card-title">Phone -  <?php  echo $row['Phone'] ?> </h5></center>
            <center><h5 class="card-title">State -  <?php  echo $row['State'] ?> </h5></center>
            <center><h5   class="card-title"> City - <?php echo $row['City'] ?></h5></center>
              <center><h5   class="card-title">Area - <?php echo $row['Area'] ?></h5></center>
              <center><h5   class="card-title"> Address - <?php echo $row['Address'] ?></h5></center>
              <center><h5   class="card-title"> Pincode - <?php echo $row['Pincode'] ?></h5></center>
              <center><input type="submit" name="Continue" value="Continue" class="btn btn-primary" /></center>
            

          
          <?php
        }

?>  
  </form>
</div>






  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" style="margin-top: 2%;"><br>

    
    <div class="footer-top" >
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
<?php


?>



