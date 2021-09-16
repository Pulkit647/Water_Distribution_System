<?php
session_start();
include_once('connection.php');

if(isset($_POST['ordersub']))
{
  if (isset($_SESSION['username']))
  {

     $email= $_SESSION['username'];
     $id=$_POST['bottle_id']; 
     $fetchiid ="select Cart_Id from invoice_items where bid='$id' and Status=0";
     
     if($sql1=mysqli_query($conn,$fetchiid))
     {
        $rowcount=mysqli_num_rows($sql1);
        if($rowcount == 0)
        {
            $query ="INSERT INTO invoice_items (bid)
            VALUES ('$id')";
            $sql = mysqli_query($conn,$query);
            if($sql)
            {
              echo "<script>alert('✅ Bottle added succesfully. ✅')</script>;";
            }
            else
            {
                echo "<script>alert('❌ Something went wrong. ❌')</script>;";
            }
        }else
        {
         echo "<script>alert('✅ Already added in cart. ✅')</script>;";
        }
     }

  }else{
    header('location:login.php');
  }
  
  

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
<?php include_once "header.php";?>
  <main id="main">
    <div class="container">
    <br/>
  <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-6">
                            <form class="card card-sm" method="post">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h1 text-body"></i>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span>Search by Category</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <select name="Category">
                                      <option value="select">--Brands--</option>
                                      <option value="Kinely">Kinely</option>
                                      <option value="Bisleri">Bisleri</option>
                                      <option value="AquaFina">AquaFina</option>
                                      <option value="Baily">Baily</option>
                                  </select>
                                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <!--end of col-->
                                    <div class="col-auto">
                                      <input type="submit" class="btn btn-lg btn-success text-center" name="search" value="Search" style="background-color: #9ac0fc;"  >
                                        <!-- <button class="btn btn-lg btn-success text-center" name="search" style="background-color: #9ac0fc;" type="submit">Search </button> -->
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div><br><br><br><br>
<center>

<?php
include_once('connection.php');
  if(isset($_POST['search']))
  {
    if(!empty($_POST['Category']))

    {
      $selected=$_POST['Category'];
      $query="select bid,Price,litre,image from bottles_details where Bottle_Category='$selected'";
      $sql = mysqli_query($conn,$query);
      echo "<table style='margin-right:40%;'>";
      echo "<div class='container'>";
      echo "<div class='row'>";
      while ($row=mysqli_fetch_array($sql)) 
      { 
        ?>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image cap" height="220" width="150">
              
              <form method="post">
                  <input type="hidden" name="bottle_id" value="<?php echo $row['bid']; ?>">
                  <div class="card-body">
                    <span style="font-size: 25px; font-weight: bolder;">Price</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="card-text" ><?php echo $row['Price'] ?></span><br>
                    <span style="font-size: 25px; font-weight: bolder;">Litre</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="card-text"><?php echo $row['litre'] ?></span><br><br>
                      <input type="submit" name="ordersub" value="Add to Cart" class="btn btn-primary"/>
                </form>
              </div>
            </div>
          </div>
         
        <?php
          
          
          // echo"<td><img src='$row[image]' height='100' width='100'/>  </td>";
          
        } 
        echo "</div>";
        echo "</div>";
        echo "</table>";

    }

  }
    
?>

</center>
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" >
      <div class="container" >

<!-- <div class="col-lg-6" style="margin-left: 250px;">
            <form action="forms/contact.php"  method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="contact" id="contact" placeholder="Your Contact" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="street" class="form-control" id="street" placeholder="Street" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="area" id="area" placeholder="Area" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="landmark" id="landmark" placeholder="Landmark" required>
              </div>
              </br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="ltr" id="ltr" placeholder="Litre" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Any Comments" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Place Order</button></div>
            </form> -->
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



</html


