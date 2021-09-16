<?php
session_start();
include_once('connection.php');
if (isset($_SESSION['username']))
  {
    $email=$_SESSION['username'];
    
    // $query ="select a.Cart_Id,a.Email,a.Status, b.Bottle_Category, b.litre, b.Price, b.image from add_to_cart as a, bottles_details as b where a.bid = b.bid and a.Email = '$email'";

    $query = "SELECT b.bid,b.Bottle_Category,b.litre,b.Price,b.image FROM bottles_details as b RIGHT JOIN invoice_items as a ON a.bid = b.bid WHERE a.Status=0";

    $sql = mysqli_query($conn,$query);
     
     
  }
  else
  {
    header('location:login.php');
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
  <br><br>
  <main id="main">
    <center>
<?php include_once "header.php";?>
    

      

        <form action="buy_now.php" method="post" >
          <div class="row">

        <?php 
           while ($row=mysqli_fetch_array($sql)) 
        {
          
        ?>
          <br>
          <div class="col-sm-3">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $row['image'] ?>" height="200"  width="100" alt="Card image cap">
            <div class="card-body">
              
              <center><h5 class="card-title">Price -  <?php  echo $row['Price'] ?></h5></center>
              <center><input class="card-text" type="number" name="quantity[]" value=1 placeholder="Quantity"><center>
          
            
                <center><h5   class="card-title">BID -  <?php $bid=$row['bid']; echo $row['bid'] ?></h5></center>
                <center>

                  <!-- <input class="card-text  btn btn-primary" type="submit" name="Delete" value="Delete"><center> -->
                   <input type="hidden" name="bottle_id[]" value="<?php echo $row['bid']; ?>">
                   
                   <a href="?del_bid=<?php echo $row['bid']; ?>" class="btn btn-primary">Delete</a>

          </div>
        </div>
        <br>
      </div>


    <?php
      } 
     ?>
   </div>

<br>
  
  <input type="submit" name="buy_now" value="Buy Now" class="btn btn-primary" />

  </form>


</center>

  


  </main><!-- End #main -->

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
    if(isset($_REQUEST['del_bid']))
    {
      $b=$_REQUEST['del_bid'];
      $query ="delete from invoice_items where bid='$b'";
      $sql = mysqli_query($conn,$query);
      if($sql)
      {
        ?>
<script type="text/javascript">
          window.location="add_to_cart.php";
        </script>
        <?php
          //header("location:add_to_cart.php");
      }
      else{
          echo"<script>alert('something went wrong ')</script>;";
      }

    }

    if(isset($_REQUEST['bidd']))
    {
      

    }

?>


