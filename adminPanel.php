<?php
ini_set('display_errors','off');
session_start();

include('connection.php');

$type = $_SESSION['type'];

if($type == "Admin"){
  $adminID = $_SESSION['name'];
  $q="SELECT * FROM admins WHERE AdminID = '$adminID'";
  $sql=mysqli_query($conn,$q);
  $row=mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>IEEE BVM SB | BVM Engineering College</title>
    <link rel = "icon" href =  "images/IEEE Blue Kite.png" type = "image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style>
    * {
      /* border: 1px dotted green; */
    }
  </style>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">IEEE BVM SB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- END nav -->

    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Admin Control Panel</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <!-- <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> BVM Engineering college
                  Vallabh Vidhyanagar
                  Anand - 388120 </p>
          </div>

          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">ieeebvm16@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website:</span> <a href="#">ieeebvmsb.com</a></p>
          </div>
        </div> -->
        <h2 align="center">Welcome <?php echo $row['Name']; ?> </h2>
        <br><br>
        <div class="row block-9">
          <!-- <div class="col-md-4 pr-md-5"></div> -->
          <div class="col-md-12 pr-md-5" align="center">
              <div class="form-group">
                <a href="addEventPage.php"><input type="submit" value="Add Event" class="btn btn-primary py-3 px-5"></a>
                &nbsp;&nbsp;&nbsp;
                <a href="updateEventPage.php"><input type="submit" value="Modify Event" class="btn btn-primary py-3 px-5"></a>
              </div>
              <br>
              <!-- <div class="form-group">
              </div> -->
              <br>
          </div>
        </div>
      </div>
    </section>



  <footer class="footer">

    <div class=" text-dark font-small bg-light pt-4">
      <div class="container-fluid text-center text-md-l">
        <div class="container-fluid m-0 p-0 row">
          <div class="col-md-6 mt-md-0 mt-3 row ft-content">
            <h5 class="text-uppercase font-weight-bold col-12" style="height: fit-content;">External Links</h5>
            <div class="container-fluid m-0 p-0  col-12  ">
              <ul class="border-right  ">
                <ul><a href="https://www.ieee.org/" target="_blank">IEEE</a></ul>
                <ul><a href="https://ieee-npss.org/" target="_blank">IEEE NPSS</a></ul>
                <ul><a href="https://bvmengineering.ac.in/" target="_blank">BVM</a></ul>
              </ul>
            </div>
          </div>

          <div class="col-md-5 mb-md-0 mb-3 ft-content">
            <h5 class="text-uppercase font-weight-bold col-12 ">CONTACT US</h5>
            <p >Email: ieeebvm16@gmail.com</p>
            <p>Address: BVM Engineering college
              Vallabh Vidhyanagar
              Anand - 388120</p>
          </div>

          <div class="col-md-1 mb-md-0 mb-3">
            <div class="row">
              <div class="col-md-6">
               <a href="https://facebook.com/ieeebvm/" class="fa fa-social fa-facebook hvr-pop"></a>
              </div>
              <div class="col-md-6">
               <a href="http://bit.ly/bvmsbYT" class="fa fa-social fa-youtube hvr-pop"></a>
              </div>
            </div>

            <div class="row">
             <div class="col-md-6">
              <a href="https://linkedin.com/in/ieee-bvm-sb-55928918b/" class="fa fa-social fa-linkedin hvr-pop"></a>
             </div>
             <div class="col-md-6">
              <a href="https://t.me/ieeebvm" class="fa fa-social fa-telegram hvr-pop"></a>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6">
              <a href="https://instagram.com/ieee_bvm?igshid=r8dodh3528vy" class="fa fa-social fa-instagram hvr-pop"></a>
             </div>
             <div class="col-md-6">
              <a href="https://twitter.com/ieeebvm?s=09" class="fa fa-social fa-twitter hvr-pop"></a>
             </div>
           </div>
        </div>
      </div>

      <div class="footer-copyright text-center bg-dark text-light py-3">
        <div class="footer-copyright text-center bg-dark text-light py-3">
            &copy; <script>document.write(new Date().getFullYear())</script> Copyright Received |
            <a href="http://bvmengineering.ac.in/">IEEE BVM</a>
        </div>
    </div>
    </div>

  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#2B32B2" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/particle2.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
<?php
} else {
  echo "<script> alert('Please Login..!!!') </script>";
  header('Location: loginPage.php');
  exit();
}
?>
