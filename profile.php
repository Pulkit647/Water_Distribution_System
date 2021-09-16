<?php
session_start();
include_once('connection.php');
$el = $_SESSION['username'];
echo $username;
$uid = $_SESSION['id'];
$query = "SELECT * FROM userdetails WHERE email='$el'";
$result = mysqli_query($conn,$query);
$id = $name = $username = $email = $state = $city = $area = $phone = $landmark = $password =null;
if($result) {
  $row = mysqli_fetch_row($result);
  $id = $row[0];
  $name = $row[1];
  $phone = $row[2];
  $email = $row[3];
  $password = $row[4];
  $state = $row[5];
  $city = $row[6];
  $area = $row[7];
  $pincode = $row[8];
  $address = $row[9];
}
else{
  echo 'Could not run query: ' . mysql_error();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WDMS - Profile</title>
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
  <style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
</head>

<body>

<header id="header" class="fixed-top d-flex align-items-center ">

    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>WDMS</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active " href="team.php">Order Now</a></li>
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
               <li><a href="#">My Cart</a></li>
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
  <br><br><br><br><br><br>
  

  
    
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" >
      <div class="container" >

<div class="col-lg-6" style="margin-left: 250px;border:3px; border-style:solid; box-shadow: 5px 10px;  border-color:#007bff; padding: 1em";>

            <form method="post"  enctype = "multipart/form-data" id="profile-form">
              <div class="row">
                <center><h2 style="color:#007bff">Profile Details</h2></center>
                <br>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="name">Name: </label><input type="text" name="name" class="form-control" id="name" placeholder="Name"  value="<?php echo htmlspecialchars($name); ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="phone">Phone: </label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"  value="<?php echo htmlspecialchars($phone); ?>">
                </div>

              <div class="form-group mt-3">
              <label for="email">Email: </label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email"  value="<?php echo htmlspecialchars($email); ?>">
              </div>

                <div class="form-group mt-3">
                  <label for="username">Password: </label> <input type="text" class="form-control" name="password" id="password" placeholder="Password"  value="<?php echo htmlspecialchars($password); ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="state">State: </label>
                  <input type="text" name="state" class="form-control" id="state" placeholder="State"  value="<?php echo htmlspecialchars($state); ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="city">City: </label>
                  <input type="text" class="form-control" name="city" id="city" placeholder="City"  value="<?php echo htmlspecialchars($city); ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="area">Area: </label>
                  <input type="text" name="area" class="form-control" id="area" placeholder="Area"  value="<?php echo htmlspecialchars($area); ?>">
                </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
              <label for="pincode">Pincode: </label>
                <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Pincode"  value="<?php echo htmlspecialchars($pincode); ?>">
              </div>
              <div class="form-group mt-3">
              <label for="landmark">Address: </label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Address"  value="<?php echo htmlspecialchars($address); ?>">
              </div>
              <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="sendreg">Register</button></div>-->
              <div class="col-md-12">
                    <center><input type="submit" name ="updatePro" value="Update" class="btn btn-primary py-2 px-4"></center>
              </div>
            </div>
            </form>
          </div>
        </div>
      </section>

<br><br>
<center><h2 style="color:#007bff">Order Details</h2></center>

 <?php

$queryr = "SELECT * FROM invoice WHERE user_id='$uid'";
$resultr = mysqli_query($conn,$queryr);


if ($resultr->num_rows > 0) {
  ?>
  <table class="styled-table">
    <tr class="active-row">
  <?php
  echo "<th>ID</th><th>UID</th><th>Date</th></tr>";
  // output data of each row
  while($row = $resultr->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["user_id"]. "</td><td> " . $row["date_ts"]. "</td></tr>";
  }
  echo "</table>";
} else {
}

?>

  <br><br>

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
  if(isset($_POST['updatePro']))
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
    if($na!=$name || $ph!=$phone || $em!=$email || $pa!=$password || $st!=$state || $ci!=$city || $ar!=$area || $pi!=$pincode || $ad!=$address)
    {
      $query ="UPDATE userdetails SET name='$na', phone='$ph',email='$em',password='$pa',state='$st',city='$ci',area='$ar',pincode='$pi', address='$ad' WHERE user_id=$id";
      $sql = mysqli_query($conn,$query);
      if ($sql){
        if($em!=$email){
          session_destroy(); 
          unset($_SESSION['username']);
          echo '<script>alert("✅ Profile Updated Successfully and user is logged out. Please log in with your updated email.✅")</script>'
          ?>
          <script type="text/javascript">
          window.location = "Login.php";
          </script>      
          <?php
        }
        elseif($pa!=$password){
          session_destroy(); 
          unset($_SESSION['username']);
            echo '<script>alert("✅ Profile Updated Successfully and user is logged out. Please log in with your updated password.✅")</script>'
          ?>
          <script type="text/javascript">
          window.location = "Login.php";
          </script>      
          <?php
        }
        else{
          echo '<script>alert("✅ Profile Updated Successfully. ✅")</script>';
          ?>
          <script type="text/javascript">
          window.location = "index.php";
          </script>      
          <?php
        }
      }
      else{
        echo '<script>alert("❌ Failed to update profile. Please try again. ❌")</script>';
      }
    }
    else {
      echo '<script>alert("❌ You need modify at least one field to update the profile. ❌")</script>';
    }
  }
?>