  <!-- ======= Header ======= -->
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
          <li><a  href="about.php">About</a></li>
          <li><a  href="team.php">Order Now</a></li>
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
  </header>
  <!-- End Header -->