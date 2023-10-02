<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "geo";
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$pas=$_SESSION["pas"];
 $sqll= "SELECT user FROM signup WHERE pass = '$pas' ";
 $result = mysqli_query($conn,$sqll);
 $row = mysqli_fetch_array($result);
 $user=$row['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Geologist</title>
  <link rel="icon" type="image/x-icon" href="img/ro.png">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/ro.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="index.html"> Geologist</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
             <!----- <li><a class="nav-link scrollto" href="#">News</a></li>--->
              <li><a class="nav-link scrollto" href="#service">Resorces</a></li>
              
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

          <a href="#about" class="get-started-btn scrollto">Get Started</a>
          <p style="font-size:150%;margin-top:1%;margin-right:-10%;color:white;"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo "$user";?></p>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Be a space Geologist</h1>
          <h2>"Exploring the Earth's secrets, one rock at a time."</h2>
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Welcome to the world of geology, where the Earth's history is written in stone. Our resident geologist is your guide to uncovering the fascinating stories hidden beneath the surface of our planet.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              <b>A Journey Through Geological Wonders <br></b>
              Geologist's  has spent years exploring diverse geological landscapes, from rugged mountain ranges to serene coastal shores. Through extensive fieldwork and research, they have gained a deep understanding of the processes that have shaped our planet over millions of years.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Remote Sensing Techniques</li>
              <li><i class="ri-check-double-line"></i> SAR data - Synthetic Aperture Radar (SAR)</li>
              <li><i class="ri-check-double-line"></i> Gravity Recovery and Climate Experiment (GRACE)</li>
              <li><i class="ri-check-double-line"></i>HLS Data from Earthdata Search</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              NASA Earthdata is a comprehensive system that provides access to a wealth of Earth science data and information collected by various NASA missions and satellites. This data is essential for studying Earth's environment, climate, and natural processes.
            </p>
            <a href="https://search.earthdata.nasa.gov/search" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Resources</span>
          <h2>Resources</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/remote sensing2.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Remote Sensing</a></h3>
              <p>Remote sensing is a technology that captures information about Earth's surface and atmosphere from a distance, often using satellites, aircraft, or drones equipped with specialized sensors.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/sar_data.jpg" alt="" class="img-fluid" >
              </div>
              <h3><a href="service-details.html" class="stretched-link">SAR Data</a></h3>
              <p>Synthetic Aperture Radar (SAR) is a remote sensing technology that uses radar signals to create high-resolution images of the Earth's surface. SAR data is particularly valuable because it can be collected day or night and is not affected by cloud cover. </p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
              <a href="my.html">
                <img src="assets/img/gra (1).jpg" alt="" class="img-fluid" >
                </a>
              </div>
              <h3><a href="my.html" class="stretched-link">GRACE</a></h3>
              <p>GRACE (Gravity Recovery and Climate Experiment) is a pair of Earth-observing satellites launched by NASA and the German Aerospace Center (DLR) to measure changes in Earth's gravitational field</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
            <a href="ASF DAAC _ Earthdata.html">    <img src="assets/img/alaska.jpg" alt="" class="img-fluid"></a>
              </div>
              <h3><a href="service-details.html" class="link">Alaska</a></h3>
              <p>Alaska's satellite imagery offers an unparalleled view of its breathtaking landscapes, from rugged mountains to pristine wilderness, helping us understand and appreciate its natural beauty from above.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/arset.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">ARSET</a></h3>
              <p>The Applied Remote Sensing Training (ARSET) program empowers the global community through remote sensing training. Participants learn how to use NASA Earth data and models for environmental management and decision support through online and in person training.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
               <a href="https://search.earthdata.nasa.gov/search"> <img src="assets/img/earth.jpg" alt="" class="img-fluid"></a>
              </div>
              <h3><a href="service-details.html" class="link">Earth Data</a></h3>
              <p>Earthdata is the home for full and open access to NASA's Earth science data collections, accelerating scientific advancement for societal benefit.</p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    

   

   

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h3>NASA have achieved so far</h3>
          <p>"Turning dreams into reality, one milestone at a time."</p>
        </div>

        <div class="row counters position-relative">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="17960" data-purecounter-duration="1" class="purecounter"></span>
            <p>Employees</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="155" data-purecounter-duration="1" class="purecounter"></span>
            <p>Satellites</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="166" data-purecounter-duration="1" class="purecounter"></span>
            <p>Missions</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1958" data-purecounter-duration="1" class="purecounter"> </span>
            <p>Nasa Start </p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
      </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Geologist</h3>
      <p>"Connect with Us: Stay updated with our latest news and offerings by following us on social media. You can find us on"</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Geologist</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/ -->
        Designed by <!----<a href="https://bootstrapmade.com/">BootstrapMade</a>--->
        VHNSNC TEAM
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>